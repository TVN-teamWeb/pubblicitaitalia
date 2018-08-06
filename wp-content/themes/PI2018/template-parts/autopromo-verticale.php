<?php
  $post_id = 104669;
  $post_thumbnail_id = get_post_thumbnail_id( $post_id );
  $image = wp_get_attachment_image_src( $post_thumbnail_id , 'copertina');

?>

<div id="sb-promo">
  <div class="vbox">
    <div class="claim">L’INFORMAZIONE <br>CHE RACCONTA <br>LA COMUNICAZIONE</div>
    <a target="_blank" href="http://abbonamenti.tvnmediagroup.it/" class="btn-abbonamento">
      <button class="hollow button alert">
        Abbonati
      </button>
    </a>
    <div class="preview">
      <!--img src="/wp-content/themes/PI2018/dist/assets/images/Today.jpg" alt=""-->
      <img src="<?php echo $image[0] ?>" alt="" >
      <a href="http://www.pubblicitaitalia.it/il-today-di-pubblicita-italia">
        <img src="/wp-content/themes/PI2018/dist/assets/images/guarda_anteprima.png" />
      </a>
    </div>

    <img class="v-arrow" src="/wp-content/themes/PI2018/dist/assets/images/arrow_bt.png" />
  </div>

</div>
