# PHP-Oblig1
Enkel introduksjon til PHP

Oppgave 1
a) Lag et PHP script som lister ut alle tall som er delelige med 3 opp til 100. Bruk en for-løkke.
b) Lag samme utskrift som over med en while-løkke.
c) Finn så gjennomsnittet av de samme tallene (de som er delelig med 3 opptil 100).

Oppgave 2
Gitt tallrekken: 1,4,8,1,4,10,5,6,2,4,6. Opprett et array for denne rekken av tall. Bruk så dette
arrayet til:
a) Skriv ut alle tallene som er over 5.
b) Tell opp hvor mange tall som er over 5 og vis dette.
c) Liste ut tallene baklengs.
d) Finn det minste tallet ved en løkke. Skriv så tallet ut.
e) Finn det minste tallet ved en PHP funksjon. Skriv så tallet ut.
f) Lag så egendefinerte funksjoner med en innparameter for oppgave a) og b). Parameteren inn
skal angi tallet som skal testes på i oppgavene. Funksjonene skal returnere verdier (tips, bruk
et array i oppgave a).

Oppgave 3
Bestilling av billetter på nettet.
Vi ser på en liten del av et system som lar en bruker bestille billetter på nettet. Dette kan
f.eks være kinobilletter. Det skal brukes en objektmodell for å løse oppgaven.
Lag et skjema som kan ta i mot personalia for personen som ønsker å bestille billettene. I
skjema skal det kunne skrives inn navn, telefonnummer og e-post adresse etc. Lag også en
list-boks f.eks som lister opp ulike typer billetter. Lag så et felt som angir antall billetter
som ønskes bestilt (av en type, det behøves ikke legges opp til at man kan bestille flere
ulike typer billetter i samme bestilling). Lag videre en bestill-knapp som dirigerer deg
videre til en php side som skal liste ut den informasjonen som er valgt / skrevet inn i
skjema. Dagens dato og tid skal også vises på denne siden. Her skal man bekrefte
bestilingsinformasjonen før en ny knapp trykkes. Informasjonen skal deretter lagres på fil
og en bekreftelse sendes som e-post til personen som har bestilt. Dersom kunden ønsker å
avbryte bestillingen skal dette gjøres på denne bekreftelsessiden.
Objektmodell: Lag minimum to klasser, en for kunden og en for bestillingen. Disse skal så
ha alle nødvendige attributter og metoder (funksjoner) for å kunne motta dataene fra
skjema, sende e-post og lagre bestillingen på fil.
