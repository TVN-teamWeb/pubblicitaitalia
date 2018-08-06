<?php

get_header(); ?>
<main>
	<div id="foreground">
		<div id="interna">
			<h3>MULTIMEDIA</h3>
			<section id="video-fw">


			<?php
			$args = array(
				'post_type' => 'video',
				'posts_per_page' => 12,
			);
			$query = new WP_Query( $args ); ?>
			<div id="video-gallery">


				<div class="video-box">

					<?php
						$query->the_post();
						$img_id = get_field('immagine_video');
						$url = get_field('url_video');
						$tipo = get_field('tipo');
						$img = wp_get_attachment_image_src( $img_id, 'evidenza-big' );
						$mainVideoTitle = get_the_title();
					?>
					<img src="<?php echo $img[0]; ?>">
					<div class="icon-overlay">
						<a href="<?php the_permalink(); ?>" >
							<i class="far fa-play-circle"></i>
						</a>
					</div>
					<div class="player-container">
					</div>

				</div>

				<div class="video-side grid-y">
					<?php for($i=0; $i<2; $i++):
						$query->the_post();
						$img_id = get_field('immagine_video');
						$url = get_field('url_video');
						$tipo = get_field('tipo');
						$img = wp_get_attachment_image_src( $img_id, 'evidenza-big' );
					?>
					<div class="vr-box cell small6 auto">


							<img src="<?php echo $img[0]; ?>" alt="">
							<div class="icon-overlay">
								<a href="<?php the_permalink(); ?>" >
									<i class="far fa-play-circle"></i>
								</a>
							</div>
							<h4><?php echo strtolower(get_the_title()); ?></h4>
					</div>
				<?php endfor; ?>

				</div>

				<div class="video-title">
					<h3><?php echo $mainVideoTitle; ?></h3>
				</div>

			</div>

			<hr>

			<div id="video-grid"> <!-- pt 60px; -->
				<?php for($i=0; $i<9; $i++):
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
						<span class="data"><?php echo get_the_date(); ?></span>
						<h4><?php the_title(); ?></h4>

				</div>

			<?php endfor; ?>

			</div>

		</section>

		</div>

	</div>
</main>


<?php get_footer();
