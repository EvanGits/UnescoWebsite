<?php
include "../includes/header.php";
include "../includes/Hamburger.php";
?>
<main>
    <div class="col-12">        
        <div class="row col-12">
            <h1 style="position:absolute; margin-top: 35%; margin-left: 15%;" class="guardian-tekst2"><strong>Vrede & Mensenrechten <br> <i>Tatiana/Tianat</i></strong></h1>

            <div class="col-8 d-flex justify-content-center align-items-center">
                <img id="TianatImage" src="<?= ROOT ?>/images/Tianat.png" style=" margin-top: 200%; margin-left: 10%;">
            </div>
            <div class="col-4">
                <img style="margin-left: 105%;" class="banner" src="../images/BannerOranje.png">
                <div class="card1" style="position: absolute; margin-left: 20%; margin-top: 40%;">
                </div> 
            </div>
            <div class="New_background_Tianat" style="position: absolute; font-size: 50px; margin-left: 65%; margin-top: 120%;">
                <h1 style="margin-left: 20%;" class="guardian-tekst2"><i>Dit is Tianat</i></h1>
                <p class="mt-5 tekst_helden" style="font-size: 41px;">
                    Tatiana komt uit Kiev en leert
                    voor Allround Constructiewerker. Zij is
                    statushouder en omdat ze moest
                    vluchten heeft ze alles achter moeten
                    laten.
                </p>
                <p class="tekst_helden" style="font-size: 41px;">
                    Sommige van haar vrienden zijn
                    gevlucht, anderen zijn daar gebleven. De
                    beelden in het nieuws laten zien dat het
                    wel jaren kan duren voordat alles wat is
                    verwoest is hersteld. Na de oorlog wil ze
                    terug naar Oekraïne om te helpen haar
                    moederland weer op te bouwen.
                </p> 
                <p class="tekst_helden" style="font-size: 41px;">
                    Dit verlangen wordt op een dag zo groot
                    dat ook zij zichzelf ziet veranderen. Een
                    licht  van binnen uit straalt en zij wordt
                    megasterk en zonder moeite kan ze de
                    zwaarste dingen tillen. Deze superkracht
                    zal haar in staat stellen te helpen met de wederopbouw.
                    Tatiana is veranderd in Tianat
                    die strijd voor vrede en mensenrechten.
                </p> 
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">              
            <img onclick="Spinny()" class="rotate heartbeat-img" src="<?= ROOT ?>images/rotate.png" style="margin-right: 35%;">    
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center text-center new_place" style="margin-left: 30%;">
            <a id="helden-link" class="helden-link-pagina" href="Helden.php" style="margin-top: 47%;"><strong>klik hier voor alle helden!</strong></a>
        </div>
    </div>
    <style>
        .hidden  {
            display: none;
        }

        .spinny{
            animation: spinY 2.5s ease-in 1s;
        } 
        .spinny2{
            animation: spinY 2.5s ease-out 1.5s;
        } 

        @keyframes spinY {
            0% {
                transform: rotateY(0deg);
            }
            100% {
                transform: rotateY(1800deg);
            }
        }
    </style>
    <script>
        function fadeEffect(element, duration) {
        element.style.opacity = 0;
        let opacity = 0;
        const interval = 10;
        const targetOpacity = 1;

        const fadeIn = setInterval(() => {
            if (opacity >= targetOpacity) {
                clearInterval(fadeIn);
                setTimeout(() => {
                    const fadeOut = setInterval(() => {
                        if (opacity <= 0) {
                            clearInterval(fadeOut);
                        } else {
                            opacity -= 0.1;
                            element.style.opacity = opacity;
                        }
                    }, interval);
                }, duration);
            } else {
                opacity += 0.1;
                element.style.opacity = opacity;
            }
        }, interval);
    }

    const link = document.getElementById('helden-link');
    const duration = 2000; // Duration in milliseconds (3 seconds)

    setInterval(() => {
        fadeEffect(link, duration);
    }, duration * 2);

    function Spinny() {
    var Image1 = document.getElementById("TianatImage");

    if(Image1.classList.contains("Tianat")) {
        Image1.classList.add("spinny");
        Image1.classList.remove("Tianat");
    setTimeout(() => {
        Image1.src="<?= ROOT ?>images/Tianat.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    } else {
        Image1.classList.add("spinny");
        Image1.classList.add("Tianat");
    setTimeout(() => {
        Image1.src="<?= ROOT ?>images/Tatiana.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    }
    setTimeout(() => {
        Image1.classList.remove("spinny2");
    }, 5000);
    
    }
    </script>
</main>
<?php
include "includes/footer.php"
?>