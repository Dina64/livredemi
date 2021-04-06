<?PHP include('header.php'); ?>
		<section class="page-content">
			<div class="pader">
				<!-- Hero block area -->
				<div id="latestalbum" class="hero pad">
					<div class="container">
						<div class="row">
							<div class="my-account-area">
								<div class="container">
									<div class="row">
										<div class="col-sm-6">
											<div class="panel-group  margin-btm-0" id="accordion">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#personal-info" aria-expanded="true">
															<i class="pe-7s-bookmarks"></i>
															<span>My Personal Information</span>
															</a>
														</h4>
													</div>
													<div id="personal-info" class="panel-collapse collapse in" role="tabpanel">
														<div class="panel-body">
															<form action="#">
																<div class="row">
																	<div class="col-md-12">
																		<div class="billing-address">
																			<div class="row">
																				<div class="col-md-6">
																					<input type="text" class="custom-form" placeholder="First Name" required/>
																				</div>
																				<div class="col-md-6">
																					<input type="text" class="custom-form" placeholder="Last Name" required/>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<input type="text" class="custom-form" placeholder="Office Address" required />
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<input type="text" class="custom-form" placeholder="Home Address" required />
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-6">
																					<select class="custom-select custom-form" required>
																						<option>City</option>
																						<option>Dhaka</option>
																						<option>New York</option>
																						<option>London</option>
																						<option>Melbourne</option>
																					</select>
																				</div>
																				<div class="col-md-6">
																					<select class="custom-select custom-form" required>
																						<option>Country</option>
																						<option>Bangladesh</option>
																						<option>United States</option>
																						<option>United Kingdom</option>
																						<option>Australia</option>
																					</select>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-6">
																					<select class="custom-select custom-form" >
																						<option>Post Code</option>
																						<option>012345</option>
																						<option>0123456</option>
																						<option>01234567</option>
																						<option>012345678</option>
																					</select>
																				</div>
																				<div class="col-md-6">
																					<input class="custom-form" type="password" placeholder="Password" required/>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-6">
																					<input type="tel" pattern='\d{3}\d{4}\d{3}' class="custom-form" placeholder="Cell Number" required placeholder="Enter a valid phone number" />
																				</div>
																				<div class="col-md-6">
																					<input type="tel" pattern='\d{3}\d{4}\d{3}' class="custom-form" placeholder="Phone Number" required placeholder="Enter a valid phone number" />
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<input type="email" class="custom-form" placeholder="Email" name="email" required placeholder="Enter a valid email address"/>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<textarea class="custom-form" placeholder="Additional information"></textarea>
																				</div>
																			</div>
																			<div class="checkbox">
																				<label>
																					<input type="checkbox" name="subscribe" checked="checked"/>
																					I wish to subscribe to the Fashion newsletter.
																				</label>
																				<label>
																					<input type="checkbox" name="subscribe"/>
																					I have read and agree to the
																					<a href="#"><b>Privacy Policy</b></a>
																				</label>
																			</div>
																			<div class="row">
																				<div class="col-md-12">
																					<input type="submit" class="custom-submit-2 save" value="Save" />
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="panel-group margin-btm-0" >
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a href="wishlist.html" >
															<i class="pe-7s-like"></i>
															<span>My Wishlist Information</span>
															</a>
														</h4>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a href="cart.html">
															<i class="pe-7s-news-paper"></i>
															<span>Order history and details</span>
															</a>
														</h4>
													</div>
												</div>
												<!-- <div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="" href="#shipping-info" aria-expanded="true">
															<i class="pe-7s-cart"></i>
															<span>My shipping address</span>
															</a>
														</h4>
													</div> -->
													<!-- <div id="shipping-info" class="panel-collapse collapse" role="tabpanel">
														<div class="panel-body"> -->
															<!-- CHECKOUT-AREA START -->
															<!-- <div class="checkout-area">
																<form action="#">
																	<div class="row"> -->
																		<!-- Shipping-Address Start -->
																		<!-- <div class="col-md-12">
																			<div class="shipping-address">
																				<div class="row">
																					<div class="col-md-12">
																						<select class="custom-select custom-form">
																							<option>Select Delivery Method</option>
																							<option>Select Delivery Method</option>
																							<option>Select Delivery Method</option>
																						</select>
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-md-6">
																						<input class="custom-form" type="text" placeholder="Subash" name="firstname"/>
																					</div>
																					<div class="col-md-6">
																						<input class="custom-form" type="text" placeholder="Chandra" name="lastname"/>
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-md-12">
																						<input type="text" class="custom-form" placeholder="Address" />
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-md-6">
																						<select class="custom-select custom-form">
																							<option>City</option>
																							<option>Dhaka</option>
																							<option>New York</option>
																							<option>London</option>
																							<option>Melbourne</option>
																						</select>
																					</div>
																					<div class="col-md-6">
																						<select class="custom-select custom-form">
																							<option>Country</option>
																							<option>Bangladesh</option>
																							<option>United States</option>
																							<option>United Kingdom</option>
																							<option>Australia</option>
																						</select>
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-md-6">
																						<input class="custom-form" type="text" placeholder="Phone Number" />
																					</div>
																					<div class="col-md-6">
																						<select class="custom-select custom-form">
																							<option>Post Code</option>
																							<option>012345</option>
																							<option>0123456</option>
																							<option>01234567</option>
																							<option>012345678</option>
																						</select>
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-md-12">
																						<input type="text" class="custom-form" placeholder="Email" name="email" />
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-md-12">
																						<textarea class="custom-form" placeholder="Order Note"></textarea>
																					</div>
																				</div>
																			</div>
																		</div> -->
																		<!-- Shipping-Address End -->
																	<!-- </div>
																</form>
															</div> -->
															<!-- CHECKOUT-AREA END -->
														<!-- </div> -->
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

<?PHP include('footer.php'); ?>