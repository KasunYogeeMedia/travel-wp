<?php

namespace WPFormsStripe;

/**
 * Stripe form frontend related functionality.
 *
 * @since 2.0.0
 */
class Frontend {

	/**
	 * Constructor.
	 *
	 * @since 2.0.0
	 */
	public function __construct() {

		$this->init();
	}

	/**
	 * Initialize.
	 *
	 * @since 2.0.0
	 */
	public function init() {

		$this->hooks();
	}

	/**
	 * Register hooks.
	 *
	 * @since 2.10.0
	 */
	private function hooks() {

		add_action( 'wpforms_frontend_container_class', [ $this, 'form_container_class' ], 10, 2 );
		add_action( 'wpforms_wp_footer', [ $this, 'enqueues' ] );
	}

	/**
	 * Add class to form container if Stripe is enabled.
	 *
	 * @since 2.0.0
	 *
	 * @param array $class     Array of form classes.
	 * @param array $form_data Form data of current form.
	 *
	 * @return array
	 */
	public function form_container_class( $class, $form_data ) {

		if ( ! Helpers::has_stripe_field( $form_data ) ) {
			return $class;
		}

		if ( ! Helpers::has_stripe_keys() ) {
			return $class;
		}

		if ( ! empty( $form_data['payments']['stripe']['enable'] ) ) {
			$class[] = 'wpforms-stripe';
		}

		return $class;
	}

	/**
	 * Enqueue assets in the frontend if Stripe is in use on the page.
	 *
	 * @since 2.0.0
	 *
	 * @param array $forms Form data of forms on current page.
	 */
	public function enqueues( $forms ) {

		if ( ! Helpers::has_stripe_field( $forms, true ) ) {
			return;
		}

		if ( ! Helpers::has_stripe_enabled( $forms ) ) {
			return;
		}

		if ( ! Helpers::has_stripe_keys() ) {
			return;
		}

		$config = wpforms_stripe()->api->get_config();

		wp_enqueue_script(
			'stripe-js',
			$config['remote_js_url'],
			[ 'jquery' ]
		);

		wp_enqueue_script(
			'wpforms-stripe',
			$config['local_js_url'],
			[ 'jquery', 'stripe-js' ],
			WPFORMS_STRIPE_VERSION
		);

		wp_localize_script(
			'wpforms-stripe',
			'wpforms_stripe',
			[
				'publishable_key' => Helpers::get_stripe_key( 'publishable' ),
				'data'            => $config['localize_script'],
				'i18n'            => [
					'empty_details' => esc_html__( 'Please fill out payment details to continue.', 'wpforms-stripe' ),
				],
			]
		);

		if ( isset( $config['local_css_url'] ) ) {
			wp_enqueue_style(
				'wpforms-stripe',
				$config['local_css_url'],
				[],
				WPFORMS_STRIPE_VERSION
			);
		}
	}
}
