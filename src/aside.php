<aside class="col-lg-4 col-sm-12 col-md-12">

    <div class="container-fluid">
        <div class="map-responsive">
            <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.9865499560905!2d16.84256594098267!3d52.392350035435456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x59734395532f3c31!2sBis-Car!5e0!3m2!1spl!2spl!4v1483485651346" allowfullscreen="allowfullscreen" width="600" height="450" frameborder="0">
            </iframe>
        </div>

    </div>
    <address class="text-center">
        <?php

        require_once("inc/connector.php");

        foreach(dbQuery("select value from settings where property='company_address';") as $row) {

            echo $row['value'];


        }
        ?>
    </address>
</aside>
</div>
