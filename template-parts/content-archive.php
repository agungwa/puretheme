

					<div class="row archives">
						<div class="col-lg-6 wow fadeInUp">
							<img src="<?php the_post_thumbnail_url(('thumbnail')); ?>" class="img-fluid" alt="">
						</div>
						<div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
							<h4><?php the_title(); ?></h4>
							<div><span><?php the_date(); ?></span><span><a href="#">8 comments</a></span></div>
							<?php the_excerpt(); ?>
							<a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
						</div>
					</div>
			
		