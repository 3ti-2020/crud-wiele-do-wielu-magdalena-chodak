<?php
          $servername="mysql-magdaa.alwaysdata.net";
          $username="magdaa";
          $password="Pocomito123";
          $dbname="magdaa_lib";
          
    //       $servername="127.0.0.1";
    //  $username="root";
    //  $password="";
    //  $dbname="library";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              
             
    $name = $_POST['name'];
$tytul = $_POST['tytul'];

// $sql0="INSERT INTO books (`id_autor_tytul`, `name`, `tytul`) values (14, '$name', '$tytul')";

//             echo("$sql0");
//             mysqli_query($conn,$sql0);


$sql = "INSERT INTO autorzy VALUES (null, '$name')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql2 = "INSERT INTO tytuly VALUES(null, '$tytul')";

if ($conn->query($sql2) === TRUE) {
    $last_id2 = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id2;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql3 = "INSERT INTO autor_tytul VALUES (null, '$last_id', '$last_id2')";

if ($conn->query($sql3) === TRUE) {
    $last_id3 = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id3;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    
   

              header("location:admin.php");
            ?>



