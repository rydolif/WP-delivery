$(function() {


//------------------------------------form-------------------------------------------
  $('input[type="tel"]').mask('+0 (000) 000-00-00');

  jQuery.validator.addMethod("phoneno", function(phone_number, element) {
     return this.optional(element) || phone_number.match(/\+[0-9]{1}\s\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}/);
  }, "Введите Ваш телефон");

  $(".form").each(function(index, el) {
    $(el).addClass('form-' + index);

    $('.form-' + index).validate({
      rules: {
        phone: {
          required: true,
          phoneno: true
        },
        name: 'required',
      },
      messages: {
        name: "Введите Ваше имя",
        phone: "Введите Ваш телефон",
        mail: "Введите Вашу почту",
        textarea: "Введите сообщение",
      },
      submitHandler: function(form) {
        var t = {
          name: jQuery('.form-' + index).find("input[name=name]").val(),
          phone: jQuery('.form-' + index).find("input[name=phone]").val(),
          mail: jQuery('.form-' + index).find("input[name=mail]").val(),
          textarea: jQuery('.form-' + index).find("textarea[name=textarea]").val(),
          subject: jQuery('.form-' + index).find("input[name=subject]").val()
        };
        ajaxSend('.form-' + index, t);
      }
    });

  });

  function ajaxSend(formName, data) {
    jQuery.ajax({
      type: "POST",
      url: "/wp-content/themes/delivery/telegram.php",
      data: data,
      success: function() {
        $(".modal").popup("hide");
        $("#thanks").popup("show");
        setTimeout(function() {
          $(formName).trigger('reset');
        }, 2000);
      }
    });
  }

//------------------------------project-img-----------------------------
  $('.project__wrap .tabs__wrap').hide();
  $('.project__wrap .tabs__wrap--first').show();
  $('.project__wrap ul a:first').addClass('active');
  $('.project__wrap ul a').click(function(event){
    event.preventDefault();
    $('.project__wrap ul a').removeClass('active');
    $(this).addClass('active');
    $('.project__wrap .tabs__wrap').hide();
     var selectTab = $(this).attr('href');
    $(selectTab).fadeIn();
  });

//------------------------------project-slider-----------------------------
  $('.project__wrap').hide();
  $('.project__wrap:first').show();
  $('.project__slider .swiper-wrapper a:first').addClass('project__slide--active');
  $('.project__slider .swiper-wrapper a').click(function(event){
    event.preventDefault();
    $('.project__slider .swiper-wrapper a').removeClass('project__slide--active');
    $(this).addClass('project__slide--active');
    $('.project__wrap').hide();
    var selectTab = $(this).attr('href');
    $(selectTab).fadeIn();
  });

//------------------------------project-hero-----------------------------
  var swiper = new Swiper('.project__slider', {
    slidesPerView: 3,
    spaceBetween: 30,
    scrollbar: {
      el: '.project__scrollbar',
      hide: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      }
    }
  });

//------------------------------slider-hero-----------------------------
  var swiper = new Swiper('.reviews__slider', {
    slidesPerView: 2,
    spaceBetween: 30,
    scrollbar: {
      el: '.reviews__scrollbar',
      hide: true,
    },
    breakpoints: {
      992: {
        slidesPerView: 1,
        spaceBetween: 20
      }
    }
  });

//------------------------------гамбургер-----------------------------
  $('.hamburger').click(function() {
    $(this).toggleClass('hamburger--active');
    $('nav').toggleClass('nav--active');
    $('header').toggleClass('header--menu');
  });

//-------------------------------попандер---------------------------------------
  $('.modal').popup({transition: 'all 0.3s'});


//----------------------------------------fixed----------------------------------
  $(window).scroll(function(){
      if($(this).scrollTop()>20){
          $('.header').addClass('header--active');
      }
      else if ($(this).scrollTop()<20){
          $('.header').removeClass('header--active');
      }
  });

  if($(this).scrollTop()>20){
      $('.header').addClass('header--active');
  }
  
//-------------------------скорость якоря---------------------------------------
  $(".header__list").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top - 60}, 'slow', 'swing');
  //--------------------закриття меню при кліку на ссилку якоря--------------------
     // $('.hamburger').removeClass('hamburger--active');
     // $('.header-menu').removeClass('header-menu');
     // $('.header--active').removeClass('header--active');
     // $('.nav--active').removeClass('nav--active');

  });
  
});