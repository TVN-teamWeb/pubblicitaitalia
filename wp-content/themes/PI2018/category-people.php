<?php


get_header(); ?>

<main>
	<div id="foreground">
		<div id="interna">

        <h2>PEOPLE</h2>

    <?php
    $args = array(
      'cat' => 5199,
      'post_type' => 'post',
      'posts_per_page' => 6,
    );

    $query = new WP_Query( $args );
    while($query->have_posts()):
      $query->the_post();
    ?>
    <div class="people">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('people-thumb'); ?>
      </a>
        <span class="infobox">
          <h3>  <?php echo strtolower(get_the_title()); ?> </h3>

          <?php the_excerpt(); ?>

          <span class="data">
            <?php echo get_the_date(); ?>
          </span>
        </span>

    </div>

  <?php endwhile; ?>

  <br><br><br>
  <hr>
  <?php get_template_part( 'template-parts/autopromo-orizzontale' ); ?>
  <br><br><br>
  <?php get_template_part( 'template-parts/autopromo-newsletter' ); ?>
  </div>
  </div>
</main>

<?php get_footer();
