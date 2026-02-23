const swiper = new Swiper('.food-swiper', {
    slidesPerView: 1,
    centeredSlides: true,
    grabCursor: true,
    speed: 600,
    effect: 'creative',
    creativeEffect: {
    prev: {
        translate: ['-12%', 0, -100],
        scale: 0.95,
        opacity: 0.7,
    },
    next: {
        translate: ['12%', 0, -100],
        scale: 0.95,
        opacity: 0.7,
    },
    },
});

// PAGINATION SYNC
const tabs = document.querySelectorAll('.custom-tab');

function setActiveTab(index) {
    tabs.forEach(tab => tab.classList.remove('active'));
    tabs[index].classList.add('active');
}

// Swipe / scroll → pagination
swiper.on('slideChange', () => {
    setActiveTab(swiper.activeIndex);
});

// Click pagination → slide
tabs.forEach(tab => {
    tab.addEventListener('click', () => {
    const index = Number(tab.dataset.slide);
    swiper.slideTo(index);
    setActiveTab(index);
    });
});

// SCROLL CONTROL
const swiperEl = document.querySelector('.scroll-controlled');
let isAnimating = false;

swiperEl.addEventListener(
    'wheel',
    (event) => {
    event.preventDefault();
    if (isAnimating) return;
    isAnimating = true;

    if (event.deltaY > 0) {
        swiper.slideNext();
    } else {
        swiper.slidePrev();
    }

    setTimeout(() => {
        isAnimating = false;
    }, 650);
    },
    { passive: false }
);