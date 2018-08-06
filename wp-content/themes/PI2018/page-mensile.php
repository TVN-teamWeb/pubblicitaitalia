<?php

get_header(); ?>
<main>
	<div id="foreground">
		<div id="interna">
		<div class="sp2"></div>
		<div class="graph">

		<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" id="MLINE">
			<polyline points="0,0" stroke="black" stroke-width="2.7" fill="none"/>
		</svg>

		</div>
		<div class="intro-mensile">
			<div class="pay-off">
				<img src="/wp-content/themes/PI2018/dist/assets/images/introPI.png" />
			</div>
			<span class="testo">

					Dal 1989 Pubblicità Italia rappresenta un osservatorio privilegiato e un punto di riferimento per tutti i professionisti del mondo della comunicazione e dei media. Partendo dall’analisi dell’attualità di settore, la testata si propone come spazio di approfondimento, territorio di incontro fra gli attori del mercato, tra i protagonisti e le nuove generazioni di talenti, portavoce delle dinamiche in atto e delle visioni sulle prossime tendenze.Ogni mese ricerche, analisi e dati forniscono strumenti di comprensione a servizio dei lettori. Una testata contemporanea, anche nelle modalità di accesso, sempre più multicanale grazie a una distribuzione che all’abbonamento affianca la presenza sui device digitali.
					<br><br><br>
					<a target="_blank" href="http://abbonamenti.tvnmediagroup.it/" class="btn-abbonamento">
						<button class="hollow button alert" >
							Abbonati
						</button>
					</a>
			</span>

		</div>
		<?php
			$args = array(
				'post_type' => 'magazine',
				'posts_per_page' => 10,
			);
			$query = new WP_Query( $args );
			$query->the_post();
			$cover = get_field('copertina');
			$nr = get_field('numero');
			$mese = get_field('mese');
			$anno = get_field('anno');

		?>
		<div class="cover">
			<span class="numero">N°<?php echo $nr; ?> <?php echo $mese; ?> <?php echo $anno; ?></span>
			<img src="<?php echo $cover; ?>" class="copertina" />
			<span class="sfoglia">
				<a href="#">
				<img src="/wp-content/themes/PI2018/dist/assets/images/touch.png" />
				&#160;&#160;
				clicca</a> per sfogliare l'estratto
 			</span>
		</div>

		<div class="arretrati">
			<div class="griglia">
				<?php
					for($i=0;$i<9;$i++) :
						$query->the_post();
						$cover = get_field('copertina');
						$nr = get_field('numero');
						$mese = get_field('mese');
						$anno = get_field('anno');
				?>
					<div class="item shrink">
						<img src="<?php echo $cover; ?>" alt="" />
						<span class="numero"><?php the_title(); ?></span>
					</div>
				<?php endfor; ?>

			</div>
		</div>

		</div>
		<hr>
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
