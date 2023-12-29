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
 
</section>