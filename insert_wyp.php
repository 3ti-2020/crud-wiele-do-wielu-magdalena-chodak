<?php
           $servername="sql7.freemysqlhosting.net";
           $username="sql7374471";
           $password="3ysRJhApZw";
           $dbname="sql7374471";
    //       $servername="127.0.0.1";
    //  $username="root";
    //  $password="";
    //  $dbname="library";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              
             
           
            $tytul=$_POST['tytul'];
            $user=$_POST['user'];
            $data_wyp=$_POST['data_wyp'];
            $data_odd=$_POST['data_odd'];

            $sql="INSERT INTO wypozyczenia (`id_wyp`,`user`,`tytul`, `data_wyp`, `data_odd`) values (null, '$user', '$tytul','$data_wyp','$data_odd')";

            echo("$sql");
            mysqli_query($conn,$sql);

          
              // header("location:admin.php");
            ?>
