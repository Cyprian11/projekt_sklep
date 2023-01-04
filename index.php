<html>

    <head>
        
        <link rel="stylesheet" href="style.css">

   </head>

    <body>

        <div class="f1">
            <center>
            <div class="r1">

            <h1>LOGOWANIE</h1>
            <form method="POST">
            Login: <input type="text" name="login"><br>
            Haslo: <input type="password" name="password"><br>
            <input type="submit" name="submit"><br>
            <center>
            <div class="r2">
            <b><p><a href="rejestracja.php">REJESTRACJA<br><u>Kliknij aby się zerejestrować</u></a></p><b>
            </form>
            </div>
            </center>
            </div> 
            </center>     
        </div>
         <?php
            session_start();
            $con = new mysqli("127.0.0.1","root","","ZSPSHOP");
            print_r($_POST);
            if(isset($_POST['login']) && isset($_POST['password'])){
                $sql = "SELECT * FROM users WHERE login='".$_POST['login']."'AND password='".$_POST['password']."'";
                $res = $con->query($sql);
                
                $user = $res->fetch_array(MYSQLI_ASSOC);
                if (count($user)>0){
                    $_SESSION["user_login"]=$user["login"];
                    $_SESSION["user_id"]=$user["id"];
                    header("location: stronaglowna.php");
                }
            }
            //  $res->fetch_all();

         ?>

    </body>

    

</html>