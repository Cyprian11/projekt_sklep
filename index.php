<!DOCTYPE html>
<html>
    <head>
    <title>SKLEP</title>
    <style>
        .header{
        background-color:powderblue;
        
        }
        .body{
            background-color:aliceblue;
            width:100%;
            height:100%;
            text-align:center;
        }
    </style>
    
    
    
    </head>
    <body>
    <div class="header">
    <?php
        session_start();
        $con = new mysqli("127.0.0.1","root","","projekt_sklep");
        echo '<form method="POST">';
        if(isset($_POST['login'])&&strlen($_POST['login'])){
        
            $login="";
            $password="";
            $res=$con->query("SELECT * FROM users");
            $offers=$res->fetch_all(MYSQLI_ASSOC);
            $res->fetch_all();
            echo"<center><b><h1>ZALOGUJ SIĘ</h1></b></center>";
        }
    ?>
     <br>

    
    
                
               
    </form>
    <?php
    echo'<form method="POST" action=login.php>';
    echo '<center>
    <div class="body">

    <h1>Logowanie:</h1><br> 

    <label>Login: <input name="login"></label><br>

    Hasło: <input name="password" type="password"><br>

    <input type="submit" value="Zaloguj">';
    echo '</form>';
        if($_POST!=NULL)
        {
            for($i=0;$i<count($cos);$i++)
            {
                if($_POST['login']==$cos[$i][1] && $_POST['password']==$cos[$i][2])
                {
                    $_SESSION["login"] = $_POST['login'];
                    $_SESSION["id"] = $i;
                    echo 'udalo sie zalogowac';
                    header("Location: login.php");
                }
            }
        }
        echo '</form>';
        echo '<form action="rejestracja.php"><button>Rejestracja</button></form></center></div>';
    ?>
    </center>

        <div class="body">
            <h1>WITAJ!!!</h1>
            <?php
                
                
                //  if(isset($_POST['zaloguj']))
                // $sql= 'SELECT login,password FROM users WHERE login="'.$_POST['login'].'" AND password="'.$_POST['password'];
                // if($log->login($username, $_POST['password'])) {
      
                //     session_start();
                    
                //     $_SESSION['zaloguj'] = 1;
                //     $_SESSION['login'] = $login;
                    
                //     echo'zalogowano';
                    
                //     exit;
                    
                //    }
                   
                //    else {
                   
                //     echo '<p>Błędne dane logowania.</p>';
                    
                //    }
                // print_r($_POST);


                // if(isset($_POST['zaloguj'])){

                // }
                //     if(mysql_num_rows(mysql_query("SELECT login,password FROM users WHERE login = '".$login."' AND haslo = '".md5($password)."';")) > 0)
                    // {
                    //     $_SESSION['zalogowany'] = true;
                    //     $_SESSION['login'] = $login;
                    //     }
                    // { else echo "Wpisano złe dane.";
                    // }


            ?>
        </div>

    
   
  
 
    
    </div>
    </body>
</html>