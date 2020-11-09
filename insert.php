<?php
           $servername="sql7.freemysqlhosting.net";
           $username="sql7374471";
           $password="3ysRJhApZw";
           $dbname="sql7374471";
            $conn=new mysqli($servername,$username,$password,$dbname);
            // if (!$conn) {
            //     die("Connection failed: " . mysqli_connect_error());
            //   }
              
              $name = $_POST['name'];
              $tytul = $_POST['tytul'];
        

              $sql1 = "INSERT INTO `lib_autorzy`(`id_autor`, `name`) VALUES (NULL, '$name')";
              if ($conn->query($sql1) === TRUE) {
                  $last_id1 = $conn->insert_id;
                }
              $sql2 = "INSERT INTO `lib_tytuly`(`id_tytul`, `tytul`) VALUES (NULL, '$tytul')";
              if ($conn->query($sql2) === TRUE) {
                  $last_id2 = $conn->insert_id;
                }
              $sql3 = "INSERT INTO `lib_autor_tytul`(`id_autor_tytul`, `id_autor`, `id_tytul`) VALUES (NULL, $last_id1, $last_id2)";
              $conn->query($sql3);
              mysqli_close($conn);
            
          
            //   header("location:index.php");
            ?>
