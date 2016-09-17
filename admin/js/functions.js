$(document).ready(function() {
    var newWidth = $(window).width();
    var newHeight = ($(window).height());
    console.log("Screen width :" + newWidth + "");
    console.log("Screen Height :" + newHeight + "");
    $('div.sidebar>.box').css("min-height", "" + newHeight -115 + "px");
    $('div.content>.box').css("min-height", "" + newHeight -115 + "px");
});