<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Panomatics | Virtual Reality Solutions</title>
      <meta property="og:title" content="Panomatics | Virtual Reality Solutions">
      <meta name="description" content="Welcome to Panomatics website">
      <meta property="og:description" content="Welcome to Panomatics website">
      <meta property="og:image" content="<?= IMAGES_BASE_URL; ?>/logo.png">
      <meta name="keywords" content="beach republic, koh samui, hotel, tourism, thailand, asia">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="preload" href="<?= FRONTEND_BASE_URL; ?>/js/script.min.js" as="script" />
      <link rel="preload" href="<?= IMAGES_BASE_URL; ?>/logo.png" as="image" />
      <link rel="shortcut icon" href="<?= IMAGES_BASE_URL; ?>/favicon.png" type="image/x-icon">
    
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
         #header {
         position: absolute;
         z-index: 2;
         top: 0px;
         left: 0px;
         width: 100%;
         height: 100px;
         background-color: rgba(255,255,255,0);
         transform: translate3d(0,0,0);
         transition: all 200ms ease-in-out;
         }
         #header.hide {
         position: fixed;
         transform: translate3d(0,-100px,0);
         transition: all 0ms ease-in-out;
         }
         #header.smaller {
         background-color: rgba(255,255,255,1);
         box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.1);
         transform: translate3d(0,0,0);
         transition: all 200ms ease-in-out;
         }
         #header-wrapper {
         padding: 25px 30px;
         }
         #header-left {
         float: left;
         margin-top: -5px;
         }
         #header-right {
         float: right;
         margin-top: 20px;
         }
         .desktop-menu {
         display: inline-block;
         margin: 0px 40px;
         letter-spacing: 5px;
         color: #fff;
         text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
         }
         .smaller .desktop-menu {
         color: #000;
         text-shadow: none;
         }
         #header-right > ul > li:last-of-type {
         margin-right: 0px;
         }
         #logo-scroll {
         display: none;
         }
         .smaller #logo {
         display: none;
         }
         .smaller #logo-scroll {
         display: block;
         }
         #open-mobile-menu:before {
         background: #fff;
         }
         #open-mobile-menu:after {
         border-top: 2px solid #fff;
         border-bottom: 2px solid #fff;
         }
         .smaller #open-mobile-menu:before {
         background: #000;
         }
         .smaller #open-mobile-menu:after {
         border-top: 2px solid #000;
         border-bottom: 2px solid #000;
         }
         /* CONTENT PAGE */
         #main-image-banner {
             position: relative;
         padding-bottom: 40%;
         background-size: cover;
         background-position: center center;
         }
         #socmed-wrapper {
		 display:none;
         position: fixed;
         top: 220px;
         left: 0px;
         z-index: 333;
         }
         .socmed {
         display: block;
         width: 50px;
         margin: 20px 0px;
         padding: 10px;
         background-color: #17bcef;
         border-top-right-radius: 5px;
         border-bottom-right-radius: 5px;
         opacity: 1;
         transition: opacity 200ms ease-in-out;
         cursor: pointer;
         }
         .socmed:hover {
         opacity: 0.8;
         }
         .socmed-icon {
         padding-bottom: 100%;
         background-size: cover;
         background-position: center center;
         }
         #page-content {
         max-width: 1230px;
         margin: auto;
         padding: 50px 15px;
         }
         #custom-select-wrapper {
         margin-bottom: 20px;
         padding: 0px 5px;
         font-size: 0px;
         }
         #custom-select-wrapper .custom-select {
         display: inline-block;
         vertical-align: top;
         width: 33%;
         padding: 0px 10px;
         font-size: 14px;
         }
         @media screen and (max-width: 1200px) {
         #socmed-wrapper {
         top: 150px;
         }
         }
         @media screen and (max-width: 900px) {
         #custom-select-wrapper .custom-select {
         width: 50%;
         margin-bottom: 20px;
         }
         #socmed-wrapper {
         top: 120px;
         }
         .socmed {
         width: 40px;
         margin: 10px 0px;
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
         width: 150px;
         }
         #logo {
         display: block;
         }
         .smaller #logo-scroll {
         display: block;
         }
         #socmed-wrapper {
         top: 100px;
         }
         .socmed {
         width: 30px;
         padding: 5px;
         }
         #main-image-banner {
         padding-bottom: 75%;
         }
         #custom-select-wrapper .custom-select {
         width: 100%;
         padding: 0px;
         }
         #page-content {
         padding: 20px 15px;
         }
         }
         * {
         margin: 0; padding: 0;
         }
         #containers {
         overflow: hidden;
         height: 400px;
         background: #edeae8;
         position: relative;
         }
         @media screen and (max-width: 900px) {
         video {
         display: none;
         } 
         }
         iframe {
         min-width: 100%;
         min-height: 100%;
         width: auto;
         height: auto;
         z-index: 0;
         transform: translateX(0%) translateY(-4%)!important;
         position: absolute;
         width: 100%;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         }
         @media only screen and (max-width: 1002px) {
        iframe {
         width: auto;
         height: auto;
        }

         }
         @media only screen and (max-width: 480px){
        iframe {
          width: auto;
         height: auto;
        }   
         }
       
         
         .text-muted{
          
            color: #ccc!important;
        }
       
        .hidden {
          display: none !important;
        }
		#load-more{
			pointer-events: none;
		}
        .clearfix{
           
            width: 100%!important;
            margin: auto!important;        
    }
      </style>
      <link rel="preload" href="https://fonts.googleapis.com/css?family=Open+Sans:100,400,700" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <link rel="preload" href="<?= FRONTEND_BASE_URL; ?>/css/style.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <link rel="stylesheet" type="text/css" href="<?= FRONTEND_BASE_URL; ?>/css/cubeportfolio.css">
      <noscript>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
         <link rel="stylesheet" href="<?= FRONTEND_BASE_URL; ?>/css/style.min.css">
         <link rel="stylesheet" type="text/css" href="<?= FRONTEND_BASE_URL; ?>/css/cubeportfolio.css">
      </noscript>
      <script>
         !function(t){"use strict";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement("link").relList.supports("preload")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){var e=t.media||"all";function a(){t.media=e}t.addEventListener?t.addEventListener("load",a):t.attachEvent&&t.attachEvent("onload",a),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(a,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName("link"),n=0;n<a.length;n++){var o=a[n];"preload"!==o.rel||"style"!==o.getAttribute("as")||o.getAttribute("data-loadcss")||(o.setAttribute("data-loadcss",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener("load",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent("onload",function(){e.poly(),t.clearInterval(a)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}("undefined"!=typeof global?global:this);
      </script>
      <script type="text/javascript" src="<?= FRONTEND_BASE_URL; ?>/js/script.min.js" defer></script>
   </head>
   <body id="home">
      <?php include 'include/vheader.php';?>
      
      <div id="container">
          <?php
                if($countBanner > 0){
                $i=0;
                foreach($ListBanner as $content){
                        $i++;
                ?>   
         <div id="image-wrapper">
            <div id="main-image-banner" class="bg-load lazy-load">
               <div id="container">
                <div class="embed-container vr-container">
                   <iframe src="" class="lazy-load" src-url="<?= html_entity_decode(contentValue($content, 'iframe'));?>" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
               </div>
            </div>
         </div>
          <?php  } } ?>
         <div id="socmed-wrapper">
            <a id="youtube" class="socmed" href="https://www.youtube.com/channel/UCXhcpj-xChLZr8Y_xemEHIw" target="_blank" rel="noopener">
               <div class="socmed-icon bg-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/youtube.png"></div>
            </a>
            <a id="facebook" class="socmed" href="https://www.facebook.com/PanomaticsInternational" target="_blank" rel="noopener">
               <div class="socmed-icon bg-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/facebook.png"></div>
            </a>
            <a id="linkedin" class="socmed" href="https://www.linkedin.com/company/panomatics/" target="_blank" rel="noopener">
               <div class="socmed-icon bg-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/linkedin.png"></div>
            </a>
            <a id="instagram" class="socmed" href="https://www.instagram.com/panomatics360/" target="_blank" rel="noopener">
               <div class="socmed-icon bg-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/instagram.png"></div>
            </a>
         </div>
      </div>
       <section class="clearfix" id="porto">
       <?php $i= 0; foreach($ListLabel as $label){ $i++; ?>
         <div id="js-filters-lightbox-gallery<?=$i;?>" class="cbp-l-filters-dropdown cbp-l-filters-dropdown-floated">
            <div class="cbp-l-filters-dropdownWrap">
               <div class="cbp-l-filters-dropdownHeader"><?php if ($i ==1 ){ echo 'PRODUCTS:'; } else if ($i ==2 ){ echo 'LOCATION:';} else { echo 'BUSINESS TYPE:';}?></div>
               <div class="cbp-l-filters-dropdownList">
                  <div data-filter="*" class="data-refresh-reset cbp-filter-item-active cbp-filter-item">ALL</div>
                <?php $x= 0; foreach ($label['options'] as $opt) { 
                    if(isset($CheckIn) && !empty($filter)){
                          $count = 0;
                          foreach ( $CheckIn as $child ){
                              if ( $child['content_text'] == $opt['options_id']  && $child['label_id'] == $label['label_id'] && !in_array($label['label_name'], $filter, TRUE)){
                                  $count++;
                              }
                          }
                          if ($count != 0 ) {
                            $addclass = 'data-refresh-second';
                              $counts= '['.$count.']';
                          }
                          else {
                            $addclass = 'text-muted';
                             $counts= '';
                          }
                      }
                      else {
                           $addclass = '';
                           $counts= '';
                      }
                      ?>
                  
                  <div id="filter-<?=generateIdTxt($opt['options_title'])?>" data-filter=".<?=generateIdTxt($opt['options_title'])?>" data-href="#" data-type="<?=$label['label_name']?>" data-value="<?=generateIdTxt($opt['options_title'])?>" class="cbp-filter-item data-refresh <?=$addclass;?>"><?=$opt['options_title']?></div>
                  <?php   } ?>
               </div>
            </div>
         </div>
         <?php   } ?>
         <input type="hidden" name="where_in" id="where_in" value="<?=$wherein?>">
         <input type="hidden" name="product" id="selected_product" value="<?=$product?>">
         <input type="hidden" name="location" id="selected_location" value="<?=$location?>">
         <input type="hidden" name="business" id="selected_business" value="<?=$business?>">
        </section>
     
      <div id="page-content">
         <div id="content-select-wrapper">
            <div id="content-select-1" class="gallery-category active">
               <div id="photo-ocean-club" class="gallery-subcategory current">
                  <?php
                     if($countProduct > 0){
                     $i=0;
                     foreach($ListProduct as $pr){
                             $i++;
                     ?>   
                  <?php $visibility = contentValue($pr, 'visibility');
                     if($visibility != 'Public' && $agent_id == ''){
                         $onclick = 'onClick="openPopupLogin('.$pr['row_id'].')"';
                         $ref = '#';
                     } 
                     else {
                        $onclick='';
                        if ($pr['row_alias'] !=''){
                          $ref =BASE_URL.'/'.$pr['row_alias'];  
                        }
                        else {
                          $ref = BASE_URL.'/project/detail/'.$pr['row_id']; 
                        }
                        
                     }
                     ?>
                  <div class="col-25" <?=$onclick?> >
                     <a href="<?=$ref;?>" class="gallery-logo bg-load img-async" src-url="<?=contentValue($pr, 'client_icon');?>"></a>
                     <a href="<?=$ref;?>" class="gallery-thumb bg-load img-async" src-url="<?=contentValue($pr, 'product_image');?>"></a>
                     <a href="<?=$ref;?>" class="hotel-info">
                        <p class="hotel-name"><?=contentValue($pr, 'project_title');?></p>
                        <p class="hotel-content-info"><?=contentValue($pr, 'product');?> - <?=contentValue($pr, 'location');?></p>
                     </a>
                  </div>
                  <?php  } } ?>   
               </div>
               <div id="photo-ocean-club2" class="gallery-subcategory current">
               </div>
            </div>
         </div>
          <div class="container" id="load-more-container">
            <div style="margin:0 auto; width:15vw; border:0px solid black; text-align:center; ">
               <a href="" id="load-more" data-limit="4" data-curpage="2" data-total="<?=$totalProduct?>" data-pages="products=ANY|location=ANY|business=ANY" style="display:block; padding:15px 20px; font: 400 12px/1.38 'novecento_sans_widemedium'; text-align: center;  letter-spacing: 4px; color: rgb(0, 0, 0);">
               LOAD MORE
               <br>
               <br>
               [1/<?=$totalProduct?>]
               </a>
            </div>
         </div>
         <div class="border bg-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/dot.jpg"></div>
         <div id="our-client">
            <h4 class="title-section">OUR CLIENTS</h4>
            <div id="logo-client">
               <?php
                  if($countClient > 0){
                  $i=0;
                  foreach($ListClient as $cl){
                          $i++;
                  ?>   
               <div class="col-16">
                  <div class="logo-client-img bg-load lazy-load" src-url="<?=contentValue($cl, 'images');?>"></div>
               </div>
               <?php  } } ?>
            </div>
         </div>
      </div>
        <div id="js-grid-lightbox-gallery">
      </div>
      <input id="animationType" type="hidden" value="rotateSides" />
      <input id="displayType" type="hidden" value="fadeInToTop" />
      <?php include 'include/vfooter.php';?>
      <div id="pop-up-wrapper">
      </div>
       <script type="text/javascript" src="<?= FRONTEND_BASE_URL; ?>/js/jquery.cubeportfolio.min.js"></script>
      <script type="text/javascript" src="<?= FRONTEND_BASE_URL; ?>/js/cbphome.js"></script>
      <script>
         'use strict';
         
         // Lazyload function
         window.app=window.app||{},app.lazyLoadState=app.lazyLoadState||{},app.lazyLoad=function(e){"use strict";e.type||(app.lazyLoadState=!1),app.lazyLoadState||(app.lazyLoadState=!0,requestAnimationFrame(function(){if(e.selector)var t=e.selector;else t="."+e.classEl;var a=document.querySelectorAll(t),l=a.length;if(l>0){for(var o=0;o<l;o++){if("init"===e.type)var i=a[o].getBoundingClientRect();else i={top:0};var p=a[o].getAttribute(e.attrName);if(p&&i.top<window.innerHeight){if(a[o].classList.contains("bg-load"))a[o].style.backgroundImage="url('"+p+"')";else if(a[o].classList.contains("img-load")){var r=a[o].getAttribute("alt"),n=document.createElement("IMG");n.src=p,r?(n.alt=r,a[o].removeAttribute("alt")):n.alt="",a[o].appendChild(n)}else a[o].src=p;a[o].classList.remove(e.classEl),a[o].removeAttribute(e.attrName)}}app.lazyLoadState=!1}else app.lazyLoadState="done","init"===e.type&&(window.removeEventListener("scroll",app.pageLoad),delete app.pageLoad)}))};
         
         window.addEventListener('load', function () {
         // Set LazyLoad for initial page load
         app.pageLoad = function () {
         app.lazyLoad({
         selector: '.active .current .img-async',
         attrName: 'src-url',
         type	: 'init'
         });
         resizeHeaderOnScroll();
         };
         
         app.lazyLoadState = false;
             /* setTimeout(openPopupLogin, 2000);
             setTimeout(loginSuccess, 3000);
             setTimeout(loginError, 4000);
             setTimeout(closePopupLogin, 5000);
             setTimeout(openPopupRegister, 7000);
             setTimeout(registerSuccess, 8000);
             setTimeout(registerError, 9000);
             setTimeout(closePopupRegister, 10000); */
         
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