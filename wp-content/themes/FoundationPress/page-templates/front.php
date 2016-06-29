<?php
/*
Template Name: Front Page
*/
get_header(); ?>

<?php include(locate_template('template-parts/hero.php')); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">

      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>

	  <?php $grid_meta = get_post_meta($post->ID, 'grid_block_group', true); ?>

	  <?php if(!empty($grid_meta)): ?>
		  <div class="grid fp-grid">
			  <div class="row">
				  <?php foreach($grid_meta as $grid_block): ?>

					  <?php $block_title = $grid_block['title']; ?>
					  <?php $block_link = $grid_block['link']; ?>
					  <?php $block_image_id = $grid_block['image_id']; ?>
                      <?php $block_image_sized_src = wp_get_attachment_image_src($block_image_id, 'small', false); ?>

					  <div class="columns small-6 medium-4">
						  <article class="fp-cta landmark">
                              	<a class="fp-cta__link" href="<?php echo $block_link; ?>">

                                    <?php if($block_image_sized_src): ?>
                                        <img class="fp-cta__thumb" src="<?php echo $block_image_sized_src[0]; ?>"/>
                                    <?php endif; ?>

                                    <div class="fp-cta__title-wrapper">
							            <h3 class="fp-cta__title"><?php echo $block_title; ?></h3>
                                    </div>
								</a>

						  </article>

					  </div>
				  <?php endforeach; ?>
			  </div>
		  </div>
	  <?php endif; ?>

    <div class="entry-content">
        <?php the_content(); ?>
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
