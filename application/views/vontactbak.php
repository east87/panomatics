<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page - Panomatics | Virtual Reality Solutions</title>
    <meta property="og:title" content="Panomatics | Virtual Reality Solutions">
    <meta name="description" content="Welcome to Panomatics website">
    <meta property="og:description" content="Welcome to Panomatics website">
    <meta property="og:image" content="<?= IMAGES_BASE_URL; ?>/logo.png">
    <meta name="keywords" content="beach republic, koh samui, hotel, tourism, thailand, asia">
    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preload" href="<?= FRONTEND_BASE_URL; ?>/js/script.min.js" as="script" />
    <link rel="preload" href="<?= IMAGES_BASE_URL; ?>/logo-white.png" as="image" />
    <link rel="preload" href="<?= IMAGES_BASE_URL; ?>/icon-est.png" as="image" />
    <link rel="shortcut icon" href="<?= IMAGES_BASE_URL; ?>/favicon.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        dl,h1,h2,h3,h4,h5,h6,ol,ul{margin-top:0;margin-bottom:0}button,iframe,img{border:0}blockquote,button{margin:0;padding:0}html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:1}li,main{display:block}ol,ul{padding-left:0}dd{margin-left:0}h1,h2,h3,h4,h5,h6{font-size:inherit}figure,p{margin:0}sup{position:relative;top:-.5em;vertical-align:baseline;font-size:75%;line-height:0}strong{font-weight:700}img{max-width:100%;height:auto;vertical-align:middle}a{text-decoration:none;color:inherit}button{text-align:inherit;text-transform:inherit;font:inherit;-webkit-font-smoothing:inherit;letter-spacing:inherit;background:0 0;cursor:pointer;overflow:visible}::-moz-focus-inner{border:0;padding:0}*{box-sizing:border-box}
        body {
            font-family: 'Open Sans', sans-serif;
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
			margin-top: 5px;
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
		}
                 #map {
        height: 100%;
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

    <script type="text/javascript" src="<?= FRONTEND_BASE_URL; ?>/js/script.min.js" defer></script>
</head>

<body id="product-detail">
    <?php include 'include/vheadercontent.php';?>
    <div id="container-page">
        <div id="header-contact">
            <h4>GET IN TOUCH WITH PANOMATICS - OUR GLOBAL OFFICES</h4>
        </div>
        <div id="gmap-wrapper">
            <div class="embed-container gmap-container">
                <div id="map"></div>
            </div>
        </div>
        <div id="office-info-box">
            <p class="title-office-info">PANOMATICSVR THAILAND</p>
            <div id="img-title-office" class="img-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/img-title-vr-thailand.jpg"></div>
            <p style="font-weight:700">1112/25 SUKHUMVIT ROAD, PHRAKANONG, KLONG TOEY, BANGKOK, THAILAND</p>
            <p style="font-weight:700">PHONE: +66 (0) 85 111 98 89, +66 (0) 2006 50 85, EMAIL: INFO@PANOMATICSVR.COM</p>
        </div>
        <div id="form-contact-box">
            <form id="form-contact">
                <h6>QUICK MESSAGE</h6>
                <div class="input-row">
                    <label>NAME*</label>
                    <input type="text" name="name" />
                </div>
                <div class="input-row">
                    <label>COUNTRY*</label>
                    <select id="select-country" name="country" required>
                        <option value="" disabled selected>PLEASE SELECT...</option>
                        <option value="INDONESIA">INDONESIA</option>
                        <option value="SINGAPORE">SINGAPORE</option>
                    </select>
                </div>
                <div class="input-row">
                    <label>EMAIL*</label>
                    <input type="email" name="email" />
                </div>
                <div class="input-row">
                    <label>PHONE</label>
                    <input type="number" name="phone" />
                </div>
                <div class="input-row">
                    <label>MESSAGE</label>
                    <textarea name="message"></textarea>
                </div>
                <div class="submit-row">
                    <input type="submit" value="SUBMIT" />
                </div>
            </form>
            <div id="form-newsletter-box">
                <h6>YOU'VE GOT MAIL</h6>
                <p>TO STAY IN THE LOOP AND RECEIVE THE LATEST NEWS ABOUT PANOMATICS STRAIGHT TO YOUR MAILBOX SIGN UP FOR OUR MONTHLY NEWSLETTER</p>
                <form id="form-newsletter">
                    <div class="input-row">
                        <input type="email" name="email" />
                    </div>
                    <div class="submit-row">
                        <input type="submit" value="SUBMIT" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="border-wrapper">
        <div class="border bg-load lazy-load" src-url="img/dot.jpg"></div>
    </div>
    
    <?php include 'include/vfooter.php';?>
<script>
function initMap() {
  var center = {lat: 12.221835, lng: 101.140498};
  var locations = [
    ['Philz Coffee<br>801 S Hope St A, Los Angeles, CA 90017<br>\<a href="https://goo.gl/maps/L8ETMBt7cRA2">Get Directions</a>',   34.046438, -118.259653],
    ['Philz Coffee<br>525 Santa Monica Blvd, Santa Monica, CA 90401<br><a href="https://goo.gl/maps/PY1abQhuW9C2">Get Directions</a>', 34.017951, -118.493567],
    ['Philz Coffee<br>146 South Lake Avenue #106, At Shoppers Lane, Pasadena, CA 91101<br><a href="https://goo.gl/maps/eUmyNuMyYNN2">Get Directions</a>', 34.143073, -118.132040],
    ['Philz Coffee<br>21016 Pacific Coast Hwy, Huntington Beach, CA 92648<br><a href="https://goo.gl/maps/Cp2TZoeGCXw">Get Directions</a>', 33.655199, -117.998640],
    ['Philz Coffee<br>252 S Brand Blvd, Glendale, CA 91204<br><a href="https://goo.gl/maps/WDr2ef3ccVz">Get Directions</a>', 34.142823, -118.254569],
  ];
var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: center
  });
var infowindow =  new google.maps.InfoWindow({});
var marker, count;
for (count = 0; count < locations.length; count++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[count][1], locations[count][2]),
      map: map,
      title: locations[count][0]
    });
google.maps.event.addListener(marker, 'click', (function (marker, count) {
      return function () {
        infowindow.setContent(locations[count][0]);
        infowindow.open(map, marker);
      }
    })(marker, count));
  }
}
     
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB12glmaL3PIuSDyqo_7U6Wg8wJIGPypx0&callback=initMap">
    </script>
    
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