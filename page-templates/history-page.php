<?php
/*
Template Name: History Page
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
      <div class="entry-content">
          <?php the_content(); ?>
          <?php
          /*
          <section class="timeline">
            <ul>
              <li>
                <div>
                  <time>1934</time> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                </div>
              </li>
              <li>
                <div>
                  <time>1937</time> Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi. Suspendisse finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
                </div>
              </li>
              <li>
                <div>
                  <time>1940</time> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
                </div>
              </li>
              <li>
                <div>
                  <time>1943</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
                </div>
              </li>
              <li>
                <div>
                  <time>1946</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
                </div>
              </li>
              <li>
                <div>
                  <time>1956</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
                </div>
              </li>
              <li>
                <div>
                  <time>1957</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
                </div>
              </li>
              <li>
                <div>
                  <time>1967</time> Aenean condimentum odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus, euismod quis ante.
                </div>
              </li>
              <li>
                <div>
                  <time>1977</time> Vestibulum porttitor lorem sed pharetra dignissim. Nulla maximus, dui a tristique iaculis, quam dolor convallis enim, non dignissim ligula ipsum a turpis.
                </div>
              </li>
              <li>
                <div>
                  <time>1985</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
                </div>
              </li>
              <li>
                <div>
                  <time>2000</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
                </div>
              </li>
              <li>
                <div>
                  <time>2005</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
                </div>
              </li>
            </ul>
          </section>
          */
          ?>
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
