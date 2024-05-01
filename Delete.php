<?php
    // starting PHP code

    //connection code to DB
    require("connect.php");
    
    //Delete Button
    if (isset($_POST["delete"]))
    {
        function executeSqlQuery($conn, $delete)
        {
            if (mysqli_multi_query($conn, $delete))
            {
                echo
                '<script>
                    alert("Order Deleted Successfully")
                </script>';
            }
            else
            {
            echo
                '<script>
                    alert("Failed to Delete The Order!");
                    console.error(Error($delete, mysqli_error($conn)));
                </script>';
            }
        }

        // get  the data from the form
        $buyersid = $_POST["B-ID"];

        // SQL commands (inserting data to DB tables)
        $delete = "DELETE FROM `buyers` WHERE `B-ID` = '$buyersid';";

        // execute the queries
        executeSqlQuery($conn, $delete);

        // close the connection
        $conn->close();
    }
?>
<html>
    <!--starting html code-->
    <head>
        <meta charset="UTF-8" />
        <link rel="shortcut icon" href="./th (1).jfif.jpg" type="img/x-icon">
        <title>Delete Order</title>
    </head>
    <body>
        <ol>
            <li><a href="./Home.php">Home</a></li>
            <li><a href="./Submit.php">Make Order</a></li>
            <li><a href="./Edit.php">Edit Order</a></li>
            <li><a href="./Order Details.php">Order Details</a></li>
            <li><a href="https://wa.me/+201005672012" target="blank">Contact Us</a></li>
        </ol>
            <div class="container">
        <section class="register">
                <h1>You can delete any order from here</h1>
            </div>
            <div class="edit">
                <form action="Delete.php" method="post">
                        <label>Identification Number</label>
                        <input type="text" name="B-ID">
                    <br>
                        <label> Name</label>
                        <input type="text" name="B-Name">
                    <br>
                        <label>Flower name</label>
                        <input type="text" name="F-name">
                    <br>
                        <button type ="delete" name="delete"> Delete </button>
                </form>
            </div>
        </section>   
    </body>
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
    button[type=delete] {
        width: 100%;
        font-size: 18px;
        background-color: rgb(188, 1, 1);
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