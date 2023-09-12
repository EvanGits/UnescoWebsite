<?php
include "../includes/header.php";
include "../includes/Hamburger.php";
?>
<main>
    <div class="col-12">        
        <div class="row col-12">
            <h1 style="position:absolute; margin-top: 30%; margin-left: 15%;" class="guardian-tekst2"><strong>Intercultureel</strong></h1>
            <h1 style="position:absolute; margin-top: 37%; margin-left: 15%;" class="guardian-tekst2"><strong><i>Rob/Bohr</i></strong></h1>
            <div class="col-8 d-flex justify-content-center align-items-center">
                <img id="BohrImage" class="raeve"  src="<?= ROOT ?>images/Bohr.png" style=" margin-top: 200%;">
            </div>
            <div class="col-4">
                    <img style="margin-left: 105%;" class="banner" src="../images/BannerRoze.png">
                <div class="card2" style="position: absolute; margin-left: 20%; margin-top: 40%;">
                </div>
            </div>
            <div class="new_background_bhor" style="position: absolute; font-size: 50px; margin-left: 65%; margin-top: 120%;">
                <h1 style="margin-left: 20%;" class="guardian-tekst2"><i>Dit is Bohr</i></h1>
                <p class="mt-5" style="font-size: 41px;">
                    Student Leidinggevende travel
                    en hospitality. Tijdens de lunchpauze
                    op school ziet hij dat een klasgenoot
                    wordt gepest vanwege zijn Aziatische
                    afkomst.  
                </p>
                <p style="font-size: 41px;">
                    Rob heeft een hekel aan
                    discriminatie en buitensluiten hij komt
                    daarom in actie. Wanneer Rob de
                    pestkop aan wil spreken op zijn gedrag
                    voelt Rob een krachtig gevoel in zijn
                    borst opwellen en ziet hij een fel licht
                    om zich heen. 
                </p>
                <p style="font-size: 41px;">
                    Wanneer hij de pester
                    aanraakt bij zijn schouder blijkt Rob
                    te zijn veranderd in Bohr, een superheld
                    met ‘teleportatiekrachten'.  Op deze
                    manier neemt hij de pestkop mee naar
                    een andere cultuur en kan zo laten zien
                    hoe mooi en interessant andere culturen
                    zijn. Bohr laat de pester een tijd achter in
                    Japan. Daarna teleporteert Bohr de
                    jongen terug. Na deze ervaring blijkt hij
                    meer begrip te hebben voor mensen
                    met een andere culturele achtergrond
                    dan de zijne.  
                </p>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">              
            <img onclick="Spinny()"class="rotate heartbeat-img" src="<?= ROOT ?>images/rotate.png" style="margin-right: 35%;">
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center text-center" style="margin-left: 30%;">
            <a id="helden-link" class="helden-link-pagina" href="Helden.php" style="margin-top: 40%;"><strong>klik hier voor alle helden!</strong></a>
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

        @keyframes spinY
        {
            0% {
                transform: rotateY(0deg);
            }
            100% {
                transform: rotateY(1800deg);
            }
        }
        .new_background_bhor
        {
            border-radius: 8px;
            background-image: linear-gradient(var(--rotate) ,#ffbfc3 , #ff8991 43%, #ff535e);
            width: 80%;
            padding: 30px;
            animation: spin 2.5s linear infinite;

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
    var Image1 = document.getElementById("BohrImage");

    if(Image1.classList.contains("Bohr")) {
        Image1.classList.add("spinny");
        Image1.classList.remove("Bohr");
    setTimeout(() => {
        Image1.src="<?= ROOT ?>images/Bohr.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    } else {
        Image1.classList.add("spinny");
        Image1.classList.add("Bohr");
    setTimeout(() => {
        Image1.src="<?= ROOT ?>images/rob.png";
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