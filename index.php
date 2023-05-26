<!DOCTYPE html>
<html>
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PQMNN222ZB"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PQMNN222ZB');
    </script>

    <!-- This connects all JS and CSS files-->
    <?php require 'head.php'?>

    <!--Title for website--> 
    <title>Skylens NY - Ilmakuvia</title>

    <meta name="description" content="Edullisia ilmakuvia ryhmistä, taloista, veneistä tai muista kohteista. Hyvä laatuisia kuvia, markkinointi tai omaan käyttöön.">

    

    

</head>
<body>
    <div class="everything">

        <div class="navbar">
            <a href="index.php"><div class="logo"></div></a>
            <div class="links">
                <a href="story.php" class="a-tag">Tarinamme</a>
                <a href="#Tilaa" class="a-tag">Tilaa</a>
                <a href="galleria.php" class="a-tag">Galleria</a>
                <a href="#Yhteyttä" class="a-tag">Ota Yhteyttä</a>
            </div>
        </div>

        <div class="product-text">
            <h2 id="asiakasrekisteri">Ilmakuva</h2>
            <span class="p-tag1">
            Tarjoamme </span><span class="p-tag1" id="Price">edullisia</span><span class="p-tag1"> ilmakuvia dronella. Dronella otetut kuvasi saavat 
            enemmän huomiota ja niihin saadaan paremmin sisällytettyä kaikki haluamasi. Kuvaamme taloja, tapahtumia ja ryhmäkuvia pääkaupunkiseudulla. 
            Myös muut kuvauskohteet ovat mahdollisia. Ota yhteyttä meihin!
            </span>
        </div>

        <!-- ALL IMAGES USED IN SLIDESHOW-->
        <div class="slider-frame">
            <div class="slide-images">
                <div class="img-container">
                    <div class="deer" alt="Ilmakuva"></div>
                </div>
                <div class="img-container">
                    <div class="tols" alt="Ilmakuva"></div>
                </div>
                <div class="img-container">
                    <div class="porkkala" alt="Ilmakuva"></div>
                </div>
                <div class="img-container">
                    <div class="masala" alt="Ilmakuva"></div>
                </div>
                
            </div>
        </div>

        <div class="pricing" id="Hinta">
            <span class="p-tag4" id="bold">Hintamme alkaen  </span>
            <span class="p-tag4" id="Price">85€ </span>
            <span class="p-tag4" id="bold">per kuvauskerta (max 1h). Pidemmät kuvaukset tuntihinnoiteltuna. </span>
            <span class="p-tag4" id="Price">85€/h.</span>

            <p class="p-tag" id="top">
                Kertakuvaus (max 1h): 85€ (10-30 Ilmakuvaa)<br>
                Muistitikku: 5€ (Jos haluatte kuvat muistitikulla)<br>
                Matkakulut: ilmainen jos olet <span class="p-tag" id="openMap" onclick="openMap()">alueen</span> sisällä (0,15€/km muuten)<br>
                Muuta: Ota yhteyttä!
            </p>
            
        </div>

        <div class="photoshoots">
            <p class="p-tag1" id="bold">Ilmakuvauksia:</p>
            <p class="p-tag">
                Kuvauksia Tehty: 2 <br>
                Kuvia Otettu Yhteensä: 40 <br>
                Arvostelun Keskiarvo: 9.5/10
            </p>
        </div>

        <img id="mapRadius" src="IMAGES/radiusMap.png" alt="map" style="display: none;">
        <script>
            function openMap() {

                if (document.getElementById("mapRadius").style.display == "none"){
                    document.getElementById('mapRadius').style.display = "block";
                }else{
                    document.getElementById("mapRadius").style.display = "none";   
                }
            }
        </script>

        

        <div class="problems-solving">
            <h2 id="asiakasrekisteri">Meistä</h2>
            <p class="p-tag1" id="Meistä">
                Skylens tiimiin kuuluvat Niklas Karhela ja Jesper Weckström. Käymme koulua Kyrkslätts 
                Gymnasiumissa. Viimeiset 3 vuotta olemme nauttineet dronen lennättämisestä vapaa-ajallamme 
                ja olemme löytäneet ratkaisuja erilaisiin ongelmiin, joita syntyy tavallisella kameralla kuvatessa 
                (mm. jos aiot ottaa kuvan suuresta ryhmästä). Maasta kuvat eivät myöskään anna täyttä 
                näkemystä kuvauskohteesta. Jos aiot esimerkiksi myydä talosi ja ottaa kuvia myynti-ilmoitusta varten, 
                tavalliseen maasta otettuun kuvaan on hankala sisällyttää kaikki haluamasi. Ilmakuvassa tämä onnistuu helpommin ja saat kuvallesi välittömän huomion.
            </p>
        </div>

        <div class="simple-order">
            <p class="p-tag1" id="bold">Tilaus on helppoa!</p>
            <ol type="1">
                <li class="li-tag">Täytä ohessa oleva lomake.</li>
                <li class="li-tag">Otamme yhteyttä teihin ajan varaamista varten.</li>
                <li class="li-tag">Ilmakuvat kuvataan varattuna aikana ja näytämme kuvat teille.</li>
                <li class="li-tag">Jos olette tyytyväisiä kuviin lähetämme laskun sähköpostilla.</li>
                <li class="li-tag">Maksun jälkeen jaamme kuvat teille Google driven kautta tai muistitikulla</li>
            </ol>
        </div>

        <div class="order-form" id="Tilaa">
            <form action="msg.php" method="post" id="msg">
                <!-- ETU NIMI -->
                <input class="sign" type="text" name="EtuNimi" placeholder="Etunimi" required><br>

                <!-- SUKUNIMI -->
                <input class="sign" type="text" name="SukuNimi" placeholder="Sukunimi" required><br>
                
                <!-- SÄHKÖPOSTI -->
                <input class="sign" type="text" name="sposti" placeholder="Sähköposti" required><br>
                
                <!-- PUHELIN NUMERO -->
                <input class="sign" type="text" name="numero" placeholder="Puhelinnumero" required><br>

                <!-- OSOITE -->
                <input class="sign" type="text" name="osoite" placeholder="Osoite" required><br>

                <!-- MAAKUNTA -->
                <input class="sign" type="text" name="maakunta" placeholder="Maakunta" required><br>

                <!-- KOHDE -->
                <select class="sign" name="kohde" id="kohde">
                    <option class="sign" value="Kertakuvaus">Kertakuvaus</option>
                    <option class="sign" value="Tapahtuma">Tapahtuma</option>
                    <option class="sign" value="Muuta">Muuta</option>
                </select>

                <!-- JAKO -->
                <select class="sign" name="jako" id="jako">
                    <option class="sign" value="Google Drivella">Google Drive</option>
                    <option class="sign" value="Muistitikkulla">Muistitikku (+5€)</option>
                </select>


                <!-- LISÄ NAPPEJA POHJALLA -->
                <input type="submit" id="submitbutton" value="Lähetä">
                <input type="hidden" name="msg"><br>
            </form>
        </div>

        <div class="social-container">
            <div class="socials" id="Yhteyttä">
            <p class="p-tag1" id="bold">
                Yhteystiedot:
            </p>
                <a href="https://www.instagram.com/skylensny/" class="a-tag1" id="Socials">Instagram</a><br>
                <a href="https://www.facebook.com/Skylens-108407625318752/" class="a-tag1" id="Socials">Facebook</a><br>
                <a href="mailto:skylensny@gmail.com" class="a-tag1" id="Socials">skylensny@gmail.com</a> <br>
                <a href="tel:0408454252" class="a-tag1" id="Socials">0408454252</a>
            </div>
            <div id="protection">
                <a href="privacy.php" class="a-tag1" id="privacy"><p id="top">Tietosuoja</p></a>
                
            </div>
            <div class="profiles">
                <div class="niklas">

                </div>
                <div class="jesper">

                </div>
            </div>
        </div>
    </div>



</body>
</html>