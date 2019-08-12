$(document).ready(function() {
    
    $(".navShowHide").on("click", function() {
        
        var main = $("#mainSectionContainer");
        var nav = $("#sideNavContainer");

        if(main.hasClass("leftPadding")) {
            nav.hide();
        }
        else {
            nav.show();
        }

        main.toggleClass("leftPadding"); //adding & removing class

    });

});

function notSignedIn() {
    alert("You must be signed in to perform this action");
}