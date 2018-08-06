<!-- BLOCCHI CATEGORIE -->
<section id="cat-news-container">
<?php $categorie = array(4 => "CREATIVITY", 119 => "MARKETING", 64 => "MEDIA", 20 => "DIGITAL", 129 => "WORLD", 5199 => "PEOPLE" );
  foreach ($categorie as $catID => $catName):
    $args = array(
      'cat' => $catID,
      'post_type' => 'post',
      'posts_per_page' => 8,
    );

    $query = new WP_Query( $args );
    $query->the_post();

?>


  <h4><b><?php echo $catName; ?></b></h4>
  <div class="cat-news">
    <div class="main-news">
      <a href="<?php echo get_the_permalink(); ?>">
      <img src="<?php echo the_post_thumbnail_url('blk-thumb'); ?>" />
        <span class="titolo">
          <span>
            <?php echo strtolower(get_the_title()); ?>
          </span>
        </span>
      </a>
    </div>
    <?php for($s=0; $s<2; $s++ ):
      $query->the_post(); ?>
      <div class="side-news">
        <a href="<?php echo get_the_permalink(); ?>">
          <img src="<?php echo the_post_thumbnail_url('blk-thumb'); ?>" />
          <span class="titolo">
            <?php echo strtolower(get_the_title()); ?>
          </span>
        </a>
      </div>
    <?php endfor; ?>

    <div class="lower-grid">
      <?php for($n=0; $n<2; $n++ ):
        $query->the_post(); ?>
      <div class="sm-news-box">
        <a href="<?php echo get_the_permalink(); ?>" class="titolo">
          <img  src="<?php echo the_post_thumbnail_url('blk-thumb'); ?>" />
          <br>
          <?php echo strtolower(get_the_title()); ?>
        </a>
      </div>
      <?php endfor; ?>

      <div class="news-list">
        <?php for($l=0; $l<3; $l++ ):
          $query->the_post(); ?>
        <a href="<?php echo get_the_permalink(); ?>" class="titolo">
          <?php echo strtolower(get_the_title()); ?>
        </a>
        <?php endfor; ?>

      </div>
    </div>
    <div class="divider">
      <hr>
    </div>
  </div>

  <div class="sb-space">
  </div>



<?php endforeach; ?>



</section>
