<?php
session_start();

include("connection.php");
include("config.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
   
//posting to database
      $email = $_POST['email'];
      $password = $_POST['password'];
  
      if(!empty($email) && !empty($password)){
   
//using a query
      $query = "INSERT into users (email, password) values('$email', '$password')";
      mysqli_query($conn, $query);

//redirect to login page
  header("location: login.php");
      die;
      }
    else{
      echo "please enter a valid information";
    }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="school site/login.css">
</head>
<body>
    <div class="bg-img">
        <div class="content">
          <header> Signup</header>
          <form action="#" method="POST">
            <div class="field">
                <span class="fa fa-user"></span>
                <input name="fullname" type="text"  required placeholder="Full Name">
            </div>
            <div class="field space">
              <span class="fa fa-user"></span>
              <input name="email" type="email" required placeholder="Email Adress">
            </div>
            <div class="field space">
              <span class="fa fa-user"></span>
              <input name="number" type="tel" required placeholder="Phone Number" >
            </div>
            <div class="field space">
              <span class="fa fa-lock"></span>
              <input name="password" type="password" class="pass-key" required placeholder="Password">
              <span class="show">SHOW</span>
            </div>
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input name="password" type="password" class="pass-key" required placeholder="Confirm Password">
                <span class="show">SHOW</span>
              </div>
            <div class="field space">
              <input type="submit" value="SIGN UP">
            </div>
          </form>
          <div class="signup">Already A Member?
            <a href="login.html">Sign in Now</a>
          </div>
        </div>
    </div>


    
    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }
       else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
  </script>

</body>
</html>