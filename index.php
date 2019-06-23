<?php

//header
include_once("src/header.php");

//menu
include_once("src/nav.php");
?>
    <div class="row margin-zero">
    <main class="col-lg-8 col-sm-12">
        <article>

<?php

//main
$page = $_SERVER['REQUEST_URI'];
require_once("inc/connector.php");

if ($page == "/") {

    foreach(dbQuery("select * from articles a inner join pages p on a.id_page = p.id_page where p.name='Strona główna';") as $row) {
       print($row['title']);
       echo $row['text'];
    }

    //echo "home";
} elseif ($page == "/o-nas") {

    foreach(dbQuery("select * from articles a inner join pages p on a.id_page = p.id_page where p.name='o firmie' and p.name='O firmie';") as $row) {
        echo $row['text'];
    }


    include_once("src/gallery.php");

} elseif ($page == "/oferta") {

    foreach(dbQuery("select text from articles a inner join pages p on a.id_page = p.id_page where a.title='oferta' and p.name='Oferta'") as $row) {
        echo $row['text'];
    }

} elseif ($page == "/kontakt") {

    foreach(dbQuery("select text from articles a inner join pages p on a.id_page = p.id_page where a.title='Formularz kontaktowy' and p.name='kontakt'") as $row) {
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

include_once('src/aside.php');

include_once('src/footer.php');
