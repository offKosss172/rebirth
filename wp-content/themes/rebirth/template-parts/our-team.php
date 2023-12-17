<!-- our-team.php -->

<section class="Our-team">
    <div class="Our-team__contant">
        <h2><b>OUR</b> TEAM</h2>
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
                            echo '<a href="' . esc_url($footnotes) . '"></a>';
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
                <button class="prev-slide" onclick="changeSlide(-1)">❮</button>
                <button class="next-slide" onclick="changeSlide(1)">❯</button>
            </div>
        </div>
    </div>


	




    <script>
    let currentTeamSlide = 0;
    const teamSlider = document.querySelector('.Our-team__cards-slider');
    const teamSlides = document.querySelectorAll('.team-member');
    const teamSlideWidth = teamSlides[0].offsetWidth + 19; 
    const maxTeamSlides = teamSlides.length;

    function changeTeamSlide(direction) {
        const newSlide = currentTeamSlide + direction;
        if (newSlide >= 0 && newSlide < maxTeamSlides) {
            currentTeamSlide = newSlide;
            teamSlider.style.transform = `translateX(${-currentTeamSlide * (teamSlideWidth + 45)}px)`;
        }

        updateTeamButtons();
    }

    function updateTeamButtons() {
        const prevTeamButton = document.querySelector('.prev-slide');
        const nextTeamButton = document.querySelector('.next-slide');

        prevTeamButton.disabled = currentTeamSlide === 0;
        nextTeamButton.disabled = currentTeamSlide + 1 >= maxTeamSlides - 2;
    }


    document.querySelector('.prev-slide').addEventListener('click', function () {
        changeTeamSlide(-1);
    });

    document.querySelector('.next-slide').addEventListener('click', function () {
        changeTeamSlide(1);
    });
</script>

</section>