<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lobby Games</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
        <a href="logout.php" class="ca">Sign Out</a>
        
        
    </body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>