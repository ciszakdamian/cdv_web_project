<?php
require_once("inc/connector.php");

$page = $_SERVER['REQUEST_URI'];

//header



//menu
include_once("menu.php");


//main
if ($page == "/") {



    foreach(dbQuery("select * from articles a inner join categories c on a.id_category = c.id_category where c.name='O firmie';") as $row) {
       print($row['title']);
       echo $row['text'];
    }



    //echo "home";
} elseif ($page == "/oferta") {
    echo "oferta";
} elseif ($page == "/galeria") {
    echo "galeria";
} elseif ($page == "/kontakt") {
    echo "kontakt";
} else {
    http_response_code(404);
    echo "Error 404 - Page not found";
    echo "<br/> <a href='/'> Powrót do strony głównej";
}

//footer

include_once('footer.php');