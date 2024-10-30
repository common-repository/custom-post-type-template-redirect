<?php
/**
 * @package custom-post-type-template-redirect
 * @version 1.0
 */
/*
Plugin Name: Custom Post Type Template Redirect
Plugin URI: http://www.hotchkissconsulting.net/
Description: For non-standard post types, checks your theme directory for posttype.php then t_posttype.php.  If neither exists, then the standard WP template rules take effect.
Author: Hotchkiss Consulting
Version: 1.0
Author URI: http://hotchkissconsulting.net/
*/

add_action("template_redirect", 'cptdt_redirect');

// Template selection for the custom post types
function cptdt_redirect()
{
	global $wp;
	global $wp_query;
	global $post;
	
	if (isset($wp->query_vars["post_type"]) && $wp->query_vars["post_type"] != 'post' && $wp->query_vars["post_type"] != 'page') :
			
		if ( file_exists(TEMPLATEPATH . '/' . $wp->query_vars["post_type"] . '.php') ) :
			$cptdt_template = TEMPLATEPATH . '/' . $wp->query_vars["post_type"] . '.php';
		elseif 	( file_exists(TEMPLATEPATH . '/t_' . $wp->query_vars["post_type"] . '.php') ) :
			$cptdt_template = TEMPLATEPATH . '/t_' . $wp->query_vars["post_type"] . '.php';
		endif;
		
		if(isset($cptdt_template)) :
			if (have_posts()) :
				include($cptdt_template);
				die();
			else :
				$wp_query->is_404 = true;
			endif;
		endif;
	
	endif;
}
