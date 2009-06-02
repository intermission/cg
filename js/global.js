		$(function() {
			//Nav Effect
			$('.header ul.nav').lavaLamp({
				fx: 'backout',
				speed: 750
			});
			
			//QuickNav Effect
			$("a.quick-nav").hover(function () {
				$('.quick-nav-open').slideDown();
				$("a.quick-nav").css({
					'padding-bottom' : '4px', 
					'background-position' : '0px 16px'
				})
			});

			$("a.quick-nav").click(function () {
				$('.quick-nav-open').slideDown();
				$("a.quick-nav").css({
					'padding-bottom' : '4px', 
					'background-position' : '0px 16px'
				})
			});

			$("a.close").click(function () {
				$('.quick-nav-open').slideUp();
				$("a.quick-nav").css({
					'padding-bottom' : '0px', 
					'background-position' : '0px 0px'
				})
			});

			$("a.advanced-search").click(function () {
				$('.advanced-search-box').slideToggle();
			});

			//Sub-Nav Dropdown Effect

			// Home hides Subnav		
			$("ul.nav li a.home-nav").hover(function () {
				$(".sub-nav.sub-blog, .sub-nav.sub-guides, .sub-nav.sub-community, .sub-nav.sub-reviews, .sub-nav.sub-articles").css({
					'display' : 'none'
				})
			});

			// Show Articles Subnav
			$("ul.nav li a.articles-nav").hover(function () {
				$(".sub-nav.sub-reviews, .sub-nav.sub-guides, .sub-nav.sub-blog, .sub-nav.sub-community").css({
					'display' : 'none'
				})
			$('.sub-nav.sub-articles').slideDown();
			});

			// Show Reviews Subnav
			$("ul.nav li a.reviews-nav").hover(function () {
				$(".sub-nav.sub-blog, .sub-nav.sub-guides, .sub-nav.sub-community, .sub-nav.sub-articles").css({
					'display' : 'none'
				})
			$('.sub-nav.sub-reviews').slideDown();
			});

			// Show Guides Subnav
			$("ul.nav li a.guides-nav").hover(function () {
				$(".sub-nav.sub-blog, .sub-nav.sub-reviews, .sub-nav.sub-community, .sub-nav.sub-articles").css({
					'display' : 'none'
				})
			$('.sub-nav.sub-guides').slideDown();
			});

			// Show Blog Subnav
			$("ul.nav li a.blog-nav").hover(function () {
				$(".sub-nav.sub-reviews, .sub-nav.sub-guides, .sub-nav.sub-community, .sub-nav.sub-articles").css({
					'display' : 'none'
				})
			$('.sub-nav.sub-blog').slideDown();
			});

			// Show Community Subnav
			$("ul.nav li a.community-nav").hover(function () {
				$(".sub-nav.sub-reviews, .sub-nav.sub-guides, .sub-nav.sub-blog, .sub-nav.sub-articles").css({
					'display' : 'none'
				})
			$('.sub-nav.sub-community').slideDown();
			});

		});