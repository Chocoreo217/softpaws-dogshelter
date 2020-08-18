<?php
include("header.php");
?>
    <div class="main_content">

        <div class="menu">
            <a href="index.php" id="link_1">Kezdőoldal</a>
            <a href="orokbefogadas.php" id="link_2">Örökbefogadás</a>
            <div class="lemenu">
                <button class="lemenubtn">Támogatás</button>
                <div class="lemenu-content">
                    <a href="tamogatas.php">Pénzügyi/tárgyi támogatás</a>
                    <a href="onkentes.php" >Önkéntes munka</a>
                    <a href="kozszolgalat.php">Iskolai közösségi szolgálat</a>
                </div>
            </div>
            <a href="vendegkonyv.php" id="link_4" class="active">Vendégkönyv</a>
            <a href="kapcsolat.php" id="link_5">Kapcsolat</a>
        </div>

<?php
include("aside.php");
?>

    <div class="content">
        <h1>Vendégkönyv</h1>
            <p>Legfontosabb számunkra, hogy állataink szerető családba, gondos gazdihoz kerüljenek, ezért minden visszajelzésnek nagyon örülünk. Ha lehetősége van képekkel illusztrált beszámoló küldésére, nagyon megköszönjük, hiszen ezek adnak lelkierőt küzdelmes és gyakran kiábrándító munkánkhoz.</p>
        <br>
        <form method="POST">
		Név: <input type="text" name="user" placeholder="Név" />
		<br>
		<textarea cols="40" rows="5" name="note" placeholder="Vélemény" wrap="virtual"></textarea>
		<br>
		<input type="file" name="pic" accept="image/*">
		<br>
		<input type="submit" name="submit" value="Elküld" />
		</form>

		<?php

		if (isset($_POST['submit'])){

			$user = $_POST['user'];
			$note = $_POST['note'];

		if(!empty($user) && !empty($note)) {
			$msg = $user . ' : '. $note;
			//Fájl megnyitás
			$fp = fopen("guestbook.txt","a") or die("Can't open file");
			//Beírás a fájlba
			fwrite($fp, $msg."\n");
			fclose($fp);
		  }
		}
		?>

	<h2>Vélemények: </h2>
		<?php
			$file = fopen("guestbook.txt", "r") or exit("Unable to open file!");
			//beolvassa, amíg nem ér a végére
			while(!feof($file))
			{
			//törésekkel visszadja az összes bejegyzést
			echo fgets($file). '<br>';
			}
			fclose($file);
		?> 

    </div>

</div>

<?php
include("footer.php");
?>