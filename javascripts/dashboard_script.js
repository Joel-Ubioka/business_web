
// Update profile page
$("#profile_update_form").on("submit", function(e){
    e.preventDefault();
    $("#profile_update_button").html('<i class="fa-solid fa-spinner"></i> Loading...');

    const full_name = $('#full_name').val();
    const email = $('#email').val();
    const phone_number = $('#phone_number').val();
    const profile = $('#profile_img').prop('files')[0];

    const formdata = new FormData(this);

    formdata.append('full_name', full_name);
    formdata.append('email', email);
    formdata.append('phone_number', phone_number);
    formdata.append('profile', profile );

    const ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200)
        {
            console.log(this.responseText);
        }
    }

    ajax.open("POST", "ajax/profile_update_ajax.php", true)
    ajax.send(formdata);
    
});










// DISPLAY SIDEBAR MENU DROPDOWN

$('.menu_item').click(function(e){
    e.preventDefault();
    $(this).next().slideToggle('slow');
});

