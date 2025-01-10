const modal = document.getElementById("myModal");
const modalImg = document.getElementById("modalImage");
const captionText = document.getElementById("caption");
let currentSlideIndex;

const thumbnails = document.getElementsByClassName("thumbnail");
for (let i = 0; i < thumbnails.length; i++) {
    thumbnails[i].onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
        currentSlideIndex = i;
    }
}

const span = document.getElementsByClassName("close")[0];
span.onclick = function() {
    modal.style.display = "none";
}

function changeSlide(n) {
    currentSlideIndex += n;
    if (currentSlideIndex >= thumbnails.length) {
        currentSlideIndex = 0;
    } else if (currentSlideIndex < 0) {
        currentSlideIndex = thumbnails.length - 1;
    }
    modalImg.src = thumbnails[currentSlideIndex].src;
    captionText.innerHTML = thumbnails[currentSlideIndex].alt;
}
