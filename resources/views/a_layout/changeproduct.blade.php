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
			<h2><strong> &nbsp EDIT </strong>PRODUCT</h2>
			<form role="form" id="OtherValidator" method="post" action="{{route('cproduct_post')}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<input type="hidden" name="id" value="{{ ($data) ? $data[0]->id : '' }}">
				<table height="500px"  >
					<tr>
						<td>
							NAME :
						</td>
						<td>
							<input type="text" class="form-control" name="name" value="{{$data[0]->name}}">
						</td>
					</tr>	
					<tr>
						<td>
							SELECT IMAGE :
						</td>
               		    <td>
                    		<input type="file" class="form-control" name="image" value="{{$data[0]->image}}">	
						</td>
						
						<td>
									<img src="{{url('storage/app/product')}}{{'/'}}{{$data[0]->image}}" style="height: 70px; width: 70px;">
						</td>
						
					</tr>
					<tr>
						<td>
							PRICE :
						</td>
						<td>
							<input type="text" class="form-control" name="price" value="{{$data[0]->price}}">
						</td>
					</tr>	
					<tr>
						<td>
							USAGE :
						</td>
						<td>
							<input type="text" class="form-control" name="usge" value="{{$data[0]->usge}}">
						</td>
					</tr>
					<tr>
						<td>
							WIDTH :
						</td>
						<td>
							<input type="text" class="form-control" name="width" value="{{$data[0]->width}}">
						</td>
					</tr>
					<tr>
						<td>
							PACKAGING TYPE :
						</td>
						<td>
							<input type="text" class="form-control" name="packaging_type" value="{{$data[0]->packaging_type}}">
						</td>
					</tr>
					<tr>
						<td>
							LENGTH :
						</td>
						<td>
							<input type="text" class="form-control" name="length" value="{{$data[0]->length}}">
						</td>
					</tr>
                	<tr>
                    	<td>
							TYPE :
						</td>
						<td>
									<select name="type">
								<option selected  disabled hidden>Select</option>
								<option value="designer lace" @if(@$data[0]->type == 'designer lace'){{'selected'}}@endif >Designer Laces</option>
								<option value="fancy lace"  @if(@$data[0]->type == 'fancy lace'){{'selected'}}@endif >Fancy Laces</option>
								<option value="new lace" @if(@$data[0]->type == 'new lace'){{'selected'}}@endif >New Laces</option>
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