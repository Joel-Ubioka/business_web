<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business_Website</title>
    <link rel="stylesheet" href="style1.css">  
</head>
<body>
<?php require "includes/header2.php"; ?>
	

<div class="wrapper">
  <h2>Contact Us</h2>
  <div id="error_message"></div>

  <form id="myForm" onsubmit="return validation('return')" action="validation.php">
    <label>Name</label><br>
     <div class="input_field">
       <input type="text" placeholder="name" id="name">
     </div>
     <label>Email</label><br>
     <div class="input_field">
      <input type="text" placeholder="email" id="email">
    </div> 
    <label>Message</label><br>
    <div class="input_field">
      <textarea id="message" placeholder="Drop a message"></textarea>
    </div>
    <div class="btn">
      <input type="submit">
    </div>
  </form>
</div>
</div>

     <?php include "includes/footer.php"; ?>
     <script src="./script.js"></script>
     <script src="javascripts/script1.js"></script>
</body>
</html>