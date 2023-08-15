<script src="<?php echo get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js' ;?>"></script>
<script src="<?php echo get_template_directory_uri().'/assets/js/jquery-3.6.0.min.js' ;?>"></script>  
<script src="<?php echo get_template_directory_uri().'/assets/js/slick.js' ;?>"></script>  
<script src="<?php echo get_template_directory_uri().'/assets/js/app.js' ;?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).on('ready',function(){
  $('.vacina').slick({
  lazyLoad: 'ondemand',
  centerPadding: '60px',
  dots:false,
  slidesToShow: 4,
  slidesToScroll: 1
  });
  $('.news').slick({
  lazyLoad: 'ondemand',
  centerPadding: '60px',
  dots:false,
  slidesToShow: 4,
  slidesToScroll: 1
  });
});
$('.btn-more-vacina').click(function(){
  var title = $(this).data('title');
  var content = $(this).data('content');
  var excerpt = $(this).data('excerpt');
  
  $('#modal-vacina-title').html(title);
  $('#modal-vacina-content').html(content);
  $('#modal-vacina-excerpt').html(excerpt);
})
</script>
<style>
  .slick-arrow{
    display: none;
  }
</style>
</body>