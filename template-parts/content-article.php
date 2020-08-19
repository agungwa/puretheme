 
<div class="row justify-content-center">
  <div class="col-lg-8">

    <div class="wow fadeInUp">

        
        <div class="testimonial-item">
        <p style="text-align: center;">
          <span>Published at: <?php the_date(); ?></span>
          <?php the_tags('<span><i class="fa fa-tag"></i>', '</span><span><i class="fa fa-tag"><i>','</span>') ?>
          <span><i class='fa fa-tag'></i>tag</span>
          <span><i class='fa fa-comment'></i><?php comments_number(); ?></span>
        </p>
        <?php the_content(); ?>
        </div>

        <?php comments_template() ?>
    </div>
  </div>


</div