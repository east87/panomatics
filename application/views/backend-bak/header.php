<!DOCTYPE html>
<html lang="en" >
   <!-- begin::Head -->
   <head>
      <meta charset="utf-8" />
      <title>
         CMS | <?php echo PROJECT_NAME;?>
      </title>
      <meta name="description" content="Actions example page">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--begin::Web font -->
      <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
      <script>
         WebFont.load({
           google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
           active: function() {
               sessionStorage.fonts = true;
           }
         });
      </script>
      <!--end::Web font -->
      <!--begin::Base Styles -->
      <link href="<?php echo BACKEND_BASE_URL; ?>/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo BACKEND_BASE_URL; ?>/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo BACKEND_BASE_URL; ?>/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
      <script src="<?php echo BACKEND_BASE_URL; ?>/app/js/jquery-3.3.1.min.js" type="text/javascript"></script>
      <script src="<?php echo TOOLS_BASE_URL; ?>/ckeditor/ckeditor.js"></script>
      <script type="text/javascript">
         function openKCFinder(field) {
         
         	window.KCFinder = {
         
         		callBack: function(url) {
         
         			document.getElementById(field).value = url;
         
         			$( "."+field ).html('<img src="'+url+'" style="max-width:400px; padding:5px; border:solid 1px #ccc;">');
         
         			window.KCFinder = null;
         
         		}
         
         	};
         
         	window.open('<?php echo TOOLS_BASE_URL; ?>/kcfinder/browse.php?type=images', 'kcfinder_textbox',
         
         		'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
         
         		'resizable=1, scrollbars=0, width=800, height=600'
         
         	);
         
         }
         
         function openKCFinderVideo(field) {
         
         	window.KCFinder = {
         
         		callBack: function(url) {
         
         			document.getElementById(field).value = url;
         
         			$( "."+field ).html('<a href="'+url+'">');
         
         			window.KCFinder = null;
         
         		}
         
         	};
         
         	window.open('<?php echo TOOLS_BASE_URL; ?>/kcfinder/browse.php?type=video', 'kcfinder_textbox',
         
         		'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
         
         		'resizable=1, scrollbars=0, width=800, height=600'
         
         	);
         
         }
         
         function openKCFinderFile(field) {
         
         	window.KCFinder = {
         
         		callBack: function(url) {
         
         			document.getElementById(field).value = url;
         
         			$( "."+field ).html('<a href="'+url+'">');
         
         			window.KCFinder = null;
         
         		}
         
         	};
         
         	window.open('<?php echo TOOLS_BASE_URL; ?>/kcfinder/browse.php?type=upload', 'kcfinder_textbox',
         
         		'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
         
         		'resizable=1, scrollbars=0, width=800, height=600'
         
         	);
         
         }
         
         function reset_value(field) {
         
         	document.getElementById(field).value = '';
         
         	$("."+field).html('');
         
         }
         
      </script>
   </head>