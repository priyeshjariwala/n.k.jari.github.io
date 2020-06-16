@extends('cmain_layout.app')

@section('content')

<!-- Session Messages -->
@if(session()->has('success_msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success_msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if(session()->has('alert_msg'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session()->get('alert_msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if(count($errors) > 0)
    @foreach($errors0>all() as $error)
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endforeach
@endif
<!-- End Session Messages -->

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
							<th class="column-4 p-l-40">Quantity</th>
							<th class="column-5">Total</th>
							<th class="column-5">Remove</th>
						</tr>
						@foreach($cartCollection as $item)	
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="{{asset('storage/app/product')}}{{'/'}}{{ $item->attributes->image }}" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">{{ $item->name }}</td>
							<td class="column-3">₹{{ $item->price }}</td>
							<td class="column-4">
								<!-- <div class="flex-w bo5 of-hidden w-size17"> -->
									<!-- <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button> -->
		                            
		                            <form action="{{ route('update') }}" method="POST">
		                                {{ csrf_field() }}

		                            	<input type="hidden" value="{{ $item->id}}" id="id" name="id">

										<input class="size8 m-text18 t-center num-product" type="text" value="{{ $item->quantity }}" id="quantity" name="quantity" >

										<input type="submit" name="UPDATE" value="UPDATE" class="btn btn-secondary btn-sm" style="margin-right: 25px;">
										

									</form>

									<!-- <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button> -->
								<!-- </div> -->
							</td>
							
							<td class="column-5">₹ {{ \Cart::get($item->id)->getPriceSum() }}</td>
							<td>
								<form action="{{ route('remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button>
                                </form>
							</td>
						</tr>
						@endforeach
						
						@if(count($cartCollection)>0)
				            <form action="{{ route('clear') }}" method="POST">
				                {{ csrf_field() }}
				                <button class="btn btn-secondary btn-md">Clear Cart</button>
				            </form>
				        @endif
					</table>
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
						₹ {{ \Cart::getTotal() }}
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
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						₹ {{ \Cart::getTotal() }}
					</span>
				</div>

				<div class="size15 trans-0-4">
					<a href="{{route('address_fetch')}}">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 " style="color: white">
						Proceed to Checkout 
					</button>
					</a>
				</div>
			</div>
		</div>
	</section>
@endsection

