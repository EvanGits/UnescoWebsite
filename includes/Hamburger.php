
<!-- Knop voor het navigatie menu 
<input type="checkbox" id='sideButton' onclick="Open()">&#9776;
<input type="checkbox" id='sideButtonClose' onclick="Close()">&times;
<label for= "sideButton"></label>
-->
<div id ="hamMenu"> 
<label class="hamButton">
	<input type="checkbox"/> 
</label>

<div id="NavBar" class="sidenav">
	<!-- Verwijzingen naar de andere pagina's / sites -->
	<div id="Buttons" class="buttons buttons_2">
		<a href="<?= ROOT ?>" id="buttons" style="margin-top: 150px">Hoofdpagina</a>
		<a href="<?= ROOT ?>pages/Quiz.php" id="buttons">Ontdek je Innerlijke Held</a>
		<a href="https://unric.org/nl/duurzame-ontwikkelingsdoelstellingen/" target="_blank" id="buttons">Unesco klimaatdoelen</a>
		<a href="<?= ROOT ?>pages/Helden.php" id="buttons">Helden</a>
		<a href="<?= ROOT ?>pages/About.php" id="buttons">De makers</a>
	</div>
</div>
</div>

<script>
// gives the sidebar a width of 45, thus putting it in view
function Open()
  {
    document.getElementById("NavBar").style.width = "45%";
  }

// gives the sidebar a width of 0, thus removing it from view
  function Close()
  {
    document.getElementById("NavBar").style.width = "0%";
  }
</script>