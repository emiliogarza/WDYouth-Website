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
			if(get_field('rotating_image_8') && get_field('rotating_image_8_link')) {
				echo '				
				<li class="orbit-slide">
					<a href="'. get_field('rotating_image_8_link') .'">
						<img class="orbit-image" src="' . get_field('rotating_image_8') . '" alt="Space">
					</a>
				</li>';
			}
			if(get_field('rotating_image_9') && get_field('rotating_image_9_link')) {
				echo '				
				<li class="orbit-slide">
					<a href="'. get_field('rotating_image_9_link') .'">
						<img class="orbit-image" src="' . get_field('rotating_image_9') . '" alt="Space">
					</a>
				</li>';
			}
			if(get_field('rotating_image_10') && get_field('rotating_image_10_link')) {
				echo '				
				<li class="orbit-slide">
					<a href="'. get_field('rotating_image_10_link') .'">
						<img class="orbit-image" src="' . get_field('rotating_image_10') . '" alt="Space">
					</a>
				</li>';
			}
			if(get_field('rotating_image_11') && get_field('rotating_image_11_link')) {
				echo '				
				<li class="orbit-slide">
					<a href="'. get_field('rotating_image_11_link') .'">
						<img class="orbit-image" src="' . get_field('rotating_image_11') . '" alt="Space">
					</a>
				</li>';
			}
			if(get_field('rotating_image_12') && get_field('rotating_image_12_link')) {
				echo '				
				<li class="orbit-slide">
					<a href="'. get_field('rotating_image_12_link') .'">
						<img class="orbit-image" src="' . get_field('rotating_image_12') . '" alt="Space">
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

	<div class="bottom-tiles">	
	<?php
		if(get_field('icon_1')) {
			echo '<i class="fa ' . get_field("icon_1") . '" aria-hidden="true"></i>';
		}
		if(get_field('bottom_tiles_heading_1')) {
			echo '<h3>' . get_field("bottom_tiles_heading_1") . '</h3>';
		}
		if(get_field('bottom_tiles_content_1')) {
			echo '<p>' . get_field("bottom_tiles_content_1") . '</p>';
		}
		if(get_field('bottom_tiles_link_1') && get_field('bottom_tiles_link_label_1')) {
			echo '<a href="' . get_field("bottom_tiles_link_1") . '" class="button">' . get_field("bottom_tiles_link_label_1") . '</a>';
		}
	?>
	</div>
	<div class="bottom-tiles">
	<?php
		if(get_field('icon_2')) {
			echo '<i class="fa ' . get_field("icon_2") . '" aria-hidden="true"></i>';
		}
		if(get_field('bottom_tiles_heading_2')) {
			echo '<h3>' . get_field("bottom_tiles_heading_2") . '</h3>';
		}
		if(get_field('bottom_tiles_content_2')) {
			echo '<p>' . get_field("bottom_tiles_content_2") . '</p>';
		}
		if(get_field('bottom_tiles_link_2') && get_field('bottom_tiles_link_label_2')) {
			echo '<a href="' . get_field("bottom_tiles_link_2") . '" class="button">' . get_field("bottom_tiles_link_label_2") . '</a>';
		}
	?>
	</div>
	<div class="bottom-tiles">
	<?php
		if(get_field('icon_3')) {
			echo '<i class="fa ' . get_field("icon_3") . '" aria-hidden="true"></i>';
		}
		if(get_field('bottom_tiles_heading_3')) {
			echo '<h3>' . get_field("bottom_tiles_heading_3") . '</h3>';
		}
		if(get_field('bottom_tiles_content_3')) {
			echo '<p>' . get_field("bottom_tiles_content_3") . '</p>';
		}
		if(get_field('bottom_tiles_link_3') && get_field('bottom_tiles_link_label_3')) {
			echo '<a href="' . get_field("bottom_tiles_link_3") . '" class="button">' . get_field("bottom_tiles_link_label_3") . '</a>';
		}
	?>	
	</div>
</section>



<?php get_footer();
