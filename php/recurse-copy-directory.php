<?php
/**
 * Recursive Copy Directory/Folder
 * 
 * Copy folder from source to destination including child files/folders.
 * 
 * @param  string $source Source directory.
 * @param  string $destination Destination directory.
 * @return void
 */
if( ! function_exists( 'prefix_recurse_copy_directory' ) ) :
	function prefix_recurse_copy_directory($source, $destination) {
		$dir = opendir($source);
	    //	Create directory if not exist
	    if ( ! is_dir( $destination ) ) {
	    	@mkdir( $destination );
	    }
	    while(false !== ( $file = readdir($dir)) ) {
	    	if (( $file != '.' ) && ( $file != '..' )) {
	    		if ( is_dir($source . '/' . $file) ) {
	    			prefix_recurse_copy_directory($source . '/' . $file, $destination . '/' . $file);
	            } else {
	            	copy($source . '/' . $file, $destination . '/' . $file);
	            }
	        }
	    }
	    closedir($dir);
   }
endif;