@extends('layouts.user')

@section('title', 'IRIS')

@section('content')
<div class="w-nav opacity-60 nav-bar-header">
	<div class="page-padding">
		<div class="nav_container">
			<a href="/" aria-current="page" class="nav_logo-link w-nav-brand w--current" aria-label="home">
				<img src="{{ asset('img/favicon.ico') }}" loading="lazy" height="70" alt="IRIS">
			</a>
			<div class="nav_container d-flex justify-content-end">
				<nav role="navigation" class="nav_menu-wrapper w-nav-menu">
					<div class="nav_link-wrapper">
						<a data-menuanchor="firstPage" href="#firstPage" class="nav_link">
							<div>
								<img src="{{ asset('svg/external-link.svg') }}" loading="eager" alt="" class="nav_external-link-indicator">Work
							</div>
						</a>
						<a data-menuanchor="secondPage" href="#secondPage" target="_blank" class="nav_external-link w-inline-block">About Me</a>
						<a data-menuanchor="thirdPage" href="#thirdPage" target="_blank" class="nav_external-link w-inline-block">
							<div>Equipment</div>
						</a>
						<a data-menuanchor="fourthPage" href="#fourthPage" class="nav_link">Partner</a>
						<a data-menuanchor="fifthPage" href="#fifthPage" class="nav_link">Contact</a>
				</nav>
			</div>
		</div>
	</div>
</div>

<main>
	<div>
		@foreach($slides as $key => $slide)
		<div class="carousel-item" data-id="{{ $key }}">
			<img src="{{ asset($slide->url) }}" width="1920" height="1080" alt="{{ $slide->name }}">
		</div>
		@endforeach
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<header>
		<div class="page-padding">
			<div class="home-wrap">
				<div class="container-large">
					<div class="padding-vertical title-padding">
						<div class="hero-logo-placeholder hide-tablet overflow-hidden">
							<img src="{{ asset('img/logo.png') }}" loading="lazy" height="450" alt="IRIS">
						</div>
					</div>
				</div>
				<div class="home-text-wrap">
					<div class="container-xsmall">
						<div class="overflow-hidden" style="padding-bottom: 7rem;">
							@if($descriptions->isNotEmpty())
							<h1 class="home-h1">{{ $descriptions[0]->note }}</h1>
							@endif
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
	$(document).ready(function() {
		$('#multiscroll').multiscroll();
	});

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
					slides[i].removeAttribute('style');
					setTimeout(removeActive, 450, slides[i]);
					addActive(slides[0]);
					break;
				}
				if (slides[i].classList.contains('active')) {
					slides[i].removeAttribute('style');
					setTimeout(removeActive, 450, slides[i]);
					addActive(slides[i + 1]);
					break;
				}
			}
		}, 8000);
	}

	var slideIndex;

	function plusSlides(n) {
		let slide = document.getElementsByClassName("carousel-item active")[0];
		slideIndex = parseInt(slide.getAttribute("data-id"));

		showSlides(slideIndex += n);
	}

	function showSlides(n) {
		let slides = document.getElementsByClassName("carousel-item");

		for (let i = 0; i < slides.length; i++) {
			if (slides[i].classList.contains("active")) {
				slides[i].classList.remove("active");
			}
		}
		if (n >= 4) {
			n = 0;
		}

		slides[n].classList.add("active");
	}
</script>
@stop