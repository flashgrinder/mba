jQuery(function ($) {
    var slide = $('.swiper-calculator .swiper-slide');
    var names = [];
    $.each(slide,function(index,value){
        names.push($(this).attr('data-title'))

    });

    var swiper = new Swiper(".swiper-calculator", {
        slidesPerView: 3,
        spaceBetween: 25,
        slidesPerGroup: 3,
        speed: 1000,
        navigation: {
          nextEl: ".calendar__btn-next",
          prevEl: ".calendar__btn-prev",
        },
    	pagination: {
            el: '.pagination',
            clickable: true,
            renderBullet: function (index, className) {
              return '<span class="text text--white text--w-light ' + className + '">' + (names[index*3]) + '-' +  (names[index*3+2]) + '</span>';
            },
        }
    });

    $('.calendar__day.event span').on('click', function() {
        $('.calendar__event-popup').fadeOut();
        idPosts = $(this).attr('data-id');
        $(this).addClass('active');
        $('.calendar__day.event span').not(this).removeClass('active');
         get_event()
    })

    function get_event()
    {

        var ajax_url = mba.ajax_url;
        $.ajax({
            type: 'GET',
            url: ajax_url,
            data: {
              action: 'get_event',
              idPosts: idPosts,
            },
            beforeSend: function ()
            {
              // $('#result-razdel').css("opacity" , "0.4");
            },
            success: function(data)
            {
                $('.calendar__popup-event').html(data).fadeIn();
                $('.calendar__popup-cross').on('click', function() {
                    $('.calendar__popup-event').fadeOut();
                })
            },
            error: function()
            {

            },
        });
   }

   $('.calendar__btn-filter').on('click', function() {
       $('.filter-popup').css("display", "flex").hide().fadeIn();
   })



   $(document).mouseup(function(e) {
      var popup = $('.filter-popup__wrapp');
      if (e.target!=popup[0]&&popup.has(e.target).length === 0) {
          $('.filter-popup').fadeOut();
      }
   })

   function dataFilterCat(){
       var cats = [];
       $(".filter-popup__input.tax input:checked").each(function() {
           var cat = $(this).val();
           cats.push(cat);
       });
       return cats;
   }

   function dataFilterTime(){
       var times = [];
       $(".filter-popup__input.time input:checked").each(function() {
           var time = $(this).val();
           times.push(time);
       });
       return times;
   }

    $('.filter-popup__clear').on('click', function() {
       $('.calendar__popup-event').empty();
       $(".filter-popup input[type=checkbox]").prop('checked', false);
        get_event_day();
    })

    $('.filter-popup__btn').on('click', function(){
       $('.calendar__popup-event').empty();
       get_event_day();
    })




    function get_event_day()
    {
        var ajax_url = mba.ajax_url;
        $.ajax({
            type: 'GET',
            url: ajax_url,
            data: {
              action: 'get_event_day',
              dataFilterCat: dataFilterCat,
              dataFilterTime: dataFilterTime,
            },
            beforeSend: function ()
            {
            },
            success: function(data)
            {

                $('#calendar__content').html(data);
                var slide = $('.swiper-calculator .swiper-slide');
                var names = [];
                $.each(slide,function(index,value){
                    names.push($(this).attr('data-title'))

                });
                var swiper = new Swiper(".swiper-calculator", {
                    slidesPerView: 3,
                    spaceBetween: 25,
                    slidesPerGroup: 3,
                    speed: 1000,
                    navigation: {
                      nextEl: ".calendar__btn-next",
                      prevEl: ".calendar__btn-prev",
                    },
                	pagination: {
                        el: '.pagination',
                        clickable: true,
                        renderBullet: function (index, className) {
                          return '<span class="' + className + '">' + (names[index*3]) + '-' +  (names[index*3+2]) + '</span>';
                        },
                    }
                });
                $('.filter-popup').fadeOut();
                $('.calendar__day.event span').on('click', function() {
                    $('.calendar__event-popup').fadeOut();
                    idPosts = $(this).attr('data-id');
                    $(this).addClass('active');
                    $('.calendar__day.event span').not(this).removeClass('active');
                    get_event()
                })
            },
            error: function()
            {

            },
        });
   }


});
