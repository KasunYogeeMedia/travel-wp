<?php

namespace WPFormsStripe\Fields;

use WPForms_Field;
use WPFormsStripe\Fields\Traits\CreditCard;

/**
 * Stripe Payment element credit card field.
 *
 * @since 2.10.0
 */
class PaymentElementCreditCard extends WPForms_Field {

	use CreditCard;

	/**
	 * Define additional field properties.
	 *
	 * @since 2.10.0
	 *
	 * @param array $properties Field properties.
	 * @param array $field      Field settings.
	 * @param array $form_data  Form data and settings.
	 *
	 * @return array
	 */
	public function field_properties( $properties, $field, $form_data ) {

		// Save form data for future usage in the class.
		$this->form_data = $form_data;

		return $properties;
	}

	/**
	 * Advanced section field options.
	 *
	 * @since 2.10.0
	 *
	 * @param array $field Field settings.
	 */
	protected function advanced_options( $field ) {

		// Link Email field map.
		$output = $this->field_element(
			'label',
			$field,
			[
				'slug'    => 'link_email',
				'value'   => esc_html__( 'Link Email', 'wpforms-stripe' ),
				'tooltip' => esc_html__( 'Select an Email field to autofill your customers’ payment information using Link.', 'wpforms-stripe' ),
			],
			false
		);

		$output .= $this->field_element(
			'select',
			$field,
			[
				'slug'    => 'link_email',
				'value'   => ! empty( $field['link_email'] ) ? esc_attr( $field['link_email'] ) : '',
				'options' => $this->get_email_field_options(),
				'class'   => 'wpforms-field-map-select',
				'data'    => [
					'field-map-allowed'     => 'email',
					'field-map-placeholder' => esc_attr__( 'Stripe Credit Card Email', 'wpforms-stripe' ),
				],
			],
			false
		);

		$this->field_element(
			'row',
			$field,
			[
				'slug'    => 'link_email',
				'content' => $output,
			]
		);

		$output = $this->field_element(
			'label',
			$field,
			[
				'slug'  => 'sublabel_position',
				'value' => esc_html__( 'Sublabel Position', 'wpforms-stripe' ),
			],
			false
		);

		$output .= $this->field_element(
			'select',
			$field,
			[
				'slug'    => 'sublabel_position',
				'value'   => ! empty( $field['sublabel_position'] ) ? esc_attr( $field['sublabel_position'] ) : '',
				'options' => [
					'above'    => esc_html__( 'Above', 'wpforms-stripe' ),
					'floating' => esc_html__( 'Floating', 'wpforms-stripe' ),
				],
			],
			false
		);

		$this->field_element(
			'row',
			$field,
			[
				'slug'    => 'sublabel_position',
				'content' => $output,
			]
		);
	}

	/**
	 * Array of available form email fields.
	 *
	 * @since 2.10.0
	 *
	 * @return array
	 */
	private function get_email_field_options() {

		$fields        = [ '' => esc_html__( 'Stripe Credit Card Email', 'wpforms-stripe' ) ];
		$email_options = wpforms_get_form_fields( $this->form_data, [ 'email' ] );

		if ( empty( $email_options ) ) {
			return $fields;
		}

		foreach ( $email_options as $id => $email_option ) {
			$fields[ $id ] = ! empty( $email_option['label'] )
				? esc_attr( $email_option['label'] )
				: sprintf( /* translators: %d - field ID. */
					esc_html__( 'Field #%d', 'wpforms-stripe' ),
					absint( $id )
				);
		}

		return $fields;
	}

	/**
	 * Field preview inside the builder.
	 *
	 * @since 2.10.0
	 *
	 * @param array $field Field settings.
	 */
	public function field_preview( $field ) {

		// Label.
		$this->field_preview_option( 'label', $field );

		$sublabels         = $this->get_sublabels();
		$sublabel_position = ! empty( $field['sublabel_position'] ) ? $field['sublabel_position'] : 'above';
		$hide_link_email   = ! empty( $field['link_email'] ) ? 'wpforms-hidden' : '';
		?>

		<div class="format-selected wpforms-stripe-payment-element <?php echo esc_attr( $sublabel_position ); ?>">
			<div class="wpforms-field-row wpforms-stripe-link-email <?php echo esc_attr( $hide_link_email ); ?>">
				<?php $this->input_preview( $sublabels['email'] ); ?>
			</div>
			<div class="wpforms-field-row">
				<?php $this->input_preview( $sublabels['number'] ); ?>
			</div>
			<div class="wpforms-field-row">
				<div class="wpforms-one-half">
					<?php $this->input_preview( $sublabels['exp'] ); ?>
				</div>
				<div class="wpforms-one-half last">
					<?php $this->input_preview( $sublabels['cvv'] ); ?>
				</div>
			</div>
			<div class="wpforms-field-row">
				<label class="wpforms-sub-label"><?php echo esc_attr( $sublabels['country'] ); ?></label>
				<?php $this->get_country_dropdown_preview( $field ); ?>
			</div>
		</div>

		<?php
		// Description.
		$this->field_preview_option( 'description', $field );
	}

	/**
	 * Input preview html output.
	 *
	 * @since 2.10.0
	 *
	 * @param string $label Label text.
	 */
	private function input_preview( $label ) {

		echo '<label class="wpforms-sub-label">' . esc_html( $label ) . '</label>';
		echo '<input type="text" placeholder="' . esc_attr( $label ) . '" readonly>';
	}

	/**
	 * Get Sublabels strings.
	 *
	 * @since 2.10.0
	 *
	 * @return array
	 */
	private function get_sublabels() {

		return [
			'email'   => __( 'Email', 'wpforms-stripe' ),
			'number'  => __( 'Card Number', 'wpforms-stripe' ),
			'exp'     => __( 'Expiration', 'wpforms-stripe' ),
			'cvv'     => __( 'CVC', 'wpforms-stripe' ),
			'country' => __( 'Country', 'wpforms-stripe' ),
		];
	}

	/**
	 * Get Country dropdown preview.
	 *
	 * @since 2.10.0
	 *
	 * @param array $field Field settings.
	 */
	private function get_country_dropdown_preview( $field ) {

		$display_label = ! empty( $field['sublabel_position'] ) && $field['sublabel_position'] === 'above';
		$sublabels     = $this->get_sublabels();

		echo '<select readonly>';
			echo '<option value="empty" ' . selected( $display_label, true, false ) . '></option>';
			echo '<option value="country" ' . selected( ! $display_label, true, false ) . '>';
			echo esc_attr( $sublabels['country'] );
			echo '</option>';
		echo '</select>';
	}

	/**
	 * Block editor field preview.
	 *
	 * @since 2.10.0
	 *
	 * @param array $field Field settings.
	 */
	private function block_editor_field_display( $field ) {

		$hide_sub_label    = ! empty( $field['sublabel_hide'] );
		$sublabel_position = ! empty( $field['sublabel_position'] ) ? $field['sublabel_position'] : 'above';
		$field_class       = 'wpforms-field-row wpforms-field-' . sanitize_html_class( $field['size'] );
		$sublabels         = $this->get_sublabels();
		?>

		<div class="format-selected wpforms-stripe-payment-element">

			<?php if ( empty( $field['link_email'] ) ) : ?>
				<div class="<?php echo esc_attr( $field_class ); ?>">
					<?php $this->block_editor_input_preview( $sublabels['email'], $sublabel_position, $hide_sub_label ); ?>
				</div>
			<?php endif; ?>

			<div class="<?php echo esc_attr( $field_class ); ?>">
				<?php $this->block_editor_input_preview( $sublabels['number'], $sublabel_position, $hide_sub_label ); ?>
			</div>

			<div class="<?php echo esc_attr( $field_class ); ?>">
				<div class="wpforms-field-row-block wpforms-one-half wpforms-first">
					<?php $this->block_editor_input_preview( $sublabels['exp'], $sublabel_position, $hide_sub_label ); ?>
				</div>
				<div class="wpforms-field-row-block wpforms-one-half">
					<?php $this->block_editor_input_preview( $sublabels['cvv'], $sublabel_position, $hide_sub_label ); ?>
				</div>
			</div>

			<div class="<?php echo esc_attr( $field_class ); ?>">
				<?php if ( $sublabel_position === 'above' && ! $hide_sub_label ) : ?>
					<label class="wpforms-sub-label"><?php echo esc_attr( $sublabels['country'] ); ?></label>
				<?php endif; ?>
				<?php $this->get_country_dropdown_preview( $field ); ?>
			</div>
		</div>
		<?php
	}

	/**
	 * Get block editor input preview html.
	 *
	 * @since 2.10.0
	 *
	 * @param string $label    Label text.
	 * @param string $position Label Position.
	 * @param bool   $hide     Hide label.
	 */
	private function block_editor_input_preview( $label, $position, $hide ) {

		if ( $hide ) {
			echo '<input type="text" readonly>';

			return;
		}

		if ( $position === 'above' ) {
			echo '<label class="wpforms-sub-label">' . esc_html( $label ) . '</label><input type="text" readonly>';

			return;
		}

		echo '<input type="text" placeholder="' . esc_attr( $label ) . '" readonly>';
	}

	/**
	 * Field display on the form front-end.
	 *
	 * @since 2.10.0
	 *
	 * @param array $field      Field data and settings.
	 * @param array $deprecated Deprecated field attributes. Use field properties.
	 * @param array $form_data  Form data and settings.
	 */
	public function field_display( $field, $deprecated, $form_data ) { // phpcs:ignore Generic.Metrics.CyclomaticComplexity.TooHigh

		if ( $this->field_display_errors( $form_data ) ) {
			return;
		}

		if ( $this->is_block_editor() ) {
			$this->block_editor_field_display( $field );

			return;
		}

		$form_id = absint( $form_data['id'] );

		$hide_sub_label    = ! empty( $field['sublabel_hide'] ) ? 'wpforms-sublabel-hide' : '';
		$sublabel_position = ! empty( $field['sublabel_position'] ) ? $field['sublabel_position'] : 'above';
		$link_email        = ! empty( $field['link_email'] ) ? $field['link_email'] : '';

		// Row wrapper.
		echo '<div class="wpforms-field-row wpforms-field-' . sanitize_html_class( $field['size'] ) . ' ' . sanitize_html_class( $hide_sub_label ) . '" data-sublabel-position="' . esc_attr( $sublabel_position ) . '" data-link-email="' . esc_attr( $link_email ) . '" data-required="' . (int) ! empty( $field['required'] ) . '">';

		if ( ! $link_email ) {
			echo '<div id="wpforms-field-stripe-link-element-' . absint( $form_id ) . '"></div>';
		}

		echo '<div id="wpforms-field-stripe-payment-element-' . absint( $form_id ) . '"></div>';
		echo '<input type="text" class="wpforms-stripe-credit-card-hidden-input" name="wpforms[stripe-credit-card-hidden-input-' . absint( $form_data['id'] ) . ']" disabled style="display: none;">';
		echo '</div>';
	}

	/**
	 * Checking if block editor is loaded.
	 *
	 * @since 2.10.0
	 *
	 * @return bool True if is block editor.
	 */
	private function is_block_editor() {

		// phpcs:disable WordPress.Security.NonceVerification
		$is_gutenberg = defined( 'REST_REQUEST' ) && REST_REQUEST && ! empty( $_REQUEST['context'] ) && $_REQUEST['context'] === 'edit';
		$is_elementor = ( ! empty( $_POST['action'] ) && $_POST['action'] === 'elementor_ajax' ) || ( ! empty( $_GET['action'] ) && $_GET['action'] === 'elementor' );
		$is_divi      = ! empty( $_GET['et_fb'] ) || ( ! empty( $_POST['action'] ) && $_POST['action'] === 'wpforms_divi_preview' );
		// phpcs:enable WordPress.Security.NonceVerification

		return $is_gutenberg || $is_elementor || $is_divi;
	}
}
