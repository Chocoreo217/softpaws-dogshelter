<?php
include("header.php");
?>

	<div class="main_content">

	    <div class="menu">
		    <a href="index.php" id="link_1" class="active">Kezdőoldal</a>
		    <a href="orokbefogadas.php" id="link_2">Örökbefogadás</a>
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
		<?php
			include("register.php")
		?>
	</div>

</div>

<?php
include("footer.php");
?>