<!DOCTYPE html>
<html>
    <head>
    <title>SKLEP</title>
    <style>
        .header{
        background-color:powderblue;
        }
    </style>
    
    
    
    </head>
    <body>
    <div class="header">
    <?php

        $con = new mysqli("127.0.0.1","root","","projekt_sklep");
        if(isset($_POST['login'])&&strlen($_POST['login'])){
        }
      
            
        $login="";
        $password="";
        $res=$con->query("SELECT * FROM users");
        $offers=$res->fetch_all(MYSQLI_ASSOC);
        $res->fetch_all();
        echo"<center><b><h1>ZALOGUJ SIĘ</h1></b></center>";
    ?>
     <br>

    <center>
    <form method="POST">
        
     Login:     <input type="text" name="login" placeholder="Podaj login"value="<?php echo $login;?>">
     Password:  <input type="text" name="password" placeholder="Podaj hasło"value="<?php echo $password;?>">
                <input type=submit value="ZALOGUJ">
    </form>
    </center>
    <?php
    // print_r($_POST)
    
    // function logowanie($login, $haslo) {
        
    //     $mysqli->select_db("projekt_sklep",$con);
    //     $wynik=mysql_query("SELECT * FROM users WHERE login='$login' AND password='$password'",$con);
    //     if (mysql_num_rows($wynik)==1) {
    //         mysql_close($con); return true;
    //       } 
    //         else {
    //         mysql_close($con); return false;
    //       }
    //     }
    // if (logowanie($login,$password)) {
    //         echo "zalogowano";
    //         }
    //     else{
    //         echo"nie zalogowano";
    //         }
    ?>
  
 
    
    </div>
    </body>
</html>