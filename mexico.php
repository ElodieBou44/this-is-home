<?php $btnQuotes = ["& more", "why not?", "let's do it", "more please", "i'm in!", "tell me more", "i say yasss", "to the top"];?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/general.css"/>
    <title>Mexico</title>
</head>
<body>
    <header>
        <?php $img_src = "assets/img/holbox_streets.jpg"; $img_alt = "Streets of Holbox island"; $h1_name = "Mexico"; include "components/header.php"?>
    </header>
    <nav class="submenu">
        <?php foreach (['Climate', '|', 'Culture', '|', 'Safety', '|', 'Random facts'] as $menuItem): ?>
        <a href="#"><?php echo $menuItem; ?></a>
        <?php endforeach ?>
    </nav>
    <div class="intro">
    <p>Mexico, the land of tequila and tacos, boasts stunning natural wonders such as secret cenotes and islands surrounded by turquoise waters. The country is also known for its festive and heartwarming people, making it an epicurean's paradise.</p>
    <figure class="figure_mex">
        <img src="assets/img/tacos.jpg" alt="Tacos">
        <img src="assets/img/beach.jpg" alt="Plage">
    </figure>
    </div>
    <img class="map" src="assets/img/map.png" alt="Interactive map">
    <?php include "components/carrousel.php" ?>
    <div class="legend">
    <p>Best destination for:</p>
    <figure>
        <img src="assets/icons/jobs.svg" alt="Digital nomads">
        <figcaption>
            Digital nomads
        </figcaption>
    </figure>
    <figure>
        <img src="assets/icons/paperwork.svg" alt="Erasmus">
        <figcaption>
            Erasmus
        </figcaption>
    </figure>
    </div>
    <section class="mex_destination">
        <div class="holbox_desc">
        <div class="dest_title">
            <img src="assets/icons/jobs.svg" alt="Digital nomads">
            <h2>Holbox</h2>
            <img class = "island" src="assets/icons/holbox_icon.svg" alt="Beach icon">
        </div>
        <!-- Je n'ai fait que le résumé de destination d'"Holbox" pour simplifier le travail qui m'a déjà pris énormément de temps et de patience. -->
        <div class="holbox_text">
            <p>Holbox is a small island located off the coast of Mexico's Yucatan Peninsula. It is known for its unspoiled beaches, crystal-clear waters, and diverse wildlife. The island has a laid-back and bohemian atmosphere, making it an ideal place for digital nomads seeking a relaxed and inspiring environment.Holbox offers several options for remote work, including coworking spaces, cafes, and accommodation with high-speed internet access. The island's slower pace of life and absence of cars make it a peaceful and idyllic place to work and live. Additionally, Holbox is a great destination for outdoor activities such as snorkeling, swimming with whale sharks, and kayaking, providing plenty of opportunities to unwind after a day of work.<br><br>Overall, Holbox is a great option for digital nomads seeking a peaceful and inspiring environment to work remotely while enjoying the natural beauty of a tropical island.</p>
        </div>
        <div class="btn_holbox_container">
            <button><span class="btnSpan"><?=$btnName = $btnQuotes[1]; $btnName; ?></span>+</button>
        </div>
        </div>
        <img src="assets/img/holbox.jpg" alt="Image of Holbox">
    </section>
    <?php include "components/footer.php" ?>
</body>
</html>