<section class="header-video">
    <div id="hero_video">
      <div id="animate_intro">
        <h3>Enjoy a Perfect Tour</h3>
        <p>
          Find the best Tours and Excursion at the best price
        </p>
      </div>
    </div>
    <img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="750">
  </section>
  <!-- End Header video -->
  <!-- End SubHeader ============================================ -->

<section class="wrapper">
    <div class="divider_border"></div>

    <div class="container">

      <div class="main_title">
        <h2>Our <span>Top</span> Travel Tours</h2>
        <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p> <!-- slogan neki ispod naslova -->
      </div>
      <div class="row">



          <!-- odje se zavrsava-->
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
                <a href="?ctrlm=detail&id=<?=$tour->tour_id?>">
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

          <?php
          }?>


      </div>
      <!-- End row -->

      <div class="main_title_2">
        <h3>View other <span>popular</span> tours</h3>
        <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
      </div>
      <div class="row list_tours">
        <div class="col-sm-6">
          <h3>New Tours</h3>
          <ul>

            <?php

            foreach($this->newTours as $newTour){


            ?>
            <li>
              <div>
                <a href="detail-page.html">
                  <figure><img src="view/images/cover/<?=$newTour->tour_cover?>" alt="thumb" class="img-rounded" width="60" height="60">
                  </figure>
                  <h4><?=$newTour->tour_name?></h4>
                  <small>Duration 1hr 20 minutes</small>
                  <span class="price_list">$<?=$newTour->lowestPrice?></span>
                </a>
              </div>
            </li>

            <?php } ?>
          </ul>
        </div>

        <div class="col-sm-6">
          <h3>Special offers</h3>
          <ul>
            <?php foreach ($this->disTours as $disTour) {

             ?>
            <li>
              <div>
                <a href="detail-page.html">
                  <figure><img src="view/images/cover/<?=$disTour->tour_cover?>" alt="thumb" class="img-rounded" width="60" height="60">
                  </figure>
                  <h4><?=$disTour->tour_name?></h4>
                  <small>Duration 1hr 20 minutes</small>
                  <span class="price_list"><em> $<?=$disTour->lowestPrice?> </em> $<?=$disTour->dis?> </span>
                </a>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>

      </div>
      <!-- End row -->

      <!-- <p class="text-center add_bottom_45">
        <a href="grid.html" class="btn_1">Explore all tours (24)</a>
      </p> -->

    </div>
  </section>
  <!-- End section -->

  <section class="container margin_60">
    <div class="main_title">
      <h3>Why choose BesTours</h3>
      <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="box_how">
          <div class="icon_how"><span class="icon_set_1_icon-81"></span>
          </div>
          <h4>Best price guarantee</h4>
          <p>Lorem ipsum dolor sit amet, et cum civibus referrentur, at propriae forensibus qui. Duo aliquip necessitatibus ne.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="box_how">
          <div class="icon_how"><span class="icon_set_1_icon-94"></span>
          </div>
          <h4>Professional local guides</h4>
          <p>Lorem ipsum dolor sit amet, et cum civibus referrentur, at propriae forensibus qui. Duo aliquip necessitatibus ne.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="box_how">
          <div class="icon_how"><span class="icon_set_1_icon-90"></span>
          </div>
          <h4>Certifcate of Excellence</h4>
          <p>Lorem ipsum dolor sit amet, et cum civibus referrentur, at propriae forensibus qui. Duo aliquip necessitatibus ne.</p>
        </div>
      </div>
    </div>
    <!-- End Row -->
  </section>
  <!-- End Container -->

  <section class="promo_full">
    <div class="promo_full_wp">
      <div>
        <h3>Our Partners<span>Id tale utinam ius, an mei omnium recusabo iracundia.</span></h3>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="carousel_testimonials">
                <div>
                  <div class="box_overlay">
                    <div class="pic">
                      <figure><img src="img/testimonial_1.jpg" alt="" class="img-circle">
                      </figure>
                      <h4>Roberta<small>12 October 2015</small></h4>
                    </div>
                    <div class="comment">
                      "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud."
                    </div>
                  </div>
                  <!-- End box_overlay -->
                </div>

                <div>
                  <div class="box_overlay">
                    <div class="pic">
                      <figure><img src="img/testimonial_3.jpg" alt="" class="img-circle">
                      </figure>
                      <h4>Roberta<small>12 October 2015</small></h4>
                    </div>
                    <div class="comment">
                      "No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
                    </div>
                  </div>
                  <!-- End box_overlay -->
                </div>

                <div>
                  <div class="box_overlay">
                    <div class="pic">
                      <figure><img src="img/testimonial_1.jpg" alt="" class="img-circle">
                      </figure>
                      <h4>Roberta<small>12 October 2015</small></h4>
                    </div>
                    <div class="comment">
                      "No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
                    </div>
                  </div>
                  <!-- End box_overlay -->
                </div>

              </div>
              <!-- End carousel_testimonials -->
            </div>
            <!-- End col-md-8 -->
          </div>
          <!-- End row -->
        </div>
        <!-- End container -->
      </div>
      <!-- End promo_full_wp -->
    </div>
    <!-- End promo_full -->
  </section>
  <!-- End section -->
