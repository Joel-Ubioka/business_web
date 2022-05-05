<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php require "includes/header1.php"; ?>

<body>
    <?php require "includes/header2.php"; ?>

    <br><br>
    <p class="alert"></p>
    <form method="POST" id="register_form">
        <p>Full Name:</p>
        <input type="text" id="full_name">
        <br><br>
        <p>Email:</p>
        <input type="email" id="email">
        <br><br>
        <button id="submit">Submit</button>
    </form>

    <br><br>

    <?php include "includes/footer.php"; ?>
</body>

</html>