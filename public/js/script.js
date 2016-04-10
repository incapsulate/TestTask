$(document).ready(function() {
    $('.tab-links a').on('click', function(e)  {
        var currentAttrValue = $(this).attr('href');

        $(currentAttrValue).show().siblings().hide();
        $(this).parent('li').addClass('active').siblings().removeClass('active');

        e.preventDefault();
    });
});