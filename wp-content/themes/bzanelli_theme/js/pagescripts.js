lightbox.option({
      'resizeDuration': 300,
      'wrapAround': true
    });


/* ---- Home Page Full page carousel  ---- */

// var $item = jQuery('.carousel .item');
// var $wHeight = jQuery(window).height();
// $item.eq(0).addClass('active');
// $item.height($wHeight);
// $item.addClass('full-screen');

// jQuery('.carousel img').each(function() {
//   var $src = jQuery(this).attr('src');
//   var $color = jQuery(this).attr('data-color');
//   jQuery(this).parent().css({
//     'background-image' : 'url(' + $src + ')',
//     'background-color' : $color
//   });
//   jQuery(this).remove();
// });

// jQuery(window).on('resize', function (){
//   $wHeight = jQuery(window).height();
//   $item.height($wHeight);
// });

jQuery('.carousel').carousel({
  interval: 6000,
  pause: "false"
});

//$('.carousel').carousel();




/* ---- Work Page Image Sorting & filter - Isotope ---- */
jQuery(document).ready(function(){

  var $grid = jQuery('.grid').isotope({
      layoutMode: 'fitRows',
      //transitionDuration: '0.8s',
      hiddenStyle: {
        opacity: 0
      },
      visibleStyle: {
        opacity: 1
      },
      filter: function(){
        var category = jQuery(this).find('.item').attr('data-category');

      }
  });

  jQuery('.filter-button-group li').on('click', function() {
      var filterValue = jQuery(this).attr('data-filter');
      $grid.isotope({
          filter: filterValue
      });
  });
  jQuery(".filter-button-group").each(function(t, e) {
      var i = jQuery(e);
      i.on("click", "li", function() {
          i.find(".active").removeClass("active");
          jQuery(this).addClass("active");
      });
  });
  jQuery('li.active').trigger('click');
});




/* ---- contact form ---- */
$("#contactForm").validator().on("submit", function(event) {
    if (event.isDefaultPrevented()) {
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        event.preventDefault();
        submitForm();
    }
});

function submitForm() {
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
    $.ajax({
        type: "POST",
        url: "php/contact.php",
        data: "name=" + name + "&email=" + email + "&msg_subject=" + msg_subject +
            "&message=" + message,
        success: function(text) {
            if (text == "success") {
                formSuccess();
            } else {
                formError();
                submitMSG(false, text);
            }
        }
    });
}

function formSuccess() {
    $("#contactForm")[0].reset();
    submitMSG(true, "Message Submitted!")
}

function formError() {
    $("#contactForm").removeClass().addClass('shake animated').one(
        'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function() {
            $(this).removeClass();
        });
}

function submitMSG(valid, msg) {
    if (valid) {
        var msgClasses = "h4 text-success";
    } else {
        var msgClasses = "h4 text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}

/* ---- our work gallery ---- */
$('#work').magnificPopup({
    delegate: 'a.zoom',
    type: 'image',
    fixedContentPos: false,
    removalDelay: 300,
    mainClass: 'mfp-fade',
    gallery: {
        enabled: true,
        preload: [0,2]
    }
});

/* ---- popup image ---- */
$('.popup-img').magnificPopup({
    type: 'image',
    removalDelay: 300,
    mainClass: 'mfp-fade'
});

/* ---- popup video ---- */
$(document).ready(function() {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});

/* ---- nav smooth scroll ---- */
$(document).ready(function() {
    $('.scroll-link').on('click', function(event) {
        event.preventDefault();
        var sectionID = $(this).attr("data-id");
        scrollToID('#' + sectionID, 750);
    });
    $('.scroll-top').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 1200);
    });
});

/* ---- navbar offset ---- */
function scrollToID(id, speed) {
    var offSet = 69;
    var targetOffset = $(id).offset().top - offSet;
    $('html,body').animate({
        scrollTop: targetOffset
    }, speed);
}

/* ---- navbar adjust on scroll ---- */
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 70) {
        $('.navbar').addClass('navbar-switch')
    } else {
        $('.navbar').removeClass('navbar-switch')
    }
});


/* ---- animations ---- */
if (typeof sr == 'undefined') {
    window.sr = ScrollReveal({
        duration: 1600,
        delay: 50
    });
}
Royal_Preloader.config({
    onComplete: function () {
        triggerReveals();
    }
});
function triggerReveals() {
    sr.reveal('.bottomReveal', {
        origin: 'bottom'
    }).reveal('.leftReveal', {
        origin: 'left'
    }).reveal('.rightReveal', {
        origin: 'right'
    }).reveal('.topReveal', {
        origin: 'top'
    });

    sr.reveal('.rotateBottomReveal', {
        origin: 'bottom',
        rotate: { x: 90 }
    }).reveal('.rotateLeftReveal', {
        origin: 'left',
        rotate: { x: 90 }
    }).reveal('.rotateRightReveal', {
        origin: 'right',
        rotate: { x: 90 }
    }).reveal('.rotateTopReveal', {
        origin: 'top',
        rotate: { x: 90 }
    })

    sr.reveal('.scaleReveal', {
        origin: 'top',
        scale: 0.6
    });
}

/* ---- close mobile nav on click ---- */
$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
        $(this).collapse('hide');
    }
});

/* ---- rotater text ---- */
var current = 1;
var height = jQuery('.ticker').height();
var numberDivs = jQuery('.ticker').children().length;
var first = jQuery('.ticker h2:nth-child(1)');
setInterval(function() {
    var number = current * -height;
    first.css('margin-top', number + 'px');
    if (current === numberDivs) {
        first.css('margin-top', '0px');
        current = 1;
    } else current++;
}, 2500);

/* ---- nav main link hover dropdown ---- */
if ( $(window).width() >= 767) {
    $('.dropdown').hover(function(){
        $('.dropdown-toggle', this).trigger('click');
    });
}
