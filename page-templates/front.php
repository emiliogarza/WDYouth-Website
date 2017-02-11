<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">
	<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out; pauseOnHover: false">
		<ul class="orbit-container">
			<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
			<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
		<?php
			if(get_field('rotating_image_1') && get_field('rotating_image_1_link')) {
				echo '				
				<li class="is-active orbit-slide">
					<a href="'. get_field('rotating_image_1_link') .'">
						<img class="orbit-image" src="' . get_field('rotating_image_1') . '" alt="Space">
					</a>
				</li>';
			}
			if(get_field('rotating_image_2') && get_field('rotating_image_2_link')) {
				echo '				
				<li class="orbit-slide">
					<a href="'. get_field('rotating_image_2_link') .'">
						<img class="orbit-image" src="' . get_field('rotating_image_2') . '" alt="Space">
					</a>
				</li>';
			}	
			if(get_field('rotating_image_3') && get_field('rotating_image_3_link')) {
				echo '				
				<li class="orbit-slide">
					<a href="'. get_field('rotating_image_3_link') .'">
						<img class="orbit-image" src="' . get_field('rotating_image_3') . '" alt="Space">
					</a>	
				</li>';
			}
			if(get_field('rotating_image_4') && get_field('rotating_image_4_link')) {
				echo '				
				<li class="orbit-slide">
					<a href="'. get_field('rotating_image_4_link') .'">
						<img class="orbit-image" src="' . get_field('rotating_image_4') . '" alt="Space">
					</a>
				</li>';
			}
			if(get_field('rotating_image_5') && get_field('rotating_image_5_link')) {
				echo '				
				<li class="orbit-slide">
					<a href="'. get_field('rotating_image_5_link') .'">
						<img class="orbit-image" src="' . get_field('rotating_image_5') . '" alt="Space">
					</a>
				</li>';
			}
			if(get_field('rotating_image_6') && get_field('rotating_image_6_link')) {
				echo '				
				<li class="orbit-slide">
					<a href="'. get_field('rotating_image_6_link') .'">
						<img class="orbit-image" src="' . get_field('rotating_image_6') . '" alt="Space">
					</a>	
				</li>';
			}	
			if(get_field('rotating_image_7') && get_field('rotating_image_7_link')) {
				echo '				
				<li class="orbit-slide">
					<a href="'. get_field('rotating_image_7_link') .'">
						<img class="orbit-image" src="' . get_field('rotating_image_7') . '" alt="Space">
					</a>
				</li>';
			}															
		?>
		</ul>
	</div>
</header>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<div class="section-divider">
	<hr />
</div>


<section class="benefits">
	<header>
		<h2>Build Foundation based sites, powered by WordPress</h2>
		<h4>Foundation is the professional choice for designers, developers and teams. <br /> WordPress is by far, <a href="http://trends.builtwith.com/cms">the world's most popular CMS</a> (currently powering 38% of the web).</h4>
	</header>

	<div class="semantic">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/semantic.svg" alt="semantic">
		<h3>Semantic</h3>
		<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
	</div>

	<div class="responsive">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/responsive.svg" alt="responsive">
		<h3>Responsive</h3>
		<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>

	</div>

	<div class="customizable">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/customizable.svg" alt="customizable">
		<h3>Customizable</h3>
		<p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>

	</div>

	<div class="professional">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/professional.svg" alt="professional">
		<h3>Professional</h3>
		<p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
	</div>

	<div class="why-foundation">
		<a href="/kitchen-sink">See what's in Foundation out of the box →</a>
	</div>

</section>



<?php get_footer();
