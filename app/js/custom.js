$(document).ready(function () {
    $("textarea[id='my-message']").keyup(function count() {
        const number = $("textarea[id='my-message']").val().length;
        $("#count").html(number);
    });

    $('.open-nav').click(function (event) {
        event.preventDefault();
        $('.toggle-nav').toggleClass('active');
        $('.open-nav').toggleClass('active');
        $('.open-nav span').toggleClass('active');
    });

    //scroll якорів
    $('.scroll[href^="#"]').on('click', function (event) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: $(this.hash).offset().top - 0
        }, 1500);
    });

    //setting text on modal

    $('#sect-2 .item').on('click', function () {
        const title = $(this).find('.title').text();
        const description = $(this).find('.description').text();
        const modal = $('#modal-1');

        modal.find('.modal-title').text(title);
        modal.find('.modal-description').text(description);
    });

    // show-more
    $('.show-more-button').on('click', function (event) {
        event.preventDefault();
        $('.show-more-button span').hide();
        $('.preload').show();

        setTimeout(() => {
            $('.more-item').remove();
            $('.hide-item').show();
        }, 3000);
    });

    $("#form").submit(function () {
        $.ajax({
            type: "POST",
            url: "../send.php",
            data: $(this).serialize()
        }).done(function () {
            $(this).find("input").val("");
            $("#form").trigger("reset");
        });
        return false;
    });

});