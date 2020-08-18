<?php
    $lastnameErr = $firstnameErr = $emailErr = $phonenumberErr = "";  //kötelező mező
    $lastname = $firstname = $nem = $email = $phonenumber = $birthday = $job = $zipcode = $önkéntese = $topic = $önkéntesnap = $önkéntesidő = "";
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["lastname"])) {
            $lastnameErr = "Vezetéknév kitöltése kötelező.";
        }else {
            $lastname = test_input($_POST["lastname"]);
        }
        if (empty($_POST["firstname"])) {
            $firstnameErr = "Keresztnév kitöltése kötelező.";
        }else {
            $firstname = test_input($_POST["firstname"]);
        }

        if (empty($_POST["nem"])) {
            $nem = "";
        }else {
            $nem = test_input($_POST["nem"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "E-mail cím kitöltése kötelező.";
        }else {
            $email = test_input($_POST["email"]);
            //$email = ["abc@gmail.com","abc@gmailcom"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Nem megfelelő az e-mail cím formátuma."; 
            }
        }

        if (empty($_POST["phonenumber"])) {                         
            $phonenumberErr = "Telefonszám kitöltése kötelező.";
        }else {
            $phonenumber = test_input($_POST["phonenumber"]);
            //$phonenumber = "06-20-000-0000"
            if(!preg_match("/^06-[2, 3, 7](0)-[0-9]{3}-[0-9]{4}$/", $phonenumber)) {
                $phonenumberErr = "Nem megfelelő a telefonszám formátuma."; 
            }
        }
        
        if (empty($_POST["birthday"])) {
           $birthday = "";
        }else {
           $birthday = test_input($_POST["birthday"]);
        }
        
        if (empty($_POST["job"])) {
           $job = "";
        }else {
           $job = test_input($_POST["job"]);
        }

        if (empty($_POST["zipcode"])) {
           $zipcode = "";
        }else {
           $zipcode = test_input($_POST["zipcode"]);
        }

        if (empty($_POST["önkéntese"])) {
           $önkéntese = "";
        }else {
           $önkéntese = test_input($_POST["önkéntese"]);
        }

        if (empty($_POST["topic"])) {
           $topic = "";
        }else {
           $topic = $_POST["topic"];    
        }

        if (empty($_POST["önkéntesnap"])) {
           $önkéntesnap = "";
        }else {
           $önkéntesnap = test_input($_POST["önkéntesnap"]);
        }

        if (empty($_POST["önkéntesidő"])) {
           $önkéntesidő = "";
        }else {
           $önkéntesidő = test_input($_POST["önkéntesidő"]);
        }
    }
 
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<h2 class="igazítás">Önkéntes jelentkezési lap</h2>
    <p><span class = "error">* kötelező mező</span></p>
    <form class="form" method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
            <tr>
                <td><label for="Lastname">Vezetéknév:</label></td>
                <td><input type="text" id="Lastname" name="lastname">
                    <span class = "error">* <?php echo $lastnameErr;?></span>
                </td>
            </tr>
            <tr>
                <td><label for="Firstname">Keresztnév:</label></td>
                <td><input type="text" id="Firstname" name="firstname">
                    <span class = "error">* <?php echo $firstnameErr;?></span>
                </td>
            </tr>
            <tr>
                <td><label>Neme:</label></td>
                <td><label for="nem_f">
                    <input type="radio" name="nem" id="nem_f" value="1"> Férfi</label>
                    <br>
                    <label for="nem_n">
                    <input type="radio" name="nem" id="nem_n" value="2"> Nő</label>
                </td>
            </tr>
            <tr>
                <td><label for="Email">E-mail cím:</label></td>
                <td><input type="text" id="Email" name="email">
                    <span class = "error">* <?php echo $emailErr;?></span>
                </td>
            </tr>
            <tr>
                <td><label for="Phone">Telefonszám:</label></td>
                <td><input type="text" id="Phone" name="phonenumber">
                    <span class = "error">* <?php echo $phonenumberErr;?></span>
                </td>
            </tr>
            <tr>
                <td><label>Születési idő:</label></td>
                <td><input type="date" name="birthday"></td>
            </tr>
            <tr>
                <td><label for="Job">Foglalkozás:</label></td>
                <td><input type="text" id="Job" name="job"></td>
            </tr>
            <tr>
                <td><label for="ZipCode">Irányítószám:</label></td>
                <td><input type="text" id="ZipCode" name="zipcode"></td>
            </tr>
            <tr>
                <td><p>Voltál-e már önkéntes valamely más szervezetnél?</p></td>
                <td><label for="igen">
                    <input type="radio" name="önkéntese" id="igen" value="1"> Igen</label>
                    <br>
                    <label for="nem">
                    <input type="radio" name="önkéntese" id="nem" value="2"> Nem</label>
                </td>
            </tr>
            <tr>
                <td><p>Milyen jellegű segítséget tudsz felajánlani szervezetünknek?<br>(Többet is jelölhetsz)</p></td>
                <td><label for="befogadás">
                    <input type="checkbox" name="topic" id="befogadás" value="1">Ideiglenes befogadása</label>
                    <br>
                    <label for="rehab">
                    <input type="checkbox" name="topic" id="rehab" value="2">Rehabilitáció (simogatás, játszás, lelki ápolás)</label>
                    <br>
                    <label for="tanítás">
                    <input type="checkbox" name="topic" id="tanítás" value="3">Engedelmességi gyakorlatok (pórázhoz szoktatás, láb mellett séta, ültetés, stb.)</label>
                    <br>
                    <label for="sétáltatás">
                    <input type="checkbox" name="topic" id="sétáltatás" value="4">Kutyasétáltatás</label>
                    <br>
                    <label for="udvar">
                    <input type="checkbox" name="topic" id="udvar" value="5">Udvar körüli teendők (gereblyézés, lapátolás, fűnyírás, konzervek nyitogatása, stb.)</label>
                    <br>
                    <label for="takarítás">
                    <input type="checkbox" name="topic" id="takarítás" value="6">Takarítás, rendrakás, mosogatás</label>
                    <br>
                    <label for="népszerűsítés">
                    <input type="checkbox" name="topic" id="népszerűsítés" value="7">Menhely népszerűsítése (szórólapok és plakátok terjesztése)</label>
                    <br>
                    <label for="befogadókeresés">
                    <input type="checkbox" name="topic" id="befogadókeresés" value="8">Befogadó gazdák keresése</label>
                    <br>
                    <label for="toborzás">
                    <input type="checkbox" name="topic" id="toborzás" value="9">Önkéntesek toborzása</label>
                </td>
            </tr>
            <tr>
                <td><label for="önkéntesnap">Mikor tudsz önkéntes munkát vállalni?</label></td>
                <td><select name="önkéntesnap" id="önkéntesnap">
                        <option selected>Válassz egyet</option>
                        <option value="1">Hétköznap rendszeresen</option>
                        <option value="1">Hétköznap alkalmanként</option>
                        <option value="3">Hétvégén rendszeresen</option>
                        <option value="4">Hétvégén alkalmanként</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="önkéntesidő">Mennyi ideig tudod vállalni napi szinten?</label></td>
                <td><select name="önkéntesidő" id="önkéntesidő">
                        <option selected>Válassz egyet</option>
                        <option value="1">napi 1-2 órát</option>
                        <option value="1">napi 2-3 órát</option>
                        <option value="3">napi 3-4 órát</option>
                        <option value="4">napi 4 vagy több órát</option>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <p class="igazítás"><input type="submit" name="submit" value="Beküldés"></p>
    </form>


    <?php
    if ($lastnameErr==false && $firstnameErr==false && $emailErr==false && $phonenumberErr==false) {
        echo ("<p>Köszönjük az űrlap kitöltését!</p>");
    }
    ?>
