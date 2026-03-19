<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>agbay</title> 
        <link href="views/res/style.css" rel="stylesheet" type="text/css"/>
        <link href="views/res/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="navbar">
            <?php if(isset($_SESSION['aid'])){?>
            <ul class="left-nav">
                <a href="timeline.php">
                    <li class="logo">&nbsp;</li>
                    
                    </a>
                    <a href="timeline.php">
                        <li>socmed</li>
                    </a>
            </ul>
            <ul class="right-nav">
                <a href="profile.php">
                    <li><?=$_SESSION['firstname'].".".$_SESSION['lastname'];?></li>
                </a>
                <a href="models/logout..account.php">
                    <li>Logout</li></a>
            </ul>
            <?php }else{ ?>
            <ul class="left-nav">
                <a href="timeline.php">
                     <li class="logo">&nbsp;</li>
                </a>
                <a href="timeline.php">
                    <li>socmed</li>
                </a>
            </ul>
             <ul class="right-nav">
                <a href="login.php">
                    <li>Login</li>
                </a>
                <a href="index.php">
                    <li>Singup</li></a>
            </ul>
            <?php } ?>
            
    </div>