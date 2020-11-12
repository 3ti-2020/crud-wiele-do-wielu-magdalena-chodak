<?php
            $servername="remotemysql.com";
            $username="Vdn5eyMgWu";
            $password="rbvVhbP03t";
            $dbname="Vdn5eyMgWu";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }

           
            $sql="DELETE FROM books WHERE id_autor_tytul= " .$_POST['id_to_delete'] ;

            echo("$sql");
            mysqli_query($conn,$sql);
            header("location:admin.php");
?>