<?php
           $servername="sql7.freemysqlhosting.net";
           $username="sql7374471";
           $password="3ysRJhApZw";
           $dbname="sql7374471";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              
             
           
            $login=$_POST['login'];
            $password=$_POST['password'];

            $sql="INSERT INTO users (`id_user`, `login`, `password`) values (null, '$login', '$password')";

            echo("$sql");
            mysqli_query($conn,$sql);

          
              header("location:admin.php");
            ?>
