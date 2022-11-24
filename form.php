
<?php

    session_start();


    //validation of input or form


    $name = $email = $password = $image = "";
    $name_error =$email_error = $password_error = $image_error = "";

    function cleanup(string $data)  //clean function can not work for file
    {
        
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function checkEmpty($data, &$error_str)
    {
        if(empty($data)){      //funct to check empty 
            $error_str = "this input is required";
        }

    }

    function uploadFile($file, $allowed_types = [], &$error_message = '')
    {
        $target_dir ='uploads/';  //uploaded file to the name dir(uploads)
        $target_file = $target_dir . rand(). basename($file['name']); //given the file name unique name
        $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); 

        if(count($allowed_types) < 1 || in_array($file_extension, $allowed_types)){
            move_uploaded_file($file['tmp_name'], $target_file); 
        } else{
            $error_message = "we only allow" . implode(',', $allowed_types); //impode convert strings to array wehile explode is reverst
        }
        
    };

    function displayError($error)
    {
       echo "<br><span style='color:red; font-size: 12px'>$error</span>";

    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        //Assign post data to variable after cleanup
        $name = cleanup($_POST['name']);
        $email = cleanup($_POST['email']);
        $password = cleanup($_POST['password']);

        //uploading file
    //    if(isset($_FILES['image'])){
    //         $target_dir ='uploads/';  //uploaded file to the name dir(uploads)
    //         $target_file = $target_dir . rand(). basename($_FILES['image']['name']); //given the file name unique name
    //         $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); 
    //         move_uploaded_file($_FILES['image']['tmp_name'], $target_file); 
    //    } else{
    //         $image_error = "the image is required";
    //    };

   

        //chect if name is empty
        checkEmpty($name, $name_error);
        //chect if email is empty
        checkEmpty($email, $email_error);
        //chect if password is empty
        checkEmpty($password, $password_error);


        if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) //email validation
        {
            $email_error = "Enter a valid email address";
        }


        if(!empty($password) &&  strlen($password) < 6) //password validation
        {
            $password_error = "Password cannot be less than 6 characters";
        }

        $allChecks = empty($password_error) && empty($email_error) && empty($name_error);
        
        if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name']))        //u can use empty or isset
            {
                if($allChecks){
                uploadFile($_FILES['image'], [ 'png', 'jpg','jpeg', 'gif'], $image_error);
                }
            } else {
                $image_error = "the image is required";
            }


        if (($allChecks) &&  empty($image_error))
        {
            
            //store the valid data in the session
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            
            //redirect to success.php
            header('location: success.php');

        }

    }









?>
   



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMS</title>
</head>
<body>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data"> <!-- enctype="multipar/form-data" help to upload files to server-->

    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name" value="<?php echo $name ?>">
    <?php echo isset($name_error) && !empty($name_error) ? displayError($name_error): ''; ?>
    <br>
    <br>

    <label for="email">Email:</label><br>
    <input type="text" name="email" id="email" value="<?php echo $email ?>">
    <?php echo isset ($email_error) && !empty($email_error) ? displayError($email_error): ''; ?>

    <br>
    <br>

    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password">
    <?php echo isset ($password_error) && !empty($password_error) ? displayError($password_error): ''; ?>

    <br>
    <br>

    <br>
    <label for="image">Upload Profile Pic</label><br>
    
    <input type="file" name="image" id="image">
    <?php echo isset ($image_error) && !empty($image_error) ? displayError($image_error): ''; ?>
    <br>
    <br>
    <input type="submit" value="Register">
    


    </form>
</body>
</html>