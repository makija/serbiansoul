
<?php
$tour=$this->tour;

?>

<section class="parallax_window_in" data-parallax="scroll" data-image-src="view/images/mainCover/<?=$tour->tour_cover?>" data-natural-width="1400" data-natural-height="470">
    <div id="sub_content_in">
      <div id="animate_intro">
        <h1><?=$tour->tour_name?></h1>
        <p><?=$tour->tour_shortDesc?></p>
      </div>
    </div>
  </section>
  <!-- End section -->
  <!-- End SubHeader ============================================ -->

  <section class="wrapper">
  <!-- <div style="margin-top:10px"></div> -->

  </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <div class="owl-carousel owl-theme add_bottom_15" >


<?php foreach($this->gallery as $image){ ?>


            <img class="owl-lazy" data-src="view/images/galleries/<?php echo $tour->tour_gallery.'/'.$image?>" data-src-retina="view/images/galleries/<?php echo $tour->tour_gallery.'/'.$image?>" alt="">

          <?php } ?>
          </div>

          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Overview</a>
            </li>
            <li><a href="#tab_3" data-toggle="tab">Map</a>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane fade in active" id="tab_1">

              <p>
              <?=$tour->tour_desc?>
              </p>
              <div class="row">


  <?php  foreach($this->services as $service){?>

                <div class="col-md-6">
                  <div class="feature-box">
                    <div class="feature-box-icon">
                      <i class="icon-ok-4"></i>
                    </div>
                    <div class="feature-box-info">
                      <h4><?=$service['srv_name']?></h4>
                      <p>
                      <?= $service['spec_srv_desc']?>
                      </p>
                    </div>
                  </div>

              </div>
            <?php } ?>
              <!-- End row -->
</div>
              <hr>
<div class="row">


              <h3>Program <span>(4 days)</span></h3>
              <?=$tour->tour_program?>
</div>
            </div>
            <!-- End tab_1 -->
            <!-- End tab_2 -->

            <div class="tab-pane fade" id="tab_3">
              <div id="map"></div>
              <!-- end map-->

              <div class="box_map">
                <i class="icon_set_1_icon-25"></i>
                <h4>By Train/tube</h4>
                <p>Per cu esse assentior delicatissimi, qui adipiscing dissentiunt mediocritatem in, dicat voluptaria no eam. No est alia eloquentiam. Has rebum vulputate adversarium no. Pro cibo delenit scripserit id.</p>
              </div>


              <div class="box_map">
                <i class="icon_set_1_icon-26"></i>
                <h4>By bus</h4>
                <p>Per cu esse assentior delicatissimi, qui adipiscing dissentiunt mediocritatem in, dicat voluptaria no eam. No est alia eloquentiam. Has rebum vulputate adversarium no. Pro cibo delenit scripserit id.</p>
              </div>

              <div class="box_map">
                <i class="icon_set_1_icon-21"></i>
                <h4>By Taxi/cabs</h4>
                <p>Per cu esse assentior delicatissimi, qui adipiscing dissentiunt mediocritatem in, dicat voluptaria no eam. No est alia eloquentiam. Has rebum vulputate adversarium no. Pro cibo delenit scripserit id.</p>
              </div>

            </div>
            <!-- End tab_3 -->
          </div>
          <!-- End tabs -->
        </div>
        <!-- End Col -->

        <aside class="col-md-4">
          <div class="box_style_1">
            <div class="priceList">

              <!-- <p class='h4'>Price <small class='text-light'>per person</small> </p>

              <ul>
                <li><span>80 &euro;</span> 4-7 people </li>
                <li><span>70 &euro;</span> 8-20 people </li>
                <li><span>50 &euro;</span> 21-43 people </li>

              </ul> -->


              <table>
                <tr>
                  <th class='h4'>Group</th>
                  <th class='h4'>Price</th>
                </tr>

                <?php foreach ($this->prices as $price) {

                ?>
                <tr>

                  <td><?=$price['min_people']?>-<?=$price['max_people']?> people</td>
                  <td><?=$price['price']?> &euro;</td>
                </tr>
              <?php } ?>

              </table>

              <small>*price is per person</small>
            </div>
<hr>
            <div class="includes">
              <p class="h5">Tour includes</p>
              <ul class="list_ok">

                <?php foreach ($this->services as $service) {

                ?>
                <li> <span> <i class="<?=$service['srv_icon']?>"></i></span> <?=$service['srv_name']?> </li>

              <?php } ?>

              </ul>


            </div>

          </div>
          <div class="box_style_2">
            <h3>Book Your Tour<span>Free service - Confirmed immediately</span></h3>
            <div id="message-booking"></div>
            <!-- <form method="post" action="assets/check_avail.php" id="check_avail" autocomplete="off">
              <input type="hidden" id="tour_name" name="tour_name" value="General Louvre Tour">
              <table id="tickets" class="table">
                <thead>
                  <tr>
                    <th>Tickets</th>

                    <th>Quantity</th>
                    <th class="text-center"><span class="subtotal">Subtotal</span>

                    </th>
                  </tr>
                </thead>
                <tfoot>
                  <tr class="total_row">
                    <td colspan="2"><strong>TOTAL</strong>
                    </td>
                    <td class="text-center">
                      <input name="total" id="total" value="">
                    </td>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td><strong>Adult</strong><a href="#" class="tooltip-1" data-placement="top" title="" data-original-title="16 - 65 years old"><sup class="icon-info-4"></sup></a>
                      <span class="price">$8.25</span>
                    </td>
                    <td>
                      <div class="styled-select">
                        <select class="form-control" name="adults" id="adults">
                          <option value="">Select</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                        </select>
                      </div>
                    </td>
                    <td class="text-center"><span class="subtotal">$0</span>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Senior</strong><a href="#" class="tooltip-1" data-placement="top" title="" data-original-title="Over 65 years old"><sup class="icon-info-4"></sup></a><span class="price">$6.75</span>
                    </td>
                    <td>
                      <div class="styled-select">
                        <select class="form-control" name="senior" id="senior">
                          <option value="">Select</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                        </select>
                      </div>
                    </td>
                    <td class="text-center"><span class="subtotal">$0</span>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Student</strong> <span class="price">$6.75</span> </td>
                    <td>
                      <div class="styled-select">
                        <select class="form-control" name="student" id="student">
                          <option value="">Select</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                        </select>
                      </div>
                    </td>
                    <td class="text-center"><span class="subtotal">$0</span>
                    </td>
                  </tr>
                </tbody>
              </table>

              <div class="form-group">
                <label>When?</label>
                <input type="text" class="form-control" id="date_pick" name="date_pick" data-date-format="M d, D" placeholder="Select a date">
              </div>
              <div class="form-group">
                <label>Name and Lastname</label>
                <input type="text" class="form-control" id="name_lastname_booking" name="name_lastname_booking" placeholder="Name and Lastname">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="email_booking" name="email_booking" placeholder="Email">
              </div>
              <div class="form-group">
                <label>Telephone</label>
                <input type="text" class="form-control" id="telephone_booking" name="telephone_booking" placeholder="Telephone">
              </div>
              <div class="form-group add_bottom_30">
                <label>Are you human? 3 + 1 =</label>
                <input type="text" id="verify_booking" class=" form-control" placeholder="Are you human? 3 + 1 =">
              </div>
              <div class="form-group">
                <input type="submit" value="Book now" class="btn_full" id="submit-booking">
              </div>

            </form> -->
            <hr>
            <a href="#0" class="btn_outline"> or Contact us</a>
            <a href="tel://004542344599" id="phone_2"><i class="icon_set_1_icon-91"></i>+45 423 445 99</a>

          </div>
        </aside>
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </section>
  <!-- End section -->

  <div class="container margin_30">
    <h3 class="second_title">Related tours</h3>
    <div class="carousel add_bottom_30">

      <div>
        <div class="img_wrapper">
          <div class="price_grid">
            <sup>$</sup>23
          </div>
          <!-- End tools i-->
          <div class="img_container">
            <a href="detail-page.html">
              <img src="img/tour_list_1.jpg" width="800" height="533" class="img-responsive" alt="">
              <div class="short_info">
                <h3>Las Vegas</h3>
                <em>Duration 3 days</em>
                <p>
                  A quam morbi ut arcu, eget neque molestie, ullamcorper congue pharetra, hendrerit odio consectetuer.
                </p>
                <div class="score_wp">
                  <div class="score">7.5</div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- End img_wrapper -->
      </div>

      <div>
        <div class="img_wrapper">
          <div class="price_grid">
            <sup>$</sup>32
          </div>
          <!-- End tools i-->
          <div class="img_container">
            <a href="detail-page.html">
              <img src="img/tour_list_5.jpg" width="800" height="533" class="img-responsive" alt="">
              <div class="short_info">
                <h3>Rome - Vatican</h3>
                <em>Duration 3 days</em>
                <p>
                  A quam morbi ut arcu, eget neque molestie, ullamcorper congue pharetra, hendrerit odio consectetuer.
                </p>
                <div class="score_wp">
                  <div class="score">7.5</div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- End img_wrapper -->
      </div>

      <div>
        <div class="img_wrapper">
          <div class="price_grid">
            <sup>$</sup>20
          </div>
          <!-- End tools i-->
          <div class="img_container">
            <a href="detail-page.html">
              <img src="img/tour_list_6.jpg" width="800" height="533" class="img-responsive" alt="">
              <div class="short_info">
                <h3>Maldive</h3>
                <em>Duration 3 days</em>
                <p>
                  A quam morbi ut arcu, eget neque molestie, ullamcorper congue pharetra, hendrerit odio consectetuer.
                </p>
                <div class="score_wp">
                  <div class="score">7.5</div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- End img_wrapper -->
      </div>

      <div>
        <div class="img_wrapper">
          <div class="price_grid">
            <sup>$</sup>22
          </div>
          <!-- End tools i-->
          <div class="img_container">
            <a href="detail-page.html">
              <img src="img/tour_list_7.jpg" width="800" height="533" class="img-responsive" alt="">
              <div class="short_info">
                <h3>London</h3>
                <em>Duration 3 days</em>
                <p>
                  A quam morbi ut arcu, eget neque molestie, ullamcorper congue pharetra, hendrerit odio consectetuer.
                </p>
                <div class="score_wp">
                  <div class="score">7.5</div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- End img_wrapper -->
      </div>

    </div>
    <!-- End carousel -->
  </div>
