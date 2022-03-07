// Owl carousel config OBJ //
const myOwlCar = {
  center: false,
  items: 1,
  loop: false,
  stagePadding: 0,
  margin: 20,
  smartSpeed: 1000,
  autoplay: false,
  nav: true,
  dots: false,
  pauseOnHover: false,
  responsive:{
      600:{
          margin: 20,
          nav: true,
        items: 2
      },
      1300:{
          margin: 20,
          stagePadding: 0,
          nav: true,
        items: 3
      },
      1400:{
          margin: 20,
          stagePadding: 0,
          nav: true,
        items: 4
      },
      1500:{
        margin: 20,
        stagePadding: 0,
        nav: true,
      items: 5
    }
  }
};
// constructor //
$(function() {

	if ( $('.owl-carousel').length > 0 ) {
        $('.owl-carousel').owlCarousel(myOwlCar);            
    }

})

// owl custom buttons //
var owl = $('.owl-carousel');
owl.owlCarousel(myOwlCar);

$('.customNextBtn').click(function() {
  owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.customPrevBtn').click(function() {
  // With optional speed parameter
  // Parameters has to be in square bracket '[]'
  owl.trigger('prev.owl.carousel', [300]);
})
/*
// // custom buttons  prev
const btnPrev = document.querySelectorAll('.owl-nav .owl-prev')[1]
const options = {
  attributes: true
}

function callback(mutationList, observer) {
  mutationList.forEach(function(mutation) {
    if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
      document.getElementById('drama-prev').classList.toggle('disabled')
    }
  })
}

const observer = new MutationObserver(callback)
observer.observe(btnPrev, options)
// custom buttons  next
*/