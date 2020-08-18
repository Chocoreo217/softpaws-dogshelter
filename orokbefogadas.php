<?php
include("header.php");
?>

    <div class="main_content">

        <div class="menu">
            <a href="index.php" id="link_1">Kezdőoldal</a>
            <a href="orokbefogadas.php" id="link_2" class="active">Örökbefogadás</a>
            <div class="lemenu">
                <button class="lemenubtn">Támogatás</button>
                <div class="lemenu-content">
                    <a href="tamogatas.php">Pénzügyi/tárgyi támogatás</a>
                    <a href="onkentes.php">Önkéntes munka</a>
                    <a href="kozszolgalat.php">Iskolai közösségi szolgálat</a>
                </div>
            </div>
            <a href="vendegkonyv.php" id="link_4">Vendégkönyv</a>
            <a href="kapcsolat.php" id="link_5">Kapcsolat</a>
        </div>

<?php
include("aside.php");
?>
		
    <div class="content">
	 
	
        <h1>Örökbefogadás</h1>
            <p>Legnagyobb öröm számunkra, ha egy hányatott sorsú állat végre biztos, szerető gazdájára, új családra lel. Bár mindent megteszünk annak érdekében, hogy ideiglenes “menhelyi” életüket szebbé tegyük, sajnos érthető módon nem tudjuk mindannyiuknak egyszerre biztosítani azt az egyedi gondoskodást, melyet felelős, elkötelezett gazdájuktól kapnak. Minden általunk befogadott árva állat megkapja a szükséges oltásokat és féregtelenítést, az ivarérett korú szukákat ivartalaníttatjuk. Az adoptálás Örökbefogadási Nyilatkozat aláírásával történik, hogy bármiféle visszaélést kiküszöbölhessünk. Arra biztatunk minden kedves gazdijelöltet, válasszon magának olyan kedvencet, akinek befogadásával még egy életnek ad lehetőséget, hiszen a helyére újabb rászoruló kerülhet. Semmi sem ér fel egy sokat szenvedett kutya hálájával, szeretetünket százszorosan viszonozzák!</p>
			
			<?php 
				if ($_SESSION['bejelentkezve'] == true) {
						include ("dogs.php");
					}else {
					echo "Jelenkezz be az oldalra";
					}
			?>	

    </div>

</div>

<?php
include("footer.php");
?>