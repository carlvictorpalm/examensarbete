<?php if(!is_front_page()) : ?>
  <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if(is_active_sidebar('sidebar')): ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div><!-- /.blog-sidebar -->
<?php endif; ?>

  
    
  </div><!-- /.row -->

  </div><!-- /.container -->
  
    
<footer class="blog-footer">
  <div class="container">
    <div class="row">
      <div class="links">
        <div class="footerlinks col-lg-4">
        <h3>LÄNKAR</h3>
            <p><a href="http://localhost/examensarbete/product/hasse/">Skapa tavla</a></p>
            <p><a href="http://localhost/examensarbete/illustrationer/">Inspiration</a></p>
            <p><a href="http://localhost/examensarbete/kontakt/">Kontakt</a></p>
            <p><a href="http://localhost/examensarbete/om-oss/">Om oss</a></p>
            <p><a href="#">Frågor & Svar</a></p>
        </div>
      <div class="footerinspo col-lg-4">
        <h3>INSPIRATION</h3>
        <p><a href="https://www.instagram.se/" target="_blank">Instagram</a></p>
        <p><a href="https://www.pinterest.se/" target="_blank">Pinterest</a></p>


      </div>
      <div class="footercontact col-lg-4">
        <h3>KONTAKTA OSS</h3>
        <p>hello@examensarbete.se</p>
        <p>Group KV AB</p>
        <p>Göteborgsvägen 11</p>
        <p>461 42 Göteborg</p>
        <p>Sverige</p>
      </div>
    </div>
    </div>
  </div>
  
  </div>
    <div class="copy">
        <p class="love">Created with <i class="icon ion-heart"></i> locally in the heart of Gothenburg, Sweden.</p><p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
        <p class="top"><a href="#">Back to top</a></p>
    </div>
</footer>
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<?php if ( is_front_page() ) { ?> 
  <script src="<?php bloginfo('template_url'); ?>/js/instafeed.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
   <?php 
    }
?>
<script src='<?php bloginfo('template_url'); ?>/js/create-poster.js'></script>



</body>
</html>
