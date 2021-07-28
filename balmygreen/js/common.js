var ScrollValue = 0;
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $(".bottom_menu").outerHeight();

$(function () {
  $(window).on("scroll", function () {
    ScrollValue = $(this).scrollTop();
    if (ScrollValue > 12) {
      $(".user-btn").css("opacity", 0);
    } else {
      $(".user-btn").css("opacity", 1);
    }
  });
});

$(window).scroll(function (event) {
  didScroll = true;
});

setInterval(function () {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function hasScrolled() {
  var st = $(this).scrollTop();
  if (Math.abs(lastScrollTop - st) <= delta) {
    return;
  }

  if (st > lastScrollTop && st > navbarHeight) {
    $(".bottom_menu").hide();
  } else {
    if (st + $(window).height() < $(document).height()) {
      $(".bottom_menu").show();
    }
  }
  lastScrollTop = st;
}

$(document).on("ready", function () {
  AOS.init();
  $(".aos-init").removeClass("aos-animate");
  $("#fullpage").fullpage({
    autoScrolling: true,
    scrollHorizontally: true,
  });
  if ($("#fullpage").length > 0) {
    slideTimeout = setInterval(function () {
      //$.fn.fullpage.moveSectionDown();
    }, 8000);
  }
});

function deptOpen(elm) {
  var target = $(elm).next();

  target.slideToggle(400, "linear");
}

/*
 * ajaxCall(Parameter)
 * Parameter :
 *  ajaxSet = {
 *      url      : './example.php'      - 필수
 *      data     : {example : 'sample'} - 필수
 *      dataType : 'JSON'/'XML'         - 'JSON' (default)
 *      type     : 'POST'/'GET'         - POST (default)
 *
 *  }
 *
 *
 *  근데 이게 필요할까?    일단 보류!
 */
function ajaxCall() {
  $.ajax({
    url: "",
    data: {},
    dataType: "JSON",
    type: "POST",
    success: function (jdata) {},
    error: function (request, status, error) {
      alert(
        "code:" +
          request.status +
          "\n" +
          "message:" +
          request.responseText +
          "\n" +
          "error:" +
          error
      );
    },
  });
}

//--------------------------not use------------------------------------
function redirectPage(targetId, page, pageValue) {
  pageValue = typeof pageValue !== "undefined" ? pageValue : "";

  //console.log(pageValue);

  $.ajax({
    url: page,
    data: {
      pageValue: pageValue,
    },
    dataType: "JSON",
    type: "POST",
    success: function (jdata) {
      console.log(jdata);
      $("#" + targetId).html(jdata.html);
    },
    error: function () {},
  });
}
