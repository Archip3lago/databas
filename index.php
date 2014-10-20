<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        define("DB_SERVER", "localhost");
        define("DB_USER", "root");
        define("DB_PASSWORD", "");
        define("DB_NAME", "ny_db");

        $dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
        
        $array = array("Hus", "Pinne", "Gran", "Toalett","Pilbåge","Dator","Hund","Rymdskepp","Tangentbord","U-båt","Papperskorg","Fedora");
        $index = rand(0, 11 );
        
        
        
        
        
        $sql = "INSERT INTO `Saker`(`id`, `Namn`) VALUES ('','$array[$index]')";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        
        
        $sql = "SELECT * FROM Saker";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $saker = $stmt->fetchAll();

        foreach ($saker as $sak) {
            echo $sak["Namn"];
            echo "<br>";
        }
        ?>
    </body>
</html>
