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
			<form role="form" id="OtherValidator" method="post" action="{{route('cbanner_post')}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<table height="200px"  >
					<tr>
						<td>
							SELECT IMAGE :
						</td>
               		    <td>
                    		<input type="file" class="form-control" name="image" required="required">	
						</td>	
					</tr>
					<tr>
						<td>
							Title :
						</td>
						<td>
							<input type="text" class="form-control" name="title" required="required">
						</td>
					</tr>
                	<tr>
                    	<td>
							STATUS :
						</td>
						<td>
							<select name="active">
								<option value="active">ACTIVE</option>
								<option value="inactive">INACTIVE</option>
							</select>
						</td>
                	</tr>
					<tr>
						<td>
							<input type="submit" class="btn btn-primary" value="Submit"></button>
						</td>
					</tr>
				</table>
			</form>
			<div class="widget-header">
				<h2><strong>Edit </strong>Slider</h2>
				<div class="additional-btn">
					<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
				</div>
			</div>
			<div class="widget-content">
			<br>					
				<div class="table-responsive">
					<form class='form-horizontal' role='form'method="post" action="{{route('cbanner_post')}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<table id="datatables-4" class="table table-striped table-bordered" cellspacing="0" width="100%">
					    	<thead>
								<tr>
									<th>NO</th>
									<th>IMAGE</th>
									<th>TITLE</th>
									<th>STATUS</th>
									<th>CREATED TIME</th>
									<th>OPERATIONS</th>
								</tr>
							</thead>
							<tbody>
								@if(@$data)
								@forelse($data as $d)
								<tr>
									<td>{{$d->id}}</td>
									<td><img src="{{url('storage/app/banner')}}{{'/'}}{{$d->image}}" style="height: 60px; width: 60px;"></td>
									<td>{{$d->title}}</td>
									<td>
										@if($d->active == 'active')
											<a href="{{route('banner_active',['id'=>encrypt($d->id),'active' => 'active'])}}">Active</a>
										@else
											<a href="{{route('banner_active',['id'=>encrypt($d->id),'active' => 'inactive'])}}">Inactive</a>
										@endif
									</td>
									<td>{{$d->created_at}}</td>
									<td><center><a href="{{route('d_banner',['id'=>$d->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a></center></td>
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