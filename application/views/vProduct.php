<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="msvalidate.01" content="FA0D073B12840F6BD580F94FF4C4A733" />
    <title>Our Products & Services - Panomatics | Virtual Reality Solutions</title>
    <meta property="og:title" content="Our Products & Services - Panomatics | Virtual Reality Solutions">
 <meta name="description" content="Panomatics is a new award winning media agency with offices in, but not limited to London, California, Bangkok, Bali, Singapore, Malaysia, Germany & Ibiza.">
	<meta property="og:description" content="virtual tours, 360 virtual reality, video, google tours, photography, web design, aerial">
	<meta name="keywords" content="virtual tours, 360 virtual reality, video, google tours, photography, web design, aerial, restaurants, bars, shops,factories,properties, hospitality, hotels, educations, galleries, trade fairs">     
	<meta property="og:image" content="<?= IMAGES_BASE_URL; ?>/logo.png">
  
    <link rel="preload" href="<?= FRONTEND_BASE_URL; ?>/js/script.min.js" as="script" />
    <link rel="preload" href="<?= IMAGES_BASE_URL; ?>/logo-white.png" as="image" />
    <link rel="preload" href="<?= IMAGES_BASE_URL; ?>/icon-est.png" as="image" />
    <link rel="shortcut icon" href="<?= IMAGES_BASE_URL; ?>/favicon.png" type="image/x-icon">
	  <?php include 'include/analytics.php';?>
      <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
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
        .embed-container iframe {
            width: 100%;
			vertical-align: top;
        }
        #main-image-banner {
            padding-bottom: 50%;
            background-size: cover;
            background-position: center center;
        }
        #socmed-wrapper {
            position: absolute;
            top: 300px;
            left: 0px;
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
            padding: 50px;
        }
        #custom-select-wrapper {
            margin-bottom: 20px;
            padding: 0px 20px;
            font-size: 0px;
        }
        #custom-select-wrapper .custom-select {
            display: inline-block;
            width: 20%;
            padding: 0px 10px;
            font-size: 14px;
        }
		
		
		
		
		#header-products {
			margin-bottom: 10px;
			padding: 10px 20px;
			text-align: center;
			background-color: #151515;
		}
		#header-products h4 {
			font-size: 14px;
			font-weight: 700;
			color: #fff;
		}
		.border-wrapper.border-inside {
			padding: 0px;
		}
		.border-wrapper.border-inside .border {
			margin: 20px auto;
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
			#socmed-wrapper {
				top: 100px;
			}
			.socmed {
				width: 30px;
				padding: 5px;
			}
			#main-image-banner {
				padding-bottom: 100%;
			}
			#custom-select-wrapper .custom-select {
				width: 100%;
				padding: 0px;
			}
			#page-content {
				padding: 20px 15px;
			}
			#container-page {
				padding: 80px 20px 20px;
			}
		}
                #about-product-content {
                font-family: 'Didact Gothic', sans-serif;
               
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

<body id="products">
 <?php include 'include/tagmanager.php';?>
   <?php include 'include/vheadercontent.php';?>
    <div id="container-page">
        <div id="header-products">
            <h4>PANOMATICS PRODUCTS AND SERVICES</h4>
        </div>
        <div class="border-wrapper border-inside">
            <div class="border bg-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/dot.jpg"></div>
        </div>
        <div id="product-thumbs-wrapper">
            <?php
                if($countContent > 0){
                $i=0;
                foreach($ListContent as $content){
                        $i++;
                ?>   
            
                <div class="col-33">
                <div class="product-thumb-box">
                    <h4 class="product-thumb-title"><?= strtoupper(html_entity_decode(contentValue($content, 'title')));?></h4>
                    <div class="product-thumb-img information">
                        <div class="img-pano img-load lazy-load" src-url="<?=contentValue($content, 'images');?>" alt="tes image"></div>
                        <a href="#product<?=$i?>" class="button-service-item">LEARN MORE ABOUT OUR <?= strtoupper(html_entity_decode(contentValue($content, 'title')));?></a>
                    </div>
                </div>
            </div>
            
             <?php  } } ?>
            
          
        </div>
        <div id="list-menu" class="info-products">
             <?php
                if($countContent > 0){
                $i=0;
                foreach($ListContent as $content){
                        $i++;
                ?>   
            
            <div class="menu-content <?php if($i==1) {  echo 'current';} ?>" id="product<?=$i?>">
                <div class="about-product">
                    <div id="about-product-title-wrapper">
                        <div class="logo-icon img-load lazy-load" src-url="<?= contentValue($content, 'icon');?>"></div>
                        <h4 id="about-product-title"><?= strtoupper(html_entity_decode(contentValue($content, 'title')));?></h4>
                    </div>
                    <div id="about-product-content">
                        <div class="img-pano-content img-load lazy-load" src-url="<?= contentValue($content, 'imagesdesc');?>" alt="<?= contentValue($content, 'title');?>"></div>
                        <p>
                            <?= html_entity_decode(contentValue($content, 'desc'));?>
                        </p>
                    </div>
                </div>
            </div>
             <?php  } } ?>
           
        </div>
    </div>
    <div class="border-wrapper">
        <div class="border bg-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/dot.jpg"></div>
    </div>
    
     <?php include 'include/vfooter.php';?>

     <script>
        'use strict';

        // Lazyload function
        window.app=window.app||{},app.lazyLoadState=app.lazyLoadState||{},app.lazyLoad=function(e){"use strict";e.type||(app.lazyLoadState=!1),app.lazyLoadState||(app.lazyLoadState=!0,requestAnimationFrame(function(){if(e.selector)var t=e.selector;else t="."+e.classEl;var a=document.querySelectorAll(t),l=a.length;if(l>0){for(var o=0;o<l;o++){if("init"===e.type)var i=a[o].getBoundingClientRect();else i={top:0};var p=a[o].getAttribute(e.attrName);if(p&&i.top<window.innerHeight){if(a[o].classList.contains("bg-load"))a[o].style.backgroundImage="url('"+p+"')";else if(a[o].classList.contains("img-load")){var r=a[o].getAttribute("alt"),n=document.createElement("IMG");n.src=p,r?(n.alt=r,a[o].removeAttribute("alt")):n.alt="",a[o].appendChild(n)}else a[o].src=p;a[o].classList.remove(e.classEl),a[o].removeAttribute(e.attrName)}}app.lazyLoadState=!1}else app.lazyLoadState="done","init"===e.type&&(window.removeEventListener("scroll",app.pageLoad),delete app.pageLoad)}))};
		
		function createFlexColumn() {
			var col33 = document.querySelectorAll('.col-33'),
				totalCol33 = col33.length,
				listMenu = document.getElementById('list-menu'),
				buttonListMenu = document.querySelectorAll('.information'),
				totalButtonListMenu = buttonListMenu.length,
				menuContent = document.querySelectorAll('.menu-content'),
				state = 'close',
				last = 0,
				currentIndex = 0,
				lastRowPosition = 0,
				iteratePerColumn,
				lastIteratePerColumn;	
			
			function doScrolling(element, duration, checkRates) {
				var startingY = window.pageYOffset
				var elementY = startingY + element.getBoundingClientRect().top
				var targetY = document.body.scrollHeight - elementY < window.innerHeight ? document.body.scrollHeight - window.innerHeight : elementY
				var diff = targetY - startingY
				var easing = function (t) { return t<.5 ? 4*t*t*t : (t-1)*(2*t-2)*(2*t-2)+1 }
				var start

				if (!diff) return
					window.requestAnimationFrame(function step(timestamp) {
					if (!start) start = timestamp
					var time = timestamp - start
					var percent = Math.min(time / duration, 1)
					percent = easing(percent)
					
					if (!!checkRates) {
						window.scrollTo(0, startingY + diff * percent)
					} else {
						window.scrollTo(0, (startingY + diff * percent) - 50)
					}

					if (time < duration) {
					window.requestAnimationFrame(step)
					}
				})
			}
			
			for (var i = 0; i < totalButtonListMenu; i++) {
                (function (index) {
                    buttonListMenu[index].addEventListener('click', function (e) {
                        var rowDecimal = (index + 1) / iteratePerColumn;
                        var rowPosition = Math.ceil(rowDecimal);
                        var current = (iteratePerColumn * rowPosition) - 1;
						
                        currentIndex = index;

                        if (lastRowPosition !== rowPosition) {
							if (!col33[current] && iteratePerColumn === 2) {
								col33[current - 1].parentNode.insertBefore(listMenu, col33[current - 1].nextSibling);
								doScrolling(e.target, 1000);
							} else if (!col33[current] && col33[current -1] && iteratePerColumn === 3) {
								col33[current - 1].parentNode.insertBefore(listMenu, col33[current - 1].nextSibling);
								doScrolling(e.target, 1000);
							} else if (!col33[current] && !col33[current -1] && iteratePerColumn === 3) {
								col33[current - 2].parentNode.insertBefore(listMenu, col33[current - 2].nextSibling);
								doScrolling(e.target, 1000);
							} else {
								col33[current].parentNode.insertBefore(listMenu, col33[current].nextSibling);
								doScrolling(e.target, 1000);
							}
                        }

                        if (index === last) {
                            listMenu.classList.toggle('open');
                            if (state === 'open') {
                                state = 'close';
                            } else {
                                state = 'open';
                                doScrolling(e.target, 1000);
                            }
                        } else {
                            if (state === 'close') {
                                listMenu.classList.add('open');
                                state = 'open';
                                doScrolling(e.target, 1000);
                            }
                            menuContent[index].classList.add('current');
                            menuContent[last].classList.remove('current');
                            last = index;
                            lastRowPosition = rowPosition;
                        }
                        
                        var imgAsync2s = document.querySelectorAll('.menu-content.current .img-async2');
                        if (imgAsync2s.length !== 0) {
							app.lazyLoad({
								selector: '.menu-content.current .img-async2',
								attrName: 'src-url'
							});
                        }
                    });
                })(i);
            }

			(function() {
				var throttle = function(type, name, obj) {
					obj = obj || window;
					var running = false;
					var func = function() {
						if (running) { return; }
						running = true;
						requestAnimationFrame(function() {
							obj.dispatchEvent(new CustomEvent(name));
							running = false;
						});
					};
					obj.addEventListener(type, func);
				};
				throttle('resize', 'optimizedResize');
			})();
			
			function setColumn() {
				var viewportWidth = window.innerWidth;
				
				if (viewportWidth > 1200) {
					iteratePerColumn = 3;
				} else if (viewportWidth > 900 && viewportWidth <= 1200) {
					iteratePerColumn = 2;
				} else {
					iteratePerColumn = 1;
				}

				if (lastIteratePerColumn !== iteratePerColumn) {
					var rowDecimal = (currentIndex + 1) / iteratePerColumn;
					var rowPosition = Math.ceil(rowDecimal);
					var current = (iteratePerColumn * rowPosition) - 1;

					if (!col33[current] && iteratePerColumn === 2) {
						col33[current - 1].parentNode.insertBefore(listMenu, col33[current - 1].nextSibling);
					} else if (!col33[current] && col33[current -1] && iteratePerColumn === 3) {
						col33[current - 1].parentNode.insertBefore(listMenu, col33[current - 1].nextSibling);
					} else if (!col33[current] && !col33[current -1] && iteratePerColumn === 3) {
						col33[current - 2].parentNode.insertBefore(listMenu, col33[current - 2].nextSibling);
					} else {
						col33[current].parentNode.insertBefore(listMenu, col33[current].nextSibling);
					}
					lastRowPosition = rowPosition;
				}

				lastIteratePerColumn = iteratePerColumn;
			}
			setColumn();
			
			window.addEventListener('optimizedResize', setColumn, false);
		}

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
			
			createFlexColumn();
        }, false);
    </script>
</body>

</html>