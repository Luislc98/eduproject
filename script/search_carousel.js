$('#searchCarousel.carousel .filter-inner>.carousel-item').each(function(){
    let minPerSlide = 6;
    let next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (let i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});

// This will adapt the carousel to move
// with the sidebar and navbar
$(document).ready(function() {
  $('#sidebarCollapse').on('click',function() {
      //dark background appears when sidebar button is pressed, and navbar hides
    if($(window).width() > 575.98){
        $('#filter-container').toggleClass('move-search-carousel-right');
    } else if($("#dark-background").hasClass("active")){
        $('#filter-container').addClass('hidden');
    } else{
        $('#filter-container').removeClass('hidden');
    };

  });
});
    //when dark-background is clicked on, sidebar or form hides.
$('#dark-background').on('click',function() {

  if($(window).width() > 575.98){
   
    $('#filter-container').toggleClass('move-search-carousel-right');
  } else{
    $('#filter-container').toggleClass('hidden')
  };
});


  $(window).resize(function() {
        if($(window).width() > 575.98 && $('#sidebarCollapse').hasClass('move-right')) {
          $('#filter-container').addClass('move-search-carousel-right');
          $('#filter-container').removeClass('hidden')
        } else if ($(window).width() <= 575.98 && $('#sidebarCollapse').hasClass('move-right')){
          $('#filter-container').addClass('hidden');
          $('#filter-container').removeClass('move-search-carousel-right')
        }
  });
  //hide filter with scroll 
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
      $('#filter-container').addClass('hidden');
    } else if ($('#dark-background').hasClass("active")){
      $('#filter-container').addClass('hidden');
    } else {
      $("#filter-container").removeClass('hidden');
    }
  });

  $("#search-btn").on("click", function(){

      $('#filter-container').removeClass('move-search-carousel-right')

  });

if (window.pageYOffset >= 50) { 
    $('#filter-container').addClass('hidden');
} else if ($('#dark-background').hasClass("active")){
  $('#filter-container').addClass('hidden');
} else {
  $("#filter-container").removeClass('hidden');
}
