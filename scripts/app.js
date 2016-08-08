function search_activate (event) {
    event.preventDefault();
    var element = $("#nav_search_box");
    if(element.hasClass("active")){
        element.removeClass("active");
    }else{
        element.addClass("active");
    }
}