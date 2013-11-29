<?php 
	//dropdown menu for wp
	require_once 'inc/foundation_menu/foundation4-topbar-menu.php';
	require_once 'inc/foundation_menu/foundation4-topbar-walker.php';
	//add post thumbnail
	add_theme_support( 'post-thumbnails' ); 
	
	add_action( 'widgets_init', 'my_sidebars' );

	function my_sidebars() {

		/* Register the 'primary' sidebar. */
		register_sidebar(
			array(
				'id' => 'primary',
				'name' => __( 'Primary' ),
				'description' => __( 'A short description of the sidebar.' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>'
			)
		);

		/* Repeat register_sidebar() code for additional sidebars. */
	}

	add_action( 'widgets_init', 'footer_sid');
	function footer_sid(){
		register_sidebar( 
			array(
             	'id' => 'footer_sid',
             	'name' => __('Footer'),
             	'description' => __('Footer'),
             	'before_widget' => '<div id="%1$s" class="widget %2$s">',
             	'after_widget' => '</div>',
             	'before_title' => '<h3 class="widget-title"',
             	'after_title' => '</h3>'
			)

		 );
	}
	// register post type slider
	add_action( 'init','create_slider_post_type' );
	function create_slider_post_type(){
		register_post_type(
			 'slider', 
			array('labels' => array('name' => '__Slider','singular_name' => '_All slider item'),
			'supports' => array('title',
                'editor',
                'thumbnail',
                'excerpt',
                'custom-fields'
                
            ),
            
			'public' => true,
			'has_archive' => true
			)
		);
	}
	// option panel for theme
	if ( ! function_exists( 'optionsframework_init' ) ) {
        define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
        require_once dirname( __FILE__ ) . '/inc/options-framework.php';
	}
	// short code
	// flex video
function video_shortcode( $atts , $content = null ) {

	return '<div class="flex-video">'.$content.'</div>';
}
add_shortcode( 'video', 'video_shortcode' );

	// pagination
	function kriesi_pagination($pages = '', $range = 2)
	{  
	     $showitems = ($range * 2)+1;  

	     global $paged;
	     if(empty($paged)) $paged = 1;

	     if($pages == '')
	     {
	         global $wp_query;
	         $pages = $wp_query->max_num_pages;
	         if(!$pages)
	         {
	             $pages = 1;
	         }
	     }   

	     if(1 != $pages)
	     {
	         echo "<div class='pagination-centered'>";
	         echo "<ul class='pagination'>";
	         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
	         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

	         for ($i=1; $i <= $pages; $i++)
	         {
	             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
	             {
	                 echo ($paged == $i)? "<li class='current'><a href>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
	             }
	         }

	         if ($paged < $pages && $showitems < $pages) echo "<li class='arrow'><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";  
	         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class='arrow'><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
	         echo "</ul>";
	         echo "</div>\n";
	     }
	}
	
	// <!-- conflict jquery -->
	// function zf_topbar(){
	// 	if ( !is_admin() ) {
	// 	wp_deregister_script('jquery');
	// 	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9/jquery.min.js', false, '1.9');
	// 	wp_enqueue_script('jquery');
	// }
	// }
	// add_action( 'wp_enqueue_scripts', 'zf_topbar' );
function current_jquery($version) {
        global $wp_scripts;
        if ( ( version_compare($version, $wp_scripts -> registered[jquery] -> ver) == 1 ) && !is_admin() ) {
                wp_deregister_script('jquery'); 

                wp_register_script('jquery',
                        'http://ajax.googleapis.com/ajax/libs/jquery/'.$version.'/jquery.min.js',
                        false, $version);
        }
}

add_action( 'wp_head', current_jquery( '2.0.3' ) ); // change number to latest version
 ?>
