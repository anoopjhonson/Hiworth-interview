$(document).ready(function() {
    // Toggle the mobile menu
    $('.mobile-menu').on('click', function() {

        $('nav ul').toggleClass('show-menu');
        $(this).toggleClass('active');
    });
});