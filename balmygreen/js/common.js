var ScrollValue = 0;

$(function() {
    $(window).on('scroll', function() {
        ScrollValue = $(this).scrollTop();
    });
    //redirectPage('ct-frame', './contents.php');
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
    slideTimeout = setInterval( function() {
        $.fn.fullpage.moveSectionDown();
    }, 8000);
});

function deptOpen(elm){
    console.log(elm);
    var target = $(elm).next();
    
    target.slideToggle(400, 'linear');   
}

function redirectPage(targetId, page, pageValue){
    //$("#"+targetId).empty();
    $("#fp-nav").remove();
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