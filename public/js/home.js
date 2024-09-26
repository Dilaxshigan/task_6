if(window.matchMedia("(min-width:576px)").matches){
    var carouselWidth = $('.main-slide')[0].scrollWidth;
    var cardWidth = $('.slider').width();

var scrollPosition = 0;
$('.carousel-control-next').on('click', function(){
    if(scrollPosition < (carouselWidth - (cardWidth * 4))){
        console.log('next');
        scrollPosition = scrollPosition + cardWidth;
        $('.main-slide').animate({scrollLeft: scrollPosition}, 600);
    }
    
});

$('.carousel-control-prev').on('click', function(){
    if(scrollPosition > 0 ){
        console.log('prev');
        scrollPosition = scrollPosition - cardWidth;
        $('.main-slide').animate({scrollLeft: scrollPosition}, 600);
    }
    
});
}else{
    
}
