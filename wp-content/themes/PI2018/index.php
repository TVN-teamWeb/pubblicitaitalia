<?php
/**
 * The main template file
 *
 * @package PI2018
 * @since PI2018 1.0.0
 */

get_header(); ?>

<main>
	<div id="foreground">
  <h4><b>PRIMO PIANO</b></h4>
    <div class="primo-piano">
			<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 1,
					'tax_query' => array(
						array (
							'taxonomy' => 'topics',
							'field' => 'slug',
							'terms' => 'evidenza-main',
						)
					),
				);
				$query = new WP_Query( $args );

				if ( $query->have_posts() ) :
					$query->the_post();
					$sottotitolo= get_field('sottotitolo');
					$autore = get_field('autore');
					$evidenza = $post->ID;
			?>
        <div class="evidenza-main">
					<a href="<?php echo get_the_permalink(); ?>">

						<div class="item" >
							<!--img src="<?php echo the_post_thumbnail_url('evidenza'); ?>" alt=""-->
							<img data-interchange="[<?php echo the_post_thumbnail_url('blk-thumb'); ?>, small],  [<?php echo the_post_thumbnail_url('evidenza'); ?>, large]">
							<span class="categoria-sm"><?php getCategories(); ?></span>
							<div class="testi">
								<span class="categoria"><?php getCategories(); ?></span>
								<h4><span><?php the_title(); ?><span></h4>
								<?php if(trim($autore)!="") : ?>
									<small class="autore"><span style="color: #bd0c28;">DI</span> <?php echo $autore ?>
								<?php endif; ?>
								</small>
							</div>
						</div>
					</a>

        </div>

				<?php
					endif;

					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'tax_query' => array(
							array (
								'taxonomy' => 'topics',
								'field' => 'slug',
								'terms' => 'evidenza-side',
							)
						),
					);
					$query = new WP_Query( $args );

					if ( $query->have_posts() ) :
						$query->the_post();
						$sottotitolo= get_field('sottotitolo');
						$autore = get_field('autore');
						$evidenza = $post->ID;
				?>

        <div class="evidenza-side">
					<a href="<?php echo get_the_permalink(); ?>">

						<div class="item" >
							<!--img src="<?php echo the_post_thumbnail_url('evidenza-side'); ?>" alt=""-->
							<img data-interchange="[<?php echo the_post_thumbnail_url('blk-thumb'); ?>, small],  [<?php echo the_post_thumbnail_url('evidenza-side'); ?>, large]">
							<span class="categoria-sm"><?php getCategories(); ?></span>
							<div class="testi">
								<span class="categoria"><?php getCategories(); ?></span>
								<h4><span><?php the_title(); ?><span></h4>

								<?php if(trim($autore)!="") : ?>
									<small class="autore"><span style="color: #bd0c28;">DI</span> <?php echo $autore ?>
									</small>
								<?php endif; ?>
							</div>
						</div>
					</a>
        </div>
				<?php
					endif;


				?>
    </div>

    <div class="boxes">
			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 2,
				'tax_query' => array(
					array (
						'taxonomy' => 'topics',
						'field' => 'slug',
						'terms' => 'evidenza-small',
					)
				),
			);
			$query = new WP_Query( $args );

			while ( $query->have_posts() ) :
				$query->the_post();
				$sottotitolo= get_field('sottotitolo');
				$autore = get_field('autore');
				$evidenza = $post->ID;
			?>
			<div class="evidenza-sm">
			<a href="<?php echo get_the_permalink(); ?>">
				<img src="<?php echo the_post_thumbnail_url('evidenza'); ?>" alt="">

			<span class="categoria"><?php getCategories(); ?></span>
			<div class="testi">
				<h4><?php the_title(); ?></h4>
				<?php if(trim($autore)!="") : ?>
					<small class="autore"><span style="color: #000;">DI</span> <?php echo $autore ?></small>
				<?php endif; ?>
			</div>
			</a>
		</div>
	<?php endwhile; ?>
      <div class="evidenza-sm">
        <div class="banner">
            <img src="http://via.placeholder.com/300x250/0074bd/ffffff/?text=BANNER">
        </div>
      </div>
    </div>
</div>

	<?php get_template_part( 'template-parts/autopromo-orizzontale' ); ?>





	<div id="middle-container">



		<div id="middle">

			<div id="agenda-mobile">
				<?php
					setlocale(LC_ALL, 'it_IT.UTF-8');
					//$month = date('F', mktime(0, 0, 0, date('n', strtotime('-'.($day-1).' days'))) );
					$day = date('w');
					$ws = strftime ("%e %B", strtotime('-'.($day-1).' days'));
					$we = strftime ("%e %B",  strtotime('+'.(7-$day).' days'));

				?>
				<h4>AGENDA - <?php echo $ws." / ".$we; ?> </h4>

				<div class="days">
					<?php for($d=0;$d<7;$d++): ?>
					<span class="day-box">
						<span class="bd">
							<?php echo strftime ("%e", strtotime('-'.($day-1-$d).' days')); ?>
						</span>

						<span class="sm">
							<?php echo strftime ("%b", strtotime('-'.($day-1-$d).' days')); ?>
						</span>

					</span>
					<?php endfor; ?>
				</div>
				<div class="event-list">
					<div class="evento">
					<b></b><br><i>
					<span class="luogo"></span>
					<span class="ora"></span><br>
				</i>
					<p></p>
				</div>
				</div>
			</div>

			<div id="banner-medium">
				
			</div>

			<div id="latest">
				<h4><b>ULTIME NOTIZIE</b></h4>
			<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
				);
				$query = new WP_Query( $args );

				while ( $query->have_posts() ) :
					$query->the_post();
					$sottotitolo= get_field('sottotitolo');
					$autore = get_field('autore');
					$intro= get_field('intro');
					$evidenza = $post->ID;
			?>
			<div class="news-sm">

						<a href="<?php echo get_the_permalink(); ?>">
							<img src="<?php echo the_post_thumbnail_url('evidenza'); ?>" alt="">

						<span class="categoria"><?php getCategories(); ?></span>
						<div class="testi">
							<h5><?php the_title(); ?></h5>
							<p class="intro">
								<?php
								if($intro == "") {
									$intro = get_the_excerpt();
								}
									echo trim($intro);
								?>
							</p>

							<?php if(trim($autore)!="") : ?>
								<small class="autore"><span style="color: #000;">DI</span> <?php echo $autore ?></small>
							<?php endif; ?>
						</div>
						</a>

			</div>
			<?php
		endwhile;
			?>


		</div>
		<div id="main-sb" class="show-for-large">
			<!-- AGENDA -->

			<div class="agenda">
				<h4><b>AGENDA</b></h4>
				<div id="agenda"></div>

				<div class="eventi">
				<div class="evento">
					<b></b><br/>
					<span class="data"></span> -
					<span class="luogo"></span> -
					<span class="ora"></span><br>
					<p></p>

				</div>
				<a href="#" class="calBack">&lt;&lt Torna al calendario</a>
				</div>



    </div>
		<div class="banner">
			<img src="//via.placeholder.com/300x600/bb1717/fff/" />
		</div>
	</div>


		</div>
		</div>

<hr>
<?php
$args = array(
	'post_type' => 'video',
	'posts_per_page' => 4,
);
$query = new WP_Query( $args ); ?>
		<section id="video-fw">
			<h4><b>MULTIMEDIA</b></h4>
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
						<a href="<?php echo $url; ?>" class="player <?php echo $tipo; ?>">
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
								<a href="<?php echo $url; ?>" class="player <?php echo $tipo; ?>">
									<i class="far fa-play-circle"></i>
								</a>
							</div>
							<h4><?php the_title(); ?></h4>

					</div>
				<?php endfor; ?>


			</div>

				<div class="video-title">
					<h3><?php echo $mainVideoTitle; ?></h3>
				</div>
				<div class="video-more align-bottom">
					<br/><br/>
					<a href="/multimedia">
						<button class="hollow button secondary" type="button">GUARDA ALTRO
						&#160;	<i class="fas fa-arrow-right"></i>
					</a>

</button>
				</div>

			</div>
		</section>

<hr>

		<?php get_template_part( 'template-parts/category-blocks' ); ?>

		<?php get_template_part( 'template-parts/autopromo-verticale' ); ?>



		<!-- EVENTI AGENDA -->
		<script type="text/javascript">

			<?php

			$args = array(
				'post_type' => 'agenda',
				'posts_per_page' => 100,
				'orderby'			=> 'meta_value',
				'meta_key'			=> 'data',
				'order'				=> 'DESC'
			);
			$query = new WP_Query( $args );
			$eventi = array();
			$idx = 0;
			while ( $query->have_posts() ) {
				$query->the_post();
				$luogo= get_field('luogo');
				$data = get_field('data');
				$ora = get_field('ora');
				$evento = array("title" => get_the_title(), "date" => strtotime($data).str_pad($idx,3,"0", STR_PAD_LEFT),
				                "strdata" => date("d/m", strtotime($data)), "luogo" => $luogo,
												"ora" => $ora, "desc" => get_the_content() );
				array_push($eventi, $evento);
				$idx++;
			}
			?>

			var EVENTI = <?php echo json_encode($eventi, JSON_NUMERIC_CHECK ); ?> ;

			</script>


</main>
<br><br>
<?php get_footer();
