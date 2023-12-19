const action_url = 'http://127.0.0.1:8000/';

$('body').on('click','header .open-left-nav',function(e){
    e.preventDefault();
    $('header .left-nav-bar').css('margin-right','0%');
    $('header .left-nav-drawer').show();
})
$('body').on('click','header .left-nav-drawer',function(e){
    e.preventDefault();
    $('header .left-nav-drawer').hide();
    $('header .left-nav-bar').css('margin-right','-350%');
})
 
// $(".nav-lists .top-nav-items").mouseenter(function(){
//     $(this).find(".first").stop(true, true).slideDown(300);
//   });
//   // Close mega menu on mouse leave
//   $(".nav-lists .top-nav-items").mouseleave(function(){
//     $(this).find(".first").stop(true, true).slideUp(300);
//   });
$(".first li").mouseenter(function(){
    $('.first li').find(".dropdown-menu").removeClass('show');
    $(this).find(".first").addClass('show');
    $(this).find(".dropdown-menu").addClass('show');
});

$('.contact-us-page form').validate({
    rules:{
        required:true,
        cus_email:{
            email:true
        },cus_phone:{
            digits:true,
            minlength:10
        },cus_name:{
            minlength:3
        }
    },submitHandler: function(form,e) {
        e.preventDefault();
        $('.contact-us-page .spinner-border').show();
        const con_cus_name = $('.contact-form input[name=cus_name]').val();
        const con_cus_email = $('.contact-form input[name=cus_email]').val();
        const con_cus_phone = $('.contact-form input[name=cus_phone]').val();
        const con_cus_subject = $('.contact-form input[name=cus_subject]').val();
        const con_cus_message = $('.contact-form textarea[name=cus_message]').val();
        var token = $('.contact-form input[name=_token]').val();
        $.ajax({
            method : 'POST',
            url : action_url+'contact-form-submit',
            data : {con_cus_name:con_cus_name,con_cus_email:con_cus_email,con_cus_phone:con_cus_phone,con_cus_subject:con_cus_subject,con_cus_message:con_cus_message},
            headers: {
                'X-CSRF-TOKEN': token
            },
            success :function (response) {
                $('.contact-us-page .spinner-border').hide();
                $('.contact-us-page .form-message').html(response);
            }
        })
    }
})

$('.what-wedo-dropdown ul').click(function (e) {
    e.stopPropagation();
});
$('body').on('mouseenter', '.what-wedo-dropdown .row',function (e) {
    $(this).find('.dropend').closest('.dropdown-menu').addClass('show');
})
// $('.dropdown').hover(function() {
//     $(this).addClass('show');
//     $(this).find('.dropdown-menu').addClass('show');
//   }, function() {
//     $(this).removeClass('show');
//     $(this).find('.dropdown-menu').removeClass('show');
//   });

$('.index-page .count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

$('.index-page .technologies .slides').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 2000,
    nextArrow:'<div class="next"><i class="bi bi-chevron-right"></i></div>',
    prevArrow:'',
})

$('.index-page .bussiness-challange .slides').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots:true,
    arrows:false,
})
$('.index-page .testimonial .slides').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots:true,
    arrows:false,
})
$('.index-page .home-top').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots:false,
    arrows:false,
    autoplay:true,
    pauseOnHover: false,
    fade:true,
    autoplaySpeed:3000,
})
$('.index-page .trusted-client .slides').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    dots:false,
    arrows:false,
    infinite: false,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        }
    ]
})
$('body').on('click','.wwd .mobile .accordion-header',function(e){
    e.preventDefault();
    // for change background color======================
    if($(this).hasClass('active')){
        $(this).toggleClass('active');
    }else{
        $('.wwd .mobile .accordion-header').removeClass('active');
        $(this).addClass('active');
    }

    // for change toggle icon======================
    if($(this).find('.toggle i').hasClass('bi-caret-down-fill')){
        $(this).find('.toggle').html('<i class="bi bi-caret-right-fill"></i>');
    }else if($(this).find('.toggle i').hasClass('bi-caret-right-fill')){
        $('.wwd .mobile .accordion-header').find('.toggle').html('<i class="bi bi-caret-right-fill"></i>');
        $(this).find('.toggle').html('<i class="bi bi-caret-down-fill"></i>');
    }
})
  