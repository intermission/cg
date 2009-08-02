		$(function() {
			//Nav Effect
			$('.header ul.nav').lavaLamp({
				fx: 'backout',
				speed: 750
			});
			
			//QuickNav Effect
			$("a.quick-nav").click(function () {
				$('.quick-nav-open').slideToggle();
			});

			$("a.close").click(function () {
				$('.quick-nav-open').slideUp();
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


			$("a.wrapper.podcast-01").mouseenter(function () {
				$("a.wrapper.podcast-01").addClass("selected-podcast")
				$("a.wrapper.podcast-02").removeClass("selected-podcast")
				$("a.wrapper.podcast-03").removeClass("selected-podcast")
				$("a.wrapper.podcast-04").removeClass("selected-podcast")

				$(".podcast-images li.podcast-image-01").addClass("selected-podcast")				
				$(".podcast-images li.podcast-image-02").removeClass("selected-podcast")				
				$(".podcast-images li.podcast-image-03").removeClass("selected-podcast")				
				$(".podcast-images li.podcast-image-04").removeClass("selected-podcast")				
			});

			$("a.wrapper.podcast-02").mouseenter(function () {
				$("a.wrapper.podcast-02").addClass("selected-podcast")
				$("a.wrapper.podcast-01").removeClass("selected-podcast")
				$("a.wrapper.podcast-03").removeClass("selected-podcast")
				$("a.wrapper.podcast-04").removeClass("selected-podcast")

				$(".podcast-images li.podcast-image-02").addClass("selected-podcast")				
				$(".podcast-images li.podcast-image-01").removeClass("selected-podcast")				
				$(".podcast-images li.podcast-image-03").removeClass("selected-podcast")				
				$(".podcast-images li.podcast-image-04").removeClass("selected-podcast")				
			});

			$("a.wrapper.podcast-03").mouseenter(function () {
				$("a.wrapper.podcast-03").addClass("selected-podcast")
				$("a.wrapper.podcast-02").removeClass("selected-podcast")
				$("a.wrapper.podcast-01").removeClass("selected-podcast")
				$("a.wrapper.podcast-04").removeClass("selected-podcast")

				$(".podcast-images li.podcast-image-03").addClass("selected-podcast")				
				$(".podcast-images li.podcast-image-02").removeClass("selected-podcast")				
				$(".podcast-images li.podcast-image-01").removeClass("selected-podcast")				
				$(".podcast-images li.podcast-image-04").removeClass("selected-podcast")				
			});

			$("a.wrapper.podcast-04").mouseenter(function () {
				$("a.wrapper.podcast-04").addClass("selected-podcast")
				$("a.wrapper.podcast-01").removeClass("selected-podcast")
				$("a.wrapper.podcast-03").removeClass("selected-podcast")
				$("a.wrapper.podcast-02").removeClass("selected-podcast")

				$(".podcast-images li.podcast-image-04").addClass("selected-podcast")				
				$(".podcast-images li.podcast-image-02").removeClass("selected-podcast")				
				$(".podcast-images li.podcast-image-03").removeClass("selected-podcast")				
				$(".podcast-images li.podcast-image-01").removeClass("selected-podcast")				
			});


		});