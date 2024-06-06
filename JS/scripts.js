// navbar 

// const navbar = document.getElementsByTagName('nav')[0];
// window.addEventListener('scroll', function(){
//   console.log(window.scrollY);
//   if(window.scrollY > 1) {
//     navbar.classList.replace('bg-transparent', 'nav-color');
//   } else if (window.scrollY <= 0) {
//     navbar.classList.replace('nav-color', 'bg-transparent')
//   }

// });

// Get the first <nav> element on the page
const navbar = document.getElementsByTagName('nav')[0];

// Define the scroll event handler
function handleScroll() {
  if (window.scrollY > 1) {
    navbar.classList.replace('bg-transparent', 'nav-color');
  } else if (window.scrollY <= 0) {
    navbar.classList.replace('nav-color', 'bg-transparent');
  }
}

// Define a function to update the navbar background based on screen width
function updateNavbar() {
  if (window.innerWidth <= 576) {
    // When screen width is 576px or less, set navbar to 'nav-color' and remove scroll listener
    navbar.classList.add('nav-color');
    navbar.classList.remove('bg-transparent');
    window.removeEventListener('scroll', handleScroll);
  } else {
    // When screen width is greater than 576px, add scroll listener
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Apply the scroll handler logic immediately
  }
}

// Initial check
updateNavbar();

// Add a resize event listener to handle screen size changes
window.addEventListener('resize', updateNavbar);


// profil paslon

function showDetails(role) {
  let title, content;
  if (role === 'bupati') {
      title = "Dr. Ikram M Sangadji, M.Si";
      content = "Dr. Ikram M. Sangadji, M.Si saat ini menjabat sebagai PJ Bupati Kabupaten Halmahera Tengah";
  } else if (role === 'wakil') {
      title = "Ir. Arief Jalaludin, MT";
      content = "Ir. Arief Jalaludin, MT saat ini menjabat sebagai Kepala Dinas PUPR Kabupaten Halmahera Tengah";
  }

  document.getElementById('modalTitle').innerText = title;
  document.getElementById('modalBody').innerText = content;
  var profileModal = new bootstrap.Modal(document.getElementById('profileModal'));
  profileModal.show();
}



// Kebijakan



document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.myCard');
    const maxCardsToShow = 4; // Number of cards to show initially
    let hiddenCards = [];
  
    // Hide cards exceeding the maxCardsToShow limit
    cards.forEach((card, index) => {
      if (index >= maxCardsToShow) {
        card.classList.add('hidden');
        hiddenCards.push(card);
      }
    });
  
    // Show hidden cards when "Show More" button is clicked
    document.getElementById('showMoreButton').addEventListener('click', function() {
      hiddenCards.forEach(card => card.classList.remove('hidden'));
      hiddenCards = [];
      this.classList.add('hidden'); // Hide the "Show More" button after showing all cards
      document.getElementById('hideButton').classList.remove('hidden'); // Show the "Hide" button
    });
  
    // Hide extra cards when "Hide" button is clicked
    document.getElementById('hideButton').addEventListener('click', function() {
      cards.forEach((card, index) => {
        if (index >= maxCardsToShow) {
          card.classList.add('hidden');
          hiddenCards.push(card);
        }
      });
      this.classList.add('hidden'); // Hide the "Hide" button after hiding the extra cards
      document.getElementById('showMoreButton').classList.remove('hidden'); // Show the "Show More" button
    });
  });


  // berita

  document.addEventListener('DOMContentLoaded', function() {
    const cardContainer = document.getElementById('cardContainer');
    const btnArrowLeft = document.getElementById('btnArrowLeft');
    const btnArrowRight = document.getElementById('btnArrowRight');
    
    const cardWidth = cardContainer.querySelector('.card-gagasan').offsetWidth;
    const scrollStep = cardWidth + 16; // Adjust based on the width of your cards and margin

    btnArrowRight.addEventListener('click', function() {
      cardContainer.scrollBy({ 
        left: scrollStep, 
        behavior: 'smooth' 
      });
    });

    btnArrowLeft.addEventListener('click', function() {
      cardContainer.scrollBy({ 
        left: -scrollStep, 
        behavior: 'smooth' 
      });
    });
  });



  // kontak
  document.addEventListener('DOMContentLoaded', function() {
    const socialIcons = document.querySelectorAll('.social-icons a');

    socialIcons.forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            icon.classList.add('hovered');
        });
        
        icon.addEventListener('mouseleave', function() {
            icon.classList.remove('hovered');
        });
    });
});