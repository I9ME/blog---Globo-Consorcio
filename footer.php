<section class="newsletter"> 
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="box-left">
            <div class="logos">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-blog.png" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png" alt="">
            </div>
            <ul class="redes-footer">
              <li><a href="https://www.facebook.com/globoconsorcio/" target="_blank"><i class="icon-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/sigagloboconsorcio/" target="_blank"><i class="icon-instagram-1"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCGct2al48vMHTFFmz_OO9bg" target="_blank"><i class="icon-youtube-play"></i></a></li>
            </ul> 
          </div>
        </div>
        <div class="col-md-4">
        <div class="categorias">
        <?php //siderbar footer center?>
        <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('Sidebar footer center')): ?>
        <?php endif; ?>
        </div>
        </div>
        <div class="col-md-5">
          <div class="facebook">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgloboconsorcio%2F&tabs=timeline&width=350&height=223&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="223" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          </div>
        </div>
      </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
      <h6>Copyright © 2017 <strong>Globo Consórcio</strong>. <span>Todos os direitos reservados.</span></h6>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>