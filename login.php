<?php
session_start();

const UNAME = "Boss";
const PASS = "admin";

$error = null;
if (isset($_SESSION['uname'])) {
    $uname = $_SESSION['uname'];
} elseif (isset($_POST['uname']) && isset($_POST['pass'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    if (strlen($uname) == 0) {
        $error = "Írja be a felhasználónevet.";
    } elseif (strlen($pass) == 0) {
        $error = "Írja be a jelszót!";
    } elseif (strcmp($uname, UNAME) != 0 || strcmp($pass, PASS) != 0) {
        $error = "Nem megfelelő felhasználónév vagy jelszó!";
    } else {
        $_SESSION["uname"] = $uname;
    }
}

if (isset($_SESSION["uname"])) {
    $_SESSION['bejelentkezve'] = true; 
    echo "<h2>Bejelentkezve</h2>\n";
    echo "<p>Név: $uname</p>\n";
    echo "<p><a href=\"logout.php\">Kijelentkezés</a></p>\n";
}
if ($error != null) {
    echo "<p style=\"color: green;\">$error</p>\n";
}

?>

<form method="post">
    <label>Felhasználónév:<br><input type="text" name="uname" /></label><br>
    <label>Jelszó:<br><input type="password" name="pass" /></label><br>
    <br>
    <input type="submit" name="submit" value="Login" />
</form>