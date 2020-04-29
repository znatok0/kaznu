$(document).ready(function () {
    let cardItems = $('.study-info-card');
    
    cardItems.on('click', function(event) {
        event.preventDefault();
        let activeCard = $(this).attr('href');
        $('.visible').toggleClass('visible');
        $(activeCard).toggleClass('visible');
        $('.study-info-card-active').toggleClass('study-info-card-active');
        $(this).toggleClass('study-info-card-active');
    });

    $(function() {
        $("accordion").accordion({
            collapsible: true
        });
    });

    $(document).ready(function () {
        //прикрепляем клик по заголовкам acc-head
        $('#accordeon .acc-head').on('click', f_acc);
    });

    function f_acc() {
        //скрываем все кроме того, что должны открыть
        $('#accordeon .acc-body').not($(this).next()).slideUp(350);
        // открываем или скрываем блок под заголовком, по которому кликнули
        $(this).next().slideToggle(350);
    }

    // $(function () {
    //     let location = window.location.href;
    //     let cur_url = '/' + location.split('/').pop();

    //     $('.menu__ul li').each(function () {
    //         let link = $(this).find('a').attr('href');

    //         if (cur_url == link) {
    //             $(this).toggleClass('menu__link_active');
    //         }
    //     });
    // });

});