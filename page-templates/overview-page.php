<?php
/*
Template Name: Overview Pages
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
      <div class="row small-up-1 medium-up-3">
      <?php $our_pages = get_pages(array(
          'child_of'    => $post->ID,
          'show_date'   => 'modified',
          'sort_column' => 'post_date', 
          'sort_order' => 'desc',
          'date_format' => $date_format
      )); ?>
      <?php if (!empty($our_pages)): ?>
        <?php foreach ($our_pages as $key => $page_item): ?>
        <div class="column">
          <div class="card">            
          <?php echo get_the_post_thumbnail($page_item->ID,array(250, 100)); ?>
            <div class="card-content">                            
              <h4><?php echo $page_item->post_title ; ?></h4>
              <a class="button" href="<?php echo esc_url(get_permalink($page_item->ID)); ?>">View Details</a>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      <?php endif ?>
      </div>
      <div class="the-tags">
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
      </div>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
  </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
