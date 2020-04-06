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
       window.open("http://panomatics.com/home/", "_self");
    });


    $('a#load-more').on('click', function (event){
      
        event.preventDefault;
//        event.stopPropagation;

        var _options = $(this).attr('data-pages');
        var _curpage = $(this).attr('data-curpage');
        var _limit = $(this).attr('data-limit');
        var _total = $(this).attr('data-total');;
        var $_where = $("#where_in");
        var where = $_where.val();
       
        var start = parseInt(_curpage);
        var next = start * parseInt(_limit);
         //var next = '4';
        //alert(_options);
            $.ajax({
            type : "POST",
            url : "http://panomatics.com/home/loadMore",
            data: {next: next, limit: _limit, where: where},
                //dataType: 'html',
                timeout: 5000
            })
            .done(function(result) {
              
               $("#photo-ocean-club").append(result).fadeIn('slow');
                app.pageLoad();
                $("#load-more").attr('data-curpage', parseInt(_curpage)+1 );
                $("#load-more").html("LOAD MORE<br><br>["+ $("#load-more").attr('data-curpage') + "/" + _total + "]");
                if ( parseInt(_curpage)+1 >= _total) $("#load-more-container").fadeOut('fast').remove();

            })
            .fail(function(msg) {
                console.log('Ajax error');
                console.log(msg);
            });

            // Refresh logos
           /* $.ajax({
            type : "POST",
            url : "http://panomatics.com/home/loadMoreClient",
            data: {next2: next, limit2: _limit},
                //dataType: 'html',
                timeout: 5000
            })
            .done(function(resultc) {
                $("#logo-client").append(resultc);
                 app.pageLoad();
                
            })
            .fail(function(msg) {
                console.log('Ajax error logos');
                console.log(msg);
            }); */

        return false;

    });

    // BEST SCROLLER: http://stackoverflow.com/a/15382570
    var _throttleTimer = null;
    var _throttleDelay = 800;
    var $window = $(window);
    var $document = $(document);

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
               //    console.log('Click triggered');
                   setTimeout(function(){
                    $('a#load-more').trigger('click');
                   }, 100);
            }

        }, _throttleDelay);
    }


});
