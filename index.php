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
    
    <a href='card.php' >Kartka</a>
   
    </div>    
</div>
<div class="main">
<form action='insert.php' method='POST'>
        <br>Autor:
        <input type='text' name='name'>
        <br>Tytuł:
        <input type='text' name='tytul'>
        <br><input type='submit' value='DODAJ'>
    </form>
</div>
<div class="sidebar">
<?php
    $servername="sql7.freemysqlhosting.net";
    $username="sql7374471";
    $password="3ysRJhApZw";
    $dbname="sql7374471";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    $result=$conn->query("select * from ksiazki");
    echo("<table border='1'>");
    echo("<tr>
    <th>id</th>
    <th>autor</th>
    <th>tytul</th>
    </tr>");

    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("
        <td>".$row['id_autor_tytul']."</td>
        <td>".$row['name']."</td>
        <td>".$row['tytul']."</td>
        <td>
        <form action='delete.php' method='POST'>
        <input type='text'  value=".$row['id_autor_tytul']." style='display: none' name='id_to_delete'>
        <input type='submit' value='delete'>
    </form>
</td>");
        echo("</tr>");
    };
    echo("</table>");
    ?>
</div>
<div class="footer">
    <div class="log">
    <h3>NIESPODZIANKĘ?</h3>
<?php 
    session_start();
    // var_dump($_SESSION);
    

    if(isset($_GET['akcja']) && $_GET['akcja']=='wyloguj'){
        unset($_SESSION['zalogowany']);
        
    }

    if(!isset($_SESSION['zalogowany'])){
        
    ?>

    <form action="card.php" method="POST">
        <br>Login:
        <input type="text" name="login" placeholder="login">
         <br>Pass:a
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
    
    
</div>
</body>
<script src="script.js"></script>
</html>