<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
    <link rel="stylesheet" href="style_card.css">
</head>
<body>
      <?php 
    session_start();
    // var_dump($_SESSION);

    if(isset($_POST['pass']) && $_POST['pass']=="a"){
        $_SESSION['zalogowany']=1;
    }

    if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']==1){
        // echo("<br>zalogowano");
        ?>
<div class="container">
        <div class="overlay">
          <div class = "items"></div>
          <div class = "items tytul">
            <p>CZY WIESZ, ŻE...</p>
            <hr>
          </div>
          <div class = "items tresc">
            <p class="tr1">Linux</p>
            <p class="tr2">jest super? :)</p>
          </div>
          <div class="items cart">
            <i class="linux-cart"></i>
            <span>Miłego dnia!</span>
        </div>
      </div>
      </div>
        <?php
        echo("<br><a href='index.php?akcja=wyloguj'>WYLOGUJ</a>");
    }else{
        echo("<br>ZALOGUJ SIE!");
    }
    echo("<h3>MENU</h3>");
    ECHO("<ul>
        <li><a href='index.php'>Główna</a>
    </ul>");
?>
</body>
</html>