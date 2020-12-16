<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="styl_blog.css">
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
<a class="back" href="index.php">Powrót</a>
</div>
</div>

<div class="sidebar">



    <div class="posts">
        <?php
                $servername="mysql-magdaa.alwaysdata.net";
                $username="magdaa";
                $password="Pocomito123";
                $dbname="magdaa_lib";
          
                  $conn = new mysqli($servername, $username, $password, $dbname);
               
            //    if(isset($_GET['akcja'])){  
            //     $zmienna = $_GET['akcja'];
            //     $result=$conn->query("SELECT Distinct post.id_post,title,post FROM `tag_post`,`tag`,`post` where tag_post.id_post=post.id_post and tag_post.id_tag=tag.id_tag and tag='$zmienna'");
            // }else{
            //         $result = $conn->query("SELECT Distinct title, post, id_post FROM post");  
            //     } 
                
            $result = $conn->query("SELECT Distinct title, post, id_post FROM post"); 
                while($row = $result -> fetch_assoc()){
                    echo("<div class='pole'>");
                        echo("<div class='tytul'><h2>".$row['title']."</h2></div>");
                        echo("<div class='tekst'><p>".$row['post']."</p></div>");
                        $id = $row['id_post'];
                    $result2 = $conn -> query("SELECT tag FROM `tag_post`,`tag`,`post` where tag_post.id_post=post.id_post and tag_post.id_tag=tag.id_tag AND tag_post.id_post = $id");
                    
                        while($row2 = $result2 -> fetch_assoc()){
                            echo("<tr><b><a class='tagi' href='?akcja= ".$row2['tag']."'>".$row2['tag']."</a></b></tr> ");
                        }
                    echo("</div>");
                }
               
        ?>
    </div>

</body>
</html>