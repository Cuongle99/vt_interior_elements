/*
 *  @Website: apollotheme.com - prestashop template provider
 *  @author Apollotheme <apollotheme@gmail.com>
 *  @copyright Apollotheme
 *  @description: ApPageBuilder is module help you can build content for your shop
 */
/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */


$(function () {
  $(".showbox").click(function (e) {
    e.stopPropagation();
    if ($(".group-box").hasClass("active")) {
      $(".group-box").removeClass("active");
      $(".bg-over-lay").removeClass("show-over-lay");
      $(".showbox").removeClass("active");
    } else {
      $(".group-box").addClass("active");
      $(".bg-over-lay").addClass("show-over-lay");
      $(".showbox").addClass("active");
    }
  });
  $(".closebox").click(function (e) {
    e.stopPropagation();
    console.log(123);
    if (
      $(".group-box").hasClass("active") ||
      $(".bg-over-lay").hasClass("show-over-lay")
    ) {
      $(".group-box").removeClass("active");
      $(".bg-over-lay").removeClass("show-over-lay");
    }
    $("body").find(".showbox").removeClass("active");
    $("body").find(".dropdown").removeClass('active-item');
  });
  //DONGND:: close menu when click out
  $(document).click(function (event) {
    if (!$(event.target).closest(".group-box").length) {
      $("body").find(".group-box").removeClass("active");
      $("body").find(".bg-over-lay").removeClass("show-over-lay");
      $("body").find(".showbox").removeClass("active");
      $("body").find(".dropdown").removeClass('active-item');
    }
  });
});


$('.group-box .dropdown .caret').click(function (e) {
  e.preventDefault();
  $(this).closest('.dropdown').addClass('active-item')
});
$('.group-box .dropdown .back').click(function (e) {
  e.preventDefault();
  $(this).closest('.dropdown').removeClass('active-item')
});

$(document).ajaxComplete(function () {
  $(".p-reference .product-reference").html(
    $("#product-details .product-reference").clone()
  );
  $(".p-reference .product-quantities").html(
    $("#product-details .product-quantities").clone()
  );


});

$(function () {
  $(".icon__search").click(function (e) {
    e.stopPropagation();
    if ($(".box__search").hasClass("active")) {
      $(".box__search").removeClass("active");
      $(".bg-over-lay-2").removeClass("show-over-lay");
      $(".icon__search").removeClass("active");
      console.log(123);

    } else {
      $(".box__search").addClass("active");
      $(".bg-over-lay-2").addClass("show-over-lay");
      $(".icon__search").addClass("active");

    }
  });
  $(".search__col--close i").click(function (e) {
    e.stopPropagation();
    if (
      $(".box__search").hasClass("active") ||
      $(".bg-over-lay-2").hasClass("show-over-lay")
    ) {
      $(".box__search").removeClass("active");
      $(".bg-over-lay-2").removeClass("show-over-lay");
    }
    $("body").find(".icon__search").removeClass("active");
  });
  //DONGND:: close menu when click out
  $(document).click(function (event) {
    if (!$(event.target).closest(".box__search").length) {

      $("body").find(".box__search").removeClass("active");
      $("body").find(".bg-over-lay-2").removeClass("show-over-lay");
      $("body").find(".icon__search").removeClass("active");
    }
  });



});



$(document).ready(function () {
  function lastOfType(element) {
    $(element).find('.slick-slide').removeClass('last');
    let items = $(element).find('.slick-active')
    $(items[items.length - 1]).addClass('last');
  }


  $.map($('.ApSlick.products'), function (element, index) {
    lastOfType(element);
    $(element).on('afterChange', function () {
      lastOfType(this)
    });
  });

});



$(document).on("scroll", function () {
  if (window.scrollY > 10) {
    $(".header-top").addClass("header-scroll");
    $("#header").addClass("active-scroll");
  } else {
    $(".header-top").removeClass("header-scroll");
    $("#header").removeClass("active-scroll");
  }
});


$(document).ready(function () {
  function lastOfType(element) {

    $(element).find('.slick-slide').removeClass('last');
    let items = $(element).find('.slick-slide.slick-active')
    $(items[items.length - 1]).addClass('last');
  }


  $.map($('.ApSlick.products'), function (element, index) {
    lastOfType(element);
    $(element).on('afterChange', function () {
      lastOfType(this)
    });
  });

});


if ($('#horizontal_filters').length) {
  if (('#left-column #search_filters_wrapper').length) {
    search_filters_wrapper = $("#search_filters_wrapper").clone(1);
    $("#search_filters_wrapper").remove();
    $("#horizontal_filters").append(search_filters_wrapper);
  }
}


$(document).ready(function () {

  if (screen.width < 768) {
    if ($('#horizontal_filters').length) {
      if (('#horizontal_filters #search_filters_wrapper').length) {
        search_filters_wrapper = $("#search_filters_wrapper").clone(1);
        $("#search_filters_wrapper").remove();
        $("#left-column").append(search_filters_wrapper);
      }
    }
  }
});



$(window).resize(function () {
  if (screen.width < 768) {
    if ($('#horizontal_filters').length) {
      if (('#horizontal_filters #search_filters_wrapper').length) {
        search_filters_wrapper = $("#search_filters_wrapper").clone(1);
        $("#search_filters_wrapper").remove();
        $("#left-column").append(search_filters_wrapper);
      }
    }
  } else {
    movefacedsearchtotop();
  }
});

function updateSlick() {

  var arrEle = $('.js__slick--custom');

  $.map(arrEle, function (element, index) {
    var newRes = $(element).data('slick-option');
    $(element).find('.slick-slider').slick('slickSetOption', 'responsive', newRes, true);
  });

}


$(document).ready(function () {
  updateSlick()

});

$(document).ajaxComplete(function () {
  updateSlick()
});