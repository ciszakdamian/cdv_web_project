<?php

//header
include_once("src/header.php");

//menu
include_once("src/menu.php");
?>

<main>
    <article class="text-justify">

<?php

//main
$page = $_SERVER['REQUEST_URI'];
require_once("inc/connector.php");

if ($page == "/") {

    foreach(dbQuery("select * from articles a inner join categories c on a.id_category = c.id_category where c.name='Strona główna';") as $row) {
       print($row['title']);
       echo $row['text'];
    }

    //echo "home";
} elseif ($page == "/o-nas") {

    foreach(dbQuery("select text from articles a inner join categories c on a.id_category = c.id_category where a.title='o firmie' and c.name='O firmie';") as $row) {
        echo $row['text'];
    }


    include_once("src/gallery.php");

} elseif ($page == "/oferta") {

    foreach(dbQuery("select text from articles a inner join categories c on a.id_category = c.id_category where a.title='oferta' and c.name='Oferta';") as $row) {
        echo $row['text'];
    }

} elseif ($page == "/kontakt") {

    foreach(dbQuery("select text from articles a inner join categories c on a.id_category = c.id_category where a.title='Formularz kontaktowy' and c.name='Kontakt';") as $row) {
        echo $row['text'];
    }

    foreach(dbQuery("select text from articles a inner join categories c on a.id_category = c.id_category where a.title='dane kontaktowe' and c.name='Kontakt';") as $row) {
        echo $row['text'];
    }


} else {
    http_response_code(404);
    echo "Error 404 - Page not found";
    echo "<br/> <a href='/'> Powrót do strony głównej";
}

?>

    </article>
</main>

<?php
//footer
include_once('src/footer.php');
