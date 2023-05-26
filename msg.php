<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["msg"])) {

    $ourEmail = 'skylensny@gmail.com'; //Our Gmail

    //-----------USERS INFO-------------//
    $firstName = $_REQUEST["EtuNimi"];
    $lastName = $_REQUEST["SukuNimi"];
    $sendersEmail = $_REQUEST["sposti"];
    $number = $_REQUEST["numero"];
    $address = $_REQUEST["osoite"];
    $state = $_REQUEST["maakunta"];
    $sight = $_REQUEST["kohde"];
    $jako = $_REQUEST["jako"];

    //------------PRICE CALCULATION----------//
    $Price = 0;
    $sign = "";
    $muisti = 0;
    $Muuta = "Sovitaan Hinnasta";

    if ($sight == 'Kertakuvaus') {
        $Price = 85;
        $sign = "€";
    }
    if ($sight == 'Tapahtuma') {
        $Price = 85;
        $sign = "€/h";
    }
    if ($sight == "Muuta") {
        $Price = 85;
        $sign = "€/h, oikea hinta tulee vasta kun tiedämme mitä haluatte.";
    }
    if ($jako == "Muistitikkulla") {
        $muisti = 5;
    }


    
    
    
    // ---------ORDER EMAIL TO CUSTOMER----------//
    $to = ''.$sendersEmail.', skylensny@gmail.com'; //Send email to this mail.
    $subject = 'Tilaus | Kuvaukselle'; // Give the email a subject
    $message = '
    Kiitos Tilauksestasi.
    Tähän sähköpostiin ei voi vastata.
    Lähetämme teille lisää infoa 1-3 päivän kuluessa. Jos tulee 
    mitään kysymyksiä tai näät että joku allaolevista asioista 
    on väärin niin lähetä sähköposti skylensny@gmail.com.
    ___________________________________
    Etunimi: '.$firstName.'
    Sukunimi: '.$lastName.'

    Sähköposti: '.$sendersEmail.'
    Puhelinnumero: '.$number.'

    Osoite: '.$address.'
    Maakunta: '.$state.'
    Kohde: '.$sight.'

    Jaamme Kuvat: '.$jako.'

    Summa: '.$Price.''.$sign.' + ('.$muisti.'€)
    ___________________________________
    '; //Mail that we get

    $headers = 'From:noreply@Skylens.com' . "\r\n"; //Set from headers
    mail($to, $subject, $message, $headers); //Sends email to us


    //to show the mail has been sent to customer
    echo "<script>
            alert('Sähköpostiisi on tullut sähköposti tilauksestasi');
            window.location.href = 'index.php';
            </script>";
}
?>