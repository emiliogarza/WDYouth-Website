<?php
/*
Template Name: Contact Us Page
*/
get_header(); ?>
<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>  
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content contact-us-container">      
        <div class="small-12 medium-4 columns">
        <?php the_content(); ?>
        </div>
        <div class="small-12 medium-8 columns">
          <div id="map"></div>
          <script>
            function initMap() {
              var uluru = {lat: 37.493837, lng: -120.847664};
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: uluru
              });
              var marker = new google.maps.Marker({
                position: uluru,
                map: map
              });
            }
          </script>
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmz_kPQkGh6ecMpcqI4tYzLatQhczHRnM&callback=initMap"></script>
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
