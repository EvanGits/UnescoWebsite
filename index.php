    <?php
//Inbcluden header en nav
include "includes/header.php";
include "includes/Hamburger.php";
?>
        <!-- pages worden zo opgeroepen, $page = de pagina wat je als eerst wilt laten zien-->
        <main>
            <!-- Start pagina, met behulp van de javascript code krijg je het effect dat je door het portaal gaat-->
            <div class="container">
                <div class="row" style= "position: relative">
                    <div class="col-12 col-lg-6 d-flex mx-5 justify-content-center align-items-center">
                        <img src="<?= ROOT ?>images/arrow.gif" class="arrow">
                    </div>
        
                    <div class="animatie-top col-12 col-lg-6 d-flex mx-5 justify-content-center align-items-center">
                        <div class="max-width: 646vh;">
                            <img src="<?= ROOT ?>images/animatie.gif" class="animatie-jpg img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mx-5 d-flex justify-content-center">
                        <img src="<?= ROOT ?>images/beginlijn.png" class="beginlijn-class img-fluid">
                        <p>
                        <div class= "heartbeat-tekst1" data-toggle="collapse" data-target="#unesco">What the</div>
                        <div class="heartbeat-tekst2" data-toggle="collapse" data-target="#unesco"> Unesco?!</div>
                        <div class="b-background collapse show" id="unesco">
                            <div class="titel">Unesco-scholennetwerk</div>
                            <p class="bb-background">
                                <em><strong>‘Since wars begin in the minds of men, it is in the minds of men that the defences of peace must be constructed’.</strong></em><br>
                                Deze gedachte vormt de essentie van de missie van Unesco. <br>
                                Unesco-scholen ondersteunen deze missie: ze maken hun leerlingen vertrouwd met het Unesco-gedachtegoed en dragen <br>
                                zo hun steentje bij aan vrede en verdraagzaamheid.
                            </p>
                        </div>
                 
                        <div class="b-background1 collapse show" id="kw1c">
                            <div class="titel">KW1C UNESCO SCHOOL</div>
                            <p class="bb-background1">
                                Het Koning Willem I College is als Unesco-school deel van een wereldwijd netwerk met meer dan 9700 scholen. <br>
                                In Nederland zijn 75 scholen aangesloten waarvan ongeveer 10 mbo’s. <br>
                                Wij vinden het als school belangrijk te streven naar een betere wereld. <br>
                                Met behulp van deze app ga je ontdekken hoe jij als student je steentje bij kunt dragen.
                            </p>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6" >
                </p>
                <img src="<?= ROOT ?>images/vliegtuigkw1c.gif" class="vliegtuigkw1c" data-toggle="collapse" data-target="#kw1c">
                <p>

                <a href="<?= ROOT ?>pages/Portaal.php" id="image1">
                    <img src="<?= ROOT ?>images/portaal.png" id="portaal1" class="portaal-class">
                    <img src="<?= ROOT ?>images/sterrenveel.gif" id="portaal1" class="veel-sterren">
                </a>
            </div>
            <script>
                let currentImage = 1;
                let imageLoadedFlag = false;

                document.querySelector('#unesco').classList.remove('show');
                document.querySelector('#kw1c').classList.remove('show');

                function playAudio() {
                    document.getElementById("sound").play(); // Play the audio
                    setTimeout(function() {
                        window.location.href = "next-page-url"; // Navigate to the next page after a delay
                    }, 2500); // Set the delay in milliseconds
                }

                function imageLoaded() {
                    imageLoadedFlag = true;
                }

                function hideAndShowImage() {
                    const arrowImage = document.querySelector('img[src="<?= ROOT ?>images/arrow.gif"]');
                    const originalImagePosition = arrowImage.style.marginLeft; // Store the original margin-left value

                    arrowImage.style.visibility = 'hidden'; // Hide the image initially

                    setTimeout(function() {
                        arrowImage.style.visibility = 'visible'; // Show the image after 4 seconds
                        arrowImage.style.marginLeft = originalImagePosition; // Restore the original margin-left value
                    }, 4000);
                }

                hideAndShowImage();




            </script>

        </main>

        <?php
        include "includes/footer.php";
        ?>