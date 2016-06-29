<?php
function reg_image_sizes() {
    add_image_size( 'small', 220, 220 );
}
add_action( 'after_setup_theme', 'reg_image_sizes' );
?>
