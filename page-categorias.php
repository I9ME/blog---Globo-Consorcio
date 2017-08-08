<?php
/*
 Template Name: CATEGORIAS - Blog Globo Consórcio
 Description: Página Categoria
 Author: I9ME
 */
get_header();

?>
<section class="title_post">
  <div class="container">
    <h1>Categoria: DICAS</h1>
    <p>Descrição da Categoria acessada<br/> nesta página de exemplo.</p>
   
  </div>
</section>
<section class="area_post">
  <div class="container">
  
    <div class="conteudo">
    <!-- 
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
     -->
  </div>
</section>
  <div class="clearfix"></div>


































<?php
get_footer();
