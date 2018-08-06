<?php
/**
 * Video page
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<main>
	<div id="foreground">
		<div id="interna">


		<div class="articolo">
			<?php
				the_post();
				$img_id = get_field('immagine_video');
				$url = get_field('url_video');
				$tipo = get_field('tipo');
				$img = wp_get_attachment_image_src( $img_id, 'evidenza-big' );
			?>
			<div class="video-title">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="video">

				<img src="<?php echo $img[0]; ?>">
				<div class="icon-overlay">
					<a href="<?php echo $url; ?>" class="player <?php echo $tipo; ?>">
						<i class="far fa-play-circle"></i>
					</a>
				</div>
				<div class="player-container">
				</div>

			</div>

			<div class="share">
				<a href="#"><i class="fab fa-facebook-square"></i></a>
				<a href="#"><i class="fab fa-twitter-square"></i></a>
				<a href="#"><i class="fab fa-google-plus-square"></i></a>
				<a href="#"><i class="fab fa-linkedin"></i></a>
				<a href="#"><i class="fab fa-pinterest-square"></i></a>
				<a href="#"><i class="fas fa-envelope-square"></i></a>

			</div>

			<hr>

			<?php the_content(); ?>



		</div>

			<section id="main-sb">

				<div class="video-sb">
					<h3>ALTRI VIDEO</h3>
					<?php
						$currentID = get_the_ID();
						$args = array(
							'post_type' => 'video',
							'posts_per_page' => 4,
							'post__not_in' => array($currentID)
						);
						$query = new WP_Query( $args );
						while($query->have_posts()):
							$query->the_post();
							$img_id = get_field('immagine_video');
							$url = get_field('url_video');
							$tipo = get_field('tipo');
							$img = wp_get_attachment_image_src( $img_id, 'evidenza-big' );
					?>

					<div class="item">

							<img src="<?php echo $img[0]; ?>" alt="">
							<div class="icon-overlay">
								<a href="<?php the_permalink(); ?>" >
									<i class="far fa-play-circle"></i>
								</a>
							</div>
							<!--span class="data"><?php echo get_the_date(); ?></span-->
							<h5><?php the_title(); ?></h5>

					</div>

					<hr>

				<?php endwhile; ?>


				</div>


		</section>

	</div>
</div>
	</main>


<?php get_footer();
