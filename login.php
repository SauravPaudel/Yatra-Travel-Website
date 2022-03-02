<?php 

session_start();

require 'databaseconfig.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select_sql = "SELECT * FROM users_table WHERE email = '$email'";

    $result =$con->query($select_sql);
    if(!$result){
       echo "an account with this email doesnot exist"; 
    }
    else{

        $user = mysqli_fetch_assoc($result);

        if(password_verify($password,$user['password'])){
            $_SESSION['login'] = "loggedin";
            $_SESSION['username'] = $user['name'];
            $_SESSION['id'] = $user['id'];
            header("Location:index.php");
        }
        else{
            echo "incorrect password";
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

    <!-- Jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

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

<body>
    
    <div class="container mt-5 ml-5 border border-dark-rounded">
    <form class="align-items-center" method="POST">

        <h1 class="text-center">Login</h1><br/><hr>
        <div class="form-group row mb-3">
        <div class="col-sm-2"></div>
            <label for="email" class="col-sm-2 col-form-label col-form-label-lg">Email:</label>
            <div class="col-sm-6">
                <input type="email" name="email" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
        </div>
        <div class="form-group row mb-5">
            <div class="col-sm-2"></div>
            <label for="password" class="col-sm-2 col-form-label col-form-label-lg">Password:</label>
            <div class="col-sm-6">
                <input type="password" name = "password" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
        </div>
        <div class="form-group row mb-3">
        <div class="col-sm-2"></div>
            <label class="col-sm-2 col-form-label col-form-label-lg"></label>
            <div class="col-sm-6 text-center">
                <input type="submit" name="login" value="Login" class="btn btn-primary px-5">
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-sm-2"></div>
            <div class="class-sm-6 text-center">
                <span>Doesn't have account ?</span><a class="text-decoration-none" href="register.php">Create new here!</a>
            </div>
        </div>
    </form>
</div>
</body>

</html>