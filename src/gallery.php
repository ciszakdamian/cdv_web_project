<?php
require_once("inc/connector.php");

/*
$encoded_data = base64_encode(file_get_contents('test.jpg'));
echo($encoded_data);
echo "<img src='data:image/gif;base64," . $encoded_data . "' />";
*/

foreach(dbQuery("select image, title, description from images i inner join categories c on i.id_category = c.id_category where c.name = 'Oferta';") as $row) {

    echo "<img class='img-fluid' src='data:image/jpg;base64," . $row['image'] . "' /><br/>";
    echo $row['title']."</br>";
    echo $row['description'];



}