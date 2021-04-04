$('#course-carousel.carousel .course-inner>.carousel-item').each(function(){
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

$('#sidebarCollapse').on('click',function() {
    if($(window).width() > 575.98){
        $('#webpage-resize').toggleClass('wrapping-resize');
    }
});
