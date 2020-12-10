<?php
             $servername="mysql-magdaa.alwaysdata.net";
             $username="magdaa";
             $password="Pocomito123";
             $dbname="magdaa_lib";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }

           
            $sql="DELETE FROM tag_post WHERE id= " .$_POST['id'] ;

            echo("$sql");
            mysqli_query($conn,$sql);
            header("location:blog.php");
?>