$( document ).ready(function() {
    const DATE_TARGET = new Date('09/21/2022 0:01 AM');

    const SPAN_DAYS = document.querySelector('span#days');
    const SPAN_HOURS = document.querySelector('span#hours');
    const SPAN_MINUTES = document.querySelector('span#minutes');
    const SPAN_SECONDS = document.querySelector('span#seconds');

    const MILLISECONDS_OF_A_SECOND = 1000;
    const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
    const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
    const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24;

    function updateCountdown() {
        
        const NOW = new Date()
        const DURATION = DATE_TARGET - NOW;
        const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
        const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
        const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
        const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
        
        SPAN_DAYS.textContent = REMAINING_DAYS;
        SPAN_HOURS.textContent = REMAINING_HOURS;
        SPAN_MINUTES.textContent = REMAINING_MINUTES;
        SPAN_SECONDS.textContent = REMAINING_SECONDS;
    }
  
    if (window.location.pathname == '/') {
      updateCountdown();
      setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
    }
    
    if (window.location.pathname == '/membresias/') {
      $(".Ticket_info_type").attr("data-text","rojopic");
      $(".Ticket_info_title").attr("data-text","rojopic");
      $(".Tickets_container.rojopic").css("display", "flex");
    }

    $(".Menu_ppal_mobile").hide();
    console.log("oculto...");

    $(".Menu__button").click(function(){
        $(".Menu_ppal_mobile").toggle();
         if ( $(".middle").hasClass('desappear')) {
            $(".first").removeClass('rotate_left');
            $(".middle").removeClass('desappear');
            $(".last").removeClass('rotate_right');
            
         }
         else {
            $(".first").addClass('rotate_left');
            $(".middle").addClass('desappear');
            $(".last").addClass('rotate_right');
         }
    });

    $(".Masters_home_slider").slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    $(".Media_partners").slick({
      slidesToShow: 5,
      slidesToScroll: 5,
      infinite: true,
      centerMode: true,
      variableWidth: true,
      autoplay: true,
      autoplaySpeed: 500,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    $(".Membership_content").slick({
      centerMode: true,
      slidesToShow: 1,
      infinite: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });
    // $("#owl-demo").owlCarousel({
    //   items : 3, //10 items above 1000px browser width
    //   itemsDesktop : [1000,3], //5 items between 1000px and 901px
    //   itemsDesktopSmall : [900,3], // betweem 900px and 601px
    //   itemsTablet: [600,2], //2 items between 600 and 0;
    //   itemsMobile : [480,2], // itemsMobile disabled - inherit from itemsTablet option
    //   margin: 10,
    //   autoWidth:true,
    //   nav: true,
    //   navText : ["<img src='http://localhost/exma/wp-content/themes/exma_theme/assets/images/nav_left.png' />","<i class='fa fa-chevron-right'></i>"]
    // });
})

function sendRegister(firstname, email, tel, pais){   
    console.log("entro"); 
    firstname=document.getElementById(firstname);
    email=document.getElementById(email);
    tel=document.getElementById(tel);
    pais=document.getElementById(pais);
  
    const firstname_val = firstname.value;
    const email_val = email.value;
    const tel_val = tel.value;
    const pais_val = pais.value;
  
    fetch('https://restapi.fromdoppler.com/accounts/strivino%40exmaglobal.com/lists/28515565/subscribers/?api_key=2639D24BA589B607B4B5A4798586F924', {
      method: 'POST',
      body: JSON.stringify({ 
        "email": email_val,
        /*"fields": [
          {
            "name": "FIRSTNAME",
            "value": firstname_val,
          },
          {
            "name": "telefono",
            "value": tel_val,
          },
          {
            "name": "ciudad",
            "value": pais_val,
          }
        ],*/
        "status": "active", 
        "canBeReactivated": true, 
        "isBeingReactivated": true, 
      }),
      headers: {
          "Content-type": "application/json",
      }
    })
    .then(response => response.json())
    .then(json => console.log(json))
  }

  function filterPillar(pillar) {
    $(".Speaker_info").css("display", "none");
    $(".Speaker_info." + pillar).css("display", "flex");
  }

  function filterPillarAll() {
    $(".Speaker_info").css("display", "flex");
  }

  function filterTicket(ticket) {
    $(".Ticket_info_type").removeAttr("data-text");
    $(".Ticket_info_title").removeAttr("data-text");
    $(".Ticket_info_type").attr("data-text",ticket);
    $(".Ticket_info_title").attr("data-text",ticket);
    $(".Tickets_container").css("display", "none");
    $(".Tickets_container." + ticket).css("display", "flex");
  }

  function openDay(evt, day) {
    var i, dayContent, dayButton;
    dayContent = document.getElementsByClassName("tabContent");
    for (i = 0; i < dayContent.length; i++) {
      dayContent[i].style.display = "none";
    }
    dayButton = document.getElementsByClassName("tabButton");
    for (i = 0; i < dayButton.length; i++) {
      dayButton[i].className = dayButton[i].className.replace(" active", "");
    }
    document.getElementById(day).style.display = "flex";
    evt.currentTarget.className += " active";
  }