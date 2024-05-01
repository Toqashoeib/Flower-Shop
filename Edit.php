<?php
    // starting PHP code

    //connection code to DB
    require("connect.php");
    
    //Edit Button
    if (isset($_POST["edit"]))
    {
        function executeSqlQuery($conn, $edit)
        {
            if (mysqli_multi_query($conn, $edit))
            {
                echo
                '<script>
                    alert("Order Edited Successfully")
                </script>';
            }
            else
            {
            echo
                '<script>
                    alert("Failed to Edit The Order!");
                    console.error(Error($edit, mysqli_error($conn)));
                </script>';
            }
        }

        // get  the data from the form
        $buyeraddress = $_POST["B-Address"];
        $buyersid = $_POST["B-ID"];

        // SQL commands (inserting data to DB tables)
        $edit = "UPDATE `buyers` SET `B-Address`='$buyeraddress' WHERE `B-ID` = '$buyersid';";

        // execute the queries
        executeSqlQuery($conn, $edit);

        // close the connection
        $conn->close();
    }
?>

<html>
    <!--starting html code-->
    <head>
        <meta charset="UTF-8" />
        <link rel="shortcut icon" href="./th (1).jfif.jpg" type="img/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
        <title>Edit Order</title>
    </head>
    <body>
        <ol>
            <li><a href="./Home.php">Home</a></li>
            <li><a href="./Submit.php">Make Order</a></li>
            <li><a href="./Delete.php">Delete Order</a></li>
            <li><a href="./Order Details.php">Order Details</a></li>
            <li><a href="https://wa.me/+201005672012" target="blank">Contact Us</a></li>
        </ol>
            <div class="container">
        <section class="register">
                <h1>You can edit any order from here</h1>
            </div>
            <div class="edit">
                <form action="Edit.php" method="post">
                        <label>Identification Number</label>
                        <input type="text" name="B-ID">
                    <br>
                        <label> Name</label>
                        <input type="text" name="B-Name">
                    <br>
                        <label>phone</label>
                        <input class="tel" id="phone" type="tel" name="phone-number">
                    <br>
                        <label>Address</label>
                        <input type="text" name="B-Address">
                    <br>
                        <label>Flower name</label>
                        <input type="text" name="F-name">
                    <br>
                        <button type ="edit" name="edit"> Edit </button> 
                </form>
            </div>
        </section>   
    </body>
    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, { utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",});
    </script>
</html>
<style>
    /*starting CSS code*/
    body{
        background-color:aliceblue;
        margin: 0;
        padding: 0;
    }
    .edit{
        width: 500px;
        border-radius: 15px;
        margin: auto;
        padding: 20px;
        background-color:rgb(85, 158, 223) ;
    }
    h1{
        font-size: xx-large;
        font-style: italic;
        text-align: center;
        color: rgb(85, 158, 223);
    }
    label{
        font-weight: bold;
        color: aliceblue;
    }
    input{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        border: 3px solid rgb(85, 158, 223);
        border-radius: 15px;
        box-sizing: border-box;
    }
    button[type=edit] {
        width: 100%;
        font-size: 18px;
        background-color: rgb(1, 188, 57);
        color: aliceblue;
        padding: 14px 20px;
        margin: 8px 0;
        border: outset;
        border-color: white;
        border-radius: 20px;
        cursor: pointer;
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
</style>