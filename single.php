<?php get_header(); ?>


<section class="area_post_interna">
  <div class="container">
    <div class="conteudo">
    
      <?php 
        $args = array( 'post_type' => 'Post', 'showposts' => 4);
        $my_posts = get_posts( $args );
      ?>
      <?php if( $my_posts ) : foreach( $my_posts as $post ) : setup_postdata( $post ); ?>
          <?php the_post_thumbnail(); ?>
          <?php the_content(); ?>   
          <?php 
            // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;

          ?>     
      <?php endforeach; endif; ?>
      
    </div>
   
    
      <aside class="aside_interno">
        <?php //siderbar footer center?>
        <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('Sidebar aside')): ?>
        <?php endif; ?>
      </aside>
    
  </div>
</section>
  <div class="clearfix"></div>
<?php get_footer(); ?>