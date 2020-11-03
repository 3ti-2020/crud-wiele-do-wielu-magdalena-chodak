<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magdalena Chodak gr2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">Magdalena Chodak</div>
<div class="main">

<form action='insert.php' method='POST'>
        <br>Autor:
        <input type='text' name='name'>
        <br>Tytuł:
        <input type='text' name='tytul'>
        <br><input class='btn' type='submit' value='DODAJ'>
    </form>
</div>
<div class="sidebar">
<?php
    $servername="127.0.0.1";
    $username="root";
    $password="";
    $dbname="library";

    $conn=new mysqli($servername,$username,$password,$dbname);

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
<div class="footer"></div>
</body>
<script src="script.js"></script>
</html>