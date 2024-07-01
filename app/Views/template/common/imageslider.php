<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Image Slider</title>
<style>
.slider {
    width: 100%;
    position: relative;
    overflow: hidden;
}

.slides {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slide {
    width: 100%;
    flex: 0 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
}

.controls {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
}

.control-left, .control-right {
    background: rgba(0, 0, 0, 0.5);
    color: white;
    padding: 10px;
    cursor: pointer;
}

.slide-image {
    border-radius: 10px;
    margin: 20px;
    width: 50%;
}

</style>
</head>
<body>
<div class="slider">
    <div class="slides">
        <div class="slide"><img class="slide-image" src="assets/images/Bentoga Final.png" alt="Slide 1"></div>
        <div class="slide"><img class="slide-image" src="assets/images/Bentoga Final.png" alt="Slide 1"></div>
        <div class="slide"><img class="slide-image" src="assets/images/Bentoga Final.png" alt="Slide 1"></div>
    </div>
    <div class="controls">
        <span class="control-left" onclick="prevSlide()">&#10094;</span>
        <span class="control-right" onclick="nextSlide()">&#10095;</span>
    </div>
</div>

<script>
let slideIndex = 0;
showSlides(slideIndex);

function nextSlide() {
    slideIndex++;
    showSlides(slideIndex);
}

function prevSlide() {
    slideIndex--;
    showSlides(slideIndex);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    if (n >= slides.length) {
        slideIndex = 0;
    } else if (n < 0) {
        slideIndex = slides.length - 1;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "flex";
}
</script>
</body>
</html>