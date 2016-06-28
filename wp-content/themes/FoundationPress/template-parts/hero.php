<?php $slider_img_meta = get_post_meta($post->ID, '_uni_page_slider_image', true); ?>
<?php $hero_subtitle = get_post_meta($post->ID, '_uni_page_subtitle', true); ?>
<?php if($slider_img_meta): ?>
    <ul>
        <?php foreach($slider_img_meta as $slider_image_key => $slider_image_src): ?>
            <?php $img_interchange_string = fp_interchange_string($slider_image_key); ?>
            <?php if($img_interchange_string): ?>
                <li>
                    <img data-interchange="<?php echo $img_interchange_string; ?>" />
                </li>
            <?php endif; ?>
        <?php endforeach; ?>`
    </ul>
<?php endif;?>

<?php if($hero_subtitle): ?>
    <div>
        <h3><?php echo $hero_subtitle; ?></h3>
    </div>
<?php endif; ?>
