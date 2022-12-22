var owl = $(".owl-carousel");
owl.owlCarousel({
  items: 3,
  loop: true,
  margin: 10,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      nav: true,
    },
    600: {
      items: 1,
      nav: false,
    },
    1000: {
      items: 3,
      nav: true,
      loop: false,
    },
  },
});
$(".play").on("click", function () {
  owl.trigger("play.owl.autoplay", [1000]);
});
$(".stop").on("click", function () {
  owl.trigger("stop.owl.autoplay");
});


// asasasasasasasasasasasasasasasasasasas

function section() {
  var sections = document.querySelectorAll(".section");

  for (var i = 0; i < sections.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = sections[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      sections[i].classList.add("active");
    } else {
      sections[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", section);


// override google review secrion styles

const avatar = document.querySelector('.rplg-review-avatar');
avatar.style.width = '100%!important';
