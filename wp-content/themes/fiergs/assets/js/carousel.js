
$('.vacina').slick({ 
    dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000, 
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,  
        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
  
        responsive: [
      
          {
           breakpoint: 991,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1
           }
          },
         {
           breakpoint: 700,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1
           }
         },
         {
           breakpoint: 480,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1
           }
         }
        ]
  });
  
  $('.news').slick({
    dots:false,
        infinite: true,
        autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1, 
    prevArrow:"<button type='button' class='slick-news-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-news-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    responsive: [
      
      {
       breakpoint: 991,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1
       }
      },
     {
       breakpoint: 700,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1
       }
     },
     {
       breakpoint: 480,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1
       }
     }
    ]
  }); 
  $('.relatos').slick({
    dots:false,
        infinite: true,
        autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1, 
    fade: true, 
    prevArrow:"<button type='button' class='slick-relatos-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-relatos-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    responsive: [
      
      {
       breakpoint: 991,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1
       }
      },
     {
       breakpoint: 700,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1
       }
     },
     {
       breakpoint: 480,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1
       }
     }
    ]
  }); 
  
  
  $('.btn-more-vacina').click(function(){
    var title = $(this).data('title');
    var content = $(this).data('content');
    var excerpt = $(this).data('excerpt');
    
    $('#modal-vacina-title').html(title);
    $('#modal-vacina-content').html(content);
    $('#modal-vacina-excerpt').html(excerpt);
  });

$("#searchInput").keyup(function () {
  //split the current value of searchInput  
  var value = $(this).val().toUpperCase();
  var txtValue;
  cardTitle = document.querySelectorAll('.vacina-card');

  for(var i =0; i < cardTitle.length; i++){
    txtValue = cardTitle[i].dataset.title;
    console.log(txtValue);
    if (txtValue.toUpperCase().indexOf(value) > -1) {
      cardTitle[i].style.cssText = "order:"+[i]+"!important;";
          $('.vacina').slick('slickPause');

        }else{
          cardTitle[i].style.cssText = "display: none !important; padding-left: 0.25rem; flex:0 0 auto; order: "+[i]+10+"!important;";
        }
        if(value == ""){
          $('.vacina').slick('slickPlay');
          cardTitle[i].style.cssText = "";
      }    
  }
    
});