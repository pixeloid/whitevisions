<?php

//namespace Roots\Sage\Utils;

/**
 * Tell WordPress to use searchform.php from the templates/ directory
 */
// function get_search_form() {
//   $form = '';
//   locate_template('/templates/searchform.php', true, false);
//   return $form;
// }
// add_filter('get_search_form', __NAMESPACE__ . '\\get_search_form');



add_action('customize_register','my_customize_register');
function my_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'themeslug_logo_section' , array(
	    'title'       => __( 'Logo', 'themeslug' ),
	    'priority'    => 30,
	    'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	$wp_customize->add_setting( 'themeslug_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
	    'label'    => __( 'Logo', 'themeslug' ),
	    'section'  => 'themeslug_logo_section',
	    'settings' => 'themeslug_logo',
	) ) );



	$wp_customize->add_section('seo_section', array(
	    'title'    => __('SEO', 'themeslug'),
	    'description' => 'META tagek',
	    'priority' => 40,
	));

	$wp_customize->add_setting('meta_description');
	
	$wp_customize->add_control('meta_description_text', array(
	    'label'      => __('Meta Description', 'themename'),
	    'section'    => 'seo_section',
	    'settings'   => 'meta_description',
	));
	$wp_customize->add_setting('meta_keywords');
	
	$wp_customize->add_control('meta_keywords_text', array(
	    'label'      => __('Meta Keywords', 'themename'),
	    'section'    => 'seo_section',
	    'settings'   => 'meta_keywords',
	));


}








function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');







add_action( 'after_setup_theme', 'add_image_sizes' );

function add_image_sizes() {
    add_image_size ( 'separator', 1600, null );
    add_image_size ( 'gallery', null, 750 );
}




