  <section class="parallax_window_in" data-parallax="scroll" data-image-src="img/sub_header_list_museum.jpg" data-natural-width="1400" data-natural-height="470">
    <div id="sub_content_in">
      <div id="animate_intro">
        <h1>Travel Tours</h1>
        <p>"Usu habeo equidem sanctus no ex melius labitur conceptam eos"</p>
      </div>
    </div>
  </section>
  <!-- End section -->
  <!-- End SubHeader ============================================ -->

  <section class="wrapper">
    <div class="divider_border_gray"></div>
    <div id="filters" class="clearfix">
    </div>
    <!-- End filters -->


    <div class="container">
      <div class="row">

        <?php

        foreach($this->tours as $tour){
        ?>

        <div class="col-md-4 col-sm-6 wow fadeIn animated" data-wow-delay="0.2s">
          <div class="img_wrapper">
            <div class="ribbon">
              <span>Popular</span>
            </div>
            <div class="price_grid">
              <sup>$</sup><?=$tour->lowestPrice?>
            </div>
            <div class="img_container">
              <a href="?ctrlm=detail&tour=<?=$tour->tour_id?>">
                <img src="view/images/cover/<?=$tour->tour_cover?>" width="800" height="533" class="img-responsive" alt="">
                <div class="short_info">
                  <h3><?=$tour->tour_name?></h3>
                  <em>Duration 3 days</em>
                  <p>
                    <?=$tour->tour_shortDesc?>
                  </p>
                  <div class="score_wp">Superb
                    <div class="score">7.5</div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- End img_wrapper -->
        </div>

      <?php } ?>
        <!-- End col -->



        <!-- <nav class="pagination-wrapper">
          <ul class="pagination">
            <li><a href="#">1</a>
            </li>
            <li><a href="#">2</a>
            </li>
            <li><a href="#">3</a>
            </li>
            <li><a href="#">4</a>
            </li>
            <li><a href="#">5</a>
            </li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>


      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </section>
  <!-- End section -->


  <!-- end container -->
