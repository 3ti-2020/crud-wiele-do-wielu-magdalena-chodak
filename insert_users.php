<?php
           $servername="remotemysql.com";
           $username="Vdn5eyMgWu";
           $password="rbvVhbP03t";
           $dbname="Vdn5eyMgWu";
           
    //       $servername="127.0.0.1";
    //  $username="root";
    //  $password="";
    //  $dbname="library";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              
             
           
            $login=$_POST['login'];
            $password=$_POST['password'];

            $sql="INSERT INTO users (`id_user`, `login`, `password`) values (13, '$login', '$password')";

            echo("$sql");
            mysqli_query($conn,$sql);

          
              header("location:admin.php");
            ?>
