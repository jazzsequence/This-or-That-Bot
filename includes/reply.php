<?php
/**
 * Reply to mention
 * @version 0.1.0
 * @package This or That Bot
 */

class Twitterbot_Reply {
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

function twitterbot_reply() {
	return new Twitterbot_Reply;
}