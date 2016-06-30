<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<?php include(locate_template('template-parts/hero.php')); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">

        <?php do_action( 'foundationpress_page_before_entry_content' ); ?>

        <div class="row">
            <div class="columns large-12 xlarge-6">
            </div>
            <div class="columns large-12 xlarge-6">
                <?php the_content(); ?>
            </div>
        </div>

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
