<?php
           $servername="sql7.freemysqlhosting.net";
           $username="sql7374471";
           $password="3ysRJhApZw";
           $dbname="sql7374471";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              
           
    $sql_autor= "INSERT INTO `lib_autorzy`(`name`) VALUES ('".$_POST['name']."')";
    $sql_tytul= "INSERT INTO `lib_tytuly`(`tytul`) VALUES ('".$_POST['tytul']."')";

    mysqli_query($conn, $sql_autor);
    mysqli_query($conn, $sql_tytul);

    $sql_a_t= "INSERT INTO `lib_autor_tytul`(`id_autor`, `id_tytul`) VALUES ('".$_POST['id_autor']."','".$_POST['id_tytul']."')";

    mysqli_query($conn, $sql_a_t);
            
         
    
          
              header("location:admin.php");
            ?>



