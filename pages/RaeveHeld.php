<?php
    include "../includes/header.php";
    include "../includes/Hamburger.php";
    //test
?>

<main>
    <div class="col-12">        
        <div class="row col-12">
            <h1 style="position:absolute; margin-top: 30%; margin-left: 15%;" class="guardian-tekst2"><strong>Duurzaamheid <br><i>Vera/Raeve</i></strong></h1><x></x>
            <div class="col-8 d-flex justify-content-center align-items-center">
                <img id="RaeveImage" class="raeve"  src="<?= ROOT ?>images/raeve.png" style=" margin-top: 200%;">
            </div>
            <div class="col-4">
                <img style="margin-left: 105%;" class="banner" src="../images/bannerGroen.png">
                <div class="card" style="position: absolute; margin-left: 20%; margin-top: 40%;">
                </div> 
            </div>
            <div class="New_background_Reave" style="position: absolute; font-size: 50px; margin-left: 65%; margin-top: 120%; color: black;">
                    <h1 style="margin-left: 20%;" class="guardian-tekst2"><i>Dit is Raeve</i></h1>
                    <p class="mt-5 tekst_helden" style="font-size: 41px;">
                        Zij studeert mediavormgeving bij
                        ICT & Creatief. Daarnaast heeft ze een
                        bijbaan in  een restaurant. Er wordt daar
                        vaak eten verspilt. Porties zijn te groot
                        en mensen kunnen hunmaaltijd niet op.
                        Op een avond serveert Vera een ouder echtpaar en vraagt of alles
                        naar wens was. “Het eten is heerlijk”,
                        antwoordt de vrouw. De portie is zo groot dat
                        ik het niet op krijg en ik vind het
                        zonde dat het nu weggegooid
                        moet worden.

                        Plotseling krijgt Vera een vreemd gevoel
                        van binnen. Er straalt een fel licht wat uit
                        het niets komt. Wanneer het licht gedoofd is bezit
                        ze superkrachten.
                        Vera is veranderd in Reave en strijdt  
                        voor duurzaamheid. Vliegensvlug kan zij ultra
                        duurzame doggybags toveren die het
                        overgebleven voedsel meteen bevriezen
                        zodat gasten het eten mee naar huis
                        kunnen nemen. Zo vermindert Raeve voedselverspilling.  
                        Het echtpaar, nog steeds onder de indruk
                        van wat er voor hun ogen gebeurde,
                        neemt met een glimlach en een
                        goedgevulde doggybag afscheid. 
                    </p> 
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">              
            <img onclick="Spinny()" class="rotate heartbeat-img" src="<?= ROOT ?>images/rotate.png" style="margin-right: 35%;">    
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center text-center new_place" style="margin-left: 30%;">
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
    var Image1 = document.getElementById("RaeveImage");

    if(Image1.classList.contains("Raeve")) {
        Image1.classList.add("spinny");
        Image1.classList.remove("Raeve");
    setTimeout(() => {
        Image1.src="<?= ROOT ?>images/raeve.png";
        Image1.classList.remove("spinny");
        Image1.classList.add("spinny2");
    }, 2500);
    } else {
        Image1.classList.add("spinny");
        Image1.classList.add("Raeve");
    setTimeout(() => {
        Image1.src="<?= ROOT ?>images/vera.png";
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
