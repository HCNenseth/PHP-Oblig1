<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Oblig 1 - Oppgave 2</title>
    </head>

    <body>

        <h3>Oppgave 2</h3>

        <p> Gitt tallrekken: 1,4,8,1,4,10,5,6,2,4,6. Opprett et array for denne rekken av tall. Bruk så dette arrayet til:</br>
            a) Skriv ut alle tallene som er over 5.</br>
            b) Tell opp hvor mange tall som er over 5 og vis dette.</br>
            c) Liste ut tallene baklengs.</br>
            d) Finn det minste tallet ved en løkke. Skriv så tallet ut.</br>
            e) Finn det minste tallet ved en PHP funksjon. Skriv så tallet ut.</br>
            f) Lag så egendefinerte funksjoner med en innparameter for oppgave a) og b).</br>
            Parameteren inn skal angi tallet som skal testes på i oppgavene.</br>
            Funksjonene skal returnere verdier (tips, bruk et array i oppgave a).</br> </p>

        <?php
        $tall = array(1, 4, 8, 1, 4, 10, 5, 6, 2, 4, 6);

        echo "<h5>a) Tall større enn 5 i arrayet</h5>";
        foreach ($tall as $value) {
            if ($value > 5) {
                echo $value . " ";
            }
        }


        echo "<h5>b) Hvor mange tall er større enn 5 i arrayet</h5>";
        $i = 0;
        foreach ($tall as $value) {
            if ($value > 5) {
                $i++;
            }
        }
        echo "Tabellen inneholder " . $i . " tall som er større enn 5.</br>";


        echo "<h5>c) Arreyen i omvendt rekkefølge</h5>";
        for ($j = count($tall) - 1; $j >= 0; $j--) {
            echo $tall[$j] . " ";
        }
        ?>
    </body>
</html>
