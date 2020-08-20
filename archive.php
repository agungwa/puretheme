<?php get_header() ?>

  <main id="main">
    <article class="" >
       
  <div class="row justify-content-center">
    <div class="col-lg-8">

      <div class="wow fadeInUp">
        <?php 
            if ( have_posts() ){

              while( have_posts() ){
                
                the_post();
                
                    get_template_part( 'template-parts/content','archive' );
                  
              }
            }
        ?>
        
        <?php
          the_posts_pagination();
        ?>

        </div>
       

       </div>
    </div>
    </article>
  </main>

 <?php get_footer() ?>