<?php include 'controller/senddemo.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Demo | Egeteknik</title>
    <?php include 'includes/head.php'?>
    <link rel="stylesheet" href="style/css/demo.css">
</head>
<body>
    <header>
        <?php include 'includes/nav.php'?>
    </header>
    <section id="topbanner">
        <div id="container">
            <h1>Bestil demo</h1>
            <h2>Det er helt gratis</h2>
        </div>
    </section>

    <section id="bestildemo">
        <div id="container">
            <form action="" method="POST">
                <label for="demotype">Demo Type</label>
                <select id="demotype" name="demotype">
                    <option value="Vælg venligst">Vælg venligst</option>
                    <option value="Commercial Vehicle">Commercial Vehicles</option>
                    <option value="Agricultural Vehicle">Agricultural Vehicle</option>
                    <option value="Off-Highway Vehicles">Off-Highway Vehicles</option>
                    <option value="Marine Vessels">Marine Vessels</option>
                    <option value="Jaltest">Jaltest</option>
                    <option value="Jaltest Telematic">Jaltest Telematic</option>
                    <option value="Anden eller flere">Anden eller flere</option>
                </select>

                <label for="name">Fulde navn</label><br>
                <input type="text" id="name" name="name"><br>

                <label for="company">Firma navn</label><br>
                <input type="text" id="company" name="company"><br>

                <label for="email">Email</label><br>
                <input type="text" id="email" name="email"><br>

                <label for="phone">Telefon</label><br>
                <input type="text" id="phone" name="phone"><br>

                <div id="submitBtn">
                    <input id="submit" type="submit" name="submit" value="BESTIL FYSISK DEMO">
                    <input id="submitOnline" type="submit" name="online" value="BESTIL ONLINE DEMO">
                </div>
            </form>
        </div>
    </section>

    <?php include 'includes/footer.php'?>
</body>
</html>