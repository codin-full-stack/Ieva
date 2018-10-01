<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>header</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="style.css">
    <script src="main.js"></script>
</head>
<body>
    <header>
    
    <img src="pc1.png" alt="IK" width="120" height="120" ; > 
          ieva klenauskaitė
    </header>
    <div class="menu">
        <?php include 'menu.php'; ?>
        <?php

        // if(isset($_SESSION["username"])){


// kad duotų prisijungusio žmogaus varda
            if (! empty($_SESSION["id"])){
                $sql = "SELECT * FROM users WHERE id = '" . $_SESSION["id"] . "' LIMIT 1" ;
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
 
                if(isset($_SESSION["id"])){
                echo "<br>" . "Hi! " . $row["first_name"];
                
                }
            }

        ?>
    </div>