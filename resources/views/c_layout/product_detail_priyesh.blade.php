<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon"  href="{{asset('c_assets/images/slogo.jpg')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/fonts/themify/themify-icons.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/fonts/elegant-font/html-css/style.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
				</div>

				

				<div class="topbar-child2">
					<span class="topbar-email">
						nkjari5151@gmail.com
					</span>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<img src="{{url('storage/app/logo')}}{{'/'}}{{$data->image}}" >
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="{{route('c_main')}}">Home</a>
							</li>

							<li>
								<a href="{{route('c_product')}}">Our Products</a>
								<ul class="sub_menu">
									<li><a href="{{route('designer')}}">Designer Lace</a></li>
									<li><a href="{{route('fancy')}}">Fancy Lace</a></li>
									<li><a href="{{route('newitems')}}">New Laces</a></li>
								</ul>
							</li>
							<li>
								<a href="{{route('about')}}">About</a>
							</li>
							<li>
								<a href="{{route('contact')}}">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					@if(@Auth::guard('customer')->user()->name)
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{@Auth::guard('customer')->user()->name}} 
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" style="background: black font-color : white" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('web_customer_logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('web_customer_logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
	                </div>
					<span class="linedivide1"></span>
					
					<div class="header-wrapicon2">
						
						<img src="{{asset('c_assets/images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<?php
							$count= ($cart ? count($cart):0);
						?>
						<span class="header-icons-noti">{{$count}}</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
							<?php $total = 0;?>
							@if(isset($cart))    
                                 @forelse(@$cart as $c)	
								<li class="header-cart-item">
									<div class="header-cart-item-img" style="height: 60px; width: 60px;">
										<img src="{{asset('storage/app/product')}}{{'/'}}{{$c['image']}}" height=" alt="IMG">

									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											<p>{{$c['name']}}</p><br>              
										</a>
										<?php 
											
											$price = $c['price']; 
											$qty =  $c['quentity'];

											$subtotal = $price * $qty;
											$total = $total + $subtotal;
											
										?>

										<span class="header-cart-item-info">
											<p>{{$c['price']}} X {{$c['quentity']}} = {{$subtotal}}</p> 
											
										</span>
										
										<span></span>
									</div>
								</li>
								 @empty
                                 @endforelse
                                 @endif
								
							</ul>

							<div class="header-cart-total">
								Total :  {{$total}} 

							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
					@else
					<a href="{{route('clogin')}}" class="header-wrapicon1 dis-block">
						LOG IN
					</a>
					@endif
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="{{route('c_main')}}" class="logo-mobile">
				<img src="{{url('storage/app/logo')}}{{'/'}}{{$data->image}}" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				@if(@Auth::guard('customer')->user()->name)
				<div class="header-icons-mobile">
					
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{@Auth::guard('customer')->user()->name}} 
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" style="background: black font-color : white" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('web_customer_logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('web_customer_logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
	                </div>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						
						<img src="{{asset('c_assets/images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<?php
							$count= ($cart ? count($cart):0);
						?>
						<span class="header-icons-noti">{{$count}}</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<?php $total = 0;?> 
							@if(isset($cart))    
                                 @forelse(@$cart as $c)	
								<li class="header-cart-item">
									<div class="header-cart-item-img" style="height: 60px; width: 60px;">
										<img src="{{asset('storage/app/product')}}{{'/'}}{{$c['image']}}"  alt="IMG">

									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											<p>{{$c['name']}}</p><br>              
										</a>
										<?php 
											
											$price = $c['price']; 
											$qty =  $c['quentity'];

											$subtotal = $price * $qty;
											$total = $total + $subtotal;
											
										?>

										<span class="header-cart-item-info">
											<p>{{$c['price']}} X {{$c['quentity']}} = {{$subtotal}}</p> 
											
										</span>
										
										<span></span>
									</div>
								</li>
								 @empty
                                 @endforelse
                                 @endif
								
							</ul>

							<div class="header-cart-total">
								Total : {{$total}} 

							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
					@else
					<a href="{{route('clogin')}}" class="header-wrapicon1 dis-block">
						LOG IN
					</a>
					@endif
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								nkjari5151@gmail.com
							</span>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="{{route('c_main')}}">Home</a>
					</li>

					<li class="item-menu-mobile">
						<a href="{{route('c_product')}}">Our Products</a>
						<ul class="sub_menu">
							<li><a href="{{route('designer')}}">Designer Lace</a></li>
							<li><a href="{{route('fancy')}}">Fancy Lace</a></li>
							<li><a href="{{route('newitems')}}">New Laces</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>
					<li class="item-menu-mobile">
						<a href="{{route('about')}}">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="{{route('contact')}}">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- breadcrumb -->
	<!-- <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.html" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="product.html" class="s-text16">
			Women
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="#" class="s-text16">
			T-Shirt
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			Boxy T-Shirt with Roll Sleeve Detail
		</span>
	</div> -->

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 m-l-20 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="slick3">
						<div class="item-slick3" data-thumb="images/thumb-item-01.jpg">
							<div class="wrap-pic-w">
								<img src="{{url('storage/app/product')}}{{'/'}}{{$query[0]->image}}" height="600px" width="500px" alt="IMG-PRODUCT">
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="w-size14 p-t-30 respon5">
				<form  method="post"  action="{{route('addtocart_post')}}">
				{{csrf_field()}}
				<input type="hidden" name="id" value="{{$query[0]->id}}">
				<h4 class="product-detail-name m-text16 p-b-13">
					{{$query[0]->name}}
				</h4>

				<span class="m-text17">
					<tr>₹<input type="text" name="price" value="{{$query[0]->price}}"></tr>
				</span>

				<p class="s-text8 p-t-10">
					Catering to the requirements of our clients, we are involved in offering <input type="text" name="name" value="{{$query[0]->name}}">.
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							QUENTITY :
						</div>

						<div class="bo4 of-hidden">
							<input type="text" name="quentity" height="200px" value="1">
						</div>
						<div class="s-text15 w-size15 t-center p-r-50" style="background: ">
							/PIECE
						</div>
						<div style=" height: 200px; width:400px; margin-top: 30px;">
							<tr>
							<div class="s-text15 w-size15  m-l-15" style=" height: 30px; font-size:15px;   width:500px;">
								<td>USAGE/APPLICATION</td> <td>:</td>
								<td><input type="text" name="usage" value="{{$query[0]->usge}}"> </td>
							</div>
							</tr>
							<tr>
							<div class="s-text15 w-size15  m-l-15" style=" height: 30px; font-size:15px;   width:500px;">
								<td>WIDTH</td> <td>:
									<input type="text" name="usage" value="{{$query[0]->width}}"> </td>
							</div>
							</tr>
							<tr>
							<div class="s-text15 w-size15  m-l-15" style=" height: 30px; font-size:15px;   width:500px;">
								<td>PACKAGING TYPE</td> <td>:
									<input type="text" name="usage" value="{{$query[0]->packaging_type}}"> </td>
							</div>
							</tr>
							<tr>
							<div class="s-text15 w-size15  m-l-15" style=" height: 30px; font-size:15px;   width:500px;">
								<td>LENGTH</td> <td>:
									<input type="text" name="usage" value="{{$query[0]->length}}"> </td>
							</div>
							</tr>
						</div>
					</div>
					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>
				</div>
				</form>
				<div class="p-b-45">
					<span class="s-text8 m-r-35">SKU: MUG-01</span>
					<span class="s-text8">Categories: Mug, Design</span>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>

				<!-- <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews (0)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div> -->
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					@foreach($image as $d1)
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative ">
								<img src="{{url('storage/app/banner2')}}{{'/'}}{{$d1->image}}"  alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Add to Cart
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
									{{$d1->name}}
								</a>

								<span class="block2-price m-text6 p-r-5">
									<i class="fa fa-inr" aria-hidden="true"></i> {{$d1->price}}
								</span>
							</div>
						</div>
					</div>
					@endforeach 
				</div>
			</div>

		</div>
	</section>


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+91) 96 716 6879
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Products
				</h4>
				<ul>
					<li class="p-b-9">
						<a href="{{route('designer')}}" class="s-text7">
							Designer Laces
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('fancy')}}" class="s-text7">
							Fancy Laces
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('newitems')}}" class="s-text7">
							New Items
						</a>
					</li>

					
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Search
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('about')}}" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('contact')}}" class="s-text7">
							Contact Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="{{asset('c_assets/images/icons/paypal.png')}}" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="{{asset('c_assets/images/icons/visa.png')}}" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="{{asset('c_assets/images/icons/mastercard.png')}}" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="{{asset('c_assets/images/icons/express.png')}}" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="{{asset('c_assets/images/icons/discover.png')}}" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>

<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('c_assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/select2/select2.min.js')}}"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('c_assets/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/sweetalert/sweetalert.min.js')}}"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});

		$('.btn-addcart-product-detail').each(function(){
			var nameProduct = $('.product-detail-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="{{asset('c_assets/js/main.js')}}"></script>

</body>
</html>
