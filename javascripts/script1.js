

//INSERT COMMENTS
$('#comment_form').on('submit', function(e){
    e.preventDefault();

     const that = this;

    const name = $('#name').val();
    const email = $('#email').val();
    const comment = $('#comment').val();
    const post_id = $('#post_id').val();

    $(that).children('.input_box').children('button').attr('disabled', true);
   
  
    $.ajax({
            type: "POST",
            url: "ajax/insert_comment_ajax.php",
            data: {'name':name,
                    'email':email,
                    'comment': comment,
                    'post_id': post_id
        
            },
            success: function(response){
            $(that).children('.input_box').children('button').attr('disabled', false);

                $(".message_container").fadeIn();
                
                if(response == "Successfully Posted!")
                {
                    $(".success_msg").fadeIn();
                    $(".success_msg").text(response);
                   
                    $("#comment").val('');
                   
                    setTimeout(function(){
                        $(".message_container").fadeOut();
                       
                    },3000 ); 
           
                }
                else
                {
                    $(".fail_msg").fadeIn();
                    $(".fail_msg").text(response);
    
                    setTimeout(function(){
                        $(".message_container").fadeOut();
                    },3000 ); 
                }
            }
    });
});


$("#register_form").on("submit", function(e){
    e.preventDefault();
    $("#submit").text('Loading...');

    let full_name = $("#full_name").val(),
        email = $("#email").val();

        const formdata = new FormData();
        const xhttp = new XMLHttpRequest();

        formdata.append('full_name', full_name);
        formdata.append('email', email);

        xhttp.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200)
         {
            // Send Success message
            $('.alert').text(this.responseText);
            $("#full_name").val('');
            $("#email").val('');
            $("#submit").text('Submit');
         }  
        }
     
        xhttp.open("POST", "ajax/register_ajax.php", true);
        xhttp.send(formdata);
        
});







/*
$("#register_form").on("submit", function(e){
    e.preventDefault();
    $("#submit").text('Loading...');

    let full_name = $("#full_name").val(),
    email = $("#email").val();

    $.ajax({
        type: 'POST',
        url: 'ajax/register_ajax.php',
        data: {
            full_name: full_name,
            email: email
        },
        success: function(response){
            $('.alert').text(this.response);
            $("#full_name").val('');
            $("#email").val('');
            $("#submit").text('Submit');
        }




    } );

});
*/









/*
$("#register_form").on("submit", function(e){
    e.preventDefault();
    $("#submit").text('Loading...');

    let full_name = $("#full_name").val(),
        email = $("#email").val();

        const xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200)
         {
            // Send Success message
            $('.alert').text(this.responseText);
            $("#full_name").val('');
            $("#email").val('');
            $("#submit").text('Submit');
         }  
        }
     
        xhttp.open("POST", "ajax/register_ajax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("full_name="+full_name+"&email="+email);
        
});

*/















$("#fetch_button").click(function(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        // Display response in html
        document.getElementById('sample').innerHTML=this.responseText;
    }
    xhttp.open("GET","ajax/sample.txt");
    xhttp.send();
});














// hamburger media query

let menu_item = document.getElementById("hamburger_menu");

menu_item.addEventListener("click", function() {
    let media_menu_wrapper = document.getElementById("dropdown_menu");
    media_menu_wrapper.classList.toggle("display");
});
