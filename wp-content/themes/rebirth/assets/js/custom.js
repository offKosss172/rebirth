
document.addEventListener('DOMContentLoaded', function () {
    const sliderContainer = document.querySelector('.Our-team__cards-slider');
    const slides = document.querySelectorAll('.team-member');
    const slideWidth = slides[0].offsetWidth + 19;
    const gap = 43;
    let currentSlide = 0;
    let paginationItems = [];
    let visibleSlides;

    document.addEventListener('DOMContentLoaded', function () {
        const prevButton = document.querySelector('.prev-slide');
        prevButton.disabled = true;
    });

    function updateVisibleSlides() {
        const screenWidth = window.innerWidth;

        if (screenWidth >= 1280) {
            visibleSlides = 4;
        } else if (screenWidth >= 770 && screenWidth < 1280) {
            visibleSlides = 3;
        } else {
            visibleSlides = 1;
        }
        console.log(visibleSlides);
    }

    function updateSlider() {
        const newPosition = -(currentSlide * (slideWidth + gap));
        sliderContainer.style.transform = `translateX(${newPosition}px)`;
    }

    function updateButtons() {
        const prevButton = document.querySelector('.prev-slide');
        const nextButton = document.querySelector('.next-slide');
    
        prevButton.disabled = currentSlide <= 0;
        nextButton.disabled = currentSlide >= slides.length - visibleSlides;
    } 
    

    function updatePagination() {
        paginationItems.forEach((item, index) => {
            item.classList.toggle('active-slide', index === currentSlide);
        });
    }

    function initPagination() {
        const paginationContainer = document.querySelector('.slider-pagination-team');

        paginationContainer.innerHTML = '';

        for (let i = 0; i < slides.length - visibleSlides + 1; i++) {
            const paginationItem = document.createElement('span');
            paginationItem.className = 'pagination-item';
            paginationItem.addEventListener('click', function () {
                currentSlide = i;
                updateSlider();
                updatePagination();
                updateButtons();
            });
            paginationContainer.appendChild(paginationItem);
            paginationItems.push(paginationItem);
        }

        updatePagination();
    }

    function handleScroll() {
        updatePagination();
    }

    document.querySelector('.prev-slide').addEventListener('click', function () {
        if (currentSlide > 0) {
            currentSlide--;
            updateSlider();
            updateButtons();
            updatePagination();
        }
    });
    
    document.querySelector('.next-slide').addEventListener('click', function () {
        if (currentSlide < slides.length - visibleSlides) {
            currentSlide++;
            updateSlider();
            updateButtons();
            updatePagination();
        }
    });

    window.addEventListener('scroll', handleScroll);

    updateVisibleSlides();
    initPagination();
    updateButtons();


});



document.addEventListener('DOMContentLoaded', function () {
    checkScreenWidth();

    window.addEventListener('resize', checkScreenWidth);

    function checkScreenWidth() {
       
        const screenWidth = window.innerWidth;
        const thresholdWidth = 1019;
        const menuElement = document.querySelector('.core-blog-main-navigation .primary-menu-list');

        if (screenWidth < thresholdWidth) {

            const menuItems = document.querySelectorAll('.header__menu-general li');

            menuItems.forEach(function (item) {
                item.addEventListener('click', function () {
                    menuElement.style.display = 'none';
                });
            });
        } else {
            const menuItems = document.querySelectorAll('.header__menu-general li');
            menuItems.forEach(function (item) {
                item.removeEventListener('click', function () {
                });
            });
        }
    }
});

  


