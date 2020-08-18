<?php
 
if(isset($_POST["registration"])){
	$username= $_POST["username"];
	$password1 =$_POST["password1"];
	$password2 =$_POST["password2"];
	$email1 = $_POST["email1"];
	$email2 = $_POST["email2"];
	$username_regex = "/^[a-z0-9\-\.\_]{3,10}$/";
	$email_regex = "/^[A-z0-9\-\.\_]+@[a-z0-9]+.[a-z]{2,}$/" ;
	$error_data = false;
	
	if(!$username){
		echo "<div class=\"message error\">Nincs megadva felhasználónév! </div>";
		$error_data = true;
	}elseif(strlen($username)<=3){
		echo "<div class=\"message error\">Felhasználónév túl rövid.</div>";
		$error_data = true;
	}elseif(!preg_match($username_regex, $username)){
		echo "<div class=\"message error\">A felhasználónév nem tartalmazhat nagybetüt, specialis karaktert</div>";
		$error_data = true;
	}			
}
		
	if($password1){
		if($password1 != $password2) {
			echo "<div class=\"message error\">A két jelszó nem egyezik.</div>";
			$error_data = true;
		}elseif(strlen($password1)<=3){
			echo "<div class=\"message error\">A jelszónak legalább 4 karakternek kell lennie.</div>";
			$error_data = true;					
		}				
	}else{
		echo "<div class=\"message error\">Nincs megadva jelszo</div>";
		$error_data = true;
	}
			
	if($email1) {
		if($email1 != $email2){
			echo "<div class=\"message error\">A két email nem egyezik.</div>";	
			$error_data = true;
		}elseif(!preg_match($email_regex, $email1)){
			echo "<div class=\"message error\">Email nem megfelelő formátumú.</div>";	
			$error_data = true;
		}
	}else{
		echo "<div class=\"message error\">Nincs megadva emailcím</div>";
		$error_data = true;
	}
		
	//csak akkor ellenőrzi a képet, ha fel van töltve.
	if($_FILES["kep"]["name"]!=""){
		$kep_pathinfo=pathinfo($_FILES["kep"]["name"]);
		$kep_extension=$kep_pathinfo["extension"];
		$kep_filesize = $_FILES["kep"]["size"];
		$kep_tmp_name = $_FILES["kep"]["tmp_name"];
		$kep_dimensions = getimagesize($kep_tmp_name);
		$kep_mime_type = $kep_dimensions["mime"];
		/*$alloxed_extensions = array("image/jpeg" -> "jpg", "image/png" -> "png"); */
		$error_avatar = false;

		if(is_uploaded_file($kep_tmp_name)){
			
			if($kep_filesize>5000000){
				echo "<div class=\"message error\">Túl nagy a fájl</div>";
				$error_avatar = true;
			/*}elseif(in_array=($kep_extension, $allowed_extensions) || !isset($allowed_extensions($kep_mime_type)){
				echo "<div class=\"message error\">Nem engedélyezett formátum</div>";
				$error_avatar = true;
			} */
			}else{
				// átnevezi a tmp fájlt egy generáltra
					echo $kep_local_tmp_name = mt_rand(1,1000). "." .$kep_extension;
					move_uploaded_file($kep_tmp_name, "feltoltott/".$kep_local_tmp_name);
					
					
					echo "<div class=\"message notice\">Sikeres képfeltöltés</div>";
				
			}
		}								
	}
	if($error_data==false){
		echo "<h2>Üdv köztünk $username</h2>\n";
		echo "<div class=\"message notice\">Sikeres regisztráció!</div>";
		echo "<p><a href=\"index.php\">Vissza a főoldalra</a></p>\n";
	}				
	
?>



<form action="" method="post" enctype="multipart/form-data">
	<label for="username"> Felhasználónév: <small> (legalább 4karakter) </small> </label><br>
	<input id="username" type="text" name="username" /><br>	
	<br>
	<label>Jelszó: <small> (legalább 4karakter) </small><br>
	<input id="password1" type="password" name="password1" /></label><br>
	<br>
	<label>Jelszó újra: <br>
	<input id="password2" type="password" name="password2" /></label><br>
	<br>
	<label>Email-cím: <br>
	<input id="e-mail1" type="text" name="email1" /></label><br>
	<br>
	<label>Email-cím újra: <br>
	<input id="e-mail2" type="text" name="email2" /></label><br>
	<br>
	<label>Kép: <small> JPG,PNG, max. 50kbyte </small><br>
	<input id="kep" type="file" name="kep" /> </label><br>
	<br>
	<input type="submit" name="registration" value="Regisztáció" />
</form>