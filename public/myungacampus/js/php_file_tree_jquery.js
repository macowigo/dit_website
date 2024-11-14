$(document).ready(function () {

    // Hide all subfolders at startup
    $(".php-file-tree").find("ul").hide();

    // Expand/collapse on click
    $(".pft-directory a").click(function (e) {
        if($(this).parent('li').hasClass('pft-directory')){
           e.preventDefault(); 
        }
        $(this).parent().find("ul:first").slideToggle("medium");
        if ($(this).parent().attr('className') == "pft-directory")
            return false;
    });

});
