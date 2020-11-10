<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magdalena Chodak gr2</title>
    <link rel="stylesheet" href="style_admin.css">
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
<A href="index.php">WYLOGUJ</a>
</div>
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

    $result=$conn->query("select `id_autor_tytul`, `name`,`tytul` from `lib_autor_tytul`,`lib_tytuly`, `lib_autorzy` where `lib_tytuly`.`id_tytul` =`lib_autor_tytul`.`id_tytul` and `lib_autor_tytul`.`id_autor` = `lib_autorzy`.`id_autor`");
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
        <input type='submit' class='del' value='x'>
    </form>
</td>");
        echo("</tr>");
    };
    echo("</table>");
    ?>
    <?php
    $servername="sql7.freemysqlhosting.net";
    $username="sql7374471";
    $password="3ysRJhApZw";
    $dbname="sql7374471";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    $result=$conn->query("select * from wypozyczenia");
    echo("<table border='1'>");
    echo("<tr>
    <th>id_wyp</th>
    <th>id_user</th>
    <th>id_autor_tytul</th>
    <th>data_wyp</th>
    <th>data_odd</th>
    </tr>");

    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("
        <td>".$row['id_wyp']."</td>
        <td>".$row['id_user']."</td>
        <td>".$row['id_autor_tytul']."</td>
        <td>".$row['data_wyp']."</td>
        <td>".$row['data_oddania']."</td>");
        echo("</tr>");
    };
    echo("</table>");
    ?>
    <?php
    $servername="sql7.freemysqlhosting.net";
    $username="sql7374471";
    $password="3ysRJhApZw";
    $dbname="sql7374471";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    $result=$conn->query("select * from users");
    echo("<table border='1'>");
    echo("<tr>
    <th>id</th>
    <th>Login</th>
    <th>Password</th>
    </tr>");

    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("
        <td>".$row['id_user']."</td>
        <td>".$row['login']."</td>
        <td>".$row['password']."</td>");
        echo("</tr>");
    };
    echo("</table>");
    ?>
</div>
<div class="footer">

   <div class="books">
   <h3>Dodaj książke:</h3>
   <form action='insert_books.php' method='POST'>
        <br>Autor:
        <input type='text' name='name'>
        <br>Tytul:
        <input type='text' name='tytul'>
        <br><input  type='submit' value='DODAJ'>
    </form>
   </div>
   <div class="wypo">
   <h3>Wypozycz:</h3>
   <form action='insert_wyp.php' method='POST'>
        <br>Ksiazka:
            <select name="id_autor_tytul">
                <option>Mickiewicz - Pan Taduesz</option>
                <option>Tolkien - Hobbit</option>
                <option>Christie - Dom zbrodni</option>
                <option>Zeromski - Przedwiosnie</option>
            </select>
            
        <br>Kto:
            <select name="id_user">
                <option name="1">user1</option>
                <option name="2">user2</option>
                <option name="3">user3</option>
            </select>
        
        <br>Kiedy wypożyczył:
        <input type='date' name='data_wyp'>
        <br>Kiedy oddał:
        <input type='date' name='data_odd'>
        <br><input  type='submit' value='Wypozycz'>
    </form>
   </div>
   <div class="users">
   <h3>Dodaj użytkownika:</h3>
   <form action='insert_users.php' method='POST'>
        <br>Login:
        <input type='text' name='login'>
        <br>Password:
        <input type='text' name='password'>
        <br><input type='submit' value='DODAJ'>
    </form>
   </div>

    
</div>
</body>
</html>