<?php get_header() ?>

  <main id="main">
     
    <?php if ( is_front_page() ) {
      include(__DIR__. ('/intro.php'));
        } 
    ?>

    <article class="" >
        <?php 
        include(__DIR__. ('/home-page.php'));
            if ( have_posts() ){

              while( have_posts() ){
                
                the_post();
                if ( is_front_page() ){
                    get_template_part( 'template-parts/content' );
                  } else{
                    get_template_part( 'template-parts/content','article' );
                  }
              }
            }
        ?>
    </article>
  </main>

 <?php get_footer() ?>