$('.nav-button-menu-open').on('click', function() {  
    $(".nav-menu-container").show();   
    $(".nav-button-menu-close").show();
    $(".nav-button-menu-open").hide();
});
$('.nav-button-menu-close').on('click', function() {  
    $(".nav-menu-container").hide();  
    $(".nav-button-menu-close").hide();
    $(".nav-button-menu-open").show();
});
$(document).ready(function(){ 
var windowWidth = window.innerWidth;
var screenWidth = screen.width;

if(screenWidth <= 768){
    $('#logo-fiergs').removeClass('logo-fiergs').addClass('logo-fiergs-alt'); 
    $('#nav-menu-container').addClass('bg-light');  
    $('#nav-menu-cont').removeClass('container').addClass('container-fluid');  
    $('#nav-menu-cont').css('background-color','white');
    $('#nav-menu-container').removeClass('navbar-white').addClass('navbar-light'); 
    $('#nav-menu-container  div ul li a').addClass('nav-link-alt').removeClass('nav-link');  
}else{ 
$(window).bind('scroll load', function(){
    if( $(this).scrollTop() >= 20 ) {   
        $('#logo-fiergs').removeClass('logo-fiergs').addClass('logo-fiergs-alt'); 
        $('#nav-menu-container').addClass('bg-white');  
        $('#nav-menu-container').removeClass('navbar-white').addClass(' navbar-light');  
        $('#nav-menu-container div ul li a').addClass('nav-link-alt').removeClass('nav-link');  
     }else{
        $('#logo-fiergs').removeClass('logo-fiergs-alt').addClass('logo-fiergs');    
        $('#nav-menu-container').removeClass('bg-white');  
        $('#nav-menu-container').removeClass('navbar-light').addClass(' navbar-white');  
        $('#nav-menu-container  div ul li a').addClass('nav-link').removeClass('nav-link-alt');  
        $("#nav-menu-container").mouseover(function(){
            $('#logo-fiergs').removeClass('logo-fiergs').addClass('logo-fiergs-alt'); 
            $('#nav-menu-container').addClass('bg-white');  
            $('#nav-menu-container').removeClass('navbar-white').addClass(' navbar-light');  
            $('#nav-menu-container  div ul li a').addClass('nav-link-alt').removeClass('nav-link');  
        });
        $("#nav-menu-container").mouseout(function(){
            $('#logo-fiergs').removeClass('logo-fiergs-alt').addClass('logo-fiergs');    
            $('#nav-menu-container').removeClass('bg-white');  
            $('#nav-menu-container').removeClass('navbar-light').addClass(' navbar-white');  
            $('#nav-menu-container  div ul li a').addClass('nav-link').removeClass('nav-link-alt');  
        });
        
    }

});
}
});

  

