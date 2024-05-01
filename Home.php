<?php
// starting PHP code

//connection code to DB
require("connect.php");
?>
<!DOCTYPE html>
<html>
   <!--starting html code-->
   <head>
      <meta charset="UTF-8" />
      <link rel="shortcut icon" href="./th (1).jfif.jpg" type="img/x-icon">
      <title>Flowers Shop</title>
   </head>
   <body>
      <ol>
         <li><a href="./Home.php">Home</a></li>
         <li><a href="./About.php">About Us</a></li>
         <li><a href="./Submit.php">Make Order</a></li>
         <li><a href="https://wa.me/+201005672012" target="blank">Contact Us</a></li>
      </ol>
      <h1><em>Welcome To Our Store</em></h1> 
      <div class="all">
         <div class="im">
               <img src="./th (1).jfif.jpg">
            <div class="title">
               <p>Beautiful rose bouquet <br>price <del>500 $</del> &nbsp; 320$</p>
            </div>
         </div>
         <div class="im">
               <img src="./th (3).jfif.jpg">
            <div class="title">
               <p> Beautiful rose bouquet <br>price <del>450 $</del> &nbsp; 300$</p>
            </div>
         </div>
         <div class="im">
               <img src="./th (4).jfif.jpg">
            <div class="title">
               <p> beautiful bouquet of baby blue <br>price <del>690 $</del> &nbsp; 370$</p>
            </div>
         </div>
         <div class="im">
               <img src="./th (5) cop.jfif.jpg">
            <div class="title">
               <p> beautiful White bouquet <br>price <del>600 $</del> &nbsp; 300$</p>
            </div>
         </div>
         <div class="im">
               <img src="./th (6).jfif.jpg">
            <div class="title">
               <p> Beautiful blue bouquet <br>price <del>500 $</del> &nbsp; 260$</p>
            </div>
         </div>
         <div class="im">
               <img src="./th (35).jfif.jpg">
            <div class="title">
               <p>  beautiful grean bouquet <br>price <del>600 $</del> &nbsp; 350$</p>
            </div>
         </div>
         <div class="im">
               <img src="./th (11).jfif.jpg">
            <div class="title">
               <p>A beautiful red bouquet <br>price <del>400 $</del> &nbsp; 250$</p>
            </div>
         </div>                 
         <div class="im">
               <img src="./th (12).jfif.jpg">
            <div class="title">
               <p>  beautiful bouquet <br>price <del>400 $</del> &nbsp; 250$</p>
            </div>
         </div>                    
         <div class="im">
               <img src="./th (32).jfif.jpg">
            <div class="title">
               <p> Very beautiful bouquet <br>price <del>600 $</del> &nbsp; 300$</p>
            </div>
         </div>                        
         <div class="im">
               <img src="./th (33).jfif.jpg">
            <div class="title">
               <p> beautiful blue bouquet <br>price <del>500 $</del> &nbsp; 300$</p>
            </div>
         </div>
         <div class="im">
               <img src="./th (15).jfif.jpg">
            <div class="title">
               <p> Amazing red bouquet <br>price <del>1000 $</del> &nbsp; 500$</p>
            </div>
         </div>
         <div class="im">
               <img src="./th (20).jfif.jpg">
            <div class="title">
               <p> Beautiful Flowers box <br>price <del>1100 $</del> &nbsp;550$</p>
            </div>
         </div>                          
      </div>
   </body>
</html>
<style>
   /*starting CSS code*/
   img{
      width: 300px;
      height: 400px;
      margin: 20px;
      display: block;
      float: right;
   }
   body{
      background-color:aliceblue;
      margin: 0;
      padding: 0;
   }
   ol{
        list-style-type: none;
        background-color:rgb(85, 158, 223);
        display: flex;
        padding-left: 350px ; 
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
   h1{
      font-size: xx-large;
      font-style: italic;
      text-align: center;
      color: rgb(85, 158, 223);
   }
   .all .im{
      color: rgb(246, 247, 248);
      float: left;
      margin-left: 80px;
      border-radius: 15px;
   }
   .all {
      margin-top:50;
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
   }
   .title{
      font-size: x-large;
      font-style: initial;
      padding-bottom: 20px;
      margin-left: 10px;
      text-transform: capitalize;
   }
   .im:hover{
      margin-top: -8px;
   }
   .im {
      background-color: rgb(85, 158, 223);
      padding:5px;
      padding-bottom:0;
      transition: 0.3s;
   }
   .im img {
      height: 300px;
      max-width: 320px;
      border-radius: 15px;
   }
   del {
      color: brown;
   }
</style>