<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
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
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/vendor/slick/slick-theme.css')}}">
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
					<img src="{{url('storage/app/logo')}}{{'/'}}{{$data->image}}">
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
							@if(isset($cart))    
                                <?php $total = 0;?>    
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
								Total : <?php $total ?>

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

	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				@foreach($images as $d)
				<div class="item-slick1 item1-slick1" style="background-image: url({{url('storage/app/banner')}}{{'/'}}{{$d->image}});">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown" style="color: black; font-size:25px; font-weight: 600;">
							{{$d->title}}
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp" style="color: black;">
							New arrivals
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn" >
							<!-- Button -->
							<a href="{{route('c_product')}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4" style="color: black;">
								Shop Now
							</a>
						</div>
					</div>
				</div>

				@endforeach
				
			</div>
		</div>
	</section>
	

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60292.2797778253!2d72.81878237910158!3d19.183515900000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b70378829b9b%3A0xacdc8b3601f83b2e!2sGeeta%20Lace!5e0!3m2!1sen!2sin!4v1585308807502!5m2!1sen!2sin" width="550" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<form class="leave-comment" onsubmit="return required()" name="feedback"  method="post" action="{{route('contact_post')}}">
						{{csrf_field()}}
						<h4 class="m-text26 p-b-36 p-t-15">
							Send us your message
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name" required="required">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" id="phonenum" type="tel" pattern="^\d{10}$" name="mno" placeholder="Mobile No" required="required">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" pattern="[^ @]*@[^ @]*" name="email" placeholder="Email Address" required="required">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="msg" id="msg" placeholder="Message" required="required"></textarea>

						<div class="w-size25">
							<!-- Button -->
							<button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Send
							</button>
						</div>
					</form>
					 <script type="text/javascript">
						function required()
						{
							var msg_area = document.getElementById("msg");
						    msg_area.innerHTML = "";
						    if (document.getElementById("msg").value.length < 50) 
						    {
						        alert("please enter a minimum 50 words!!");
						        return false;
						    }

						}
					</script> 
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
						Any questions? Let us know in store at 51 Dharmayug Society Gate No 1 Near Madhi Ni Khamni Udhna Surat-394210  or call us on (+91) 70466 29027
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
					
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
				Copyright © 2020 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Priyesh Jariwala</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('c_assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/slick/slick.js')}}"></script>
	<script type="text/javascript" src="{{asset('c_assets/vendor/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('c_assets/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/select2/select2.min.js')}}"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

<!--===============================================================================================-->
	<script src="{{asset('c_assets/js/main.js')}}"></script>

</body>
</html>
