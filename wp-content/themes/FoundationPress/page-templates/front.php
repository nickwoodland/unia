<?php
/*
Template Name: Front Page
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

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

	  <?php $grid_meta = get_post_meta($post->ID, 'grid_block_group', true); ?>

	  <?php if(!empty($grid_meta)): ?>
		  <div class="grid">
			  <div class="row collapse">
				  <?php foreach($grid_meta as $grid_block): ?>

					  <?php $block_title = $grid_block['title']; ?>
					  <?php $block_link = $grid_block['link']; ?>
					  <?php $block_image_id = $grid_block['image_id']; ?>
					  <?php // $grid_interchange_string = grid_interchange_string($block_image_id); ?>

					  <div class="columns small-6 medium-4">
						  <article class="grid-block" data-interchange="<?php // echo $grid_interchange_string; ?>">

							  <div class="grid-block__inner">

								  <a class="grid-block__link" href="<?php echo $block_link; ?>">
									  <h3 class="grid-block__title grid-block__title--hidden"><?php echo $block_title; ?></h3>
								  </a>

							  </div>

						  </article>

					  </div>
				  <?php endforeach; ?>
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
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
