<?php
session_start();

//assigning a new variable to previous session
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];















?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Successful</title>
    </head>


    <body>
            <P>Welcom back

            </P>
              <P>Your email is: <?php echo $email ?> and your password is : <?php echo $password?>
            </P>
        


    </body>
</html>