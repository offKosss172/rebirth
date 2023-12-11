<?php
/**
Template Name: Service Partners
**/


get_header();
?>
	<main >
		 
	<section class="strategic_partners__page">
		<div class="strategic_partners__contant">
			<h2> <b>service</b> partners</h2>
			<div class="strategic_partners__cards">
					<?php
				$args = array(
					'post_type' => 'service_partners',
					'posts_per_page' => -1,
					
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post();

						
						echo '<div class="strategic_partners-member">';
						echo '<div class="strategic_partners-member-photo">' . get_the_post_thumbnail() . '</div>';
						echo '<h3>' . get_the_title() . '</h3>';
						echo '<p>' . get_the_excerpt() . '</p>'; 
						
						$footnotes = get_post_meta(get_the_ID(), 'footnotes', true);
						if (!empty($footnotes)) {
							echo '<p>Ссылка: <a href="' . esc_url($footnotes) . '">Перейти</a></p>';
						}
						echo '</div>';
					}

					wp_reset_postdata();
				} else {
					echo 'No partner information.';
				}
				?>
			</div>
		</div>
	</section>


	</main>
<?php
get_footer();