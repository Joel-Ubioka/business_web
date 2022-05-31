// DISPLAY SIDEBAR MENU DROPDOWN

$('.menu_item').click(function(e){
    e.preventDefault();
    $(this).next().slideToggle('slow');
});