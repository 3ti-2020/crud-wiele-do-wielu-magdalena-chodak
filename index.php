<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magdalena Chodak gr2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
<div class="git">
<a href="https://github.com/3ti-2020/crud-wiele-do-wielu-magdalena-chodak"><img src="https://miro.medium.com/max/2560/1*JLYlSLSK8-AZo8gt9UdYqA.jpeg"></a>
</div>
<div class="title">
<h1>Magdalena Chodak</h1>
</div> 
<div class="menu">
    
<button id="modal-btn" class="button">Logowanie</button>

<div id="my-modal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Logowanie</h2>
    </div>
    <div class="modal-body">
    <?php 
    session_start();
    // var_dump($_SESSION);
    

    if(isset($_GET['akcja']) && $_GET['akcja']=='wyloguj'){
        unset($_SESSION['zalogowany']);
        
    }

    if(!isset($_SESSION['zalogowany'])){
        
    ?>

    <form action="admin.php" method="POST">
        <br>Login:
        <input type="text" name="login" placeholder="login">
         <br>Password:
        <input type="text" name="pass" placeholder="pass">
        <input type="submit" value="zaloguj">
    </form>
    <?php 
    }else{
        // echo("<li>zalogowany");
        echo("<br><a href='index.php?akcja=wyloguj'>WYLOGUJ</a>");
    };
    ?>
    </div>
    <div class="modal-footer">
        Admin -> hasło:a
    </div>
  </div>
</div>
   
    </div>    
</div>
<div class="main">
    
    <a href='card.php' >Kartka</a>
    <a href='todo.html' >To Do</a>

</div>
<div class="sidebar">
<?php
    $servername="mysql-magdaa.alwaysdata.net";
    $username="magdaa";
    $password="Pocomito123";
    $dbname="magdaa_lib";
    //  $servername="sql7.freemysqlhosting.net";
    // $username="sql7374471";
    // $password="3ysRJhApZw";
    // $dbname="sql7374471";
    
    // $servername="127.0.0.1";
    // $username="root";
    // $password="";
    // $dbname="library";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    $result=$conn->query("select `id_autor_tytul`, `name`,`tytul` from `autor_tytul`,`tytuly`,`autorzy` where `tytuly`.`id_tytul` = `autor_tytul`.`id_tytul` and `autor_tytul`.`id_autor` = `autorzy`.`id_autor`");
    echo("<table border='1'>");
    echo("<tr>
    <th>autor</th>
    <th>tytul</th>
    </tr>");

    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("
        <td>".$row['name']."</td>
        <td>".$row['tytul']."</td>");
        echo("</tr>");
    };
    echo("</table>");
    ?>
</div>
<div class="footer">
   
    
    
</div>
</body>
<script src="logowanie.js"></script>
</html>