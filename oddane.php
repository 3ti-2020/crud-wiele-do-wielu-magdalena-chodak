<?php
           $servername="mysql-magdaa.alwaysdata.net";
           $username="magdaa";
           $password="Pocomito123";
           $dbname="magdaa_lib";
           
    //     $servername="127.0.0.1";
    //  $username="root";
    //  $password="";
    //  $dbname="library";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }

           
            $sql="UPDATE `wypozyczenia` set data_odd=CURRENT_DATE WHERE id_wyp= " .$_POST['id_to_wyp'] ;
            // UPDATE `wypozyczenia` SET data_odd=CURRENT_DATE WHERE id_wyp=''

            echo("$sql");
            mysqli_query($conn,$sql);
            // header("location:admin.php");
?>