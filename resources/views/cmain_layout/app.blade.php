<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title ?? 'N K Jari' }}</title>
	<!-- <title>Home</title> -->
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
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/vendor/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/vendor/slick/slick-theme.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/vendor/noui/nouislider.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/css/main.css')}}">
<!--===============================================================================================-->

</style>
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
                        <a class="dropdown-item" href="{{route('orders')}}">
                            Your Orders
                        </a>
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
						
						<span class="header-icons-noti">{{count(\Cart::getContent())}} </span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
							@if(count(\Cart::getContent()) > 0)
								@foreach(\Cart::getContent() as $item)	
								<li class="header-cart-item">
									<div class="header-cart-item-img" style="height: 60px; width: 60px;">
										<img src="{{asset('storage/app/product')}}{{'/'}}{{ $item->attributes->image }}"  alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											<p>{{$item->name}}</p><br>              
										</a>


										<span class="header-cart-item-info">
											<p>{{$item->price}} X {{ \Cart::getTotalQuantity()}}</p> 
										</span>
										
										<span></span>
									</div>
								</li>
								 @endforeach
							 @else
								<li class="list-group-item">Your Cart is Empty</li>
							 @endif
								
							</ul>

							<div class="header-cart-total">
								Total ₹{{ \Cart::getTotal() }}

							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('cart_lases')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
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
                    	<a class="dropdown-item" href="{{route('orders')}}">
                            Your Orders
                        </a>
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
						
						<span class="header-icons-noti">{{count(\Cart::getContent())}}</span>

					
						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
							@if(count(\Cart::getContent()) > 0)
								@foreach(\Cart::getContent() as $item)			
								<li class="header-cart-item">
									<div class="header-cart-item-img" style="height: 60px; width: 60px;">
										<img src="{{asset('storage/app/product')}}{{'/'}}{{ $item->attributes->image }}"  alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											<p>{{$item->name}}</p><br>              
										</a>

										<span class="header-cart-item-info">
											<p>{{$item->price}} X \Cart::getTotalQuantity()</p> 
										</span>
										
										<span></span>
									</div>
								</li>
								 @endforeach
							 @else
								<li class="list-group-item">Your Cart is Empty</li>
							 @endif
							</ul>

							<div class="header-cart-total">
								Total : ₹{{ \Cart::getTotal() }}

							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('cart_lases')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
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
						<ul class="sub-menu">
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

	@yield('content');

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

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



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
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/slick/slick.js')}}"></script>
	<script type="text/javascript" src="{{asset('c_assets/vendor/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('c_assets/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('c_assets/vendor/lightbox2/js/lightbox.min.js')}}"></script>
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
	</script>
	<script>
   		$('.slider-for').slick(
   		{
	      dots: false,
	      arrows: false,
	      infinite: true,
	      speed: 500,
	      fade: true,
	      cssEase: 'linear',
	      autoplay: true,
	  	  autoplaySpeed: 6000
   		});     
   		$('.slider-nav').slick(\
   		{
		  slidesToShow: 2,
		  arrows: false,
		  slidesToScroll: 1,
		  asNavFor: '.slider-for',
		  dots: true,
		  centerMode: true,
		  focusOnSelect: true,
   		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript">
	function changecoupne()
  	{
    	// alert('coupne.....Here');

    	var token = '{{Session::token()}}';
		coupneid = document.getElementById('coupne').value;
		// console.log(coupneid);
		data = {coupneid:coupneid,'_token':token};
		console.log(data);
		$.ajax({
		     'type':'post',
		     'data':data,
		     'url':'{{route('get_offer_code')}}',
		     success:function(ret){
		     	// console.log(ret.length);
		     	// console.log(ret[0],ret[1],ret.length,ret[0][0]['coupne']);
		    if(ret.length)
		    {	
			     	var total_amt = document.getElementById('mainprice').value;	
			     	// console.log(ret.length,total_amt);

			     	for(var i=0;i<ret.length;i++)
			     	{ 	
			     			var min_amt = ret[i][0]['amount'];
			     			var dis = ret[i][0]['rate'];
			     			var max_dis = ret[i][0]['maxi'];
			     			var list = "";
			     			var list_dis = "";
			     			var dis_amt_main = "";
			     			// console.log(ret,total_amt,min_amt,dis,max_dis);

			     			// console.log(ret,total_amt,min_amt,ret[0][0]['id']);


			     			var a = total_amt * dis / 100;//count discount 
			     			var b = total_amt - a ;//minus discount

                            alert('Congratulation You have got '+a+'₹ discount on Your Products');

                        	$('#price_display').css('display','none');
                        	$('#price').css('display','block');
                        	$('#discount_display').css('display','none');
                        	$('#discount').css('display','block');
                        	$('#amt_main_dis').css('display','block');
                        	$('#amt_main').css('display','block');

                            list += '<div id="price" style="display: block;" ><span class="m-text20 w-size20 w-full-sm m-r-63" >₹<input type="text" name="mainprice" id="mainprice" value="'+b+'" disabled style="width: 100px;background: white;" ></span></div>';

                            list_dis += '<div id="discount" style="display: block;" ><span class="m-text21 w-size20 w-full-sm" >₹<input type="text" name="discount" id="discount_amt" value="'+a+'" disabled style="width: 100px;background: white;" ></span></div>';

                            dis_amt_main += '<div id="amt_main" style="display: block;" ><input type="hidden" name="amount" value="'+b+'" id="mainprice" ></div>';

                            document.getElementById('price').innerHTML = list;
                            document.getElementById('discount').innerHTML = list_dis;
                            document.getElementById('amt_main').innerHTML = dis_amt_main;


                            alert('Your Coupen code Apply Succesfully...!!!');

			     			console.log(total_amt,a,b);
			     	}
		     	}
		     	else
		     	{
                     alert('Your Coupen code is Not Match Succesfully...Please Try again Later...!!!');

		     	}
		     
		 }

		 })
	}
</script>
	
<!--===============================================================================================-->
	<script src="{{asset('c_assets/js/main.js')}}"></script>

</body>
</html>
