$(document).ready(function () {

    var _animationType = $("#animationType").val();
    var _displayType = $("#displayType").val();

    var $_product = $("#selected_product");
    var $_location = $("#selected_location");
    var $_business = $("#selected_business");
    var $_productData = $_product.attr('data-value');
    var $_locationData = $_location.attr('data-value');
    var $_businessData = $_business.attr('data-value');
    var _product  = $_product.val();
    var _location = $_location.val();
    var _business = $_business.val();
  
    // update filters on first load
    /*
        <input type="hidden" name="product"  id="selected_product" value="*" />
        <input type="hidden" name="location"  id="selected_location" value=".maldives"  data-value="maldives"/>
        <input type="hidden" name="business"  id="selected_business" value="*" />
    */

    var _options1 = { // main grid gallery

            filters: '#js-filters-lightbox-gallery1, #js-filters-lightbox-gallery2, #js-filters-lightbox-gallery3',
            loadMore: '',
            //loadMore: '#js-loadMore-lightbox-gallery',
            loadMoreAction: 'auto',
            layoutMode: 'grid',
            mediaQueries: [{
                width: 900,
                cols: 4
            }, {
                width: 800,
                cols: 4
            }, {
                width: 500,
                cols: 3
            }, {
                width: 480,
                cols: 2
            }, {
                width: 320,
                cols: 1
            }],
            defaultFilter: '*',
            animationType: _animationType,
            gapHorizontal: 10,
            gapVertical: 45,
            gridAdjustment: 'responsive',
            caption: 'overlayBottomPush',
            displayType: _displayType,
            displayTypeSpeed: 100
    };
    var _options2 = { // logo grid gallery

            //loadMore: '#js-loadMore-lightbox-gallery',
            loadMoreAction: 'auto',
            layoutMode: 'grid',
            mediaQueries: [{
                width: 900,
                cols: 6
            }, {
                width: 800,
                cols: 5
            }, {
                width: 500,
                cols: 4
            }, {
                width: 480,
                cols: 3
            }, {
                width: 320,
                cols: 2
            }],
            defaultFilter: '*',
            animationType: _animationType,
            gapHorizontal: 10,
            gapVertical: 45,
            gridAdjustment: 'responsive',
            caption: 'overlayBottomPush',
            displayType: _displayType,
            displayTypeSpeed: 100

    };


    // init cubeportfolio
    $('#js-grid-lightbox-gallery').cubeportfolio('init', _options1, function(){


            if( _product!=="*" )
            {
                console.log(_product);
                var _filter = $('#filter-' + _product);
            
                    _filter.addClass('cbp-filter-item-active').siblings().removeClass('cbp-filter-item-active');
                    $('#js-grid-lightbox-gallery').cubeportfolio('filter', _product );
                    $('#js-filters-lightbox-gallery1 .cbp-l-filters-dropdownHeader').text( _filter.text() );
            }
            else
            {
                $('#js-filters-lightbox-gallery1 .cbp-l-filters-dropdownHeader').text( 'PRODUCTS:' );
            }
            if( _location!=="*" )
            {
                var _filter = $('#filter-' + _location);
                    _filter.addClass('cbp-filter-item-active').siblings().removeClass('cbp-filter-item-active');
                    $('#js-grid-lightbox-gallery').cubeportfolio('filter', _location );
                    $('#js-filters-lightbox-gallery2 .cbp-l-filters-dropdownHeader').text( _filter.text() );
            }
            else
            {
                $('#js-filters-lightbox-gallery2 .cbp-l-filters-dropdownHeader').text( 'LOCATION:' );
            }
            if( _business!=="*" )
            {
                var _filter = $('#filter-' + _business);
                    _filter.addClass('cbp-filter-item-active').siblings().removeClass('cbp-filter-item-active');
                    $('#js-grid-lightbox-gallery').cubeportfolio('filter', _business );
                    $('#js-filters-lightbox-gallery3 .cbp-l-filters-dropdownHeader').text( _filter.text() );
            }
            else
            {
                $('#js-filters-lightbox-gallery3 .cbp-l-filters-dropdownHeader').text( 'BUSINESS TYPE:' );
            }
    });



    // init cubeportfolio with logos
    $('#js-grid-lightbox-gallery2').cubeportfolio('init', _options2 );


    $(".data-refresh").on('click', function (event){
        var _newGet = $(this).data('type') + '=' + $(this).data('value');
        //$('#js-grid-lightbox-gallery').cubeportfolio('destroy');
        //document.location.href = '/?' + _newGet;
        //location.search = "?" + _newGet;
        document.location.href = "?" + _newGet;
    });



    $(".data-refresh-second").on('click', function (event){
        var _newGet = $(this).data('type') + '=' + $(this).data('value');
        location.search += "&" + _newGet;

    });


    $(".data-refresh-reset").on('click', function (event){
        $('#js-grid-lightbox-gallery').cubeportfolio('destroy');
        window.open("https://localhost/panom/home/", "_self");
    });


    

 var page = 2;
 
	$(window).scroll(function() {
        var $_project = $("#count_pro");
        var countpro = $_project.val(); 
        var $_client = $("#count_client");
        var client = $_client.val();
            
	    if($(window).scrollTop() + $(window).height() >= $(document).height()) {
	        page++;
                if(page <= countpro) {
                   setTimeout(function(){
                    loadMore(page); 
                   
                    
               }, 100); 
                }
              if(page <= client) {
                   setTimeout(function(){
                   
                    loadClient(page);
                    
               }, 100); 
                }   
	    }
	});
  function loadMore(page){
       var $_where = $("#where_in");
        var where = $_where.val();
        
        
	  $.ajax(
	        {
                    type : "POST",
                    url : "https://localhost/panom/home/loadMore",
                     data: {next: page, where: where},
                    timeout: 2000,
                    beforeSend: function()
	            {
	                $('.ajax-load').show();
                    }
	        })
	        .done(function(result)
	        {
                   
	            if(result == " "){
	                $('.ajax-load').html("No more records found");
	                return;
	            }
	            $("#photo-ocean-club").append(result).fadeIn('slow');
                    $('.ajax-load').hide();
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	}         
 function loadClient(page){
     
	  $.ajax(
	        {
                    type : "POST",
                    url : "https://localhost/panom/home/loadMoreClient",
                    data: {next2: page},
                    timeout: 2000,
	        })
	        .done(function(resultc)
	        {
                  if(resultc == " "){
	                $('.ajax-load').html("No more records found");
	                return;
	            }
	            $("#logo-client").append(resultc);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	}  
        
 var _throttleTimer = null;
    var _throttleDelay = 800;
    var $window = $(window);
    var $document = $(document);
    var $page = 2;
    $document.ready(function () {

        $window
            .off('scroll', ScrollHandler)
            .on('scroll', ScrollHandler);

    });

    function ScrollHandler(e) {
        //throttle event:
        clearTimeout(_throttleTimer);
        _throttleTimer = setTimeout(function () {
           // console.log('scroll');

            //do work
            if ($(window).scrollTop() >= $(".cbp-wrapper").height() - 200 ) {
                 page++;
               //    console.log('Click triggered');
                   setTimeout(function(){
                    $('a#load-more').trigger('click');
                   }, 100);
            }

        }, _throttleDelay);
    }

});
