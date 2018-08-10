<?php
/**
 * The template for displaying all single posts and attachments
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
				$sottotitolo= get_field('sottotitolo');
				$autore = get_field('autore');
				$evidenza_immagine = get_field('evidenza_immagine');
			?>
			<span class="categoria"><?php getCategories(); ?></span>
			<br/>
			<h1><?php the_title(); ?></h1><br>
			<?php the_date( 'd.m.Y', '<h5>','</h5>' ); ?>
			<div class="contenuto">
			<?php if($evidenza_immagine == 'S') : ?>
				<img src="<?php echo the_post_thumbnail_url('evidenza-big'); ?>" class="head">
			<?php else : ?>
				<img src="<?php echo the_post_thumbnail_url('evidenza-side'); ?>" class="side">
			<?php endif; ?>
			<?php the_content(); ?>
			</div>
		</div>

			<div id="main-sb">
				<!-- AGENDA -->

			<div class="banner">
				<img src="http://via.placeholder.com/300x250/ababcf/fff/?text=BANNER+ADV&background=000" />
			</div>

			<!-- TAGS -->
			<div class="tags">
				<h4><b>TAGS</b></h4>
				<?php the_tags('', ''); ?>

			</div>

			<!-- ULTIME -->
			<div class="latest">
				<h4><b>LATEST NEWS</b></h4>
				<?php
					$postcat = get_the_category( $post->ID );
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 5,
						'cat' => $postcat[0]->term_id
					);
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) :
						$query->the_post(); ?>
				<span class="titolo">
					<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
					</a>
				</span>


			<?php endwhile; ?>
			</div>

		</div>
	</div>
	<?php

		$query = getRelated($post, 6);

		if ( is_object($query) && $query->have_posts() ) :
	?>
		<section id="related">
			<h4><b>POTREBBERO INTERESSARTI ANCHE</b></h4>
		<?php
					while ( $query->have_posts() ) :
						$query->the_post();
						$sottotitolo= get_field('sottotitolo');
						$intro= get_field('intro');
						$evidenza = $post->ID;
			?>
						<div class="item">
							<span class="categoria"><?php getCategories(); ?></span>
							<a href="<?php echo get_the_permalink(); ?>">
								<img src="<?php echo the_post_thumbnail_url('evidenza'); ?>" alt="">
								<div class="testi">
									<?php if(trim($autore)!="") : ?>
										<small class="autore"><span style="color: #000;">DI</span> <?php echo $autore ?></small>
									<?php endif; ?>

									<h5><?php the_title(); ?></h5>
								</div>
							</a>
						</div>
			<?php
					endwhile;

			?>
		</section>
		<?php
			endif;
		?>
		</div>
	</main>

<div id="share-bar">
	<a href="#"><i class="fab fa-facebook-square"></i></a>
	<a href="#"><i class="fab fa-twitter-square"></i></a>
	<a href="#"><i class="fab fa-google-plus-square"></i></a>
	<a href="#"><i class="fab fa-linkedin"></i></a>
	<a href="#"><i class="fab fa-pinterest-square"></i></a>
	<a href="#"><i class="fas fa-envelope-square"></i></a>
</div>

<?php get_footer();
