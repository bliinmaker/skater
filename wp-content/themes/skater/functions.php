<?php
/**
 * skater functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package skater
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('skater_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function skater_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on skater, use a find and replace
         * to change 'skater' to the name of your theme in all the template files.
         */
        load_theme_textdomain('skater', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'skater'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'skater_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'skater_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function skater_content_width()
{
    $GLOBALS['content_width'] = apply_filters('skater_content_width', 640);
}

add_action('after_setup_theme', 'skater_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function skater_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'skater'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'skater'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'skater_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function skater_scripts()
{

    $styles_array = [
        [
            "id" => "icomoon",
            "path" => "fonts/icomoon/style.css"
        ],
        [
            "id" => "bootstrap.min",
            "path" => "css/bootstrap.min.css"
        ],
        [
            "id" => "bootstrap.min",
            "path" => "css/bootstrap.min.css"
        ],
        [
            "id" => "jquery.fancybox.min",
            "path" => "css/jquery.fancybox.min.css"
        ],
        [
            "id" => "owl.carousel.min",
            "path" => "css/owl.carousel.min.css"
        ],
        [
            "id" => "owl.theme.default.min",
            "path" => "css/owl.theme.default.min.css"
        ],
        [
            "id" => "flaticon",
            "path" => "fonts/flaticon/font/flaticon.css"
        ],
        [
            "id" => "aos",
            "path" => "css/aos.css"
        ],
        [
            "id" => "style",
            "path" => "css/style.css"
        ]
    ];

    $scripts_array = [
        [
            "id" => "jquery",
            "path" => "js/-3.3.1.min.js"
        ],
        [
            "id" => "popper",
            "path" => "js/popper.min.js"
        ],
        [
            "id" => "bootstrap",
            "path" => "js/bootstrap.min.js"
        ],
        [
            "id" => "owl.carousel.min",
            "path" => "js/owl.carousel.min.js"
        ],
        [
            "id" => "jquery.sticky",
            "path" => "js/jquery.sticky.js"
        ],
        [
            "id" => "jquery.waypoints",
            "path" => "js/jquery.waypoints.min.js"
        ],
        [
            "id" => "jquery.animateNumber",
            "path" => "js/jquery.animateNumber.min.js"
        ],
        [
            "id" => "jquery.fancybox",
            "path" => "js/jquery.fancybox.min.js"
        ],
        [
            "id" => "jquery.easing",
            "path" => "js/jquery.easing.1.3.js"
        ],
        [
            "id" => "aos",
            "path" => "js/aos.js"
        ],
        [
            "id" => "main",
            "path" => "js/main.js"
        ]
    ];

    foreach ($styles_array as $css) {
        wp_enqueue_style($css["id"], get_template_directory_uri() . '/assets/' . $css["path"]);
    }

    foreach ($scripts_array as $js) {
        wp_enqueue_script($js["id"], get_template_directory_uri() . '/assets/' . $js["path"], array(), _S_VERSION, true);
    }


    //<link rel="stylesheet" href="css/bootstrap.min.css">


    //wp_enqueue_style( 'skater-style', get_stylesheet_uri(), array(), _S_VERSION );
    //wp_style_add_data( 'skater-style', 'rtl', 'replace' );

    //wp_enqueue_script( 'skater-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'skater_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Redux panel require
 */

require get_template_directory() . '/inc/redux-panel.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

