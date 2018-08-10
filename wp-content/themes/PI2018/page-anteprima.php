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
		<div class="intro-anteprima">
			<div class="pay-off">
				<img src="/wp-content/themes/PI2018/dist/assets/images/introNewsletter.png" />
			</div>
			<span class="testo">
				Anteprima Today è la nuova newsletter quotidiana di Today Pubblicità Italia.
				All’ora dell’aperitivo, direttamente nella tua casella e-mail, una selezione delle principali notizie della giornata,
				anticipazioni confezionate per te dalla redazione giornalistica del quotidiano digitale.
				Uno strumento in più per restare sempre aggiornati sugli ultimi movimenti del mercato della comunicazione.
			</span>

		</div>

		<div class="sp1"></div>

		<div class="form-newsletter">
			<p>
				Compila il form per iscriverti alla <b>Newsletter</b>
				<br>
				e ricevere l'<b><i>Anteprima Today</i>&#160;!</b>
			</p>
			<br/>
			<form action="/?na=s" method="post">

			      <div class="form-field">
			        <label>Nome
			          <input type="text" name="nn">
			        </label>
			      </div>
						<div class="form-field" >
			        <label>Cognome
			          <input type="text" name="ns">
			        </label>
			      </div>
			      <div class="form-field" >
			        <label>E-mail
			          <input type="text" name="ne" required>
			        </label>
			      </div>
						<div class="btn-field">
							<button type="submit" class="hollow button alert" >
								Iscriviti
							</button>
						</div>
			</form>

		</div>

		<div class="promo">
			<?php get_template_part( 'template-parts/autopromo-verticale' ); ?>
		</div>
		<!--div class="promo">

		</div-->

		</div>
		<br><br><br><br>
		<?php get_template_part( 'template-parts/autopromo-orizzontale' ); ?>

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
