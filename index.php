<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $servername="127.0.0.1";
    $username="root";
    $password="";
    $dbname="library";

    $conn=new mysqli($servername,$username,$password,$dbname);

    $result=$conn->query("select * from ksiazki");
    echo("<table border='1'>");
    echo("<tr>
    <th>id_autor_tytul</th>
    <th>name</th>
    <th>tytul</th>
    </tr>");

    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("
        <td>".$row['id_autor_tytul']."</td>
        <td>".$row['name']."</td>
        <td>".$row['tytul']."</td>
        ");
        echo("</tr>");
    };
    echo("</table>");
    ?>
</body>
<script src="script.js"></script>
</html>