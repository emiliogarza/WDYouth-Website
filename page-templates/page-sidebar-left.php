<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>
<?php

      if(get_field('event_background_image')) {
        echo '<img src="'. get_field("event_background_image") .'" class="event-hero" />';
      }

      if(get_field('event_logo_image')) {
        echo '
        <div class="text-center">
          <div class="image-frame">
            <img src="'. get_field("event_logo_image") .'" />
          </div>
        </div>';
      }

?>
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
          <ul class="tabs" data-tabs id="event-details-tabs">
          <?php
            if(get_field('panel1-title')) {
              echo '<li class="tabs-title is-active"><a href="#panel1" aria-selected="true">'. get_field("panel1-title") .'</a></li>';
            }
            if(get_field('panel2-title')) {
              echo '<li class="tabs-title"><a href="#panel2" aria-selected="true">'. get_field("panel2-title") .'</a></li>';
            }  
            if(get_field('panel3-title')) {
              echo '<li class="tabs-title"><a href="#panel3" aria-selected="true">'. get_field("panel3-title") .'</a></li>';
            }                       
            if(get_field('panel4-title')) {
              echo '<li class="tabs-title"><a href="#panel4" aria-selected="true">'. get_field("panel4-title") .'</a></li>';
            }
            if(get_field('panel5-title')) {
              echo '<li class="tabs-title"><a href="#panel5" aria-selected="true">'. get_field("panel5-title") .'</a></li>';
            }                            
            if(get_field('panel6-title')) {
              echo '<li class="tabs-title"><a href="#panel6" aria-selected="true">'. get_field("panel6-title") .'</a></li>';
            }            
            if(get_field('panel7-title')) {
              echo '<li class="tabs-title"><a href="#panel7" aria-selected="true">'. get_field("panel7-title") .'</a></li>';
            }            
          ?>
          </ul>
          <div class="tabs-content" data-tabs-content="event-details-tabs">
          <?php 
            if(get_field('panel1-content')) {
              echo '<div class="tabs-panel is-active" id="panel1">'
              . get_field("panel1-content") .
              '</div>';
            }
          ?>
          <?php 
            if(get_field('panel2-content')) {
              echo '<div class="tabs-panel is-active" id="panel2">'
              . get_field("panel2-content") .
              '</div>';
            }
          ?>
          <?php 
            if(get_field('panel3-content')) {
              echo '<div class="tabs-panel is-active" id="panel3">'
              . get_field("panel3-content") .
              '</div>';
            }
          ?>
          <?php 
            if(get_field('panel4-content')) {
              echo '<div class="tabs-panel is-active" id="panel4">'
              . get_field("panel4-content") .
              '</div>';
            }
          ?>
          <?php 
            if(get_field('panel5-content')) {
              echo '<div class="tabs-panel is-active" id="panel5">'
              . get_field("panel5-content") .
              '</div>';
            }
          ?>
          <?php 
            if(get_field('panel6-content')) {
              echo '<div class="tabs-panel is-active" id="panel6">'
              . get_field("panel6-content") .
              '</div>';
            }
          ?>
          <?php 
            if(get_field('panel7-content')) {
              echo '<div class="tabs-panel is-active" id="panel7">'
              . get_field("panel7-content") .
              '</div>';
            }
          ?>                                                             
          </div>
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
