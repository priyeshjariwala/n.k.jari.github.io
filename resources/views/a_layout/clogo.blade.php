@extends('a_layout.aindex')
@section('content')
<div class="row top-summary">
<div class="widget">
	<div class="widget-header transparent">
		<h2><strong>CHANGE LOGO</strong> </h2>
	</div>
	<div class="widget-content padding">
		<form role="form" id="OtherValidator" method="post" action="{{route('clogo_post')}}" enctype="multipart/form-data">
		{{csrf_field()}}	
		<input type="hidden" name="id" value="{{$data->id}}">
			<table cellpadding="10">
				<tr>
					<td>
						SELECT LOGO :
					</td>
					<td>
						<input type="file" class="form-control" name="image" required="required">
					</td>
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						<br><br>
						<img src="{{url('storage/app/logo')}}{{'/'}}{{$data->image}}" height="100px" width="100px">
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