// JSHint ignores
/* global FastClick: true */
$(document).ready(function () {
    prepare_fitvid();
    prepare_datepickers();
    prepare_menu({
        container: $('#content'),
        menu_button: $('.menu-button'),
        menu_active_class: 'menu-active'
    });
    prepare_sidebar();
    prepare_cabin_form();
    prepare_expand_cabin();
    prepare_cabin_carousel();
});

function prepare_datepickers() {
    $(".datepicker").datepicker();
}

function prepare_fitvid() {
    $("#page").fitVids();
}

function prepare_menu(options) {
    options.menu_button.on('click', function (e) {
        var body = $('body');

        body.toggleClass(options.menu_active_class);

        // if the menu is displayed, hook up an event to hide the menu when #page is tapped but not scrolled
        if (body.hasClass(options.menu_active_class)) {
            options.container.on('click', function () {
                body.toggleClass(options.menu_active_class);
                options.container.off('click'); // don't need to listen to this until the menu is opened
            });
            return;
        }

        options.container.off('click'); // don't need to listen to this until the menu is opened
    });

    $('.sub-menu').collapse({toggle: false}).addClass('collapse');

    $('.btn-menu-dropdown').on('click', function (e) {
        $(this).siblings('.sub-menu').collapse('toggle');
    });
}

function prepare_sidebar() {
    $('.asideHead').on('click', function () {
        var sidebar = $('#secondary');
        sidebar.toggleClass('expanded');
    });
}

function prepare_cabin_form() {
    $('#cabin-rental-button').on('click', function (e) {
        e.preventDefault();
        var base_url = 'https://secure.naturalbridgecabinrental.com/iqreservations/default.asp';
        var arrival_date = $('#arrival').val();
        var departure_date = $('#departure').val();
        // Check In Day
        var CID = arrival_date.split('/')[1];
        // Check In Month
        var CIM = arrival_date.split('/')[0];
        // Check In Year
        var CIY = arrival_date.split('/')[2];
        // Check Out Day
        var COD = departure_date.split('/')[1];
        // Check Out Month
        var COM = departure_date.split('/')[0];
        // Check Out Year
        var COY = departure_date.split('/')[2];
        // Adults
        var AD = $('#adults').val();
        // Children
        var CH = $('#children').val();
        // Cabin
        var PC = $('#cabin').val();
        // Hidden Field
        var RSE = $('#rse').val();

        var request = $.ajax({
            url: base_url,
            method: 'GET',
            data: {
                CID: CID,
                CIM: CIM,
                CIY: CIY,
                COD: COD,
                COM: COM,
                COY: COY,
                AD: AD,
                CH: CH,
                PC: PC,
                RSE: 0
            }
        });
        request.done(function (result) {
            console.log(result);
            debugger;
        });

        request.fail(function (jqXHR, textStatus) {
            console.log(textStatus);
        });
        debugger;
    });
}

function prepare_expand_cabin() {
    // $('.cabin').on('click', function (e) {
    //     e.preventDefault();
    //     var open = $('.cabin-row').find('.expanded');
    //     open.removeClass('expanded');
    //     $(this).addClass('expanded');
    // });
}

function prepare_cabin_carousel() {
    $('.cabin-row').slick({
        dots: true,
        infinite: true,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 2,
        responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
      ]
    });
    // debugger;
}
