<script>
//         const navLinks = document.querySelector('.nav-links')
//         function onToggleMenu(e){
//   e.name = e.name === 'menu' ? 'close' : 'menu';
//   navLinks.classList.toggle('top-[5%]');
//   navLinks.classList.toggle('top-[-100%]');
// }

function onToggleMenu(icon) {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
  }
        
const carousel = document.getElementById("carousel");
  const prevButton = document.getElementById("prev");
  const nextButton = document.getElementById("next");

  let currentIndex = 0;
  const slides = carousel.children;
  const totalSlides = slides.length;

  function updateCarousel() {
    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  function goToNext() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateCarousel();
  }

  function goToPrev() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
  }

  nextButton.addEventListener("click", goToNext);
  prevButton.addEventListener("click", goToPrev);

  // Auto-slide every 3s
  setInterval(goToNext, 3000);
    </script>
  </body>
</html>