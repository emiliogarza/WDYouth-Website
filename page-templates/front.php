<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">
	<div class="orbit" role="region" aria-label="Upcoming Events" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out; pauseOnHover: false">
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

<section class="benefits">
	<header>
		<?php
			if(get_field('home_h2')) {
				echo '<h1>' . get_field("home_h2") . '</h1>';
			}
		?>	
		<?php
			if(get_field('home_h3')) {
				echo '<h4>' . get_field("home_h3") . '</h4>';
			}
		?>		
	</header>

	<div class="events">	
		<i class="fa fa-calendar fa-5x" aria-hidden="true"></i>
		<h3>Events</h3>
		<p>View an upcoming event for the WDYouth</p>
		<a href="/events/" class="button">View Events</a>
	</div>

	<div class="resources">
		<i class="fa fa-download fa-5x" aria-hidden="true"></i>
		<h3>Resources</h3>
		<p>Downloadable resources for your media</p>
		<a href="/resources/" class="button">Download Resources</a>
	</div>

	<div class="about">
		<i class="fa fa-users fa-5x" aria-hidden="true"></i>
		<h3>About</h3>
		<p>Learn about our History and the WDYouth Team</p>
		<a href="/about/" class="button">Learn More</a>
	</div>
</section>



<?php get_footer();
