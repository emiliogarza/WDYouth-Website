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
        <img class="anime" src="http://wdyouth.org/wp-content/themes/wdyouth16/assets/images/sfc-ministries.png" />
    </div>
    <div class="small-12 medium-8 columns content">
      <h2>Sheaves for Christ Ministries</h2>
      <p>
          Sheaves for Christ funds missions globally, including in our own district. Sheaves for Christ dollars make a huge world impact! Below are some of the ministries SFC supports. Find out more information about these great ministries at <a href="http://sheavesforchrist.com/sfc-is/" target="_blank">sheavesforchrist.com/sfc-is/</a>.
      </p>
      <p>
        <strong>Global Missions</strong> - <strong>North American Missions</strong> - <strong>Tupelo Children's Mansion</strong> - <strong>Lighthouse Ranch for Boys</strong> - <strong>Senior Bible Quizzing</strong> - <strong>Spirit of Freedom Ministries</strong> - <strong>Divisions of Education</strong> - <strong>Apostolic Youth Corps</strong> - <strong>Campus Ministry International</strong> - <strong>Hyphen Young Adult Ministry</strong> - <strong>District Projects</strong>
      </p>
    </div>
  </div>

  <div class="row">
    <div class="small-12 medium-4 medium-push-8 columns image">
        <img class="anime" src="http://wdyouth.org/wp-content/themes/wdyouth16/assets/images/walkathon.png" />
    </div>   
    <div class="small-12 medium-8 medium-pull-4 columns content">
      <h2>Golden Gate Walkathon</h2>
      <p>
          On <strong>August 20th, 2016</strong> the young people of the Western District will walk the golden gate bridge to raise money for SFC! Orientation will begin at 10am at the pavilion. <br />Start getting sponsors today by downloading the Sponsor Sheet!
      </p>
      <a role="button" class="download small-12 medium-4 large button" href="/wp-content/uploads/2016/05/SponsorSheet_2016.pdf" target="_blank">Sponsor Sheet</a>

    </div>   
  </div>


  <div class="row">
    <div class="small-12 medium-4 columns image">
        <img class="anime" src="http://wdyouth.org/wp-content/themes/wdyouth16/assets/images/c31_logo.png" />
    </div>
    <div class="small-12 medium-8 columns content">
      <h2>Challenge 31</h2>
      <p>
        C31 is an opportunity for students to raise between $341-$961 for Sheaves for Christ
by finding sponsors who will give $11, $21, or $31. Participants could choose to set a
goal of 1 sponsor a day for a month (31 days in August).
      </p>
      <a role="button" class="download small-12 medium-4 large button c31" href="http://download.pentecostalyouth.org/SFC/2016/C31_Student_Guide.pdf" target="_blank">Sponsor Sheet</a>
      <a role="button" class="download small-12 medium-4 large button c31" href="http://download.pentecostalyouth.org/SFC/2016/C31_Leader_Guide.pdf" target="_blank">Leaders Guide</a>
    </div>
  </div>
  <div class="row">
    <div class="small-12 medium-4 medium-push-8 columns image">
        <img class="anime" src="http://wdyouth.org/wp-content/themes/wdyouth16/assets/images/mccoy.jpg" />
    </div>   
    <div class="small-12 medium-8 medium-pull-4 columns content">
      <h2>The Real McCoy</h2>
      <p>
        Many young people have discovered their passion for God’s Kingdom by getting personally involved in life-giving SFC fundraising via The Real McCoy Contest. The students in your church can be involved in this exciting contest as we challenge our Apostolic youth to live sacrificially and become a generation of givers.
      </p>
      <p>
Winners from each district across North America will be flown in to the World Evangelism Center in St. Louis, MO, for an exclusive weekend with the executives of the General Youth Division. For more details please visit <a href="http://sheavesforchrist.com/the-real-mccoy-contest/" target="_blank">sheavesforchrist.com</a> or apply below!
      </p>

      <a role="button" class="download small-12 medium-4 large button c31" href="http://download.pentecostalyouth.org/SFC/RM/Real_McCoy_Contest_Application_Fillable.pdf" target="_blank">Application</a>
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
