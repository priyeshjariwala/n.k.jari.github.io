@extends('cmain_layout.app')

@section('content')
	
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
				<form  method="post"  action="{{route('add')}}" >
				{{csrf_field()}}
				<input type="hidden" name="id" value="{{$query[0]->id}}">

				<h4 class="product-detail-name m-text16 p-b-13">
					{{$query[0]->name}}
				</h4>

				<p class="s-text8 p-t-10">
					Catering to the requirements of our clients, we are involved in offering <input type="text" name="name" value="{{$query[0]->name}}" style="width: 350px;" >
				</p>
				
				<span class="m-text17">
					<tr>₹<input type="text" name="price" value="{{$query[0]->price}}"></tr>
				</span>
				<input type="hidden" name="img" value="{{$query[0]->image}}" >

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							QUENTITY :
						</div>
						<div class="bo4 of-hidden">
							<input type="number" name="quantity" height="200px" value="{{$query[0]->quantity}}" >
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
									<input type="text" name="width" value="{{$query[0]->width}}"> </td>
							</div>
							</tr>
							<tr>
							<div class="s-text15 w-size15  m-l-15" style=" height: 30px; font-size:15px;   width:500px;">
								<td>PACKAGING TYPE</td> <td>:
									<input type="text" name="type" value="{{$query[0]->packaging_type}}"> </td>
							</div>
							</tr>
							<tr>
							<div class="s-text15 w-size15  m-l-15" style=" height: 30px; font-size:15px;   width:500px;">
								<td>LENGTH</td> <td>:
									<input type="text" name="length" value="{{$query[0]->length}}"> </td>
							</div>
							</tr>
						</div>
					</div>
					@if(@Auth::guard('customer')->user()->name)
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
					@else
					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class=" size9 trans-0-4 m-t-10 m-b-10">
								<a href="{{route('clogin')}}">
									<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
												LOG IN
									</button>	
								</a>
							</div>
						</div>
					</div>
					@endif
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

	@endsection