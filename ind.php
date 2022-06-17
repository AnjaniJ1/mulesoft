<?php
    $server = "localhost";                    //server name
    $user = "root";                           //user name
    $password = "";                           //password is empty for sql
    $db = "db";                              //type database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('chichore' , 'sushanth' , 'shradha' , 'rakshith' , 2022),('jabalpur' , 'tushar' , 'shilpa' , 'neel' , 2008),('ASN' , 'ravi' , 'shreenidhi' , 'prashanth' , 2010),('humpty sharma' , 'kamal' , 'nayana' , 'nelson' , 2009),('ganga' , 'rohit' , 'aishwarya' , 'virappa' , 2001);       //query

             $insert = mysqli_query($conn,$sql);                     //executing query
             echo '<script type="text/javascript">';
                echo 'alert("movies added successfully");';
                echo 'window.location.href="main.php";';
                echo "</script>";
?>
