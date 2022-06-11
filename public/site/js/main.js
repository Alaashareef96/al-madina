
new WOW().init();
$(document).ready(function () {
    $('.btn-nav').on('click', function () {
        $('.aside-bar-menu').css("right", 0).css("opacity", 1);
        $('html,body').css('overflow-y', 'hidden');
        $('.side-overlay').fadeIn();
    });
    $('.side-overlay,.close-menu').on('click', function () {
        $('.side-overlay').fadeOut();
        $('html,body').css('overflow-y', '');
        $('.aside-bar-menu').css("right", "-900px").css("opacity", 0);
    });
    $('.owl-1').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        rtl: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut'
    });
    $('.owl-2').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        rtl: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    $('.owl-3').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        rtl: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 450,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
            },
            1000: {
                items: 2,
            },
            1280: {
                items: 3
            }
        }
    });
    $('.owl-partainers').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        rtl: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    $('.owl-team').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        rtl: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
    $('.owl-mobile').owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        rtl: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $(document).bind('scroll', function (e) {
        // console.log('test');
        $('header .main-menu li a').each(function (index, tag) {
            var scrollTop = $(document).scrollTop();
            var anchors = $('body').find('section');
            for (var i = 0; i < anchors.length; i++) {
                if (scrollTop > $(anchors[i]).offset().top - 100 && scrollTop < $(anchors[i]).offset().top + $(anchors[i]).height() - 100) {
                    $('.main-menu  li a[href="#' + $(anchors[i]).attr('id') + '"]').addClass('active');
                } else {
                    $('.main-menu  li a[href="#' + $(anchors[i]).attr('id') + '"]').removeClass('active');
                }
            }



        });
    })
    $(window).on('load', function () {
        // var scrollTop = $(document).scrollTop();
        // $(window).scrollTop(scrollTop);
        // console.log(scrollTop);
        $('ul li a , footer .grid-container a').on('click', function () {
            $([document.documentElement, document.body]).animate({
                scrollTop: $($(this).attr('href')).offset().top - 20,
            }, 100);
        });
    });
    const site_url = "http://localhost:8000/al-madina/";

    $("body").on("keyup", "#search", function(){

        let text = $("#search").val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if (text.length > 0) {
        $.ajax({
            data: {search: text},
            url : site_url + "search-product",
            method : 'post',
            beforSend : function(request){
                return request.setReuestHeader('X-CSRF-Token',("meta[name='csrf-token']"))

            },
            success:function(result){
                $("#searchProducts").html(result);
            }

        }); // end ajax
        }
        if (text.length < 1 ) $("#searchProducts").html("");


    }); // end one


});
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
$('.filter').on('click', function () {
    $(this).hide();
    $(this).siblings('span').toggle();
    $(this).closest('.top').siblings('.bottom').slideToggle();
});
$(window).on('resize', function () {
    $('.show,.hide,.bottom').attr('style', function (i, style) {
        return style && style.replace(/display[^;]+;?/g, '');
    });

});
$('.main').on('click', function () {
    $(this).siblings('.links').fadeToggle();
});
$('.copylink').on('click', function (e) {
    e.preventDefault();
    $('.main-copylink').click();
    $(this).closest('.links').fadeOut();
});
// $(document).on('click', function (e) {
//     if ((!$(e.target).parent().hasClass('share')) && (!$(e.target).parent().hasClass('main'))) {
//         $('.links').fadeOut();
//     }
// });
$('.main-copylink').on('click', function (e) {
    e.preventDefault();
    navigator.clipboard.writeText($(this).attr('href'));
});
$(document).on('click', '.upload-img figure', function () {
    $('#upload-image').click();
    $('#upload-image').on('change', function (e) {
        previewFile($(this));
        $('.upload-img figure').children().addClass('d-none');
        $(this).children('i').addClass('d-none');
    });
})
function previewFile(input) {
    var file = input.get(0).files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function () {
            $("#preview").attr("src", reader.result);
            $('#preview').removeClass('d-none');
        }
        reader.readAsDataURL(file);
    }
}
$('.upload-file').on('click',function(){
    $(this).siblings('.put-file').click();
});
if($('.datepicker').length > 0){
    $('.datepicker').datepicker();
}


