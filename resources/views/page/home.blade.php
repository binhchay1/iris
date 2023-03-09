@extends('layouts.user')

@section('title', 'IRIS')

@section('content')
<section>
	<div class="w-nav opacity-60 nav-bar-header">
		<div class="page-padding">
			<div class="nav_container">
				<a href="/" aria-current="page" class="nav_logo-link w-nav-brand w--current" aria-label="home">
					<img src="{{ asset('img/favicon.ico') }}" loading="lazy" height="70" alt="IRIS">
				</a>
				<div class="nav_container d-flex justify-content-end">
					<nav role="navigation" class="nav_menu-wrapper w-nav-menu">
						<div class="nav_link-wrapper">
							<a href="#work" class="nav_link">
								<div>
									<img src="{{ asset('svg/external-link.svg') }}" loading="eager" alt="" class="nav_external-link-indicator">Work
								</div>
							</a>
							<a href="#aboutus" class="nav_external-link" style="margin-top: -2px;">About Us</a>
							<a href="#equipment" class="nav_external-link">
								<div>Equipment</div>
							</a>
							<a href="#services" class="nav_link" style="margin-top: 3px;">Services</a>
							<a href="#members" class="nav_link" style="margin-top: 3px;">Members</a>
							<a href="#contact" class="nav_link" style="margin-top: 3px;">Contact</a>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="h-100" id="home">
	<div>
		@foreach($slides as $key => $slide)
		<div class="carousel-item" data-id="{{ $key }}">
			<img src="{{ asset($slide->url) }}" width="100%" height="970" alt="{{ $slide->name }}">
		</div>
		@endforeach
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<div>
		<div class="page-padding">
			<div class="home-wrap">
				<div class="container-large">
					<div class="padding-vertical title-padding">
						<div class="hero-logo-placeholder overflow-hidden">
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
	</div>
	<div class="section-relative">
		<div class="page-padding">
			<div class="container-large">
				<div class="padding-vertical padding-large">
					<div class="w-layout-grid logos d-flex justify-content-center align-items-center">
						@foreach($partners as $partner)
						<img src="{{ $partner->url }}" alt="{{ $partner->name }}" class="logos_item">
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="padding-xhuge" id="aboutus">
	<div class="container p-0">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 p-20 aos-init aos-animate" data-aos="fade-up">
				<div class="about-us-content">
					<h3 class="section-title">
						About US
					</h3>
					<p class="section-text">
						Năm 2020, cùng những thách thức mang tính toàn cầu như việc giới hạn mở của từng quốc gia, sự đứt gãy dòng chảy kinh tế là sự phát triẻn mạnh mẽ của các nền tảng công nghệ và sáng kiến để doanh nghiệp bức phá
					</p>
					<p class="section-text">
						Trong xu hướng phát triển chung, trên nền tảng sức mạnh nội lực của từng bên, các doanh nghiệp Việt đang có sự xích lại, hợp tác mạnh mẽ, cùng nhau đi nhanh và đi xa hơn không chỉ trên thị trường trong nước và quốc tế. Để làm được điều này, ngoài tiềm lực về chuyên môn, kinh tế, các doanh nghiệp cần những đối tác chuyên nghiệp hỗ trợ về truyền thông quảng cáo, cũng như các dịch vụ Marketing bài bản, cạnh tranh và thấu hiểu thị trường
					</p>
					<p class="section-text">
						Dựa trên nhu cầu này, LHMotion được thành lập, giải quyết khát khao của thị Dựa trên nhu cầu này, LHMotion được thành lập, giải quyết khát khao của thị trường về một doanh nghiệp mạnh về truyền thông, quảng cáo và Marketing, đồng bộ về tư duy sáng tạo, giải pháp tối ưu, cơ sở hạ tầng hiện đại để nâng tầm sản phẩm, dịch vụ của mỗi bên mà chúng tôi có hân hạnh trở thành đối tác phục vụ.trường về một doanh nghiệp mạnh về truyền thông, quảng cáo và Marketing, đồng bộ về tư duy sáng tạo, giải pháp tối ưu, cơ sở hạ tầng hiện đại để nâng tầm sản phẩm, dịch vụ của mỗi bên mà chúng tôi có hân hạnh trở thành đối tác phục vụ
					</p>
					<p class="section-text">
						Chúng tôi tin rằng bằng sự say mê sáng tạo, hạ tầng thiết bị tân tiến và tiềm lực tài chính đối ứng vững mạnh, LHMotion sẽ đem lại những sản phẩm, dịch vụ chất lượng, tin cậy, hứng khởi tới mỗi Quý Khách Hàng
					</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 p-20 aos-init aos-animate" data-aos="fade-left" data-aos-delay="500">
				<div class="about-us-img">
					<img src="img/about-us/au-main.jpg">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pt-40 pb-40" id="equipment">
	<div class="container p-0">
		<div class="p-10 aos-init aos-animate" data-aos="fade-right">
			<h3 class="section-title">
				Equipment
			</h3>
		</div>
		<div class="p-10 aos-init aos-animate" data-aos="fade-up">
			<p class="font-weight-bold text-danger">Fujifilm x Iris</p>
			<div class="equipment-list">
				<div class="equipment-item">
					<img src="img/equipment/e1.png" alt="">
					<span class="equipment-name">Red DSMC2 BRAIN HELIUM 8K S35</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pt-40 pb-40" id="services">
	<div class="page-padding">
		<div class="container-large">
			<div class="padding-top padding-xhuge">

			</div>
			<div class="padding-bottom padding-xxhuge padding-top">
				<div class="margin-top margin-large">
					<h1 class="max-width-large">Films by Sam Kolder</h1>
					<div class="margin-top margin-medium max-width-large">
						<p class="text-size-medium">A collection of some of Sam's best work including drone reel compilations, <br>creative storytelling, travel vlogs &amp; client work.</p>
					</div>
				</div>
				<div class="margin-top margin-huge">
					<div class="works_component w-dyn-list">
						<div role="list" class="works_list w-dyn-items">
							@foreach($services as $key => $service)
							@if($key % 2 == 0)
							<div role="listitem" class="works_item w-dyn-item">
								<iframe width="854" height="480" src="{{ $service->url }}" frameBorder="0" scrolling="no"></iframe>
								<div class="works_txt">
									<h2 class="heading-small">{{ $service->name }}</h2>
									<div class="margin-top margin-small max-width-large">
										<div class="w-richtext">
											<p>{{ $service->description }}</p>
										</div>
									</div>
								</div>
							</div>
							@else
							<div role="listitem" class="works_item w-dyn-item" style="flex-direction: row-reverse;">
								<iframe width="854" height="480" src="{{ $service->url }}" frameBorder="0" scrolling="no"></iframe>
								<div class="works_txt">
									<h2 class="heading-small">{{ $service->name }}</h2>
									<div class="margin-top margin-small max-width-large">
										<div class="w-richtext">
											<p>{{ $service->description }}</p>
										</div>
									</div>
								</div>
							</div>
							@endif
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pt-40 pb-40" id="members">
	<div class="container p-0">
		<div class="p-10 aos-init aos-animate" data-aos="fade-left">
			<h3 class="section-title-right">
				MEMBERS
			</h3>
		</div>
		<div class="row aos-init aos-animate" data-aos="fade-up">
			@foreach($members as $member)
			<div class="col-lg-4 col-md-6 col-sm-12 p-10">
				<div class="man-card">
					<div class="man-avatar">
						<img src="{{ url($member->img) }}">
					</div>
					<div class="man-desc">
						<h6 class="man-name">{{ $member->gender == 1 ? 'Mr.' : 'Mrs.' }}</h6>
						<h5 class="man-name">{{ $member->name }}</h5>
						<i class="man-position">{{ $member->role }}</i>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<section id="contact">
	<main class="main-wrapper">
		<section>
			<div class="page-padding">
				<div class="container-large">
					<div class="padding-top padding-xhuge">
						<div class="headline_component">
							<div class="subheading">Contact</div>
							<div class="headline_divider"></div>
							<h1 class="contact-heading"><a href="mailto:management@samkolder.com?subject=Hey!" class="link">management@samkolder.com</a></h1>
						</div>
						<div class="margin-top margin-xlarge">
							<div class="contact-form_component">
								<div class="form-wrapper w-form">
									<div class="margin-bottom margin-xlarge">
										<h2>Get in touch</h2>
									</div>
									<form id="wf-form-Contact" name="wf-form-Contact" data-name="Contact" method="get" class="form" aria-label="Contact">
										<div class="form-two-fields">
											<div class="form-field-wrapper"><label for="Name" class="form-label">Name</label><input type="text" class="form-input w-input" maxlength="256" name="Name" data-name="Name" placeholder="Enter your full name" id="Name" required=""></div>
											<div class="form-field-wrapper"><label for="Email" class="form-label">Email</label><input type="email" class="form-input w-input" maxlength="256" name="Email" data-name="Email" placeholder="Enter your email" id="Email" required=""></div>
										</div>
										<div class="form-field-wrapper"><label for="Message" class="form-label">Message</label><textarea id="Message" name="Message" maxlength="5000" data-name="Message" placeholder="Start typing here ..." required="" class="form-input is-text-area w-input"></textarea></div>
										<div class="form-field-wrapper"><label class="w-checkbox form-checkbox">
												<div class="w-checkbox-input w-checkbox-input--inputType-custom form-checkbox-icon"></div><input type="checkbox" id="Conset" name="Conset" data-name="Conset" required="" style="opacity:0;position:absolute;z-index:-1"><span for="Conset" class="form-checkbox-label w-form-label">I agree to the <a href="/privacy" class="text-style-link">privacy policy</a>.</span>
											</label></div>
										<div class="margin-top margin-small"><input type="submit" value="Submit" data-wait="Please wait..." class="button is-form-submit w-button"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="padding-bottom"></div>
				</div>
				<div class="container-small">
					<div class="padding-bottom padding-xlarge">
						<div class="margin-top margin-xlarge">
							<div class="contact_component">
								<div class="contact_item">
									<div class="subheading is-contact">BUSINESS INFO</div>
									<div class="contact_wrap">
										<div class="contact_txt">Sam Kolder Creative FZE</div>
										<div class="contact_txt">TEC Business Center FZE,</div>
										<div class="contact_txt">Level 3, The Offices 3, One Central, World Trade Center,</div>
										<div class="contact_txt">Dubai, UAE</div>
									</div>
								</div>
								<div class="contact_item">
									<div class="subheading is-contact">Useful Links</div>
									<div class="contact_wrap"><a href="https://www.koldercreative.com/" target="_blank" class="contact_link w-inline-block">Master Class</a><a href="https://samkolderpresets.com/" target="_blank" class="contact_link w-inline-block">Presets &amp; LUTs</a></div>
								</div>
								<div class="contact_item">
									<div class="subheading is-contact">Socials</div>
									<div class="contact_wrap is-socials"><a href="https://www.instagram.com/samkolder/" target="_blank" class="icon-1x1-small w-inline-block">
											<div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<title>Instagram icon</title>
													<path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path>
												</svg></div>
										</a><a href="https://www.youtube.com/user/koldstudios" target="_blank" class="icon-1x1-small w-inline-block">
											<div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
													<title>YouTube icon</title>
													<path d="M23.499 6.203a3.008 3.008 0 00-2.089-2.089c-1.87-.501-9.4-.501-9.4-.501s-7.509-.01-9.399.501a3.008 3.008 0 00-2.088 2.09A31.258 31.26 0 000 12.01a31.258 31.26 0 00.523 5.785 3.008 3.008 0 002.088 2.089c1.869.502 9.4.502 9.4.502s7.508 0 9.399-.502a3.008 3.008 0 002.089-2.09 31.258 31.26 0 00.5-5.784 31.258 31.26 0 00-.5-5.808zm-13.891 9.4V8.407l6.266 3.604z"></path>
												</svg>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</section>

<section>
	<div class="w-nav opacity-60 nav-bar-footer">
		<div class="page-padding">
			<div class="nav_container d-flex justify-content-end">
				<nav role="navigation" class="nav_menu-wrapper w-nav-menu grid-column-gap-1rem">
					<a href="{{ $facebook[0]->note }}" class="fa fa-facebook"></a>
					<a href="{{ $insta[0]->note }}" class="fa fa-instagram"></a>
					<a href="{{ $youtube[0]->note }}" class="fa fa-youtube"></a>
					<a href="tel: {{ $sdt[0]->note }}" class="fa fa-phone"></a>
				</nav>
			</div>
		</div>
	</div>
</section>

@stop

@section('script')
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}" id="jquery-core-js"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script>
<script type="text/javascript" src="{{ asset('js/plus/jquery.easing.1.3.js') }}" id="jquery-easing-1.3-js"></script>
<script type="text/javascript" src="{{ asset('js/plus/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plus/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/page/main-js.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plus/aos.js') }}"></script>
<script>
	AOS.init({
		once: true,
		disable: 'mobile'
	});

	document.querySelectorAll('img')
		.forEach((img) => img.addEventListener('load', () => AOS.refresh()));

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