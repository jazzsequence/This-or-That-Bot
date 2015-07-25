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

	/**
	 * Hooked to the hourly schedule, maybe tweet the current this or that status.
	 *
	 * @since  0.1.0
	 * @return void
	 */
	public function maybe_tweet() {
		$rand = rand( 0, 9 );

		if ( 9 === $rand ) {
			// do the tweet
			if ( function_exists( 'twitterbot_get_oauth' ) ) {
				twitterbot_get_oauth()->post( 'statuses/update', array( 'status' => $this->get_this_or_that() ) );
			}
		}
	}
}

function twitterbot_tweet() {
	return new Twitterbot_Tweet;
}