/* global Stripe, wpforms, wpforms_stripe */

/**
 * WPForms Stripe Payment Element function.
 *
 * @since 2.10.0
 */
'use strict';

var WPFormsStripePaymentElement = window.WPFormsStripePaymentElement || ( function( document, window, $ ) {

	/**
	 * Original Submit Handler.
	 *
	 * @since 2.10.0
	 *
	 * @type {Function}
	 */
	let originalSubmitHandler;

	/**
	 * Public functions and properties.
	 *
	 * @since 2.10.0
	 *
	 * @type {object}
	 */
	let app = {

		/**
		 * Stripe object.
		 *
		 * @since 2.10.0
		 *
		 * @type {object}
		 */
		stripe: null,

		/**
		 * Stripe Elements object.
		 *
		 * @since 2.10.0
		 *
		 * @type {object}
		 */
		elements: null,

		/**
		 * Stripe Payment Element object.
		 *
		 * @since 2.10.0
		 *
		 * @type {object} paymentElement Payment Element object.
		 */
		paymentElement: null,

		/**
		 * Flag to detect when elements were modified.
		 *
		 * @since 2.10.0
		 *
		 * @type {boolean} elementsModified True if modified.
		 */
		elementsModified: false,

		/**
		 * Stripe Link Element object.
		 *
		 * @since 2.10.0
		 *
		 * @type {object} linkElement Payment Element object.
		 */
		linkElement: null,

		/**
		 * Flag for destroyed link element.
		 *
		 * @since 2.10.0
		 *
		 * @type {boolean} linkDestroyed Flag for destroyed link element.
		 */
		linkDestroyed: false,

		/**
		 * Selected payment element type.
		 *
		 * @since 2.10.0
		 *
		 * @type {string} paymentType Payment element type.
		 */
		paymentType: '',

		/**
		 * Number of page locked to switch.
		 *
		 * @since 2.10.0
		 *
		 * @type {int}
		 */
		lockedPageToSwitch: 0,

		/**
		 * Payment method ID.
		 *
		 * @since 2.10.0
		 *
		 * @type {string}
		 */
		paymentMethodId: '',

		/**
		 * Form total amount.
		 *
		 * @since 2.10.0
		 *
		 * @type {string}
		 */
		total: '',

		/**
		 * Start the engine.
		 *
		 * @since 2.10.0
		 */
		init: function() {

			app.stripe = Stripe( // eslint-disable-line new-cap
				wpforms_stripe.publishable_key,
				{
					'locale': wpforms_stripe.data.element_locale,
					'betas': [ 'elements_enable_deferred_intent_beta_1' ],
				}
			);

			$( document ).on( 'wpformsReady', function() {

				$( '.wpforms-stripe form' ).each( app.setupStripeForm );
			} );

			$( document )
				.on( 'wpformsBeforePageChange', app.pageChange )
				.on( 'wpformsAmountTotalCalculated', app.updateElementsTotalAmount )
				.on( 'wpformsProcessConditionalsField', function( e, formID, fieldID, pass, action ) {
					app.processConditionalsField( formID, fieldID, pass, action );
				} );
		},

		/**
		 * Setup and configure a Stripe form.
		 *
		 * @since 2.10.0
		 */
		setupStripeForm: function() {

			const $form = $( this ),
				$stripeDiv = $form.find( '.wpforms-field-stripe-credit-card' );

			if ( ! $stripeDiv.find( '.wpforms-field-row' ).length ) {
				return;
			}

			let	validator = $form.data( 'validator' );

			if ( ! validator ) {
				return;
			}

			// Store the original submitHandler.
			originalSubmitHandler = validator.settings.submitHandler;

			// Replace the default submit handler.
			validator.settings.submitHandler = app.submitHandler;

			$form.on( 'wpformsAjaxSubmitActionRequired', app.confirmPaymentActionCallback );

			if ( $stripeDiv.hasClass( 'wpforms-conditional-field' ) ) {
				return;
			}

			app.setupPaymentElement( $form );
		},

		/**
		 * Handle confirm payment server response.
		 *
		 * @param {object} e Event object.
		 * @param {object} json Data returned form a server.
		 *
		 * @since 2.10.0
		 */
		confirmPaymentActionCallback: async function( e, json ) {

			if ( ! json.success || ! json.data.action_required ) {
				return;
			}

			const $form = $( this );

			let redirectUrl = new URL( window.location.href );

			await app.stripe.confirmPayment(
				{
					clientSecret: json.data.payment_intent_client_secret, // eslint-disable-line camelcase
					confirmParams: {
						return_url: redirectUrl.toString(), // eslint-disable-line camelcase
						payment_method: app.paymentMethodId, // eslint-disable-line camelcase
					},
					redirect: 'if_required',
				}
			).then( function( result ) {

				app.handleConfirmPayment( $form, result );
			} );
		},

		/**
		 * Callback for Stripe 'confirmPayment' method.
		 *
		 * @param {jQuery} $form Form element.
		 * @param {object} result Data returned by 'handleCardPayment'.
		 *
		 * @since 2.10.0
		 */
		handleConfirmPayment: function( $form, result ) {

			if ( result.error ) {

				app.displayStripeError( $form, result.error.message );

				return;
			}

			if ( result.paymentIntent && result.paymentIntent.status === 'succeeded' ) {

				$form.find( '.wpforms-stripe-payment-method-id' ).remove();
				$form.find( '.wpforms-stripe-payment-intent-id' ).remove();
				$form.append( '<input type="hidden" class="wpforms-stripe-payment-intent-id" name="wpforms[payment_intent_id]" value="' + result.paymentIntent.id + '">' );
				wpforms.formSubmitAjax( $form );

				return;
			}

			app.formAjaxUnblock( $form );
		},

		/**
		 * Setup, mount and configure Stripe Payment Element.
		 *
		 * @since 2.10.0
		 *
		 * @param {jQuery} $form Form element.
		 */
		setupPaymentElement: function( $form ) {

			if ( app.paymentElement ) {
				return;
			}

			app.elements = app.stripe.elements(
				{
					currency: wpforms.getCurrency().code.toLowerCase(),
					mode: 'payment',
					amount: 1000,
					loader: 'always',
					locale: wpforms_stripe.data.element_locale,
					appearance: app.getElementAppearanceOptions( $form ),
					// eslint-disable-next-line camelcase
					payment_method_types: [ 'card', 'link' ],
				} );

			app.initializePaymentElement( $form );

			app.linkEmailMappedFieldTriggers( $form );

			// Update total amount in case of fixed price.
			wpforms.amountTotalCalc( $form );
		},

		/**
		 * Handle Process Conditionals for Stripe field.
		 *
		 * @since 2.10.0
		 *
		 * @param {string} formID  Form ID.
		 * @param {string} fieldID Field ID.
		 * @param {bool}   pass    Pass logic.
		 * @param {string} action  Action to execute.
		 */
		processConditionalsField: function( formID, fieldID, pass, action ) {

			const $form = $( '#wpforms-form-' + formID ),
				$stripeDiv = $form.find( '.wpforms-field-stripe-credit-card' );

			if (
				app.paymentElement ||
				$stripeDiv.data( 'field-id' ).toString() !== fieldID ||
				! pass ||
				action === 'hide'
			) {
				return;
			}

			app.setupPaymentElement( $form );
		},

		/**
		 * Get Element appearance options.
		 *
		 * @since 2.10.0
		 *
		 * @param {jQuery} $form Form element.
		 *
		 * @returns {object} Appearance options.
		 */
		// eslint-disable-next-line max-lines-per-function
		getElementAppearanceOptions: function( $form ) {

			// return early if custom styles are passed.
			if ( typeof window.wpformsStripePaymentElementAppearance === 'object' ) {
				return window.wpformsStripePaymentElementAppearance;
			}

			const $hiddenInput = $form.find( '.wpforms-stripe-credit-card-hidden-input' ),
				$fieldRow = $form.find( '.wpforms-field-stripe-credit-card .wpforms-field-row' );

			let	labelHide = ! $fieldRow.hasClass( 'wpforms-sublabel-hide' );

			return {
				theme: 'none',
				labels: $fieldRow.data( 'sublabel-position' ),

				variables: {
					colorPrimary: $hiddenInput.css( 'color' ),
					colorBackground: $hiddenInput.css( 'background-color' ),
					colorText: $hiddenInput.css( 'color' ),
					colorDanger: '#990000',
					fontFamily: $hiddenInput.css( 'font-family' ),
					spacingUnit: '4px',
					spacingGridRow: '8px',
					fontSizeSm: '13px',
					fontWeightNormal: '400',
					borderRadius: $hiddenInput.css( 'border-radius' ),
				},
				rules: {
					'.Input--invalid': {
						color: $hiddenInput.css( 'color' ),
						borderColor: '#cc0000',
					},
					'.Input': {
						border: '1px solid ' + $hiddenInput.css( 'border-color' ),
						borderRadius: $hiddenInput.css( 'border-radius' ),
						boxShadow: 'none',
						fontSize: $hiddenInput.css( 'font-size' ),
						padding: '6px 10px',
						lineHeight: '24px',
						transition: 'none',
					},
					'.Input:focus': {
						border: '1px solid #999',
						boxShadow: 'none',
						outline: 'none',
					},
					'.Label': {
						fontFamily: $hiddenInput.css( 'font-family' ),
						lineHeight: '1.3',
						opacity: Number( labelHide ),
						color: '#000000',
					},
					'.CheckboxInput, .CodeInput, .PickerItem': {
						border: '1px solid ' + $hiddenInput.css( 'border-color' ),
					},
					'.Tab, .Block': {
						border: '1px solid ' + $hiddenInput.css( 'border-color' ),
						borderRadius: $hiddenInput.css( 'border-radius' ),
					},
					'.Tab--selected': {
						borderColor: '#999999',
					},
					'.Action': {
						marginLeft: '6px',
					},
					'.Action, .MenuAction': {
						border: 'none',
						backgroundColor: 'transparent',
					},
					'.Action:hover, .MenuAction:hover': {
						border: 'none',
						backgroundColor: 'transparent',
					},
				},
			};
		},

		/**
		 * Initialize Payment Element.
		 *
		 * @since 2.10.0
		 *
		 * @param {jQuery} $form Form element.
		 * @param {string} email Email address.
		 */
		initializePaymentElement: function( $form, email = '' ) {

			const $fieldRow = $form.find( '.wpforms-field-stripe-credit-card .wpforms-field-row' );

			if ( app.paymentElement ) {
				app.paymentElement.destroy();
			}

			app.paymentElement = app.elements.create( 'payment', { defaultValues : { billingDetails: { email: email } } } );

			app.mountPaymentElement( $form );

			// eslint-disable-next-line complexity
			app.paymentElement.on( 'change', function( event ) {

				app.paymentType = event.value.type;

				// Destroy link element as it's not required for Google and Apple pay.
				if ( ! $fieldRow.data( 'link-email' ) ) {

					if ( event.value.type === 'google_pay' || event.value.type === 'apple_pay' ) {
						app.linkElement.destroy();

						app.linkDestroyed = true;
					} else if ( app.linkDestroyed ) {
						app.initializeLinkAuthenticationElement( $form );

						app.linkDestroyed = false;
					}
				}

				$fieldRow.data( 'type', event.value.type );

				$fieldRow.find( 'label.wpforms-error' ).toggle( event.value.type === 'card' );

				if ( event.empty ) {
					$fieldRow.data( 'completed', false );

					return;
				}

				app.elementsModified = true;

				if ( event.complete ) {
					$fieldRow.data( 'completed', true );

					return;
				}

				$fieldRow.data( 'completed', false );
			} );
		},

		/**
		 * Mount Payment Element.
		 *
		 * @since 2.10.0
		 *
		 * @param {jQuery} $form Form element.
		 */
		mountPaymentElement: function( $form ) {

			let	formId = $form.data( 'formid' ),
				paymentRowId = `#wpforms-field-stripe-payment-element-${formId}`;

			app.paymentElement.mount( paymentRowId );
		},

		/**
		 * Link Email mapped field triggers.
		 *
		 * @since 2.10.0
		 *
		 * @param {jQuery} $form Form element.
		 */
		linkEmailMappedFieldTriggers: function( $form ) {

			const $fieldRow = $form.find( '.wpforms-field-stripe-credit-card .wpforms-field-row' );

			let	formId = $form.data( 'formid' ),
				linkEmailMappedFieldId = $fieldRow.data( 'link-email' );

			if ( ! linkEmailMappedFieldId ) {

				$fieldRow.data( 'linkCompleted', false );

				app.initializeLinkAuthenticationElement( $form );

				return;
			}

			$( `#wpforms-${formId}-field_${linkEmailMappedFieldId}` ).on( 'change', function() {

				if ( $fieldRow.data( 'completed' ) ) {
					return;
				}

				// Reinitialize payment element if card data not completed yet.
				app.initializePaymentElement( $form, $( this ).val() );
			} );
		},

		/**
		 * Initialize Link Authentication Element.
		 *
		 * @since 2.10.0
		 *
		 * @param {jQuery} $form Form element.
		 */
		initializeLinkAuthenticationElement: function( $form ) {

			const $fieldRow = $form.find( '.wpforms-field-stripe-credit-card .wpforms-field-row' );

			app.linkElement = app.elements.create( 'linkAuthentication' );

			app.mountLinkElement( $form );

			app.linkElement.on( 'change', function( event ) {

				if ( event.empty ) {

					return;
				}

				app.elementsModified = true;

				if ( ! event.complete ) {
					$fieldRow.data( 'linkCompleted', false );

					return;
				}

				$fieldRow.data( 'linkCompleted', true );
			} );
		},

		/**
		 * Mount Payment Element.
		 *
		 * @since 2.10.0
		 *
		 * @param {jQuery} $form Form element.
		 */
		mountLinkElement: function( $form ) {

			let	formId = $form.data( 'formid' ),
				linkRowId = `#wpforms-field-stripe-link-element-${formId}`;

			app.linkElement.mount( linkRowId );
		},

		/**
		 * Update submitHandler for the forms containing Stripe.
		 *
		 * @since 2.10.0
		 *
		 * @param {object} form JS form element.
		 */
		// eslint-disable-next-line complexity
		submitHandler: function( form ) {

			const $form = $( form ),
				$stripeDiv = $form.find( '.wpforms-field-stripe-credit-card' ),
				$stripeRow = $stripeDiv.find( '.wpforms-field-row' );

			let	valid = $form.validate().form(),
				ccRequired = $stripeRow.data( 'required' ),
				cardFilled = ( ! $stripeRow.data( 'link-email' ) && app.elementsModified ) || $stripeRow.data( 'completed' ),
				processCard = false;

			if ( ! $stripeDiv.hasClass( 'wpforms-conditional-hide' ) ) {
				processCard = ccRequired || ( cardFilled && ! ccRequired );
			}

			if ( valid && processCard ) {
				$form.find( '.wpforms-submit' ).prop( 'disabled', true );
				$form.find( '.wpforms-submit-spinner' ).show();

				app.createPaymentMethod( $form );

				return;
			}

			if ( valid ) {
				originalSubmitHandler( $form );

				return;
			}

			$form.find( '.wpforms-submit' ).prop( 'disabled', false );
			$form.validate().cancelSubmit = true;
		},

		/**
		 * Update Elements total amount.
		 *
		 * @since 2.10.0
		 *
		 * @param {object} e Event object.
		 * @param {jQuery} $form Form element.
		 * @param {string} total Form total amount.
		 */
		updateElementsTotalAmount: function( e, $form, total ) {
			let currency = wpforms.getCurrency();

			// Save total to variable to avoid calling `amountTotalCalc` again in SubmitHandler.
			app.total = total;

			if ( ! total ) {
				return;
			}

			app.elements.update( { amount: parseInt( wpforms.numberFormat( total, currency.decimals, '', '' ), 10 ) } );
		},

		/**
		 * Confirm a setup payment.
		 *
		 * @param {jQuery} $form Form element.
		 */
		createPaymentMethod: async function( $form ) {

			if ( ! app.total ) {
				originalSubmitHandler( $form );

				return;
			}

			await app.stripe.createPaymentMethod( {
				elements: app.elements,
			} ).then( function( result ) {

				if ( result.error ) {
					app.displayStripeFieldError( $form, result.error.message );

					return;
				}

				app.paymentMethodId = result.paymentMethod.id;

				$form.append( '<input type="hidden" class="wpforms-stripe-payment-method-id" name="wpforms[payment_method_id]" value="' + app.paymentMethodId + '">' );

				originalSubmitHandler( $form );
			} );
		},

		/**
		 * Unblock the AJAX form.
		 *
		 * @since 2.10.0
		 *
		 * @param {jQuery} $form Form element.
		 */
		formAjaxUnblock: function( $form ) {

			const $submit = $form.find( '.wpforms-submit' );

			let submitText = $submit.data( 'submit-text' );

			if ( submitText ) {
				$submit.text( submitText );
			}

			$submit.prop( 'disabled', false );
			$form.closest( '.wpforms-container' ).css( 'opacity', '' );
			$form.find( '.wpforms-submit-spinner' ).hide();
		},

		/**
		 * Display a generic Stripe Errors.
		 *
		 * @param {jQuery} $form Form element.
		 * @param {string} message Error message.
		 *
		 * @since 2.10.0
		 */
		displayStripeError: function( $form, message ) {

			wpforms.clearFormAjaxGeneralErrors( $form );

			wpforms.displayFormAjaxErrors( $form, message );

			app.formAjaxUnblock( $form );
		},

		/**
		 * Display a field error using jQuery Validate library.
		 *
		 * @param {jQuery} $form Form element.
		 * @param {string} message Error message.
		 *
		 * @since 2.10.0
		 */
		displayStripeFieldError: function( $form, message ) {

			let fieldName = $form.find( '.wpforms-stripe-credit-card-hidden-input' ).attr( 'name' ),
				errors = {};

			errors[fieldName] = message;

			wpforms.displayFormAjaxFieldErrors( $form, errors );

			app.formAjaxUnblock( $form );
		},

		/**
		 * Callback for a page changing.
		 *
		 * @since 2.10.0
		 *
		 * @param {Event}  event       Event.
		 * @param {int}    currentPage Current page.
		 * @param {jQuery} $form       Current form.
		 * @param {string} action      The navigation action.
		 */
		// eslint-disable-next-line complexity
		pageChange: function( event, currentPage, $form, action ) {

			if ( app.paymentType !== 'card' ) {
				return;
			}

			const $stripeDiv = $form.find( '.wpforms-field-stripe-credit-card .wpforms-field-row' );

			if ( ! app.elementsModified ) {
				app.paymentElement.unmount();
				app.mountPaymentElement( $form );

				if ( ! $stripeDiv.data( 'link-email' ) ) {
					app.linkElement.unmount();
					app.mountLinkElement( $form );
				}
			}

			// Stop navigation through page break pages.
			if (
				! $stripeDiv.is( ':visible' ) ||
				( ! $stripeDiv.data( 'required' ) && ! app.elementsModified ) ||
				( app.lockedPageToSwitch && app.lockedPageToSwitch !== currentPage ) ||
				action === 'prev'
			) {
				return;
			}

			const linkCompleted = typeof $stripeDiv.data( 'linkCompleted' ) !== 'undefined' ? $stripeDiv.data( 'linkCompleted' ) : true;

			if ( $stripeDiv.data( 'completed' ) && linkCompleted ) {
				$stripeDiv.find( '.wpforms-error' ).hide();

				return;
			}

			app.lockedPageToSwitch = currentPage;

			app.displayStripeFieldError( $form, wpforms_stripe.i18n.empty_details );
			event.preventDefault();
		},
	};

	// Provide access to public functions/properties.
	return app;

}( document, window, jQuery ) );

// Initialize.
WPFormsStripePaymentElement.init();
