<?PHP include('header.php'); ?>
		<section class="page-content">
			<!-- Hero block area -->
			<div id="latestalbum" class="hero pad">
				<div class="container">
					<div class="row">
						<div class="col-md-12 pad-bottom">
							<span>
								<a href="/">Home</a>
								<span>/</span>
								<a href="Product.html">Products</a>
								<span>/</span>
								<a href="cart.html">Cart</a>
							</span>
						</div>
						<br>
						<div class="col-md-8">
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<div class="row">
												<div class="col-xs-6">
													<h5><i class="fa fa-shopping-cart"></i> Shopping Cart</h5>
												</div>
												<!-- <div class="col-xs-6">
													<button type="button" class="btn btn-primary btn-sm btn-block">
														<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
													</button>
												</div> -->
											</div>
										</div>
									</div>
									<div class="panel-body">
										<div id="circle1" class="row">
											<div class="col-xs-2"><img class="img-responsive" src="New%20folder/images/cart/two.png">
											</div>
											<div class="col-xs-4">
												<h4 class="product-name" ><strong> <a href="404error.html">Shalwar</a> </strong></h4><h4><small>Product description</small></h4>
											</div>
											<div class="col-xs-6">
												<div class="col-xs-6 text-right">
													<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
												</div>
												<div class="col-xs-4">
													<input type="text" class="form-control input-sm" value="1">
												</div>
												<div class="col-xs-2">
													<button id="c1" type="button" class="btn btn-link btn-xs">
														<i class="fa fa-trash"></i>
													</button>
												</div>
											</div>
										</div>
										<hr>
										<div id="circle" class="row">
											<div class="col-xs-2"><img class="img-responsive" src="New%20folder/images/cart/one.png">
											</div>
											<div class="col-xs-4">
												<h4 class="product-name"><strong><a href="Product_details.html">Black Top</a> </strong></h4><h4><small>Product description</small></h4>
											</div>
											<div class="col-xs-6">
												<div class="col-xs-6 text-right">
													<h6><strong>2500.00 <span class="text-muted">x</span></strong></h6>
												</div>
												<div class="col-xs-4">
													<input type="text" class="form-control input-sm" value="1">
												</div>
												<div class="col-xs-2">
													<button id="c" type="button" class="btn btn-link btn-xs">
														<i class="fa fa-trash"></i>
													</button>
												</div>
											</div>
											<hr>
										</div>

										<div class="row">
											<div class="col-xs-8">
												<h5 class="product-name"><strong>Choose Your Payment Method</strong></h5>
													<div class="col-xs-4 form-check">
														<input class="form-check-input" type="radio" name="payment" id="payment" value="option1" checked>
														<label class="form-check-label" for="exampleRadios1">
															VISA
														</label>
													</div>
													<div class="col-xs-4 form-check">
														<input class="form-check-input" type="radio" name="payment" id="payment" value="option2">
														<label class="form-check-label" for="exampleRadios2">
															CASH
														</label>
													</div>
												</div>
												<!-- <div class="col-xs-4">
													cash on delivery
												</div> -->
										</div>
										<hr>
										<div class="row">
											<div class="col-xs-6">
												<h5 class="product-name"><strong>Choose Your Shipping Method</strong></h5>
												<div class="col-xs-4 form-check">
													<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
													<label class="form-check-label" for="exampleRadios1">
														FedEX
													</label>
												</div>
												<div class="col-xs-4 form-check">
													<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
													<label class="form-check-label" for="exampleRadios2">
														DHL
													</label>
												</div>
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="text-center">
												<div class="col-xs-9">
													<h6 class="text-right">Added items?</h6>
												</div>
												<div class="col-xs-3">
													<a type="button" href="products.html"  class="btn btn-default btn-sm btn-block">
														Update cart
													</a>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="panel-footer">
										<div class="row text-center">
											<div class="col-xs-9">
												<h4 class="text-right">Total <strong>$50.00</strong></h4>
											</div>
											<div class="col-xs-3">
												<button type="button" class="btn btn-success btn-block">
													Checkout
												</button>
											</div>
										</div>
									</div> -->
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<div class="row">
												<div class="col-xs-6">
													<h5><span class="shopping-cart"></span> Summary</h5>
												</div>
												<!-- <div class="col-xs-6">
													<button type="button" class="btn btn-primary btn-sm btn-block">
														<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
													</button>
												</div> -->
											</div>
										</div>
									</div>
									<div class="panel-body">
										<form class="" action="" method="post">
											<div class="col-xs-12">
												<h5>Address</h5>
												<textarea name="adi" id="adi" rows="4" cols="40" required ></textarea>
												<br>
												<input  class="btn btn-sm pas-bottom" type="submit" name="edit"/>
											</div>
											<div class="col-xs-8">
												<h5>Delivary Details</h5>
												<figure>
												<p >Estimated Delivery: 20/3/2020 to 2/4/2020</p>
												</figure>
											</div>
										</form>
										</div>
									<div class="panel-footer">
										<div class="row text-left">
											<div class="col-xs-6">
												<h4 class="text-right">Total <strong>350.00</strong></h4>
											</div>
											<div class="col-xs-6">
												<button type="submit" id="checkout" class="btn btn-success btn-block save" value="save">
													Checkout
												</button>
											</div>
										</div>
									</div>
							</div>
						</div>
					<div class="col-xs-8">

					</div>
				</div>
			</div>
		</section>
<?php include('footer.php'); ?>
