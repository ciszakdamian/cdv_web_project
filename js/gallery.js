imageCounter = 1;
imageNumber = 4;

function postAjax(number) {
    $.ajax({
        type: "POST",
        url: '../src/postGallery.php',
        data: {imageCounter: number },
        dataType: 'json',
        success: function(data){
            document.querySelector('#galleryImage').src = "data:image/jpg;base64,"+data[0]+"";
            document.querySelector('#galleryImage').alt = data[1];
            document.querySelector('#galleryTitle').innerHTML = data[2];
            document.querySelector('#galleryDescription').innerHTML = data[3];

        }
    });
}

function previousImage() {
    imageCounter--;
    if(imageCounter > 0) {

        //document.querySelector('#galleryImage').src = "images/" +imageCounter+ ".jpg";

        postAjax(imageCounter);

    } else {
        imageCounter++;
    }
}

function nextImage() {
    imageCounter++;
    if (imageCounter <= imageNumber) {

        postAjax(imageCounter);

    } else {
        imageCounter--;
    }
}


postAjax(imageCounter);

const previousButton = document.querySelector('#previousImage');
const nextButton = document.querySelector('#nextImage');

previousButton.addEventListener("click", previousImage);
nextButton.addEventListener("click", nextImage);




