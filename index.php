<?php
    require_once "db_conn.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Master Typing</title>
        <link rel="stylesheet" href="style.css">
      <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      </head>
    <body>
        <nav>
         <div class="logo">
            Master Typing
         </div>
         <label for="btn" class="icon">
         <span class="fa fa-bars"></span>
         </label>
         <input type="checkbox" id="btn">
         <ul>
            <li><a href="index.php">Home</a></li>
            <li>
               <label for="btn-1" class="show">Account +</label>
               <a href="#">Account</a>
               <input type="checkbox" id="btn-1">
               <ul>
                  <li><a href="login.php">Sign In</a></li>
                  <li><a href="signup.php">Sign Up</a></li>
               </ul>
            </li>
         </ul>
      </nav>
      <script>
         $('.icon').click(function(){
           $('span').toggleClass("cancel");
         });
      </script>
    </body>
</html>