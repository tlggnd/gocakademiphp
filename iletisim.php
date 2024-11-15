
<p?php 

$sayfa = "İletişim";

?>

<title>Göç Akademi ve Danışmanlık || <?php echo $sayfa; ?></title>

<?php 

require_once 'header.php'; ?>

			<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs img3">
			    <div class="container">
			        <div class="breadcrumbs-inner">
			            <h1 class="page-title">
			                İletişim
			                <span class="watermark">İletişim</span>
			            </h1>
			            
			        </div>
			    </div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- Contact Start -->
			<div class="rs-contact contact-style1 contact-modify1 gray-bg2 pt-120 md-pt-80">
				<div class="container">
					<div class="row no-gutters">
						<div class="col-lg-6">
							<div class="address-wrap-section">
								<div class="sec-title2 mb-64">
									<h1 class="title title-color pb-20">İhtiyaç duyduğunuz hizmetimiz ile ilgili bizimle <span>iletişime geçin.</span></h1>
									
								</div>
								<div class="row">
									<div class="col-lg-6 mb-65 md-mb-40">
										<div class="address-item">
											<div class="address-icon">
												<img src="assets/images/contact/icons/1.png" alt="Images">
											</div>
											<div class="address-text">
												<h4 class="title"> Kazımiye Mah. Dumlupınar Cad. H22 
												</h4>
												<p class="address-txt">  Çorlu TEKİRDAĞ<br>
												
												</p>
											</div>
										</div>
									</div>
									
									<div class="col-lg-6 md-mb-40">
										<div class="address-item">
											<div class="address-icon">
												<img src="assets/images/contact/icons/3.png" alt="Images">
											</div>
											<div class="address-text">
												<h4 class="title">Email Adresimiz</h4>
												<p class="address-txt">
													info@gocakademi.com
													
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="address-item">
											<div class="address-icon">
												<img src="assets/images/contact/icons/4.png" alt="Images">
											</div>
											<div class="address-text">
												<h4 class="title">İletişim No</h4>
												<p class="address-txt">
													
												0533 359 0821<br> 
													
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-section">
								<div class="sec-title2 mb-35">
									<h1 class="title">Bize  <span>Mesaj </span> Bırakın.</h1>
								</div>
			                    <div class="contact-wrap">
			                        <form id="contact-form" method="post" action="mailer.php">
			                            <fieldset>
			                                <div class="row">
			                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
			                                        <input class="from-control" type="text" id="name" name="name" placeholder="İsminiz" required="">
			                                    </div> 
			                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
			                                        <input class="from-control" type="email" id="email" name="email" placeholder="E-Mail Adresiniz" required="">
			                                    </div>   
			                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
			                                        <input class="from-control" type="text" id="phone" name="phone" placeholder="Telefon Numaranız" required="">
			                                    </div>
			                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
			                                        <input class="from-control" type="text" id="website" name="website" placeholder="Web Siteniz" required="">
			                                    </div>
			                                    <div class="col-lg-12 mb-30">
			                                        <textarea class="from-control" id="message" name="message" placeholder="Mesajınız" required=""></textarea>
			                                    </div>
			                                </div>
			                                <div class="btn-part">                                            
			                                    <div class="form-group mb-0">
			                                        <input class="readon details submit" type="submit" value="Submit Now">
			                                    </div>
			                                </div> 
			                            </fieldset>
			                        </form> 
			                        <div id="form-messages"></div>
			                    </div>
			                </div>
						</div>
					</div>
				</div>
				<!-- Contact Map Section Start -->
				<!-- <div class="contact-map pt-120 md-pt-80">
				    <iframe src="https://maps.google.com/maps?q=rstheme&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
				</div> -->
				<!-- Contact Map Section End -->
			</div>
			<!-- Contact End -->
		
			<!-- Partner Section Start -->
			<div class="rs-partner partner-style1 bg15 pt-80 pb-80 md-pt-70 md-pb-70">
			    <div class="container custom">
			        <div class="rs-carousel owl-carousel" 
			            data-loop="true" 
			            data-items="5" 
			            data-margin="30" 
			            data-autoplay="true" 
			            data-hoverpause="true" 
			            data-autoplay-timeout="5000" 
			            data-smart-speed="800" 
			            data-dots="false" 
			            data-nav="false" 
			            data-nav-speed="false" 

			            data-md-device="5" 
			            data-md-device-nav="false" 
			            data-md-device-dots="false" 
			            data-center-mode="false"

			            data-ipad-device2="3" 
			            data-ipad-device-nav2="false" 
			            data-ipad-device-dots2="false"

			            data-ipad-device="3" 
			            data-ipad-device-nav="false" 
			            data-ipad-device-dots="false" 

			            data-mobile-device="2" 
			            data-mobile-device-nav="false" 
			            data-mobile-device-dots="false">  
			            
			        </div>
			    </div>
			</div>
			<!-- Partner Section End -->

		</div> 
		<!-- Main content End -->
	 
	    <?php require_once 'footer.php'; ?>