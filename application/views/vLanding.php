<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="msvalidate.01" content="FA0D073B12840F6BD580F94FF4C4A733" />
    <title>Landing Page - Panomatics | Virtual Reality Solutions</title>
     <meta name="description" content="Panomatics is a new award winning media agency with offices in, but not limited to London, California, Bangkok, Bali, Singapore, Malaysia, Germany & Ibiza.">
      <meta property="og:description" content="virtual tours, 360 virtual reality, video, google tours, photography, web design, aerial">
      <meta name="keywords" content="virtual tours, 360 virtual reality, video, google tours, photography, web design, aerial, restaurants, bars, shops,factories,properties, hospitality, hotels, educations, galleries, trade fairs">     
	  <meta property="og:image" content="<?= IMAGES_BASE_URL; ?>/logo.png">
    <meta property="og:image" content="<?= IMAGES_BASE_URL; ?>/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preload" href="<?= FRONTEND_BASE_URL; ?>/js/scriptvr.min.js" as="script" />
    <link rel="preload" href="<?= IMAGES_BASE_URL; ?>/logo-white.png" as="image" />
    <link rel="preload" href="<?= IMAGES_BASE_URL; ?>/icon-est.png" as="image" />
    <link rel="shortcut icon" href="<?= IMAGES_BASE_URL; ?>/favicon.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
	  <?php include 'include/analytics.php';?>
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
            font-size: 14px;
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
        #tagline {
            margin: 30px 0px 0px;
            font-weight: 700;
            letter-spacing: 5px;
            text-align: center;
            color: #fff;
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

        /* CONTENT PAGE */
        #landing-page {
            background-size: cover;
            background-position: top center;
        }
        #landing-page #container-page {
			max-width: 1230px;
			margin: auto;
			padding: 20px 20px;
		}
        #landing-page {
            color: #fff;
        }
         #errorbox-form-login, #login-info p {
            color: #000;
        }
        #login-enter {
            font-size: 0px;
            text-align: center;
        }
        .col-50 {
            display: inline-block;
            vertical-align: top;
            width: 50%;
            padding: 10px;
            font-size: 14px;
        }
        .content-landing-box {
            padding: 10px;
            background-color: rgba(1,25,50,0.7);
            box-shadow: 0px 5px 20px 0px rgba(0,0,0,0.25);
        }
        .img-landing {
            padding-bottom: 48%;
            background-size: cover;
            background-position: center center;
        }
        .title-landing {
            padding: 10px 30px;
            font-size: 18px;
        }
        #login-title-landing {
            background-color: #ff6600;
        }
        #enter-title-landing {
            background-color: #00aeef;
        }
        .content-text-link {
            font-family: 'Didact Gothic', sans-serif;
            padding: 30px 0px;
            font-weight: 700;
        }
        .button-landing {
            width: 100%;
            max-width: 200px;
            margin: 30px 0px 20px;
            padding: 15px 20px;
            font-size: 18px;
        }
        #login-button-landing {
            background-color: #ff6600;
        }
        .content-text-link a {
            text-decoration: underline;
        }
		
		
		
		@media screen and (max-width: 900px) {
			.title-landing {
				height: 74px;
			}
		}
		
		@media screen and (max-width: 700px) {
			#header-alt-wrapper {
				padding-bottom: 0px;
			}
			#logo-alt {
				width: 120px;
				margin: 0px auto;
			}
			#icon-accent {
				top: 20px;
				left: 20px;
				width: 50px;
			}
			.col-50 {
				width: 100%;
				padding: 10px 0px;
				font-size: 12px;
			}
			.title-landing {
				height: auto;
				font-size: 16px;
			}
			.button-landing {
				font-size: 16px;
			}
		}
                #pop-up-content p {
                     color: #000;
                }
                .errorbox {
                    color: #000;
                }
    </style>

    <link rel="preload" href="https://fonts.googleapis.com/css?family=Open+Sans:100,400,700" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= FRONTEND_BASE_URL; ?>/css/style_landing.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
        <link rel="stylesheet" href="<?= FRONTEND_BASE_URL; ?>/css/style_landing.css">
    </noscript>

    <script>
        !function(t){"use strict";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement("link").relList.supports("preload")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){var e=t.media||"all";function a(){t.media=e}t.addEventListener?t.addEventListener("load",a):t.attachEvent&&t.attachEvent("onload",a),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(a,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName("link"),n=0;n<a.length;n++){var o=a[n];"preload"!==o.rel||"style"!==o.getAttribute("as")||o.getAttribute("data-loadcss")||(o.setAttribute("data-loadcss",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener("load",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent("onload",function(){e.poly(),t.clearInterval(a)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}("undefined"!=typeof global?global:this);
    </script>

    <script type="text/javascript" src="<?= FRONTEND_BASE_URL; ?>/js/scriptvr.min.js" defer></script>
</head>

<body id="landing-page" class="bg-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/bg-landing-page.jpg">
 <?php include 'include/tagmanager.php';?>
    <div id="header-alt">
        <div id="header-alt-wrapper" class="clear">
            <a href="<?= BASE_URL; ?>/home" id="logo-alt" class="img-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/logo-white-alt.png" alt="Panomatics Logo"></a>
            <div id="icon-accent" class="img-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/accent.png"></div>
            <div id="tagline"><h1>... ASIA'S LEADING DIGITAL CONTENT PROVIDER ...</h1></div>
        </div>
    </div>
    <div id="container-page">
        <div id="login-enter">
		<div class="col-50">
                <div id="enter-landing-box" class="content-landing-box">
                    <div class="content-img-landing">
                        <div class="img-landing bg-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/img-enter.jpg"></div>
                        <h1 id="enter-title-landing" class="title-landing">PANOMATICS COMPANY WEBSITE</h1>
                    </div>
                    <div class="content-text-link">
                        <p>BECOME FAMILIAR WITH PANOMATICS. ALL YOU NEED TO KNOW ABOUT US!</p>
                        <a href="<?= BASE_URL; ?>/home"><button id="enter-button-landing" class="button-landing">ENTER</button></a>
                        <p>WELCOME TO OUR WORLD</p>
                    </div>
                </div>
            </div>
            <div class="col-50">
                <div id="login-landing-box" class="content-landing-box">
                    <div class="content-img-landing">
                        <div class="img-landing bg-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/img-login.jpg"></div>
                        <h1 id="login-title-landing" class="title-landing">PANOMATICS VR PORTAL</h1>
                    </div>
                    <div class="content-text-link">
                        <p>DIVE INTO AN AWESOME VR COLLECTION - A WHOLE NEW EXPERIENCE!</p>
                        <button id="login-button-landing" class="button-landing" onclick="location.href='https://localhost/panomvr';">LOGIN</button>
                        <p>LOGIN OR SIGN UP <a href="https://localhost/panomvr/register">HERE</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="banner-middle">
            <a href="#" id="banner-landing" class="img-load lazy-load" src-url="<?= IMAGES_BASE_URL; ?>/img-banner-middle.jpg" alt="Banner Middle Text"></a>
        </div>
        <div id="latest-vr">
            <h4 class="title-latest">CHECK OUT OUR LATEST VIRTUAL TOURS AND AERIALS</h4>
            <div id="latest-box-wrapper">
                   <?php
                        if($countProduct > 0){
                        $i=0;
                        foreach($ListProduct as $pr){
                                $i++;
                        ?>   
                        <?php $visibility = contentValue($pr, 'visibility');
                         if($visibility != 'Public'){
                             $onclick = 'onClick="openPopupLogin()"';
                             $ref = '#';
                         } 
                         else {
                            $onclick='';
                              if ($pr['row_alias'] !==''){
                               $ref =BASE_URL.'/'.$pr['row_alias'];  
                              }
                              else {
                                $ref = BASE_URL.'/project/detail/'.$pr['row_id']; 
                              }
                         }
                        ?>
                <div class="col-25 col-latest" <?=$onclick?>>
                    <a href="<?=$ref;?>" class="latest-box">
                        <div class="bg-load lazy-load img-latest" src-url="<?=contentValue($pr, 'product_image');?>"></div>
                        <h5 class="project-name"><?=contentValue($pr, 'project_title');?> / <?=contentValue($pr, 'location');?></h5>
                    </a>
                </div>
                <?php  } } ?>   
               
            </div>
        </div>
        <div id="all-services">
            <h4 class="title-latest">ALL SERVICES FOR YOUR DIGITAL CONTENT NEEDS</h4>
            <div id="services-box-wrapper">
                <div class="col-16 col-service">
                    <a href="<?= BASE_URL; ?>/home?product=Virtual-Tours" class="service-box">
                        <div class="bg-load lazy-load img-service" src-url="<?= IMAGES_BASE_URL; ?>/icon-vt.png"></div>
                        <h5 class="service-name">VIRTUAL TOURS</h5>
                    </a>
                </div>
                <div class="col-16 col-service">
                    <a href="<?= BASE_URL; ?>/home?product=Videos" class="service-box">
                        <div class="bg-load lazy-load img-service" src-url="<?= IMAGES_BASE_URL; ?>/icon-videos.png"></div>
                        <h5 class="service-name">VIDEOS</h5>
                    </a>
                </div>
                <div class="col-16 col-service">
                    <a href="<?= BASE_URL; ?>/home?product=Still-Images" class="service-box">
                        <div class="bg-load lazy-load img-service" src-url="<?= IMAGES_BASE_URL; ?>/icon-photo.png"></div>
                        <h5 class="service-name">PHOTOGRAPHY</h5>
                    </a>
                </div>
                <div class="col-16 col-service">
                    <a href="<?= BASE_URL; ?>/home?product=Website" class="service-box">
                        <div class="bg-load lazy-load img-service" src-url="<?= IMAGES_BASE_URL; ?>/icon-design.png"></div>
                        <h5 class="service-name">WEBDESIGN</h5>
                    </a>
                </div>
                <div class="col-16 col-service">
                    <a href="<?= BASE_URL; ?>/home?product=360-VR-Video" class="service-box">
                        <div class="bg-load lazy-load img-service" src-url="<?= IMAGES_BASE_URL; ?>/icon-vr.png"></div>
                        <h5 class="service-name">VR</h5>
                    </a>
                </div>
                <div class="col-16 col-service">
                    <a href="<?= BASE_URL; ?>/home?product=Virtual-Tours" class="service-box">
                        <div class="bg-load lazy-load img-service" src-url="<?= IMAGES_BASE_URL; ?>/icon-aerial.png"></div>
                        <h5 class="service-name">AERIAL</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="landing-footer">
        <a href="<?= BASE_URL; ?>/contact">OFFICES AND LOCATIONS</a>
        <span>|</span>
        <a href="<?= BASE_URL; ?>/contact">CONTACT</a>
        <span>|</span>
        <a href="<?= BASE_URL; ?>/terms">TERMS & CONDITIONS</a>
        <p id="copyright-footer">© PANOMATICS <?= date('Y')?></p>
    </div>
<div id="pop-up-wrapper"></div>
    <script>
        'use strict';

        // Lazyload function
        window.app=window.app||{},app.lazyLoadState=app.lazyLoadState||{},app.lazyLoad=function(e){"use strict";e.type||(app.lazyLoadState=!1),app.lazyLoadState||(app.lazyLoadState=!0,requestAnimationFrame(function(){if(e.selector)var t=e.selector;else t="."+e.classEl;var a=document.querySelectorAll(t),l=a.length;if(l>0){for(var o=0;o<l;o++){if("init"===e.type)var i=a[o].getBoundingClientRect();else i={top:0};var p=a[o].getAttribute(e.attrName);if(p&&i.top<window.innerHeight){if(a[o].classList.contains("bg-load"))a[o].style.backgroundImage="url('"+p+"')";else if(a[o].classList.contains("img-load")){var r=a[o].getAttribute("alt"),n=document.createElement("IMG");n.src=p,r?(n.alt=r,a[o].removeAttribute("alt")):n.alt="",a[o].appendChild(n)}else a[o].src=p;a[o].classList.remove(e.classEl),a[o].removeAttribute(e.attrName)}}app.lazyLoadState=!1}else app.lazyLoadState="done","init"===e.type&&(window.removeEventListener("scroll",app.pageLoad),delete app.pageLoad)}))};
        
        // Set LazyLoad for initial page load
        app.pageLoad = function () {
            app.lazyLoad({
                selector: '.active .current .img-async',
                attrName: 'src-url',
                type	: 'init'
            });
        };
        
        app.lazyLoadState = false;

        window.addEventListener('load', function () {
            // Call LazyLoad for initial page load
			app.pageLoad();
            window.addEventListener('scroll', app.pageLoad);
            app.lazyLoad({
                classEl	: 'lazy-load',
                attrName: 'src-url'
            });
        }, false);
    </script>
</body>

</html>