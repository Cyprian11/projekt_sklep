<html>
    <head>
    <style>
        .header{
            background-color:powderblue;
        
        }
        .body{
            background-color:powderblue;
            width:100%;
            height:100%;
            text-align:center;
        }
    </style>
</head>
<body>
<div class="body">
    <?php
    
    $con = new mysqli("127.0.0.1","root","","projekt_sklep");
        echo '<form method="POST">';
        $res = $con->query("SELECT * FROM users");
        $cos = $res->fetch_all();

        echo '<center><div class="d1"><h1>Rejestracja:</h1><br> Login: <input name="login"><br> Hasło: <input name="password" type="password"><br><input type="submit">';
        if($_POST!=NULL)
        {
            if($_POST['login']!="" && $_POST['password']!="")
            {
                $sqlquery = "INSERT INTO `users` VALUES ('', '".$_POST['login']."', '".$_POST['password']."', '0' );";
                $con->query($sqlquery);
                header('location: index.php');
            }
        }
        echo '</form>';

        echo '<form action="index.php"><button>Logowanie</button></form></center></div>';
    ?>
    </div>
    </body>

    </html>