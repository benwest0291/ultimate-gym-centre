<?php

/**
 *
 * Stylesheets and Scripts
 *
 */
function gym_site_files()
{
    global $wp_query;
    $mapKey = get_theme_mod('map_api_key');

    // Styles
    wp_enqueue_style("boostrap", "//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("custom-google-fonts", "//fonts.googleapis.com/css2?family=Inter:wght@300&family=Josefin+Sans&family=Noto+Sans&family=Poppins:wght@600&family=Roboto:wght@500&family=Smythe&display=swap");
    wp_enqueue_style("font-awesome", "//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");
    wp_enqueue_style("gym_main_styles", get_theme_file_uri("./assets/css/style.css"));

    // Scripts
    wp_enqueue_script('googlMaps', 'https://maps.googleapis.com/maps/api/js?key=' . $mapKey, array('jquery'), '1', true);
    wp_enqueue_script("boostrapJS", "//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js", NULL, "1.0", true);
    wp_enqueue_script("gym-js", get_theme_file_uri("./assets/js/index.js"), array("jquery"), "1.0", true);

    wp_localize_script("gym-js", "gymData", array(
        "root_url" => get_site_url(),

    ));
}


add_action("wp_enqueue_scripts", "gym_site_files");

/**
 *
 * Site setup
 *
 */
function gym_site_setup()
{
    // Register navigation menus.
    register_nav_menus(
        array(
            'header' => esc_html__('Header Menu', 'gym')
        )
    );
}

add_action("after_setup_theme", "gym_site_setup");

/**
 *
 * Register Customizer Fields
 *
 */
require_once(get_template_directory() . '/inc/customizer.php');

/**
 *
 * Google Maps
 *
 */

function my_acf_google_map_api($api)
{
    $mapKey = get_theme_mod('map_api_key');
    $api['key'] = $mapKey;
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');



/**
 *
 * Masthead
 *
 */

function render_masthead($prefix = "", $args = array())
{
    $defaults = array(
        "masthead_background_image" => get_field($prefix . "_masthead_background_image"),
        "masthead_small_heading" => get_field($prefix . "_masthead_small_heading"),
        "masthead_main_heading" => get_field($prefix . "_masthead_main_heading"),
        "masthead_main_heading_two" => get_field($prefix . "_masthead_main_heading_two"),
        "masthead_button" => get_field($prefix . "_masthead_button"),
        "masthead_button_url" => get_field($prefix . "_masthead_button_url"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/masthead.php");
    unset($data);
}

/**
 *
 * Services
 *
 */

function render_services($prefix = "", $args = array())
{
    $defaults = array(
        "service_one_image" => get_field($prefix . "_service_one_image"),
        "service_one_heading" => get_field($prefix . "_service_one_heading"),
        "service_one_paragraph" => get_field($prefix . "_service_one_paragraph"),
        "service_two_image" => get_field($prefix . "_service_two_image"),
        "service_two_heading" => get_field($prefix . "_service_two_heading"),
        "service_two_paragraph" => get_field($prefix . "_service_two_paragraph"),
        "service_three_image" => get_field($prefix . "_service_three_image"),
        "service_three_heading" => get_field($prefix . "_service_three_heading"),
        "service_three_paragraph" => get_field($prefix . "_service_three_paragraph"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/services.php");
    unset($data);
}


/**
 *
 * Strapline
 *
 */

function render_strapline($prefix = "", $args = array())
{
    $defaults = array(
        "strapline_background_image" => get_field($prefix . "_strapline_background_image"),
        "strapline_heading" => get_field($prefix . "_strapline_heading"),
        "strapline_number" => get_field($prefix . "_strapline_number"),
        "strapline_button_text" => get_field($prefix . "_strapline_button_text"),
        "strapline_button_url" => get_field($prefix . "_strapline_button_url"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/strapline.php");
    unset($data);
}

/**
 *
 * Headings block
 *
 */

function render_headings_block($prefix = "", $args = array())
{
    $defaults = array(
        "small_heading" => get_field($prefix . "_small_heading"),
        "main_heading" => get_field($prefix . "_main_heading"),
        "paragraph" => get_field($prefix . "_paragraph"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/headings.php");
    unset($data);
}

/**
 *
 * Who we are
 *
 */

function render_who_we_are($prefix = "", $args = array())
{
    $defaults = array(
        "small_heading" => get_field($prefix . "_small_heading"),
        "main_heading" => get_field($prefix . "_main_heading"),
        "paragraph" => get_field($prefix . "_paragraph"),
        "image_one" => get_field($prefix . "_image_one"),
        "heading_one" => get_field($prefix . "_heading_one"),
        "image_two" => get_field($prefix . "_image_two"),
        "heading_two" => get_field($prefix . "_heading_two"),
        "image_three" => get_field($prefix . "_image_three"),
        "heading_three" => get_field($prefix . "_heading_three"),
        "button_text" => get_field($prefix . "_button_text"),
        "button_url" => get_field($prefix . "_button_url"),
        "main_image" => get_field($prefix . "_main_image"),

    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/who-we-are.php");
    unset($data);
}

/**
 *
 * BMI Calculator
 *
 */

function render_bmi_calculator($prefix = "", $args = array())
{
    $defaults = array(
        "bmi_background_image" => get_field($prefix . "_bmi_background_image"),
        "bmi_heading" => get_field($prefix . "_bmi_heading"),
        "bmi_paragraph" => get_field($prefix . "_bmi_paragraph"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/bmi-strapline.php");
    unset($data);
}

/**
 *
 * Straline video
 *
 */

function render_strapline_video($prefix = "", $args = array())
{
    $defaults = array(
        "strapline_background_image" => get_field($prefix . "_strapline_background_image"),
        "strapline_heading" => get_field($prefix . "_strapline_heading"),
        "strapline_button_text" => get_field($prefix . "_strapline_button_text"),
        "strapline_button_url" => get_field($prefix . "_strapline_button_url"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/strapline-video.php");
    unset($data);
}

/**
 *
 * Choose us
 *
 */

function render_choose_us($prefix = "", $args = array())
{
    $defaults = array(
        "youtube_video" => get_field($prefix . "_youtube_video"),
        "choose_us_small_heading" => get_field($prefix . "_choose_us_small_heading"),
        "choose_us_heading" => get_field($prefix . "_choose_us_heading"),
        "choose_us_paragraph" => get_field($prefix . "_choose_us_paragraph"),
        "icon_one" => get_field($prefix . "_icon_one"),
        "text_one" => get_field($prefix . "_text_one"),
        "icon_two" => get_field($prefix . "_icon_two"),
        "text_two" => get_field($prefix . "_text_two"),
        "icon_three" => get_field($prefix . "_icon_three"),
        "text_three" => get_field($prefix . "_text_three"),
        "icon_four" => get_field($prefix . "_icon_four"),
        "text_four" => get_field($prefix . "_text_four"),
        "choose_us_button_text" => get_field($prefix . "_choose_us_button_text"),
        "choose_us_button_url" => get_field($prefix . "_choose_us_button_url"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/choose-us.php");
    unset($data);
}

/**
 *
 * Banner
 *
 */

function render_banner($prefix = "", $args = array())
{
    $defaults = array(
        "banner_bg" => get_field($prefix . "_banner_bg"),
        "banner_heading" => get_field($prefix . "_banner_heading")
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/banner.php");
    unset($data);
}

/**
 *
 * About block
 *
 */

function render_about($prefix = "", $args = array())
{
    $defaults = array(
        "small_heading" => get_field($prefix . "_small_heading"),
        "main_heading" => get_field($prefix . "_main_heading"),
        "paragraph" => get_field($prefix . "_paragraph"),
        "button_text" => get_field($prefix . "_button_text"),
        "button_url" => get_field($prefix . "_button_url"),
        "image" => get_field($prefix . "_image")
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/about.php");
    unset($data);
}

/**
 *
 * About block
 *
 */

function render_about_grid($prefix = "", $args = array())
{
    $defaults = array(
        "about_grid_icon_one" => get_field($prefix . "_about_grid_icon_one"),
        "about_grid_heading_one" => get_field($prefix . "_about_grid_heading_one"),
        "about_grid_paragraph_one" => get_field($prefix . "_about_grid_paragraph_one"),
        "about_main_image_one" => get_field($prefix . "_about_main_image_one"),
        "about_grid_icon_two" => get_field($prefix . "_about_grid_icon_two"),
        "about_grid_heading_two" => get_field($prefix . "_about_grid_heading_two"),
        "about_grid_paragraph_two" => get_field($prefix . "_about_grid_paragraph_two"),
        "about_main_image_two" => get_field($prefix . "_about_main_image_two")
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/about-grid.php");
    unset($data);
}


/**
 *
 * Turn acf REST API format to standard 
 *
 */

add_filter('acf/settings/rest_api_format', function () {
    return 'standard';
});
