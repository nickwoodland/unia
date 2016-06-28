<?php

/* banner metaboxes */
function page_gallery_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_uni_page_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'gallery_meta',
        'title'         => __( 'Sidebar Gallery Images', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        'show_on'       => array( 'key' => 'exclude-front-page'),
        //'show_on_cb' => 'uni_metabox_exclude_front_page'
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Multi File Field
    $cmb->add_field( array(
        'name'       => __( 'Gallery Image', 'cmb2' ),
        'desc'       => __( 'Upload images to be shown on the right hand side of the page', 'cmb2' ),
        'id'         => $prefix . 'gallery_image',
        'type'       => 'file_list',
        //'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        //'repeatable'      => true,
    ) );

}

/* page subtitle metabox */
function page_hero_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_uni_page_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'hero_meta',
        'title'         => __( 'Hero Banner', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Multi File field
    $cmb->add_field( array(
        'name'       => __( 'Slider Images', 'cmb2' ),
        'desc'       => __( 'Upload images to be displayed in the page slider', 'cmb2' ),
        'id'         => $prefix . 'slider_image',
        'type'       => 'file_list',
        //'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        //'repeatable'      => true,
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Slider Subtitle Text', 'cmb2' ),
        //'desc'       => __( 'field description (optional)', 'cmb2' ),
        'id'         => $prefix . 'subtitle',
        'type'       => 'text',
    ) );
}

add_action( 'cmb2_admin_init', 'page_hero_metaboxes' );
add_action( 'cmb2_admin_init', 'page_gallery_metaboxes' );
