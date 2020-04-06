<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Contact Us - Panomatics | Virtual Reality Solutions</title>
      <meta property="og:title" content="Panomatics | Virtual Reality Solutions">
      <meta name="description" content="Welcome to Panomatics website">
      <meta property="og:description" content="Welcome to Panomatics website">
      <meta property="og:image" content="<?= IMAGES_BASE_URL; ?>/logo.png">
      <meta name="keywords" content="beach republic, koh samui, hotel, tourism, thailand, asia">
      <link rel="preload" href="<?= FRONTEND_BASE_URL; ?>/js/scriptContact.min.js" as="script" />
      <link rel="preload" href="<?= IMAGES_BASE_URL; ?>/logo-white.png" as="image" />
      <link rel="preload" href="<?= IMAGES_BASE_URL; ?>/icon-est.png" as="image" />
      <link rel="shortcut icon" href="<?= IMAGES_BASE_URL; ?>/favicon.png" type="image/x-icon">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <style>
         @font-face {
         font-family: 'novecento_sans_widemedium';
         src: url('<?= FRONTEND_BASE_URL; ?>/css/fonts/Novecentosanswide-Medium-webfont.eot');
         src: url('<?= FRONTEND_BASE_URL; ?>/css/fonts/Novecentosanswide-Medium-webfont.eot?#iefix') format('embedded-opentype'),
         url('<?= FRONTEND_BASE_URL; ?>/css/fonts/Novecentosanswide-Medium-webfont.woff2') format('woff2'),
         url('<?= FRONTEND_BASE_URL; ?>/css/fonts/Novecentosanswide-Medium-webfont.woff') format('woff'),
         url('<?= FRONTEND_BASE_URL; ?>/css/fonts/Novecentosanswide-Medium-webfont.ttf') format('truetype'),
         url('<?= FRONTEND_BASE_URL; ?>/css/fonts/Novecentosanswide-Medium-webfont.svg#novecento_sans_widemedium') format('svg');
         font-weight: normal;
         font-style: normal;
         }
         dl,h1,h2,h3,h4,h5,h6,ol,ul{margin-top:0;margin-bottom:0}button,iframe,img{border:0}blockquote,button{margin:0;padding:0}html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:1}li,main{display:block}ol,ul{padding-left:0}dd{margin-left:0}h1,h2,h3,h4,h5,h6{font-size:inherit}figure,p{margin:0}sup{position:relative;top:-.5em;vertical-align:baseline;font-size:75%;line-height:0}strong{font-weight:700}img{max-width:100%;height:auto;vertical-align:middle}a{text-decoration:none;color:inherit}button{text-align:inherit;text-transform:inherit;font:inherit;-webkit-font-smoothing:inherit;letter-spacing:inherit;background:0 0;cursor:pointer;overflow:visible}::-moz-focus-inner{border:0;padding:0}*{box-sizing:border-box}
         body {
         font: normal 14px/1.1 novecento_sans_widemedium;
         font-size: 12px;
         line-height: 1.5;
         }
         .clear::after {
         content: '';
         display: block;
         clear: both;
         }
         #header-alt {
         width: 100%;
         }
         #header-alt-wrapper {
         position: relative;
         max-width: 1230px;
         margin: auto;
         padding: 25px 30px;
         }
         #logo-alt {
         display: block;
         width: 180px;
         margin: 20px auto 0px;
         }
         #icon-accent {
         position: absolute;
         top: 50px;
         left: 30px;
         width: 80px;
         }
         #icon-est {
         position: absolute;
         top: 50px;
         right: 30px;
         width: 100px;
         }
         #header-left {
         float: left;
         }
         #header-right {
         float: right;
         margin-top: 20px;
         }
         #desktop-menu-alt {
         margin-top: 50px;
         text-align: center;
         }
         .desktop-menu {
         display: inline-block;
         margin: 0px 40px;
         letter-spacing: 5px;
         }
         #header-right > ul > li:last-of-type {
         margin-right: 0px;
         }
         #header {
         position: absolute;
         z-index: -1;
         top: 0px;
         left: 0px;
         width: 100%;
         height: 100px;
         background-color: rgba(255,255,255,1);
         transform: translate3d(0,0,0);
         transition: all 200ms ease-in-out;
         }
         #header.hide {
         position: fixed;
         transform: translate3d(0,-100px,0);
         transition: all 0ms ease-in-out;
         }
         #header.smaller {
         position: fixed;
         z-index: 2;
         background-color: rgba(255,255,255,1);
         box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.1);
         transform: translate3d(0,0,0);
         transition: all 200ms ease-in-out;
         }
         #header-wrapper {
         padding: 25px 30px;
         }
         .smaller #header-wrapper {
         opacity: 1;
         }
         #header-left {
         float: left;
         margin-top: -5px;
         }
         #header-right {
         float: right;
         margin-top: 20px;
         }
         #open-mobile-menu:before {
         background: #000;
         }
         #open-mobile-menu:after {
         border-top: 2px solid #000;
         border-bottom: 2px solid #000;
         }
         /* CONTENT PAGE */
         #container-page {
         max-width: 1230px;
         margin: auto;
         padding: 30px 30px 20px;
         }
         #header-contact {
         margin-bottom: 10px;
         padding: 10px 20px;
         text-align: center;
         background-color: #151515;
         }
         #header-contact h4 {
         font-size: 14px;
         font-weight: 700;
         color: #fff;
         }
         .gmap-container {
         position: relative;
         padding-bottom: 60%;
         }
         .gmap-container iframe {
         position: absolute;
         top: 0px;
         left: 0px;
         width: 100%;
         height: 100%;
         vertical-align: top;
         }
         @media screen and (min-width: 1201px) {
         #header {
         display: none;
         }
         #header.smaller {
         display: block;
         }
         #recaptcha{
         margin-left: 30%;
         }    
         }
         @media screen and (max-width: 1200px) {
         #header-alt {
         display: none;
         }
         #header {
         z-index: 2;
         background-color: rgba(255,255,255,1);
         box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.1);
         }
         #container-page {
         padding: 130px 30px 20px;
         }
         }
         @media screen and (max-width: 700px) {
         #header {
         height: 60px;
         }
         #header-wrapper {
         padding: 15px 20px;
         }
         #header-left {
         margin-top: 0px;
         }
         #logo, #logo-scroll {
         display: block;
         width: 150px;
         }
         #container-page {
         padding: 80px 20px 20px;
         }
         #pngdiv {
         padding: 0;
         top: 0;
         position: static!important;
         width: 100% !important;
         }
         .overlay-img .overlay-map {
         display: inline-table;
         }
         .overlay-img{
         display: none;
         }
         .overlay-map{
         width: 100% 
         }
         .overlay-map ul li {
         padding: 0px 7px 0px 8px!important;
         display:inline;
         padding-right: 5px;
         border-right: 2px solid #fff;
         font-weight: 200!important;
         font-size: 11px!important;
         }
         .active, .overlay-map ul li:active {
         border-right: 2px solid #666!important;
         }
         }
         @media screen and (min-width: 400px) {
         #recaptcha{
         margin-left: 30%;
         } 
         }
         #btn-submit{
         margin-left: 30%;
         }  
         #btn-submit, #btn-subs{
         font-weight: 700;
         background-color: #009ee3;
         cursor: pointer;
         padding: 15px 20px;
         color: #fff;
         border: none;
         outline: none;
         font-size: 12px;
         letter-spacing: 2.5px;
         } 
         .input-row label {
         position: relative!important;
         top: 10px;
         left: 0;
         }
         #form-newsletter-box .input-row input, #form-newsletter-box .submit-row input {
         width: 100%;
         margin-left: 0;
         }
         #map{
         position: relative;
         z-index: 1;
         }
         .gmap-wrapper{
         position: relative;
         }
         #pngdiv{
         padding: 15px 15px 15px;
         height: auto;
         display: block;
         position: absolute;
         width: 15%;
         top: 52px;
         z-index: 3;
         background-color: #009ee3;
         border-radius: 1px;
         box-shadow: 0 0 5px rgba(0,0,0,0.4);
         right: 0;
         }
         .overlay-img, #logo-map{
         text-align: center;
         padding: 10px;
         }
         .overlay-map ul li {
         text-align: center;
         padding: 5px 5px 4px 0px;
         }
         .overlay-map ul li {
         text-transform: uppercase;
         font-weight: 600;
         color :#fff;
         }
         .active, .overlay-map ul li:hover {
         color: #666!important;
         cursor: pointer;
         }
         .active, .overlay-map ul li:active {
         color: #666!important;
         cursor: pointer;
         }
         div.relative {
         position: relative;
         } 
         div.absolute {
         position: absolute;
         }  
		#form-contact-box, #office-info-box {
			font-size: 12px;
		}
      </style>
      <link rel="preload" href="https://fonts.googleapis.com/css?family=Open+Sans:100,400,700" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <link rel="preload" href="<?= FRONTEND_BASE_URL; ?>/css/style.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
         <link rel="stylesheet" href="<?= FRONTEND_BASE_URL; ?>/css/style.min.css">
      </noscript>
      <script>
         !function(t){"use strict";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement("link").relList.supports("preload")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){var e=t.media||"all";function a(){t.media=e}t.addEventListener?t.addEventListener("load",a):t.attachEvent&&t.attachEvent("onload",a),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(a,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName("link"),n=0;n<a.length;n++){var o=a[n];"preload"!==o.rel||"style"!==o.getAttribute("as")||o.getAttribute("data-loadcss")||(o.setAttribute("data-loadcss",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener("load",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent("onload",function(){e.poly(),t.clearInterval(a)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}("undefined"!=typeof global?global:this);
      </script>
      <script type="text/javascript" src="<?= FRONTEND_BASE_URL; ?>/js/scriptContact.min.js" defer></script>
      <script>
         function initMap(title,lati,longi,img,addr,phem) {
            if (title != null || lati != null || longi != null){
               var latitude=parseFloat(lati);
               var longitude=parseFloat(longi);
               var center = {lat: latitude, lng: longitude};
               var zoom=6;
               var locations = [
                    ['PANOMATIC ' +title, latitude, longitude,img,addr,phem,''] 
                    ];
             
            }
            else {
            var center = {lat: 29.115150, lng: 94.765202};
           
            var zoom=2;
             var locations = [
               <?php foreach ($ListContact as $lp) {?>
                    ['PANOMATIC <?= strtoupper(contentValue($lp, 'title'));?>',   <?=contentValue($lp, 'latitude');?>, <?=contentValue($lp, 'longitude');?>,'<?=contentValue($lp, 'images');?>','<?=contentValue($lp, 'address');?>','<?=contentValue($lp, 'phone_email');?>',<?=$lp['row_id'];?>],         
                 <?php  } ?>
                    ];
             }
          
             loadMap(center,zoom,locations);
         }
           
         function setMap(item) {
            $("ul#myDIV > li").removeClass("active");
             var id= $(item).attr("data-id");
             var title= $(item).attr("data-title");
             var lati= $(item).attr("data-lat");
             var longi= $(item).attr("data-long");
             var img= $(item).attr("data-img");
             var addr= $(item).attr("data-addr");
             var phem= $(item).attr("data-pe");
            $("#img-title").attr("src",img);
            $('#title-loc').text('PANOMATIC '+title);
            $('#addr-loc').text(addr);
            $('#pe-loc').text(phem);
            
            document.getElementById("linkbtn"+id).className = "active";            
            initMap(title,lati,longi,img,addr,phem);                   
         }
         
              
         
         function loadMap(center,zoom,locations) {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: zoom,
             center: center
           });
           
         var infowindow =  new google.maps.InfoWindow({});
         var marker, count;
         var image = '<?=IMAGES_BASE_URL?>/location.png';
         
         for (count = 0; count < locations.length; count++) {
              var images =locations[count][3];
                 var title =locations[count][0];
                 var address =locations[count][4];
                 var phone_email =locations[count][5];
                 var id =locations[count][6];
              var contentString = '<div id="office-info-box">\n\
                                 <div class="map-img">\n\
                                 <img class="" src="'+images+'" width="300" height="150">\n\
                                 </div>\n\
                                 <div class="map-desc">\n\
                                 <p class="hotel-content-info"><b>'+address+'</b></p>\n\
                                 </div>\n\
                                 </div>';    
                 
             infowindow = new google.maps.InfoWindow({
                    content: contentString
                  });    
             marker = new google.maps.Marker({
               position: new google.maps.LatLng(locations[count][1], locations[count][2]),
               map: map,
               icon: image,
               title: locations[count][0]
               
             });
           // infowindow.open(map, marker);    
             
         google.maps.event.addListener(marker, 'click', (function (marker, count) {
               return function () {
                map.setZoom(15);
                map.setCenter(marker.getPosition());
               
                 $("ul#myDIV > li").removeClass("active");
                
                 
                 infowindow.setContent(contentString);
                 infowindow.open(map, marker);
                 $("#img-title").attr("src",images);
                 $('#title-loc').text(title);
                 $('#addr-loc').text(address);
                 $('#pe-loc').text(phone_email);
                 document.getElementById("linkbtn"+id).className = "active"; 
                 
               }
             })(marker, count));
            
           }}
         
              
             
      </script>
   </head>
   <body id="product-detail">
      <?php include 'include/vheadercontent.php';?>
      <div id="container-page">
         <div id="header-contact">
            <h4>GET IN TOUCH WITH PANOMATICS - OUR GLOBAL OFFICES</h4>
         </div>
         <div id="gmap-wrapper" class="relative">
            <div id="map" class="embed-container gmap-container">
            </div>
            <div id="pngdiv" class="absolute">
               <div class="overlay-img">
                  <img id="logo-map" src="<?= IMAGES_BASE_URL; ?>/logo-map.png" alt="" />
               </div>
               <div class="overlay-map">
                  <ul id="myDIV">
                     <?php foreach ($ListContact as $lp) {?>
					 
                     <li class="btn"  id="linkbtn<?=$lp['row_id'];?>" data-id="<?=$lp['row_id'];?>" data-title="<?= strtoupper(contentValue($lp, 'title'));?>" data-lat="<?=contentValue($lp, 'latitude');?>" data-long="<?=contentValue($lp, 'longitude');?>" data-img="<?=contentValue($lp, 'images');?>" data-addr="<?=contentValue($lp, 'address');?>"  data-pe="<?=contentValue($lp, 'phone_email');?>" onclick="setMap(this);"> <a href="#office-info-box"><?=contentValue($lp, 'title');?></a></li>
                    
					 <?php  } ?>
                  </ul>
               </div>
            </div>
         </div>
         <div id="office-info-box">
            <p id="title-loc" class="title-office-info">PANOMATICSVR THAILAND</p>
            <div id="img-title-office" class="img-load lazy-load" src-url="">
               <img id="img-title" src="<?= IMAGES_BASE_URL; ?>/img-title-vr-thailand.jpg" alt="" />
            </div>
            <p id="addr-loc" style="font-weight:700">1112/25 SUKHUMVIT ROAD, PHRAKANONG, KLONG TOEY, BANGKOK, THAILAND</p>
            <p id="pe-loc" style="font-weight:700">PHONE: +66 (0) 85 111 98 89, +66 (0) 2006 50 85, EMAIL: INFO@PANOMATICSVR.COM</p>
         </div>
         <div id="form-contact-box">
            <form id="form-contact">
               <h6>QUICK MESSAGE</h6>
               <div class="input-row">
                  <label>NAME*</label>
                  <input type="text" name="contact_name" />
               </div>
               <div class="input-row">
                  <label>COUNTRY*</label>
                  <select id="select-country" name="contact_country" required>
                     <option value="" disabled selected>PLEASE SELECT...</option>
                     <?php foreach ($getCountry as $gC) {?>
                     <option value="<?= $gC['country_name']?>"><?= strtoupper($gC['country_name'])?></option>
                     <?php } ?>
                  </select>
               </div>
               <div class="input-row">
                  <label>EMAIL*</label>
                  <input type="email" name="contact_email" />
               </div>
               <div class="input-row">
                  <label>PHONE</label>
                  <input type="number" name="contact_phone" />
               </div>
               <div class="input-row">
                  <label>MESSAGE</label>
                  <textarea name="contact_message"></textarea>
               </div>
               <div class="input-row">
                  <br/>
                  <div id="recaptcha"style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                  <span id='captcha_error' style='color:red;'></span>
               </div>
               <div class="submit-row">
                  <button id="btn-submit" type="submit" onclick="myFunctionFORM()"> SUBMIT</button>
               </div>
            </form>
            <div id="form-newsletter-box">
               <h6>YOU'VE GOT MAIL</h6>
               <p>TO STAY IN THE LOOP AND RECEIVE THE LATEST NEWS ABOUT PANOMATICS STRAIGHT TO YOUR MAILBOX SIGN UP FOR OUR MONTHLY NEWSLETTER</p>
               <form id="form-newsletter">
                  <div class="input-row">
                     <input type="email" id="subs_email" name="subs_email" /><br/>
                  </div>
                  <div class="submit-row">
                     <button id="btn-subs" type="submit" onclick="myFunctionSUBS()"> SUBMIT</button>
                  </div>
               </form>
               <label id="notife_subs"></label>
            </div>
         </div>
      </div>
      <div class="border-wrapper">
         <div class="border bg-load lazy-load" src-url="img/dot.jpg"></div>
      </div>
      <?php include 'include/vfooter.php';?>
      <script src="<?php echo FRONTEND_BASE_URL?>/js/jquery.validate.min.js"></script>
      <script src="<?php echo FRONTEND_BASE_URL; ?>/js/scriptForm.js"></script>
      <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
      <script>
         var recaptcha1;
         var myCallBack = function() {
          	recaptcha1 = grecaptcha.render('recaptcha', {
            		'sitekey' : '<?php echo SITE_KEY;?>', //Replace this with your Site key
            		'theme' : 'light'
          	});
          
          
         };
      </script>
      <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB12glmaL3PIuSDyqo_7U6Wg8wJIGPypx0&callback=initMap"></script>
      <script>
         'use strict';
         
         // Lazyload function
         window.app=window.app||{},app.lazyLoadState=app.lazyLoadState||{},app.lazyLoad=function(e){"use strict";e.type||(app.lazyLoadState=!1),app.lazyLoadState||(app.lazyLoadState=!0,requestAnimationFrame(function(){if(e.selector)var t=e.selector;else t="."+e.classEl;var a=document.querySelectorAll(t),l=a.length;if(l>0){for(var o=0;o<l;o++){if("init"===e.type)var i=a[o].getBoundingClientRect();else i={top:0};var p=a[o].getAttribute(e.attrName);if(p&&i.top<window.innerHeight){if(a[o].classList.contains("bg-load"))a[o].style.backgroundImage="url('"+p+"')";else if(a[o].classList.contains("img-load")){var r=a[o].getAttribute("alt"),n=document.createElement("IMG");n.src=p,r?(n.alt=r,a[o].removeAttribute("alt")):n.alt="",a[o].appendChild(n)}else a[o].src=p;a[o].classList.remove(e.classEl),a[o].removeAttribute(e.attrName)}}app.lazyLoadState=!1}else app.lazyLoadState="done","init"===e.type&&(window.removeEventListener("scroll",app.pageLoad),delete app.pageLoad)}))};
         
         window.addEventListener('load', function () {
         // Set LazyLoad for initial page load
         app.pageLoad = function () {
         app.lazyLoad({
         selector: '.active .current .img-async',
         attrName: 'src-url'
         });
         //resizeHeaderOnScroll();
         };
         
         app.lazyLoadState = false;
             // Call LazyLoad for initial page load
         app.pageLoad();
             window.addEventListener('scroll', app.pageLoad);
             app.lazyLoad({
                 classEl	: 'lazy-load',
                 attrName: 'src-url'
             });
         // Create mobile menu
         app.mobileMenu = app.popup({
         idPopup			: 'mobile-menu',
         buttonsOpen 	: '#open-mobile-menu',
         idButtonClose 	: 'close-mobile-menu',
         bgPopup			: '.bg-popup-wrapper'
         });
         }, false);
      </script>
   </body>
</html>