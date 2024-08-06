$('.responcive').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 800,
    autoplay: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    initialSlide: 1,
    fade: true, 
    cssEase: 'linear',
    speed: 500,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                arrows: false
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: false
            }
        }
    ]
  });
$('.multiple-items').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 800,
    autoplay: false,
    slidesToShow: 3.4,
    slidesToScroll: 1,
    initialSlide: 4,
    margin: 22,
    speed: 500,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3.5,
                slidesToScroll: 1,
                dots: false,
                arrows: false
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: false
            }
        }
    ]
  });
$('.review-items').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 800,
    autoplay: false,
    slidesToShow: 4,
    slidesToScroll: 4,
    initialSlide: 4,
    margin: 22,
    speed: 500,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3.5,
                slidesToScroll: 1,
                dots: false,
                arrows: false
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: false
            }
        }
    ]
  });
  $(".slider").on('afterChange', function(event, slick, currentSlide){
    $(".cp").text(currentSlide + 1);
 });
  $(".slider").on('afterChange', function(event, slick, currentSlide){
    $(".sl").text(currentSlide + 4);
 });