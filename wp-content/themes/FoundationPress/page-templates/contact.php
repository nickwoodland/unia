<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<?php include(locate_template('template-parts/hero.php')); ?>

<div class="contact-page" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>">

        <?php do_action( 'foundationpress_page_before_entry_content' ); ?>

        <div class="row collapse landmark">
            <div class="columns large-12 xlarge-6">
                <div class="contact-page__form">
                    <?php gravity_form( 1, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true ); ?>
                </div>
            </div>
            <div class="columns large-12 xlarge-6">
                <div class="contact-page__content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

        <div class="row collapse landmark">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.860282275906!2d-0.13596718396680157!3d51.49743137963351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604dc378af6fb%3A0xf70b706425273059!2sUnia+Opticians!5e0!3m2!1sen!2suk!4v1467280635591" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
