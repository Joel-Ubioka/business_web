// Update Status
$('.status_button').click(function(e){
    e.preventDefault();


    const table = $(this).attr('data-table');
    const column = $(this).attr('data-column');
    const id = $(this).attr('data-id');
    const status = $(this).attr('data-status');

   const ajax = new XMLHttpRequest();
   ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200)
        {
            console.log(this.responseText);
        }
   }
   ajax.open("POST", "ajax/update_status_ajax.php", true);
   ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   ajax.send("table="+table+"&column="+column+"&id="+id+"&status="+status);
});





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
            $(".message_container").fadeIn();
            
            if(this.responseText == "Successfully Updated!")
            {
                $(".success_msg").fadeIn();
                $(".success_msg").text(this.responseText);
            }
            else
            {
                $(".fail_msg").fadeIn();
                $(".fail_msg").text(this.responseText);
            }

            setTimeout(function(){
                $(".message_container").fadeOut();
            },3000 );

            $("#profile_update_button").html('Update');
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

