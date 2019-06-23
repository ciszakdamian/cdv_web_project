<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once("../inc/connector.php");

    $imageCounter = $_POST['imageCounter'];

    foreach(dbQuery("select image, alt, title, description from images i INNER JOIN pages p on i.id_page = p.id_page WHERE p.name = 'O firmie' and image_group = 'Gallery' and image_number = ".$imageCounter.";") as $row) {

        $image = array($row['image'], $row['alt'], $row['title'], $row['description']);
        echo json_encode($image);

    }





}