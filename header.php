<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body>
  <header class=" header">
    <nav class="navbar navbar-default">
  <div class="navbar-brand-blog">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-blog.png" alt=""></a>
    </div>
    <div class="navbar-brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Globo Consórcio.">
        </a>
    </div>
  <div class="container">
    
    <a href="#menu" class="toggle"><span></span></a>
    <?php 

      require_once('assets/includes/wp_bootstrap_navwalker.php');
     ?>
     <?php
            wp_nav_menu( array(
                'menu'              => 'Menu',
                'theme_location'    => 'menu-header',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse menu',
                'container_id'      => 'bs-example-navbar-collapse-1 ',
                'menu_class'        => 'nav navbar-nav ',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
  </div><!-- /.container-fluid -->
  <div class="icones-right">    
    <ul class="redes">
        <li><a href="https://www.facebook.com/globoconsorcio/" target="_blank"><i class="icon-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/sigagloboconsorcio/" target="_blank"><i class="icon-instagram-1"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCGct2al48vMHTFFmz_OO9bg" target="_blank"><i class="icon-youtube-play"></i></a></li>
      </ul> 
      <i class="icon-search pesquisa"></i>
    <form role="search" method="get" id="form_pesquisa" class="form_pesquisa_mobile" action="http://www.globoconsorcio.com.br/nosso-blog/">
      <input type="text" class="transition mobile_search" name="texto_pesquisa" placeholder="Pesquise no Site" />
    </form>
  </div> 
</nav>
</header>
  <?php
  // If a regular post or page, and not the front page, show the featured image.
  if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! is_front_page() ) ) ) :
    echo '<div class="single-featured-image-header">';
    the_post_thumbnail( 'twentyseventeen-featured-image' );
    echo '<span>' . get_the_date('d/m') . '</span>';
    the_title('<h2>','</h2>'); 
    echo '</div><!-- .single-featured-image-header -->';
  endif;
  ?>

  
