<?php
    $server = "localhost";                    //server name
    $user = "root";                           //user name
    $password = "";                           //password is empty for sql
    $db = "db_movies";                              //type database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('ricky' , 'rakshit' , 'charlie' , 'shruthi' , 2003),('rocky' , 'yash' , 'nidhi' , 'neel' , 2022),('ASN' , 'ravi' , 'shreenidhi' , 'prashanth' , 2010),('vikram' , 'kamal' , 'pooja' , 'nelson' , 2022),('alone' , 'emran' , 'bipasha' , 'virappa' , 2001);       //query

             $insert = mysqli_query($conn,$sql);                     //executing query
             echo '<script type="text/javascript">';
                echo 'alert("movies added successfully");';
                echo 'window.location.href="display.php";';
                echo "</script>";
?>
