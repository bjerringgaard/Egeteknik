<?php 
require("controller/includer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nyheder | Egeteknik</title>
    <?php include 'includes/head.php'?>
    <link rel="stylesheet" href="style/css/nyheder.css">
</head>
<body>
    <header>
        <?php include 'includes/nav.php'?>
    </header>

    <section id="topbanner">
        <div id="container">
            <h1>Nyheder</h1>
            <h2>Det nyeste fra os</h2>
        </div>
    </section>

<section id="main">
    <div id="container">
        <?php
        $sql = "SELECT * FROM news ORDER BY newsid DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        while($news = mysqli_fetch_assoc($result)) { ?>
            <div id="news">
                <div class="news_img"><img src="/uploads/news/<?php echo $news['newsimage'] ?>" alt=""></div>
                <div class="news_title"><h3><?php echo $news['newstitle']?></h3></div>
                <div class="news_desc"><p><?php echo $news['newsdesc']?></p></div>
                <div class="news_time"><p><?php echo $news['newstime']?></p></div>
            </div>
        <?php }
        } else {
        echo "Ingen nyheder";
        } ?>
    </div>
</section>
    <?php include 'includes/footer.php'?>
</body>
</html>

<?php $post['PostLikes'] ?>