@extends('layouts.user')

@section('title', 'IRIS')

@section('content')
<div class="w-nav opacity-60 nav-bar-header">
	<div class="page-padding">
		<div class="nav_container">
			<a href="/" aria-current="page" class="nav_logo-link w-nav-brand w--current" aria-label="home">
				<img src="{{ asset('img/logo.png') }}" loading="lazy" height="64" alt="IRIS">
			</a>
			<div class="nav_container d-flex justify-content-end">
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
	</div>
</div>
<main>
	<div>
		@foreach($slides as $slide)
		<div class="carousel-item">
			<img src="{{ asset($slide->url) }}" width="1920" height="1080" alt="{{ $slide->name }}">
		</div>
		@endforeach
	</div>
	<header>
		<div class="page-padding">
			<div class="home-wrap">
				<div class="container-large">
					<div class="padding-vertical title-padding">
						<div class="hero-logo-placeholder hide-tablet overflow-hidden">
							<img src="{{ asset('img/logo.png') }}" loading="lazy" height="160" alt="IRIS">
						</div>
					</div>
				</div>
				<div class="home-text-wrap">
					<div class="container-xsmall">
						<div class="padding-vertical padding-xhuge is-home-hero">
							<div class="overflow-hidden">
								@if($descriptions->isNotEmpty())
								<h1 class="home-h1">{{ $descriptions[0]->note }}</h1>
								@endif
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
						<div class="w-layout-grid logos d-flex flex-column justify-content-center align-items-center">
							@foreach($partners as $partner)
							<img src="{{ $partner->url }}" alt="{{ $partner->name }}" class="logos_item">
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<div class="w-nav opacity-60 nav-bar-footer">
	<div class="page-padding">
		<div class="nav_container d-flex justify-content-end">
			<nav role="navigation" class="nav_menu-wrapper w-nav-menu grid-column-gap-1rem">
				<a href="{{ $facebook[0]->note }}" class="fa fa-facebook"></a>
				<a href="{{ $insta[0]->note }}" class="fa fa-instagram"></a>
				<a href="{{ $youtube[0]->note }}" class="fa fa-youtube"></a>
				<a href="tel {{ $sdt[0]->note }}" class="fa fa-phone"></a>
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