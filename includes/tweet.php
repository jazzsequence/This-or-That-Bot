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
}

function twitterbot_tweet() {
	return new Twitterbot_Tweet;
}

// go!
twitterbot_tweet();