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
                    <a href="onkentes.php" class="active">Önkéntes munka</a>
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
            <h1>Önkéntesség</h1>
                <p>Sok olyan feladat van, amelyet idő vagy anyagi források hiányában nem tudunk elvégezni.</p>
                <p>Kutyusokat kedvelő, azokkal foglalkozni akaró önkéntesek jelentkezését várjuk, hogy besegíthessenek a menhelyi kutyák ellátásába, foglalkozzanak, játszanak velük. A önkéntes munkák igen sokrétűek, sokan nem is gondolnák, hogy mennyi mindenben tudnak a segítségünkre és ezáltal a bajban lévő állatok segítségére lenni.</p>
                <p>Önkéntesnek bárki jelentkezhet, aki <b>elmúlt 16 éves</b>. (Állandó szülői felügyelettel természetesen részt vehetnek a munkában a kisebbek is.) 18 éves kor alatt minden esetben <b>írásos szülői engedély szükséges</b> az önkéntességhez, melyet érkezéskor kérünk az irodában leadni.</p>
                <p>Ha kedvet érez ahhoz, hogy bármilyen módon - kutyaetetés, szőrápolás, fizikai munka a menhelyen vagy szervezési munkák, gyűjtések - részt vegyen munkánkban, kérjük jelentkezzen, szeretettel várjuk!</p>
            <br>

        <?php
        include("urlap.php");
        ?>

        </div>

    </div>

<?php
include("footer.php");
?>