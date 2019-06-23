<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div id="gallery">

    <div class="text-center" id="galleryTitle">Tytuł obrazek 1</div>

    <img class="img-fluid" id="galleryImage" src="images/1.jpg" alt="Jakiś tam obrazek" title="jakis tytul">

    <div class="text-center" id="galleryDescription">Opis obrazek 1</div>




<?php
require_once("inc/connector.php");

/*
$encoded_data = base64_encode(file_get_contents('test.jpg'));
echo($encoded_data);
echo "<img src='data:image/gif;base64," . $encoded_data . "' />";
*/

foreach(dbQuery("select image, title, description from images i inner join categories c on i.id_category = c.id_category where c.name = 'Oferta';") as $row) {

    echo "<img class='img-fluid' src='data:image/jpg;base64," . $row['image'] . "' /><br/>";
    //echo $row['title']."</br>";
    //echo $row['description'];



}
?>
    <div class="text-center">

        <button id="previousImage"><--</button>
        <button id="nextImage">--></button>

        <script type="text/javascript" src="../js/gallery.js"></script>

    </div>

</div>
