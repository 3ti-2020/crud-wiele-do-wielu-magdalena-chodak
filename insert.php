<?php
           $servername="sql7.freemysqlhosting.net";
           $username="sql7374471";
           $password="3ysRJhApZw";
           $dbname="sql7374471";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              
            $name = $_POST['name'];
            $tytul = $_POST['tytul'];
            
            $sql = "INSERT INTO lib_autorzy VALUES (null, '$name')";
            
            if ($conn->query($sql) === TRUE) {
                $last_id = $conn->insert_id;
                echo "New record created successfully. Last inserted ID is: " . $last_id;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $sql2 = "INSERT INTO lib_tytuly VALUES(null, '$tytul')";
            
            if ($conn->query($sql2) === TRUE) {
                $last_id2 = $conn->insert_id;
                echo "New record created successfully. Last inserted ID is: " . $last_id2;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $sql3 = "INSERT INTO lib_autor_tytul VALUES (null, '$last_id', '$last_id2')";
            
            if ($conn->query($sql3) === TRUE) {
                $last_id3 = $conn->insert_id;
                echo "New record created successfully. Last inserted ID is: " . $last_id3;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            

             header("location:index.php");
?>