// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

  function toggleNav(){
    if ( $( ".mobile-nav" ).hasClass( ".display" ) ) {
    
    
    }else{
      $('header').addClass('bg');
      
    }
    $('.mobile-nav').toggleClass('display');
    $('.mobile-nav-open').toggleClass('close');
    
   
}
function closeNav(){
    $('.mobile-nav').removeClass('display');
    $('.mobile-nav-open').removeClass('close');


}
function logoLink(link){
    $('.mobile-nav').removeClass('display');
    $('.mobile-nav-open').removeClass('close');

    window.location.assign(link)
}
$( document ).ready(function() {
    if ($(window).scrollTop() > 8){
        $('header').addClass( "bg");

   }
else {
   $('header').removeClass("bg");
   
}

    $(window).scroll(function () {
        if ($(window).scrollTop() > 8){
             $('header').addClass( "bg");

        }
    else {
        $('header').removeClass("bg");
        
    }
    });
    
});

function toggleModal(id){
  $('#modal-' + id).toggleClass("display");

}
function closeModal(id){
  
}

function loadBlogPosts(){
  var form = $('#blog-post-filter');

  var formData = form.serialize();
  
  var url = $(form).find('[name=api-url]').val();

  var blogPostContainer = $('#blog-posts-container');

  var parent = $(blogPostContainer).closest('.main-inner');

  console.log(parent);

  $(parent).addClass('loading');

  $.ajax({
    url: url,
    data: formData,
    method: "GET",
  })
  .done(function(data){
      $(blogPostContainer).html(data.data);
      $(parent).removeClass('loading');
  })
}

$('#blog-post-filter').find('select').change(function(){
  loadBlogPosts();
})

var swipers = [];

jQuery(".swiper-container").each(function(){
    
    var temp = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // Navigation arrows
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },

    });

    swipers.push(temp);
});

jQuery("#show-more-expertises").click(function(){
  jQuery(".expert-box.show-more").toggleClass("show");
  jQuery(this).toggleClass("active");
  if(jQuery(this).text() == "Show more"){
    jQuery(this).text("Show less");
  } else {
    jQuery(this).text("Show more");
  }

});

jQuery("#open-contact-me").click(function(){
  jQuery("#contact-me").addClass("show");
});

jQuery("#close-contact-me").click(function(){
  jQuery("#contact-me").removeClass("show");
});

jQuery("#toggle-mobile-nav").click(function(){
  
  let nav  = jQuery("#mobile-nav");

  if(jQuery(nav).height() != 0){
    jQuery(nav).animate({
      height: 0,
    }, 400);
    jQuery(this).removeClass('active'); 
  } else {
    let heightPx = jQuery(nav).prop('scrollHeight');
    jQuery(nav).animate({
      height: heightPx + "px"
    }, 400)
    jQuery(this).addClass('active'); 
  }
  

});


(function($) {

  /*
  *  new_map
  *
  *  This function will render a Google Map onto the selected jQuery element
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	4.3.0
  *
  *  @param	$el (jQuery element)
  *  @return	n/a
  */
  
  function new_map( $el ) {
    
    // var
    var $markers = $el.find('.marker');
    
    
    // vars
    var args = {
      zoom		: 16,
      center		: new google.maps.LatLng(0, 0),
      mapTypeId	: google.maps.MapTypeId.ROADMAP
    };
    
    
    // create map	        	
    var map = new google.maps.Map( $el[0], args);
    
    
    // add a markers reference
    map.markers = [];
    
    
    // add markers
    $markers.each(function(){
      
        add_marker( $(this), map );
      
    });
    
    
    // center map
    center_map( map );
    
    
    // return
    return map;
    
  }
  
  /*
  *  add_marker
  *
  *  This function will add a marker to the selected Google Map
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	4.3.0
  *
  *  @param	$marker (jQuery element)
  *  @param	map (Google Map object)
  *  @return	n/a
  */
  
  function add_marker( $marker, map ) {
  
    // var
    var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
  
    // create marker
    var marker = new google.maps.Marker({
      position	: latlng,
      map			: map
    });
  
    // add to array
    map.markers.push( marker );
  
    // if marker contains HTML, add it to an infoWindow
    if( $marker.html() )
    {
      // create info window
      var infowindow = new google.maps.InfoWindow({
        content		: $marker.html()
      });
  
      // show info window when marker is clicked
      google.maps.event.addListener(marker, 'click', function() {
  
        infowindow.open( map, marker );
  
      });
    }
  
  }
  
  /*
  *  center_map
  *
  *  This function will center the map, showing all markers attached to this map
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	4.3.0
  *
  *  @param	map (Google Map object)
  *  @return	n/a
  */
  
  function center_map( map ) {
  
    // vars
    var bounds = new google.maps.LatLngBounds();
  
    // loop through all markers and create bounds
    $.each( map.markers, function( i, marker ){
  
      var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
  
      bounds.extend( latlng );
  
    });
  
    // only 1 marker?
    if( map.markers.length == 1 )
    {
      // set center of map
        map.setCenter( bounds.getCenter() );
        map.setZoom( 16 );
    }
    else
    {
      // fit to bounds
      map.fitBounds( bounds );
    }
  
  }
  
  /*
  *  document ready
  *
  *  This function will render each map when the document is ready (page has loaded)
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	5.0.0
  *
  *  @param	n/a
  *  @return	n/a
  */
  // global var
  var map = null;
  
  $(document).ready(function(){
  
    $('.acf-map').each(function(){
  
      // create map
      map = new_map( $(this) );
  
    });
  
  });
  
  })(jQuery);