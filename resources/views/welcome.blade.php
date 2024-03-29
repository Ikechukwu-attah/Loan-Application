@extends('layouts.frontend')


@section('content')

<body class="animated-banner">
	<!-- Start Main Body -->
	<div class="main-body">
		<!-- Start Header -->
		
		<!-- End Header -->
        <!-- Header ends here -->


		<!-- Start Slider -->
		<div class="slider parallax overlay-bg" id="banner-animation">
			<div class="side-lines"> <span class="box"></span>
				<span class="text">Loanly</span>
				<span class="line"></span>
			</div>
			<div class="transform-center">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="banner-slider">
								<div class="slide-item">
									<div class="banner-text">
										<h1 class="text-custom-white fw-700">Dedicated To One Client At A Time</h1>
										<p class="text-custom-white">Professional service with personal attention</p> <a href="contact.html" class="btn-first btn-submit-fill">
                      Explore
                    </a>
									</div>
								</div>
								<div class="slide-item">
									<div class="banner-text">
										<h1 class="text-custom-white fw-700">Welcome to fast, easy funding</h1>
										<p class="text-custom-white">Professional service with personal attention</p> <a href="contact.html" class="btn-first btn-submit-fill">
                      Explore
                    </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Slider -->

        <!-- Slides ends here .... -->




		<!-- Start Intro -->
		<section class="genmed-intro">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-3  col-sm-6">
						<div class="intro-box bg-dark-brown mb-md-20" data-wow-duration="1s">
							<div class="intro-wrapper text-center"> <i class="flaticon-flag"></i>
								<h6 class="text-custom-white fw-700">CORPORATE LOAN</h6>
								<p class="text-custom-white">Create pages with ease with a help of the best page builder plugin.</p> <a href="service-detail.html" class="btn-first btn-submit fw-600">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-sm-6">
						<div class="intro-box bg-dark-brown mb-md-20">
							<div class="intro-wrapper text-center"> <i class="flaticon-flag"></i>
								<h6 class="text-custom-white fw-700">GET FUNDS IN SECOND</h6>
								<p class="text-custom-white">Create pages with ease with a help of the best page builder plugin.</p> <a href="service-detail.html" class="btn-first btn-submit fw-600">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-sm-6">
						<div class="intro-box bg-dark-brown mb-xs-20">
							<div class="intro-wrapper text-center"> <i class="flaticon-flag"></i>
								<h6 class="text-custom-white fw-700">REPAY AS YOU GET PAID</h6>
								<p class="text-custom-white">Create pages with ease with a help of the best page builder plugin.</p> <a href="service-detail.html" class="btn-first btn-submit fw-600">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="intro-box bg-dark-brown">
							<div class="intro-wrapper text-center"> <i class="flaticon-flag"></i>
								<h6 class="text-custom-white fw-700">ONE FIX FEE</h6>
								<p class="text-custom-white">Create pages with ease with a help of the best page builder plugin.</p> <a href="service-detail.html" class="btn-first btn-submit fw-600">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Intro -->
		<!-- Start About -->
		<!-- start aboutus-2 -->
		<section class="section-padding lw-about-section p-relative">
			<div class="side-lines right-side"> <span class="box"></span>
				<span class="text">Loanly</span>
				<span class="line"></span>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="ln-about-left-side p-relative full-height">
							<div class="first-img full-height">
								<img src="{{ asset('frontend/assets/images/homepage/about2.jpg') }}" class="image-fit" alt="img">
							</div>
							<div class="second-img">
								<img src="{{ asset('frontend/assets/images/homepage/about1.jpg') }}" class="image-fit" alt="img">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="lw-about-section-right">
							<h3 class="p-relative lw-about-right-heading">Not Fast Decision But Good Decision Fast.</h3>
							<div class="lw-about-right-content">
								<p>Our menu is a nod to
									<span class="text-gold">
                   						<strong>street food vendors</strong>
                 					</span>
	                 				who help their customers stay on-the-go by delivering quick tasty bites. We incorporated flavors from around the world to offer a unique menu featuring items like Banh Mi, a flavorful sandwich staple from Vietnam, and the classic American Burger.
	                 			</p>
								<div class="lw-about-right-list">
									<ul>
										<li> <i class="fas fa-check"></i>
											Fast Loan</li>
										<li> <i class="fas fa-check"></i>
											Less Fee </li>
										<li> <i class="fas fa-check"></i>
											Less Paperwork </li>
										<li> <i class="fas fa-check"></i>
											Less Interest </li>
									</ul>
								</div>
								<div class="lw-about-right-author">
									<div class="lw-about-signature">
										<h5>Hamza Shatela</h5>
										<p>Founder of LOANLY</p>
									</div>
									<div class="lw-about-sign-image">
										<img src="{{ ('frontend/assets/images/signature.png') }}" alt="sign">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End aboutus-2 -->
		<!-- Start Type of payment -->
		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 no-padding">
						<div class="ln-type-payment-tabs">
							<ul class="custom nav nav-tabs">
								<li class="nav-item">
									<a href="#home-loan" class="nav-link active" data-toggle="tab">
										Home Loan
									</a>
								</li>
								<li class="nav-item">
									<a href="#car-loan" class="nav-link" data-toggle="tab">
										Car Loan
									</a>
								</li>
								<li class="nav-item">
									<a href="#business-loan" class="nav-link" data-toggle="tab">
										Business Loan
									</a>
								</li>
								<li class="nav-item">
									<a href="#property-loan" class="nav-link" data-toggle="tab">
										Property Loan
									</a>
								</li>
								<li class="nav-item">
									<a href="#education-loan" class="nav-link" data-toggle="tab">
										Education Loan
									</a>
								</li>
								<li class="nav-item">
									<a href="#personal-loan" class="nav-link" data-toggle="tab">
										Personal Loan
									</a>
								</li>
							</ul>
							<div class="tab-content section-padding ln-type-payment">
								<div class="tab-pane container fade show active" id="home-loan">
									<div class="row">
										<div class="col-12">
											<div class="tab-inner">
												<div class="tab-heading section-padding-bottom">
													<h3 class="text-custom-white">Feel Free, Connect us.</h3>
													<p class="text-custom-white no-margin">Loan around the corner or around the country. Loanly lets you loan securely and with less worry thanks to purchase protection.*</p>
												</div>
												<div class="row">
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="{{ asset('frontend/assets/images/homepage/icon1.png') }}" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">All Solution Immidiate.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="{{ asset('frontend/assets/images/homepage/icon2.png') }}" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">
																	Get Funds in Account.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="{{ asset('frontend/assets/images/homepage/icon3.png') }}" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-12 text-center">
														<a href="contact.html" class="btn-first btn-submit-white fw-600 mb-xl-20">Contact Now</a>
														<a href="#" class="d-block text-white fw-600">*See eligibility and limitations.</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane container fade" id="car-loan">
									<div class="row">
										<div class="col-12">
											<div class="tab-inner">
												<div class="tab-heading section-padding-bottom">
													<h3 class="text-custom-white">Loan securely countrywide.</h3>
													<p class="text-custom-white no-margin">Loan around the corner or around the country. Loanly lets you loan securely and with less worry thanks to purchase protection.*</p>
												</div>
												<div class="row">
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="{{ asset('frontend/assets/images/homepage/icon3.png') }}" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="{{ asset('frontend/assets/images/homepage/icon2.png') }}" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="{{ asset('frontend/assets/images/homepage/icon1.png') }}" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-12 text-center">
														<a href="contact.html" class="btn-first btn-submit-white fw-600 mb-xl-20">Contact Now</a>
														<a href="#" class="d-block text-white fw-600">*See eligibility and limitations.</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane container fade" id="business-loan">
									<div class="row">
										<div class="col-12">
											<div class="tab-inner">
												<div class="tab-heading section-padding-bottom">
													<h3 class="text-custom-white">Loan securely countrywide.</h3>
													<p class="text-custom-white no-margin">Loan around the corner or around the country. Loanly lets you loan securely and with less worry thanks to purchase protection.*</p>
												</div>
												<div class="row">
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="{{ asset('frontend/assets/images/homepage/icon2.png') }}" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="assets/images/homepage/icon1.png" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="assets/images/homepage/icon3.png" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-12 text-center">
														<a href="contact.html" class="btn-first btn-submit-white fw-600 mb-xl-20">Contact Now</a>
														<a href="#" class="d-block text-white fw-600">*See eligibility and limitations.</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane container fade" id="property-loan">
									<div class="row">
										<div class="col-12">
											<div class="tab-inner">
												<div class="tab-heading section-padding-bottom">
													<h3 class="text-custom-white">Loan securely countrywide.</h3>
													<p class="text-custom-white no-margin">Loan around the corner or around the country. Loanly lets you loan securely and with less worry thanks to purchase protection.*</p>
												</div>
												<div class="row">
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="assets/images/homepage/icon3.png" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="assets/images/homepage/icon1.png" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="assets/images/homepage/icon2.png" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-12 text-center">
														<a href="contact.html" class="btn-first btn-submit-white fw-600 mb-xl-20">Contact Now</a>
														<a href="#" class="d-block text-white fw-600">*See eligibility and limitations.</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane container fade" id="education-loan">
									<div class="row">
										<div class="col-12">
											<div class="tab-inner">
												<div class="tab-heading section-padding-bottom">
													<h3 class="text-custom-white">Loan securely countrywide.</h3>
													<p class="text-custom-white no-margin">Loan around the corner or around the country. Loanly lets you loan securely and with less worry thanks to purchase protection.*</p>
												</div>
												<div class="row">
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="{{ asset('frontend/assets/images/homepage/icon2.png') }}" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="{{ asset('frontend/assets/images/homepage/icon1.png') }}" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="{{ asset('frontend/assets/images/homepage/icon3.png') }}" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-12 text-center">
														<a href="contact.html" class="btn-first btn-submit-white fw-600 mb-xl-20">Contact Now</a>
														<a href="#" class="d-block text-white fw-600">*See eligibility and limitations.</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane container fade" id="personal-loan">
									<div class="row">
										<div class="col-12">
											<div class="tab-inner">
												<div class="tab-heading section-padding-bottom">
													<h3 class="text-custom-white">Loan securely countrywide.</h3>
													<p class="text-custom-white no-margin">Loan around the corner or around the country. Loanly lets you loan securely and with less worry thanks to purchase protection.*</p>
												</div>
												<div class="row">
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="{{ asset('frontend/assets/images/homepage/icon3.png') }}" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="{{ asset('frontend/assets/images/homepage/icon2.png') }}" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6">
														<div class="ln-type-payment-box mb-xl-30">
															<div class="payment-icon mb-xl-20">
																<img src="{{ asset('frontend/assets/images/homepage/icon1.png') }}" class="img-fluid" alt="icon">
															</div>
															<div class="content-wrap">
																<h4 class="text-custom-white fw-600">Feel secure, start to finish.</h4>
																<p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
															</div>
														</div>
													</div>
													<div class="col-12 text-center">
														<a href="contact.html" class="btn-first btn-submit-white fw-600 mb-xl-20">Contact Now</a>
														<a href="#" class="d-block text-white fw-600">*See eligibility and limitations.</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Type of payment -->
		<!-- Start Main Services -->
		<section class="main-services section-padding p-relative">
			<div class="side-lines"> <span class="box"></span>
				<span class="text">Loanly</span>
				<span class="line"></span>
			</div>
			<div class="container">
				<div class="section-header">
					<div class="section-heading">
						<h3 class="text-custom-black fw-700">Our Services</h3>
						<div class="section-description">
							<p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
						</div>
					</div>
					<div class="section-btn"> <a href="service.html" class="btn-first btn-submit text-light-blue">View More</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="main-services-box p-relative mb-xl-30">
							<div class="main-service-wrapper padding-20">
								<div class="icon-box"> <i class="flaticon-family"></i>
								</div>
								<h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Home Loan</a></h5>
								<p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="main-services-box p-relative mb-xl-30">
							<div class="main-service-wrapper padding-20">
								<div class="icon-box"> <i class="flaticon-kidnapping"></i>
								</div>
								<h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Security Loan</a></h5>
								<p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="main-services-box p-relative mb-xl-30">
							<div class="main-service-wrapper padding-20">
								<div class="icon-box"> <i class="flaticon-hook"></i>
								</div>
								<h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Real Estate Loan</a></h5>
								<p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="main-services-box p-relative mb-xl-30">
							<div class="main-service-wrapper padding-20">
								<div class="icon-box"> <i class="flaticon-book"></i>
								</div>
								<h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Education Loan</a></h5>
								<p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="main-services-box p-relative mb-md-30">
							<div class="main-service-wrapper padding-20">
								<div class="icon-box"> <i class="flaticon-wounded"></i>
								</div>
								<h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Personal Loan</a></h5>
								<p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="main-services-box p-relative mb-md-30">
							<div class="main-service-wrapper padding-20">
								<div class="icon-box"> <i class="flaticon-auction"></i>
								</div>
								<h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Business Loan</a></h5>
								<p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="main-services-box p-relative mb-xs-30">
							<div class="main-service-wrapper padding-20">
								<div class="icon-box"> <i class="flaticon-LOANLY"></i>
								</div>
								<h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Corporate Loan</a></h5>
								<p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="main-services-box p-relative">
							<div class="main-service-wrapper padding-20">
								<div class="icon-box"> <i class="flaticon-balance-scale"></i>
								</div>
								<h5 class="fw-700"><a href="service-detail.html" class="text-custom-black">Property Loan</a></h5>
								<p class="text-light-white no-margin">Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Main Services -->
		<!-- start Loan Calculator -->
		<section class="section-padding pb-0 exp-cal2">
			<div class="container">
				<div class="section-header">
					<div class="section-heading">
						<h3 class="text-white fw-700">Loan Calculator</h3>
						<div class="section-description">
							<p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="offset-lg-2 col-lg-8 ">
						<div class="exp-cal2-loan">
							<div class="row">
								<div class="col-md-5">
									<p class="fw-600 text-center">Enter your loan amount</p>
									<div class="exp-cal2-input">
										<input placeholder="$0" maxlength="10" name="calculator" type="text" value="100" id="num1">
										<input placeholder="$0" maxlength="10" class="d-none" name="calculator" value="2" type="text" id="num2">
									</div>
									<p class="fw-600 mt-2 fs-13">please enter amount $100 to $1000</p>
								</div>
								<div class="col-md-2 align-self-center">
									<div class=exp-cal-icon>
										<button type="button" id="calculate"><i class="fa fa-angle-right"></i>
										</button>
									</div>
								</div>
								<div class="col-md-5">
									<p class="fw-600 text-center exp-cal2-content">You could be saving</p>
									<div class="ex-calculate-value">
										<input type="text" name="sum" id="sum" value="$50" readonly> <a href="#">How do we calculate this?</a>
									</div>
								</div>
								<div class="col-lg-12 text-center"> <a href="loan-step.html" class="btn-first btn-submit-fill ">Find my Rates</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Loan Calculator -->
		<!-- start lw-tab -->
		<div class="section-padding lw-tab-section p-relative">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="lw-mega-tab">
							<ul class="nav lw-nav-tabs">
								<li class="nav-item"> <a href="#LOANLY-1" class="nav-link active" data-toggle="tab">
                       Most Popular
                    </a>
								</li>
								<li class="nav-item"> <a href="#LOANLY-2" class="nav-link" data-toggle="tab">
                      Highest Bonus
                    </a>
								</li>
								<li class="nav-item"> <a href="#LOANLY-3" class="nav-link" data-toggle="tab">
                      Most Popular
                    </a>
								</li>
								<li class="nav-item"> <a href="#LOANLY-4" class="nav-link" data-toggle="tab">
                      Highest Bonus
                    </a>
								</li>
								<li class="nav-item"> <a href="#LOANLY-5" class="nav-link" data-toggle="tab">
                      Most Popular
                    </a>
								</li>
							</ul>
							<div class="tab-content lw-tab-content-wrapper">
								<div class="tab-pane container active" id="LOANLY-1">
									<div class="table-responsive">
										<table class="lw-tab-table">
											<tr class="lw-table-row-1">
												<th>Rank</th>
												<th>Agencies</th>
												<th>Bonus</th>
												<th>Features</th>
												<th>Free Plans</th>
												<th>Rating</th>
												<th>Get it</th>
											</tr>
											<tr>
												<td class="lw-table-data-1">1</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$100 Bonus</strong>
														</li>
														<li> <span>
                                100% up to $100
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$200 free Plan</li>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
                                with no Desopits
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">2</td>
												<td class="lw-table-data-2">
													<img src="assets/images/homepage/logo2.png" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$200 Bonus</strong>
														</li>
														<li> <span>
                                100% up to $100
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$100 free Plan</li>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
                                with no Desopits
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">3</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo3.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$500 Bonus</strong>
														</li>
														<li> <span>
                                100% up to $100
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$100 free Plan</li>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
                                with no Desopits
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">4</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo4.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$1900 Bonus</strong>
														</li>
														<li> <span>
                                100% up to $100
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$100 free Plan</li>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
                                with no Desopits
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">5</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo5.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$2200 Bonus</strong>
														</li>
														<li> <span>
                                100% up to $100
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$100 free Plan</li>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
                                with no Desopits
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">6</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo2.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$500 Bonus</strong>
														</li>
														<li> <span>
                                100% up to $100
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$100 free Plan</li>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
                                with no Desopits
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">7</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$600 Bonus</strong>
														</li>
														<li> <span>
                                100% up to $100
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$100 free Plan</li>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
                                with no Desopits
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">8</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$100 Bonus</strong>
														</li>
														<li> <span>
                                100% up to $100
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$100 free Plan</li>
														<li> <span>
                                <i class="fas fa-check"></i>
                              </span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
                                with no Desopits
                              </span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="tab-pane fade container" id="LOANLY-2">
									<div class="table-responsive">
										<table class="lw-tab-table">
											<tr class="lw-table-row-1">
												<th>Rank</th>
												<th>Agencies</th>
												<th>Bonus</th>
												<th>Features</th>
												<th>Free Plans</th>
												<th>Rating</th>
												<th>Get it</th>
											</tr>
											<tr>
												<td class="lw-table-data-1">1</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$100 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$200 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">2</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo2.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$200 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">3</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo3.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$500 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">4</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo4.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$1900 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">5</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo5.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$2200 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">6</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo2.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$500 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">7</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$600 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">8</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$100 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="tab-pane fade container" id="LOANLY-3">
									<div class="table-responsive">
										<table class="lw-tab-table">
											<tr class="lw-table-row-1">
												<th>Rank</th>
												<th>Agencies</th>
												<th>Bonus</th>
												<th>Features</th>
												<th>Free Plans</th>
												<th>Rating</th>
												<th>Get it</th>
											</tr>
											<tr>
												<td class="lw-table-data-1">1</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$100 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$200 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">2</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo2.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$200 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">3</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo3.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$500 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">4</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo4.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$1900 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">5</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo5.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$2200 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">6</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo2.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$500 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">7</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$600 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">8</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$100 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="tab-pane fade container" id="LOANLY-4">
									<div class="table-responsive">
										<table class="lw-tab-table">
											<tr class="lw-table-row-1">
												<th>Rank</th>
												<th>Agencies</th>
												<th>Bonus</th>
												<th>Features</th>
												<th>Free Plans</th>
												<th>Rating</th>
												<th>Get it</th>
											</tr>
											<tr>
												<td class="lw-table-data-1">1</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$100 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$200 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">2</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo2.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$200 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">3</td>
												<td class="lw-table-data-2">
													<img src="{{ ('assets/images/homepage/logo3.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$500 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">4</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo4.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$1900 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">5</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo5.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$2200 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">6</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo2.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$500 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">7</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$600 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">8</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$100 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="tab-pane fade container" id="LOANLY-5">
									<div class="table-responsive">
										<table class="lw-tab-table">
											<tr class="lw-table-row-1">
												<th>Rank</th>
												<th>Agencies</th>
												<th>Bonus</th>
												<th>Features</th>
												<th>Free Plans</th>
												<th>Rating</th>
												<th>Get it</th>
											</tr>
											<tr>
												<td class="lw-table-data-1">1</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$100 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$200 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">2</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo2.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$200 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">3</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo3.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$500 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">4</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo4.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$1900 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">5</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo5.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$2200 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">6</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo2.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$500 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">7</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$600 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
											<tr>
												<td class="lw-table-data-1">8</td>
												<td class="lw-table-data-2">
													<img src="{{ asset('frontend/assets/images/homepage/logo1.png') }}" alt="img">
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>$100 Bonus</strong>
														</li>
														<li> <span>
																100% up to $100
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-4">
													<ul>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$100 free Plan</li>
														<li> <span>
																<i class="fas fa-check"></i>
															</span>
															$220 Monthly Plan</li>
													</ul>
												</td>
												<td class="lw-table-data-3">
													<ul>
														<li> <strong>10 Free Plans</strong>
														</li>
														<li> <span>
																with no Desopits
															</span>
														</li>
													</ul>
												</td>
												<td class="lw-table-data-3 company-rating"> <span class="rating-number">5/5</span>
													<div class="ratings"> <span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
														<span class="text-custom-yellow"><i class="fas fa-star"></i></span>
													</div>
												</td>
												<td class="lw-table-data-3 choose-btn"> <a href="#" class="btn-first btn-submit-fill">Choose</a>
													<a href="#" class="Loan-content">T&C Apply</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End lw-tab -->
		<!-- Start section process-->
		<section class="section-padding exp-cal parallax ln-process">
			<div class="overlay overlay-bg-black"></div>
			<div class="container">
				<div class="section-header">
					<div class="section-heading">
						<h3 class="text-custom-white fw-700">Our Process</h3>
						<div class="section-description">
							<p class="text-custom-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="exp-cal-img mb-md-30">
							<img src="{{ asset('frontend/assets/images/homepage/icon1a.png') }}" class="mb-xl-20" alt="whyexp">
							<h4 class="text-custom-white fw-600">Get info online </h4>
							<p class="text-custom-white">Shop with less worry. We can cover a return if you need it.</p>
							<a href="contact.html" class="text-custom-white fw-500 fs-14">Learn more.</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="exp-cal-img mb-md-30">
							<img src="{{ asset('frontend/assets/images/homepage/icon1b.png') }}" class="mb-xl-20" alt="whyexp">
							<h4 class="text-custom-white fw-600">Apply Loan Online</h4>
							<p class="text-custom-white">Shop with less worry. We can cover a return if you need it.</p>
							<a href="contact.html" class="text-custom-white fw-500 fs-14">Learn more.</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="exp-cal-img mb-xs-30">
							<img src="{{ asset('frontend/assets/images/homepage/icon1c.png') }}" class="mb-xl-20" alt="whyexp">
							<h4 class="text-custom-white fw-600">Provide Details online</h4>
							<p class="text-custom-white">Shop with less worry. We can cover a return if you need it.</p>
							<a href="contact.html" class="text-custom-white fw-500 fs-14">Learn more.</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="exp-cal-img">
							<img src="{{ asset('frontend/assets/images/homepage/icon1d.png') }}" class="mb-xl-20" alt="whyexp">
							<h4 class="text-custom-white fw-600">Get Loan Immidiately</h4>
							<p class="text-custom-white">Shop with less worry. We can cover a return if you need it.</p>
							<a href="contact.html" class="text-custom-white fw-500 fs-14">Learn more.</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End section process-->
		<!-- Start why choose us -->
		<section class="why-choose-us-style-2 section-padding">
			<div class="container">
				<div class="section-header">
					<div class="section-heading">
						<h3 class="text-custom-black fw-700">Practice Area</h3>
						<div class="section-description">
							<p class="text-custom-black">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="square-tabs">
							<ul class="nav nav-tabs custom mb-xl-20">
								<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#teeth-whitening">Home Loan</a>
								</li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#cosmetic-dentistry">Car Loan</a>
								</li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#pediatric-dentistry">Real Estate Loan</a>
								</li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#preventive-dentistry">Education Loan</a>
								</li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#dental-crowns">Business Loan</a>
								</li>
							</ul>
							<div class="tab-content padding-20 bx-wrapper bg-custom-white">
								<div class="tab-pane container active" id="teeth-whitening">
									<div class="tab-inner">
										<div class="row">
											<div class="col-lg-6">
												<div class="img-sec mb-md-40">
													<img src="{{ asset('frontend/assets/images/whyus1.jpg') }}" class="full-width" alt="img">
												</div>
											</div>
											<div class="col-lg-6 align-self-center">
												<div class="content-box">
													<h4 class="text-custom-black">What does Home Loan Advisor do?</h4>
													<p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
													<div class="list">
														<div class="row no-gutters">
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Well Documented</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic1.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Top Agent </h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic2.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Best Effort</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic3.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Quick Charges</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic4.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane container fade" id="cosmetic-dentistry">
									<div class="tab-inner">
										<div class="row">
											<div class="col-lg-6">
												<div class="img-sec mb-md-40">
													<img src="{{ asset('frontend/assets/images/whyus2.jpg') }}" class="full-width" alt="img">
												</div>
											</div>
											<div class="col-lg-6 align-self-center">
												<div class="content-box">
													<h4 class="text-custom-black">What does Car Loan Advisordo?</h4>
													<p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
													<div class="list">
														<div class="row no-gutters">
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Well Documented</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic1.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Top Agent </h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic2.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Best Effort</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic3.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Quick Charges</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic4.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane container fade" id="pediatric-dentistry">
									<div class="tab-inner">
										<div class="row">
											<div class="col-lg-6">
												<div class="img-sec mb-md-40">
													<img src="{{ asset('frontend/assets/images/whyus3.jpg') }}" class="full-width" alt="img">
												</div>
											</div>
											<div class="col-lg-6 align-self-center">
												<div class="content-box">
													<h4 class="text-custom-black">What does Real State Advisor do?</h4>
													<p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
													<div class="list">
														<div class="row no-gutters">
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Well Documented</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic1.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Top Agent </h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic2.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Best Effort</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic3.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Quick Charges</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic4.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane container fade" id="preventive-dentistry">
									<div class="tab-inner">
										<div class="row">
											<div class="col-lg-6">
												<div class="img-sec mb-md-40">
													<img src="{{ asset('frontend/assets/images/whyus4.jpg') }}" class="full-width" alt="img">
												</div>
											</div>
											<div class="col-lg-6 align-self-center">
												<div class="content-box">
													<h4 class="text-custom-black">What does Business Loan Advisor do?</h4>
													<p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
													<div class="list">
														<div class="row no-gutters">
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Well Documented</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic1.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Top Agent </h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic2.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Best Effort</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic3.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Quick Charges</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic4.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane container fade" id="dental-crowns">
									<div class="tab-inner">
										<div class="row">
											<div class="col-lg-6">
												<div class="img-sec mb-md-40">
													<img src="{{ asset('frontend/assets/images/whyus2.jpg') }}" class="full-width" alt="img">
												</div>
											</div>
											<div class="col-lg-6 align-self-center">
												<div class="content-box">
													<h4 class="text-custom-black">What Business Loan Advisor do?</h4>
													<p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
													<div class="list">
														<div class="row no-gutters">
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Well Documented</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic1.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Top Agent </h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic2.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Best Effort</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic3.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="grid-box">
																	<div class="grid-box-inner">
																		<a href="#" class="d-block clearfix">
																			<h5 class="text-custom-black">Quick Charges</h5>
																			<div class="icon-box mb-xl-20"> <img src="{{ asset('frontend/assets/images/homepage/ic4.png') }}" alt="img"></div>
																			<p class="text-light-white no-margin">Lorem Ipsum is simply</p>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End why choose us -->

		<!-- Start Team Doctors -->
		<section class="section-padding bg-gradient doctors-team-style-2">
			<div class="container">
				<div class="section-header">
					<div class="section-heading">
						<h3 class="text-custom-white fw-700">Our Teams</h3>
						<div class="section-description">
							<p class="text-custom-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 no-padding">
						<div class="doctors-slider">
							<div class="slide-item col-12">
								<div class="team-block p-relative">
									<div class="inner-box">
										<div class="image animate-img">
											<img src="{{ asset('frontend/assets/images/doctors/doctor3.jpg') }}" alt="img" class="full-width">
											<div class="overlay-box">
												<div class="overlay-inner p-relative full-height">
													<ul class="team-social-box custom">
														<li class="youtube">
															<a href="#" class="fab fa-youtube fs-16"></a>
														</li>
														<li class="linkedin">
															<a href="#" class="fab fa-linkedin fs-16"></a>
														</li>
														<li class="facebook">
															<a href="#" class="fab fa-facebook-f fs-16"></a>
														</li>
														<li class="twitter">
															<a href="#" class="fab fa-twitter fs-16"></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="lower-content p-relative text-center">
											<h4><a href="team.html" class="text-custom-black fw-600 fs-20">Eachann Jhon</a></h4>
											<p class="designation text-light-white">Loan Advisor</p>
										</div>
									</div>
								</div>
							</div>
							<div class="slide-item col-12">
								<div class="team-block p-relative">
									<div class="inner-box">
										<div class="image animate-img">
											<img src="{{ asset('frontend/assets/images/doctors/doctor2.jpg') }}" alt="img" class="full-width">
											<div class="overlay-box">
												<div class="overlay-inner p-relative full-height">
													<ul class="team-social-box custom">
														<li class="youtube">
															<a href="#" class="fab fa-youtube fs-16"></a>
														</li>
														<li class="linkedin">
															<a href="#" class="fab fa-linkedin fs-16"></a>
														</li>
														<li class="facebook">
															<a href="#" class="fab fa-facebook-f fs-16"></a>
														</li>
														<li class="twitter">
															<a href="#" class="fab fa-twitter fs-16"></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="lower-content p-relative text-center">
											<h4><a href="team.html" class="text-custom-black fw-600 fs-20"> Addison Smith</a></h4>
											<p class="designation text-light-white">Business Loan Advisor</p>
										</div>
									</div>
								</div>
							</div>
							<div class="slide-item col-12">
								<div class="team-block p-relative">
									<div class="inner-box">
										<div class="image animate-img">
											<img src="{{ asset('frontend/assets/images/doctors/doctor3.jpg') }}" alt="img" class="full-width">
											<div class="overlay-box">
												<div class="overlay-inner p-relative full-height">
													<ul class="team-social-box custom">
														<li class="youtube">
															<a href="#" class="fab fa-youtube fs-16"></a>
														</li>
														<li class="linkedin">
															<a href="#" class="fab fa-linkedin fs-16"></a>
														</li>
														<li class="facebook">
															<a href="#" class="fab fa-facebook-f fs-16"></a>
														</li>
														<li class="twitter">
															<a href="#" class="fab fa-twitter fs-16"></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="lower-content p-relative text-center">
											<h4><a href="team.html" class="text-custom-black fw-600 fs-20"> Sarah Taylor</a></h4>
											<p class="designation text-light-white">Loan Advisor </p>
										</div>
									</div>
								</div>
							</div>
							<div class="slide-item col-12">
								<div class="team-block p-relative">
									<div class="inner-box">
										<div class="image animate-img">
											<img src="{{ asset('frontend/assets/images/doctors/doctor4.jpg') }}" alt="img" class="full-width">
											<div class="overlay-box">
												<div class="overlay-inner p-relative full-height">
													<ul class="team-social-box custom">
														<li class="youtube">
															<a href="#" class="fab fa-youtube fs-16"></a>
														</li>
														<li class="linkedin">
															<a href="#" class="fab fa-linkedin fs-16"></a>
														</li>
														<li class="facebook">
															<a href="#" class="fab fa-facebook-f fs-16"></a>
														</li>
														<li class="twitter">
															<a href="#" class="fab fa-twitter fs-16"></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="lower-content p-relative text-center">
											<h4><a href="team.html" class="text-custom-black fw-600 fs-20"> Aiken Ward</a></h4>
											<p class="designation text-light-white">Corporate Loan Advisor</p>
										</div>
									</div>
								</div>
							</div>
							<div class="slide-item col-12">
								<div class="team-block p-relative">
									<div class="inner-box">
										<div class="image animate-img">
											<img src="{{ asset('frontend/assets/images/doctors/doctor5.jpg') }}" alt="img" class="full-width">
											<div class="overlay-box">
												<div class="overlay-inner p-relative full-height">
													<ul class="team-social-box custom">
														<li class="youtube">
															<a href="#" class="fab fa-youtube fs-16"></a>
														</li>
														<li class="linkedin">
															<a href="#" class="fab fa-linkedin fs-16"></a>
														</li>
														<li class="facebook">
															<a href="#" class="fab fa-facebook-f fs-16"></a>
														</li>
														<li class="twitter">
															<a href="#" class="fab fa-twitter fs-16"></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="lower-content p-relative text-center">
											<h4><a href="team.html" class="text-custom-black fw-600 fs-20">Babatunde Jon</a></h4>
											<p class="designation text-light-white">Home Loan Advisor</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Team Doctors -->
		<!-- Start Blog -->
		<section class="section-padding our_articles">
			<div class="container">
				<div class="section-header">
					<div class="section-heading">
						<h3 class="text-custom-black fw-700">Our Blog</h3>
						<div class="section-description">
							<p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 no-padding">
						<div class="blog-slider">
							<article class="post col-12">
								<div class="single-blog">
									<div class="post-meta">
										<div class="post-date"><a href="blog-single.html" class="text-custom-white"> 4, Nov</a>
										</div>
									</div>
									<div class="blog-photo">
										<img src="{{ asset('frontend/assets/images/blog/blog1.jpg') }}" class="full-width" alt="#">
									</div>
									<div class="post-contnet">
										<h2 class="post-title text-custom-black">Is finding a bigger home till the goal?</h2>
										<p class="text-light-white">Lorem ipsum dolor sit in faucibus ipsum. Cras euismod faucibus sagittis.</p>
										<div class="post-author"> <span class="text-custom-black fw-500 fs-14">Post by <a href="blog-single.html" class="text-light-blue">Michael Dav</a></span>
										</div>
									</div>
									<div class="blog-overlay">
										<div class="right-text-effect post-content">
											<h2 class="post-title"><a href="blog-single.html" class="text-white">Is finding a bigger home till the goal?</a></h2>
											<p>Lorem ipsum dolor sit in faucibus ipsum. Cras euismod faucibus sagittis. Cras euismod faucibus sagittis.</p>
										</div>
										<div class="blog-read-more-icon">
											<div class="post-author"> <span class="text-custom-white fw-600 fs-14">Post by <a href="blog-single.html" class="text-white">Michael Dav</a></span>
											</div> <a href="blog-single.html" class="fw-500 fs-14">Read More</a>
										</div>
									</div>
								</div>
							</article>
							<article class="post col-12">
								<div class="single-blog">
									<div class="post-meta">
										<div class="post-date"><a href="blog-single.html" class="text-custom-white"> 29, June</a>
										</div>
									</div>
									<div class="blog-photo">
										<img src="{{ asset('frontend/assets/images/blog/blog2.jpg') }}" class="full-width" alt="#">

									</div>
									<div class="post-contnet">
										<h2 class="post-title text-custom-black">Choosing right education loan</h2>
										<p class="text-light-white">Lorem ipsum dolor sit in faucibus ipsum. Cras euismod faucibus sagittis.</p>
										<div class="post-author"> <span class="text-custom-black fw-500 fs-14">Post by <a href="blog-single.html" class="text-light-blue">Jhone Deo</a></span>
										</div>
									</div>
									<div class="blog-overlay">
										<div class="right-text-effect post-content">
											<h2 class="post-title"><a href="blog-single.html" class="text-white">Choosing right education loan</a></h2>
											<p>Lorem ipsum dolor sit in faucibus ipsum. Cras euismod faucibus sagittis. Cras euismod faucibus sagittis.</p>
										</div>
										<div class="blog-read-more-icon">
											<div class="post-author"> <span class="text-custom-white fw-600 fs-14">Post by <a href="blog-single.html" class="text-white">Jhone Deo</a></span>
											</div> <a href="blog-single.html" class="fw-500 fs-14">Read More</a>
										</div>
									</div>
								</div>
							</article>
							<article class="post col-12">
								<div class="single-blog">
									<div class="post-meta">
										<div class="post-date"><a href="blog-single.html" class="text-custom-white"> 30, May</a>
										</div>
									</div>
									<div class="blog-photo">
										<img src="{{ asset('frontend/assets/images/blog/blog3.jpg') }}" class="full-width" alt="#">
									</div>
									<div class="post-contnet">
										<h2 class="post-title text-custom-black">FAST APPROVAL  May For You If You Are Innocent</h2>
										<p class="text-light-white">Lorem ipsum dolor sit in faucibus ipsum. Cras euismod faucibus sagittis.</p>
										<div class="post-author"> <span class="text-custom-black fw-500 fs-14">Post by <a href="blog-single.html" class="text-light-blue">Linda Choi</a></span>
										</div>
									</div>
									<div class="blog-overlay">
										<div class="right-text-effect post-content">
											<h2 class="post-title"><a href="blog-single.html" class="text-white">FAST APPROVAL  May For You If You Are Innocent</a></h2>
											<p>Lorem ipsum dolor sit in faucibus ipsum. Cras euismod faucibus sagittis. Cras euismod faucibus sagittis.</p>
										</div>
										<div class="blog-read-more-icon">
											<div class="post-author"> <span class="text-custom-white fw-600 fs-14">Post by <a href="blog-single.html" class="text-white">Linda Choi</a></span>
											</div> <a href="blog-single.html" class="fw-500 fs-14">Read More</a>
										</div>
									</div>
								</div>
							</article>
							<article class="post col-12">
								<div class="single-blog">
									<div class="post-meta">
										<div class="post-date"><a href="blog-single.html" class="text-custom-white"> 13, Nov</a>
										</div>
									</div>
									<div class="blog-photo">
										<img src="{{ asset('frontend/assets/images/blog/blog3.jpg') }}" class="full-width" alt="#">

									</div>
									<div class="post-contnet">
										<h2 class="post-title text-custom-black">How Is Mediation Useful in Home Loan Cases?</h2>
										<p class="text-light-white">Lorem ipsum dolor sit in faucibus ipsum. Cras euismod faucibus sagittis.</p>
										<div class="post-author"> <span class="text-custom-black fw-500 fs-14">Post by <a href="blog-single.html" class="text-light-blue">Jhone Deo</a></span>
										</div>
									</div>
									<div class="blog-overlay">
										<div class="right-text-effect post-content">
											<h2 class="post-title"><a href="blog-single.html" class="text-white">How Is Mediation Useful in Home Loan Cases?</a></h2>
											<p>Lorem ipsum dolor sit in faucibus ipsum. Cras euismod faucibus sagittis. Cras euismod faucibus sagittis.</p>
										</div>
										<div class="blog-read-more-icon">
											<div class="post-author"> <span class="text-custom-white fw-600 fs-14">Post by <a href="blog-single.html" class="text-white">Jhone Deo</a></span>
											</div> <a href="blog-single.html" class="fw-500 fs-14">Read More</a>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog -->
		<!-- Start Apply Today/faqs -->
		<section class="book-appointment parallax section-padding" id="book-appointment">
			<div class="overlay overlay-bg-black"></div>
			<div class="pattern"></div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="appointment-sec">
							<div class="row no-gutters">
								<div class="col-lg-6 ">
									<div class="padding-40 full-height bg-white">
										<div class="align-self-center">
											<div class="section-heading">
												<h3 class="text-custom-blue fw-600 ">Get Loan Adviser</h3>
											</div>
											<p class="text-dark">Call us today, leave a message, email or find your nearest office below and We are here for you 24 hours , 7 days a week.</p>
											<h6 class="fs-20 mt-4 text-dark">We are here for you
                        24 hours a day, 7 days a week</h6>
											<div class="LOANLY-address">
												<p class="text-dark "><span class="fw-600">Address</span> : Newyork Mcf-d233</p>
												<p class="text-dark "><span class="fw-600">Email</span> : info@gmail.com</p>
											</div>
											<button type="submit" class="btn-first btn-submit-fill"><i class="fas fa-phone mr-2 fs-16"></i><span class="fs-16">1800-000-2390</span>
											</button>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="right-side full-height bg-border">
										<div class="section-heading">
											<h3 class="text-white fw-600">Make An Apply Today</h3>
										</div>
										<form class="form-style-2 form-style-3">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<div class="input-group"> <span class="input-group-preappend"><i class="fas fa-user"></i></span>
															<input type="text" name="#" class="form-control" placeholder="Full Name">
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<div class="input-group"> <span class="input-group-preappend"><i class="fas fa-envelope"></i></span>
															<input type="email" name="#" class="form-control" placeholder="Email Address">
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<div class="input-group"> <span class="input-group-preappend"><i class="fas fa-phone-alt"></i></span>
															<input type="text" name="#" class="form-control" placeholder="Phone Number">
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<button type="submit" class="btn-first btn-submit full-width">Book Apply Today</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Apply Today/faqs -->
		<!-- Start Why choose us / testimonials-->
		<section class="section-padding findrate-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="testimonials-box mb-md-80">
							<div class="section-header">
								<div class="section-heading">
									<h3 class="text-custom-black fw-700">Our Testimonials</h3>
								</div>
								<div class="section-description">
									<p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
								</div>
							</div>
							<div class="testimonials-wrapper">
								<div class="col-12">
									<div class="testimonial-nav row mb-xl-40">
										<div class="slide-item col-12">
											<div class="testimonials-author">
												<a href="#">
													<img src="{{ asset('frontend/assets/images/doctors/doctor6.jpg') }}" class="image-fit" alt="img">
												</a>
											</div>
										</div>
										<div class="slide-item col-12">
											<div class="testimonials-author">
												<a href="#">
													<img src="{{ asset('frontend/assets/images/doctors/doctor2.jpg') }}" class="image-fit" alt="img">
												</a>
											</div>
										</div>
										<div class="slide-item col-12">
											<div class="testimonials-author">
												<a href="#">
													<img src="{{ asset('frontend/assets/images/doctors/doctor3.jpg') }}" class="image-fit" alt="img">
												</a>
											</div>
										</div>
										<div class="slide-item col-12">
											<div class="testimonials-author">
												<a href="#">
													<img src="{{ asset('frontend/assets/images/doctors/doctor4.jpg') }}" class="image-fit" alt="img">
												</a>
											</div>
										</div>
										<div class="slide-item col-12">
											<div class="testimonials-author">
												<a href="#">
													<img src="{{ asset('frontend/assets/images/doctors/doctor5.jpg') }}" class="image-fit" alt="img">
												</a>
											</div>
										</div>
										<div class="slide-item col-12">
											<div class="testimonials-author">
												<a href="#">
													<img src="{{ asset('frontend/assets/images/doctors/doctor6.jpg') }}" class="image-fit" alt="img">
												</a>
											</div>
										</div>
									</div>
									<div class="testimonial-for row">
										<div class="slide-item col-12">
											<div class="testimonials-inner">
												<div class="testimonial-content">
													<h4 class="text-custom-blue fw-700 fs-20">Very satisfied!</h4>
													<p class="text-light-white mb-xl-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													<p class="text-custom-black fw-700"><strong>David Smith<br><span class="text-light-blue fw-500">Marketing manager</span></strong>
													</p>
												</div>
											</div>
										</div>
										<div class="slide-item col-12">
											<div class="testimonials-inner">
												<div class="testimonial-content">
													<h4 class="text-custom-blue fw-700 fs-20">Very satisfied!</h4>
													<p class="text-light-white mb-xl-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													<p class="text-custom-black fw-700"><strong>Michael Jhonson<br><span class="text-light-blue fw-500">Engineering Officer</span></strong>
													</p>
												</div>
											</div>
										</div>
										<div class="slide-item col-12">
											<div class="testimonials-inner">
												<div class="testimonial-content">
													<h4 class="text-custom-blue fw-700 fs-20">Very satisfied!</h4>
													<p class="text-light-white mb-xl-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													<p class="text-custom-black fw-700"><strong>Mark Lee<br><span class="text-light-blue fw-500">Contractor</span></strong>
													</p>
												</div>
											</div>
										</div>
										<div class="slide-item col-12">
											<div class="testimonials-inner">
												<div class="testimonial-content">
													<h4 class="text-custom-blue fw-700 fs-20">Very satisfied!</h4>
													<p class="text-light-white mb-xl-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													<p class="text-custom-black fw-700"><strong>James Brown<br><span class="text-light-blue fw-500">Web Developer</span></strong>
													</p>
												</div>
											</div>
										</div>
										<div class="slide-item col-12">
											<div class="testimonials-inner">
												<div class="testimonial-content">
													<h4 class="text-custom-blue fw-700 fs-20">Very satisfied!</h4>
													<p class="text-light-white mb-xl-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													<p class="text-custom-black fw-700"><strong>Maria Lopez<br><span class="text-light-blue fw-500">Sales Manager</span></strong>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="clients-box">
							<div class="section-header">
								<div class="section-heading">
									<h3 class="text-custom-black fw-700">Our Clients</h3>
								</div>
								<div class="section-description">
									<p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
								</div>
							</div>
							<div class="clients-wrapper">
								<div class="client-box">
									<div class="client-item">
										<a href="#">
											<img src="{{ asset('frontend/assets/images/clients/client1.jpg') }}" class="image-fit" alt="img">
										</a>
									</div>
								</div>
								<div class="client-box">
									<div class="client-item">
										<a href="#">
											<img src="{{ asset('frontend/assets/images/clients/client2.jpg') }}" class="image-fit" alt="img">
										</a>
									</div>
								</div>
								<div class="client-box">
									<div class="client-item">
										<a href="#">
											<img src="{{ asset('frontend/assets/images/clients/client3.jpg') }}" class="image-fit" alt="img">
										</a>
									</div>
								</div>
								<div class="client-box">
									<div class="client-item">
										<a href="#">
											<img src="{{ asset('frontend/assets/images/clients/client4.jpg') }}" class="image-fit" alt="img">
										</a>
									</div>
								</div>
								<div class="client-box">
									<div class="client-item">
										<a href="#">
											<img src="{{ asset('frontend/assets/images/clients/client5.jpg') }}" class="image-fit" alt="img">
										</a>
									</div>
								</div>
								<div class="client-box">
									<div class="client-item">
										<a href="#">
											<img src="{{ asset('frontend/assets/images/clients/client6.jpg') }}" class="image-fit" alt="img">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Why choose us / testimonials -->
		<!-- Start Faqs -->
		<section class="section-padding loan-faqs-sec bg-light-white findrate-top">
			<div class="container">
				<div class="row">
					<div class="offset-lg-2 col-lg-8">
						<div class="findratesec">
							<h3 class="text-custom-black">Compare personal loan rates in 2 minutes</h3>
							<div class="input-form-box">
								<form>
									<div class="input-group">
										<input type="email" name="#" class="form-control form-control-custom" placeholder="Enter amount ($1,000 to $100,000)">
										<div class="input-group-append">
											<button type="submit" class="btn-first btn-submit-fill">Find My Rate</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 align-self-center">
						<div class="section-header">
							<div class="section-heading">
								<h3 class="text-custom-black fw-700">Our FAQs</h3>
								<div class="section-description">
									<p class="text-light-white no-margin">Still have questions?
										<br>Our Client Success Team is always here to help</p>
								</div>
							</div>
						</div>
						<div class="loan-faqs-leftside mb-md-80">
							<div class="support-card mb-xl-20">
								<div class="support-user">
									<img src="{{ asset('frontend/assets/images/faq-user.png') }}" class="image-fit" alt="img">
								</div>
								<div class="links text-center mb-xl-20"> <a href="#">Support@domain.com</a>
									<a href="#">123-456-7890</a>
									<a href="#">Chat with us</a>
								</div>
								<div class="schdule">
									<ul class="custom">
										<li>Mon - Thurs <span class="text-light-white">6am – 6pm PT</span>
										</li>
										<li>Fri <span class="text-light-white">6am – 6pm PT</span>
										</li>
										<li>Sat - Sun <span class="text-light-white">7am – 4pm PT</span>
										</li>
									</ul>
								</div>
							</div> <a href="#" class="btn-first btn-submit-fill"> Chat With Us</a>
						</div>
					</div>
					<div class="col-xl-7 col-lg-6 align-self-center">
						<div id="accordion" class="faqs-accordion">
							<div class="card">
								<div class="card-header" id="headingOne">
									<button class="collapsebtn" data-toggle="collapse" data-target="#collapseOne">What is an unsecured personal loan?</button>
								</div>
								<div id="collapseOne" class="collapse show" data-parent="#accordion">
									<div class="card-body">
										<p class="text-light-white">Once approved for an unsecured loan, you'll make monthly payments to pay it back in full, plus interest. The loan terms and interest rate vary based on the lender and your credit.</p>
										<p class="text-light-white no-margin">Each lender has their own set requirements to qualify for a personal loan. A hard inquiry can impact your credit score by two to nine points, but typically by no more than five.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingTwo">
									<button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseTwo">What are the requirements to qualify?</button>
								</div>
								<div id="collapseTwo" class="collapse" data-parent="#accordion">
									<div class="card-body">
										<p class="text-light-white no-margin">Each lender has their own set requirements to qualify for a personal loan.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseThree">How much can I borrow with a personal loan?</button>
								</div>
								<div id="collapseThree" class="collapse" data-parent="#accordion">
									<div class="card-body">
										<p class="text-light-white">Many lenders also have minimum credit score requirements for credit approval.</p>
										<p class="text-light-white no-margin">The upper limits for personal loans vary by lender but typically fall in the $35,000 to $50,000 range.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingFour">
									<button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseFour">Will checking my rates affect my credit score?</button>
								</div>
								<div id="collapseFour" class="collapse" data-parent="#accordion">
									<div class="card-body">
										<p class="text-light-white">Using Loanly to check your rates doesn’t affect your credit score. Here’s how it works: Loanly's prequalification process uses a soft credit inquiry that you having to apply for a loan.</p>
										<p class="text-light-white no-margin">You'll be asked to authorize a hard credit inquiry when you apply for the loan. A hard inquiry can impact your credit score by two to nine points, but typically by no more than five.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingFive">
									<button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseFive">What rate should I expect and how can I get the best rate?</button>
								</div>
								<div id="collapseFive" class="collapse" data-parent="#accordion">
									<div class="card-body">
										<p class="text-light-white">Some lenders even offer an autopay discount if you authorize your monthly loan payments to be directly withdrawn from your bank account.</p>
										<p class="text-light-white no-margin">Qualifying for the lowest rates offered by a lender is dependent on your online application, credit approval and score, loan terms, and other factors.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingsix">
									<button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapsesix">How quickly will I receive my funds?</button>
								</div>
								<div id="collapsesix" class="collapse" data-parent="#accordion">
									<div class="card-body">
										<p class="text-light-white no-margin">Once you’ve completed the loan application process, most lenders can fund your loan by the next business day (though it can take up to about a week, depending on the lender and your application).</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingseven">
									<button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseseven">Can I use personal loans for debt consolidation?</button>
								</div>
								<div id="collapseseven" class="collapse" data-parent="#accordion">
									<div class="card-body">
										<p class="text-light-white">Yes. In fact, personal loans offer many debt consolidation benefits.</p>
										<p class="text-light-white no-margin">Many credit cards also carry variable rates, which can cause the amount you pay in interest to fluctuate as rates change.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingeight">
									<button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseeight">How else can I use a personal loan?</button>
								</div>
								<div id="collapseeight" class="collapse" data-parent="#accordion">
									<div class="card-body">
										<p class="text-light-white no-margin">You’re typically not limited in how you can use your personal loan funds. Personal loans can be used to pay down high-interest credit card debt, meet unexpected needs like medical bills, take care of a major purchase like a new refrigerator, or fund home improvement projects. However, some lenders only provide loans for specific purposes (and some rates vary based on what you use it for), so you will be asked for the purpose of your loan.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Faqs -->
		<!--LOANLY-advertisement-->
		<section class="section-padding LOANLY-advertisement parallax">
			<div class="row">
				<div class="col-12">
					<div class="advertisement-text">
						<p class=" text-white fs-20">Fast Approval - Less Fee</p>
						<h3 class="text-white">We are wit you every step .</h3>
						<div class="btn-group">
							<a href="service.html" class="btn-first btn-submit fw-600 mb-xs-20">Our Services</a>
							<a href="contact.html" class="btn-first btn-submit-fill fw-600 mb-xs-20">Start Now</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- LOANLY-advertisement end -->


@endsection