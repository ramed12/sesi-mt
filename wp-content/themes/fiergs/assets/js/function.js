$(document).ready(function(){
    var ppp = 4; // Post per page
    var pageNumber = 1;
    var ajax_posts = $('#more_posts').data('admin-url');
    var category = $('#more_posts').data('category');

function load_posts(){  
    pageNumber++;
    var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax'; 
    if(!empty(category)){
        str += '&cat=' + category;
    }
    $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_posts,
        data: str,
        success: function(data){
            var $data = $(data);
            if($data.length){
                $("#ajax-posts").append($data);
                $("#more_posts").attr("disabled",false);
            } else{
                $("#more_posts").attr("disabled",true);
            }
        },
        error : function(jqXHR, textStatus, errorThrown) {
            $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }

    });
    return false;
}

    $("#more_posts").on("click",function(){ // When btn is pressed.
        $("#more_posts").attr("disabled",true); // Disable the button, temp.
        load_posts();
    });
});