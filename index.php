<?php
require("controller/includer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forside | Egeteknik</title>
    <?php include 'includes/head.php'?>
    <link rel="stylesheet" href="style/css/index.css">
</head>
<body>
    <header>
        <?php include 'includes/nav.php'?>
    </header>
    <section id="banner">
        <div id="container">
            <h1>Importør af diagnoseudstyr <br> fra Spanske Jaltest by Cojali</h1>
            <h3>
                Vi har specialiseret os i at råde, vejlede og uddanne vores kunder indenfor de produkter vi levere. <br>
                Så udbyttet af diagnose værktøjet altid er størst mulig.
            </h3>
            <div id="button">
                <a href="demo.php">BESTIL DEMO</a>
                <a id="kontaktbtn" href="/kontakt">KONTAKT OS</a>
            </div>
        </div>
    </section>

    <section id="entry">
        <div class="wrapper">
            <a class="news" href="/nyheder">
                <div>
                    <?php
                    $sql = "SELECT * FROM news ORDER BY newsid DESC LIMIT 1";
                    $result = mysqli_query($conn, $sql); 

                    while($news = mysqli_fetch_assoc($result)){
                        echo '<img src="/uploads/news/'. $news["newsimage"] . '" alt="">';
                    }
                    ?>
                </div>
            </a>
            <a class="one" href="/produkter/cv"><div><img src="assets/branches/cv/CVNegative.png" alt=""></div></a>
            <a class="two" href="/produkter/agv"><div><img src="assets/branches/agv/AGVNegative.png" alt=""></div></a>
            <a class="three" href="/produkter/ohw"><div><img src="assets/branches/ohw/OHWNegative.png" alt=""></div></a>
            <a class="four" href="/produkter/marine"><div><img src="assets/branches/marine/MarineNegative.png" alt=""></div></a>
            <a class="five" href="/produkter/jaltest"><div><img src="assets/branches/jaltest/JaltestNegative.png" alt=""></div></a>
            <a class="six" href="/produkter/induction"><div><img src="assets/branches/induction/miniductor.png" alt=""></div></a>
        </div>
    </section>

    <section id="info_container">
        <div id="info">
            <h2 id="infotitle">Egeteknik er et moderne og innovativt firma  <br> placeret i Ølgod</h2>
            <br>
            <h2>Der bygger på mange års erfaring i branchen. </h2>
            <br><br>
            <p>Vi leverer diagnoseløsninger og projekter til mange forskellige kundegrupper som f.eks.:</p>
            <ul>
                <li>Autoriserede og frie lastvognsværksteder</li>
                <li>Kommuner</li>
                <li>Lufthavne</li>
                <li>Vognmænd</li>
                <li>Landbrugsværksteder </li>
                <li>Entreprenørværksteder</li>
                <li>Og meget mere..</li>
            </ul>
            <p>Du kan altid være sikker på et professionelt og kompetent samarbejde med Egeteknik.
            <br><br>
            Vi har specialiseret os i at råde og vejlede, samt uddanne vore kunder indenfor de produkter vi levere. Så udbyttet af diagnose værktøjet altid er størst mulig.
            <br><br>
            Vi er importør fra det Spanske firma Cojali der siden 2003 har udviklet og produceret Jaltest. <a href="/omos">Læs mere</a>
            </p>
        </div>
    </section>

    <section id="main">
        <section class="grid">
            <div class="wrapper">
                <div class="photo"><img src="/assets/branches/cv/kit.png" alt=""></div>
                <div class="text">
                    <h2>Hvem er vi?</h2>
                    <p>
                        Eclipse Jaltest CV Package is a Multi-Brand diagnostic solution for a range of commercial vehicle types.
                        Covering Truck, Trailer, Bus, Coach and Light CV, the Jaltest Multi-Brand package from Eclipse provides 
                        an all-round diagnostic solution with powerful results.
                    </p>
                    <a href="/omos">Lær os bedre at kende</a>
                </div>
            <div>
        </section>

        <section class="grid">
            <div class="wrapper">
                <div class="text">
                    <h2>Hvilke produkter dækker vi?</h2>
                    <p>
                        Eclipse Jaltest CV Package is a Multi-Brand diagnostic solution for a range of commercial vehicle types.
                        Covering Truck, Trailer, Bus, Coach and Light CV, the Jaltest Multi-Brand package from Eclipse provides 
                        an all-round diagnostic solution with powerful results.
                    </p>
                    <a href="/produkt">Se hvilke kategorier Jaltest dækker</a>
                </div>
                <div class="photo"><img src="/assets/branches/cv/kit.png" alt=""></div>
            <div>
        </section>

        <section class="grid">
            <div class="wrapper">
                <div class="photo"><img src="/assets/branches/cv/kit.png" alt=""></div>
                <div class="text">
                    <h2>Personlig kontakt</h2>
                    <p>
                        Vi bestræber os på at svare så hurtigt som muligt.
                    </p>
                    <a href="/kontakt">Find ud af hvordan du kan kontakte os her</a>
                </div>
                
            <div>
        </section>
    </section>
    <?php include 'includes/footer.php'?>
</body>
</html>