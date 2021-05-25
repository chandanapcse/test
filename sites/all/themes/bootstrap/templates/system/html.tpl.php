<?php

/**
 * @file
 * Default theme implementation to display the HTML structure of a single page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $html_attributes:  String of attributes for the html element. It can be
 *   manipulated through the variable $html_attributes_array from preprocess
 *   functions.
 * - $html_attributes_array: An array of attribute values for the HTML element.
 *   It is flattened into a string within the variable $html_attributes.
 * - $body_attributes:  String of attributes for the BODY element. It can be
 *   manipulated through the variable $body_attributes_array from preprocess
 *   functions.
 * - $body_attributes_array: An array of attribute values for the BODY element.
 *   It is flattened into a string within the variable $body_attributes.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup templates
 */
?><!DOCTYPE html>
<html<?php print $html_attributes;?><?php print $rdf_namespaces;?>>
<head>
  <link rel="profile" href="<?php print $grddl_profile; ?>" />
  <title>The official site of Avasta Resort And Spa - Anuradhapura </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta
    name=description content=" Welcome to the best of Sri Lankan boutique hotel in Anuradhapura. The official site of Avasta Resort And Spa  will open doors to the most luxurious boutique hotel in Anuradhapura">
  <meta
    name=keywords content="Avasta resort & Spa, avasta anuradhapura, avasta, avasta hotel, luxury, anuradhapura hotels, avasta hotel anuradhapura official site, sacred city, 3 star hotel,tissa wewa, luxury rooms, ruwanweli seya, jethawanaramaya, abhayagiri vihara, anuradhapura, sri lanka hotels, avasta sri lanka, luxury, boutique, accommodation, dining, wedding, spa treatment, meetings, special events, ayurvedic healing, Anuradhapura Hotels: Anuradhapura Hotels, Hotels in Anuradhapura, Luxury Hotels in Anuradhapura, Anuradhapura Luxury Hotel, Star class hotel in Anuradhapura, Star class hotel in Anuradhapura sri lanka, anuradhapura guide, accommodation, advance, ancient anuradhapura, availability avasta, beliefs, book, booking, bookings brings, celebrate, center, chalet, check checker,comfort, confernece, create delux destinations, discover early, enjoy essences events, experiences explore,hospitality, hotel, Gini kabala, maduwa, magala, magul maduwa, thippola, sunrise, restaurant, restaurants anuradhapura, anuradhapura restaurants">
    <meta property="og:title" content="Luxury hotels in Anuradhapura|Anuradhapura Hotels"/>
    <meta itemprop="description" content="Avasta Resort & Spa one of the best hotel in Anuradhapura. With finest luxury accommodation in Anuradhapura it is one of the top places to stay in Anuradhapura."> 

  <?php global $base_url; ?>
  <link rel="icon" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/favicon.png">
    
	
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/favicon-16x16.png">
<link rel="manifest" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  <?php print $head; ?>
  
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
  <?php print $scripts; ?>
  

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/css/libs/revolution/settings.css">
  <link rel="stylesheet" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/css/libs/jquery-ui/jquery-ui.min.css">
  <link rel="stylesheet" href="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/css/style.css"><!-- Style -->
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137190720-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137190720-1');
</script>

  
</head>
<body class="room single">
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

  <!-- Scripts -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/jquery-1.12.4.min.js"></script><!-- jQuery -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/counter-box.min.js"></script><!-- counter -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/gallery.min.js"></script><!-- gallery -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/jquery.flexslider-min.js"></script><!-- flexslider -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/stellar.min.js"></script><!-- parallax -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/moment.min.js"></script><!-- moment -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/jquery-ui.min.js"></script><!-- ui -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/daterangepicker.min.js"></script><!-- date -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/theme-customs.js"></script><!-- Theme Custom -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/isotope.pkgd.min.js"></script><!-- Sticky sidebar -->
  <!-- REVOLUTION JS FILES -->
  <script  src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/revolution/jquery.themepunch.tools.min.js"></script>
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/revolution/jquery.themepunch.revolution.min.js"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/revolution/extensions/revolution.extension.actions.min.js"></script>
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/revolution/extensions/revolution.extension.carousel.min.js"></script>
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/revolution/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/revolution/extensions/revolution.extension.migration.min.js"></script>
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/revolution/extensions/revolution.extension.navigation.min.js"></script>
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/revolution/extensions/revolution.extension.parallax.min.js"></script>
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/revolution/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="<?php echo $base_url;?>/sites/all/themes/bootstrap/common/js/libs/revolution/extensions/revolution.extension.video.min.js"></script>
  <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-bufzM7X77G3QhCJMrTKKMNEK3c40mKs&callback=initMap">

  </script>
  <script>function setREVStartSize(e) {
      try {
        e.c = jQuery(e.c);
        var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
        if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
          f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
        }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
          var u = (e.c.width(), jQuery(window).height());
          if (void 0 != e.fullScreenOffsetContainer) {
            var c = e.fullScreenOffsetContainer.split(",");
            if (c) jQuery.each(c, function (e, i) {
              u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
            }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
          }
          f = u
        } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
        e.c.closest(".rev_slider_wrapper").css({height: f})
      } catch (d) {
        console.log("Failure at Presize of Slider:" + d)
      }
    };</script>

  <script>
    var revapi4,
      tpj;
    (function () {
      if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad); else onLoad();

      function onLoad() {
        if (tpj === undefined) {
          tpj = jQuery;
          if ("off" == "on") tpj.noConflict();
        }
        if (tpj("#rev_slider_4_1").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev_slider_4_1");
        } else {
          revapi4 = tpj("#rev_slider_4_1").show().revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
              keyboardNavigation: "off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation: "off",
              mouseScrollReverse: "default",
              onHoverStop: "off",
              arrows: {
                style: "zeus",
                enable: true,
                hide_onmobile: false,
                hide_onleave: false,
                tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                left: {
                  h_align: "left",
                  v_align: "center",
                  h_offset: 30,
                  v_offset: 0
                },
                right: {
                  h_align: "right",
                  v_align: "center",
                  h_offset: 20,
                  v_offset: 0
                }
              }
              ,
              bullets: {
                enable: true,
                hide_onmobile: false,
                style: "hermes",
                hide_onleave: false,
                direction: "horizontal",
                h_align: "center",
                v_align: "bottom",
                h_offset: 0,
                v_offset: 100,
                space: 10,
                tmp: ''
              }
            },
            viewPort: {
              enable: true,
              outof: "wait",
              visible_area: "80%",
              presize: false
            },
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [672, 600, 500, 400],
            lazyType: "none",
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }
        ;
        /* END OF revapi call */

      };
      /* END OF ON LOAD FUNCTION */
    }());
    /* END OF WRAPPING FUNCTION */
  </script>

  <script>
    var d = new Date();
    document.getElementById("day").setAttribute('value',(d.getDate())+'.');
    document.getElementById("month").setAttribute('value',format_month());
    document.getElementById("multidate").setAttribute('value',format_full());

    document.getElementById("day2").setAttribute('value',(d.getDate()+1)+'.');
    document.getElementById("month2").setAttribute('value',format_month());

    function format_full() {
      var months = ['January','February','March','April','May','June','July','August','September','September','November','December'];
      return months[d.getMonth()]+' '+d.getDate()+', '+d.getFullYear();
    }
    function format_month() {
      var months = ['Jan', 'Feb', 'March', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
      return months[d.getMonth()]+'. '+d.getFullYear();
    }

  </script>
  <!-- Google Map -->
  <script>
    $(window).load(function(){
      function initMap() {
        var myLatLng = {lat: 8.352289, lng: 80.416821};
        var customMapType = new google.maps.StyledMapType([{"stylers":[{"hue":"#ff1a00"},{"invert_lightness":true},{"saturation":-100},{"lightness":33},{"gamma":0.5}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#2D333C"}]}], {
          name: 'Custom Style'
        });
        var customMapTypeId = 'custom_style';

        var map = new google.maps.Map(document.getElementById('google-map'), {
          zoom: 16,
          center: myLatLng  ,  // Brooklyn.
          mapTypeControl: false,
          mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
          },
          zoomControl: false,
          scaleControl: false,
          scrollwheel:false
        });
        var marker = new google.maps.Marker({
          position: myLatLng ,
          map: map,
          title: 'Hello World!'
        });
        google.maps.event.trigger(map, 'resize');
        map.mapTypes.set(customMapTypeId, customMapType);
        map.setMapTypeId(customMapTypeId);
      }
      initMap();
    })

  </script>
</body>
</html>
