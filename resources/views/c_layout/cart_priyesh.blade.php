<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('c_assets/images/slogo.jpg')}}"/>
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
										
										<span>
											
										<i class="fa fa-trash" aria-hidden="true" onclick="deletegift('{{$c['id']}}')" ></i>
											
										</span>
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
										
										<span>
											<i class="fa fa-trash" aria-hidden="true" onclick="deletegift('{{$c['id']}}')" ></i>
										</span>
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

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-5">Total</th>
							<th class="column-5">Remove</th>
						</tr>
						<?php $total = 0;?>
						@if(isset($cart)) 
                        @forelse(@$cart as $c)	
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="{{asset('storage/app/product')}}{{'/'}}{{$c['image']}}" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">{{$c['name']}}</td>
							<td class="column-3">₹{{$c['price']}}</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="{{$c['quentity']}}">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<?php 
								$price = $c['price']; 
								$qty =  $c['quentity'];
								$subtotal = $price * $qty;
								$total = $total + $subtotal;
							?>
							<td class="column-5">₹{{$subtotal}}</td>
							<td>
								<i class="fa fa-trash" aria-hidden="true" onclick="deletegift('{{$c['id']}}')" ></i>
							</td>
						</tr>
						@empty
                        @endforelse
                        @endif
						
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Update Cart
					</button>
				</div>
			</div>

			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						₹ {{$total}}
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							There are no shipping methods available. Please double check your address, or contact us if you need any help.
						</p>

						<span class="s-text19">
							Calculate Shipping
						</span>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
							<select class="selection-2" name="country">
								<option>Select a country...</option>
								<option>INDIA</option>
								<option>US</option>
								<option>UK</option>
								<option>Japan</option>
							</select>
						</div>

						<div class="size13 bo4 m-b-12">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="State /  country">
						</div>

						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
						</div>

						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Update Totals
							</button>
						</div>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						₹ {{$total}}
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
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
	<script src="{{asset('c_assets/js/main.js')}}"></script>
	<script type="text/javascript">
        
        function deletegift(id)
        {
          // alert('innnnnnn');

          var token = '{{Session::token()}}';

          var data = {'id':id,'_token':token};

		  alert(id);

          console.log(data);

          // if (confirm('Are you sure you want to delete this product?')) {

              $.ajax({

              'type':'post',

              'data':data,

              'url':'{{route('removeCartItem')}}',

              success:function(ret){

              }
          })
          // }
        }
    </script>

</body>
</html>
