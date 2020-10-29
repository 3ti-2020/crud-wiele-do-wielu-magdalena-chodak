<?php
            $servername="127.0.0.1";
            $username="root";
            $password="";
            $dbname="test";
            $conn=new mysqli($servername,$username,$password,$dbname);

            $imie=$_POST['name'];
            $zarobki=$_POST['tytul'];

            $sql="INSERT INTO lib_autorzy (`name`, `tytul`) values ('$name', '$tytul')";
            $sql="INSERT INTO lib_tytuly (`name`, `tytul`) values ('$name', '$tytul')";

            echo("$sql");
            mysqli_query($conn,$sql);
            // header("location:index.php");
?>