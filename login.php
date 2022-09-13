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
    $query = "select * from users where email = '$email' limit 1";
    $result = mysqli_query($conn,$query);

   if($result){
      if($result && mysqli_nums_rows($result) > 0);
      {
        $user_data = mysqli_fetch_assoc($result);

          if($user_data['password'] === $password){

              $_SESSION['user_id'] = $user_data['user_id'];
               header("location: ");
           }

        }

     }
       echo "wrong username or password";
  }
  else{
       echo "wrong username or password";
  }

}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="school site/login.css">
    <script src="http://kit.fontawesome.com/b1fee8c596.js"crossorigin="anonymous"></script>
</head>
<body>
    <!-- ...........Navbar............ -->
     
    <!-- ...............form.......... -->
    <div class="bg-img">
        <div class="content">
          <header>Login Form</header>
          <form action="#" method="POST">
            <div class="field">
              <span class="fa fa-user"></span>
              <input name="email" type="text" required placeholder="Email">
            </div>
            <div class="field space">
              <span class="fa fa-lock"></span>
              <input name="password" type="password" class="pass-key" required placeholder="Password">
              <span class="show">SHOW</span>
            </div>
            <div class="pass">
              <a href="#">Forgot Password?</a>
            </div>
            <div class="field">
              <input type="submit" value="LOGIN">
            </div>
          </form>
          <div class="signup">Don't have account?
            <a href="signup.php">Signup Now</a>
          </div>
        </div>
    </div>
    <!-- ...........footer............ -->




    <script>
        const pass_field = document.querySelector('.pass-key');
        const showBtn = document.querySelector('.show');
        showBtn.addEventListener('click', function(){
         if(pass_field.type === "password"){
           pass_field.type = "text";
           showBtn.textContent = "HIDE";
           showBtn.style.color = "#3498db";
         }else{
           pass_field.type = "password";
           showBtn.textContent = "SHOW";
           showBtn.style.color = "#222";
         }
        });
    </script>
</body>
</html>