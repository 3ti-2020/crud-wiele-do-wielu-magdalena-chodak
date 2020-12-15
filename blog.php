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
<h1>BLOG</h1>
</div> 
<div class="menu">  
<A href="index.php">Powrót</a>
</div>
</div>

<div class="sidebar">
<?php
      $servername="mysql-magdaa.alwaysdata.net";
      $username="magdaa";
      $password="Pocomito123";
      $dbname="magdaa_lib";

        $conn = new mysqli($servername, $username, $password, $dbname);
    
        $result = $conn->query("SELECT id,title,post,tag FROM `tag_post`,`tag`,`post` where tag_post.id_post=post.id_post and tag_post.id_tag=tag.id_tag");
       
    ?>


    <div class="posts">
        <?php
                while($row = $result->fetch_assoc()){
                    echo("<div class='tytul'>");
                        echo("<h1>".$row['title']."</h1>");
                    echo("</div>");
                    echo("<div class='tekst'>");
                        echo("<p>".$row['post']."</p>"); 
                    echo("</div>");
                    echo("<div class='tagi'>");
                    echo("<h3>".$row['tag']."</h3>");
                echo("</div>"); 
                }
               
        ?>
    </div>

</body>
</html>