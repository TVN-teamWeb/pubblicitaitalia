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
		<div class="intro-today">
			<div class="pay-off">
				<img src="/wp-content/themes/PI2018/dist/assets/images/introToday.png" />
			</div>
			<span class="testo">
				Today Pubblicità Italia è il quotidiano digitale che racconta in modo completo e puntuale tutto l’ecosistema
				dei media e della comunicazione. Testata storica, dal 1989 fotografa il mercato e la sua evoluzione,
				dando voce ai protagonisti della industry e offrendo una vetrina ai migliori progetti pubblicitari ed editoriali,
				italiani e internazionali. Distribuito tramite abbonamento via e-mail, il giornale offre
				notizie di attualità e indiscrezioni in esclusiva sul settore, ma anche spazi di approfondimento e analisi.
				In un unico e autorevole strumento tutta l’informazione che serve a far crescere il tuo business.
				Today è la buona abitudine per iniziare la giornata con una marcia in più.
					<br><br><br>
					<a target="_blank" href="http://abbonamenti.tvnmediagroup.it/" class="btn-abbonamento">
						<button class="hollow button alert" >
							Abbonati
						</button>
					</a>
			</span>

		</div>

		<div class="sp1"></div>

		<div class="cover-today">
			<span class="data">Prima pagina del<br/><?php echo get_field('giorno'); ?></span>
			<img src="<?php the_post_thumbnail_url(); ?>" class="preview" />
			<span class="sfoglia">
				<a href="#">
				<img src="/wp-content/themes/PI2018/dist/assets/images/touch.png" />
				&#160;&#160;
				clicca</a> per vedere l'anteprima
 			</span>
		</div>

		<div class="promo">
			<?php get_template_part( 'template-parts/autopromo-verticale' ); ?>

			<?php get_template_part( 'template-parts/autopromo-buy' ); ?>
		</div>
		<!--div class="promo">

		</div-->

		</div>
		<br>
		<?php get_template_part( 'template-parts/autopromo-newsletter' ); ?>

	</div>
</main>

<script type="text/javascript">
	$(document).ready(function () {
		var W = parseInt($(".graph").css("width"));
		var H = parseInt($(".graph").css("height"));
		var points = W+",41 0,41 0,"+H;
		$("#MLINE polyline").attr("points", points);
	});
</script>

<?php get_footer();
