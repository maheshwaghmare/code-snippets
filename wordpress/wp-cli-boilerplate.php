<?php
/**
 * Prefix WP CLI
 *
 * 1. Run `wp prefix-command info`		Info.
 *
 * @since 1.0.0
 *
 * @package Prefix WP CLI
 */

if ( ! class_exists( 'Prefix_WP_CLI' ) && class_exists( 'WP_CLI_Command' ) ) :

	/**
	 * Prefix WP CLI
	 */
	class Prefix_WP_CLI extends WP_CLI_Command {

		/**
		 * Info
		 *
		 * @param  array $args       Arguments.
		 * @param  array $assoc_args Associated Arguments.
		 * @return void
		 */
		public function info( $args, $assoc_args ) {			
			WP_CLI::line( 'ok' );
		}
	}

	/**
	 * Add Command
	 */
	WP_CLI::add_command( 'prefix-command', 'Prefix_WP_CLI' );

endif;