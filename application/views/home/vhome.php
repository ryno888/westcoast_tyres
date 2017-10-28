<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$base_url = CI_BASE_URL;
?>
   <!DOCTYPE html>

   
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="<?php echo "{$base_url}assets/img/1920x1080/01.jpg" ?>" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">Dunlop Tyres</h1>
                                <p class="color-white">Dunlop is one of the most iconic and recognisable tyre brands in the world, <br>with an unbroken history going back over 120 years.</p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Details</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="<?php echo "{$base_url}assets/img/1920x1080/02.jpg" ?>" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
							
                            <div class="margin-b-40">
                                <h1 class="carousel-title">Continental Tyres</h1>
                                <p class="color-white">The fastest way to the perfect tire.</p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Take a Tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->
		<div class="sidebar-wrapper">
			<div class="sidebar-btn" data-toggle="collapse" data-target="#sidebar">Contact Us</div>
			<div class="sidebar collapse width" id="sidebar">
				<div class="container-fluid hidden sidebar-form-wrapper">
					<div class="col-md-12">
						<div class="form-area">  
							<form role="form" id="contactUs" name="contactUs">
								<h3 class="marginBottom20 marginTop10 textCenter" >Contact Us</h3>
								<div class="form-group">
									<input type="text" class="input-sm form-control contactField " id="per_firstname" name="per_firstname" placeholder="Firstname" required>
								</div>
								<div class="form-group">
									<input type="text" class="input-sm form-control contactField" id="per_lastname" name="per_lastname" placeholder="Surname" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control input-sm contactField" id="per_email" name="per_email" placeholder="Email" required>
								</div>
								<div class="form-group">
									<textarea class="form-control contactField" type="textarea contactField" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
								</div>

								<button type="button" class="btn btn-primary pull-right formSubmit" target='contactUs'>Submit Form</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		
        <!--========== PAGE LAYOUT ==========-->

		<!-- Services -->
        <div id="services">
			<div class="content-lg container">
				<div class="row margin-b-40">
					<div class="col-sm-6">
						<h2>Services</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
					</div>
				</div>
				<!--// end row -->
				<div class="row row-space-1 margin-b-2">
					<!--service 1-->
					<div class="work work-popup-trigger pointer">
						<div class="col-sm-4 sm-margin-b-2">
							<div class="service" data-height="height">
								<div class="service-element">
									<i class="fa fa-balance-scale fa-service" aria-hidden="true"></i>
								</div>
								<div class="service-info">
									<h3>Wheel Balancing</h3>
									<p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
								</div>
							</div>
						</div>
						<div class="work-popup-overlay">
							<div class="work-popup-content">
								<a href="javascript:void(0);" class="work-popup-close"><i class="fa fa-times font20" aria-hidden="true"></i></a>
								<div class="">
									<h3 class="margin-b-5">Wheel Balancing</h3>
									<span>Information</span>
								</div>
								<div class="row">
									<div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
										<div class="margin-t-10 sm-margin-t-0">
											<p>When the wheel rotates, asymmetries of mass may cause it to hop or wobble, which can cause ride disturbances, usually vertical and lateral vibrations. It can also result in a wobbling of the steering wheel or of the entire vehicle. The ride disturbance, due to unbalance, usually increases with speed. Vehicle suspensions can become excited by unbalance forces when the speed of the wheel reaches a point that its rotating frequency equals the suspensionâ€™s resonant frequency.</p>
											<ul class="list-inline work-popup-tag">
												<li class="work-popup-tag-item"><a class="work-popup-tag-link work-popup-close colorOrange font14 " href="#contact">For more information, contact one of our friendly specialist.</a></li>
											</ul>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="margin-t-10 sm-margin-t-0">
											<p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
											<p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
											<p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
											<p class="margin-b-5"><strong>Client:</strong> FairTech</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--service 2-->
					<div class="work work-popup-trigger pointer">
						<div class="col-sm-4 sm-margin-b-2">
							<div class="service" data-height="height">
								<div class="service-element">
									<i class="fa fa-refresh fa-service" aria-hidden="true"></i>
								</div>
								<div class="service-info">
									<h3>Tyre Rotation</h3>
									<p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
								</div>
							</div>
						</div>
						<div class="work-popup-overlay">
							<div class="work-popup-content">
								<a href="javascript:void(0);" class="work-popup-close"><i class="fa fa-times font20" aria-hidden="true"></i></a>
								<div class="">
									<h3 class="margin-b-5">Wheel Balancing</h3>
									<span>Information</span>
								</div>
								<div class="row">
									<div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
										<div class="margin-t-10 sm-margin-t-0">
											<p>When the wheel rotates, asymmetries of mass may cause it to hop or wobble, which can cause ride disturbances, usually vertical and lateral vibrations. It can also result in a wobbling of the steering wheel or of the entire vehicle. The ride disturbance, due to unbalance, usually increases with speed. Vehicle suspensions can become excited by unbalance forces when the speed of the wheel reaches a point that its rotating frequency equals the suspensionâ€™s resonant frequency.</p>
											<ul class="list-inline work-popup-tag">
												<li class="work-popup-tag-item"><a class="work-popup-tag-link work-popup-close colorOrange font14 " href="#contact">For more information, contact one of our friendly specialist.</a></li>
											</ul>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="margin-t-10 sm-margin-t-0">
											<p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
											<p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
											<p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
											<p class="margin-b-5"><strong>Client:</strong> FairTech</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--service 3-->
					<div class="work work-popup-trigger pointer">
						<div class="col-sm-4 sm-margin-b-2">
							<div class="service" data-height="height">
								<div class="service-element">
									<i class="fa fa-wrench fa-service" aria-hidden="true"></i>
								</div>
								<div class="service-info">
									<h3>Punctures & Repairs</h3>
									<p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
								</div>
							</div>
						</div>
						<div class="work-popup-overlay">
							<div class="work-popup-content">
								<a href="javascript:void(0);" class="work-popup-close"><i class="fa fa-times font20" aria-hidden="true"></i></a>
								<div class="">
									<h3 class="margin-b-5">Wheel Balancing</h3>
									<span>Information</span>
								</div>
								<div class="row">
									<div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
										<div class="margin-t-10 sm-margin-t-0">
											<p>When the wheel rotates, asymmetries of mass may cause it to hop or wobble, which can cause ride disturbances, usually vertical and lateral vibrations. It can also result in a wobbling of the steering wheel or of the entire vehicle. The ride disturbance, due to unbalance, usually increases with speed. Vehicle suspensions can become excited by unbalance forces when the speed of the wheel reaches a point that its rotating frequency equals the suspensionâ€™s resonant frequency.</p>
											<ul class="list-inline work-popup-tag">
												<li class="work-popup-tag-item"><a class="work-popup-tag-link work-popup-close colorOrange font14 " href="#contact">For more information, contact one of our friendly specialist.</a></li>
											</ul>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="margin-t-10 sm-margin-t-0">
											<p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
											<p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
											<p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
											<p class="margin-b-5"><strong>Client:</strong> FairTech</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--// end row -->

				<div class="row row-space-1">
					<!--service 1-->
					<div class="work work-popup-trigger pointer">
						<div class="col-sm-4 sm-margin-b-2">
							<div class="service" data-height="height">
								<div class="service-element">
									<i class="fa fa-download fa-service" aria-hidden="true"></i>
								</div>
								<div class="service-info">
									<h3>Lowering Kits</h3>
									<p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
								</div>
							</div>
						</div>
						<div class="work-popup-overlay">
							<div class="work-popup-content">
								<a href="javascript:void(0);" class="work-popup-close"><i class="fa fa-times font20" aria-hidden="true"></i></a>
								<div class="">
									<h3 class="margin-b-5">Wheel Balancing</h3>
									<span>Information</span>
								</div>
								<div class="row">
									<div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
										<div class="margin-t-10 sm-margin-t-0">
											<p>When the wheel rotates, asymmetries of mass may cause it to hop or wobble, which can cause ride disturbances, usually vertical and lateral vibrations. It can also result in a wobbling of the steering wheel or of the entire vehicle. The ride disturbance, due to unbalance, usually increases with speed. Vehicle suspensions can become excited by unbalance forces when the speed of the wheel reaches a point that its rotating frequency equals the suspensionâ€™s resonant frequency.</p>
											<ul class="list-inline work-popup-tag">
												<li class="work-popup-tag-item"><a class="work-popup-tag-link work-popup-close colorOrange font14 " href="#contact">For more information, contact one of our friendly specialist.</a></li>
											</ul>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="margin-t-10 sm-margin-t-0">
											<p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
											<p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
											<p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
											<p class="margin-b-5"><strong>Client:</strong> FairTech</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--service 2-->
					<div class="work work-popup-trigger pointer">
						<div class="col-sm-4 sm-margin-b-2">
							<div class="service" data-height="height">
								<div class="service-element">
									<i class="fa fa-arrows-v fa-service" aria-hidden="true"></i>
								</div>
								<div class="service-info">
									<h3>Shocks</h3>
									<p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
								</div>
							</div>
						</div>
						<div class="work-popup-overlay">
							<div class="work-popup-content">
								<a href="javascript:void(0);" class="work-popup-close"><i class="fa fa-times font20" aria-hidden="true"></i></a>
								<div class="">
									<h3 class="margin-b-5">Wheel Balancing</h3>
									<span>Information</span>
								</div>
								<div class="row">
									<div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
										<div class="margin-t-10 sm-margin-t-0">
											<p>When the wheel rotates, asymmetries of mass may cause it to hop or wobble, which can cause ride disturbances, usually vertical and lateral vibrations. It can also result in a wobbling of the steering wheel or of the entire vehicle. The ride disturbance, due to unbalance, usually increases with speed. Vehicle suspensions can become excited by unbalance forces when the speed of the wheel reaches a point that its rotating frequency equals the suspensionâ€™s resonant frequency.</p>
											<ul class="list-inline work-popup-tag">
												<li class="work-popup-tag-item"><a class="work-popup-tag-link work-popup-close colorOrange font14 " href="#contact">For more information, contact one of our friendly specialist.</a></li>
											</ul>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="margin-t-10 sm-margin-t-0">
											<p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
											<p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
											<p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
											<p class="margin-b-5"><strong>Client:</strong> FairTech</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--service 3-->
					<div class="work work-popup-trigger pointer">
						<div class="col-sm-4 sm-margin-b-2">
							<div class="service" data-height="height">
								<div class="service-element">
									<i class="fa fa-gear fa-service" aria-hidden="true"></i>
								</div>
								<div class="service-info">
									<h3>Mag rims</h3>
									<p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
								</div>
							</div>
						</div>
						<div class="work-popup-overlay">
							<div class="work-popup-content">
								<a href="javascript:void(0);" class="work-popup-close"><i class="fa fa-times font20" aria-hidden="true"></i></a>
								<div class="">
									<h3 class="margin-b-5">Wheel Balancing</h3>
									<span>Information</span>
								</div>
								<div class="row">
									<div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
										<div class="margin-t-10 sm-margin-t-0">
											<p>When the wheel rotates, asymmetries of mass may cause it to hop or wobble, which can cause ride disturbances, usually vertical and lateral vibrations. It can also result in a wobbling of the steering wheel or of the entire vehicle. The ride disturbance, due to unbalance, usually increases with speed. Vehicle suspensions can become excited by unbalance forces when the speed of the wheel reaches a point that its rotating frequency equals the suspensionâ€™s resonant frequency.</p>
											<ul class="list-inline work-popup-tag">
												<li class="work-popup-tag-item"><a class="work-popup-tag-link work-popup-close colorOrange font14 " href="#contact">For more information, contact one of our friendly specialist.</a></li>
											</ul>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="margin-t-10 sm-margin-t-0">
											<p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
											<p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
											<p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
											<p class="margin-b-5"><strong>Client:</strong> FairTech</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--// end row -->
			</div>
        </div>
        <!-- End Service -->

        <!-- Work -->
        <div id="products">
			<div class="bg-color-sky-light" data-auto-height="true">
				<div class="section-seperator">
					<div class="content-md container">
						<div class="row margin-b-40">
							<div class="col-sm-10">
								<h2>Featured Products</h2>
								<p>Keep an eye out for our great specials on tyres right here, or head on over to your friendly Westcoast Tyres Dealer where our great advice will always get you a great price.</p>
							</div>
						</div>
						<!--// end row -->

						<!-- Masonry Grid -->
						<div class="masonry-grid row">


							<div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-30">
								<!-- Work -->
								<div class="work work-popup-trigger">
									<div class="work-overlay">
										<img class="full-width img-responsive featuredProduct" src="<?php echo "{$base_url}assets/img/397x300/bridgestone.png" ?>" alt="bridgestone">
									</div>
									<div class="work-popup-overlay">
										<div class="work-popup-content">
											<a href="javascript:void(0);" class="work-popup-close"><i class="fa fa-times font20" aria-hidden="true"></i></a>
											<div class="">
												<h3 class="margin-b-5">Bridgestone</h3>
												<span class="colorOrange">Your Journey, Our Passion</span>
											</div>
											<div class="row">
												<div class="col-sm-6 work-popup-content-divider sm-margin-b-20">
													<div class="margin-t-10 sm-margin-t-0">
														<p>At  Bridgestone, their dream is to become a truly global enterprise and to establish the Bridgestone brand as the  undisputed world No. 1 brand  in both name and substance. Across the globe, their entire team is focused on achieving this goal.</p>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="margin-t-10 sm-margin-t-0">
														<p class="margin-b-5"><strong class="colorYellow">Taxi- Commercial Tyre- LDV </strong> from:R 1335.00</p>
														<p class="margin-b-5"><strong class="colorYellow">Lt truck and commercial tyre</strong> from:R 1286.00</p>
														<p class="margin-b-5"><strong class="colorYellow">4x4 SUV & Lt truck</strong> from:R 4737.00</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End Work -->
							</div>
							<div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-30">
								<!-- Work -->
								<div class="work work-popup-trigger">
									<div class="work-overlay">
										<img class="full-width img-responsive featuredProduct" src="<?php echo "{$base_url}assets/img/397x300/dunlop.png" ?>" alt="Portfolio Image">
									</div>
									<div class="work-popup-overlay">
										<div class="work-popup-content">
											<a href="javascript:void(0);" class="work-popup-close"><i class="fa fa-times font20" aria-hidden="true"></i></a>
											<div class="">
												<h3 class="margin-b-5">Bridgestone</h3>
												<span class="colorOrange">Your Journey, Our Passion</span>
											</div>
											<div class="row">
												<div class="col-sm-6 work-popup-content-divider sm-margin-b-20">
													<div class="margin-t-10 sm-margin-t-0">
														<p>At  Bridgestone, their dream is to become a truly global enterprise and to establish the Bridgestone brand as the  undisputed world No. 1 brand  in both name and substance. Across the globe, their entire team is focused on achieving this goal.</p>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="margin-t-10 sm-margin-t-0">
														<p class="margin-b-5"><strong class="colorYellow">Taxi- Commercial Tyre- LDV </strong> from:R 1335.00</p>
														<p class="margin-b-5"><strong class="colorYellow">Lt truck and commercial tyre</strong> from:R 1286.00</p>
														<p class="margin-b-5"><strong class="colorYellow">4x4 SUV & Lt truck</strong> from:R 4737.00</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End Work -->
							</div>
							<div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
								<!-- Work -->
								<div class="work work-popup-trigger">
									<div class="work-overlay">
										<img class="full-width img-responsive featuredProduct" src="<?php echo "{$base_url}assets/img/397x300/firestone.png" ?>" alt="Portfolio Image">
									</div>
									<div class="work-popup-overlay">
										<div class="work-popup-content">
											<a href="javascript:void(0);" class="work-popup-close"><i class="fa fa-times font20" aria-hidden="true"></i></a>
											<div class="">
												<h3 class="margin-b-5">Bridgestone</h3>
												<span class="colorOrange">Your Journey, Our Passion</span>
											</div>
											<div class="row">
												<div class="col-sm-6 work-popup-content-divider sm-margin-b-20">
													<div class="margin-t-10 sm-margin-t-0">
														<p>At  Bridgestone, their dream is to become a truly global enterprise and to establish the Bridgestone brand as the  undisputed world No. 1 brand  in both name and substance. Across the globe, their entire team is focused on achieving this goal.</p>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="margin-t-10 sm-margin-t-0">
														<p class="margin-b-5"><strong class="colorYellow">Taxi- Commercial Tyre- LDV </strong> from:R 1335.00</p>
														<p class="margin-b-5"><strong class="colorYellow">Lt truck and commercial tyre</strong> from:R 1286.00</p>
														<p class="margin-b-5"><strong class="colorYellow">4x4 SUV & Lt truck</strong> from:R 4737.00</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End Work -->
							</div>
							<div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
							<div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-30">
								 <!-- Work -->
								<div class="work work-popup-trigger">
									<div class="work-overlay">
										<img class="full-width img-responsive featuredProduct" src="<?php echo "{$base_url}assets/img/397x300/goodyear.png" ?>" alt="Portfolio Image">
									</div>
									<div class="work-popup-overlay">
										<div class="work-popup-content">
											<a href="javascript:void(0);" class="work-popup-close"><i class="fa fa-times font20" aria-hidden="true"></i></a>
											<div class="">
												<h3 class="margin-b-5">Bridgestone</h3>
												<span class="colorOrange">Your Journey, Our Passion</span>
											</div>
											<div class="row">
												<div class="col-sm-6 work-popup-content-divider sm-margin-b-20">
													<div class="margin-t-10 sm-margin-t-0">
														<p>At  Bridgestone, their dream is to become a truly global enterprise and to establish the Bridgestone brand as the  undisputed world No. 1 brand  in both name and substance. Across the globe, their entire team is focused on achieving this goal.</p>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="margin-t-10 sm-margin-t-0">
														<p class="margin-b-5"><strong class="colorYellow">Taxi- Commercial Tyre- LDV </strong> from:R 1335.00</p>
														<p class="margin-b-5"><strong class="colorYellow">Lt truck and commercial tyre</strong> from:R 1286.00</p>
														<p class="margin-b-5"><strong class="colorYellow">4x4 SUV & Lt truck</strong> from:R 4737.00</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End Work -->
							</div>
							<div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-30">
								 <!-- Work -->
								<div class="work work-popup-trigger">
									<div class="work-overlay">
										<img class="full-width img-responsive featuredProduct" src="<?php echo "{$base_url}assets/img/397x300/pirelli.png" ?>" alt="Portfolio Image">
									</div>
									<div class="work-popup-overlay">
										<div class="work-popup-content">
											<a href="javascript:void(0);" class="work-popup-close"><i class="fa fa-times font20" aria-hidden="true"></i></a>
											<div class="">
												<h3 class="margin-b-5">Bridgestone</h3>
												<span class="colorOrange">Your Journey, Our Passion</span>
											</div>
											<div class="row">
												<div class="col-sm-6 work-popup-content-divider sm-margin-b-20">
													<div class="margin-t-10 sm-margin-t-0">
														<p>At  Bridgestone, their dream is to become a truly global enterprise and to establish the Bridgestone brand as the  undisputed world No. 1 brand  in both name and substance. Across the globe, their entire team is focused on achieving this goal.</p>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="margin-t-10 sm-margin-t-0">
														<p class="margin-b-5"><strong class="colorYellow">Taxi- Commercial Tyre- LDV </strong> from:R 1335.00</p>
														<p class="margin-b-5"><strong class="colorYellow">Lt truck and commercial tyre</strong> from:R 1286.00</p>
														<p class="margin-b-5"><strong class="colorYellow">4x4 SUV & Lt truck</strong> from:R 4737.00</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End Work -->
							</div>
							<div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-30">
								 <!-- Work -->
								<div class="work work-popup-trigger">
									<div class="work-overlay">
										<img class="full-width img-responsive featuredProduct" src="<?php echo "{$base_url}assets/img/397x300/yokohama.png" ?>" alt="Portfolio Image">
									</div>
									<div class="work-popup-overlay">
										<div class="work-popup-content">
											<a href="javascript:void(0);" class="work-popup-close"><i class="fa fa-times font20" aria-hidden="true"></i></a>
											<div class="">
												<h3 class="margin-b-5">Bridgestone</h3>
												<span class="colorOrange">Your Journey, Our Passion</span>
											</div>
											<div class="row">
												<div class="col-sm-6 work-popup-content-divider sm-margin-b-20">
													<div class="margin-t-10 sm-margin-t-0">
														<p>At  Bridgestone, their dream is to become a truly global enterprise and to establish the Bridgestone brand as the  undisputed world No. 1 brand  in both name and substance. Across the globe, their entire team is focused on achieving this goal.</p>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="margin-t-10 sm-margin-t-0">
														<p class="margin-b-5"><strong class="colorYellow">Taxi- Commercial Tyre- LDV </strong> from:R 1335.00</p>
														<p class="margin-b-5"><strong class="colorYellow">Lt truck and commercial tyre</strong> from:R 1286.00</p>
														<p class="margin-b-5"><strong class="colorYellow">4x4 SUV & Lt truck</strong> from:R 4737.00</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End Work -->
							</div>
						</div>
						<!-- End Masonry Grid -->
					</div>
				</div>
			</div>
            
            <!-- Clients -->
            <div class="content-md container">
				<div class="row margin-b-40">
					<div class="col-sm-6">
						<h2>Suppliers</h2>
						<p>We stock a wide range of the best passenger, SUV, 4x4 and commercial tyres to suit your budget and needs. Our tyre brands include the following:</p>
					</div>
				</div>
                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
					<?php
					
						$service_arr = [];
						
						$service_arr[] = [
							"image_path" => "{$base_url}assets/img/clients/01.png",
							"name" => "Pirelli",
							"url" => "https://www.pirelli.com/tyres/en-za/car/homepage",
						];
						$service_arr[] = [
							"image_path" => "{$base_url}assets/img/clients/02.png",
							"name" => "Michelin",
							"url" => "http://www.michelin.co.za/ZA/en/homepage.html",
						];
						$service_arr[] = [
							"image_path" => "{$base_url}assets/img/clients/03.png",
							"name" => "Goodyear",
							"url" => "https://www.goodyear.eu/en_za/consumer.html",
						];
						$service_arr[] = [
							"image_path" => "{$base_url}assets/img/clients/04.png",
							"name" => "Firestone",
							"url" => "http://www.firestone.com/",
						];
						$service_arr[] = [
							"image_path" => "{$base_url}assets/img/clients/05.png",
							"name" => "Falken",
							"url" => "http://www.falken.co.za/",
						];
						$service_arr[] = [
							"image_path" => "{$base_url}assets/img/clients/06.png",
							"name" => "Dunlop",
							"url" => "http://www.dunloptyres.co.za/",
						];
						$service_arr[] = [
							"image_path" => "{$base_url}assets/img/clients/07.png",
							"name" => "Continental",
							"url" => "http://www.continental-tyres.co.za/car",
						];
						$service_arr[] = [
							"image_path" => "{$base_url}assets/img/clients/08.png",
							"name" => "Bridgestone",
							"url" => "https://www.bridgestone.co.za/",
						];
						$service_arr[] = [
							"image_path" => "{$base_url}assets/img/clients/09.png",
							"name" => "Coopertyres",
							"url" => "https://www.coopertyres.co.za/Default",
						];
						$service_arr[] = [
							"image_path" => "{$base_url}assets/img/clients/10.png",
							"name" => "Mickey Thompson",
							"url" => "http://www.mickeythompson.co.za/",
						];
						$service_arr[] = [
							"image_path" => "{$base_url}assets/img/clients/11.png",
							"name" => "BF Goodrich",
							"url" => "http://www.bfgoodrich.co.za/",
						];
						$service_arr[] = [
							"image_path" => "{$base_url}assets/img/clients/12.png",
							"name" => "Yokohama",
							"url" => "https://www.yokohama.co.za/",
						];
					
						$html = [];
						$html[] = "<div class='swiper-wrapper'>";
						foreach ($service_arr as $key => $data) {
							$html[] = "
								<div class='swiper-slide'>
									<img class='swiper-clients-img' onclick='window.open(\"{$data['url']}\", \"_blank\");' src='{$data['image_path']}' alt='{$data['name']}'>
								</div>
								";
						}
						$html[] = "</div>";
						
						echo implode(" ", $html);
						
					?>
                    <!-- End Swiper Wrapper -->
                </div>
                <!-- End Swiper Clients -->
            </div>
            <!-- End Clients -->
        </div>
        <!-- End Work -->

		<!-- About -->
        <div id="about">
			<div class="bg-color-sky-light" data-auto-height="true">
				<div class="content-lg container">
					<!-- Masonry Grid -->
					<div class="masonry-grid row">
						<div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
						<div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 sm-margin-b-30">
							<div class="margin-b-10">
								<h2>Alan van der Berg</h2>
								<p>Operations Manager</p>
								<ul class="list-unstyled contact-list">
									<li><i class="margin-r-10 color-base icon-call-out"></i> +41 60 66 555 44 33</li>
									<li><i class="margin-r-10 color-base icon-envelope"></i> hr@flameonepage.com</li>
								</ul>
							</div>
							<img class="half-width img-responsive wow fadeInLeft" src="<?php echo "{$base_url}assets/img/500x500/placeholder.png" ?>" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".2s">
						</div>
						<div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
							<div class="margin-b-10">
								<h2>Johan Du Toit</h2>
								<p>Operations Coordinator</p>  
								<ul class="list-unstyled contact-list">
									<li><i class="margin-r-10 color-base icon-call-out"></i> +41 60 66 555 44 33</li>
									<li><i class="margin-r-10 color-base icon-envelope"></i> hr@flameonepage.com</li>
								</ul>
							</div>
							 <img class="half-width img-responsive wow fadeInUp" src="<?php echo "{$base_url}assets/img/500x500/placeholder.png" ?>" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".3s">
						</div>
						<div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
							<div class="margin-t-60 margin-b-10">
								<h2>Juan Swart</h2>
								<p>Operations Coordinator</p>
								<ul class="list-unstyled contact-list">
									<li><i class="margin-r-10 color-base icon-call-out"></i> +41 60 66 555 44 33</li>
									<li><i class="margin-r-10 color-base icon-envelope"></i> hr@flameonepage.com</li>
								</ul>
							</div>
							<img class="half-width img-responsive wow fadeInRight" src="<?php echo "{$base_url}assets/img/500x500/placeholder.png" ?>" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".4s">
						</div>
					</div>
					<!-- End Masonry Grid -->
				</div>
			</div>
            
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 md-margin-b-60">
                            <div class="margin-t-50 margin-b-30">
                                <h2>Why Us?</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-bg text-uppercase">More...</a>
                        </div>
                        <div class="col-md-5 col-sm-7 col-md-offset-2">
                            <!-- Accordion -->
                            <div class="accordion">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a class="panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Expert Research
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Hi-Tech Engineering
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Outstanding Results
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accodrion -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
        </div>
        <!-- End About -->
		
		
        <!-- Contact -->
		<div class="bg-color-sky-light" data-auto-height="true">
			<div id="contact">
				<!-- Contact List -->
				<div class="section-seperator">
					<div class="content-lg container">
						<div class="row">
							<!-- Contact List -->
							<div class="col-sm-4 sm-margin-b-50">
								<h3><a href="http://ft-seo.ch/">Zurich</a> <span class="text-uppercase margin-l-20">Human Resources</span></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
								<ul class="list-unstyled contact-list">
									<li><i class="margin-r-10 color-base icon-call-out"></i> +41 60 66 555 44 33</li>
									<li><i class="margin-r-10 color-base icon-envelope"></i> hr@flameonepage.com</li>
								</ul>
							</div>
							<!-- End Contact List -->

							<!-- Contact List -->
							<div class="col-sm-4 sm-margin-b-50">
								<h3><a href="http://ft-seo.ch/">Malta</a> <span class="text-uppercase margin-l-20">Development</span></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
								<ul class="list-unstyled contact-list">
									<li><i class="margin-r-10 color-base icon-call-out"></i> +356 7965 1257</li>
									<li><i class="margin-r-10 color-base icon-envelope"></i> developmemt@flameonepage.com</li>
								</ul>
							</div>
							<!-- End Contact List -->

							<!-- Contact List -->
							<div class="col-sm-4 sm-margin-b-50">
								<h3><a href="http://ft-seo.ch/">Manchester</a> <span class="text-uppercase margin-l-20">CEO</span></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
								<ul class="list-unstyled contact-list">
									<li><i class="margin-r-10 color-base icon-call-out"></i> +44 654 583 5518</li>
									<li><i class="margin-r-10 color-base icon-envelope"></i> ceo@flameonepage.com</li>
								</ul>
							</div>
							<!-- End Contact List -->
						</div>
						<!--// end row -->
					</div>
				</div>
				<!-- End Contact List -->

				<!-- Google Map -->
				<div class="map height-300">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2724.0694570748947!2d7.455080415208266!3d46.94067397914616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e39d0cf20e8d1%3A0x9daac4cd3043d067!2sThunstrasse+50%2C+3005+Bern%2C+Switzerland!5e0!3m2!1sen!2sin!4v1496749852928" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

    