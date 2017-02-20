<?php
/*
Template Name: SFC Page
*/
get_header(); ?>

<div id="sfc" role="main">

<?php
      if(get_field('sfc_hero_image')) {
        echo '<img src="'. get_field("sfc_hero_image") .'" class="sfc-hero" />';
      }
?>


<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
      </div>
  <div class="row">
    <div class="small-12 medium-4 columns image">
      <?php
        if(get_field('sfc_ministries_image')) {
          echo '<img class="anime" src="'. get_field("sfc_ministries_image") .'" />';
        }
      ?>    
    </div>
    <div class="small-12 medium-8 columns content">
      <h2>Sheaves for Christ Ministries</h2>
      <?php
        if(get_field('sfc_ministries_content')) {
          echo get_field("sfc_ministries_content");
        }
      ?> 
    </div>
  </div>

  <div class="row">
    <div class="small-12 medium-4 medium-push-8 columns image">
      <?php
        if(get_field('sfc_goldengate_image')) {
          echo '<img class="anime" src="'. get_field("sfc_goldengate_image") .'" />';
        }
      ?> 
    </div>   
    <div class="small-12 medium-8 medium-pull-4 columns content">
      <h2>Golden Gate Walkathon</h2>
      <?php
        if(get_field('sfc_goldengate_content')) {
          echo get_field("sfc_goldengate_content");
        }
      ?>
    </div>   
  </div>


  <div class="row">
    <div class="small-12 medium-4 columns image">
      <?php
        if(get_field('sfc_c31_image')) {
          echo '<img class="anime" src="'. get_field("sfc_c31_image") .'" />';
        }
      ?>
    </div>
    <div class="small-12 medium-8 columns content">
      <h2>Challenge 31</h2>
      <?php
        if(get_field('sfc_c31_content')) {
          echo get_field("sfc_c31_content");
        }
      ?>    
    </div>
  </div>
  <div class="row">
    <div class="small-12 medium-4 medium-push-8 columns image">
      <?php
        if(get_field('sfc_realmccoy_image')) {
          echo '<img class="anime" src="'. get_field("sfc_realmccoy_image") .'" />';
        }
      ?>    
    </div>   
    <div class="small-12 medium-8 medium-pull-4 columns content">
      <h2>The Real McCoy</h2>
      <?php
        if(get_field('sfc_realmccoy_content')) {
          echo get_field("sfc_realmccoy_content");
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

</div>

<?php get_footer();
