function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

function verificarLargura() {
  const section = document.getElementById("menu-container2");

  if (window.innerWidth > 800) {
    section.style.display = "none";
  } else {
    section.style.display = "block";
  }
}

verificarLargura();

window.addEventListener("resize", verificarLargura);

function verificarLargura2() {
  const section2 = document.getElementById("menu-container");
  if (window.innerWidth < 800) {
    section2.style.display = "none";
  } else {
    section2.style.display = "block";
  }
}

verificarLargura2();

window.addEventListener("resize", verificarLargura2);

$(document).ready(function () {
  $(".filme-carousel").slick({
    dots: false,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });
});

document.addEventListener("DOMContentLoaded", function () {
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    var slides = document.getElementsByClassName("slide");
    var dots = document.getElementsByClassName("dot");
    for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    for (var i = 0; i < dots.length; i++) {
      dots[i].classList.remove("active");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].classList.add("active");
    setTimeout(showSlides, 5000);
  }
});