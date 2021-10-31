<!DOCTYPE html>
<html>
    <head>        
        <meta charset="utf-8">
        <title>Sign In</title>
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
        
        <div class="content">
            <form action="login-check.php" method="post">
               <h2>Sign In</h2>

                <?php
                    if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <input class="frinput" type="text" name="username" placeholder="Username"><br>

                <input class="frinput" type="password" name="password" placeholder="Password"><br>

                <button type="submit">SIGN IN</button>
                <a href="signup.php" class="ca">Create an Account</a>
            </form>
        </div>
    </body>
</html>