		$(document).ready(function(){

			// Showing navbar when the user is using smaller device
			$('.handle').on('click',function(){
				$('.page_nav nav ul').toggleClass('showing');
				$('.handle').toggleClass('on_handle_click');
			});

			// Just clicking the link on article
			// when the user click the image of the article
			$('.article_img').on('click',function(){
				$('.article_header a h3').trigger('click');
			});

			$("article.arti").hover(function(){
				$(this).toggleClass('hovering');
			});

			// Trigger the hidden link on page to go back to top
			$('.go_top_btn').on('click',function(){
				$('.gotoTop a p').trigger('click');
			});

			// Animating the scrolling go to top
			$('.goTop').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 1200);
				return false;
			});

			// showing login form
			$('a .login').on('click',function(){
				if($(".page_login").css('display') == "none"){
					$('.page_login').show('slow');
				}
			});

			// hidding login form
			$('.page_login a').on('click', function(){
				$('.page_login').hide('slow');
			});


			// showing the sign up form
			$('a .sign-up').on('click', function(){
				if($('.page_sign_up').css('display') == "none"){
					$('.page_sign_up').show('slow');
				}
			});

			// hidding sign up form
			$('.page_sign_up a').on('click', function(){
				$('.page_sign_up').hide('slow');
			});


			// run test on initial page load
			checkChangesInClass();

			// run test on resize of the window
			$(window).resize(checkChangesInClass);

		})

		function checkChangesInClass(){
			if($(".old_post_articles").css('display') == "none"){
				$('div.related_art').removeClass('col-sm-6 col-md-6 col-lg-6').addClass('col-sm-12 col-md-12 col-lg-12');
			}
			if($(".old_post_articles").css('display') == "block"){
				$('div.related_art').removeClass('col-sm-12 col-md-12 col-lg-12').addClass('col-sm-6 col-md-6 col-lg-6');
			}


		}