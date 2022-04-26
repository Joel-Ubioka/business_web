let menu_item = document.getElementById("hamburger_menu");

menu_item.addEventListener("click", function() {
    let media_menu_wrapper = document.getElementById("dropdown_menu");
    media_menu_wrapper.classList.toggle("display");
});
