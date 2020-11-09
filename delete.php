<?php
           $servername="sql7.freemysqlhosting.net";
           $username="sql7374471";
           $password="3ysRJhApZw";
           $dbname="sql7374471";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }

           
            $sql="DELETE FROM lib_autor_tytul WHERE id_autor_tytul= " .$_POST['id_to_delete'] ;

            echo("$sql");
            mysqli_query($conn,$sql);
            header("location:index.php");
?>