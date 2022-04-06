<?php
require_once(dirname(__FILE__).'/Hero.php');
require_once(dirname(__FILE__).'/Orc.php');

// Orc
$orc = new Orc(700, 'Epée en bois', 100, 'Armure en paille', 20, 500, 0);
// Hero
$hero = new Hero('Epée de MJ', 260, 'Armure de MJ', 600, 2000, 0);

// init var
$resultSentence = '';
$sentence = '';
$i = 1;

while ($hero -> getHealth() > 0 && $orc -> getHealth() > 0) {

    if ($orc -> getHealth() > 0) {
        $orc -> attack();
        $hero -> attacked($orc -> getDamage());
        $sentence .= '<div class="col-12"><b>['.$i.']</b> Orc frappe '.$orc -> getDamage().', le héro à '.$hero -> getHealth(). ' PV</div>';
        // rageUp
        $hero -> rageUp(30);
    }
    
    if ($hero -> getRage() >= 100) {
        $heroDamage = $hero -> getWeaponDamage();

        $hero ->setRage(0);
        $orc -> attacked($heroDamage);

        $sentence .= '<div class="col-12 fw-bold mt-2 mb-2 fst-italic">Le héro lui rend un coup et lui inflige '.$heroDamage.' dégats, l\'orc à '.$orc -> getHealth(). ' PV</div>';
    }

    
    if ($orc -> getHealth() <= 0) {
        $resultSentence .= '<div class="col-12 fw-bold fs-3 mt-3 mb-3">L\'orc est mort ! Bravo !</div>';
    }
    if ($hero -> getHealth() <= 0) {
        $resultSentence .= '<div class="col-12 fw-bold fs-3 mt-3 mb-3">Tu es mort ! Pas trop déçu ?</div>';
    }

    if ($orc -> getHealth() <= 0 && $hero -> getHealth() <= 0) {
        $resultSentence = '<div class="col-12 fw-bold fs-3 mt-3 mb-3">Le héro et l\'orc sont morts. Aucun vainqueur !</div>';
    }

    // i++
    $i ++;
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
    <title>RPG-PHP</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/bird.gif" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-body">
    <header class="p-1 tiles">
        <div class="container-fluid d-flex justify-content-center">
            <div class="row tiles-color">
                <div class="col-12">
                    <h1 class="text-center fw-bold fs-2">RPG PHP</h1>
                </div>
                <div class="col-12 fw-bold fs-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <img class="characters" src="./assets/img/hero.png" alt="hero">
                            </div>
                            <div class="col d-flex justify-content-center">
                                <img class="characters" src="./assets/img/orc.png" alt="orc">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container-fluid mt-5">
            <div class="row text-center">
                <div class="col-12 col-sm-6 text-center d-flex align-self-center justify-content-center">
                    <div class="m-4 tiles-color p-2">
                        <?= $hero ?? '' ?>
                    </div>
                </div>
                <div class="col-12 col-sm-6 text-center d-flex align-self-center justify-content-center">
                    <div class="m-4 tiles-color p-2">
                        <?= $orc ?? '' ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="container-fluid">
                        <div class="row tiles-color ms-3 me-3">
                            <div class="col-12 fw-bold fs-3 mt-3 mb-3">Début du combat !</div>
                            <?= $sentence ?? '' ?>
                            <?= $resultSentence ?? '' ?>
                            <div class="col-12 d-flex justify-content-center align-self-center">
                                <div class="tiles-color mb-3">
                                    <button type="button" class="btn btn-color fw-bold"><a href="./index.php">rejouer</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="p-1 tiles mt-3">
        <div class="container-fluid d-flex justify-content-center">
            <div class="row tiles-color">
                <div class="col-10 d-flex justify-content-center align-self-center fw-bold fs-5">
                    <span>&copy <a target=" _blank" href="https://github.com/ThomasGuillemont">Thomas Guillemont</a> -
                    <?= date("Y") ?></span>
                </div>
                <div class="col-2 d-flex justify-content-center align-self-center">
                    <img class="bird" src="./assets/img/bird.gif" alt="bird">
                </div>
            </div>
        </div>
    </footer>

    <!-- script js -->
    <script type="text/javascript" src="./assets/js/script.js"></script>
</body>

</html>