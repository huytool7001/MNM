<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Downy Shoes an Ecommerce Category Bootstrap Responsive Website Template | Check Out :: w3layouts</title>
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
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/shop.css" type="text/css" media="screen" property="" />
	<link href="css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
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
	<?php
	require './php/cart.php';
	?>
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
					<li>Check Out</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>
	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Thanh<span> toán</span></h3>

				<div class="checkout-right">
					<h4></h4>
					<!-- <h4>Giỏ hàng của bạn có: <span> <?= $_SESSION['cart'] ? sizeof($_SESSION['cart']) : 0 ?> sản phẩm</span></h4> -->
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Sản phẩm</th>
								<th>Số lượng</th>
								<th>Size</th>

								<th>Giá</th>
								<th>Xoá</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
								for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
									echo
									'<tr class="rem1" data-id="' . $_SESSION['cart'][$i][0] . '" data-size="' . $_SESSION['cart'][$i][5] . '">
										<td style="width:50%;">
											<a style="color:black" href="single.php?id=' . $_SESSION['cart'][$i][0] . '">
												<img style="width: 10%; height: 10%; border-radius: 50%; " src="' . $_SESSION['cart'][$i][4] . '"> 
												' . $_SESSION['cart'][$i][1] . '
											</a>
										</td>
										
										<td class="invert">
											<div class="quantity">
												<div class="quantity-select">
													<div class="entry value-minus" data-id="' . $_SESSION['cart'][$i][0] . '" data-size="' . $_SESSION['cart'][$i][5] . '">&nbsp;</div>
													<div class="entry value"><span>' . $_SESSION['cart'][$i][2] . '</span></div>
													<div class="entry value-plus active" data-id="' . $_SESSION['cart'][$i][0] . '" data-size="' . $_SESSION['cart'][$i][5] . '">&nbsp;</div>
												</div>
											</div>
										</td>
										<td>' . (isset($_SESSION['cart'][$i][5]) ? $_SESSION['cart'][$i][5] : '') . '</td>
										<td class="invert" total-row-id="' . $_SESSION['cart'][$i][0] . '-' . $_SESSION['cart'][$i][5] . '">' . number_format($_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][2], 0, ',', '.') . 'đ</td>
										<td class="invert">
											<div class="rem">
												<div class="close1" style="right: 10px; top: -20px" data-id="' . $_SESSION['cart'][$i][0] . '" data-size="' . $_SESSION['cart'][$i][5] . '"> </div>
											</div>
		
										</td>
									</tr>';
								}
							}
							?>
						</tbody>
					</table>
				</div>
				<div class="checkout-left">
					<div class="col-md-4 checkout-left-basket">
						<a href="./shop.php">
							<h4>Tiếp tục mua sắm</h4>
						</a>
						<ul>
							<?php
							if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
								for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
									echo '<li data-id="' . $_SESSION['cart'][$i][0] . '" data-size="' . $_SESSION['cart'][$i][5] . '">
									<i style="width:70%; overflow: hidden; text-overflow: ellipsis; display: -webkit-box;	-webkit-line-clamp: 1; line-clamp: 1; -webkit-box-orient: vertical;">' . $_SESSION['cart'][$i][1] . '</i>
									<i>-</i> <span total-row-id="' . $_SESSION['cart'][$i][0] . '-' . $_SESSION['cart'][$i][5] . '">' . number_format($_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][2], 0, ',', '.') . 'đ</span></li>';
								}
								echo '<li class="total">Tổng cộng <i>-</i> <span id="total">' . number_format(getTotal(), 0, ',', '.') . 'đ</span></li>';
							}
							?>


						</ul>
					</div>
					<div class="col-md-8 address_form">
						<h4>Thông tin chi tiết</h4>
						<form action="#" method="POST" class="creditly-card-form agileinfo_form">
							<section>
								<div class="information-wrapper">
									<div class="first-row">
										<div class="form-group">
											<label class="control-label">Họ tên: </label>
											<input class="billing-address-name form-control" type="text" name="name" placeholder="Họ tên">
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="form-group">
													<label class="control-label">Số điện thoại:</label>
													<input class="form-control" type="text" name="phone" placeholder="Số điện thoại">
												</div>
											</div>
											<div class="card_number_grid_right">
												<div class="form-group">
													<label class="control-label">Địa chỉ: </label>
													<input class="form-control" type="text" name="address" placeholder="Địa chỉ">
												</div>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="form-group">
											<label class="control-label">Tỉnh/TP: </label>
											<input class="form-control" type="text" name="city" placeholder="Tỉnh/TP">
										</div>
										<div class="form-group">
											<label class="control-label">Loại địa chỉ: </label>
											<select class="form-control option-w3ls" name="addressType">
												<option>Cơ quan</option>
												<option>Nhà riêng</option>
											</select>
										</div>
									</div>
								</div>
							</section>
						</form>
						<div class="checkout-right-basket">
							<a type="button" id="submit">Thực hiện thanh toán</a>
						</div>
					</div>

					<div class="clearfix"> </div>


					<div class="clearfix"></div>
				</div>
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
	<!-- /nav -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/demo1.js"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="js/search.js"></script>
	<!--//search-bar-->
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function() {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
			console.log($(this).data('size'));
			$.ajax({
				url: './php/cart.php',
				method: 'POST',
				dataType: "json",
				data: {
					plusId: $(this).data('id'),
					plusSize: $(this).data('size'),
				},
				success: function(data) {
					var selector = '[total-row-id=' + data[0] + '-' + data[3] + ']';
					$(selector).text(Intl.NumberFormat('de-DE').format(data[1]) + "đ");
					$('#total').text(Intl.NumberFormat('de-DE').format(data[2]) + "đ");
				}
			})
		});

		$('.value-minus').on('click', function() {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) {
				divUpd.text(newVal);
				$.ajax({
					url: './php/cart.php',
					method: 'POST',
					dataType: "json",
					data: {
						minusId: $(this).data('id'),
						minusSize: $(this).data('size'),
					},
					success: function(data) {
						var selector = '[total-row-id=' + data[0] + '-' + data[3] + ']';
						$(selector).text(Intl.NumberFormat('de-DE').format(data[1]) + "đ");
						$('#total').text(Intl.NumberFormat('de-DE').format(data[2]) + "đ");
					}
				})
			}

		});
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function(c) {
			$('.close1').on('click', function(c) {
				event.preventDefault();
				$.ajax({
					url: './php/cart.php',
					method: 'POST',
					dataType: "json",
					data: {
						delId: $(this).data('id'),
						delSize: $(this).data('size'),
					},
					success: function(data) {
						var selector = '[data-id=' + data[0] + '][data-size=' + data[2] + ']';
						$(selector).remove();
						$('#total').text(Intl.NumberFormat('de-DE').format(data[1]) + "đ");
					}
				})
			});
		});
	</script>

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
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		$('.top_shoe_cart').on('click',function(event){
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
		$().ready(function() {
			$('#submit').on('click', function() {
				$('.creditly-card-form').submit();
			})
			$('.creditly-card-form').on('submit', function(event) {
				if ($(this).valid()) {
					event.preventDefault();
					if($('#total').text() == '0đ'){
						return toastr.warning('Giỏ hàng của bạn vẫn còn trống. Hãy quay lại sau khi thêm sản phẩm vào giỏ hàng của mình');
					}
					$.ajax({
						url: './php/order.php',
						method: 'POST',
						dataType: "json",
						data: {
							name: $('[name=name]').val(),
							phone: $('[name=phone]').val(),
							address: $('[name=address]').val(),
							city: $('[name=city]').val(),
							addressType: $('[name=addressType]').val(),
						},
						success: function(data) {
						}
					});
					toastr.success('Đặt hàng thành công');
					setTimeout(function(){window.location.href='./index.php'},2000);
				}
			})

			$('.creditly-card-form').validate({
				rules: {
					name: {
						required: true,
					},
					phone: {
						required: true,
						digits: true,
						rangelength: [10, 10]
					},
					address: {
						required: true
					},
					city: {
						required: true,
					},
					type: {
						required: true,
					}
				},
				messages: {
					name: "Đây là trường bắt buộc",
					phone: {
						required: "Đây là trường bắt buộc",
						rangelength: "Hãy nhập số điện thoại hợp lệ",
						digits: "Hãy nhập số điện thoại hợp lệ"
					},
					address: "Đây là trường bắt buộc",
					city: "Đây là trường bắt buộc",
					type: "Đây là trường bắt buộc",
				},
				errorElement: 'span',
				errorPlacement: function(error, element) {
					error.addClass('invalid-feedback');
					element.closest('.form-group').append(error);
				},
				highlight: function(element, errorClass, validClass) {
					$(element).addClass('is-invalid');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).removeClass('is-invalid');
				}
			});
		});
	</script>

</body>

</html>