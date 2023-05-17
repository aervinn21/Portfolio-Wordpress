<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio-About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./dist/css/main.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>
<body>
    <div class="overlayAbout"></div>
    <div class="slides">
        <p class="overlayAbout2"></p>
    </div>

    <header class="headerAbout">
        <div class="container">
            <div class="headerAbout__wrapper d--flex justify--between align--center ">
                <div class="aboutName">
                    <h2>Arvin.C</h2>
                </div>

                <nav class=".nav">
                    <ul class="d--flex">
                    <?php wp_menu_li();  ?>
                    </ul>
                </nav>
                <div class="toggleMenu">
                    <span></span>
                    <span></span>
                    <span></span>
            </div>
            </div>
        </div>
        <div class="headerMobileNav">
            <ul class="text--center py--2">
            <?php wp_menu_li();  ?>
            </ul>
        </div>
    </header>