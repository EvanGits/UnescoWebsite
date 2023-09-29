<?php
    include "../includes/header.php";
    include "../includes/Hamburger.php";
?>
<main>
       
<!--Hierin staan de afbeeldingen voor het portaal en met behulp van boostrap is het ook responsive-->
  <div class="container">
        <img src="<?= ROOT ?>images/sterren.gif" style="position: absolute; margin-left: 5%; margin-top: 5%;" class="sterrenportaal sterrenplaatsen ">
        <img src="<?= ROOT ?>images/sterren.gif" style="position: absolute; margin-left: 30%;" class="sterrenportaal">
        <img src="<?= ROOT ?>images/sterren.gif" style="position: absolute; margin-left: 58%;" class="ster-flip sterrenportaal">
        <img src="<?= ROOT ?>images/sterren2.gif" style="position: absolute; margin-left: 40%;" class="sterrenportaal">
        <img src="<?= ROOT ?>images/sterren2.gif" style="position: absolute;" class="sterrenportaal ">
    <div class="row"> 
        <a href="../index.php">
            <div class="col-12 mx-5 d-flex justify-content-center">
                    <img src="<?= ROOT ?>images/portaaluitgang.png" style="position: absolute;" class="img-fluid">
                    <img src="<?= ROOT ?>images/sterren2.gif" style="position: absolute;" class="sterrenportaal">
            </div>
        </a>
        <div class="col-12 col-lg-6 mx-5 d-flex justify-content-center text-kleur">
        <!--Buttons met informatie-->

        <p>
                <img src="<?= ROOT ?>images/duurzaamheid_icoon.png" class="heartbeat-img groen " data-toggle="collapse" data-target="#duurzaam">

                <div class="tekstvakken b-background3 collapse show tekstvakgroen" id="duurzaam">
                        <h1>Duurzaamheid</h1>
                        <p class="txt-button bb-background3 backgroundfont-class " style="font-size: 28px;">
                        Duurzaamheid is van belang voor de toekomst van onze planeet en de mensheid. <br>
                        Hoe ziet jouw wereld eruit over 25 jaar? <br>
                        Zijn er dan nog olifanten? Reizen we nog in vliegtuigen?
                        </p>                           
                </div>
        </p>
        <p>
                <img src="<?= ROOT ?>images/vrede_en_mensenrechten_icoon.png" class="heartbeat-img geel" style="position: absolute; margin-top: 95%; margin-left: 45%;" data-toggle="collapse" data-target="#vrede">
                <div class="tekstvakken b-background4 collapse show  tekstvakgeel" style="position: absolute; margin-top: 110%; margin-left: 55%;" id="vrede">
                    <h1>Vrede en mensenrechten</h1>
                            <p class="txt-button bb-background4 backgroundfont-class tekstvakgeel" style="font-size: 28px;">

                                Mensenrechten gelden voor iedereen, ongeacht waar je geboren bent of wie je bent.
                                Vrede is afwezigheid<br> van geweld en oorlog.
                                Hoe kunnen we zorgen dat mensenrechten beschermd worden?
                                Is het mogelijk om wereldvrede te bereiken?<br> En wat is jouw rol daarin?
                            </p>
                </div>
        </p>

        <p>
                <img src="<?= ROOT ?>images/intercultureel_leren.png"class="heartbeat-img roze" style="position: absolute; margin-top: 165%; margin-left: 45%;" data-toggle="collapse" data-target="#cultuur">
                <div class="tekstvakken b-background5 collapse show tekstvakroze" style="position: absolute; margin-top: 180%; margin-right: 50%;" id="cultuur">
                        <h1>Intercultureel</h1>
                        <p class="txt-button bb-background5 backgroundfont-class tekstvakroze " style="font-size: 28px;">
                        Intercultureel leren betekent het ontwikkelen van kennis over andere culturen en andere manieren van leven. <br>
                        Als je openstaat voor andere culturen gaat er een wereld voor je open.
                        Wat wil jij leren van andere culturen?
                        </p>                           
                </div>
        </p>
        <p>
                <img src="<?= ROOT ?>images/wereldburgerschap_icoon.png" class="heartbeat-img blauw" style="position: absolute; margin-top: 270%; margin-left: 45%;" data-toggle="collapse" data-target="#wereld">
                <div class="blauw_link tekstvakken b-background6 collapse show tekstblauw" style="position: absolute; margin-top: 285%; margin-left: 50%;" id="wereld">
                        <h1>Wereldburgerschap </h1>
                        <p class="txt-button bb-background6 backgroundfont-class tekstvakblauw" style="font-size: 28px;">
                        Als wereldburgers zijn we samen verantwoordelijk voor elkaar en de wereld. <br>
                        We gaan voor een betere wereld. <br>
                        Hoe werk je samen met mensen die anders denken dan jij? <br>
                        Hoe maak jij de wereld een stukje beter?
                        </p>                           
                </div>
        </p>
                <button style="position: absolute; margin-top: 400%; font-size: 300%; " class="btn btn-quiz" onclick="window.location.href = 'Quiz.php';">Ontdek je Innerlijke Held</button>
                <img src="<?= ROOT ?>images/heldenlijn.png" class="heldenlijn-class img-fluid" style="margin-top: 4%;">            
        </div>
        <div class="col-12 col-lg-6 mx-5 d-flex justify-content-center leegte" style="margin-top: 131%;">
                <img src="<?= ROOT ?>images/eindlijn.png" class="heldenlijn-class img-fluid">   
        </div>
        <div class="col-12 mx-5 d-flex justify-content-center" style="margin-top: 85%;">
                <img src="<?= ROOT ?>images/karakter_eind_groepspose.png" class="karakters-einde">             
        </div>
  </div>
</main>
<style>
    .btn-quiz:hover
    {
         background-color: #abd085;
        color: white;
    }
    .heartbeat-img
    {
        cursor: pointer;
    }
    .txt-button, h1
    {
        padding: 10px;
    }

</style>
<script>
        document.querySelector('#duurzaam').classList.remove('show');
        document.querySelector('#vrede').classList.remove('show');
        document.querySelector('#cultuur').classList.remove('show');
        document.querySelector('#wereld').classList.remove('show');
</script>
