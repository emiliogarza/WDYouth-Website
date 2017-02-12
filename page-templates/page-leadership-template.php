<?php
/*
Template Name: Leadership
*/
get_header(); ?>

<?php

      if(get_field('hero_image')) {
        echo '<img src="'. get_field("hero_image") .'" class="event-hero" />';
      }

      if(get_field('cover_image')) {
        echo '
        <div class="text-center">
          <div class="image-frame full-width">
            <img src="'. get_field("cover_image") .'" />
          </div>
        </div>';
      }

?>
<div id="leadership-page" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header class="text-center">
          <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content text-center">
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

</div>

<?php get_footer();
