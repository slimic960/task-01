function getdetailscriminalsnote() {
    var criminalletters = $('#criminalLetters').val();
    var criminalwords = $('#criminalWords').val();
    $.ajax({
        type: "POST",
        url: "includes/criminalsnote/action/BasicAjax.php",
        data: {criminalletters: criminalletters, criminalwords: criminalwords}
    }).done(function (result)
    {
        $(".criminalResult").html('<div class="alert alert-primary">' + "Ответ: " + result + '</div>');
    });
}

function getdetailsislands() {
    var islands = $('#islandsArea').val();
    $.ajax({
        type: "POST",
        url: "includes/islands/action/BasicAjax.php",
        data: {islands: islands}
    }).done(function (result)
    {
        $(".islandsResult").html('<div class="alert alert-primary">' + "Ответ: " + result + '</div>');
    });
}

$(document).ready(function () {
    $('#navbar li').click(function () {
        $(this).addClass('active').siblings('li').removeClass('active');
        var showSectoin = $(this).find('a').attr('href');
        $(showSectoin).css('visibility', 'visible').css('display','block').siblings('section').css('display', 'none');
    });
    $(function () {
        $(".container").mixItUp({
            selectors: {
                target: '.mix',
                filter: '.filter',
                sort: '.sort'
            }
        });
    });

//  product  
    (function () {
        $(function () {
            var accordion, wideScreen;
            accordion = $('#accordion').children('li');
            wideScreen = $(window).width() > 767;
            if (wideScreen) {
                accordion.on('mouseenter click', function (e) {
                    var thisInstance = $(this);
                    if (thisInstance.hasClass('out')) {
                        thisInstance.addClass('out');
                    } else {
                        thisInstance.addClass('out');
                        thisInstance.siblings().removeClass('out');
                    }
                });
            } else {
                accordion.on('touchstart touchend', function (e) {
                    e.stopPropagation();
                    thisInstance = $(this);
                    if (thisInstance.hasClass('out')) {
                        thisInstance.addClass('out');
                    } else {
                        thisInstance.addClass('out');
                        thisInstance.siblings().removeClass('out');
                    }
                });
            }
        });
        $(function () {
            var box = $('.sm-box');
            box.on('click', function (e) {
                e.preventDefault();
                var thisInstance = $(this);
                if (thisInstance.find('.no-product').length == false) {
                    if (thisInstance.hasClass('active')) {
                        thisInstance.removeClass('active');
                    } else {
                        thisInstance.addClass('active');
                    }
                }
            });
        });
    }.call(this));

});