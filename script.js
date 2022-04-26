function validation(){
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
    let error_message = document.getElementById("error_message");
    let text;

    error_message.style.padding = "10px";

    if(name.length <5){
       text = "Please enter a valid name";
       error_message.innerHTML = text;
       return false;
    }

    if(email.indexOf("@") == -1  ||  email.length <5){
        text = "Please enter a valid email";
        error_message.innerHTML = text;
        return false;
     }
  
     if(message.length <15){
        text = "Please enter a valid message";
        error_message.innerHTML = text;
        return false;
     }
 

    return true;
}


