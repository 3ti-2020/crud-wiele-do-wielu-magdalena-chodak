<?php
            $servername="127.0.0.1";
            $username="root";
            $password="";
            $dbname="library";
            $conn=new mysqli($servername,$username,$password,$dbname);

           
            $sql="DELETE FROM lib_autor_tytul WHERE id_autor_tytul= " .$_POST['id_to_delete'] ;

            echo("$sql");
            mysqli_query($conn,$sql);
            // header("location:index.php");
?>