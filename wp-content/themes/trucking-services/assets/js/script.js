// Scroll to Top
window.onscroll = function() {
  const trucking_services_button = document.querySelector('.scroll-top-btn');
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    trucking_services_button.style.display = "block";
  } else {
    trucking_services_button.style.display = "none";
  }
};

document.querySelector('.scroll-top-btn a').onclick = function(event) {
  event.preventDefault();
  window.scrollTo({top: 0, behavior: 'smooth'});
};

// Blog Slider
jQuery(document).ready(function() {
  jQuery('.testimonial-section .owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"], 
    dots: true,
    rtl: false,
    responsive: {
    0: { 
      items: 1 
    },
    992: { 
      items: 2 
    }
  },
  autoplay: true,
  });
});
