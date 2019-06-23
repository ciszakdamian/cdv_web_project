imageCounter = 1;
imageNumber = 4;

function postAjax(number) {
    $.ajax({
        type: "POST",
        url: 'post.php',
        data: {imageCounter: number },
        success: function(data){
            document.querySelector('#x').innerHTML = data;
        }
    });
}

function previousImage() {
    imageCounter--;
    if(imageCounter > 0) {

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

const previousButton = document.querySelector('#previousImage');
const nextButton = document.querySelector('#nextImage');

previousButton.addEventListener("click", previousImage);
nextButton.addEventListener("click", nextImage);