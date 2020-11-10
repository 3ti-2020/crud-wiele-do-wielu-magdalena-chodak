<?php
           $servername="sql7.freemysqlhosting.net";
           $username="sql7374471";
           $password="3ysRJhApZw";
           $dbname="sql7374471";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              
             
           
            $id_autor_tytul=$_POST['id_autor_tytul'];
            $id_user=$_POST['id_user'];
            $data_wyp=$_POST['data_wyp'];
            $data_odd=$_POST['data_odd'];

            $sql="INSERT INTO wypozyczenia (`id_autor_tytul`,`id_user`, `data_wyp`, `data_odd`) values (null, '$id_autor_tytul', '$id_user','$data_wyp','$data_odd')";

            echo("$sql");
            mysqli_query($conn,$sql);

          
              header("location:admin.php");
            ?>
