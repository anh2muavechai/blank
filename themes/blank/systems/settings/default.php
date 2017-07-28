<?php
/**
 * Hides the admin bar on frontend if not admin
 */
add_action( 'after_setup_theme', '_ken_remove_admin_bar' );
function _ken_remove_admin_bar() {
	if( !current_user_can( 'administrator' ) ){
		show_admin_bar( false );
	}
	
}

/**
 * Setup theme
 */
add_action( 'after_setup_theme', '_ken_setup' );
if ( ! function_exists( '_ken_setup' ) ) :
	function _ken_setup(){
		/*
		 * Make theme available for translation.
		 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
		 * If you're building a theme based on Twenty Sixteen, use a find and replace
		 * to change 'twentysixteen' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'ken',get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1200, 9999 );

		/**
		 * This theme uses wp_nav_menu() in two locations.
		 * User:
		 * 	$args = array(
				'theme_location' => '',
				'menu' => '',
				'container' => 'div',
				'container_class' => 'menu-{menu-slug}-container',
				'container_id' => '',
				'menu_class' => 'menu',
				'menu_id' => '',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
				'depth' => 0,
				'walker' => new My_Walker_Nav_Menu
			);
			wp_nav_menu( $args );
		 */
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'ken' ),
			'footer'  => __( 'Footer Menu', 'ken' ),
			'sitemap' => __( 'Sitemap Menu', 'ken' ),
			'social'  => __( 'Social Menu', 'ken' ),
			'global'  => __( 'Global Menu', 'ken' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Indicate widget sidebars can use selective refresh in the Customizer.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;