<?php
// starting PHP code

//connection code to DB
require("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
    <!--starting HTML code-->
    <head>
        <title>Order Details</title>
        <link rel="shortcut icon" href="./th (1).jfif.jpg" type="img/x-icon">
    </head>
    <body>
        <ol>
            <li><a href="./Home.php">Home</a></li>
            <li><a href="./Submit.php">Make Order</a></li>
            <li><a href="./Edit.php">Edit Order</a></li>
            <li><a href="./Delete.php">Delete Order</a></li>
            <li><a href="https://wa.me/+201005672012" target="blank">Contact Us</a></li>
        </ol>
        <h1>See orders details here</h1>
        <div class="container">
            <table>
                <tr>
                    <th><h2>ID</h2></th>
                    <th><h2>Name</h2></th>
                    <th><h2>Address</h2></th>
                    <th><h2>Flower Name</h2></th>
                    <th><h2>Phone Number</h2></th>
                </tr>
                <?php
                    $sql_buyers = "SELECT `B-ID`, `B-Name`, `B-Address` FROM `buyers`";
                    $sql_flowers = "SELECT `F-name` FROM `flowers`";
                    $sql_phone = "SELECT `phone-number` FROM `buyers phone`";

                    $row_buyers = mysqli_query($conn, $sql_buyers);
                    $result_buyers = mysqli_fetch_all($row_buyers, MYSQLI_ASSOC);

                    $row_flowers = mysqli_query($conn, $sql_flowers);
                    $result_flowers = mysqli_fetch_all($row_flowers, MYSQLI_ASSOC);

                    $row_phone = mysqli_query($conn, $sql_phone);
                    $result_phone = mysqli_fetch_all($row_phone, MYSQLI_ASSOC);

                    foreach ($result_buyers as $key => $data)
                    {
                    echo '<tr>
                            <td><h3>'.$data['B-ID'].'</h3></td>
                            <td><h3>'.$data['B-Name'].'</h3></td>
                            <td><h3>'.$data['B-Address'].'</h3></td>
                            <td><h3>'.$result_flowers[$key]['F-name'].'</h3></td>
                            <td><h3>'.$result_phone[$key]['phone-number'].'</h3></td>
                            <td><button type="edit"><a href="./Edit.php"> Edit </a></button></td>
                            <td><button type="delete"><a href="./Delete.php"> Delete </a></button></td>
                        </tr>';
                    }

                    mysqli_close($conn);
                ?>
            </table>
        </div>
</html>
<style>
   /*starting CSS code*/
    body{
        background-color:aliceblue;
        margin: 0;
        padding: 0;
    }
    .container{
        width: 80%;
        border-radius: 15px;
        margin: auto;
        padding-left: 25px;
        padding-right: 25px;
        background-color:rgb(85, 158, 223) ;
    }
    th h2{
        padding-right: 20px;
        padding-left: 50px;
    }
    td h3{
        padding-left: 50px;
        color: black;
    }
    h1{
        font-size: xx-large;
        font-style: italic;
        text-align: center;
        color: rgb(85, 158, 223);
    }
    ol{
        list-style-type: none;
        background-color:rgb(85, 158, 223);
        display: flex;
        padding-left: 220px ;
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
    button[type=delete] {
        width: 100%;
        font-size: 18px;
        background-color: rgb(188, 1, 1);
        padding: 5px 5px;
        border: outset;
        border-color: white;
        border-radius: 15px;
        cursor: pointer;
    }
    button[type=edit] {
        width: 100%;
        font-size: 18px;
        background-color: rgb(1, 188, 57);
        padding: 5px 5px;
        border: outset;
        border-color: white;
        border-radius: 15px;
        cursor: pointer;
    }
    td a{
        color: White;
        padding: 15px;
        text-decoration: none;
    }
</style>