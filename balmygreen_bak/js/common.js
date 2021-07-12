var ScrollValue = 0;

$(function() {
    $(window).on('scroll', function() {
        ScrollValue = $(this).scrollTop();        
        if(ScrollValue > 12){
            $(".user-btn").css('opacity', 0);
        } else {
            $(".user-btn").css('opacity', 1);
        }
    });
});

$(document).on('ready',function() {
    AOS.init();
    $('.aos-init').removeClass('aos-animate');
    $('#fullpage').fullpage({
        //options here
        autoScrolling:true,
        scrollHorizontally: true,
    });
	//methods
	//$.fn.fullpage.setAllowScrolling(false);
    if($("#fullpage").length > 0){
        slideTimeout = setInterval( function() {
            $.fn.fullpage.moveSectionDown();
        }, 8000);
    }
});

function deptOpen(elm){
    var target = $(elm).next();
    
    target.slideToggle(400, 'linear');   
}

//not use
function redirectPage(targetId, page, pageValue){
    pageValue = (typeof pageValue !== 'undefined')  ? pageValue : "";

    //console.log(pageValue);

    $.ajax({
        url: page,
        data: {
            pageValue : pageValue
        },
        dataType: "JSON",
        type: "POST",
        success: function(jdata){
            console.log(jdata);
            $("#"+targetId).html(jdata.html);
        },
        error: function(){

        }
    });
}