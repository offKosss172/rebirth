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
			<div class="contant-big-block">
				<div class="contant-general-block">
					<span> <i>STRONG</i> <b>MUNICIPALITIES<br> -</b> <br> <i>STRONG</i>  <b>UKRAINE</b> </span>
					<span><img src="/wp-content/themes/rebirth/assets/img/economicmap/image2.svg" alt="logo"><p>Economy of Trust <br> Ukraine Inc.</p></span>
					<span><img src="/wp-content/themes/rebirth/assets/img/economicmap/image6.svg" alt="logo"></span>
					<span><img src="/wp-content/themes/rebirth/assets/img/economicmap/image3.svg" alt="logo"><img src="/wp-content/themes/rebirth/assets/img/economicmap/mayors1.png" alt="logo"></span>
				</div>
				<div class="contant-world-wide-block"> <p>world-wide <br> partners</p>
					<div class="world-wide-container">
						<span>strategic</span>
						<span>NGO's</span>
						<span>industry <br> specific</span>
						<span>service <br> specific</span>
					</div>
				</div>
				<div class="contant-everyone-block" ><span></span></div>
				<div class="contant-ambassadors-block" ><p>showroom global <br> ambassadors</p></div>
				<div class="contant-associations-block" ><p>BUSINESS TRADE &<br> associations</p></div>
				<div class="contant-world-trade-block">
					<span>
					<img src="/wp-content/themes/rebirth/assets/img/economicmap/trcentre1.png" alt="logo">
					<img src="/wp-content/themes/rebirth/assets/img/economicmap/trcentre2.png" alt="logo">
					<img src="/wp-content/themes/rebirth/assets/img/economicmap/trcentre3.svg" alt="logo">
					</span>
					<div class="world-trade-container">
						<span><p>319 cities in <br> 91 countries</p></span>
						<span><img src="/wp-content/themes/rebirth/assets/img/economicmap/vtca.png" alt="logo"></span>
					</div>
				</div>
				<div class="contant-mayorsclub-block" ><span><img src="/wp-content/themes/rebirth/assets/img/economicmap/image3.svg" alt="logo"><img src="/wp-content/themes/rebirth/assets/img/economicmap/mayors1.png" alt="logo"></span></div>
				<div class="world-municipal-economic-container">
					<span><img src="/wp-content/themes/rebirth/assets/img/economicmap/image6.svg" alt="logo"></span>
					<span><p>UKRAINE MUNICIPAL <br> ECONOMIC <br> development <br> AGENCY</p></span>
				</div>
				<div class="contant-businessdev-block" ><p>BUSINESS <br> DEVELOPMENT <br>OFFICE of economic <br>unions</p></div>
				<div class="contant-regionaldev-block" ><p>regional <br> DEVELOPMENT <br> economic agencies <br>of ukraine</p></div>
				<div class="contant-economicunions-block" ><p>economic unions <br> project  <br>development <br> oficce</p></div>
			</div>
		</div>
	</section>

	<section class="implementation-projects">
		<div class="implementation-projects__contant">

		</div>
	</section>

	<section class="economic-map">
		<div class="economic-map__contant">
			<div class="economic-map__left-link"> 
				<ul>
					<a>Economic Unions</a>
					<a>Members of Economic Unions</a>
					<a>“Showroom” of Projects</a>
					<a>“Showroom” of Business</a>
					<a>“Showroom” of Start-Ups</a>
					<a>“Showroom” of Mayors</a>
					<a>“Showroom” Global Ambassadors</a>
				</ul>
			</div>
			<div class="economic-map__map-block">
				<span class="economic-map__map-cusr"></span>
				<span class="economic-map__map-text"> <h4>Economic Unions <br> of Ukraine</h4> </span>
			</div>
			<div class="economic-map__right-link">
				<ul>
					<a>Industrial Parks</a>
					<a>Grants Central</a>
					<a>Education & Professional Certification</a>
					<a>MarketPlace for Businesses</a>
					<a>Member’s Directory of BDO</a>
					<a>Members Services</a>
					<a>Event’s Schedule</a>
				</ul>
			</div>
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
				<a href="/ngo_s"></a>
			</div>
			<div class="our-partners__card">
				<span class="our-partners__card-foto"></span>
				<span class="our-partners__card-text"><p>Service partners</p></span>
				<a href="/service_partners"></a>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();