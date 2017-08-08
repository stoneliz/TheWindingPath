<?php
/*
 Theme Name:   The Winding Path
 Theme URI:    http://www.phagens.com/web10/wireframe/
 Description:  The Winding Path
 Author:       Piano Hagens, Tomomi Matsuzakl, Liz Stone, Trang Pham, Sicheng Zhu
 Author URI:   http://example.com
 Template:     The Winding Path
 Version:      1.0.0
 License:      GNU General Public License v2 or later
 License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 Tags:         light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
 Text Domain:  http://www.phagens.com/web10/wireframe/
*/

// Register My Sidebar
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));
//

// Register My Menus
register_nav_menus(array(
	'main-menu' => __( 'Main' ),
));
//

// Create Post Thumbnails
add_theme_support( 'post-thumbnails' );
//

// Create Page Excerpts
add_post_type_support( 'page', 'excerpt' );
//


// Get My Title Tag
function get_my_title_tag() {
	
	global $post; // make sure you make this a global variable
	
	if ( is_front_page() ) {  // for the site’s Front Page
	
		bloginfo('description'); // retrieve the site tagline
	
	} 
	
	elseif ( is_page() || is_single() ) { // for your site’s Pages or Postings
	
		the_title(); // retrieve the page or posting title 
	
	} 
	
	else { // for everything else
		
		bloginfo('description'); // retrieve the site tagline
		
	}
	
	if ( $post->post_parent ) { // for your site’s Parent Pages
	
		echo ' | '; // separator with spaces
		echo get_the_title($post->post_parent);  // retrieve the parent page title
		
	}
	echo ' | '; // separator with spaces
	bloginfo('name'); // retrieve the site name
	echo ' | '; // separator with spaces
	echo 'Seattle, WA.'; // write in the location
	
}
//

?>