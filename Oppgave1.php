<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Oblig 1 - Oppgave 1</title>
    </head>
    
    <body>
        <h1>Obligatorisk oppgave 1<br>Webprogrammering PHP</h1>
        </br>

        <h3>Oppgave 1</h3>
        
        <p> a) Lag et PHP script som lister ut alle tall som er delelige med 3 opp til 100. Bruk en for-løkke.</br>
            b) Lag samme utskrift som over med en while-løkke.</br>
            c) Finn så gjennomsnittet av de samme tallene (de som er delelig med 3 opptil 100).</br></p>
        
        <h5>a) For-løkke</h5>
        
        <?php
        for ($i = 0; $i < 100; $i++) {
            if ($i % 3 == 0) {
                echo $i . " ";
            }
        }
        ?>

        <h5>b) While-løkke</h5>
        
        <?php
        $a = 0;
        while ($a < 100) {
            if ($a % 3 == 0) {
                echo $a . " ";
            }
            $a++;
        }
        ?>
        
        <h5>c) Gjennomsnittet av overstående tall</h5>
        
        
        
        
    </body>
</html>
