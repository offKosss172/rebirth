<?php
get_header();
?>

<main> 
	<section class="head-title">
		<h1>Rebirth of the Nation</h1>
		<div>
			<p>Ukraine’s economic system with the MUNICIPALITY <br>
				at its center <br>
				& <br>
				LOCAL BUSINESS driving economic growth</p>
		</div>
	</section>

	<section class="world-projects">
		<div class="world-projects__contant">
			
		</div>
	</section>

	<section class="implementation-projects">
		<div class="implementation-projects__contant">

		</div>
	</section>

	<section class="economic-map">
		<div class="economic-map__contant">
			<div class="economic-map__left-link"> links1 </div>
			<div class="economic-map__map-block">map</div>
			<div class="economic-map__right-link">links2</div>
		</div>
	</section>

	<section class="development-regions">
		<div class="development-regions__contant">

		</div>
	</section>

	<section class="economic-unions">
		<div class="economic-unions__contant">
			<div class="economic-unions__card">
				<span class="economic-unions__card-foto"></span>
				<span class="economic-unions__card-text"><p>Industries of <br> Economic Unions</p></span>
			</div>
			<div class="economic-unions__card">
				<span class="economic-unions__card-foto"></span>
				<span class="economic-unions__card-text"><p>Projects of <br> Economic Unions</p></span>
			</div>
			<div class="economic-unions__card">
				<span class="economic-unions__card-foto"></span>
				<span class="economic-unions__card-text"><p>Partners of the <br> Economic Unions</p></span>
			</div>
			<div class="economic-unions__card">
				<span class="economic-unions__card-foto"></span>
				<span class="economic-unions__card-text"><p>Natural Resources <br> of Economic Unions</p></span>
			</div>
		</div>
	</section>

	<section class="Our-team">
		<div class="Our-team__contant">
			<h2> <b>OUR</b> TEAM</h2>
			<div class="Our-team__cards">
					<?php
				$args = array(
					'post_type' => 'our_team',
					'posts_per_page' => -1,
					'orderby' => 'menu_order',
					'order' => 'ASC',
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
							echo '<p>Ссылка: <a href="' . esc_url($footnotes) . '">Перейти</a></p>';
						}
						echo '</div>';
					}

					wp_reset_postdata();
				} else {
					echo 'Нет данных о команде.';
				}
				?>
			</div>
		</div>
	</section>
	<section class="our-global-ambassdors">
		<h2> <b>OUR</b> GLOBAL AMBASSDORS</h2>
		<div class="global-ambassdors__contant Our-team__cards">
					<?php
				$args = array(
					'post_type' => 'ambassdors',
					'posts_per_page' => -1,
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post();

						echo '<div class="team-member">';
						echo '<div class="team-member-photo">' . get_the_post_thumbnail() . '</div>';
						echo '<p>' . get_the_excerpt() . '</p>'; 
						
						$footnotes = get_post_meta(get_the_ID(), 'footnotes', true);
						if (!empty($footnotes)) {
							echo '<p>Ссылка: <a href="' . esc_url($footnotes) . '">Перейти</a></p>';
						}
						echo '</div>';
					}

					wp_reset_postdata();
				} else {
					echo 'No partner ambassdors.';
				}
				?>
			</div>

	</section>

	<section class="our-partners">
		<h2> <b>OUR</b> PARTNERS</h2>
		<div class="our-partners__contant">
			<div class="our-partners__card">
				<span class="our-partners__card-foto"></span>
				<span class="our-partners__card-text"><p>Strategic partners</p></span>
				<a href="/strategic_partners"></a>
			</div>
			<div class="our-partners__card">
				<span class="our-partners__card-foto"></span>
				<span class="our-partners__card-text"><p>Industry partners</p></span>
				<a href="/industryc_partners"></a>
			</div>
			<div class="our-partners__card">
				<span class="our-partners__card-foto"></span>
				<span class="our-partners__card-text"><p>NGO’s</p></span>
				<a href="#"></a>
			</div>
			<div class="our-partners__card">
				<span class="our-partners__card-foto"></span>
				<span class="our-partners__card-text"><p>Service partners</p></span>
				<a href="#"></a>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();