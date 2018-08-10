<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
            <section>
              <ul class="menu">
                <li><a href="#">CHI SIAMO</a></li>
                <li><a href="/contatti">CONTATTI</a></li>
                <li><a href="/data-center">DATA CENTER</a></li>
                <li><a href="http://abbonamenti.tvnmediagroup.it/" target="_blank">ABBONAMENTI</a></li>
              </ul>

              <div class="socials">


              <a href="#">
                <i class="fab fa-facebook-square"></i>
              </a>
              &#160;&#160;
              <a href="#">
                <i class="fab fa-twitter-square"></i>
              </a>
              </div>
            </section>
            <section>
              <!--span class="fmh">&gt;</span-->
              <b>
                NEWS &amp; MAGAZINE
              </b>

              <ul class="menu">
                <li> <a href="/today">IL TODAY</a> </li>
                <li> <a href="/mensile">IL MENSILE</a> </li>
                <li> <a href="/anteprima">NEWSLETTER</a> </li>
              </ul>
            </section>
            <section>
              <!--span class="fmh">&gt;</span-->
              <b>
                I NOSTRI EVENTI
              </b>
              <ul class="menu">
                <li> <a href="https://www.grandprixadvertisingstrategies.com">GRANDPRIX ADVERTISING STRATEGIES</a> </li>
                <li> <a href="https://www.relationalstrategiesgrandprix.com">RELATIONAL STRATEGIES GRANDPRIX</a> </li>
                <li> <a href="https://www.brandidentitygrandprix.com">BRAND IDENTITY GRANDPRIX</a> </li>

              </ul>
            </section>
            <section>
              <!--span class="fmh">&gt;</span-->
              <b>
                IL NETWORK
              </b>
              <ul class="menu">
                <li> <a href="https://www.advertiser.it/">ADVERTISER.IT</a> </li>
                <li> <a href="https://www.mymarketing.net/">MYMARKETING.NET</a> </li>
                <li> <a href="http://www.lannual.it/">L'ANNUAL</a> </li>
                <li> <a href="#">TELEVISIONET.TV</a> </li>
                <li> <a href="#">toBE MAGAZINE</a> </li>

              </ul>
            </section>
        </div>
        <div class="footer-grid">
          <section>
            <img src="/wp-content/themes/PI2018/dist/assets/images/TodayLogo.png" width="169">
          </section>
          <section>
            <p>
              Registrazione roc: 17898
              <br>
              Registrazione Tribunale di Milano
              <br>
              nr.487 del 18.07.1990
            </p>
          </section>
          <section>
            <p>
              Pubblicità Italia è un marchio di TVN srl
              <br>
              P. IVA 05793330969 © Copyright TVN srl.
              <br>
              Tutti i diritti riservati.
            </p>
            <br>
            <a href="/privacy">Privacy e cookie policy</a>
          </section>
        </div>
    </div>
</footer>

<div class="footerLogo">
  <img src="/wp-content/themes/PI2018/dist/assets/images/TVN_footer.jpg" />
</div>


<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
