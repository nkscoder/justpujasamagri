<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * Class WAFS_Ajax.
 *
 * AJAX class handles all ajax calls.
 *
 * @class       WAFS_Ajax
 * @author     	Jeroen Sormani
 * @package		WooCommerce Advanced Free Shipping
 * @version		1.0.0
 */
class WAFS_Ajax {


	/**
	 * Constructor.
	 *
	 * Add ajax actions in order to work.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		// Add elements
		add_action( 'wp_ajax_wafs_add_condition', array( $this, 'add_condition' ) );
		add_action( 'wp_ajax_wafs_add_condition_group', array( $this, 'add_condition_group' ) );

		// Update elements
		add_action( 'wp_ajax_wafs_update_condition_value', array( $this, 'update_condition_value' ) );
		add_action( 'wp_ajax_wafs_update_condition_description', array( $this, 'update_condition_description' ) );

	}


	/**
	 * Add condition.
	 *
	 * Create a new WAFS_Condition class and render.
	 *
	 * @since 1.0.0
	 */
	public function add_condition() {

		check_ajax_referer( 'wafs-ajax-nonce', 'nonce' );

		new WAFS_Condition( null, $_POST['group'] );
		die();

	}


	/**
	 * Condition group.
	 *
	 * Render new condition group.
	 *
	 * @since 1.0.0
	 */
	public function add_condition_group() {

		check_ajax_referer( 'wafs-ajax-nonce', 'nonce' );

		?><div class='condition-group condition-group-<?php echo absint( $_POST['group'] ); ?>' data-group='<?php echo absint( $_POST['group'] ); ?>'>

			<p class='or_match'><?php _e( 'Or match all of the following rules to allow free shipping:', 'woocommerce-advanced-free-shipping' );?></p><?php

			new WAFS_Condition( null, $_POST['group'] );

		?></div>

		<p><strong><?php _e( 'Or', 'woocommerce-advanced-free-shipping' ); ?></strong></p><?php

		die();

	}


	/**
	 * Update values.
	 *
	 * Retreive and render the new condition values according to the condition key.
	 *
	 * @since 1.0.0
	 */
	public function update_condition_value() {

		check_ajax_referer( 'wafs-ajax-nonce', 'nonce' );

		wafs_condition_values( $_POST['id'], $_POST['group'], $_POST['condition'] );
		die();

	}


	/**
	 * Update description.
	 *
	 * Render the corresponding description for the condition key.
	 *
	 * @since 1.0.0
	 */
	public function update_condition_description() {

		check_ajax_referer( 'wafs-ajax-nonce', 'nonce' );

		wafs_condition_description( $_POST['condition'] );
		die();

	}


}
