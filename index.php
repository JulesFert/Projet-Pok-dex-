<?php 

if (!(isset($_GET['page']))) {
    include 'views/header.php';
    include 'views/home.php';
    include 'views/footer.php';
} else {

    if ($_GET['page'] === "pokemons") {
        include 'views/header.php';
        include 'views/pokemons.php';
        include 'views/footer.php';
    }
    if ($_GET['page'] === "types") {
        include 'views/header.php';
        include 'views/types.php';
        include 'views/footer.php';
    }
    if ($_GET['page'] === "credits") {
        include 'views/header.php';
        include 'views/credits.php';
        include 'views/footer.php';
    }
    if ($_GET['page'] === "options") {
        include 'views/header.php';
        include 'views/options.php';
        include 'views/footer.php';
    }
}

   

