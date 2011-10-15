function tidySearch(searchField$, button$) {
    if (searchField$.val() == "") searchField$.val("search");

    searchField$.focus(function() {
            if (searchField$.val() =="search") {
                    searchField$.val("");
            }
    })
    .blur(function() {
            if (searchField$.val() == "") searchField$.val("search");
    });
}


$(document).ready(function() {
    

    tidySearch($("#searchform #s"), $("#searchform input.button"));

    // set up the image gallery
    $("#gal-wrapper a").lightBox();

    $(window).scroll(function() {
       if($(window).scrollTop() < 70) {
           $("#header").fadeIn(200);
           $("#header-shadow").show();
       }
       else {
           $("#header").fadeOut(200);
           $("#header-shadow").hide();
       }
    });




});
	

	
	
	
	
	
	
	
	
