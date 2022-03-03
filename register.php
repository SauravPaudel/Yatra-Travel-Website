<?php 
    require 'databaseconfig.php';

    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $password = $_POST['pass'];
        $rpass = $_POST['rpass'];
        if($password != $rpass){

            echo "password mismatch";
        }
        $select_user = "SELECT email FROM register WHERE email ='$email'";

        $result = $con->query($select_user);
        if(!$result){
            echo " user already exists";
        }else{
            $hashedpwd = password_hash($password,PASSWORD_DEFAULT);
            $insert_user = "INSERT INTO register(name,address,email,contact,password) VALUES ('$name','$address','$email','$contact','$hashedpwd')";
            $insert_result = $con->query($insert_user);
            if(!$insert_result){
                echo "registrstion failed";
            }
            else{
                echo '<script>alert("registrstion successful")</script>';
                header("Location:login.php");
            }
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yatra</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Owl Carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <!-- CSS file -->
    <link rel="stylesheet" href="style.css">
</head>

<body >
    
    <div class="container mt-5 ml-5 border border-dark-rounded">
    <form class="align-items-center" method="POST">

        <h1 class="text-center">Sign Up</h1><br/><hr>
        <div class="form-group row mb-3">
            <div class="col-sm-2"></div>
            <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Name:</label>
            <div class="col-sm-6">
             <input type="text" name="name" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-sm-2"></div>
            <label for="address" class="col-sm-2 col-form-label col-form-label-lg">Address:</label>
            <div class="col-sm-6">
             <input type="text" name="address" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-sm-2"></div>
            <label for="email" class="col-sm-2 col-form-label col-form-label-lg">Email Address:</label>
            <div class="col-sm-6">
                <input type="email" name="email" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-sm-2"></div>
            <label for="contact" class="col-sm-2 col-form-label col-form-label-lg">Contact Number:</label>
            <div class="col-sm-6">
             <input type="number" name="contact" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
        </div>
        <div class="form-group row mb-5">
            <div class="col-sm-2"></div>
            <label for="pass" class="col-sm-2 col-form-label col-form-label-lg">Password:</label>
            <div class="col-sm-6">
                <input type="password" name = "pass" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
        </div>
        <div class="form-group row mb-5">
            <div class="col-sm-2"></div>
            <label for="rpass" class="col-sm-2 col-form-label col-form-label-lg">Re-enter Password:</label>
            <div class="col-sm-6">
                <input type="password" name = "rpass" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
        </div>
        <div class="form-group row mb-3">
        <div class="col-sm-2"></div>
            <label class="col-sm-2 col-form-label col-form-label-lg"></label>
            <div class="col-sm-6 text-center">
                <input type="submit" name="register" value="Sign Up" class="btn btn-primary px-5">
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-sm-2"></div>
            <div class="class-sm-6 text-center">
                <span>Already have account ?</span><a class="text-decoration-none" href="login.php">Login here!</a>
            </div>
        </div>
    </form>
</div>
</body>

</html>