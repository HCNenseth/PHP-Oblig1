<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Oblig 1 - Oppgave 3</title>
    </head>
    <body>
        <h3>Oppgave 3</h3>

        <p>Bestilling av billetter på nettet.</br>
            Vi ser på en liten del av et system som lar en bruker bestille billetter på nettet. Dette kan</br>
            f.eks være kinobilletter. Det skal brukes en objektmodell for å løse oppgaven.</br>
            </br>
            Lag et skjema som kan ta i mot personalia for personen som ønsker å bestille billettene. I</br>
            skjema skal det kunne skrives inn navn, telefonnummer og e-post adresse etc. Lag også en</br>
            list-boks f.eks som lister opp ulike typer billetter. Lag så et felt som angir antall billetter</br>
            som ønskes bestilt (av en type, det behøves ikke legges opp til at man kan bestille flere</br>
            ulike typer billetter i samme bestilling). Lag videre en bestill-knapp som dirigerer deg</br>
            videre til en php side som skal liste ut den informasjonen som er valgt / skrevet inn i</br>
            skjema. Dagens dato og tid skal også vises på denne siden. Her skal man bekrefte</br>
            bestilingsinformasjonen før en ny knapp trykkes. Informasjonen skal deretter lagres på fil</br>
            og en bekreftelse sendes som e-post til personen som har bestilt. Dersom kunden ønsker å</br>
            avbryte bestillingen skal dette gjøres på denne bekreftelsessiden.</br>
            </br>
            Objektmodell: Lag minimum to klasser, en for kunden og en for bestillingen. Disse skal så</br>
            ha alle nødvendige attributter og metoder (funksjoner) for å kunne motta dataene fra</br>
            skjema, sende e-post og lagre bestillingen på fil.</br>
        </p>

        <h2>Konsertbestillinger</h2>


        <form action="Bekreftelse.php" method="POST">
            
            Konsertdatoer:</br>
            <select size="l" name="dato">
                <option>Velg dato</option>
                <option>1.Mai</option>
                <option>5.Mai</option>
                <option>17.Mai</option>
            </select></br>
            
            Aktueller konserter:</br>
            <select size="l" name="konsert">
                <option>Velg konsert</option>
                <option>Beatles - Reunion</option>
                <option>Queen - Alive</option>
                <option>Aha - Do_Over</option>
            </select></br>
            
            </br>
            </br>
            
            Navn :</br>
            <input type="text" name="name_id" required/></br>
            Telefonnummer:</br>
            <input type="text" name="phone" required/></br>
            e-mail :</br>
            <input type="text" name="email" required/></br>
            <input type="submit" value="Register" name="button" />

        </form>

        <?php
        ?>
    </body>
</html>
