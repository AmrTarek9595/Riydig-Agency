// Template Name: RYU
// Template URL: https://techpedia.co.uk/template/ryu
// Description: RYU - IT Solutions & Digial Agencies
// Version: 1.0.0
(function (window, document, $, undefined) {
  "use strict";
  var Init = {
    i: function (e) {
      Init.s();
      Init.methods();
    },
    s: function (e) {
      (this._window = $(window)),
        (this._document = $(document)),
        (this._body = $("body")),
        (this._html = $("html"));
    },
    methods: function (e) {
      Init.w();
      Init.BackToTop();
      Init.preloader();
      Init.colorMode();
      Init.salActivation();
      Init.intializeSlick();
      Init.modalVideo();
      Init.formValidation();
      Init.modalPopup();
      // Init.contactForm();
      Init.services();
      Init.team();
      Init.reviews();
      Init.portfolio();
      Init.faq();
      Init.textReveal();

      Init.countdownInit(".countdown", "2024/11/11");
    },
    w: function (e) {
      this._window.on("load", Init.l).on("scroll", Init.res);
    },
    textReveal: function () {
      if ($(".text-reveal").length) {
        let i = 0;
        const randomizeText = () => {
          const phrase = document.querySelector('.random-word');
          const compStyles = window.getComputedStyle(phrase);
          const animation = compStyles.getPropertyValue('animation');
          const animationTime = parseFloat(animation.match(/\d*[.]?\d+/)) * 900;

          const phrases = ['Innovation', 'Opportunity', 'Insights','Growth'];

          i = randomNum(i, phrases.length);
          const newPhrase = phrases[i];

          setTimeout(() => {
            phrase.textContent = newPhrase;
          }, 1000); // time to allow opacity to hit 0 before changing word
        }

        const randomNum = (num, max) => {
          let j = num;
          while (j === num) {
            j = Math.floor(Math.random() * max);
          }
          return j;
        }

        const getAnimationTime = () => {
          const phrase = document.querySelector('.random-word');
          const compStyles = window.getComputedStyle(phrase);
          let animation = compStyles.getPropertyValue('animation');

          // firefox support for non-shorthand property
          animation != "" ? animation : animation = compStyles.getPropertyValue('-moz-animation-duration');

          // webkit support for non-shorthand property
          animation != "" ? animation : animation = compStyles.getPropertyValue('-webkit-animation-duration');


          const animationTime = parseFloat(animation.match(/\d*[.]?\d+/)) * 1000;
          return animationTime;
        }

        randomizeText();
        setInterval(randomizeText, getAnimationTime());

      }

    },
    BackToTop: function () {
      var btn = $("#backto-top");
      $(window).on("scroll", function () {
        if ($(window).scrollTop() > 300) {
          btn.addClass("show");
        } else {
          btn.removeClass("show");
        }
      });
      btn.on("click", function (e) {
        e.preventDefault();
        $("html, body").animate(
          {
            scrollTop: 0,
          },
          "300"
        );
      });
    },
    preloader: function () {
      setTimeout(function () { $('#preloader').fadeOut('slow') }, 2000);
    },
    colorMode: function () {
      $('#changeColor').on('change', function () {

        if ($('body').hasClass('dark')) {
          $('body').removeClass('dark');
        } else {
          $('body').addClass('dark');
        }
      })
    },
    salActivation: function () {
      sal({
        threshold: 0.1,
        once: true,
      });
    },
    intializeSlick: function (e) {
      if ($(".slider").length) {
        $(".slider").slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          centerPadding: '0',
          autoplay: true,
          autoplaySpeed: 3000,
        })
      }
    },
    modalVideo: function () {
      $('#videoModal').on('hidden.bs.modal', function () {
        $("#videoModal iframe").attr("src", $("#videoModal iframe").attr("src"));
      });
    },
    formValidation: function () {
      if ($("form").length) {
        $("form").validate();
      }
    },
    modalPopup: function () {
      $('#menuToggle').on('click', function(){
        $('.modal-popup').animate({'top':'0'}, 'slow');
      })
      $('.close-btn').on('click', function(){
        $('.modal-popup').animate({'top':'-100%'}, 'slow');
      })
        $('.drop-btn').on('click', function(){
          var $this = $(this);
          var id =  $(this).attr('data-class');
          var check =  $(this).attr('data-check');
          if ($(window).width() >= 768 ) {
            if(check == 'true'){
              $('.drop-btn').removeClass('active');
              $('.submenu').animate({'right':'0'}, 'slow');
              $('.icon-slide').animate({'color':'#BABABA','rotate':'0deg'}, 'slow');
              $('.icon-slide').css('color','#BABABA');
              
              if ($(window).width() >= 1440) {
                $('.'+id).animate({'right':'-320px'}, 'slow');
              }else if($(window).width() >= 992 && $(window).width() < 1440) {
                $('.'+id).animate({'right':'-310px'}, 'slow');
              }else if($(window).width() >= 768 && $(window).width() < 992) {
                $('.'+id).animate({'right':'-230px'}, 'slow');
              }else if($(window).width() >= 768 && $(window).width() < 768) {
                $('.'+id).animate({'right':'0',}, 'slow');
              } 
  
              $(this).find('i').animate({'color':'#BF0A30','rotate':'45deg'}, 'slow');
              $(this).addClass('active');
              $(this).find('i').css('color','#BF0A30');
              $('.drop-btn').attr('data-check','true');
              $(this).attr('data-check','false');
  
            }else if(check == 'false'){
  
              $('.drop-btn').attr('data-check','false');
              $(this).attr('data-check','true');
              $(this).find('i').animate({'color':'#BABABA','rotate':'0deg'}, 'slow');
              $(this).find('i').css('color','#BABABA');
              $('.'+id).animate({'right':'0'}, 'slow');
              $(this).removeClass('active');
  
            }
            
          }

        });
    },
    contactForm: function () {
      $(".contact-form").on("submit", function (e) {
        e.preventDefault();
        if ($(".contact-form").valid()) {
          var _self = $(this);
          var _selector = _self.closest("input,textarea");
          _self.closest("div").find("input,textarea").removeAttr("style");
          _self.find(".error-msg").remove();
          _self
            .closest("div")
            .find('button[type="submit"]')
            .attr("disabled", "disabled");
          var data = $(this).serialize();
          $.ajax({
            url: "./assets/mail/contact.php",
            type: "post",
            dataType: "json",
            data: data,
            success: function (data) {
              $(".contact-form").trigger("reset");
              _self.find('button[type="submit"]').removeAttr("disabled");
              if (data.success) {
                document.getElementById("message").innerHTML =
                  "Email Sent Successfully";
              } else {
                document.getElementById("message").innerHTML =
                  "There is an error";
              }
              $("#message").show("slow");
              $("#message").slideDown("slow");
              setTimeout(function () {
                $("#message").slideUp("hide");
                $("#message").hide("slow");
              }, 3000);
            },
          });
        } else {
          return false;
        }
      });
    },
    services: function () {
      if ($('.services-1').length) {
        $('.service-box').on('click', function () {
          var count = $(this).data('count');
          
          $('.service-box').removeClass('show');
          $('.service-img').hide(600); // Shorter duration, stop any ongoing animations
          $('.service-box p').stop(true, true).fadeOut(300);
          $('.service-box .minus').hide('fast');
          $('.service-box .plus').show();
         
          $(this).addClass('show');
          $('img.s-' + count).stop(true, true).show(1200); // Shorter duration
          $('div.s-' + count + ' p').stop(true, true).show(600);
          $('div.s-' + count + ' .plus').hide();
          $('div.s-' + count + ' .minus').show();
        });
      }
        
      // if ($('.services-2').length) {
      //   $('.services-2 .services .service').on('click', function () {
      //     var count = $(this).data('count');
      //     $('.services-2 .content-box div').hide('slow');
      //     $('.services-2 .content-box div').removeClass('show');
      //     $('.services-2 .services .service').removeClass('show');

      //     $('.services-2 .content-box .s-' + count).show('slow');
      //     $(this).addClass('show');

      //   });
      // }
    },
//     services: function () {
//       const imageClasses = ['s-1', 's-2', 's-3', 's-4', 's-5', 's-6']; // Update according to your actual image classes
//       imageClasses.forEach(imgClass => {
//         const img = new Image();
//         img.src = $(`img.${imgClass}`).attr('src');
//       });
    
//       if ($('.services-1').length) {
//         $('.service-box').on('click', function () {
//           var count = $(this).data('count');
//           $('.service-box').removeClass('show');
//           $('.service-img').stop(true, true).slideUp(240); // Shorter duration, stop any ongoing animations
//           $('.service-box p').stop(true, true).slideUp(600);
//           $('.service-box .minus').fadeOut('fast');
//           $('.service-box .plus').show();
    
//           $(this).addClass('show');
//           $('img.s-' + count).stop(true, true).slideDown(200); // Shorter duration
//           $('div.s-' + count + ' p').stop(true, true).slideDown(300);
//           $('div.s-' + count + ' .plus').hide();
//           $('div.s-' + count + ' .minus').show();
//         });
//       }
//     }
// ,    
    team: function () {
      if ($('.team-section').length) {
        $('.members .single').on('click', function () {
          var count = $(this).data('count');
          $('.members .single').removeClass('show');
          $('.team-section .img-box').hide(900);//next
          $('.team-section .img-box').removeClass('show');

          $('.team-section .img-box.member-' + count).show(900);//back
          $(this).addClass('show');

        });
      }
    },
    reviews: function () {
      if ($('.review-section').length) {
        $('.review-section .box').on('click', function () {
          var count = $(this).data('count');
          $('.review-section .box').removeClass('show');
          $('.review-section .content div').hide('slow');
          $('.review-section .content div').removeClass('show');

          $('.review-section .content .client-' + count).show('slow');
          $(this).addClass('show');

        });
      }
    },
    portfolio: function () {
      if ($('.isotope-box').length) {
        var $box = $(".isotope-box").isotope({
          itemSelector: ".isotope-item"
        });
      
        // Check the URL for 'tech' or 'digital'
        const urlParams = new URLSearchParams(window.location.search);
        const filterTypes = urlParams.getAll('type');
      
        // Initial filter based on URL parameters
        // Initial filter based on URL parameters
        let x;
        fetch('/services_distinict')
  .then(response => response.json())
  .then(
    
    Response => {
      for(let x=0;x<Response.message.length;x++)
      {
        // console.log(Response.message[x])
        if (filterTypes.includes(Response.message[x].replace(/\s+/g, "_"))) 
          {
            
            const filterValue = '[data-type='+Response.message[x].replace(/\s+/g, "_")+']';
            $box.isotope({ filter: filterValue });
            $('.isotope-toolbar-btn[data-type='+Response.message[x].replace(/\s+/g, "_")+']').addClass('active');
          } 
      }
      
    }
  )

// if (filterTypes.includes('Website')) 
// {
//   const filterValue = '[data-type="Website"]';
//   $box.isotope({ filter: filterValue });
//   $('.isotope-toolbar-btn[data-type="Website"]').addClass('active');
// } 
// else if (filterTypes.includes('Mobile_Apps')) 
  
//   {
//   const filterValue = '[data-type="Mobile_Apps"]';
//   $box.isotope({ filter: filterValue });
//   $('.isotope-toolbar-btn[data-type="Mobile_Apps"]').addClass('active');
// }
// else if (filterTypes.includes('design')) 
//   {
//   const filterValue = '[data-type="design"]';
//   $box.isotope({ filter: filterValue });
//   $('.isotope-toolbar-btn[data-type="design"]').addClass('active');
//   }
        // Button click event handler
        $(".isotope-toolbar").on("click", "button", function() {
          var filterValue = $(this).attr("data-type");
          $(".isotope-toolbar-btn").removeClass("active");
          $(this).addClass("active");
        
          if (filterValue !== "*") {
            filterValue = '[data-type="' + filterValue + '"]';
            $box.isotope({ filter: filterValue });
          } else {
            // If the filter is "*", show all sections
            $box.isotope({ filter: "*" });
          }
        });
      }
    },
    faq: function () {
      if ($('.faq').length) {
        $('.q-box').on('click', function () {
          var count = $(this).data('count');
          $('.q-box').removeClass('show');
          $('.q-box .minus').hide();
          $('.q-box .plus').show();
          $('.content-box div').hide('slow');
          $('.content-box div').removeClass('show');

          $(this).addClass('show');
          $('.content-box .q-' + count).show('slow');
          $('div.q-' + count + ' .plus').hide();
          $('div.q-' + count + ' .minus').show();

        });
      }
    },
    countdownInit: function (countdownSelector, countdownTime) {
      var eventCounter = $(countdownSelector);
      if (eventCounter.length) {
        eventCounter.countdown(countdownTime, function (e) {
          $(this).html(
            e.strftime(
              '  <div class="box soft-shadow br-25">\
              <h2 class="fw-4 mb-0">%D</h2>\
              <p class="fs-31">Days</p>\
          </div>\
          <div class="box soft-shadow br-25">\
              <h2 class="fw-4 mb-0">%H</h2>\
              <p class="fs-31">Hours</p>\
          </div>\
          <div class="box soft-shadow br-25">\
              <h2 class="fw-4 mb-0">%M</h2>\
              <p class="fs-31">Minutes</p>\
          </div>\
          <div class="box soft-shadow br-25">\
              <h2 class="fw-4 mb-0">%S</h2>\
              <p class="fs-31">Second</p>\
          </div>\
           ' )
          );
        });
      }
    },
  }
  Init.i();
})(window, document, jQuery);
