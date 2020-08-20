
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3><?php echo get_bloginfo('name') ?></h3>
                    
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">
              <?php 
                  dynamic_sidebar('sidebar');
              ?>
              
            </div>

          </div>

          

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><?php echo get_bloginfo('name') ?></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <?php wp_footer() ?>