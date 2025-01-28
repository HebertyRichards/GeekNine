function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

function verificarLargura() {
  const section = document.getElementById('menu-container2');

  if (window.innerWidth > 800) {
    section.style.display = 'none'; 
  } else {
    section.style.display = 'block'; 
  }
}

verificarLargura();

window.addEventListener('resize', verificarLargura);

function verificarLargura2() {
  const section2 = document.getElementById('menu-container');
      if (window.innerWidth < 800 ) {
    section2.style.display = 'none'; 
  } else {
    section2.style.display = 'block'; 
  }
}

verificarLargura2();

window.addEventListener('resize', verificarLargura2);

$(document).ready(function(){
  $('.filme-carousel').slick({
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
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
      breakpoint: 500, 
      settings: {
        slidesToShow: 2, 
        slidesToScroll: 1,
      }
    }
    ]
  });
});
