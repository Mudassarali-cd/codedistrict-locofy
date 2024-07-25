$(document).ready(function() {
    var tabs = $('.tabs-item');
    var currentIndex = 0;
    var intervalTime = 5000; // Time for each tab in milliseconds

    function switchTab(index) {
        var target = $(tabs[index]).data('target');
        $('.video-container').hide();
        $(target).show();
        tabs.removeClass("active");
        tabs.find('.progress').stop().css({
            width: '0%'
        });
        $(tabs[index]).addClass("active");
        $(tabs[index]).find('.progress').animate({
            width: '100%'
        }, intervalTime, 'linear');

        currentIndex = index;
    }

    function autoplayTabs() {
        currentIndex = (currentIndex + 1) % tabs.length;
        switchTab(currentIndex);
    }

    tabs.click(function() {
        clearInterval(autoplay);
        var index = $(this).index();
        switchTab(index);
        autoplay = setInterval(autoplayTabs, intervalTime);
    });

    switchTab(currentIndex);
    var autoplay = setInterval(autoplayTabs, intervalTime);
});