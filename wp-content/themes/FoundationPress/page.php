<?php
get_header();
include(locate_template('template-parts/hero.php')); 
$gallery_meta = get_post_meta($post->ID, '_uni_page_gallery_image', true);
?>


<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
        <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <?php do_action( 'foundationpress_page_before_entry_content' ); ?>

        <div class="entry-content">
            <?php the_content(); ?>
        </div>

        <?php if($gallery_meta): ?>
            <?php foreach($gallery_meta as $gallery_id => $gallery_image): ?>
                <?php print_r($gallery_id); ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <footer>
            <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
            <p><?php the_tags(); ?></p>
        </footer>

        <?php do_action( 'foundationpress_page_before_comments' ); ?>
        <?php comments_template(); ?>
        <?php do_action( 'foundationpress_page_after_comments' ); ?>
    </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
