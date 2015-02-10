<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Oblig 1 - Oppgave 3</title>
    </head>
    <body>
        <h3>Oppgave 3</h3>
        
        <p>Bestilling av billetter på nettet.
            Vi ser på en liten del av et system som lar en bruker bestille billetter på nettet. Dette kan
            f.eks være kinobilletter. Det skal brukes en objektmodell for å løse oppgaven.</br>
            
            Lag et skjema som kan ta i mot personalia for personen som ønsker å bestille billettene. I
            skjema skal det kunne skrives inn navn, telefonnummer og e-post adresse etc. Lag også en
            list-boks f.eks som lister opp ulike typer billetter. Lag så et felt som angir antall billetter
            som ønskes bestilt (av en type, det behøves ikke legges opp til at man kan bestille flere
            ulike typer billetter i samme bestilling). Lag videre en bestill-knapp som dirigerer deg
            videre til en php side som skal liste ut den informasjonen som er valgt / skrevet inn i
            skjema. Dagens dato og tid skal også vises på denne siden. Her skal man bekrefte
            bestilingsinformasjonen før en ny knapp trykkes. Informasjonen skal deretter lagres på fil
            og en bekreftelse sendes som e-post til personen som har bestilt. Dersom kunden ønsker å
            avbryte bestillingen skal dette gjøres på denne bekreftelsessiden.</br>
            
            Objektmodell: Lag minimum to klasser, en for kunden og en for bestillingen. Disse skal så
            ha alle nødvendige attributter og metoder (funksjoner) for å kunne motta dataene fra
            skjema, sende e-post og lagre bestillingen på fil.</br>
        </p>
        
        <h2>Konsertbestillinger</h2>
        
        
        
        <form action="test.php" method="post">
            Navn :</br>
            <input type="text" name="name_id" /></br>
            Telefonnummer:</br>
            <input type="text" name="phone" /></br>
            e-mail :</br>
            <input type="text" name="phone" /></br>
            <input type="submit" value="Register" name="button" />
            
        </form>
        
        <?php
        
        
        ?>
    </body>
</html>
