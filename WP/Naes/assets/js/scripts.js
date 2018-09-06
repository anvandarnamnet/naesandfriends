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