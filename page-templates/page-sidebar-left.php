<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>
<?php

      if(get_field('event_background_image')) {
        echo '<img src="'. get_field("event_background_image") .'" class="event-hero" />';
      }
?>
<div class="featured-image-container">
  <div class="image-frame">
    <img src="http://localhost:8080/wp-content/uploads/2017/02/YC17-Artwork-wider.jpg" width="500px" />
  </div>
</div>
<div id="page-sidebar-left" role="main">

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
<?php get_sidebar(); ?>

</div>

<?php get_footer();
