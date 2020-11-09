<?php
           $servername="sql7.freemysqlhosting.net";
           $username="sql7374471";
           $password="3ysRJhApZw";
           $dbname="sql7374471";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              
           
    $sql1= "INSERT INTO `lib_autorzy`(`id_autor`,`name`) VALUES (null,'".$_POST['name']."')";
    mysqli_query($conn, $sql1);

    $sql2= "INSERT INTO `lib_tytuly`(`id_tytul`,`tytul`) VALUES (null,'".$_POST['tytul']."')";
    mysqli_query($conn, $sql2);

    $sql3= "INSERT INTO `lib_autor_tytul`( `id_autor_tytul`,`id_autor`, `id_tytul`) VALUES (null,'".$_POST['id_autor']."','".$_POST['id_tytul']."')";
    mysqli_query($conn, $sql3);

    
   

              header("location:admin.php");
            ?>



