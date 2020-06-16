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
				<table height="500px"  >
					<tr>
						<td>
							NAME :
						</td>
						<td>
							<input type="text" class="form-control" name="name">
						</td>
					</tr>	
					<tr>
						<td>
							SELECT IMAGE :
						</td>
               		    <td>
                    		<input type="file" class="form-control" name="image">	
						</td>	
					</tr>
					<tr>
						<td>
							PRICE :
						</td>
						<td>
							<input type="text" class="form-control" name="price">
						</td>
					</tr>	
					<tr>
						<td>
							USAGE :
						</td>
						<td>
							<input type="text" class="form-control" name="usge">
						</td>
					</tr>
					<tr>
						<td>
							WIDTH :
						</td>
						<td>
							<input type="text" class="form-control" name="width">
						</td>
					</tr>
					<tr>
						<td>
							PACKAGING TYPE :
						</td>
						<td>
							<input type="text" class="form-control" name="packaging_type">
						</td>
					</tr>
					<tr>
						<td>
							LENGTH :
						</td>
						<td>
							<input type="text" class="form-control" name="length">
						</td>
					</tr>
                	<tr>
                    	<td>
							TYPE :
						</td>
						<td>
							<select name="type">
								<option value="designer lace">Designer Laces</option>
								<option value="fancy lace">Fancy Laces</option>
								<option value="new lace">New Laces</option>
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