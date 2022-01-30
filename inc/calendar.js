jQuery(function ($) {
    var slide = $('.swiper-calculator .swiper-slide');
    var names = [];
    $.each(slide,function(index,value){
        names.push($(this).attr('data-title'))

    });

    console.log(names);

    var swiper = new Swiper(".swiper-calculator", {
        spaceBetween: 25,
        speed: 1000,
        slidesPerView: 1,
        navigation: {
          nextEl: ".calendar__btn-next",
          prevEl: ".calendar__btn-prev",
        },
    	pagination: {
            el: '.pagination',
            clickable: true,
            renderBullet: function (index, className) {
              return '<span class="calendar__cell text text--white text--w-light ' + className + '">' + (names[index*3]) + '-' +  (names[index*3+2]) + '</span>';
            },
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                slidesPerGroup: 1,
                pagination: {
                    renderBullet: function (index, className) {
                      return '<span class="calendar__cell text text--white text--w-light ' + className + '">' + (names[index]) + '</span>';
                    },
                },
            },
            576: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                pagination: {
                    renderBullet: function (index, className) {
                      return '<span class="calendar__cell text text--white text--w-light ' + className + '">' + (names[index*2]) + '-' +  (names[index*2+1]) + '</span>';
                    },
                },
            },
            768: {
                slidesPerView: 3,
                slidesPerGroup: 3,
            }

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
      var pupupClose = $('.filter-popup__close-svg');
      if (e.target!=popup[0]&&popup.has(e.target).length === 0) {
            $('.filter-popup').fadeOut();
      }
      pupupClose.on('click', function() {
            $('.filter-popup').fadeOut();
      })
   })

   function dataFilterCat(){
       var cats = [];
       $(".filter-popup__field.tax input:checked").each(function() {
           var cat = $(this).val();
           cats.push(cat);
       });
       return cats;
   }

   function dataFilterTime(){
       var times = [];
       $(".filter-popup__field.time input:checked").each(function() {
           var time = $(this).val();
           times.push(time);
       });
       return times;
   }

    function dataYear() {
        var year;
        if ($('.filter-popup__select').val() != 1) {
            year = $('.filter-popup__select').val();
        }
        return year;
    }
    $('.filter-popup__clear').on('click', function() {
       $('.calendar__popup-event').empty();
       $('.filter-popup__select option[value=1]').prop('selected', true);
       $('#time-frame').fadeIn();
       $(".filter-popup input[type=checkbox]").prop('checked', false);
        get_event_day();
    })

    $('.filter-popup__btn').on('click', function(){
       $('.calendar__popup-event').empty();
       get_event_day();
    })

    $('.select__item-full').on('click', function() {
        $('.select__item').removeClass('choice');
        $('#time-frame').fadeIn();
    })

     $('.filter-popup__select').on('change', function() {
        if ($(this).val() == 1) {
            $('#time-frame').fadeIn();
        } else {
            $('#time-frame').fadeOut();
            $(".filter-popup #time-frame input[type=checkbox]").prop('checked', false);
        }
     })


    function get_event_day()
    {
        var ajax_url = mba.ajax_url;
        $.ajax({
            type: 'GET',
            url: ajax_url,
            data: {
              action: 'get_event_day',
              year: dataYear,
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
                    spaceBetween: 25,
                    speed: 1000,
                    slidesPerView: 1,
                    navigation: {
                      nextEl: ".calendar__btn-next",
                      prevEl: ".calendar__btn-prev",
                    },
                	pagination: {
                        el: '.pagination',
                        clickable: true,
                        renderBullet: function (index, className) {
                          return '<span class="calendar__cell text text--white text--w-light ' + className + '">' + (names[index*3]) + '-' +  (names[index*3+2]) + '</span>';
                        },
                    },
                    breakpoints: {
                        576: {
                            slidesPerView: 2,
                            slidesPerGroup: 2,
                        },
                        768: {
                            slidesPerView: 3,
                            slidesPerGroup: 3,
                        }
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








    $('.filter-popup__past-btn').on('click', function() {
         get_past_event()
    })


    $(document).on("click",".events__result-past .page-numbers",function(e){
		e.preventDefault();
		var url = $(this).attr('href');
		var paged = url.split('&paged=');
		if(~url.indexOf('&paged=')){
			paged = url.split('&paged=');
		} else {
			paged = url.split('/page/');
		}
		get_past_event(paged[1]);
	});


    function get_past_event(paged)
    {
       var ajax_url = mba.ajax_url;
       $.ajax({
           type: 'GET',
           url: ajax_url,
           data: {
             action: 'get_past_event',
             dataFilterCat: dataFilterCat,
             paged: paged,
           },
           beforeSend: function ()
           {
           },
           success: function(data)
           {

               $('.events__result').html(data)
           },
           error: function()
           {

           },
       });
    }


    $('.filter-popup__future-btn').on('click', function() {
         get_future_event()
    })


    $(document).on("click",".events__result-future .page-numbers",function(e){
		e.preventDefault();
		var url = $(this).attr('href');
		var paged = url.split('&paged=');
		if(~url.indexOf('&paged=')){
			paged = url.split('&paged=');
		} else {
			paged = url.split('/page/');
		}
		get_future_event(paged[1]);
	});


    function get_future_event(paged)
    {
       var ajax_url = mba.ajax_url;
       $.ajax({
           type: 'GET',
           url: ajax_url,
           data: {
             action: 'get_future_event',
             dataFilterCat: dataFilterCat,
             paged: paged,
           },
           beforeSend: function ()
           {
           },
           success: function(data)
           {

               $('.events__result').html(data)
           },
           error: function()
           {

           },
       });
    }
});
