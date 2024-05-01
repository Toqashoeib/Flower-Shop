<?php
// starting PHP code

//connection code to DB
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
    <!--starting HTML code-->
    <head>
        <title>About</title>
        <link rel="shortcut icon" href="./th (1).jfif.jpg" type="img/x-icon">
    </head>
    <body>
        <ol>
            <li><a href="./Home.php">Home</a></li>
            <li><a href="./About.php">About Us</a></li>
            <li><a href="./Submit.php">Make Order</a></li>
            <li><a href="https://wa.me/+201005672012" target="blank">Contact Us</a></li>
        </ol>    
        <div class="piic">
            <img src="./th (6).jfif.jpg">
        </div>
        <div class="font">
            <p>
            Welcome to our flower website! We are very glad that you visited us.<br>
            Our website aims to be the ideal destination for everyone looking for the beauty of flowers and the splendor of nature in its most delicate and attractive form.<br>

            We are proud to offer a variety of fresh roses and unique flowers,<br>
            with careful attention to the quality and beauty of the product<br>
            so that you can enjoy a unique and distinctive experience, allowing you to choose from unique designs that suit your special taste.
            </p>
        </div>
    </body>
</html>
<style>
    /*starting CSS code*/
    body{
        background-color: rgb(250, 249, 249);
        overflow-x: hidden;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        margin: 0;
        padding: 0;
    }
    ol{
        list-style-type: none;
        background-color:rgb(85, 158, 223);
        display: flex;
        padding-left: 320px ; 
    }
    ol li{
        display: inline-flex;
        font-size: xx-large;
        font-style: bold;
        padding-right: 60px;
        height: 50px;
        margin-top: 7px;
    }
    ol li a{
        text-decoration: none;
        color: rgb(231, 226, 226);
    }
    ol li a:hover{
        color: rgb(157, 172, 185);
        text-decoration: underline;
        transition: 0.5s;
    }
    .piic{
        width: 500;
        height: 400px;
        padding: 15px;
        font-family: 'Times New Roman', Times, serif;
        font-weight: bolder;
        text-align: center;
    }
    .piic img {
        border-radius: 50%;
    }
    .piic {
        margin-top: -10px;
        margin-bottom: 110px;    
    }
    .font {
        text-align: center;
        padding: 50px;
        padding-bottom: 30px;
        font-size: xx-large;
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
        color:antiquewhite;
        background-color: rgba(85, 159, 223, 0.877);
    }
</style>