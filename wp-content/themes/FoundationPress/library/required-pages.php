<?php
if (is_admin()){
    $required_pages_array = array(
        'Front Page',
        'About Us',
        'Team',
        'Testimonials',
        'News',
        'Contact'
    );

    foreach($required_pages_array as $new_page_title):

        //don't change the code bellow, unless you know what you're doing

        $page_check = get_page_by_title($new_page_title);
        $new_page = array(
                'post_type' => 'page',
                'post_title' => $new_page_title,
                'post_status' => 'publish',
                'post_author' => 1,
        );
        if(!isset($page_check->ID)){
                $new_page_id = wp_insert_post($new_page);
        }

    endforeach;
}
