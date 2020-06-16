@extends('cmain_layout.app')

@section('content')
		
	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							CATEGORIES
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="{{route('designer')}}" class="s-text13 ">
									Designer Laces
								</a>
							</li>

							<li class="p-t-4">
								<a href="{{route('fancy')}}" class="s-text13">
									Fancy Laces
								</a>
							</li>

							<li class="p-t-4">
								<a href="{{route('newitems')}}" class="s-text13 active1">
									New Items
								</a>
							</li>
						</ul>

						<!--  -->
						
						
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2  w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Default Sorting</option>
									<option>Popularity</option>
									<option>Price: low to high</option>
									<option>Price: high to low</option>
								</select>
							</div>

							<div class="rs2-select2  w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Price</option>
									<option>₹0.00 - ₹50.00</option>
									<option>₹50.00 - ₹100.00</option>
									<option>₹100.00 - ₹150.00</option>
									<option>₹150.00 - ₹200.00</option>
									<option>₹200.00+</option>

								</select>
							</div>
						</div>

						<!-- <span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span> -->
					</div>

					<!-- Product -->
					<div class="row">
						@foreach($image as $d)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2" style="height='300px' width='200px'">
								<a href="{{route('product_detail',['id'=>$d->id])}}">
								<div class="block2-img wrap-pic-w  pos-relative ">
									<img src="{{url('storage/app/product')}}{{'/'}}{{$d->image}}" height="300px" width="200px" alt="IMG-PRODUCT">
								
									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												view
											</button>
										</div>
									</div>
								</div>
								<div class="block2-txt p-t-20">
									<a href="{{route('product_detail',['id'=>$d->id])}}" class="block2-name dis-block s-text3 p-b-5">
										{{$d->name}}
									</a>

									<span class="block2-price m-text6 p-r-5">
										₹{{$d->price}}
									</span>
								</div>
								</a>
							</div>
						</div>
						@endforeach
					</div>
					<!-- Pagination -->
					<span>{{$image->links()}}</span>
				</div>    
			</div>
		</div>
	</section>

@endsection
