<?php
require_once(dirname(__FILE__).'/Character.php');
require_once(dirname(__FILE__).'/Hero.php');
require_once(dirname(__FILE__).'/Orc.php');

$resultSentence = '';
$sentence = '';
while ($hero -> getHealth() > 0) {
    if ($hero -> getRage() >= 100) {
        $sentence .= '<div class="col-12 fw-bold">Hero lui rend un coup et lui inflige '.$hero -> superAttack().'</div>';
        $hero ->setRage(0);
    }

    $hero -> attacked($orc -> attack());
    $hero -> rageUp(30);

    $sentence .= '<div class="col-12">L\'orc a infligé '.$orc -> attack().' dégats</div>';
}

if ($hero -> getHealth() <= 0) {
    $resultSentence .= '<div class="col-12 fw-bold fs-3 mt-3 mb-3">Tu est mort ! Pas trop déçu?</div>';
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index, follow">
    <meta name="description" content="rpg, un jeu pour petits et grands" />
    <meta name="author" content="Thomas Guillemont" />
    <title>RPG</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header class="p-1 header-color">
        <div class="container-fluid d-flex justify-content-center">
            <div class="row bg-header">
                <div class="col-12 fw-bold fs-5">
                    <span>&copy <a target=" _blank" href="https://github.com/ThomasGuillemont">Thomas Guillemont</a> -
                    <?= date("Y") ?></span>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container-fluid mt-5">
            <div class="row text-center">
                <div class="col-6 d-flex justify-content-center mb-3">
                    <img class="character" src="./assets/img/hero.png" alt="hero">
                </div>
                <div class="col-6 d-flex justify-content-center mb-3">
                    <img class="character" src="./assets/img/orc.png" alt="orc">
                </div>
                <div class="col-6 text-center">
                    <?= $hero ?? '' ?>
                </div>
                <div class="col-6 text-center">
                    <?= $orc ?? '' ?>
                </div>
                <?= $resultSentence ?? '' ?>
                <?= $sentence ?? '' ?>
            </div>
        </div>
    </main>

    <footer class="p-1 footer-color">
        <div class="container-fluid d-flex justify-content-center">
            <div class="row bg-footer">
                <div class="col-12 fw-bold fs-5">
                    <span>&copy <a target=" _blank" href="https://github.com/ThomasGuillemont">Thomas Guillemont</a> -
                    <?= date("Y") ?></span>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>