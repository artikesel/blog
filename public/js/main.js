$(document).ready(function(){
    /////////// Шапка ///////////
    var hi
    $(window).bind('scroll', function () {
        if ( $(this).scrollTop()>0 ) {
            $('header').addClass('activeHeader')
        }else {
            $('header').removeClass('activeHeader')
        }
    })


    //////// Анимация при скроле ////////
    // $(window).bind('scroll', function () {
    //     var hightWindow =  $(this).scrollTop()
    //     var hight1 = $('.scroll')
    //     if (hightWindow >  hight1.offset().top()-700) {
    //         hight1.addClass('testClass')
    //     }else if (true) {
    //     }
    // })

    $("a[href='#№']").bind('click', function () {
        alert('haha')
    })






});


// padding: 15px 0;
