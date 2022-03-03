<?php 
require 'databaseconfig.php';

if(isset($_POST['book'])){
    $name = $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $member = $_POST['member'];
    
   
        
        $insert_sql = "INSERT INTO booking(name,address,email,contact,destination,date,member) VALUES ('$name','$address','$email','$contact','$destination','$date','$member')";
      
        $insert_result = $con->query($insert_sql);
        if(!$insert_result){
            echo'<script>alert("booking failed");</script>';
        }
        else{
            echo '<script type="text/javascript">alert("booking successful")</script>';
            header("Location:kathmandu.php");
        }
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css">

  <title>Travel Form</title>
</head>
<body>
  <section>
    <div class="container">
      <form method="POST" id="my-form">
  
        <div class="form-group">
          <label for="fullname"> Full Name</label>
          <input type="text" id="firstName" name="fullname">
        </div>
  
        <div class="form-group">
          <label for="contact">Contact </label>
          <input type="text" id="contact" name="contact">
        </div>
  
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email">
        </div>

        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" id="address" name="address">
        </div>

        <div class="form-group">
          <label for="address">Destination To Visit</label>
          <input type="text" id="address" name="destination">
        </div>

        <div class="form-group">
          <label for="address">Arrival Date</label>
          <input type="date" id="address" name="date">
        </div>

        <div class="form-group">
          <label for="address">Member</label>
          <input type="number" id="member" name="member">
        </div>
  
        <input type="submit" name="book" value="Submit"></input>
      </form>
    </div>
    <div id="status"></div>
  </section>
</body>
</html>