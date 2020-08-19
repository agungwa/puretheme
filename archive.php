<?php get_header() ?>

  <main id="main">
    <article class="" >
        <?php 
            if ( have_posts() ){

              while( have_posts() ){
                
                the_post();
                if ( is_front_page() ){
                    get_template_part( 'template-parts/content' );
                  } else{
                    get_template_part( 'template-parts/content','archive' );
                  }
              }
            }
        ?>
    </article>
  </main>

 <?php get_footer() ?>