document.addEventListener('DOMContentLoaded', () => {
  function initTracker1 () {
    const track = document.querySelectorAll('.carousel-track')[0];
    const container = document.querySelectorAll('.carousel-container')[0]
    const images = Array.from(track.children);
    const prevButton = document.querySelectorAll('.carousel-btn.prev')[0];
    const nextButton = document.querySelectorAll('.carousel-btn.next')[0];
    const imageCount = images.length;
    function resetCarouselPosition() {
      track.style.transition = 'none'; // Disable transition
      track.style.transform = `translateX(-${1 * 100}%)`;
      for (let i = 0; i < imageCount - 1; i++) {
        track.removeChild(track.children[0])
      }
      setTimeout(() => {
        track.style.transition = 'transform 0.5s ease-in-out'; // Re-enable transition
        container.dataset.index = 1
      }, 50)
    }

    function updateCarousel(foward) {
      const currentIndex = container.dataset.index
      let newIndex = foward ? Number(currentIndex) + 1 : Number(currentIndex) - 1
      // If moving backward beyond the first image
      if (newIndex < 0) return
      if (newIndex === imageCount) {
        images.forEach(image => {
          const clonedChild = image.cloneNode(true);
          track.appendChild(clonedChild);
        });
        setTimeout(resetCarouselPosition, 500)
      }
      const sign = newIndex >= 0 ? '-' : ''
      track.style.transition = 'transform 0.5s ease-in-out';
      track.style.transform = `translateX(${sign}${Math.abs(newIndex) * 100}%)`;
      container.dataset.index = newIndex
    }

    nextButton.addEventListener('click', () => updateCarousel(true))

    prevButton.addEventListener('click', () => updateCarousel(false));
  }
  function initTracker2 () {
    const track = document.querySelectorAll('.carousel-track')[1];
    const container = document.querySelectorAll('.carousel-container')[1]
    const images = Array.from(track.children);
    const prevButton = document.querySelectorAll('.carousel-btn.prev')[1];
    const nextButton = document.querySelectorAll('.carousel-btn.next')[1];
    const imageCount = images.length;
    const imagesPerView = 4;
    function resetCarouselPosition() {
      track.style.transition = 'none'; // Disable transition
      track.style.transform = `translateX(-${1 * 100}%)`;
      for (let i = 0; i < imageCount - 1; i++) {
        track.removeChild(track.children[0])
      }
      setTimeout(() => {
        track.style.transition = 'transform 0.5s ease-in-out'; // Re-enable transition
        container.dataset.index = 1
      }, 50)
    }

    function updateCarousel(foward) {
      const currentIndex = container.dataset.index
      let newIndex = foward ? Number(currentIndex) + 1 : Number(currentIndex) - 1
      // If moving backward beyond the first image
      if (newIndex < 0) return
      if (newIndex >= imageCount / imagesPerView) {
        images.forEach(image => {
          const clonedChild = image.cloneNode(true);
          track.appendChild(clonedChild);
        });
        setTimeout(resetCarouselPosition, 500)
      }
      const sign = newIndex >= 0 ? '-' : ''
      track.style.transition = 'transform 0.5s ease-in-out';
      track.style.transform = `translateX(${sign}${Math.abs(newIndex) * (100)}%)`;
      container.dataset.index = newIndex
    }

    nextButton.addEventListener('click', () => updateCarousel(true))

    prevButton.addEventListener('click', () => updateCarousel(false));
  }
  initTracker1()
  const setTheme = theme => document.documentElement.className = theme;
  document.getElementById('menu-btn').addEventListener('click', ({ target }) => {
    target.classList.toggle('active')
    document.querySelector('.link-container').classList.toggle('active')
  })
  document.querySelectorAll('.picker-btn').forEach(btn => btn.addEventListener('click', ({ target }) => {
    document.querySelector('.picker-btn.active').classList.remove('active')
    target.classList.add('active')
    console.log(target)
    setTheme(target.dataset.value)
  }))
})