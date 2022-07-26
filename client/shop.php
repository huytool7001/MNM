<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Downy Shoes an Ecommerce Category Bootstrap Responsive Website Template | Shop :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="css/pagination.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/shop.css" type="text/css" media="screen" property="" />
	<link href="css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

</head>

<body style="-webkit-user-select: none;">
	<!-- banner -->
	<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="index.php"><span>Downy</span> <i>Shoes</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>
							<li><a href="index.php" class="active">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="404.php">Team</a></li>
							<li><a href="shop.php">Shop Now</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->

			</div>
		</div>
		<!-- //cart details -->
		<!-- search -->
		<div class="search_w3ls_agileinfo">
			<div class="cd-main-header">
				<ul class="cd-header-buttons" style="right: 210px;">
					<li>
						<div class="shoecart shoecart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
							</form>
						</div>
					</li>
				</ul>
			</div>
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
			</div>
			<div id="cd-search" class="cd-search">
				<form action="#" method="post">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="index.php">Home</a><i>|</i></li>
					<li>Shop</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<!-- tittle heading -->

			<!-- //tittle heading -->
			<!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Tìm kiếm..</h3>
					<form>
						<input type="search" onkeyup="loadProducts()" placeholder="Tên sản phẩm..." id="productSearch">
						<input type="submit" id="productSearchButton" value=" ">
					</form>
				</div>
				<div class="form-group" style="margin-top: 10px;">
					<label>Sắp xếp</label>
					<select onchange="loadProducts()" class="form-control select2" style="width: 100%;">
						<option disabled selected hidden>Sắp xếp</option>
						<option value="price ASC">Giá: Tăng dần</option>
						<option value="price DESC">Giá: Giảm dần</option>
						<option value="nameProduct ASC">Tên: A - Z</option>
						<option value="nameProduct DESC">Tên: Z - A</option>
						<option value="dateCreate DESC">Mới nhất</option>
						<option value="dateCreate ASC">Cũ nhất</option>
					</select>
				</div>
				<!-- price range -->
				<div class="range">
					<h3 class="agileits-sear-head">Giá</h3>
					<ul class="dropdown-menu6">
						<li>
							<div id="slider-range"></div>
							<input onchange="loadProducts()" type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>
					</ul>
				</div>
				<!-- //price range -->
				<!--preference -->
				<div class="left-side">
					<h3 class="agileits-sear-head">Loại</h3>
					<ul>
						<?php
						require 'config.php';
						$sql = 'SELECT DISTINCT nameCategoryProduct FROM products';
						if ($result = mysqli_query($con, $sql)) {
							while ($row = mysqli_fetch_array($result)) {
								echo
								'<li>
									<input type="checkbox" class="categoryChecked" value="nameCategoryProduct=\'' . $row[0] . '\'">
									<span class="span">' . $row[0] . ' </span>
								</li>';
							}
						}
						?>
					</ul>
				</div>
				<!-- // preference -->
				<!-- discounts -->
				<div class="left-side">
					<h3 class="agileits-sear-head">Màu</h3>
					<ul>
						<?php
						$sql = 'SELECT DISTINCT color FROM products';
						if ($result = mysqli_query($con, $sql)) {
							while ($row = mysqli_fetch_array($result)) {
								echo
								'<li>
									<input type="checkbox" class="colorChecked" value="color=\'' . $row[0] . '\'">
									<span class="span">' . $row[0] . ' </span>
								</li>';
							}
						}
						?>
					</ul>
				</div>
				<!-- //discounts -->
				<!-- reviews -->
				<!-- //reviews -->
				<!-- deals -->
				<!-- //deals -->

			</div>
			<!-- //product left -->
			<!-- product right -->
			<div class="left-ads-display col-md-9">
				<div class="wrapper_top_shop">
					<div class="col-md-6 shop_left">
						<img src="images/banner3.jpg" alt="">
						<h6>40% off</h6>
					</div>
					<div class="col-md-6 shop_right">
						<img src="images/banner2.jpg" alt="">
						<h6>50% off</h6>
					</div>
					<div class="clearfix"></div>
					<!-- product-sec1 -->
					<div class="product-sec1"></div>
					<div class="clearfix"></div>
					<div id="pagination-container" class="paginationjs paginationjs-big" style="display: flex; flex-direction: column; align-items: center; margin-top: 20px;"></div>
					<!-- //product-sec1 -->
					<div class="clearfix"></div>
					<div class="col-md-6 shop_left shp">
						<img src="images/banner4.jpg" alt="">
						<h6>21% off</h6>
					</div>
					<div class="col-md-6 shop_right shp">
						<img src="images/banner1.jpg" alt="">
						<h6>31% off</h6>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //top products -->
	<div class="mid_slider_w3lsagile">
		<div class="col-md-3 mid_slider_text">
			<h5>Some More Shoes</h5>
		</div>
		<div class="col-md-9 mid_slider_info">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class=""></li>
					<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="2" class=""></li>
					<li data-target="#myCarousel" data-slide-to="3" class=""></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g3.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g4.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item active">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g5.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g6.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g3.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g4.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g3.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g4.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="fa fa-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="fa fa-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				<!-- The Modal -->

			</div>
		</div>

		<div class="clearfix"> </div>
	</div>
	<!-- /newsletter-->
	<div class="newsletter_w3layouts_agile">
		<div class="col-sm-6 newsleft">
			<h3>Sign up for Newsletter !</h3>
		</div>
		<div class="col-sm-6 newsright">
			<form action="#" method="post">
				<input type="email" placeholder="Enter your email..." name="email" required="">
				<input type="submit" value="Submit">
			</form>
		</div>

		<div class="clearfix"></div>
	</div>
	<!-- //newsletter-->
	<!-- footer -->
	<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="index.php"><span>D</span>owny Shoes </a></h2>
				<p>Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Our <span>Information</span> </h4>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="404.php">Services</a></li>
							<li><a href="404.php">Short Codes</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>

					<div class="col-md-5 sign-gd-two">
						<h4>Store <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p>+1 234 567 8901</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p>Broome St, NY 10002,California, USA.

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="col-md-3 sign-gd flickr-post">
						<h4>Flickr <span>Posts</span></h4>
						<ul>
							<li><a href="single.php"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>

			<p class="copy-right-w3ls-agileits">&copy 2018 Downy Shoes. All rights reserved | Design by <a href="http://w3layouts.com/">w3layouts</a></p>
		</div>
	</div>
	</div>
	<!-- //footer -->
	<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function(evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$('.colorChecked').on('change', function() {
			$('.colorChecked').not(this).prop('checked', false);
			loadProducts();
		});
		$('.categoryChecked').on('change', function() {
			$('.categoryChecked').not(this).prop('checked', false);
			loadProducts();
		});
	</script>

	<!-- /nav -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/demo1.js"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="js/search.js"></script>
	<!--//search-bar-->
	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": true,
			"positionClass": "toast-bottom-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
		//<![CDATA[ 
		$(window).load(function() {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 2000000,
				values: [0, 2000000],
				slide: function(event, ui) {
					$("#amount").val(Intl.NumberFormat('de-DE').format(ui.values[0]) + "\u20ab - " + Intl.NumberFormat('de-DE').format(ui.values[1]) + "\u20ab");
					loadProducts();
				}
			});
			$("#amount").val(Intl.NumberFormat('de-DE').format($("#slider-range").slider("values", 0)) + "\u20ab - " + Intl.NumberFormat('de-DE').format($("#slider-range").slider("values", 1)) + "\u20ab");
			$.ajax({
				url: './php/filter.php',
				method: 'POST',
				dataType: "json",
				data: {
					category: '',
					minprice: 0,
					maxprice: 2000000,
					color: '',
					sort: '',
					search: '',
				},
				success: function(data) {
					$('#pagination-container').pagination({
						dataSource: data,
						callback: function(data, pagination) {
							// template method of yourself
							var html = '';
							for (var row of data) {
								html +=
									`<div class="col-md-4 product-men">
										<div class="product-shoe-info shoe">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="` + row["images1"] + `" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.php?id=` + row["idCategory_product"] + `" class="link-product-add-cart">XEM</a>
															<select style="width:20%; float: right" class="custom-select form-control-border" id="sizeSelected-` + row["idCategory_product"] + `">
																<option selected disabled value=''>Size</option>` +
									(row["size1"] != null ? `<option value="` + row["size1"] + `">` + row["size1"] + `</option>` : ``) +
									(row["size2"] != '' ? `<option value="` + row["size2"] + `">` + row["size2"] + `</option>` : ``) +
									(row["size3"] != '' ? `<option value="` + row["size3"] + `">` + row["size3"] + `</option>` : ``) +
									(row["size4"] != '' ? `<option value="` + row["size4"] + `">` + row["size4"] + `</option>` : ``) +
									(row["size5"] != '' ? `<option value="` + row["size5"] + `">` + row["size5"] + `</option>` : ``) +
									`</select>
															</div>
														
													</div>
												</div>
												<div class="item-info-product">
													<h4 style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box;	-webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;">
														<a href="single.php?id=` + row["idCategory_product"] + `">` + row["nameProduct"] + ` </a>
													</h4>
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<div class="grid-price ">
																	<span class="money ">` + Intl.NumberFormat('de-DE').format(row['price']) + ` VNĐ</span>
																</div>
															</div>
														</div>
														
														<div class="shoe single-item hvr-outline-out">
															<form class="addToCart">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="id" value="` + row["idCategory_product"] + `">
																<input type="hidden" name="shoe_item" value="` + row["nameProduct"] + `">
																<input type="hidden" name="amount" value="` + row["price"] + `">
																<input type="hidden" name="image" value="` + row["images1"] + `">
																<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

																<a data-toggle="modal" data-target="#myModal1"></a>
															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
								`;
							}

							$('.product-sec1').html(html);
							$('.addToCart').on("submit", function() {
								event.preventDefault();
								var values = {};
								$.each($(this).serializeArray(), function(i, field) {
									values[field.name] = field.value;
								});
								var sizeSelector = '#sizeSelected-' + values['id'];
								if ($(sizeSelector).val()) {
									$.ajax({
										url: './php/cart.php',
										method: 'POST',
										dataType: "json",
										data: {
											id: values['id'],
											shoe_item: values['shoe_item'],
											add: values['add'],
											amount: values['amount'],
											image: values['image'],
											size: $(sizeSelector).val()
										},
										success: function(data) {

										}
									});
									toastr.success('Thêm sản phẩm vào giỏ hàng thành công');
								} else {
									toastr.warning('Bạn chưa chọn size cho sản phẩm này');
								}
							})
						}
					})
				}
			});
		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<script src="./js/pagination.js"></script>
	<script>
		$('.top_shoe_cart').on('click', function(event) {
			event.preventDefault();
			window.location = './checkout.php';
		})
	</script>
	<script>
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": true,
			"positionClass": "toast-bottom-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}

		function loadProducts() {

			var data = {
				category: $('.categoryChecked:checked').val() || '',
				minprice: $("#slider-range").slider("values", 0),
				maxprice: $("#slider-range").slider("values", 1),
				color: $('.colorChecked:checked').val() || '',
				sort: $('.select2').val() || '',
				search: "nameProduct LIKE '%" + $('#productSearch').val() + "%'" || '',
			}
			console.log(data);
			$.ajax({
				url: './php/filter.php',
				method: 'POST',
				dataType: "json",
				data: data,
				success: function(data) {
					$('#pagination-container').pagination({
						dataSource: data,
						callback: function(data, pagination) {
							var html = '';
							for (var row of data) {
								html +=
									`<div class="col-md-4 product-men">
										<div class="product-shoe-info shoe">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="` + row["images1"] + `" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.php?id=` + row["idCategory_product"] + `" class="link-product-add-cart">XEM</a>
															<select style="width:20%; float: right" class="custom-select form-control-border" id="sizeSelected-` + row["idCategory_product"] + `">
																<option selected disabled value=''>Size</option>` +
									(row["size1"] != null ? `<option value="` + row["size1"] + `">` + row["size1"] + `</option>` : ``) +
									(row["size2"] != '' ? `<option value="` + row["size2"] + `">` + row["size2"] + `</option>` : ``) +
									(row["size3"] != '' ? `<option value="` + row["size3"] + `">` + row["size3"] + `</option>` : ``) +
									(row["size4"] != '' ? `<option value="` + row["size4"] + `">` + row["size4"] + `</option>` : ``) +
									(row["size5"] != '' ? `<option value="` + row["size5"] + `">` + row["size5"] + `</option>` : ``) +
									`</select>
															</div>
													</div>
												</div>
												<div class="item-info-product">
													<h4 style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box;	-webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;">
														<a href="single.php?id=` + row["idCategory_product"] + `">` + row["nameProduct"] + ` </a>
													</h4>
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<div class="grid-price ">
																	<span class="money ">` + Intl.NumberFormat('de-DE').format(row['price']) + ` VNĐ</span>
																</div>
															</div>
														</div>
														<div class="shoe single-item hvr-outline-out">
														<form class="addToCart">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="id" value="` + row["idCategory_product"] + `">
																<input type="hidden" name="shoe_item" value="` + row["nameProduct"] + `">
																<input type="hidden" name="amount" value="` + row["price"] + `">
																<input type="hidden" name="image" value="` + row["images1"] + `">
																<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

																<a data-toggle="modal" data-target="#myModal1"></a>
															</form>
														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
								`;
							}
							$('.product-sec1').html(html);
							$('.addToCart').on("submit", function() {
								event.preventDefault();
								var values = {};
								$.each($(this).serializeArray(), function(i, field) {
									values[field.name] = field.value;
								});
								var sizeSelector = '#sizeSelected-' + values['id'];
								if ($(sizeSelector).val()) {
									$.ajax({
										url: './php/cart.php',
										method: 'POST',
										dataType: "json",
										data: {
											id: values['id'],
											shoe_item: values['shoe_item'],
											add: values['add'],
											amount: values['amount'],
											image: values['image'],
											size: $(sizeSelector).val()
										},
										success: function(data) {

										}
									});
									toastr.success('Thêm sản phẩm vào giỏ hàng thành công');
								} else {
									toastr.warning('Bạn chưa chọn size cho sản phẩm này');
								}
							})
						}
					})
				}
			});
		}
	</script>
	<script>
		$('#productSearchButton').on('click', function() {
			event.preventDefault();
			loadProducts();
		})
	</script>
</body>

</html>