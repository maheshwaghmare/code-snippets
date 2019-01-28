<?php
/**
 *  Class Description
 *
 * @package  Class Description
 */

if( ! class_exists( 'Class_Name' ) ) :

	/**
	 *  Class Description
	 */
	class Class_Name {

		/**
		 * Member Variable
		 *
		 * @var instance
		 */
		private static $instance;

		/**
		 * Initiator
		 *
		 * @since x.x.x
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self;
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 * 
		 * @since x.x.x
		 */
		public function __construct() {
			// Write your code here..
		}
	}

	/**
	 * Kicking this off by calling 'get_instance()' method
	 */
	Class_Name::get_instance();

endif;