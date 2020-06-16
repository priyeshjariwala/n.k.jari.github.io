@extends('a_layout.aindex')
@section('css')
 <link href="{{asset('a_assets/assets/libs/jquery-datatables/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('a_assets/assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('a_assets/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-header">
				<h2><strong>FEEDBACK </strong></h2>
				<div class="additional-btn">
					<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
				</div>
			</div>
			<div class="widget-content">
			<br>					
				<div class="table-responsive">
					<form class='form-horizontal' role='form'method="post" action="{{route('contact_post')}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<table id="datatables-4" class="table table-striped table-bordered" cellspacing="0" width="100%">
					    	<thead>
								<tr>
									<th>NO</th>
									<th>NAME</th>
									<th>MOBILE NO</th>
									<th>EMAIL</th>
									<th>FEEDBACK</th>
									<th>OPERATIONS</th>
								</tr>
							</thead>
							<tbody>
								@if(@$data)
								@forelse($data as $d)
								<tr>
									<td>{{$d->id}}</td>
									<td>{{$d->name}}</td>
									<td>{{$d->mobile}}</td>
									<td>{{$d->email}}</td>
									<td>{{$d->message}}</td>
									<td><center><a href="{{route('d_feedback',['id'=>$d->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a></center></td>
								</tr>
								@empty
								@endforelse
								@endif
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('js')
	<script src="{{asset('a_assets/assets/libs/jquery-datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('a_assets/assets/libs/jquery-datatables/js/dataTables.bootstrap.js')}}"></script>
	<script src="{{asset('a_assets/assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
	<script src="{{asset('a_assets/assets/js/pages/datatables.js')}}"></script>
@endsection