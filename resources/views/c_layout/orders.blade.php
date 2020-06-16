@extends('cmain_layout.app')

@section('content')
<br><br>
<center>
	<table  border="3" style="height: 100px;">
		<tr>
			<td align="center">Sr No.</td>
			<td align="center">Product Name</td>
			<td align="center">Product Quentity</td>
			<td align="center">Product Price</td>
			<td align="center">Total Ammount</td>
			<td align="center">Time</td>
		</tr>
		<?php $i=1;?>
				@forelse($dat as $d)
				<tr>
					<td align="center">{{$i++}}</td>

					<td align="center">{{$d->prod_name}}</td>
					<td align="center">{{$d->prod_qty}}</td>
					<td align="center">{{$d->product_price}}</td>
					<td align="center">{{$d->price_tot}}</td>
					<td align="center">{{$d->created_at}}</td>
				</tr>
				@empty
				@endforelse
	</table>
</center>
	<!-- content page -->
	

@endsection
	