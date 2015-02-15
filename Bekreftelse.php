<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bekreftelse</title>
    </head>
    <body>

        <?php
        include 'Klasser.php';

        $Pers = new Kunde();
        $Best = new Bestilling();
        
        echo "Følgende valg er gjort :</br>";
        echo $Pers->tilStreng();
        echo "</br>";
        echo $Best->tilStreng();
        ?>
        
        </br>
        Stemmer bestillingen? 
        <input type="checkbox" name="bekreftelse"/>

    </body>
</html>
