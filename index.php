<?php get_header(); ?>

 <div class="clearfix"></div>
<div class="slider">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
     <?php 
      $args = array('post_type'=>'slider', 'showposts'=>5);
      $my_slider = get_posts( $args );
      $count = 0 ; if($my_slider) : foreach ($my_slider as $post) : setup_postdata( $post );
    ?>
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $count; ?>" <?php if($count == 0): ?>class="active"><?php endif; ?></li>
     <?php 
      $count ++;
      endforeach;
      endif;
    ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
   <?php 
      $cont = 0 ; if($my_slider) : foreach ($my_slider as $post) : setup_postdata( $post );
    ?>
      <div class="item <?php if($cont == 0) echo "active"; ?>">
        <?php the_post_thumbnail('full'); ?>
        <div class="carousel-caption">
          <h2><?php the_title(); ?></h2>
        </div>
      </div>
    <?php
      $cont ++; 
      endforeach;
      endif;
    ?>

  </div>
</div>
</div>
<div class="clearfix"></div>
<section class="title_post">
  <div class="container">
    <h1>Últimos Posts</h1>
    <p>Fique por dentro das novidades e<br/> dicas da GLOBO CONSÓRCIO.</p>
   
  </div>
</section>
<section class="area_post">
  <div class="container">
  
    <div class="conteudo">
    
      <?php 
        $args = array( 'post_type' => 'Post', 'showposts' => 4);
        $my_posts = get_posts( $args );
      ?>
      <?php if( $my_posts ) : foreach( $my_posts as $post ) : setup_postdata( $post ); ?>
        <table>
          <thead>
            <tr>
              <td valign="center" align="center" width="100"><span><?php the_date('d/m'); ?></span></td>
              <td valign="center" align="center" ><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><h3></td>
              <td valign="center" align="center" width="100"><b><?php comments_number( '0', '1', '%' ); ?></b></td>
            </tr>
          </thead>
          </table>
          <?php the_post_thumbnail(); ?>
          <?php the_content(); ?>
          
        
      <?php endforeach; endif; ?>
      
    </div>
   
    
      <aside>
        <?php //siderbar footer center?>
        <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('Sidebar aside')): ?>
        <?php endif; ?>
      </aside>
    
  </div>
</section>
  <div class="clearfix"></div>

<?php get_footer(); ?>