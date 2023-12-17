<!-- ambassdors.php -->

<section class="our-global-ambassdors">
    <h2> <b>OUR</b> GLOBAL AMBASSDORS</h2>
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

                    echo '<div class="team-member">';
                    echo '<div class="team-member-photo">' . get_the_post_thumbnail() . '</div>';
                    echo '<h3>' . get_the_title() . '</h3>';

                    $footnotes = get_post_meta(get_the_ID(), 'footnotes', true);
                    if (!empty($footnotes)) {
                        echo '<a href="' . esc_url($footnotes) . '"></a>';
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
        <button class="prev-slide-a" onclick="changeAmbassdorsSlide(-1)">❮</button>
<button class="next-slide-a" onclick="changeAmbassdorsSlide(1)">❯</button>

        </div>
    </div>

    <script>
        let currentAmbassdorsSlide = 0;
        const ambassdorsSlider = document.querySelector('.Our-global-ambassdors__cards-slider');
        const ambassdorsSlides = document.querySelectorAll('.team-member');
        const ambassdorsSlideWidth = ambassdorsSlides[0].offsetWidth + 19;
        const maxAmbassdorsSlides = ambassdorsSlides.length;
        const visibleAmbassdorsSlides = 1;

        function changeAmbassdorsSlide(direction) {
            const newSlide = currentAmbassdorsSlide + direction;

            if (newSlide >= 0 && newSlide <= maxAmbassdorsSlides - visibleAmbassdorsSlides) {
                currentAmbassdorsSlide = newSlide;
            } else if (newSlide < 0) {
                currentAmbassdorsSlide = 0;
            } else {
                currentAmbassdorsSlide = maxAmbassdorsSlides - visibleAmbassdorsSlides;
            }

            const newPosition = -currentAmbassdorsSlide/2 * (ambassdorsSlideWidth + 45);
            ambassdorsSlider.style.transform = `translateX(${newPosition}px)`;

            updateAmbassdorsButtons();
        }

        function updateAmbassdorsButtons() {
            const prevAmbassdorsButton = document.querySelector('.prev-slide-a');
            const nextAmbassdorsButton = document.querySelector('.next-slide-a');

            prevAmbassdorsButton.disabled = currentAmbassdorsSlide === 0;
            nextAmbassdorsButton.disabled = currentAmbassdorsSlide >= maxAmbassdorsSlides - visibleAmbassdorsSlides -3;
        }

        document.querySelector('.prev-slide-a').addEventListener('click', function () {
            changeAmbassdorsSlide(-1);
        });

        document.querySelector('.next-slide-a').addEventListener('click', function () {
            changeAmbassdorsSlide(1);
        });

        updateAmbassdorsButtons();

    </script>

</section>

<style>
    .our-global-ambassdors{
        position: relative;
    }
    .Our-global-ambassdors__cards-wrapper {
        overflow: hidden;
    }

    .Our-global-ambassdors__cards-slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
        gap: 44px;
    }

    .team-member {
        width: 272px;
        height: 491px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-right: 20px;
        transition: transform 0.5s ease-in-out;
    }

    .slider-nav {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

.prev-slide-a,
.next-slide-a {
	position: absolute;
	color: #012C65;
    padding-left: 20px;
    padding-right: 20px;
    font-size: -webkit-xxx-large;  

}
.next-slide-a{
	top: 210px;
    right: -80px;
}
.prev-slide-a{
	top: 210px;
    left: -70px;
}

</style>

