<?php
session_start();

session_unset();
session_destroy();

echo "Sikeres kijelenkezés!<br>" ;
echo "<a href=\"index.php\">Vissza</a>\n";

?>