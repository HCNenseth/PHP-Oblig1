<?php

class Kunde {

            public $navn;

            function tilStreng() {
                $navn = $_POST["name_id"];
                $tlf = $_POST["phone"];
                $epost = $_POST["email"];
                return $person = "</br>" . date("Y-m-d H:i:s") . "</br>" . $navn . "</br>" . $tlf . "</br>" . $epost;
            }
        }

        class Bestilling {

            public $dato;
            public $Konsert;

            function tilStreng() {
                $dt = $_POST["dato"];
                $kon = $_POST["konsert"];
                return $person = "</br>" . $dt . "</br>" . $kon . "</br>";
            }
        }

        class tilFil {
            
        }

