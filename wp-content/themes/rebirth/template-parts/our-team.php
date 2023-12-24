<!-- our-team.php -->
<section class="Our-team">
    <div class="Our-team__contant">
        <h2><b>OUR</b> TEAM LEADERS</h2>
        <div class="Our-team__cards-wrapper">
            <div class="Our-team__cards-slider" id="team-slider">
                <?php
                $args = array(
                    'post_type'      => 'our_team',
                    'posts_per_page' => -1, 
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();

                        echo '<div class="team-member">';
                        echo '<div class="team-member-photo">' . get_the_post_thumbnail() . '</div>';
                        echo '<h3>' . get_the_title() . '</h3>';
                        echo '<p>' . get_the_excerpt() . '</p>';

                        $footnotes = get_post_meta(get_the_ID(), 'footnotes', true);
                        if (!empty($footnotes)) {
                            echo '<a href="' . esc_url($footnotes) . '" target="_blank"></a>';
                        }
                        echo '</div>';
                    }
                    wp_reset_postdata();
                } else {
                    echo 'Нет данных о команде.';
                }
                ?>
            </div>
            <div class="slider-nav">
                <button class="prev-slide">❮</button>
                <button class="next-slide">❯</button>
            </div>
            <div class="slider-pagination-team">
        </div>
    </div>

    <script>
 document.addEventListener('DOMContentLoaded', function () {
            const sliderContainer = document.querySelector('.Our-team__cards-slider');
            const slides = document.querySelectorAll('.team-member');
            const slideWidth = slides[0].offsetWidth + 19;
            const gap = 43; // Расстояние между карточками
            let visibleSlides;

            function updateVisibleSlides() {
                // Получаем ширину экрана
                const screenWidth = window.innerWidth;

                // Устанавливаем значение visibleSlides в зависимости от ширины экрана
                if (screenWidth >= 1280) {
                    visibleSlides = 4;
                } else if (screenWidth <= 500) {
                    visibleSlides = 1;
                } else {
                    visibleSlides = 3;
                }
            }

            // Вызываем функцию для установки значения visibleSlides при загрузке страницы
            updateVisibleSlides();

            let currentSlide = 0;
            let paginationItems = []; // Добавлен массив для хранения элементов пагинации

            function updateSlider() {
                const newPosition = -(currentSlide * (slideWidth + gap));
                sliderContainer.style.transform = `translateX(${newPosition}px)`;
            }

            function updateButtons() {
                const prevButton = document.querySelector('.prev-slide');
                const nextButton = document.querySelector('.next-slide');

                // Отключаем кнопку Назад, если достигнут начало
                prevButton.disabled = currentSlide === 0;

                // Отключаем кнопку Вперед, если превышено максимальное количество кликов
                nextButton.disabled = currentSlide >= slides.length - visibleSlides;

                // Отключаем кнопку Вперед, если превышено максимальное количество кликов вправо
                nextButton.disabled = currentSlide >= slides.length - visibleSlides;

                // Отключаем кнопку Назад, если превышено максимальное количество кликов влево
                prevButton.disabled = currentSlide <= 0;
            }

            function updatePagination() {
                paginationItems.forEach((item, index) => {
                    item.classList.toggle('active-slide', index === currentSlide);
                });
            }

            function initPagination() {
                const paginationContainer = document.querySelector('.slider-pagination-team');

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

            function updateOnResize() {
                // Обновляем значение visibleSlides при изменении размера окна
                updateVisibleSlides();

                // Пересчитываем слайды и обновляем кнопки
                updateSlider();
                updateButtons();
                initPagination();
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

            // Добавляем слушатель события изменения размера окна
            window.addEventListener('resize', updateOnResize);

            // Вызываем функции после определения currentSlide
            updateButtons();
            initPagination();
        });

    </script>

</section>