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
				<div id="articoli" class="category-posts">
					<?php

						$categoria  = get_category( get_query_var( 'cat' ) );
						while ( have_posts() ) : the_post(); ?>


						<?php


								$sottotitolo= get_field('sottotitolo');
								$autore = get_field('autore');
								$intro= get_field('intro');
								$img = get_the_post_thumbnail_url($post->ID, 'blk-thumb');
								if($intro == "") {
									$intro = get_the_excerpt();
								}

								if($img != ""):
						?>
						<div class="news-sm">

									<a href="<?php echo get_the_permalink(); ?>">
										<img src="<?php echo $img; ?>" alt="">

									<span class="categoria"><?php getCategories(); ?></span>
									<div class="testi">
										<h5><?php the_title(); ?></h5>
										<p class="intro">
											<?php echo trim($intro); ?>
										</p>

										<?php if(trim($autore)!="") : ?>
											<small class="autore"><span style="color: #000;">DI</span> <?php echo $autore ?></small>
										<?php endif; ?>
									</div>
									</a>

						</div>




					<?php
				endif;
				endwhile;
					echo do_shortcode('[ajax_load_more container_type="div" post_type="post" offset="5" posts_per_page="5" category="'.$categoria->slug.'"]');
					?>

			</div>
			<div id="main-sb">
				<!-- AGENDA -->

			<div class="banner">
				<img src="http://via.placeholder.com/300x250/ababcf/fff/?text=BANNER+ADV&background=000" />
			</div>



			<!-- TOPICS -->
			<div class="tags">
				<h4><b>TAGS</b></h4>
				<?php
					$categories = get_the_category();
					$category_id = $categories[0]->cat_ID;
					tag_cloud_by_category($category_id);
				?>

			</div>

		</div>
	</div>


		</div>
	</main>



<?php get_footer();
