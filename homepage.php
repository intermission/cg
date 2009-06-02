<?php include('header.php') ?>

	<script type="text/javascript">
		jQuery(window).bind("load", function() {
			// Initializes the Recent News slider
			jQuery("#recent-news-slider").codaSlider()
			// Initializes the Recommended Reading slider
			jQuery("#recommended-slider").codaSlider()
			// Initializes the Media slider
			jQuery("#media-slider").codaSlider()
		});
	</script>

	<div class="content homepage">

		<?php /* Feature Content */ ?>	
		<div class="featured-content">
			<h1 class="featured-title">Featured</h1>
			
			<div class="features">
				<div class="feature-one">
					<img src="images/feature-test-image.jpg" />
					
					<a href="#" class="feature-text">
						<span class="feature-article-title">Baratza Vario Grinder</span>
						<span class="feature-date">First Look, Dec 27, 2008</span>
						<span class="feature-article-content">We take a first look and a product walk through on the brand 
new Baratza Virtuoso grinder, designed for the home ...</span>						
					</a>
				</div>
				

				<div class="feature-two">
					<img src="images/feature-test-image.jpg" />
					
					<a href="#" class="feature-text">
						<span class="feature-article-title">Baratza Vario Grinder</span>
						<span class="feature-date">First Look, Dec 27, 2008</span>
						<span class="feature-article-content">We take a first look and a product walk through on the brand 
new Baratza Virtuoso grinder, designed for the home ...</span>						
					</a>
				</div>

				<div class="feature-three">
					<img src="images/feature-test-image.jpg" />
					
					<a href="#" class="feature-text">
						<span class="feature-article-title">Baratza Vario Grinder</span>
						<span class="feature-date">First Look, Dec 27, 2008</span>
						<span class="feature-article-content">We take a first look and a product walk through on the brand 
new Baratza Virtuoso grinder, designed for the home ...</span>						
					</a>
				</div>
				
			</div>
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

						<?php /* --- YouTube --- */ ?>
						<div class="panel" title="YouTube">
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

						<?php /* --- Flickr --- */ ?>
						<div class="panel" title="Flickr">
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

						<?php /* --- Facebook --- */ ?>
						<div class="panel" title="Facebook">
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



</div><?php /* Closes .content */ ?>

<?php include('sidebar-home.php') ?>

<?php include('footer.php') ?>