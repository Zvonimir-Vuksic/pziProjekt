<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="styles.css">
    <title>Favorite travel places</title>
</head>
<body>
<div class="container">
        <div class="nav-wrapper">
            <div class="left-side">
                <div class="nav-link-wrapper active-nav-link">
                <a href="index.php">Home</a>
                </div>
                <div class="nav-link-wrapper">
                <a href="discover.php">About</a>
                </div>
            </div>
            <!-- Check for logged in -->
            <div class='right-side'>
            <?php
                if(isset($_SESSION["useruid"])){
                    echo "<div class='profile nav-link-wrapper'><a href='profile.php'>Profile</a></div>";
                    echo "<div class='logout nav-link-wrapper'><a href='includes/logout.inc.php'>Log out</a></div>";
                }else{
                    echo "<div class='signup nav-link-wrapper'><a href='signup.php'>Sign Up</a></div>";
                    echo "<div class='login nav-link-wrapper'><a href='login.php'>Log in</a></div>";
                }
            ?>
            </div>

        </div>