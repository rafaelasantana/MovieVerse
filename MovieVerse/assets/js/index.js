$(document).ready(function () {

    var multipleItemCarousel = document.querySelector('#multipleItemCarousel');

    // toggle form to add new movie
    $("#addMovieToggle").click(function() {
        console.log("clicked on addMovieToggle ");
        $("#addMovieForm").toggle();
    })

    // photo carousel logic
    // for bigger screens
    if (window.matchMedia("(min-width:576px)").matches) {

        var carousel = new bootstrap.Carousel(multipleItemCarousel, {
            interval: false
        })

        var carouselWidth = $('.carousel-inner')[0].scrollWidth;

        var cardWidth = $('.carousel-item').width();


        var scrollPosition = 0;

        $('.carousel-control-next').on('click', function () {
            if (scrollPosition < (carouselWidth - (cardWidth * 4))) {
                console.log('next');
                scrollPosition = scrollPosition + cardWidth;
                $('.carousel-inner').animate({ scrollLeft: scrollPosition }, 600);
            }
        })

        $('.carousel-control-prev').on('click', function () {
            if (scrollPosition > 0) {
                console.log('prev');
                scrollPosition = scrollPosition - cardWidth;
                $('.carousel-inner').animate({ scrollLeft: scrollPosition }, 600);
            }
        })
    }
    // for smaller screens
    else {
        $(multipleItemCarousel).addClass('slide');

        $('.carousel-control-next').on('click', function () {
            if (scrollPosition < (carouselWidth - (cardWidth * 4))) {
                console.log('next');
                scrollPosition = scrollPosition + cardWidth;
                $('.carousel-inner').animate({ scrollLeft: scrollPosition }, 600);
            }
        })

        $('.carousel-control-prev').on('click', function () {
            if (scrollPosition > 0) {
                console.log('prev');
                scrollPosition = scrollPosition - cardWidth;
                $('.carousel-inner').animate({ scrollLeft: scrollPosition }, 600);
            }
        })

    }

});