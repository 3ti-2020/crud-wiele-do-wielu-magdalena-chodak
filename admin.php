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
//  $servername="127.0.0.1";
//  $username="root";
//  $password="";
//  $dbname="library";
$servername="remotemysql.com";
$username="Vdn5eyMgWu";
$password="rbvVhbP03t";
$dbname="Vdn5eyMgWu";


    $conn=new mysqli($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    $result=$conn->query("select * from books");
    echo("<table border='1'>");
    echo("<tr>
    <th>autor</th>
    <th>tytul</th>
    </tr>");

    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("
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
    //  $servername="127.0.0.1";
    //  $username="root";
    //  $password="";
    //  $dbname="library";
    $servername="remotemysql.com";
    $username="Vdn5eyMgWu";
    $password="rbvVhbP03t";
    $dbname="Vdn5eyMgWu";
    

    $conn=new mysqli($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    $result=$conn->query("select * from wypozyczenia");
    echo("<table border='1'>");
    echo("<tr>
    <th>user</th>
    <th>tytul</th>
    <th>data_wyp</th>
    <th>data_odd</th>
    </tr>");

    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("
        <td>".$row['user']."</td>
        <td>".$row['tytul']."</td>
        <td>".$row['data_wyp']."</td>
        <td>".$row['data_odd']."</td>
        <td>
        <form action='oddane.php' method='POST'>
        <input type='text'  value=".$row['id_wyp']." style='display: none' name='id_to_delete'>
        <input type='submit' value='ODDANO'>
    </form>
</td>");
        echo("</tr>");
    };
    echo("</table>");
    ?>
    <?php
    // $servername="127.0.0.1";
    // $username="root";
    // $password="";
    // $dbname="library";
    $servername="remotemysql.com";
    $username="Vdn5eyMgWu";
    $password="rbvVhbP03t";
    $dbname="Vdn5eyMgWu";
    
    $conn=new mysqli($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    $result=$conn->query("select * from users");
    echo("<table border='1'>");
    echo("<tr>
    <th>Login</th>
    <th>Password</th>
    </tr>");

    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("
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
   <br>Kto:
            <select name="user">
                <option>user1</option>
                <option>user2</option>
                <option>user3</option>
            </select>

        <br>Ksiazka:
            <select name="tytul">
                <option>Pan Taduesz</option>
                <option>Hobbit</option>
                <option>Dom zbrodni</option>
                <option>Przedwiosnie</option>
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