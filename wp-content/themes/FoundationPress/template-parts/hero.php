<?php $slider_img_meta = get_post_meta($post->ID, '_uni_page_slider_image', true); ?>
<?php $hero_subtitle = get_post_meta($post->ID, '_uni_page_subtitle', true); ?>
<?php if($slider_img_meta): ?>
    <div class="row">
        <div class="hero-slider__wrapper">
            <div class="slick-js hero-slider">
                <?php foreach($slider_img_meta as $slider_image_key => $slider_image_src): ?>
                    <?php if($slider_image_src && $slider_image_src != ''): ?>
                        <div>
                            <img src="<?php echo $slider_image_src; ?>" />
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif;?>

<?php if($hero_subtitle): ?>
    <div>
        <h3><?php echo $hero_subtitle; ?></h3>
    </div>
<?php endif; ?>
