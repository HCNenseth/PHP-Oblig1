<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        
        class Kunde {

            public $navn;

            function tilStreng() {
                $navn = $_POST["name_id"];
                $tlf = $_POST["phone"];
                $epost= $_POST["email"];
                return $person = date("Y-m-d H:i:s")."</br>".$navn."</br>".$tlf."</br>".$epost;
            }

        }

        class Bestilling {
            
            public $dato;
            public $Konsert;
            
            function tilStreng() {
                $dt = $_POST["dato"];
                $kon = $_POST["konsert"];
                return $person = $dt."</br>".$kon."</br>";
            }
            
        }
        
        
        class tilFil {
            
        }
        
        $Pers = new Kunde();
        $Best = new Bestilling();
        
        echo $Pers->tilStreng();
        echo "</br>";
        echo $Best->tilStreng();
        
        ?>
    </body>
</html>
