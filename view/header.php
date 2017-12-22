<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="BESTOURS - Travel and Tours multipurpose template">
	<meta name="author" content="Ansonika">
	<title>BESTOURS - Travel and Tours multipurpose template</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Satisfy" rel="stylesheet">

	<!-- BASE CSS -->

	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/owl.carousel.min" rel="stylesheet">
	<link href="css/owl.theme.default.min" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="css/date_time_picker.css" rel="stylesheet">
	<link href="css/timeline.css" rel="stylesheet">

	<!-- Modernizr -->
	<script src="js/modernizr.js"></script>

	<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>


<body>

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<div id="preloader">
  <div data-loader="circle-side"></div>
</div>
<div id="header_1">
    <header>
      <div id="top_line">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <a href="tel://004542344599" id="phone_top">0045 043204434</a><span id="opening">mail</span>
            </div>
            <div class="col-md-6 col-sm-6 hidden-xs">
              <!-- ovde ce doci ikonice za mreze -->
            </div>
          </div>
          <!-- End row -->
        </div>
        <!-- End container-->
      </div>
      <!-- End top line-->

      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-3">
            <div id="logo_home">
              <h1><a href="index.html" title="City tours travel template">BesTours Travel&amp;Excursion Multipurpose Template</a></h1>
            </div>
          </div>
          <nav class="col-md-9 col-sm-9 col-xs-9">
            <ul id="tools_top">
              <li><a href="#" class="search-overlay-menu-btn"><i class="icon-search-6"></i></a>
              </li>
            </ul>
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            <div class="main-menu">
              <div id="header_menu">
                <img src="img/logo_menu.png" width="145" height="34" alt="Bestours" data-retina="true">
              </div>
              <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
              <ul id='nav'>

              <li id="home"> <a href="?ctrlm=home">Home</a></li>

              <?php
               foreach($this->categories as $cat){
                 ?>
                   <li> <a href="?ctrlm=toursGrid&tour=<?=$cat->cat_id?>"><?=$cat->cat_name?></a> </li>
                 <?php
               }


              ?>


                <li>
                  <a href="?ctrlm=about">About us</a>
                </li>


                <li>
                  <a href="?ctrlm=contact">Contact us</a>
                </li>

                  <li><a href="faq.html">Blog</a>
                </li>

              </ul>
            </div>
            <!-- End main-menu -->
          </nav>
        </div>
      </div>
      <!-- container -->
    </header>
    <!-- End Header -->
  </div>
