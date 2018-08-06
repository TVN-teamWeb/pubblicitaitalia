<?php

get_header(); ?>
<main>
	<div id="foreground">
		<div id="interna">
		<div class="data-center">
					<h2>Data Center</h2>
					<h1>GLI ULTIMI REPORT</h1>
					<div class="filtri">
						Ordina per:
						<ul class="menu horizontal">
							<?php
								$reports = get_field_object("field_5b5853e43787d");
								foreach($reports["choices"] as $rep) :
							?>
								<li class="menu-item"><?php echo $rep; ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<table>
						<tr>
							<th>REPORT</th>
							<th>PERIODO</th>
							<th>CONTENUTO</th>
							<th></th>
						</tr>
						<?php
							$args = array(
								'post_type' => 'datacenter',
								'posts_per_page' => 10,
							);
							$query = new WP_Query( $args );
							//echo "<pre>"; print_r($query); echo "</pre>";
							while($query->have_posts()):
									$query->the_post();
									$file = get_field('file_report');
									$tipo = get_field('report');
									$periodo = get_field('periodo');
								?>
								<tr>
									<td><?php echo $tipo; ?></td>
									<td><?php echo $periodo; ?></td>
									<td><?php the_title(); ?></td>

									<td class="dl">
										<a href="<?php echo $file; ?>" target="_blank">
											<i class="far fa-arrow-alt-circle-down"></i>
										</a>
									</td>
								</tr>
							<?php endwhile; ?>
					</table>

		</div>


		</div>
		<br><br><br><br>
		<?php get_template_part( 'template-parts/autopromo-orizzontale' ); ?>
		<?php get_template_part( 'template-parts/autopromo-newsletter' ); ?>

	</div>
</main>

<script type="text/javascript">
	$(document).ready(function () {
		var W = parseInt($(".graph").css("width"));
		var H = parseInt($(".graph").css("height"));
		var points = W+",52 0,52 0,"+H;
		$("#MLINE polyline").attr("points", points);
	});
</script>

<?php get_footer();
