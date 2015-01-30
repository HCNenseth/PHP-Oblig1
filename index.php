<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Obligatorisk oppgave 1<br>Webprogrammering PHP</h1>
        </br>

        <h3>Oppgave 1</h3><h5>a) For-løkke</h5>
        <?php
        for ($i = 0; $i < 100; $i++) {
            if ($i % 3 != 0) {
                $i += 3 - ($i % 3);
                echo $i . " ";
            }
        }
        ?>

        <h5>b) While-løkke</h5>
        <?php
        $a = 0;
        while ($a < 100) {
            if ($a % 3 != 0) {
                $a += 3 - ($a % 3);
                echo $a . " ";
            }

            $a++;
        }
        ?>
    </body>
</html>
