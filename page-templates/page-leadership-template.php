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
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content text-center">
          <?php the_content(); ?>
          <?php
          /** Youth Committee Heading **/
            if(get_field('youth_committee_heading')) {               
              echo '<h2>'. get_field("youth_committee_heading") .'</h2>';
            }
          ?>
          <div class="row small-up-1 medium-up-3">
          <?php
          /** Youth President **/
            if(get_field('president_image') && get_field('president_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("president_image") .'" />
              <div class="card-content">
              <h3>'. get_field("president_name") .'</h3>
              <h5>Youth President</h5>
              <a href="mailto:'. get_field("president_email") .'"><h5>'. get_field("president_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }
          /** Youth Secretary **/
            if(get_field('secretary_image') && get_field('secretary_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("secretary_image") .'" />
              <div class="card-content">
              <h3>'. get_field("secretary_name") .'</h3>
              <h5>Youth Secretary</h5>
              <a href="mailto:'. get_field("secretary_email") .'"><h5>'. get_field("secretary_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }
          /** Youth Promotions **/
            if(get_field('promotions_image') && get_field('promotions_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("promotions_image") .'" />
              <div class="card-content">
              <h3>'. get_field("promotions_name") .'</h3>
              <h5>Youth Promotions</h5>
              <a href="mailto:'. get_field("promotions_email") .'"><h5>'. get_field("promotions_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }
          /** Section 1 Director **/
            if(get_field('section1_image') && get_field('section1_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("section1_image") .'" />
              <div class="card-content">
              <h3>'. get_field("section1_name") .'</h3>
              <h5>Section 1 Director</h5>
              <a href="mailto:'. get_field("section1_email") .'"><h5>'. get_field("section1_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            } 
          /** Section 2 Director **/
            if(get_field('section2_image') && get_field('section2_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("section2_image") .'" />
              <div class="card-content">
              <h3>'. get_field("section2_name") .'</h3>
              <h5>Section 2 Director</h5>
              <a href="mailto:'. get_field("section2_email") .'"><h5>'. get_field("section2_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }  
          /** Section 3 Director **/
            if(get_field('section3_image') && get_field('section3_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("section3_image") .'" />
              <div class="card-content">
              <h3>'. get_field("section3_name") .'</h3>
              <h5>Section 3 Director</h5>
              <a href="mailto:'. get_field("section3_email") .'"><h5>'. get_field("section3_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }  
          /** Section 4 Director **/
            if(get_field('section4_image') && get_field('section4_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("section4_image") .'" />
              <div class="card-content">
              <h3>'. get_field("section4_name") .'</h3>
              <h5>Section 4 Director</h5>
              <a href="mailto:'. get_field("section4_email") .'"><h5>'. get_field("section4_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }
          /** Section 5 Director **/
            if(get_field('section5_image') && get_field('section5_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("section5_image") .'" />
              <div class="card-content">
              <h3>'. get_field("section5_name") .'</h3>
              <h5>Section 5 Director</h5>
              <a href="mailto:'. get_field("section5_email") .'"><h5>'. get_field("section5_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }
          /** Section 6 Director **/
            if(get_field('section6_image') && get_field('section6_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("section6_image") .'" />
              <div class="card-content">
              <h3>'. get_field("section6_name") .'</h3>
              <h5>Section 6 Director</h5>
              <a href="mailto:'. get_field("section6_email") .'"><h5>'. get_field("section6_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            } 
          /** Section 7 Director **/
            if(get_field('section7_image') && get_field('section7_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("section7_image") .'" />
              <div class="card-content">
              <h3>'. get_field("section7_name") .'</h3>
              <h5>Section 7 Director</h5>
              <a href="mailto:'. get_field("section7_email") .'"><h5>'. get_field("section7_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            } 
          /** Section 8 Director **/
            if(get_field('section8_image') && get_field('section8_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("section8_image") .'" />
              <div class="card-content">
              <h3>'. get_field("section8_name") .'</h3>
              <h5>Section 8 Director</h5>
              <a href="mailto:'. get_field("section8_email") .'"><h5>'. get_field("section8_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            } 
          /** Section 9 Director **/
            if(get_field('section9_image') && get_field('section9_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("section9_image") .'" />
              <div class="card-content">
              <h3>'. get_field("section9_name") .'</h3>
              <h5>Section 9 Director</h5>
              <a href="mailto:'. get_field("section9_email") .'"><h5>'. get_field("section9_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }                                                                                                                     
          ?>          
          </div>
          <?php
          /** Project Directors Heading **/
            if(get_field('project_directors_heading')) {               
              echo '<h2>'. get_field("project_directors_heading") .'</h2>';
            }
          ?>
          <div class="row small-up-1 medium-up-3">
          <?php
          /** Hyphen Team 1 **/
            if(get_field('hyphen1_image') && get_field('hyphen1_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("hyphen1_image") .'" />
              <div class="card-content">
              <h3>'. get_field("hyphen1_name") .'</h3>
              <h5>Hyphen Director</h5>
              <a href="mailto:'. get_field("hyphen1_email") .'"><h5>'. get_field("hyphen1_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }
          /** Hyphen Team 2 **/
            if(get_field('hyphen2_image') && get_field('hyphen2_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("hyphen2_image") .'" />
              <div class="card-content">
              <h3>'. get_field("hyphen2_name") .'</h3>
              <h5>Hyphen Committee Member</h5>
              <a href="mailto:'. get_field("hyphen2_email") .'"><h5>'. get_field("hyphen2_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }
          /** Hyphen Team 3 **/
            if(get_field('hyphen3_image') && get_field('hyphen3_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("hyphen3_image") .'" />
              <div class="card-content">
              <h3>'. get_field("hyphen3_name") .'</h3>
              <h5>Hyphen Committee Member</h5>
              <a href="mailto:'. get_field("hyphen3_email") .'"><h5>'. get_field("hyphen3_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }
          /** WAY Choir Coordinator **/
            if(get_field('way_choir_coordinator_image') && get_field('way_choir_coordinator_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("way_choir_coordinator_image") .'" />
              <div class="card-content">
              <h3>'. get_field("way_choir_coordinator_name") .'</h3>
              <h5>WAY Choir Coordinator</h5>
              <a href="mailto:'. get_field("way_choir_coordinator_email") .'"><h5>'. get_field("way_choir_coordinator_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            } 
          /** Senior Camp Principal **/
            if(get_field('senior_camp_principal_image') && get_field('senior_camp_principal_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("senior_camp_principal_image") .'" />
              <div class="card-content">
              <h3>'. get_field("senior_camp_principal_name") .'</h3>
              <h5>Senior Camp Principal</h5>
              <a href="mailto:'. get_field("senior_camp_principal_email") .'"><h5>'. get_field("senior_camp_principal_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }  
          /** Community West Coordinator **/
            if(get_field('community_west_coordinator_image') && get_field('community_west_coordinator_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("community_west_coordinator_image") .'" />
              <div class="card-content">
              <h3>'. get_field("community_west_coordinator_name") .'</h3>
              <h5>Community West Coordinator</h5>
              <a href="mailto:'. get_field("community_west_coordinator_email") .'"><h5>'. get_field("community_west_coordinator_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }  
          /** Project 7 Coordinator **/
            if(get_field('project7_image') && get_field('project7_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("project7_image") .'" />
              <div class="card-content">
              <h3>'. get_field("project7_name") .'</h3>
              <h5>Project 7 Coordinator</h5>
              <a href="mailto:'. get_field("project7_email") .'"><h5>'. get_field("project7_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }
          /** Impact Coordinator **/
            if(get_field('impact_coordinator_image') && get_field('impact_coordinator_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("impact_coordinator_image") .'" />
              <div class="card-content">
              <h3>'. get_field("impact_coordinator_name") .'</h3>
              <h5>Impact Coordinator</h5>
              <a href="mailto:'. get_field("impact_coordinator_email") .'"><h5>'. get_field("impact_coordinator_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
            }
          /** Senior Bible Quizzing Coordinator **/
            if(get_field('sbq_coordinator_image') && get_field('sbq_coordinator_name')) {               
              echo '<div class="column">
                    <div class="card">
              <img src="'. get_field("sbq_coordinator_image") .'" />
              <div class="card-content">
              <h3>'. get_field("sbq_coordinator_name") .'</h3>
              <h5>Senior Bible Quizzing Coordinator</h5>
              <a href="mailto:'. get_field("sbq_coordinator_email") .'"><h5>'. get_field("sbq_coordinator_email") .'</h5></a>              
              </div>
              </div>
              </div>
              ';
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
