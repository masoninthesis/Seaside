<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;
add_filter('show_admin_bar', '__return_false');
load_theme_textdomain('GoGetThemes',  get_template_directory() . '/languages');
global $smof_data;

include 'includes/stylegen.php';

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail');

#-----------------------------------------------------------------#
# Google Fonts
#-----------------------------------------------------------------#
function gogetthemes_fonts()
{
    global $smof_data;
    $protocol = is_ssl() ? 'https' : 'http';
    if (!empty($smof_data['google_font'])) {
        if ($smof_data['google_font'] == 1) {
            if (!empty($smof_data['google_body_font'])) {
            $calculated_fonts = array();
   if (!empty($smof_data['google_body_font']))
    array_push($calculated_fonts ,urlencode($smof_data['google_body_font']));
   if (!empty($smof_data['google_menu_font']))
    array_push($calculated_fonts ,urlencode($smof_data['google_menu_font']));
   if (!empty($smof_data['google_smenu_font'])) 
    array_push($calculated_fonts ,urlencode($smof_data['google_smenu_font']));
   if (!empty($smof_data['google_h1_font']))
    array_push($calculated_fonts ,urlencode($smof_data['google_h1_font']));
   if (!empty($smof_data['google_h2_font']))
    array_push($calculated_fonts ,urlencode($smof_data['google_h2_font']));
   if (!empty($smof_data['google_h3_font']))
    array_push($calculated_fonts ,urlencode($smof_data['google_h3_font']));
   if (!empty($smof_data['google_h4_font']))
    array_push($calculated_fonts ,urlencode($smof_data['google_h4_font']));
   if (!empty($smof_data['google_h5_font']))
    array_push($calculated_fonts ,urlencode($smof_data['google_h5_font']));
   if (!empty($smof_data['google_h6_font']))
    array_push($calculated_fonts ,urlencode($smof_data['google_h6_font']));
    $fonts = implode('|',$calculated_fonts);
   $url = "$protocol://fonts.googleapis.com/css?family=" . $fonts . ":300,400,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese";  
   wp_enqueue_style('selected-google-fonts',$url);            
        }
      }
    }
}

add_action('wp_enqueue_scripts', 'gogetthemes_fonts');
#-----------------------------------------------------------------#
# Register JS
#-----------------------------------------------------------------#
function goget_register_js()
{
	global $smof_data;
    if (!is_admin()) {
        wp_register_script('modernizer', get_template_directory_uri() . '/js/modernizr.js', 'jquery', '2.6.2');
        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '2.3.1', TRUE);
        wp_register_script('isotope', get_template_directory_uri() . '/js/isotope.min.js', 'jquery', '1.5.25', TRUE);
        wp_register_script('cycle', get_template_directory_uri() . '/js/cycle2.min.js', 'jquery', '20130502', TRUE);
        wp_register_script('cycle-swipe', get_template_directory_uri() . '/js/jquery.cycle2.swipe.js', 'jquery', '20130502', TRUE);
        wp_register_script('ios6fix', get_template_directory_uri() . '/js/ios6fix.js', 'jquery', '20130502', TRUE);
        wp_register_script('pop_up', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', 'jquery', '0.8.2', TRUE);
        wp_register_script('placeholder', get_template_directory_uri() . '/js/placeholder.min.js', 'jquery', '1.0', TRUE);
        wp_register_script('scrollto', get_template_directory_uri() . '/js/scrollTo.min.js', 'jquery', '1.4.3', TRUE);
        wp_register_script('nav', get_template_directory_uri() . '/js/nav.js', 'jquery', '2.2.0', TRUE);
        wp_register_script('superfish', get_template_directory_uri() . '/js/superfish.js', 'jquery', '2.2.0', TRUE);
        wp_register_script('supersab', get_template_directory_uri() . '/js/supersubs.js', 'jquery', '2.2.0', TRUE);
        wp_register_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', 'jquery', '2.0.2', true);
        wp_register_script('fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', 'jquery', '1.0', true);
        wp_register_script('tinynav', get_template_directory_uri() . '/js/tinynav.min.js', 'jquery', '1.1', true);
        //wp_register_script('gmap', get_template_directory_uri() . '/js/gmap.js', 'jquery', '1.0', true);
        if($smof_data['google_map']==1 && $smof_data['contact_map_type']==0)
        	wp_register_script('gmap_api', 'http://maps.google.com/maps/api/js?sensor=true&amp;language=en', 'jquery', '1.0', true);
        wp_register_script('gogetthemes', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true);
    }
    wp_enqueue_script('jquery');
    wp_enqueue_script('comment-reply');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('modernizer');
    wp_enqueue_script('pop_up');
    wp_enqueue_script('tinynav');
    wp_enqueue_script('cycle');
    wp_enqueue_script('cycle-swipe');
    wp_enqueue_script('ios6fix');
    wp_enqueue_script('isotope');
    wp_enqueue_script('placeholder');
    wp_enqueue_script('scrollto');
    wp_enqueue_script('nav');
    wp_enqueue_script('superfish');
    wp_enqueue_script('supersab');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('fitvids');
    wp_enqueue_script('bxslider');
    if($smof_data['google_map']==1)
    	wp_enqueue_script('gmap_api');
    //wp_enqueue_script('gmap');
    wp_enqueue_script('gogetthemes');

    if (file_exists(get_template_directory() . "/css/all-styles.css")) { // new styles support
        wp_enqueue_style('allStyles', get_template_directory_uri() . '/css/all-styles.css', false, '1.0', 'all');
    }
}

add_action('wp_enqueue_scripts', 'goget_register_js');
#-----------------------------------------------------------------#
# Register/Enqueue CSS
#-----------------------------------------------------------------#
function gogetthemes_styles()
{
    wp_register_style("ie8", get_template_directory_uri() . "/css/ie.css");
    wp_enqueue_style('main-style', get_stylesheet_uri(), false, '1.0');
    wp_enqueue_style('ie8');
    //IE
    global $wp_styles;
    $wp_styles->add_data("ie8", 'conditional', 'lt IE 9');
}

add_action('wp_print_styles', 'gogetthemes_styles');


function gogetthemes_custom_css() {
    if (!file_exists(get_template_directory() . "/css/all-styles.css")) { // old styles support
        include get_template_directory() ."/styles.php";
    }
}
add_action('wp_head', 'gogetthemes_custom_css');


#-----------------------------------------------------------------#
# Automatic Feed Links
#-----------------------------------------------------------------#
if (function_exists('add_theme_support')) {
    add_theme_support('automatic-feed-links');
    add_theme_support('woocommerce');
}
#-----------------------------------------------------------------#
# Image sizes
#-----------------------------------------------------------------#
add_theme_support('post-thumbnails');
add_image_size('blog-thumb', 425, 320, true);
add_image_size('customer', 48, 48, true);
add_image_size('team-thumb', 480, 480, true);
#-----------------------------------------------------------------#
# Default RSS feed links
#-----------------------------------------------------------------#
add_theme_support('automatic-feed-links');
#-----------------------------------------------------------------#
# Allow shortcodes in widget text
#-----------------------------------------------------------------#
add_filter('widget_text', 'do_shortcode');
#-----------------------------------------------------------------#
# Include SMOF
#-----------------------------------------------------------------#
require_once('admin/index.php');
#-----------------------------------------------------------------#
# Post Formats
#-----------------------------------------------------------------#
add_theme_support('post-formats', array('standart', 'video', 'gallery', 'image'));
// Rename Image format
function gg_rename_image($safe_text)
{
    if ($safe_text == 'Image')
        return 'Slider';
    return $safe_text;
}

add_filter('esc_html', 'gg_rename_image');
#-----------------------------------------------------------------#
# Create admin customer section
#-----------------------------------------------------------------#
function gg_testimonial_register()
{
    $testimonial_labels = array(
        'name' => _x('Testimonials', 'taxonomy general name', 'GoGetThemes'),
        'singular_name' => __('Testimonial', 'GoGetThemes'),
        'search_items' => __('Search Testimonials', 'GoGetThemes'),
        'all_items' => __('Testimonials', 'GoGetThemes'),
        'parent_item' => __('Parent Testimonial', 'GoGetThemes'),
        'edit_item' => __('Edit Testimonial', 'GoGetThemes'),
        'update_item' => __('Update Testimonial', 'GoGetThemes'),
        'add_new_item' => __('Add New Testimonial', 'GoGetThemes')
    );
    $args = array(
        'labels' => $testimonial_labels,
        'rewrite' => array('slug' => 'testimonial-post', 'with_front' => false),
        'singular_label' => __('Testimonial', 'GoGetThemes'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'hierarchical' => false,
        'menu_icon' => get_template_directory_uri() . '/images/icons/icon-testimonials.png',
        'supports' => array('title', 'thumbnail')
    );
    register_post_type('testimonial-post', $args);
}

add_action('init', 'gg_testimonial_register');
#-----------------------------------------------------------------#
# Create admin service section
#-----------------------------------------------------------------#
function gg_service_register()
{
    $service_labels = array(
        'name' => _x('Service posts', 'taxonomy general name', 'GoGetThemes'),
        'singular_name' => __('Service post', 'GoGetThemes'),
        'search_items' => __('Search Service posts', 'GoGetThemes'),
        'all_items' => __('Service posts', 'GoGetThemes'),
        'parent_item' => __('Parent Service post', 'GoGetThemes'),
        'edit_item' => __('Edit Service post', 'GoGetThemes'),
        'update_item' => __('Update Service post', 'GoGetThemes'),
        'add_new_item' => __('Add New Service post', 'GoGetThemes')
    );
    $args = array(
        'labels' => $service_labels,
        'rewrite' => array('slug' => 'service-post', 'with_front' => false),
        'singular_label' => __('Service post', 'GoGetThemes'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'hierarchical' => false,
        'menu_icon' => get_template_directory_uri() . '/images/icons/icon-services.png',
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('service-post', $args);
}

add_action('init', 'gg_service_register');
#-----------------------------------------------------------------#
# Create admin Team section
#-----------------------------------------------------------------#
function gg_team_register()
{
    $team_labels = array(
        'name' => _x('Team Members', 'taxonomy general name', 'GoGetThemes'),
        'singular_name' => __('Team member', 'GoGetThemes'),
        'search_items' => __('Search Team Members', 'GoGetThemes'),
        'all_items' => __('Team Members', 'GoGetThemes'),
        'parent_item' => __('Parent Team Member', 'GoGetThemes'),
        'edit_item' => __('Edit Team Member', 'GoGetThemes'),
        'update_item' => __('Update Team Member', 'GoGetThemes'),
        'add_new_item' => __('Add New Team Member', 'GoGetThemes')
    );
    $args = array(
        'labels' => $team_labels,
        'rewrite' => array('slug' => 'team-post', 'with_front' => false),
        'singular_label' => __('Team Member', 'GoGetThemes'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'hierarchical' => false,
        'menu_icon' => get_template_directory_uri() . '/images/icons/icon-teammemder.png',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('team-post', $args);
}

add_action('init', 'gg_team_register');
#-----------------------------------------------------------------#
# Create admin portfolio section
#-----------------------------------------------------------------#
function gg_portfolio_register()
{
    $portfolio_labels = array(
        'name' => _x('Portfolio', 'taxonomy general name', 'GoGetThemes'),
        'singular_name' => __('Portfolio Item', 'GoGetThemes'),
        'search_items' => __('Search Portfolio Items', 'GoGetThemes'),
        'all_items' => __('Portfolio', 'GoGetThemes'),
        'parent_item' => __('Parent Portfolio Item', 'GoGetThemes'),
        'edit_item' => __('Edit Portfolio Item', 'GoGetThemes'),
        'update_item' => __('Update Portfolio Item', 'GoGetThemes'),
        'add_new_item' => __('Add New Portfolio Item', 'GoGetThemes')
    );
    $args = array(
        'labels' => $portfolio_labels,
        'rewrite' => array('slug' => 'portfolio-post', 'with_front' => false),
        'singular_label' => __('Project', 'GoGetThemes'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'hierarchical' => false,
        'menu_icon' => get_template_directory_uri() . '/images/icons/icon-portfolio.png',
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('portfolio', $args);
}

add_action('init', 'gg_portfolio_register');
#-----------------------------------------------------------------#
# Add taxonomys attached to portfolio
#-----------------------------------------------------------------#
$category_labels = array(
    'name' => _x('Project Categories', 'taxonomy general name', 'GoGetThemes'),
    'singular_name' => __('Project Category', 'GoGetThemes'),
    'search_items' => __('Search Project Categories', 'GoGetThemes'),
    'all_items' => __('All Project Categories', 'GoGetThemes'),
    'parent_item' => __('Parent Project Category', 'GoGetThemes'),
    'edit_item' => __('Edit Project Category', 'GoGetThemes'),
    'update_item' => __('Update Project Category', 'GoGetThemes'),
    'add_new_item' => __('Add New Project Category', 'GoGetThemes'),
    'menu_name' => __('Project Categories', 'GoGetThemes')
);
register_taxonomy("project-type",
    array("portfolio"),
    array("hierarchical" => true,
        'labels' => $category_labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'project-type')
    ));
#-----------------------------------------------------------------#
# Portfolio Posts class
#-----------------------------------------------------------------#
add_filter('post_class', 'custom_taxonomy_post_class', 10, 3);
if (!function_exists('custom_taxonomy_post_class')) {
    function custom_taxonomy_post_class($classes, $class, $ID)
    {
        $taxonomy = 'project-type';
        $terms = get_the_terms((int)$ID, $taxonomy);
        if (!empty($terms)) {
            foreach ((array)$terms as $order => $term) {
                if (!in_array($term->slug, $classes)) {
                    $classes[] = $term->slug;
                }
            }
        }
        return $classes;
    }
}
#-----------------------------------------------------------------#
# Excerpt related
#-----------------------------------------------------------------#
//excerpt length
function excerpt_length($length)
{
    return 30;
}

add_filter('excerpt_length', 'excerpt_length', 999);
//custom excerpt ending
function excerpt_more($more)
{
    return '.';
}

add_filter('excerpt_more', 'excerpt_more');
#-----------------------------------------------------------------#
# Current Page Url
#-----------------------------------------------------------------#
function gg_current_page_url()
{
    $pageURL = 'http';
    if (isset($_SERVER["HTTPS"])) {
        if ($_SERVER["HTTPS"] == "on") {
            $pageURL .= "s";
        }
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

#-----------------------------------------------------------------#
# HEX 2 RGB
#-----------------------------------------------------------------#
function gg_HEXvRGB($cvet) {
    $cvet = str_replace('#', '', $cvet);
    if (strlen($cvet) != 6) :
        return array(0, 0, 0);
    endif;
    $rgb = array();
    for ($m = 0; $m < 3; $m++) :
        $rgb[$m] = hexdec( substr($cvet, 2*$m, 2) );
    endfor;
    return $rgb;
}
#-----------------------------------------------------------------#
# Custom menu
#-----------------------------------------------------------------#
register_nav_menu('top_navigation', 'Top Navigation');
register_nav_menu('404_pages', '404 Useful Pages');
#-----------------------------------------------------------------#
# Register sidebars
#-----------------------------------------------------------------#
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => __('Blog sidebar', 'GoGetThemes'),
        'id' => 'ocean-blog',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => __('Shop Sidebar', 'GoGetThemes'),
        'id' => 'shop-sidebar',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => __('Footer Widget 1', 'GoGetThemes'),
        'id' => 'footer_type_1',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="span3 widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Footer Widget 2', 'GoGetThemes'),
        'id' => 'footer_type_2',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="span3 widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Footer Widget 3', 'GoGetThemes'),
        'id' => 'footer_type_3',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="span3 widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Footer Widget 4', 'GoGetThemes'),
        'id' => 'footer_type_4',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="span3 widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
}
#-----------------------------------------------------------------#
# Custom sidebars
#-----------------------------------------------------------------#
include_once(get_template_directory().'/includes/multiple_sidebars.php');
#-----------------------------------------------------------------#
# Custom widgets
#-----------------------------------------------------------------#
include('includes/widgets/facebook-like-box-widget.php');
include('includes/widgets/flickr_widget.php');
include('includes/widgets/tweets-widget.php');
include('includes/widgets/instagram.php');
#-----------------------------------------------------------------#
# Requeired
#-----------------------------------------------------------------#
if (!isset($content_width)) $content_width = 1170;
#-----------------------------------------------------------------#
# Shortcodes
#-----------------------------------------------------------------#
require_once('includes/tinymce/shortcodes.php');
#-----------------------------------------------------------------#
# Numeric Page Navi
#-----------------------------------------------------------------#
function page_navi($before = '', $after = '') {
	global $wpdb, $wp_query;
	$request = $wp_query->request;
	$posts_per_page = intval(get_query_var('posts_per_page'));
	$paged = intval(get_query_var('paged'));
	$numposts = $wp_query->found_posts;
	$max_page = $wp_query->max_num_pages;
	if ( $numposts <= $posts_per_page ) { return; }
	if(empty($paged) || $paged == 0) {
		$paged = 1;
	}
	$pages_to_show = 7;
	$pages_to_show_minus_1 = $pages_to_show-1;
	$half_page_start = floor($pages_to_show_minus_1/2);
	$half_page_end = ceil($pages_to_show_minus_1/2);
	$start_page = $paged - $half_page_start;
	if($start_page <= 0) {
		$start_page = 1;
	}
	$end_page = $paged + $half_page_end;
	if(($end_page - $start_page) != $pages_to_show_minus_1) {
		$end_page = $start_page + $pages_to_show_minus_1;
	}
	if($end_page > $max_page) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = $max_page;
	}
	if($start_page <= 0) {
		$start_page = 1;
	}
		
	echo $before.'<div class="pagination pagination-large"><ul class="clearfix">'."";

	$prevposts = get_previous_posts_link('<i class="icon-angle-left"></i>');
	if($prevposts) { echo '<li>' . $prevposts  . '</li>'; }
	else { echo '<li class="disabled"><a href="#"><i class="icon-angle-left"></i></a></li>'; }
	
	for($i = $start_page; $i  <= $end_page; $i++) {
		if($i == $paged) {
			echo '<li class="active"><a href="#">'.$i.'</a></li>';
		} else {
			echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
		}
	}
	echo '<li class="">';
	next_posts_link('<i class="icon-angle-right"></i>');
	echo '</li>';

	echo '</ul></div>'.$after."";
}

/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF

 */
/**
 * Hide ACF menu item from the admin menu

 */
function hide_admin_menu()
{
    echo '<style type="text/css">#toplevel_page_edit-post_type-acf{display:none;}</style>';
}

add_action('admin_head', 'hide_admin_menu');

if (function_exists("register_field_group")) {
    register_field_group(array(
        'id' => 'acf_gallery-settings',
        'title' => 'Gallery Settings',
        'fields' => array(
            array(
                'key' => 'field_51924fd161b58',
                'label' => 'Gallery',
                'name' => 'gallery',
                'type' => 'gallery',
                'instructions' => 'Upload all images for this gallery post.',
                'required' => 1,
                'preview_size' => 'thumbnail',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_format',
                    'operator' => '==',
                    'value' => 'gallery',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array(
        'id' => 'acf_portfolio-settings',
        'title' => 'Portfolio Settings',
        'fields' => array(
            array(
                'key' => 'field_5193507450256',
                'label' => 'Images for slider',
                'name' => 'image_slider',
                'type' => 'gallery',
                'preview_size' => 'thumbnail',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'portfolio',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array(
        'id' => 'acf_service-settings',
        'title' => 'Service Settings',
        'fields' => array(
            array(
                'key' => 'field_519255f40cae8',
                'label' => 'Icon Class',
                'name' => 'icon_class',
                'type' => 'text',
                'instructions' => 'You can find full list of FontAwesome Icons on <a href="http://fortawesome.github.io/Font-Awesome/icons/">http://fortawesome.github.io/Font-Awesome/icons/</a> site.',
                'default_value' => '',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_519ca828b6afc',
                'label' => 'Icon Image',
                'name' => 'icon_image',
                'type' => 'text',
                'instructions' => 'You can upload your own image instead of icon',
                'default_value' => '',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5192571f0cae9',
                'label' => 'Icon URL',
                'name' => 'icon_url',
                'type' => 'text',
                'instructions' => 'If you want you can add link to your service icon. Ex.: http://your_link.com',
                'default_value' => '',
                'formatting' => 'html',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'service-post',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array(
        'id' => 'acf_slider-settings',
        'title' => 'Slider Settings',
        'fields' => array(
            array(
                'key' => 'field_51925242c3208',
                'label' => 'Slider Images',
                'name' => 'slider_images',
                'type' => 'gallery',
                'instructions' => 'Uploaded images will be cropped to good looking size.',
                'required' => 1,
                'preview_size' => 'thumbnail',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_format',
                    'operator' => '==',
                    'value' => 'image',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_team-options',
        'title' => 'Team Options',
        'fields' => array (
            array (
                'default_value' => '',
                'formatting' => 'html',
                'key' => 'field_51d3dc34edf11',
                'label' => 'Person position',
                'name' => 'person_position',
                'type' => 'text',
            ),
            array(
                'key' => 'field_51925242c3290',
                'label' => 'Member gallery',
                'name' => 'member_gallery',
                'type' => 'gallery',
                'instructions' => 'Uploaded images will be cropped to good looking size.',
                'required' => 0,
                'preview_size' => 'thumbnail',
            ),
            array (
                'key' => 'field_51d3dcbfedf12',
                'label' => 'Person social',
                'name' => 'person_social',
                'type' => 'flexible_content',
                'layouts' => array (
                    array (
                        'label' => 'Facebook',
                        'name' => 'facebook',
                        'display' => 'row',
                        'sub_fields' => array (
                            array (
                                'default_value' => '',
                                'formatting' => 'html',
                                'key' => 'field_51d3f6582c589',
                                'label' => 'URL',
                                'name' => 'url',
                                'type' => 'text',
                                'column_width' => '',
                            ),
                        ),
                    ),
                    array (
                        'label' => 'Twitter',
                        'name' => 'twitter',
                        'display' => 'row',
                        'sub_fields' => array (
                            array (
                                'default_value' => '',
                                'formatting' => 'html',
                                'key' => 'field_51d3f6792c58b',
                                'label' => 'URL',
                                'name' => 'url',
                                'type' => 'text',
                                'column_width' => '',
                            ),
                        ),
                    ),
                    array (
                        'label' => 'Google+',
                        'name' => 'google+',
                        'display' => 'row',
                        'sub_fields' => array (
                            array (
                                'default_value' => '',
                                'formatting' => 'html',
                                'key' => 'field_51d40a9b4ba6e',
                                'label' => 'URL',
                                'name' => 'url',
                                'type' => 'text',
                                'column_width' => '',
                            ),
                        ),
                    ),
                    array (
                        'label' => 'Dribbble',
                        'name' => 'dribbble',
                        'display' => 'row',
                        'sub_fields' => array (
                            array (
                                'default_value' => '',
                                'formatting' => 'html',
                                'key' => 'field_51d40aa04ba6f',
                                'label' => 'URL',
                                'name' => 'url',
                                'type' => 'text',
                                'column_width' => '',
                            ),
                        ),
                    ),
                    array (
                        'label' => 'LinkedIn',
                        'name' => 'linkedin',
                        'display' => 'row',
                        'sub_fields' => array (
                            array (
                                'default_value' => '',
                                'formatting' => 'html',
                                'key' => 'field_51d40aa64ba70',
                                'label' => 'URL',
                                'name' => 'url',
                                'type' => 'text',
                                'column_width' => '',
                            ),
                        ),
                    ),
                    array (
                        'label' => 'MySpace',
                        'name' => 'myspace',
                        'display' => 'row',
                        'sub_fields' => array (
                            array (
                                'default_value' => '',
                                'formatting' => 'html',
                                'key' => 'field_51d40ac14ba73',
                                'label' => 'URL',
                                'name' => 'url',
                                'type' => 'text',
                                'column_width' => '',
                            ),
                        ),
                    ),
                    array (
                        'label' => 'GItHub',
                        'name' => 'github',
                        'display' => 'row',
                        'sub_fields' => array (
                            array (
                                'default_value' => '',
                                'formatting' => 'html',
                                'key' => 'field_51d40ace4ba74',
                                'label' => 'URL',
                                'name' => 'url',
                                'type' => 'text',
                                'column_width' => '',
                            ),
                        ),
                    ),
                    array (
                        'label' => 'Tumblr',
                        'name' => 'tumblr',
                        'display' => 'row',
                        'sub_fields' => array (
                            array (
                                'default_value' => '',
                                'formatting' => 'html',
                                'key' => 'field_51d40b474ba76',
                                'label' => 'URL',
                                'name' => 'url',
                                'type' => 'text',
                                'column_width' => '',
                            ),
                        ),
                    ),
                    array (
                        'label' => 'Blogger',
                        'name' => 'blogger',
                        'display' => 'row',
                        'sub_fields' => array (
                            array (
                                'default_value' => '',
                                'formatting' => 'html',
                                'key' => 'field_51d40b584ba78',
                                'label' => 'URL',
                                'name' => 'url',
                                'type' => 'text',
                                'column_width' => '',
                            ),
                        ),
                    ),
                    array (
                        'label' => 'Pinterest',
                        'name' => 'pinterest',
                        'display' => 'row',
                        'sub_fields' => array (
                            array (
                                'default_value' => '',
                                'formatting' => 'html',
                                'key' => 'field_51d40b794ba7c',
                                'label' => 'URL',
                                'name' => 'url',
                                'type' => 'text',
                                'column_width' => '',
                            ),
                        ),
                    ),
                    array (
                        'label' => 'Flickr',
                        'name' => 'flickr',
                        'display' => 'row',
                        'sub_fields' => array (
                            array (
                                'default_value' => '',
                                'formatting' => 'html',
                                'key' => 'field_51d40b824ba7d',
                                'label' => 'URL',
                                'name' => 'url',
                                'type' => 'text',
                                'column_width' => '',
                            ),
                        ),
                    ),
                    array (
                        'label' => 'Email',
                        'name' => 'email',
                        'display' => 'row',
                        'sub_fields' => array (
                            array (
                                'default_value' => '',
                                'formatting' => 'html',
                                'key' => 'field_51d40be14ba80',
                                'label' => 'URL',
                                'name' => 'url',
                                'type' => 'text',
                                'column_width' => '',
                            ),
                        ),
                    ),
                ),
                'button_label' => 'Add Social profile',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'team-post',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_testimonial-options',
        'title' => 'Testimonial Options',
        'fields' => array (
            array (
                'default_value' => '',
                'formatting' => 'br',
                'key' => 'field_51da9a933a97b',
                'label' => 'Testimonial',
                'name' => 'testimonial',
                'type' => 'textarea',
            ),
            array (
                'default_value' => '',
                'formatting' => 'html',
                'key' => 'field_51da9ac93a97c',
                'label' => 'Link text',
                'name' => 'link_text',
                'type' => 'text',
            ),
            array (
                'default_value' => '',
                'formatting' => 'html',
                'key' => 'field_51da9af63a97d',
                'label' => 'Link URL',
                'name' => 'link_url',
                'type' => 'text',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'testimonial-post',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_video',
        'title' => 'Video',
        'fields' => array (
            array (
                'layout' => 'horizontal',
                'choices' => array (
                    'youtube' => 'Youtube',
                    'vimeo' => 'Vimeo',
                    'other' => 'Other',
                ),
                'default_value' => 'youtube',
                'key' => 'field_51dcec694fdf9',
                'label' => 'Video type',
                'name' => 'video_type',
                'type' => 'radio',
            ),
            array (
                'default_value' => '',
                'formatting' => 'html',
                'key' => 'field_51dcedb44fdfa',
                'label' => 'Video ID',
                'name' => 'video_id',
                'type' => 'text',
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_51dcec694fdf9',
                            'operator' => '==',
                            'value' => 'youtube',
                        ),
                        array (
                            'field' => 'field_51dcec694fdf9',
                            'operator' => '==',
                            'value' => 'vimeo',
                        ),
                    ),
                    'allorany' => 'any',
                ),
            ),
            array (
                'default_value' => '',
                'formatting' => 'html',
                'key' => 'field_51dcee074fdfd',
                'label' => 'Iframe code',
                'name' => 'iframe_code',
                'type' => 'text',
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_51dcec694fdf9',
                            'operator' => '==',
                            'value' => 'other',
                        ),
                    ),
                    'allorany' => 'all',
                ),
            ),
            array (
                'default_value' => 600,
                'formatting' => 'html',
                'key' => 'field_51dcedd14fdfb',
                'label' => 'Video width',
                'name' => 'video_width',
                'type' => 'text',
            ),
            array (
                'default_value' => 360,
                'formatting' => 'html',
                'key' => 'field_51dcedf54fdfc',
                'label' => 'Video height',
                'name' => 'video_height',
                'type' => 'text',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_format',
                    'operator' => '==',
                    'value' => 'video',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}

/**
 * Include the TGM_Plugin_Activation class.

 */
require_once dirname(__FILE__) . '/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'gg_register_required_plugins');
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.

 */
function gg_register_required_plugins()
{
    $plugins = array(
        array(
            'name' => 'Contact Form 7',
            'slug' => 'contact-form-7',
            'required' => true,
            'force_activation' => false,
            'force_deactivation' => true,
        ),
        array(
            'name' => 'WooCommerce',
            'slug' => 'woocommerce',
            'required' => true,
            'force_activation' => false,
            'force_deactivation' => true,
        ),
        array(
            'name' => 'Advanced Custom Fields',
            'slug' => 'advanced-custom-fields',
            'required' => true,
            'force_activation' => false,
            'force_deactivation' => true,
        ),
        array(
            'name' => 'RevSlider',
            'slug' => 'revslider',
            'source' => get_template_directory() . '/includes/plugins/revslider.zip',
            'required' => true,
            'version' => '',
            'force_activation' => false,
            'force_deactivation' => true,
        ),
        array(
            'name' => 'ACF Gallery',
            'slug' => 'acf-gallery',
            'source' => get_template_directory() . '/includes/plugins/acf-gallery.zip',
            'required' => true,
            'version' => '',
            'force_activation' => false,
            'force_deactivation' =>true,
        ),
        array(
            'name' => 'ACF Flex',
            'slug' => 'acf-flexible-content',
            'source' => get_template_directory() . '/includes/plugins/acf-flexible-content.zip',
            'required' => true,
            'version' => '',
            'force_activation' => false,
            'force_deactivation' => true,
        )

    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.

     */
    $config = array(
        'domain' => 'GoGetThemes', // Text domain - likely want to be the same as your theme.
        'default_path' => '', // Default absolute path to pre-packaged plugins
        'parent_menu_slug' => 'themes.php', // Default parent menu slug
        'parent_url_slug' => 'themes.php', // Default parent URL slug
        'menu' => 'install-required-plugins', // Menu slug
        'has_notices' => true, // Show admin notices or not
        'is_automatic' => false, // Automatically activate plugins after installation or not
        'message' => '', // Message to output right before the plugins table
        'strings' => array(
            'page_title' => __('Install Required Plugins', 'GoGetThemes'),
            'menu_title' => __('Install Plugins', 'GoGetThemes'),
            'installing' => __('Installing Plugin: %s', 'GoGetThemes'), // %1$s = plugin name
            'oops' => __('Something went wrong with the plugin API.', 'GoGetThemes'),
            'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.'), // %1$s = plugin name(s)
            'notice_can_install_recommended' => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.'), // %1$s = plugin name(s)
            'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.'), // %1$s = plugin name(s)
            'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.'), // %1$s = plugin name(s)
            'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.'), // %1$s = plugin name(s)
            'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.'), // %1$s = plugin name(s)
            'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.'), // %1$s = plugin name(s)
            'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.'), // %1$s = plugin name(s)
            'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins'),
            'activate_link' => _n_noop('Activate installed plugin', 'Activate installed plugins'),
            'return' => __('Return to Required Plugins Installer', 'GoGetThemes'),
            'plugin_activated' => __('Plugin activated successfully.', 'GoGetThemes'),
            'complete' => __('All plugins installed and activated successfully. %s', 'GoGetThemes'), // %1$s = dashboard link
            'nag_type' => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );
    tgmpa($plugins, $config);
}
function save_smof_option(){
global $of_options, $options_machine, $smof_data, $smof_details;
if( !defined('ADMIN_PATH') )
	define( 'ADMIN_PATH', get_template_directory() . '/admin/' );
if( !defined('ADMIN_DIR') )
	define( 'ADMIN_DIR', get_template_directory_uri() . '/admin/' );
require_once ( ADMIN_PATH . 'functions/functions.load.php' );
require_once ( ADMIN_PATH . 'classes/class.options_machine.php' );
$options_machine = new Options_Machine($of_options);
$defaults = $options_machine->Defaults;
return $defaults;
}