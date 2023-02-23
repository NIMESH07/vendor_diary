<?php
if ($vdata == null) {
	?>
	<div class="vendor-content-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<center>
						No data Found
						<br>
						<a class="footer-widget" style="color: red;" href="<?php echo base_url(); ?>">Go to Home</a>
					</center>

				</div>
			</div>
		</div>
	</div>
	<?php
} else {
	$this->OH->addvendorview($vdata[0]->id, "Open Profile", null)
	?>
	<section class="main_single_vendor py-2">
		<div class="container">
			<div class="row">
				<div class="col-xl-8">
					<div class="single_vendor_card">
						<div class="bg-section">
							<div class="sec-one position-relative animate__fadeOut">
								<img class="d-block image"
									 src='<?php echo (file_exists(IMAGELINK . $vdata[0]->image)) ? base_url() . IMAGELINK . $vdata[0]->image : base_url() . "assets/images/wedding-planner/defulatimg.jpeg"; ?>'
									 alt="">
							</div>
							<div class="sec-one position-relative animate__fadeOut">
								<img class="d-block image"
									 src='<?php echo (file_exists(IMAGELINK . $vdata[0]->image_2)) ? base_url() . IMAGELINK . $vdata[0]->image_2 : base_url() . "assets/images/wedding-planner/demo.jpg"; ?>'
									 alt="">
							</div>
							<div class="sec-one position-relative animate__fadeOut">
								<img class="d-block image"
									 src='<?php echo (file_exists(IMAGELINK . $vdata[0]->image_3)) ? base_url() . IMAGELINK . $vdata[0]->image_3 : base_url() . "assets/images/wedding-planner/demo2.jpeg"; ?>'
									 alt="">
							</div>
							<div class="sec-one position-relative animate__fadeOut">
								<img class="d-block image"
									 src='<?php echo (file_exists(IMAGELINK . $vdata[0]->image_4)) ? base_url() . IMAGELINK . $vdata[0]->image_4 : base_url() . "assets/images/wedding-planner/demo3.jpeg"; ?>'
									 alt="">
							</div>
							<div class="sec-one position-relative animate__fadeOut">
								<img class="d-block image"
									 src='<?php echo (file_exists(IMAGELINK . $vdata[0]->image_5)) ? base_url() . IMAGELINK . $vdata[0]->image_5 : base_url() . "assets/images/wedding-planner/demo4.jpeg"; ?>'
									 alt="">
							</div>
						</div>
					</div>
					<div
							class="details_box d-flex align-content-center justify-content-between mt-3"
					>
						<p><i class="bi bi-geo-alt-fill"></i><?php echo $vdata[0]->address ?></p>
						<div
								class="d-flex align-items-center justify-content-between single_btn_box"
						>
							<a href="#EnquiryPopUp"
							   style="color:<?php echo $site->colour_name; ?>"
							   data-bs-target="#EnquiryPopUp"
							   data-bs-toggle="modal"
							   onclick="EnquiryPopUp('<?php echo $vdata[0]->id ?>','vendor-details','<?php echo $vdata[0]->planner_name ?>');"
							   class="btn btn-primary border-0 shadow-none text-capitalize d-block p-0 me-2 rounded-pill">
								<i class="bi bi-telephone-outbound"></i>
								<?php if (isset($this->session->idtoken)) {
									echo $vdata[0]->mobile;
								} else {
									echo 'Send Enquiry';
								}

								?>

							</a>
							<?php
							if ($vdata[0]->RegisterBy == "ADMIN")
								if ($vdata[0]->business_claim == "No") {
									?>
									<a href="#ClaimBusiness" style="color:<?php echo $site->colour_name; ?>"
									   onclick="ClaimPopUp('<?php echo $vdata[0]->id ?>','vendor-details','<?php echo $vdata[0]->planner_name ?>');"
									   data-bs-target="#ClaimBusiness"
									   data-bs-toggle="modal"
									   class="btn btn-primary border-0 shadow-none text-capitalize d-block p-0"
									   id="Cliam ">claim this business</a>
								<?php } ?>

						</div>
					</div>
					<?php
					if (isset($vdata[0]) && !empty($vdata[0]->description)) { ?>
						<div class="about_section mt-5">
							<div class="card shadow-none bg-transparent">
								<div class="card-header bg-transparent border-0">
									<h3>About <?php echo $vdata[0]->business_name ?> </h3>
								</div>
								<div class="card-body">
									<p> <?php echo $vdata[0]->description ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
					<div class="about_section mt-5">
						<div class="card shadow-none bg-transparent">
							<div class="card-header bg-transparent border-0">
								<h3>vendor details</h3>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-6">
										<span class="d-block">Contact Person Name</span>
										<label class="d-block"><?php echo $vdata[0]->contact_person_name ?></label>
										<span class="d-block">Industry Experience</span>
										<label class="d-block">12 Years</label>
										<span class="d-block">Package</span>
										<label class="d-block"><?php echo $vdata[0]->package ?></label>
									</div>
									<div class="col-xl-6">
										<span class="d-block">Start Rate Range</span>
										<label class="d-block">₹<?php echo $vdata[0]->start_rate_range ?></label>
										<span class="d-block">End Rate Range</span>
										<label class="d-block">₹<?php echo $vdata[0]->end_rate_range ?></label>
										<span class="d-block">Capacity</span>
										<label class="d-block"><?php echo $vdata[0]->capacity ?></label>
									</div>
									<?php
									if ($vdata[0]->youtube_link) {
										?>
										<div class="col-xl-12">
											<iframe width="500" height="345"
													src="<?php echo $vdata[0]->youtube_link; ?>">
											</iframe>
										</div>
									<?php } ?>
									<div class="col-xl-12">
										<span class="d-block">Vendor Address</span>
										<label class="d-block">
											<?php echo $vdata[0]->address ?>
										</label>
										<?php if ($vdata[0]->lat != null && $vdata[0]->long != null || $vdata[0]->map_location) {
											?>
											<span class="d-block">Google Map</span>
											<iframe src=" <?php echo $vdata[0]->map_location ?>" width="400"
													height="300" style="border:0;" allowfullscreen=""
													loading="lazy"></iframe>
											<div id="map"></div>
											<script>
												function initMap() {
													// The location of Uluru
													const uluru = {
														lat: <?php echo $vdata[0]->lat ?>,
														lng: <?php echo $vdata[0]->long ?> };
													// The map, centered at Uluru
													const map = new google.maps.Map(document.getElementById("map"), {
														zoom: 18,
														center: uluru,
													});
													// The marker, positioned at Uluru
													const marker = new google.maps.Marker({
														position: uluru,
														map: map,
													});
												}
											</script>
											<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLzGfV_ht6iFLE1t4CZlL40BmwhhqOlyw&callback=initMap&libraries=&v=weekly"
													async></script>
										<?php } else {
										?>
											<span class="d-block">Google Map</span>
											<label class="d-block">No Map Added</label>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Google Ads-->
					<?php if ($vdata[0]->plan_status != "Paid") {
						?>

						<ins class="adsbygoogle"
							 style="display:block"
							 data-ad-client="ca-pub-8898782763527089"
							 data-ad-slot="5983426633"
							 data-ad-format="auto"
							 data-full-width-responsive="true"></ins>
						<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
						</script>

					<?php } ?>
					<div class="about_section mt-5">
						<div class="card shadow-none bg-transparent">
							<div class="card-header bg-transparent border-0">
								<h3>Time</h3>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-6">
										<span class="d-block">Monday</span>
										<h4><?php echo $vdata[0]->monday_from_time ?>
											to <?php echo $vdata[0]->monday_to_time ?></h4>
										<span>Wednesday</span>
										<h4><?php echo $vdata[0]->wednesday_from_time ?>
											to <?php echo $vdata[0]->wednesday_to_time ?></h4>
										<span>Friday</span>
										<h4><?php echo $vdata[0]->friday_from_time ?>
											to <?php echo $vdata[0]->friday_from_time ?></h4>
										<span>Sunday</span>
										<h4><?php echo $vdata[0]->sunday_from_time ?>
											to <?php echo $vdata[0]->sunday_from_time ?></h4>
									</div>
									<div class="col-xl-6">
										<span>Tuesday</span>
										<h4><?php echo $vdata[0]->tuesday_from_time ?>
											to <?php echo $vdata[0]->tuesday_to_time ?></h4>
										<span>Thursday</span>
										<h4><?php echo $vdata[0]->thursday_from_time ?>
											to <?php echo $vdata[0]->thursday_from_time ?></h4>
										<span>Saturday</span>
										<h4><?php echo $vdata[0]->saturday_to_time ?>
											to <?php echo $vdata[0]->saturday_to_time ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="about_section mt-5">
						<div class="card shadow-none bg-transparent">
							<div class="card-header bg-transparent border-0">
								<h3>Vendor Review</h3>
							</div>
							<div class="card-body">
								<!--								<div-->
								<!--										class="d-flex align-items-center justify-content-between review_text"-->
								<!--								>-->
								<!--									<input-->
								<!--											type="text"-->
								<!--											class="form-control text-capitalize py-0 px-3"-->
								<!--											placeholder="Enter review"-->
								<!--									/>-->
								<!--									<button-->
								<!--											type="button"-->
								<!--											class="btn btn-primary d-block text-capitalize border-0"-->
								<!--									>-->
								<!--										send-->
								<!--									</button>-->
								<!--								</div>-->
								<?php
								if (!$vreviews) {
									echo "No Review";
								} else {
									?>
									<div class="single_review mt-3">
										<div class="row">
											<?php
											foreach ($vreviews as $rdata) {
												?>
												<div class="col-xl-6">
													<div class="w-100 review_card">
														<div
																class="review_inner_content d-flex align-items-flex-start"
														>
															<div>
																<img
																		src="./image/slider_img.jpeg"
																		alt=""
																		class=""
																/>
															</div>
															<div class="review_details w-100">
																<h5 class="mb-1"><?php echo $rdata->r_name; ?></h5>
																<?php $rating = $rdata->r_star; ?>
																<div class="review_star">
																	<?php $rcount = 1;
																	for ($i = 0; $rating != $i; $i++) {
																		?><i class="bi bi-star-fill"></i>
																		<?php
																		$rcount = $rcount + 1;
																	}
																	?>
																	<?php for ($i = 0; $i != 5 - $rating; $i++) {
																		?><i class="bi bi-star"></i><?php
																		$rcount = $rcount + 1;
																	}
																	?>
																</div>
																<p>
																	<?php echo $rdata->r_message; ?>
																</p>
															</div>
														</div>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>

					<?php if ($vdata[0]->plan_status != "Paid") {
						?>
						<div class="recommendation_box about_section mt-5">
							<div class="card">
								<div class="card-header bg-transparent border-0">
									<h3>Recommendation</h3>
								</div>
								<div class="card-body">
									<iframe src="https://vendordiary.com/GetVendor/vendorrandom?category_id=<?= $vdata[0]->category_id ?>&country_id=<?= $vdata[0]->country_id ?>&state_id=<?= $vdata[0]->state_id ?>&city_id=<?= $vdata[0]->city_id ?>"
											allowfullscreen style=" left:0; top:0; width:100%; " height="350px"
											frameBorder="0">
									</iframe>


									<!-- Home page -->
									<ins class="adsbygoogle"
										 style="display:block"
										 data-ad-client="ca-pub-8898782763527089"
										 data-ad-slot="5983426633"
										 data-ad-format="auto"
										 data-full-width-responsive="true"></ins>
									<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
									</script>
								</div>
							</div>
						</div>
					<?php } ?>
					<script async custom-element="amp-ad"
							src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
					<amp-ad width="100vw" height="320"
							type="adsense"
							data-ad-client="ca-pub-8898782763527089"
							data-ad-slot="7583292577"
							data-auto-format="mcrspv"
							data-full-width="">
						<div overflow=""></div>
					</amp-ad>
				</div>
				<div class="col-xl-4">
					<div class="single_form p-4">
						<h4 class="text-capitalize mb-3">Verify Mobile Number</h4>
						<p>OTP has been sent to you on your mobile number. Please enter it below.</p>
						<form method="POST" action="<?php echo base_url(); ?>Venorenquiry" name="sendRequest"
							  id="sendRequest">
							<input class="form-control shadow-none" id="vendorid" name="vendor_id" type="hidden"
								   value="<?php echo $vdata[0]->id ?>"/>
							<input id="pagesource" name="pagesource" type="hidden" value="vender-details"/>


							<input id="en_name" name="full_name" required type="text"
								   placeholder="Name" class="form-control shadow-none"
								   value="<?php if ($this->session->googlelogin == TRUE) {
									   echo $this->session->googlename;
								   } ?>" data-valid="required"/>

							<input id="en_email" name="email_id" type="email" required
								   placeholder="Email Address"
								   value="<?php if ($this->session->googlelogin == TRUE) {
									   echo $this->session->googleemail;
								   } ?>" class="form-control shadow-none my-3" data-valid="required"/>


							<input id="en_mobile" name="mobile_number" required type="tel"
								   placeholder="Mobile Nummber" pattern="[0-9]{10}"
								   class="form-control shadow-none mb-2" maxlength="10"
								   data-valid="required"/>
							<p class="text-capitalize m-0 d-flex align-items-center">
								Format : <span class="d-block mx-2">9xxxxxxxx9</span>
							</p>
							<textarea class="form-control shadow-none my-3" id="comment" name="comment" rows="3"
									  placeholder="Write Comment" maxlength="500"
									  data-valid="required"></textarea>
							<button
									type="submit" name="Submit" value="Submit"
									style="background:<?php echo $site->colour_name; ?>; color:<?php echo $site->font_color; ?>;border-color:<?php echo $site->colour_name; ?>;"
									class="btn btn-primary shadow-none border-0 d-block text-capitalize"
									id="SendRequest"
							>
								Submit
							</button>
						</form>
						<form name="quote_form-otp" id="quote_form-otp" style="display:none;">
							<input id="input_otp" type="text" name="input_otp" placeholder="Enter 6 digit OTP"
								   class="form-control shadow-none my-3" data-valid="required" maxlength="6"/>
							<a href="JavaScript:void(0);" id="resendotp" onclick="Mobile.OtpResend(event);"
							   class="sendotp">Resend OPT</a>
							<button type="submit" name="singlebutton" id="verify_otp"
									class="btn btn-primary shadow-none border-0 d-block text-capitalize"
									onclick="Mobile.Otp(event);">Submit
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- modal start -->
		<div
				id="EnquiryPopUp"
				class="modal fade vendor_modal enquiry-container overlay mt-4"
				aria-hidden="true"
				aria-labelledby="exampleModalToggleLabel"
				tabindex="-1"
		>
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content modal_inner border-0">
					<div class="d-flex">
						<div class="w-50">
							<img src="<?php echo base_url() . '/assets/v2/images/modal_img.jpg'; ?>" alt="" class="w-100"/>
						</div>
						<div class="p-4 w-50 position-relative">
							<button
									type="button"
									class="btn-close border-0 bg-transparent position-absolute"
									data-bs-dismiss="modal"
									aria-label="Close"
							>
								<i class="bi bi-x-circle"></i>
							</button>

							<h2 style="color:<?php echo $site->colour_name; ?>;"><?php echo $vdata[0]->business_name ?></h2>
							<form method="POST" action="<?php echo base_url(); ?>Venorenquiry" name="send-enquiry"
								  id="send-enquiry">
								<h3 id="quote-text" style="color:<?php echo $site->colour_name; ?>;"></h3>
								<p id="quote-shorttext">Fill this form and vendor will contact you shortly.</p>
								<input id="page_source" name="page_source" type="hidden" value="vender-listing"/>
								<input id="vendor_id" name="vendor_id" type="hidden" value=""/>
								<input id="service_type" name="service_type" type="hidden" value=""/>

								<input id="full_name" type="text" name="full_name" placeholder="Name"
									   class="form-control shadow-none mb-2"
									   value="<?php if ($this->session->googlelogin == TRUE) {
										   echo $this->session->googlename;
									   } ?>" required data-valid="required">
								<input id="email_id" name="email_id" type="email" placeholder="Email Address"
									   class="form-control shadow-none mb-2"
									   value="<?php if ($this->session->googlelogin == TRUE) {
										   echo $this->session->googleemail;
									   } ?>" required data-valid="required"/>
								<input id="mobile_number" type="tel" name="mobile_number" placeholder="Mobile Nummber"
									   class="form-control shadow-none mb-2" value="" required maxlength="10"
									   data-valid="required"/>
								<textarea id="comment" required type="comment" name="comment" placeholder="Comment"
										  class="form-control shadow-none mb-2" value=""
										  data-valid="required"></textarea>
								<input type="submit" name="singlebutton"
									   style="background:<?php echo $site->colour_name; ?>; color:<?php echo $site->font_color; ?>;border-color:<?php echo $site->colour_name; ?>;"
									   class="btn btn-primary shadow-none border-0 d-block text-capitalize" name="Send"
									   value="Send" id="SendEnquiry">


							</form>
							<form name="quote_form_otp" id="quote_form-otp" class="quote_form-otp"
								  style="display:none;">
								<h3>Verify Mobile Number</h3>
								<p>OTP has been sent to you on your mobile number. Please enter it below.</p>
								<input id="input_otp" type="text" name="input_otp" placeholder="Enter 6 digit OTP"
									   class="form-control shadow-none mb-2" data-valid="required" maxlength="6"/>
								<a href="JavaScript:void(0);" id="resendotp" onclick="Mobile.OtpResend(event);"
								   class="sendotp">Resend OPT</a>
								<button type="submit" name="singlebutton" id="verify_otp"
										class="btn btn-primary shadow-none border-0 d-block text-capitalize"
										onclick="Mobile.Otp(event);">Submit
								</button>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div
				id="ClaimBusiness"
				class="modal fade vendor_modal enquiry-container overlay mt-4"
				aria-hidden="true"
				aria-labelledby="exampleModalToggleLabel"
				tabindex="-1"
		>
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content modal_inner border-0">
					<div class="d-flex">
						<div class="w-50">
							<img src="<?php echo base_url() . '/assets/v2/images/modal_img.jpg'; ?>" alt="" class="w-100"/>
						</div>
						<div class="p-4 w-50 position-relative">
							<button
									type="button"
									class="btn-close border-0 bg-transparent position-absolute"
									data-bs-dismiss="modal"
									aria-label="Close"
							>
								<i class="bi bi-x-circle"></i>
							</button>

							<h2 style="color:<?php echo $site->colour_name; ?>;"><?php echo $vdata[0]->business_name ?></h2>
							<form method="POST" action="<?php echo base_url(); ?>Vendorclaim" name="send-enquiry"
								  id="send-enquiry">
								<h3 id="quote-text" style="color:<?php echo $site->colour_name; ?>;"></h3>
								<p id="quote-shorttext">Fill this form and vendor will contact you shortly.</p>
								<input id="page_source" name="page_source" type="hidden" value="vender-listing"/>
								<input id="vendor_claim_id" name="vendor_claim_id" type="hidden" value=""/>

								<input id="full_name" type="text" name="full_name" placeholder="Your Name"
									   class="form-control shadow-none mb-2"
									   value="<?php if ($this->session->googlelogin == TRUE) {
										   echo $this->session->googlename;
									   } ?>" required data-valid="required">
								<input id="email_id" name="email_id" type="email" placeholder="Business Email Address"
									   class="form-control shadow-none mb-2" value="" required data-valid="required"/>
								<input id="mobile_number" type="tel" name="mobile_number" placeholder="Contact Number"
									   class="form-control shadow-none mb-2" value="" required maxlength="10"
									   data-valid="required"/>
								<textarea id="comment" required type="comment" name="comment" placeholder="Comment"
										  class="form-control shadow-none mb-2" value=""
										  data-valid="required"></textarea>

								<input type="submit"
									   name="singlebutton"
									   style="background:<?php echo $site->colour_name; ?>; color:<?php echo $site->font_color; ?>;border-color:<?php echo $site->colour_name; ?>;"
									   class="btn btn-primary shadow-none border-0 d-block text-capitalize"
									   name="Send" value="Send" id="SendEnquiry">


							</form>
							<form name="quote_form_otp" id="quote_form-otp" class="quote_form-otp" style="display:none;">
								<h3>Verify Mobile Number</h3>
								<p>OTP has been sent to you on your mobile number. Please enter it below.</p>
								<input id="input_otp" type="text" name="input_otp" placeholder="Enter 6 digit OTP" class="form-control shadow-none mb-2" data-valid="required" maxlength="6" />
								<a href="JavaScript:void(0);" id="resendotp" onclick="Mobile.OtpResend(event);" class="sendotp">Resend OPT</a>
								
								<button type="submit" name="singlebutton" id="verify_otp"
										class="btn btn-primary shadow-none border-0 d-block text-capitalize"
										onclick="Mobile.Otp(event);">Submit
								</button>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- modal end -->
	</section>


	<!--End Claim Business -->
	<script
			type="text/javascript"
			src="https://kenwheeler.github.io/slick/slick/slick.min.js"
	></script>
	<style>
		img{
			border-radius: 20px;
		}
		.image{
			width: 100%;
			height:400px !important;
			object-fit:fill;
		}
		.btn-default-wishlist:hover
		{
			color: <?php echo $site->font_color;?>;
			background-color: <?php echo $site->colour_name;?>;
			border-color: <?php echo $site->colour_name;?>;
		}
		a:hover{
			text-decoration: none !important;
		}
		#object{
			visibility: hidden;
		}
		.sidebar-venue
		{
			top: 125px;
		}
		.ex1
		{
			height: 300px;
			overflow-y: scroll;
		}
	</style>
	<script>
		function EnquiryPopUp(id, vl, pn) {
			var x = document.getElementById("vendor_id");
			x.setAttribute("value", id);
		}

		function ClaimPopUp(id, vl, pn) {
			var x = document.getElementById("vendor_claim_id");
			x.setAttribute("value", id);
		}
	</script>
	<script>
		$(".bg-section").slick({
			dots: false,
			cssEase: "linear",
			arrows: true,
			fade: true,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
		});

		$(".recommendation_section").slick({
			dots: false,
			cssEase: "linear",
			arrows: false,
			fade: false,
			slidesToScroll: 3,
			slidesToShow: 3,
			autoplay: false,
			autoplaySpeed: 2000,
		});
	</script>
	<?php
}
?>
