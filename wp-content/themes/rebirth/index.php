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

	<?php get_template_part('template-parts/world-projects'); ?>

	<section class="implementation-projects">
		<span class="implementation-projects__contant">
			<h4>We are the only organization with the capabilities to meet stringent standards demanded by the international community for governance and transparency with the ability to implement projects in Ukraine at scale.</h4>
		</span>
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
		<span class="development-regions__contant">
			<h4>Region by region, we are identifying profitable opportunities, channeling foreign investment, and preparing local leaders to participate in Ukraine’s future development.
			  <span>We are the only company rebuilding Ukraine from the ground up.</span> 
			</h4>
		</span>
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

	<?php get_template_part('template-parts/our-team'); ?>

	<?php get_template_part('template-parts/ambassdors'); ?>

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