document.addEventListener("DOMContentLoaded", function(event) {

$("filter").addClass("hide_form");
$("add").addClass("hide_form");
$("btn_filter").click(function(){
    $("filter").removeClass("hide_form");
})
$("btn_add").click(function(){
    $("add").removeClass("hide_form");
})


});
