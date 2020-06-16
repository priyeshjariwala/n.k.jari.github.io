@extends('a_layout.aindex')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-header">	
				<h2><strong>Orders</strong>Details</h2> 
				<div class="additional-btn">
					<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
				</div>
			</div>
			<div class="widget-content">			
				<div class="table-responsive">
					<form class='form-horizontal' role='form'method="post" action="#" enctype="multipart/form-data">
					{{csrf_field()}}
		  			<table id="datatables-4" class="table table-striped table-bordered" cellspacing="0" width="100%">
		    			<thead>
							<tr>
								<th>Sr No.</th>
								<th>Customer Name</th>
								<th>Product Name</th>
								<th>Product Quentity</th>
								<th>Product Price</th>
								<th>Total Ammount</th>
								<th>Time</th>
							</tr>
		    			</thead>
		    			<tbody>
		    			<?php $i=1;?>
		    			@forelse($data as $d)
					    <tr class="profile-pic">
					        <td>{{$i++}}</td>
					        <td>{{$d->name}}</td>
					        <td>{{$d->prod_name}}</td>
					        <td>{{$d->prod_qty}}</td>
					        <td>{{$d->product_price}}</td>
					        <td>{{$d->price_tot}}</td>
					        <td>{{$d->created_at}}</td>
					        
					    </tr>
				      	@empty
				      	sorry no product found
				      	@endforelse
		    			</tbody>
		  			</table>
				</div>
			</div>
		</div>	
	</div>
</div>
@endsection