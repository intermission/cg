<?php include('header.php') ?>

	<script type="text/javascript" src="js/jcarousellite_1.0.1.min.js"></script>

	<script type="text/javascript">
		jQuery(window).bind("load", function() {
			
			//Feature Hover Effect
			$('ul.features').lavaLampFeature({
				fx: 'backout',
				speed: 750
			});

		
			// Initializes the Recent News slider
			jQuery("#recent-news-slider").codaSlider()
			// Initializes the Recommended Reading slider
			jQuery("#recommended-slider").codaSlider()
			// Initializes the Media slider
			jQuery("#media-slider").codaSlider()
			
			$(".podcasts-scroller").jCarouselLite({
			    btnNext: ".next",
			    btnPrev: ".prev",
			    vertical: true,
				visible: 2
			});

		});
	</script>

	<!--[if IE 6]>
		<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
		
		<script>
			/* EXAMPLE */
			DD_belatedPNG.fix('a.coffeegeek-logo, .pageframe-top, a.advanced-search, .log-in-area a, .content h1, .sidebar-container h2 a, a.current, .featured-advertisers-header, .polls-title, .about-footer h2, .footer-nav li a');
  
			/* string argument can be any CSS selector */
			/* .png_bg example is unnecessary */
			/* change it to what suits you! */
		</script>
	<![endif]-->

	<div class="content homepage">

		<?php /* Feature Content */ ?>	
		<div class="featured-content">
			<h1 class="featured-title">Featured</h1>
			
			<ul class="features">
				<li class="feature-one">
					<img src="images/feature-test-image.jpg" />
					
					<a href="#" class="feature-text">
						<span class="feature-article-title">Baratza Vario Grinder</span>
						<span class="feature-date">First Look, Dec 27, 2008</span>
						<span class="feature-article-content">We take a first look &amp; a product walk through on the brand 
new Baratza Virtuoso grinder, designed for the home ...</span>						
					</a>
				</li>
				

				<li class="feature-two">
					<img src="images/feature-test-image2.jpg" />
					
					<a href="#" class="feature-text">
						<span class="feature-article-title">Baratza Vario Grinder</span>
						<span class="feature-date">First Look, Dec 27, 2008</span>
						<span class="feature-article-content">We take a first look &amp; a product walk through on the brand 
new Baratza Virtuoso grinder, designed for the home ...</span>						
					</a>
				</li>

				<li class="feature-three">
					<img src="images/feature-test-image3.jpg" />
					
					<a href="#" class="feature-text">
						<span class="feature-article-title">Baratza Vario Grinder</span>
						<span class="feature-date">First Look, Dec 27, 2008</span>
						<span class="feature-article-content">We take a first look &amp; a product walk through on the brand 
new Baratza Virtuoso grinder, designed for the home ...</span>						
					</a>
				</li>
				
			</ul>
		</div>
	
		<?php /* Recent News */ ?>
		<div class="recent-news-slider">
			<h1 class="recent-news-title">Recent News</h1>

			<div class="slider-wrap">
				<div id="recent-news-slider">
					<div class="panelContainer">

						<?php /* --- Most Recent --- */ ?>
		
						<div class="panel" title="Most Recent">
							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

						</div>

						<?php /* --- Most Read --- */ ?>
						<div class="panel" title="Most Read">
							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

						</div>

						<?php /* --- Most Commented --- */ ?>
						<div class="panel" title="Most Commented">
							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

						</div>
			
					</div>
					</div>
		
			</div>
	
		</div>

		<?php /* Recommended Reading */ ?>	
		<div class="recommended-slider">
			<h1 class="recommended-reading-title">Recommended Reading</h1>

			<div class="slider-wrap">
				<div id="recommended-slider">
					<div class="panelContainer">

						<?php /* --- Beginner --- */ ?>	
						<div class="panel" title="Beginner">
							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<img src="images/recommended-placeholder.jpg" />
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<img src="images/recommended-placeholder.jpg" />
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<img src="images/recommended-placeholder.jpg" />
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

						</div>

						<?php /* --- Intermediate --- */ ?>
						<div class="panel" title="Intermediate">
							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<img src="images/recommended-placeholder.jpg" />
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<img src="images/recommended-placeholder.jpg" />
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<img src="images/recommended-placeholder.jpg" />
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

						</div>

						<?php /* --- Expert --- */ ?>
						<div class="panel" title="Expert">
							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<img src="images/recommended-placeholder.jpg" />
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<img src="images/recommended-placeholder.jpg" />
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

							<a href="#" class="wrapper">
								<span class="slider-title">Lorem ipsum</span>
								<img src="images/recommended-placeholder.jpg" />
								<abbr>Oct 22nd, 2009</abbr>
								<span class="slider-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</span>
							</a>

						</div>
			
					</div>
					</div>
		
			</div>
	
		</div>

		<?php /* Media */ ?>	
		<div class="media-slider">
			<h1 class="media-title">Media</h1>

			<div class="slider-wrap">
				<div id="media-slider">
					<div class="panelContainer">

						<?php /* --- Podcasts --- */ ?>	
						<div class="panel" title="Podcasts">
							
							<a class="media-text-ad" href="#">
								<span class="media-ad-title">Discover delicious coffee</span>
								<span class="media-ad-text">Don Francisco Coffee online store-the finest selection of coffees from a variety of growing regions.</span>								
							</a>
							
							<div class="podcasts-holder">


								<ul class="podcast-images">
									<li class="podcast-image-01 selected-podcast">
										<img src="images/podcast-image1.jpg" />
									</li>

									<li class="podcast-image-02">
										<img src="images/podcast-image2.jpg" />
									</li>

									<li class="podcast-image-03">
										<img src="images/podcast-image1.jpg" />
									</li>

									<li class="podcast-image-04">
										<img src="images/podcast-image2.jpg" />
									</li>
								</ul>

								<a href="#" class="prev">Prev</a>
								
								<div class="podcasts-scroller">

								<ul class="podcast-info">
								
									<li>
										<a href="#" class="wrapper podcast-01 selected-podcast">
											<span class="slider-title">CoffeeGeek Podcast 066 - Vacpot History Part 1</span>
											<span class="slider-excerpt">A detailed walk through the early history of vacpots and siphon coffee makers, including their origins, rise in popularity, and saturation in the US market in the 1930s.</span>
										</a>
									</li>

									<li>
										<a href="#" class="wrapper podcast-02">
											<span class="slider-title">CoffeeGeek Podcast 065 - Vario Grinder</span>
											<span class="slider-excerpt">A detailed interview with Kyle Anderson from Baratza about the forthcoming Vario grinder; also talk about the new CoffeeGeek site, and CoffeeGeek on Twitter</span>
										</a>
									</li>

									<li>
										<a href="#" class="wrapper podcast-03">
											<span class="slider-title">CoffeeGeek Podcast 066 - Vacpot History Part 1</span>
											<span class="slider-excerpt">A detailed walk through the early history of vacpots and siphon coffee makers, including their origins, rise in popularity, and saturation in the US market in the 1930s.</span>
										</a>
									</li>

									<li>
										<a href="#" class="wrapper podcast-04">
											<span class="slider-title">CoffeeGeek Podcast 065 - Vario Grinder</span>
											<span class="slider-excerpt">A detailed interview with Kyle Anderson from Baratza about the forthcoming Vario grinder; also talk about the new CoffeeGeek site, and CoffeeGeek on Twitter</span>
										</a>
									</li>
								
								</ul>
								
								</div>

								<a href="#" class="next">Next</a>
								
								<a href="#" class="podcast-bottom-ad">
									<img class="podcast-bottom-ad" src="images/podcast-ad.jpg" />
								</a>
							
							</div>
							
							<div class="podcast-footer">
								<a href="#" class="podcast-feed"><span class="podcast-rss">&nbsp;</span>RSS MP3 Feed</a>
								<a href="#" class="podcast-feed"><span class="podcast-enhanced">&nbsp;</span>Enhanced iTunes Feed</a>
								<p>Questions or comments podcast@coffeegeek.com or call toll free and leave an audio question via Skype: CoffeeGeek</p>
							</div>
														
						</div>

						<?php /* --- YouTube --- */ ?>
						<div class="panel" title="YouTube">
							Youtube
						</div>

						<?php /* --- Flickr --- */ ?>
						<div class="panel" title="Flickr">
							Flickr
						</div>

						<?php /* --- Facebook --- */ ?>
						<div class="panel" title="Facebook">
							Facebook
						</div>
			
					</div>
					</div>
		
			</div>
	
		</div>



</div><?php /* Closes .content */ ?>

<?php include('sidebar-home.php') ?>

<?php include('footer.php') ?>