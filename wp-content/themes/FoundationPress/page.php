<?php
get_header();
include(locate_template('template-parts/hero.php'));
$gallery_meta = get_post_meta($post->ID, '_uni_page_gallery_image', true);
?>


<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="row page-sidebar collapse" data-equalizer data-equalize-on="large">
    <div class="sidebar" data-equalizer-watch>
        <div class="sidebar__inner">
            <nav class="">
                <?php foundationpress_sidebar_nav(); ?>
            </nav>
        </div>
    </div>
    <div class="columns medium-12 large-9" data-equalizer-watch>
        <article class="page-container" id="post-<?php the_ID(); ?>">
            <header>
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <?php do_action( 'foundationpress_page_before_entry_content' ); ?>

            <?php if($gallery_meta): ?>
                <div class="row">
                    <div class="columns medium-12 large-8">
            <?php endif; ?>

                        <div class="entry-content ">
                            <?php the_content(); ?>
                        </div>

            <?php if($gallery_meta): ?>
                    </div>
                    <div class="columns medium-12 large-4">
                        <div class="page-gallery">
                            <?php foreach($gallery_meta as $gallery_id => $gallery_image): ?>
                                <?php $gallery_image_sized_src = wp_get_attachment_image_src($gallery_id, 'small', false); ?>
                                <?php if($gallery_image_sized_src): ?>
                                    <img class="page-gallery__image" src="<?php echo $gallery_image_sized_src[0]; ?>" />
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <footer>
                <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
                <p><?php the_tags(); ?></p>
            </footer>

            <?php do_action( 'foundationpress_page_before_comments' ); ?>
            <?php comments_template(); ?>
            <?php do_action( 'foundationpress_page_after_comments' ); ?>
        </article>
    </div>
</div>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
