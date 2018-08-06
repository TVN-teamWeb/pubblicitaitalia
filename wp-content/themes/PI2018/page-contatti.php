<?php

get_header(); ?>
<main>
	<div id="foreground">
		<div id="interna">
		<div class="intro-contatti">
					<h2>Contatti</h2>
			<span class="testo">
				<b>Redazione</b><br>
Corso Magenta, 85 <br>
20123 Milano <br>
tel. 024300001 <br>
mail: comunicati@tvnmediagroup.it <br>
<br>
<b>Ufficio Traffico</b> <br>
traffico@tvnmediagroup.it <br>
<br>
<b>Ufficio Abbonamenti</b> <br>
abbonamenti@tvnmediagroup.it <br>
<br>
<b>Ufficio Eventigrand.prix@tvnmediagroup.it</b> <br>
<br>
<b>Ufficio Commerciale</b> <br>
Roberto Folcarelli <br>
Responsabile Vendite Pubblicità <br>
tel. 0243000067 <br>
roberto.folcarelli@tvnmediagroup.it <br>
			</span>

		</div>

		<div class="sp4">
			<img src="//via.placeholder.com/300x600/bb1717/fff/">
		</div>

		<div class="form-contatti">

			<form class="" action="" method="post">

			      <div class="form-field">
			        <label>Argomento
			          <select class="" name="">

			          </select>
			        </label>
			      </div>
						<div class="form-field">
			        <label class="half">Nome
			          <input type="text">
			        </label>
							<label class="half">Cognome
			          <input type="text">
			        </label>
			      </div>
			      <div class="form-field">
			        <label class="half">E-mail
			          <input type="text" >
			        </label>
							<label  class="half">Azienda
			          <input type="text" >
			        </label>
			      </div>
						<div class="form-field">
			        <label class="half">Settore
			          <input type="text" >
			        </label>
							<label  class="half">Ruolo
			          <input type="text" >
			        </label>
			      </div>
						<div class="form-field">
			        <label>Come possiamo aiutarti?
			          <textarea rows="7"></textarea>
			        </label>
			      </div>
						<div class="btn-field">
							<button type="submit" class="hollow button alert" >
								Invia
							</button>
						</div>
			</form>

		</div>

		<div class="promo">
			<br><br>
			<?php get_template_part( 'template-parts/autopromo-verticale' ); ?>
		</div>
		<!--div class="promo">

		</div-->

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
