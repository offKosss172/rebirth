<?php
get_header();
?>

<main> 
	<section class="head-title" >
		<span  class="ganchor-link" id="headTitleSection"></span>
		<h1>Rebirth of the Nation</h1>
		<img src="/wp-content/themes/rebirth/assets/img/EoTUkraine.svg" alt="logo">
		<div>
			<p>Ukraine’s economic system with the <br> MUNICIPALITY 
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
			  <br><br><span>We are the only company rebuilding Ukraine from the ground up.</span> 
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

	<?php get_template_part('template-parts/who-we-are'); ?>
	<?php get_template_part('template-parts/our-team'); ?>
	<?php get_template_part('template-parts/ambassdors'); ?>

	<section class="our-partners">
		<h2> <b>Economy of Trust coalition</b> of international corporations and NGOs</h2>
		<div class="our-partners__contant">
			<div class="our-partners__card">
				<span class="our-partners__card-text"><p>Strategic partners</p></span>
			</div>
			<div class="our-partners__card">
				<span class="our-partners__card-text"><p>Industry partners</p></span>
			</div>
			<div class="our-partners__card">
				<span class="our-partners__card-text"><p>NGO’s</p></span>
			</div>
			<div class="our-partners__card">
				<span class="our-partners__card-text"><p>Service partners</p></span>
			</div>
		</div>
		<div class="our-partners__cart-link">
		
				<?php
					$args = array(
						'post_type'      => 'strategic_partners',
						'posts_per_page' => -1, 
						'orderby'        => 'menu_order',
						'order'          => 'ASC',
					);

					$query = new WP_Query($args);

					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();

							echo '<div class="cart-link-member">';
							echo '<div class="cart-link-photo">' . get_the_post_thumbnail() . '</div>';
							

							$footnotes = get_post_meta(get_the_ID(), 'footnotes', true);
							if (!empty($footnotes)) {
								echo '<a href="' . esc_url($footnotes) . '" target="_blank"></a>';
							}
							echo '</div>';
						}
						wp_reset_postdata();
					} else {
						echo 'No partner ';
					}
					?>


		</div>
	</section>
	<section class="what-we-do" >
		<span  class="ganchor-link" id="whatWeDo"></span>
		<h2> <b>what</b> we do</h2>
		<div class="what-we-do__contant-text">
		<p>At the heart of this historic project are Ukraine’s newly created economic unions. Our partnership has been hard at work persuading local leaders to band together to create synergies in the form of economic unions. Working together in groups the municipalities identify their own regional needs, resources, and opportunities. They provide standardized information in a systematic manner that will be appealing to foreign investors and grant providers alike. Thus far we have created 15 unions covering 63 municipalities representing close to 2 million people! This is a historic win-win for local governments and foreign investors. <br><br>
			EOTU, UMEDA, and the Mayors’ Club understand that the local leaders of Ukraine need to be prepared to work with international companies who will soon be entering their areas and creating jobs. We recognize the need to educate and certify the leaders of Ukraine at the local level. We are rolling out a series of rigorous courses designed and led by some of the world’s leading experts in topics ranging from anticorruption to finance. These local leaders can also avail themselves of our expert sessions designed to provide them with targeted information on a more regular schedule. The prestigious law firm of Hughes, Hubbard & Reed will be the first to present to the mayors on the topics of fraud and corruption. <b> This is all at no cost to the local leaders!</b></p>
		<p>Few understand that Ukraine committed to a decentralization process years before the war. Significant federal powers devolved to the local municipalities. Today local leaders have great authority and responsibility but no international voice. Our partnership is engaging a prominent Washington DC lobbying company to give voice to Ukraine’s localities in the US Congress and elsewhere. <br><br>
			We are also providing local businesses with a menu of services at very low monthly costs to them. UMEDA’s Business Development Office is providing its companies with access to the Mayors’ Club, international businesses, and the EOTU global network of experts in finance, law, technology, waste and recycling, construction, design, and more. As UMEDA Members and Participants these companies will utilize our digital platform to showcase their business to audiences all over the world. In the coming months we will be offering these companies services and expertise related to running and growing their business. Ukraine’s 1.8+ million businesses will benefit greatly from our joint efforts.</p>
		</div>
	</section>
	<section class="our-impact" >
		<span  class="ganchor-link" id="ourImpact"></span>
		<h2> <b>our </b> impact</h2>
		<div class="our-impact-contant">
			<div class="our-impact-card">
				<span></span>
				<p><b>I. Industrial Parks. </b><br> <br> We will facilitate deal flow into Ukraine's tax-advantaged industrial parks with companies specializing in packaging, water ozonation, modular housing, "Smart" light poles, and more. We are also identifying valuable land that can be purchased and used for future industrial parks in our blue ocean model. </p>
			</div>
			<div class="our-impact-card">
				<span></span>
				<p><b>II. Biomass. </b><br><br> With millions of hectares of land available, Ukraine is well-positioned to lead the Green Revolution as a top biomass producer in crops such as Miscanthus Giganteus (M.G.). EoTU is in talks with the owner of one of the most desirable strains, which will be a source of valuable carbon credits for years.  </p>
			</div>
			<div class="our-impact-card">
				<span></span>
				<p><b>III. Waste and Recycling.  </b><br><br> EoTU is partnering with Waste Ukraine Analytics, Ukraine's top waste analytics company, to address the country's massive waste and recycling problem. National priorities include eradicating Ukraine's thousands of landfills and creating a sustainable waste-to-recycling-purchase cycle. Our friendship with the U.S. Waste and Recycling Association will also prove invaluable in our efforts.   </p>
			</div>
			<div class="our-impact-card">
				<span></span>
				<p><b> IV. Industrial Real Estate and Equipment Finance. </b><br><br> EoTU has partnered with a project and structured finance expert to lead our funding efforts. All construction projects, from industrial parks to waste treatment facilities, will be financed through Special Purpose Vehicles (SPVs), which will provide investors with the stability of U.S. jurisdiction while minimizing the overall risk to stakeholders through a leased build-to-suit model.   </p>
			</div>
			<div class="our-impact-card">
				<span></span>
				<p><b>V. New Era Sports and Academics ("NESA"). </b><br><br> Our NESA centers will provide Ukrainian children, ignored to date, with a comfortable, welcoming, and community-centered environment for learning and recreation. This concept energizes municipal leaders. NESA is the brainchild of Henry Shterenberg, our founder, who built a thriving Massachusetts center 20 years ago.   </p>
			</div>
			
		</div>
	</section>
	<section class="get-involved" >
		<span  class="ganchor-link" id="getInvolved"></span>
		<h2> <b>get </b> involved</h2>
		<div class="get-involved__contant-text">
			<div class="contant-text__first-text"><p>EOTU Inc. is proud to present this handbook which will allow you as an Ambassador to understand the full nature of your position and to be better able to educate prospective partners about our company and our business model. <br><br>
				EOTU Inc. is connecting Ukraine with the world. We are uniquely positioned to drive Ukraine’s redevelopment to unprecedented heights. Key to our strategy is stimulating significant economic growth in Ukraine's industrial parks and regional economies over the next decade. We continue to gain momentum with our solid commercial partnerships, a clear business vision to invigorate revitalization, innovative financial vehicles, vetted stakeholders, and a network of expert specialists. We are only company dedicated to rebuilding Ukraine <b>from the ground up. </b> </p></div>
			<div class="contant-text__second-text">
				<h4>The Role of the Ambassador</h4>
				<div class="second-text__contant-text">
					<p>Consistent with the EOTU Ambassador agreement and our code of ethics, included herein as Appendix A, the role of the Ambassador is to promote the good work that EOTU is undertaking across the world to revitalize Ukraine. Your expertise and network contacts may prove immensely helpful to the people of Ukraine. Perhaps a company you know is thinking about expanding its operations into a cost-effective business environment such as Ukraine. Perhaps a personal contact is interested in one of our numerous verticals and wishes to support the people of Ukraine in this difficult time by providing investment dollars.  <br><br>
						Whatever the motivation, investors will benefit from our personalized approach to entering Ukraine. No sensible investor would enter Ukraine, a nation at war with a history of fraud and corruption, without doing their due diligence and ensuring that the partners they are working with have problem solved for these headaches. </p>
					<p>We are open to talking with any potential partner or investor about Ukraine's amazing opportunities and our one-of-a-kind business model that can get their company into Ukraine in an efficient manner. We know that our business model is working. This has been confirmed by numerous outside experts who themselves are looking for opportunities to invest in Ukraine. Our motto is, “Soon it will be too late to be early.” We truly believe that as the idea of doing business in Ukraine picks up speed every day. <br><br>
						We stand ready to help you carry out your position as an Ambassador. EOTU is dedicated to doing whatever we can to facilitate relationships with prospective global clients and partners. Let our hard work and unique business model help you and your contacts by providing a one stop shop for everything related to entering Ukraine. <br><br>
						<b> Please email Neil’s email: <a href="mailto: neilc@eotukraine.com">neilc@eotukraine.com</a></b></p>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();