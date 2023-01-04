<html>

    <head>

        <link rel="stylesheet" href="style.css">


    </head>

    <body>
        
        <div class="sg1">
            
           
            <div class="r3">
            <?php
            session_start();
            $con = new mysqli("127.0.0.1","root","","ZSPSHOP");
            echo 'Zalogowany jako: <b>'.$_SESSION["user_login"].'</b>';
            if(isset($_POST["nazwao"]) && isset($_POST["opiso"])){

                $sql ="INSERT INTO offers (`name`,`description`,`users_id`) VALUES('".$_POST["nazwao"]."','".$_POST["opiso"]."','".$_SESSION["user_id"]."')";
                $res = $con->query($sql);
            }
            
               
        
            ?>
            </div>
                <a href="index.php"><input type="submit" name="przycisk" value="wyloguj"></a>
                <a href="stronaglowna.php"><input type="submit" name="przycisk" value="powrót"></a>
            <center>
            <div class="r1">
                <h1>Wystaw oferte⬇️</h1>
                <form method="POST">
                    Nazwa produktu: <input type="text" name="nazwao"><br>
                    Opis produktu:  <input type="text" name="opiso"><br>
                    <input type="submit" name="submito">
                </form>
            </div>
            </center>

           
        </div>

    </body>

</html>