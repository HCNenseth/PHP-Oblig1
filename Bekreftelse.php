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
        $info = $Persinfo."</br>".$Konsertinfo;

        echo "Følgende valg er gjort :</br>";
        echo $info;
        ?>

        </br>

        <form action="" method="POST">
            Stemmer bestillingen? 
            <input type="checkbox" name="bekreftelse"/>
            <input type="submit" value="Bekreft bestilling/Avbekrefte bestilling" name="button" />
        </form>

        <?php
        if (isset($_POST["bekreftelse"])) {
            mail($_POST["email"],"Bekreftelse av Konsertbestilling",$info);
            //$fil = new tilFil($Persinfo,$Konsertinfo);
    }
//         else {
//            Konsertbestilling . php;
//        }
        ?>

    </body>
</html>
