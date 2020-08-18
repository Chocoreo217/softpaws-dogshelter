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
                    <a href="onkentes.php">Önkéntes munka</a>
                    <a href="kozszolgalat.php">Iskolai közösségi szolgálat</a>
                </div>
            </div>
            <a href="vendegkonyv.php" id="link_4">Vendégkönyv</a>
            <a href="kapcsolat.php" id="link_5" class="active">Kapcsolat</a>
        </div>

<?php
include("aside.php");
?>

  	<div class="content">
							
    	<table class="infotable">
            <tr>
                <td>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11036.121002429576!2d20.122035500443577!3d46.249626418572795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474487d1f7026fe1%3A0x290d7030b068f7e2!2sSzegedi+%C3%81llatkert+-ZOO!5e0!3m2!1shu!2shu!4v1520100851019"></iframe>
    		    </td>
                <td>
                    <b>Telephely:</b><br>6725 Szeged, Cserepes sor 47.<br>
                    <br>
                    <b>Nyitvatartás:</b><br>
                    H - P: 9:30-15:30<br>
                    Szombat (nyílt nap): 9:30-15:30<br>
                    Vasárnap: 10:00-14:00<br>
                    <br>
                    <b>Telefonszám:</b> 06 70 777 7777<br>
                    <br>
                    <b>E-mail:</b> <a href="mailto:fakeemail777@asdasd.com?Subject=Érdeklődés" target="_top">Kattints ide!</a><br>
                    <br>
                    <b>Bankszámlaszám:</b> 11700000-11111111<br>
                    <br>
                    <b>PayPal:</b> info@softpawsmenhely.hu<br>
                    <br>
                    <b>Adószám:</b> 12345678-1-99
                </td>
            </tr>
    	</table>
        <br>


         <?php
            if (isset($_REQUEST['email']))  {
          
            //Email információk
            $admin_email = "elvira.erdei@gmail.com";
            $email = $_REQUEST['email'];
            $subject = $_REQUEST['subject'];
            $comment = $_REQUEST['comment'];
          
            //mail küldése
            mail($admin_email, "$subject", $comment, "From:" . $email);
          
            echo "Köszönjük, hogy írt nekünk! Mihamarabb válaszolunk!";
            }
            //nincs mailszerver mögötte
         
            else  {
        ?>
    
            <form method="post">
            Feladó e-mail: <br> <input name="email" type="text" /> <br>
            Tárgy: <br> <input name="subject" type="text" /> <br>
            Üzenet: <br>

            <textarea name="comment" rows="10" cols="40"></textarea>
            <br>
            <input type="submit" value="Küldés" />
            </form>
          
        <?php
            }
        ?>
	
    </div>

</div>

<?php
include("footer.php");
?>