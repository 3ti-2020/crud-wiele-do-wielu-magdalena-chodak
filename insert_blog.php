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
              
             
    $title = $_POST['title'];
$post = $_POST['post'];
$tag = $_POST['tag'];


$sql = "INSERT INTO post VALUES (null, '$title','$post')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql2 = "INSERT INTO tag VALUES(null, '$tag')";

if ($conn->query($sql2) === TRUE) {
    $last_id2 = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id2;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql3 = "INSERT INTO tag_post VALUES (null, '$last_id', '$last_id2')";

if ($conn->query($sql3) === TRUE) {
    $last_id3 = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id3;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    
   

              header("location:blog.php");
            ?>



