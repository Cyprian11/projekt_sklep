<html>

    <head>

        <link rel="stylesheet" href="style.css">


    </head>

    <body>
        
        <div class="sg1">
            
            <center>
            <div class="r3">
            
            <?php
            session_start();
            $con = new mysqli("127.0.0.1","root","","ZSPSHOP");
            echo '<h2>Zalogowany jako:</h2><h1> <b>'.$_SESSION["user_login"].'</b></h1>';
            $sql="SELECT * FROM offers JOIN users ON users.id=offers.users_id ";
            $res = $con->query($sql);  
            $rows = $res->fetch_all(MYSQLI_ASSOC);
            
          
            

            
               
        
            ?>
            
            </div>
            </center>
            <a href="do.php"><input type="submit" name="przycisk" value="wystaw"></a>
            <a href="index.php"><input type="submit" name="przycisk" value="wyloguj"></a>
                <center>
                <div class="r1">
               <h1>Lista ofert</h1>
        
               <?php
               
               for($i=0; $i < count($rows); $i++){
                // print_r($rows[$i]);
                echo'<div class="o1">'.'nazwa przedmiotu: '.$rows[$i]["name"]."<br>".'opis: '.$rows[$i]["description"]."<br>".'sprzedawca: '.$rows[$i]["login"]."<br><br>".'</div>';
                
            }
          
               
               
               ?>
               </div>
                </center>
        </div>
        

    </body>

</html>