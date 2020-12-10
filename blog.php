<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style_blog.css">
</head>
<body>
<div class="header">
<div class="git">
<a href="https://github.com/3ti-2020/crud-wiele-do-wielu-magdalena-chodak"><img src="https://miro.medium.com/max/2560/1*JLYlSLSK8-AZo8gt9UdYqA.jpeg"></a>
</div>
<div class="title">
<h1>Magdalena Chodak gr2</h1>
</div> 
<div class="menu">  
<A href="index.php">Powrót</a>
</div>
</div>

<div class="sidebar">
<?php
//  $servername="127.0.0.1";
//  $username="root";
//  $password="";
//  $dbname="library";
$servername="mysql-magdaa.alwaysdata.net";
    $username="magdaa";
    $password="Pocomito123";
    $dbname="magdaa_lib";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    $result=$conn->query("SELECT id,title,post,tag FROM `tag_post`,`tag`,`post` where tag_post.id_post=post.id_post and tag_post.id_tag=tag.id_tag");
    echo("<table border='1'>");
    echo("<tr>
    <th>id</th>
    <th>tytul</th>
    <th>post</th>
    <th>tag</th>
    </tr>");

    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("
        <td>".$row['id']."</td>
        <td>".$row['title']."</td>
        <td>".$row['post']."</td>
        <td>".$row['tag']."</td>
        <td>
        <form action='delete.php' method='POST'>
        <input type='text'  value=".$row['id']." style='display: none' name='id_to_delete'>
        <input type='submit' class='del' value='x'>
    </form>
</td>");
        echo("</tr>");
    };
    echo("</table>");
    ?>
</div>
<div class="footer">

   <div class="books">
   <h3>Dodaj post:</h3>
   <form action='insert_post.php' method='POST'>
        <br>tytul:
        <input type='text' name='title'>
        <br>post:
        <input type='text' name='post'>
        <br>tag:
        <input type='text' name='tag'>
        <br><input  type='submit' value='DODAJ'>
    </form>
   </div>
   
</div>
</body>
</html>
