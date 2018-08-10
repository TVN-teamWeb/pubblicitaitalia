<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<main>
	<div id="foreground">
		<div id="interna">
			<div class="articolo">

				<h1><?php the_post(); the_title(); ?></h1><br><br><br>

				<div class="contenuto">
					<?php the_content(); ?>
				</div>

			</div>
	</div>
</main>
<?php
get_footer();
