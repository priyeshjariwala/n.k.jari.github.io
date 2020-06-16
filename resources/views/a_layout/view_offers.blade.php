@extends('a_layout.aindex')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-header">	
				<h2><strong>Offers</strong>Details</h2> 
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
							<th>From Date</th>
							<th>To Date</th>
							<th>Coupon Code</th>
							<th>Discount Rate</th>
							<th>Minimum Bill Amount</th>
							<th>Maximun Discount</th>
							<th>Description</th>
							<th>Active</th>
							</tr>
		    			</thead>
		    			<tbody>
		    			@forelse($data as $d)
					    <tr class="profile-pic">
					        <td>{{$d->date1}}</td>
					        <td>{{$d->date2}}</td>
					        <td>{{$d->coupne}}</td>
					        <td>{{$d->rate}}</td>
					        <td>{{$d->amount}}</td>
					        <td>{{$d->maxi}}</td>
					        <td>{{$d->descr}}</td>
					        <td>

					        @if($d->active == 'true')
					        <a href="{{route('offer_active',['id'=>encrypt($d->id),'active'=>'true'])}}" >
					        	{{$d->active}}</a>
					        @elseif($d->active == 'false')
					       	<a href="{{route('offer_active',['id'=>encrypt($d->id),'active'=>'false'])}}" >
					        	{{$d->active}}</a>
					        @endif

					        </td>
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

