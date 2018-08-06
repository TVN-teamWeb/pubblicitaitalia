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

				<img src="/wp-content/themes/PI2018/dist/assets/images/GrandPrix.png" />
			</div>
			<span class="testo">

				Con i suoi award TVN Media Group offre alla industry della comunicazione una straordinaria
				vetrina per valorizzare i propri progetti. Dalla strategia di marca al relational marketing,
				passando per il design, i GrandPrix da 30 anni contribuiscono a scattare una fotografia delle
				eccellenze italiane all’interno di un ecosistema sempre più complesso, dando evidenza alle
				soluzioni più innovative presenti sul mercato. I nostri award, però, non si fermano alla
				semplice competizione, ma vogliono essere occasioni di confronto e di promozione della cultura
				di settore, nonché punto di contatto con il mondo delle aziende,
				da sempre protagoniste delle nostre giurie.
			</span>

		</div>

		<div class="GPbox even">
			<img src="/wp-content/themes/PI2018/dist/assets/images/GPADV.png" />
			<span class="info">
				<h2>International GrandPrix <br>Advertising Strategies </h2>
				<svg xmlns="http://www.w3.org/2000/svg" width="100" height="60">
					<polyline points="0,30 100,30" stroke="#bd0c28" stroke-width="2.7" fill="none"/>
				</svg>
				<p>
					Palcoscenico dell’eccellenza italiana nel campo della comunicazione, l’International GrandPrix Advertising Strategies,
					a differenza di tutti gli altri premi dedicati al settore pubblicitario il GrandPrix, non concentra la sua attenzione
					solo sulla pura creatività, ma sulla costruzione delle strategie di marca. I riconoscimenti, infatti, sono assegnati
					seguendo una definita logica di marketing. Aperto verso il mondo, ma con una grande attenzione alla migliore pruduzione
					italiana, l’award, con la sua serata di gala e i premi speciali assegnati a personalità del mondo della cultura, dello
					spettacolo, dell’imprenditoria e dello sport, rappresenta una straordinaria occasione di networking per la community
					della comunicazione.
				</p>
				<a target="_blank" href="http://www.grandprixadvertisingstrategies.com" class="btn-abbonamento">
		      <button class="hollow button alert" >
		        Vai al sito
		      </button>
		    </a>

			</span>

		</div>

		<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="180" id="graphB1B2">
			<polyline points="200,0 200,90" stroke="black" stroke-width="1.7" fill="none"/>
			<polyline points="0,90 1200,90" stroke="black" stroke-width="1.7" fill="none" />
			<polyline points="1111,90 1111,180" stroke="black" stroke-width="1.7" fill="none"/>
		</svg>

		<div class="GPbox odd">
			<img src="/wp-content/themes/PI2018/dist/assets/images/GPREL.png" />
			<img src="/wp-content/themes/PI2018/dist/assets/images/iscrizioniAperte.png" class="open" />
			<span class="info">
				<h2>International GrandPrix <br>Relational Strategies </h2>
				<svg xmlns="http://www.w3.org/2000/svg" width="100" height="60">
					<polyline points="0,30 100,30" stroke="#bd0c28" stroke-width="2.7" fill="none"/>
				</svg>
				<p>
					È il premio dedicato ai progetti più innovativi ed efficaci di brand experience &amp; activation:
					digital, pr, eventi, promo e branded entertainment. Il GrandPrix Relational Strategies è l’award
					che più di tutti racconta l’evoluzione della industry della comunicazione, con la sua formula in
					continua evoluzione e una particolare attenzione rivolta alle competenze verticali, valorizzate
					all’interno di una sempre più articolata strategia integrata.


				</p>
				<a target="_blank" href="http://www.relationalstrategiesgrandprix.com" class="btn-abbonamento">
					<button class="hollow button alert" >
						Vai al sito
					</button>
				</a>

			</span>

		</div>

		<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="180" id="graphB2B3">
			<polyline points="200,0 200,90" stroke="black" stroke-width="1.7" fill="none"/>
			<polyline points="0,90 1200,90" stroke="black" stroke-width="1.7" fill="none" />
			<polyline points="1111,90 1111,180" stroke="black" stroke-width="1.7" fill="none"/>
		</svg>

		<div class="GPbox even">
			<img src="/wp-content/themes/PI2018/dist/assets/images/GPBRAND.png" />
			<img src="/wp-content/themes/PI2018/dist/assets/images/iscrizioniAperte.png" class="open">
			<span class="info">
				<h2>Brand Identity <br>GrandPrix </h2>
				<svg xmlns="http://www.w3.org/2000/svg" width="100" height="60">
					<polyline points="0,30 100,30" stroke="#bd0c28" stroke-width="2.7" fill="none"/>
				</svg>
				<p>
					Questo riconoscimento premia i migliori progetti d’identità di marca e di design strategico
					sotto il profilo strutturale della comunicazione visiva. Il premio non smette di rinnovarsi
					e si propone agli operatori e alle marche come il piú valido e sensibile termometro
					dell’effervescenza della brand strategy in Italia.

				</p>
				<a target="_blank" href="http://www.brandidentitygrandprix.com" class="btn-abbonamento">
					<button class="hollow button alert" >
						Vai al sito
					</button>
				</a>

			</span>

		</div>


		</div>
		<br><br><br>
		<img src="/wp-content/themes/PI2018/dist/assets/images/bannerGP.png" class="show-for-medium"/>

	</div>




</main>

<script type="text/javascript">
	$(document).ready(function () {
		var W = parseInt($(".graph").css("width"));
		var H = parseInt($(".graph").css("height"));
		var points = W+",80 0,80 0,"+H;

		$("#MLINE polyline").attr("points", points);

		W = parseInt($("#interna").css("width"));
		var XD = Math.round(W/5);
		points=XD+",0 "+XD+",90";
		$("#graphB1B2 polyline").eq(0).attr("points", points);
		points=XD+",90 "+XD+",180";
		$("#graphB2B3 polyline").eq(0).attr("points", points);
		points = "0,90 "+W+",90";
		$("#graphB1B2 polyline").eq(1).attr("points", points);
		$("#graphB2B3 polyline").eq(1).attr("points", points);
	  points=(W-XD)+",90 "+(W-XD)+",180";
		$("#graphB1B2 polyline").eq(2).attr("points", points);
		points=(W-XD)+",0 "+(W-XD)+",90";
		$("#graphB2B3 polyline").eq(2).attr("points", points);


	});
</script>

<?php get_footer();
