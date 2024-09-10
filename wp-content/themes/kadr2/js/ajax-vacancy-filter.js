jQuery(document).ready(function ($) {
  $(".category__button").on("click", function () {
    var id = $(this).data("id");
    var mayThis = $(this);
    var data = {
      action: "load_posts_by_ajax",
      security: blog.security,
      id: id,
      beforeSend: function (xhr) {
        $(".main-page-vacancy-list__vacancy").empty();
        $(".main-page-vacancy-list__vacancy").append(
          "<p>Загрузка вакансий...</p>"
        ); // change the button text, you can also add a preloader image
      },
    };
    $(mayThis).addClass("active");
    $(".category__button").not(mayThis).removeClass("active");
    $.post(blog.ajaxurl, data, function (response) {
      if ($.trim(response) != "") {
        $(".main-page-vacancy-list__vacancy").empty();
        $(".main-page-vacancy-list__vacancy").append(response);
      }
    });
    if (
      $(".main-page-vacancy-list__category").has("li.active + .child_list")
        .length > 0
    )
      $(".main-page-vacancy-list__category").addClass("active");
    else {
      $(".main-page-vacancy-list__category").removeClass("active");
    }
  });
  $(".category-child__button").on("click", function () {
    var id = $(this).data("id");
    var mayThis = $(this);
    var data = {
      action: "load_posts_by_ajax",
      security: blog.security,
      id: id,
      beforeSend: function (xhr) {
        $(".main-page-vacancy-list__vacancy").empty();
        $(".main-page-vacancy-list__vacancy").append(
          "<p>Загрузка вакансий...</p>"
        ); // change the button text, you can also add a preloader image
      },
    };
    $(mayThis).addClass("active");
    $(".category-child__button").not(mayThis).removeClass("active");
    $.post(blog.ajaxurl, data, function (response) {
      if ($.trim(response) != "") {
        $(".main-page-vacancy-list__vacancy").empty();
        $(".main-page-vacancy-list__vacancy").append(response);
      }
    });
    if (
      $(".main-page-vacancy-list__category").has("li.active + .child_list")
        .length > 0
    )
      $(".main-page-vacancy-list__category").addClass("active");
    else {
      $(".main-page-vacancy-list__category").removeClass("active");
    }
  });

  var $range = $(".js-range-slider"),
    $inputFrom = $(".js-input-from"),
    $inputTo = $(".js-input-to"),
    instance,
    min = 100,
    max = 5000,
    from = 0,
    to = 0;

  $range.ionRangeSlider({
    skin: "flat",
    type: "double",
    min: min,
    max: max,
    from: 100,
    to: 5000,
    onStart: updateInputs,
    onChange: updateInputs,
	  
  });
  instance = $range.data("ionRangeSlider");

  function updateInputs(data) {
    from = data.from;
    to = data.to;

    $inputFrom.prop("value", from);
    $inputTo.prop("value", to);
  }

  $inputFrom.on("input", function () {
    var val = $(this).prop("value");

    // validate
    if (val < min) {
      val = min;
    } else if (val > to) {
      val = to;
    }

    instance.update({
      from: val,
    });
  });

  $inputTo.on("input", function () {
    var val = $(this).prop("value");

    // validate
    if (val < from) {
      val = from;
    } else if (val > max) {
      val = max;
    }

    instance.update({
      to: val,
    });
  });

  $("#vacancies_filter").submit(function () {
    var vacancies_filter = $(this);
    var page_number = "1";
    var data = vacancies_filter.serialize();
    var salary_min = $(".js-range-slider").data().from;
    var salary_max = $(".js-range-slider").data().to;
    data =
      data +
      "&page-number=" +
      page_number +
      "&salary-min=" +
      salary_min +
      "&salary-max=" +
      salary_max;
    $.ajax({
      url: ajaxurl, // обработчик
      data: data, // данные
      type: "POST", // тип запроса
      beforeSend: function (xhr) {
        vacancies_filter.find("button").text("Загружаю..."); // изменяем текст кнопки
        $(".vacancies__response").empty();
        $(".vacancies__response").append("<p>Загрузка вакансий</p>");
      },
      success: function (data) {
        vacancies_filter.find("button").text("ИСКАТЬ"); // возвращаеи текст кнопки
        $(".vacancies__response").html(data);
      },
    });
    return false;
  });
  var filter_items = $(".filter-item").not(".filter-item.specialization");
  $.each(filter_items, function () {
    $(this)
      .find(".filter-item__title")
      .click(function () {
        $(this).parent().toggleClass("active");
        if (document.documentElement.clientWidth > 767) {
          active_filter_items = $(".filter-item").not($(this).parent());
          $.each(active_filter_items, function () {
            $(this).removeClass('active');
          });
        };
        
      });
    var filter_list_clear = $(this).find(".filter-list-clear");
    filter_list_clear.click(function () {
      if($(this).parent().parent() == $('.filter-item.salary')) {
        
      }
      $(this).parent().children("input").prop("checked", false);
      $(this).parent().find(".js-range-slider").data("ionRangeSlider").reset();
      $(this).parent().find(".js-range-slider").data("ionRangeSlider").updateInputs;
    });
    });
  
  $(".filter-toggle").click(function () {
    $(".filters-block").toggleClass("active");
  });

//   $("#check-out-our-offers .page-numbers").on("click", function (e) {
//     var page_number = $(this).text();
//     var vacancies_filter = $("#vacancies_filter");
//     e.preventDefault();
// 	var salary_min = $(".js-range-slider").data().from;
//     var salary_max = $(".js-range-slider").data().to;
//     var id = $(this).attr("href"),
//       top = $(id).offset().top;
//     $("body,html").animate({ scrollTop: top }, 100);
//     var data = vacancies_filter.serialize();
//     data = data + "&page-number=" + page_number +
// 	"&salary-min=" +
// 	salary_min +
// 	"&salary-max=" +
// 	salary_max;
//     $.ajax({
//       url: ajaxurl, // обработчик
//       data: data, // данные
//       type: "POST", // тип запроса
//       beforeSend: function (xhr) {
//         vacancies_filter.find("button").text("Загружаю..."); // изменяем текст кнопки
//         $(".vacancies__response").empty();
//         $(".vacancies__response").append("<p>Загрузка вакансий</p>");
//       },
//       success: function (data) {
//         vacancies_filter.find("button").text("ИСКАТЬ"); // возвращаеи текст кнопки
//         $(".vacancies__response").empty();
//         $(".vacancies__response").append(data);
//       },
//     });
//   });
//   var $form_vacancy_name = $('.vacancy-info__title').find('h1').text();
//   $('.form-vacancy-name').text($form_vacancy_name);
});