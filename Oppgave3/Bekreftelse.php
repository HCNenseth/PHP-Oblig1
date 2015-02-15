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


        $Persinfo = $Pers->tilStreng();
        $Konsertinfo = $Best->tilStreng();
        $info = $Persinfo . "</br>" . $Konsertinfo;
        $send = $_POST["email"];

        echo "Følgende valg er gjort :</br>";
        echo $info;
        ?>

        </br>

        <form action="" method="POST">
            Stemmer bestillingen? 
            <input type="checkbox" name="bekreftelse"/>
            <input type="submit" value="Bekreft bestilling" name="button" />
        </form>
        <a href="index.php">Forandre på bestilling</a>

        <?php
        if (isset($_POST["bekreftelse"])) {
            mail($send, "Bekreftelse av Konsertbestilling", $info);
            echo "</br>Bekreftelsesmail er sendt.";
            $filref = fopen("Bestilling.txt", "w");
            fwrite($filref, $info);
            fclose($filref);
        } else {
            
        }
        ?>

    </body>
</html>
