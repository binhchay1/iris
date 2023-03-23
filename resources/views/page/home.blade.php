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
									<img src="{{ asset('svg/external-link.svg') }}" loading="eager" class="nav_external-link-indicator">Work
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

<section class="home-section" id="home">
	<div>
		@foreach($slides as $key => $slide)
		<div class="carousel-item" data-id="{{ $key }}">
			<img src="{{ asset($slide->url) }}" width="100%" height="1080px" alt="{{ $slide->name }}">
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
							<img src="{{ asset('img/logo.png') }}" loading="lazy" height="350" alt="IRIS">
						</div>
					</div>
				</div>
				<div class="home-text-wrap mt-5">
					<div class="container-xsmall">
						<div class="overflow-hidden">
							@if($descriptions->isNotEmpty())
							<h1 class="home-h1">{{ $descriptions[0]->note }}</h1>
							@endif
						</div>
					</div>
				</div>
				<div class="margin-medium">
					<div class="button-wrap">
						<a data-w-id="2c3f640d-08a3-22a3-281c-51be9deaf735" href="#contact" class="button w-button" style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Get in touch</a>
						<a data-w-id="cbcf97cd-d895-93ae-1047-81b09a1b08ba" href="#work" target="_blank" class="button-secondary w-button" style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Master Class</a>
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

<section class="section-relative" id="work">
	<div class="page-padding">
		<div class="container-large">
			<div id="work" class="padding-top padding-xhuge">
				<div class="headline_component">
					<h2 class="subheading">Work</h2>
					<div class="headline_divider"></div>
				</div>
			</div>
			<div class="margin-top margin-xlarge">
				<div class="work_component"><a href="/filmmaking" class="work_item is-left w-inline-block">
						<div class="work_item-img">
							<div class="work_item-overlay" style="opacity: 1;"></div><img src="https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/631eefb21013443921dd8bed_film.webp" loading="lazy" sizes="(max-width: 479px) 92vw, (max-width: 991px) 82vw, 37vw" srcset="https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/631eefb21013443921dd8bed_film-p-500.webp 500w, https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/631eefb21013443921dd8bed_film-p-800.webp 800w, https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/631eefb21013443921dd8bed_film-p-1080.webp 1080w, https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/631eefb21013443921dd8bed_film.webp 1080w" alt="Sam Kolder films" class="div-square is-work-img">
						</div>
						<div class="work_item-text">
							<div class="overflow-hidden">
								<h2 class="heading-display" style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Films</h2>
							</div>
							<div class="margin-top margin-xsmall overflow-hidden">
								<p class="work_item-par" style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Renowned for pushing his creative limits. Sam's work is best-known for his unique style of video editing that influenced a new era of content creation &amp; storytelling.</p>
							</div>
						</div>
					</a><a href="https://www.instagram.com/samkolder/" target="_blank" class="work_item is-right is-no-transform w-inline-block">
						<div class="work_item-img is-right">
							<div class="work_item-overlay" style="opacity: 1;"></div><img src="https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/631ef4cac393e6108cb58d36_photo.webp" loading="lazy" sizes="(max-width: 479px) 92vw, (max-width: 991px) 82vw, 37vw" srcset="https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/631ef4cac393e6108cb58d36_photo-p-500.webp 500w, https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/631ef4cac393e6108cb58d36_photo-p-800.webp 800w, https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/631ef4cac393e6108cb58d36_photo-p-1080.webp 1080w, https://uploads-ssl.webflow.com/62bee10754dc8848a548f80d/631ef4cac393e6108cb58d36_photo.webp 1080w" alt="Sam Kolder in Dubai" class="div-square is-work-img">
						</div>
						<div class="work_item-text is-right">
							<div class="overflow-hidden">
								<h2 class="heading-display" style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Photography</h2>
							</div>
							<div class="margin-top margin-xsmall overflow-hidden">
								<p class="work_item-par" style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Creative moments from Sam's life and work. Share your brand's story and mission from a new perspective.</p>
							</div>
						</div>
					</a></div>
			</div>
		</div>
	</div>
</section>

<section class="padding-xhuge" id="aboutus">
	<div class="p-0">
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
		<div class="p-10 aos-init aos-animate" data-aos="fade-up">
			<div class="equipment-list">
				<div class="equipment-item bg-secondary">
					<img src="img/equipment/e1.png" alt="">
					<span class="equipment-name">Other items</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pt-40 pb-40" id="services">
	<div class="page-padding">
		<div class="container-large">
			<div class="headline_component">
				<div class="subheading">Services</div>
				<div class="headline_divider"></div>
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
							<h1 class="contact-heading"><a href="mailto:services@iris-vn.com?subject=Contact for work!" class="link">services@iris-vn.com</a></h1>
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
										<div class="margin-top margin-small"><input type="submit" value="Submit" data-wait="Please wait..." class="button is-form-submit w-button"></div>
									</form>
								</div>
								<div class="form-overlay"></div>
								<div class="hide-tablet"></div>
								<img src="{{ asset('img/contact-form.jpg') }}" loading="lazy" sizes="(max-width: 991px) 100vw, 876.921875px" class="form-image hide-tablet" style="opacity: 75%;">
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
		console.log(slideIndex);

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
		if (n == -1) {
			n = slides.length - 1;
		}

		slides[n].classList.add("active");
	}
</script>
@stop