@extends('cmain_layout.app')

@section('content')
	<!-- banner 1 -->
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

	<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{asset('c_assets/images/home/homeimg/cutwork-lace.jpg')}}" alt="IMG-BENNER">
						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{route('c_product')}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Cut Work Lace
							</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{asset('c_assets/images/home/homeimg/pankhalace.jpg')}}" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{route('newitems')}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Pankha Lace
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{asset('c_assets/images/home/homeimg/zulzul lace.jpg')}}" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{route('designer')}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Zul Lace
							</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{asset('c_assets/images/home/homeimg/tissue-lace.jpg')}}" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{route('designer')}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Tissue Lace
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{asset('c_assets/images/home/homeimg/moti-lace.jpg')}}" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{route('fancy')}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Moti Lace 
							</a>
						</div>
					</div>

					<!-- block2 -->
					<div class="block2 wrap-pic-w pos-relative m-b-30">
						<img src="{{asset('c_assets/images/icons/bg-01.jpg')}}" alt="IMG">

						<div class="block2-content sizefull ab-t-l flex-col-c-m">
							<h4 class="m-text4 t-center w-size3 p-b-8">
								Sign up & get 20% off
							</h4>

							<p class="t-center w-size4">
								Be the frist to know about the latest Laces and get exclu-sive offers
							</p>

							<div class="w-size2 p-t-25">
								<!-- Button -->
								<a href="{{route('cregister')}}" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
									Sign Up
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Featured Products
				</h3>
			</div>

			<!-- banner  2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					@foreach($image as $d1)
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
						<a href="{{route('c_product')}}">
							<div class="block2-img wrap-pic-w of-hidden pos-relative ">
								<img src="{{url('storage/app/banner2')}}{{'/'}}{{$d1->image}}"  alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" style="font-size: 11px;">
											{{$d1->name}}
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								

								<span class="block2-price m-text6 p-r-5">
								<center>
									<i class="fa fa-inr" aria-hidden="true"></i> {{$d1->price}}
								</center>
								</span>
							</div>
						</a>
						</div>
					</div>
					@endforeach 
				</div>
			</div>

		</div>
	</section>

	<!-- Banner 3 -->
	<section class="banner2 bg5 p-t-55 p-b-55">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">
						<img src="{{asset('c_assets/images/home/banner21.jpg')}}" alt="IMG-BANNER">

						<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15" >
							<span class="m-text9 p-t-45 fs-20-sm"style="color: black">
								The Beauty
							</span>

							<h3 class="l-text1 fs-35-sm" style="color: black">
								Lookbook
							</h3>

							<a href="{{route('c_product')}}" class="s-text4 hov2 p-t-20 " style="color: black">
								View Collection
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
						<img src="{{asset('c_assets/images/home/banner212.jpg')}}" alt="IMG-BANNER">

						<div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
							<div class="t-center">
								<a href="product-detail.html" class="dis-block s-text3 p-b-5" style="color: white">
									offers for all types of laces
								</a>
								<span class="block2-newprice m-text8" style="color: white">
									<i class="fa fa-inr" aria-hidden="true"></i>15.90
								</span>
							</div>

							<div class="flex-c-m p-t-44 p-t-30-xl">
								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 days">
										69
									</span>

									<span class="s-text5">
										days
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 hours">
										04
									</span>

									<span class="s-text5">
										hrs
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 minutes">
										32
									</span>

									<span class="s-text5">
										mins
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 seconds">
										05
									</span>

									<span class="s-text5">
										secs
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Free Delivery India
				</h4>

				<a href="#" class="s-text11 t-center">
					Click here for more info
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					10 Days Return
				</h4>

				<span class="s-text11 t-center">
					Simply return it within 10 days for an exchange.
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Store Opening
				</h4>

				<span class="s-text11 t-center">
					Shop open from Monday to Saturday
				</span>
			</div>
		</div>
	</section>
@endsection
	