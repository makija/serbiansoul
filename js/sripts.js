<script>

'use strict';
HeaderVideo.init({
  container: $('.header-video'),
  header: $('.header-video--media'),
  videoTrigger: $("#video-trigger"),
  autoPlayVideo: true
});

'use strict';
$(".team-carousel").owlCarousel({
  items: 1,
  loop: true,
  margin: 10,
  autoplay: true,
  smartSpeed: 300,
  responsiveClass: false,
  responsive: {
    320: {
      items: 1,
    },
    768: {
      items: 2,
    },
    1000: {
      items: 3,
    }
  }
});

$('#date_pick').datepicker();

	$(".selectbox").selectbox();
