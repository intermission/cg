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
			$("ul.nav li a.home-nav").mouseenter(function () {
				$(".sub-nav.sub-blog, .sub-nav.sub-guides, .sub-nav.sub-community, .sub-nav.sub-reviews, .sub-nav.sub-articles").css({
					'display' : 'none'
				})
			});

			$("ul.nav li a.home-nav").mouseleave(function () {
				$(".sub-nav.sub-current").css({
					'display' : 'block'
				})
			});

			// Show Articles Subnav
			$("ul.nav li a.articles-nav").mouseenter(function () {
				$(".sub-nav.sub-reviews, .sub-nav.sub-guides, .sub-nav.sub-blog, .sub-nav.sub-community").css({
					'display' : 'none'
				})
				$('.sub-nav.sub-articles').css({
					'display' : 'block'
				})
			});

			$("ul.nav li.nav-two").mouseleave(function () {
				$(".sub-nav.sub-articles").css({
					'display' : 'none'
				})
				$(".sub-nav.sub-current").css({
					'display' : 'block'
				})
			});

			// Show Reviews Subnav
			$("ul.nav li a.reviews-nav").mouseenter(function () {
				$(".sub-nav.sub-blog, .sub-nav.sub-guides, .sub-nav.sub-community, .sub-nav.sub-articles").css({
					'display' : 'none'
				})
			$('.sub-nav.sub-reviews').css({
					'display' : 'block'
				})
			});

			$("ul.nav li.nav-three").mouseleave(function () {
				$(".sub-nav.sub-reviews").css({
					'display' : 'none'
				})
				$(".sub-nav.sub-current").css({
					'display' : 'block'
				})
			});

			// Show Guides Subnav
			$("ul.nav li a.guides-nav").mouseenter(function () {
				$(".sub-nav.sub-blog, .sub-nav.sub-reviews, .sub-nav.sub-community, .sub-nav.sub-articles").css({
					'display' : 'none'
				})
			$('.sub-nav.sub-guides').css({
					'display' : 'block'
				})
			});

			$("ul.nav li.nav-four").mouseleave(function () {
				$(".sub-nav.sub-guides").css({
					'display' : 'none'
				})
				$(".sub-nav.sub-current").css({
					'display' : 'block'
				})
			});

			// Show Blog Subnav
			$("ul.nav li a.blog-nav").mouseenter(function () {
				$(".sub-nav.sub-reviews, .sub-nav.sub-guides, .sub-nav.sub-community, .sub-nav.sub-articles").css({
					'display' : 'none'
				})
			$('.sub-nav.sub-blog').css({
					'display' : 'block'
				})
			});

			$("ul.nav li.nav-five").mouseleave(function () {
				$(".sub-nav.sub-blog").css({
					'display' : 'none'
				})
				$(".sub-nav.sub-current").css({
					'display' : 'block'
				})
			});


			// Show Community Subnav
			$("ul.nav li a.community-nav").mouseenter(function () {
				$(".sub-nav.sub-reviews, .sub-nav.sub-guides, .sub-nav.sub-blog, .sub-nav.sub-articles").css({
					'display' : 'none'
				})
				$('.sub-nav.sub-community').css({
					'display' : 'block'
				})
			});

			$("ul.nav li.nav-six").mouseleave(function () {
				$(".sub-nav.sub-community").css({
					'display' : 'none'
				})
				$(".sub-nav.sub-current").css({
					'display' : 'block'
				})
				$('ul.nav li.back').css({	
					'background-color' : '#AA9B6B'
				})

			});			

		});