imageCounter = 1;
imageNumber = 4;

function previousImage() {
    imageCounter--;
    if(imageCounter > 0) {
        document.querySelector('#galleryImage').src = "images/" +imageCounter+ ".jpg";
    } else {
        imageCounter++;
    }
}

function nextImage() {
    imageCounter++;
    if (imageCounter <= imageNumber) {
        document.querySelector('#galleryImage').src = "images/" +imageCounter+ ".jpg";
    } else {
        imageCounter--;
    }
}

const previousButton = document.querySelector('#previousImage');
const nextButton = document.querySelector('#nextImage');

previousButton.addEventListener("click", previousImage);
nextButton.addEventListener("click", nextImage);




