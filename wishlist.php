<?php include('header.php'); ?>
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
								<a href="cart.html">WishList</a>
							</span>
						</div>
						<br>
						<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<div class="row">
												<div class="col-xs-6">
													<h5><i class="fa fa-heart"> </i>Your WishList</h5>
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
											<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
											</div>
											<div class="col-xs-8">
												<h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
												</div>
												<div class="col-xs-2">
													<button id="c1" type="button" class="btn btn-link btn-xs">
														<i class="fa fa-heart-o"></i>
													</button>
												</div>
											</div>
											<hr>
											<div id="circle" class="row">
												<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
												</div>
												<div class="col-xs-8">
													<h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
													</div>
													<div class="col-xs-2">
														<button id="c" type="button" onclick="showAlert()" class="btn btn-link btn-xs">
															<i class="fa fa-heart-o"></i>
														</button>
													</div>
												</div>
										</div>
										</div>
										<hr>
										<div class="row">
											<div class="text-center">
												<div class="col-xs-9">
													<h6 class="text-right">view products?</h6>
												</div>
												<div class="col-xs-3">
													<button type="button" class="btn btn-default btn-sm btn-block">
														Update WishList
													</button>
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
							<hr>
				</div>
			</div>		</section>

<?PHP include('footer.php'); ?>
