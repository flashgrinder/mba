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
        slidesPerColumn: 1,
        // slidesPerColumnFill: 'row',
        speed: 1000,
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
                slidesPerView: 3,
                slidesPerColumn: 3,
            },
            576: {
                slidesPerView: 3,
                slidesPerColumn: 3,
            },
            768: {
                slidesPerView: 1,
                slidesPerColumn: 1,
            },
            1024: {
                slidesPerView: 3,
                slidesPerColumn: 1
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
        if ($('.select__item.choice').length) {
            year = $('.select__item.choice').attr('data-year').trim()
        }
        return year;
    }
    $('.filter-popup__clear').on('click', function() {
       $('.calendar__popup-event').empty();
       $('.select__item').removeClass('choice');
       $('.select__current').html('Все года');
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

     $('.select__item-year').on('click', function() {
         $(this).addClass('choice');
         $('#time-frame').fadeOut();
         $(".filter-popup #time-frame input[type=checkbox]").prop('checked', false);
         $('.select__item').not(this).removeClass('choice');
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
                    slidesPerView: 3,
                    spaceBetween: 25,
                    slidesPerGroup: 3,
                    slidesPerColumnFill: 'row',
                    speed: 1000,
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
                            slidesPerView: 3,
                            slidesPerColumn: 3,
                        },
                        576: {
                            slidesPerView: 3,
                            slidesPerColumn: 3,
                        },
                        768: {
                            slidesPerView: 3,
                            slidesPerColumn: 3,
                        },
                        1024: {
                            slidesPerView: 3,
                            slidesPerColumn: 3
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

    let select = function () {
        let selectHeader = document.querySelectorAll('.select__header');
        let selectItem = document.querySelectorAll('.select__item');

        selectHeader.forEach((item) => {
            item.addEventListener('click', selectToggle);
        });

        selectItem.forEach((item) => {
            item.addEventListener('click', selectChoose);
        });

        function selectToggle() {
            this.parentElement.classList.toggle('is-active');
        }

        function selectChoose() {

            let text = this.innerHTML,
            select = this.closest('.select');

            currentText = select.querySelector('.select__current');
            currentText.innerHTML = text;
            select.classList.remove('is-active');
        }
   };
   select();






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
