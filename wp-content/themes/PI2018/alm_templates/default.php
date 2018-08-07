


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
					?>
