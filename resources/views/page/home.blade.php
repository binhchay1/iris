@extends('layouts.user')

@section('title', 'IRIS')

@section('content')
<div class="page-wrapper">
	<div data-animation="default" data-collapse="medium" data-duration="1000" data-easing="ease-out-expo" data-easing2="ease" role="banner" class="nav_component w-nav" style="will-change: background; background-color: rgba(0, 0, 0, 0);">
		<div class="page-padding">
			<div class="nav_container"><a href="/" aria-current="page" class="nav_logo-link w-nav-brand w--current" aria-label="home"><img src="https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/63074768f5edbb19fa575987_kold-logo.svg" loading="lazy" height="24" alt="IRIS"></a>
				<nav role="navigation" class="nav_menu-wrapper w-nav-menu">
					<div class="nav_link-wrapper">
						<a href="/filmmaking" class="nav_link">
							<div>
								<img src="{{ asset('svg/external-link.svg') }}" loading="eager" alt="" class="nav_external-link-indicator">Work
							</div>
						</a>
						<a href="https://www.koldercreative.com/" target="_blank" class="nav_external-link w-inline-block">About Me</a>
						<a href="https://samkolderpresets.com/" target="_blank" class="nav_external-link w-inline-block">
							<div>Equipment</div>
						</a><a href="/contact" class="nav_link">Partner</a>
						</a><a href="/contact" class="nav_link">Contact</a>
					</div>
				</nav>
			</div>
		</div>
		<div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
	</div>
	<main class="main-wrapper is-relative">
		<div class="hero-image-wrap">
			<div class="carousel">
				@foreach($slides as $slide)
				<div class="carousel-item">
					<img src="{{ asset($slide->url) }}" loading="lazy" sizes="100vw" alt="{{ $slide->name }}" class="hero-image hide-mobile-portrait">
				</div>
				@endforeach
			</div>

		</div>
		<header>
			<div class="page-padding">
				<div class="home-wrap">
					<div class="container-large">
						<div class="padding-vertical padding-xhuge">
							<div class="hero-logo-placeholder hide-tablet overflow-hidden">
								<img src="https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/63074768f5edbb19fa575987_kold-logo.svg" loading="lazy" height="128" alt="Sam Kolder logo vector svg">
							</div>
						</div>
					</div>
					<div class="home-text-wrap">
						<div class="container-xsmall">
							<div class="padding-vertical padding-xhuge is-home-hero">
								<div class="overflow-hidden">
									<h1 class="home-h1">Sam Kolder is a world-renowned filmmaker that inspired a generation of content creators from all around the world</h1>
								</div>
								<div class="margin-top margin-medium">
									<div class="button-wrap"><a data-w-id="2c3f640d-08a3-22a3-281c-51be9deaf735" href="/contact" class="button w-button">Get in touch</a><a data-w-id="cbcf97cd-d895-93ae-1047-81b09a1b08ba" href="https://www.koldercreative.com/" target="_blank" class="button-secondary w-button" style="">Master Class</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="section-relative">
			<div class="page-padding">
				<div class="container-large">
					<div class="padding-vertical padding-large">
						<div class="overflow-hidden">
							<div class="w-layout-grid logos">
								<img src="https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/62c307c1d70851f223142449_canon.svg" loading="lazy" alt="" class="logos_item">
								<img src="https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/62c307c1c5a063133bdc0857_hyundai.svg" loading="lazy" alt="" class="logos_item">
								<img src="https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/62c307c156818386b8ae2e6a_youtube.svg" loading="lazy" alt="" class="logos_item">
								<img src="https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/62c307c0c8c0860cc48fa106_dji.svg" loading="lazy" alt="" class="logos_item">
								<img src="https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/62c307c07f5d65045d3d0453_hilton.svg" loading="lazy" alt="" class="logos_item">
								<img src="https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/62c307c013b754ed33f8ccf2_gymshark.svg" loading="lazy" alt="" class="logos_item">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<div data-animation="default" data-collapse="medium" data-duration="1000" data-easing="ease-out-expo" data-easing2="ease" role="banner" class="w-nav opacity-60 nav-bar-footer">
		<div class="page-padding">
			<div class="nav_container d-flex justify-content-end">
				<nav role="navigation" class="nav_menu-wrapper w-nav-menu grid-column-gap-1rem">
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-google"></a>
					<a href="#" class="fa fa-linkedin"></a>
				</nav>
			</div>
		</div>
	</div>
</div>
@stop

@section('script')
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}" id="jquery-core-js"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script>
<script type="text/javascript" src="{{ asset('js/plus/jquery.easing.1.3.js') }}" id="jquery-easing-1.3-js"></script>
<script type="text/javascript" src="{{ asset('js/plus/jquery.multiscroll.min.js') }}" id="multiscroll-js"></script>
<script>
	window.onload = function() {
		var slides = document.getElementsByClassName('carousel-item'),
			addActive = function(slide) {
				slide.classList.add('active')
			},
			removeActive = function(slide) {
				slide.classList.remove('active')
			};
		addActive(slides[0]);

		setInterval(function() {
			for (var i = 0; i < slides.length; i++) {
				if (i + 1 == slides.length) {
					addActive(slides[0]);
					setTimeout(removeActive, 350, slides[i]); //Doesn't be worked in IE-9
					break;
				}
				if (slides[i].classList.contains('active')) {
					slides[i].removeAttribute('style');
					setTimeout(removeActive, 350, slides[i]); //Doesn't be worked in IE-9
					addActive(slides[i + 1]);
					break;
				}
			}
		}, 4000);
	}
</script>
@stop