<!DOCTYPE html>
<html>
    <head>
    
    
    
    
    </head>
    <body>
    
    <?php
    
        $con = new mysqli("127.0.0.1","root","","projekt_sklep");
        
        $res=$con->query($sql);
        $offers=$res->fetch_all(MYSQLI_ASSOC);
        $res->fetch_all();


        
    ?>
     
    </form>
    </body>
</html>