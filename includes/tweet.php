<?php
/**
 * Tweet
 * @version 0.1.0
 * @package Twitterbot
 */

class Twitterbot_Tweet {
	/**
	 * Parent plugin class
	 *
	 * @var class
	 * @since  0.1.0
	 */
	protected  = null;

	/**
	 * Constructor
	 *
	 * @since 0.1.0
	 * @return  null
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;
		$this->hooks();
	}

	/**
	 * Initiate our hooks
	 *
	 * @since 0.1.0
	 * @return  null
	 */
	public function hooks() {
	}

	/**
	 * Get the current this or that status and return an output string based on the result.
	 *
	 * @since  0.1.0
	 * @return string
	 */
	public function get_this_or_that() {
		$which = get_option( '_twitterbot_this_or_that' );

		switch ( $which ) {
			case 'prompt':
				return __( 'This...or that?', 'twitterbot' );
				break;

			case 'this':
				return __( 'This.', 'twitterbot' );
				break;

			case 'that':
				return __( 'That.', 'twitterbot' );
				break;

			default:
				return __( 'This...or that?', 'twitterbot' );
				break;
		}
	}
}

function twitterbot_tweet() {
	return new Twitterbot_Tweet;
}