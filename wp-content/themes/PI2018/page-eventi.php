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

				<img src="/wp-content/themes/PI2018/dist/assets/images/introEventiPartner.png" />
			</div>
				<span class="testo">TVN Media Group e Pubblicità Italia presidiano da sempre i più importanti appuntamenti
					dedicati alla industry della comunicazione: questo per noi è il miglior modo per raccontare un mercato in
					continua evoluzione e per entrare in contatto diretto con la nostra community di riferimento.
					<br><br>
					Scopri le partnership che abbiamo attivato e dove saremo presenti nei prossimi mesi con le nostre testate e
					i nostri giornalisti.</span>




		</div>
		<div class="sp4"></div>
		<span class="titoloE"> <h2>NEXT - 2018</h2> </span>
		<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100" id="graphNEXT">

			<polyline points="0,90 1200,90" stroke="black" stroke-width="1.7" fill="none" />

		</svg>

		<div id="next-grid">
			<?php

				$args = array(
					'post_type' => 'eventi',
					'posts_per_page' => 12,
				);
				$query = new WP_Query( $args );

				while($query->have_posts()):
					$query->the_post();
					$img_id = get_field('immagine');
					$date = get_field('date_luoghi');
					$img = wp_get_attachment_image_src( $img_id, 'evidenza' );

			?>

			<div class="item">

					<img src="<?php echo $img[0]; ?>" alt="">
					<h4><?php echo strtolower(get_the_title()); ?></h4>
					<span class="date">
						<?php echo $date; ?>
					</span>

					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="53" class="open-event">
						<polyline points="0,30 200,30 225,10 250,30 " stroke="#bd0c28" stroke-width="1.7" fill="none" />
					</svg>

					<span class="testo">
						<?php the_content(); ?>
					</span>

			</div>

		<?php endwhile; ?>

		</div>


	</div>
	<br><br><br>
	<img src="/wp-content/themes/PI2018/dist/assets/images/bannerGP.png" class="show-for-medium" />

</div>




</main>

<script type="text/javascript">
	var X1 = 0;
	//$("#interna").css("margin-top", "-50px");
	$(document).ready(function () {
		var W = parseInt($(".graph").css("width"));
		var H = parseInt($(".graph").css("height"));
		var points = W+",155 0,155 0,"+H;

		$("#MLINE polyline").attr("points", points);

		W = parseInt($("#interna").css("width"));
		points = "0,0 "+W+",0";
		$("#graphNEXT polyline").eq(0).attr("points", points);

		var IW = parseFloat($("#next-grid .item").css("width"));
		$(".open-event").each( function() {
			var T = parseFloat($(this).position().top) - parseFloat($("#next-grid").position().top);
			var D = IW-T;
			console.log("T: "+T + "IW: "+IW+" diff = "+D);
			$(this).css("margin-top", D+"px");

		});

		X1 = IW - 50;
		points="0,30 "+X1+",30 "+(X1+25)+",10 "+(X1+50)+",30";
		$(".open-event polyline").attr("points", points);

	});

	$(".item").click( function() {
		console.log();
		if(	$(this).hasClass("opened")) {
			points="0,30 "+X1+",30 "+(X1+25)+",10 "+(X1+50)+",30";
			$(this).removeClass("opened");
			$(this).find(".testo").css("display", "none");

		} else {
			points="0,30 "+X1+",30 "+(X1+25)+",50 "+(X1+50)+",30";
			$(this).addClass("opened");
			$(this).find(".testo").css("display", "block");
		}
		$(this).find("svg > polyline").attr("points", points);
	});

</script>

<?php get_footer();
