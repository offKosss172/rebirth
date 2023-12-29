 <!-- ambassdors.php -->
<section class="our-global-ambassdors">
    <h2> <b>OUR</b> GLOBAL Ambassadors</h2>
    <div class="global-ambassdors__contant Our-global-ambassdors__cards-wrapper">
        <div class="Our-global-ambassdors__cards-slider" id="ambassdors-slider">
            <?php
            $args = array(
                'post_type'      => 'ambassdors',
                'posts_per_page' => -1, 
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    echo '<div class="team-member-amb">';
                    echo '<div class="team-member-photo">' . get_the_post_thumbnail() . '</div>';
                    echo '<h3>' . get_the_title() . '</h3>';

                    $footnotes = get_post_meta(get_the_ID(), 'footnotes', true);
                    if (!empty($footnotes)) {
                        echo '<a href="' . esc_url($footnotes) . '" target="_blank"></a>';
                    }
                    echo '</div>';
                }
                wp_reset_postdata();
            } else {
                echo 'No partner ambassdors.';
            }
            ?>
        </div>
        <div class="slider-nav">
            <button class="prev-slide-a">❮</button>
            <button class="next-slide-a">❯</button>
        </div>
        <div class="slider-pagination-amb">
            
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const sliderContainer = document.querySelector('.Our-global-ambassdors__cards-slider');
    const slides = document.querySelectorAll('.team-member-amb');
    const slideWidth = slides[0].offsetWidth + 19;
    const gap = 43;
    let currentSlide = 0;
    let paginationItems = [];
    let visibleSlides;

    document.addEventListener('DOMContentLoaded', function () {
        const prevButton = document.querySelector('.prev-slide-a');
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
        
    }

    function updateSlider() {
        const newPosition = -(currentSlide * (slideWidth + gap));
        sliderContainer.style.transform = `translateX(${newPosition}px)`;
    }

    function updateButtons() {
        const prevButton = document.querySelector('.prev-slide-a');
        const nextButton = document.querySelector('.next-slide-a');

        prevButton.disabled = currentSlide <= 0;
        nextButton.disabled = currentSlide >= slides.length - visibleSlides;
    }

    function updatePagination() {
        paginationItems.forEach((item, index) => {
            item.classList.toggle('active-slide', index === currentSlide);
        });
    }

    function initPagination() {
        const paginationContainer = document.querySelector('.slider-pagination-amb');

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
    

    document.querySelector('.prev-slide-a').addEventListener('click', function () {
        if (currentSlide > 0) {
            currentSlide--;
            updateSlider();
            updateButtons();
            updatePagination();
        }
    });

    document.querySelector('.next-slide-a').addEventListener('click', function () {
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
    updateButtons()
});

</script> 
</section>

