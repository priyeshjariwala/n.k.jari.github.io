@extends('cmain_layout.app')
@section('content')
<nav class="breadcrumb" aria-label="breadcrumbs" style="display: block;
    padding: 10px;
    margin-bottom: 30px;
    text-align: justify;">
	<center><h1>Delivery</h1> <br>
	<span>Tell us where you want the item(s) to be delivered</span></center>
</nav>
<div>
<style type="text/css">
	tr{
		height: 50px;
	}
</style>
<div id="oldadd" @if(old()) style="display: none;" @elseif(count(@$dat)>0) style="display:block;" @else style="display: none;"@endif >
<div id="CustomerLoginForm"><center> Addresses Added by you </center></div>
	<center>
		<div>
			<table align="center" border="3" style="height: 100px;" >
				<tr>
					<td align="center"> No </td>
					<td align="center">Name</td>
					<td align="center">Address</td>
					<td align="center">use this Address</td>
					<td align="center">edit address</td>
					<td align="center">delete address</td>
				</tr>
				<?php $i=1;?>
				@forelse($dat as $d)
				<tr>
					<td align="center">{{$i++}}</td>
					<td align="center">{{$d->name}}<br>
						{{$d->mobileno}}</td>
					<td align="center">{{$d->flat}},{{$d->colony}},{{$d->landmark}} {{$d->cityn}},{{$d->pincode}},{{$d->staten}}</td>
					<td align="center"><a href="{{route('final_cart',['aid'=>encrypt($d->id)])}}">	<input type="submit" class="btn" value="Use This Address"></a></td>
					<td align="center"><a href="#" onclick="edit({{$d->id}},'{{$d->name}}','{{$d->flat}}','{{$d->colony}}',{{$d->pincode}},'{{$d->state}}','{{$d->city}}',{{$d->mobileno}})"><i class="fa fa-edit"></i></a></td>
					<td align="center"><a href="{{route('address_delete',['id'=>encrypt($d->id)])}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
				</tr>
				@empty
				@endforelse
			</table>
		</div>
		<br>
		<div id="CustomerLoginForm" >Want it to be delivered on new address? <a href="#" onclick="shownewadd()">Add New Address</a>
		</div>
	</center>
</div>
<div id="newadd" @if(count(@$dat)==0) style="display:block;" @elseif(old()) style="display: block;" @else style="display: none;"@endif>
	<div id="CustomerLoginForm">
		<form method="post" action="{{route('address_submit')}}" accept-charset="UTF-8">
		{{csrf_field()}}
		<center>
			<table border="0" style="height: 700px; width:700px" >
				<input type="hidden" value="{{\Auth::guard('customer')->user()->id}}" name="cid">
				<input type="hidden" name="aid" id="aid">
				<tr>
					<td>
						<label class="label--hidden">Full Name</label>
					</td>
					<td>
						<input type="text" style=" background-color:#D8D5D5" name="name" id="name" placeholder="Full Name" autocorrect="off" autocapitalize="off" value="{{old('name')}}" autofocus >
						<p class="help-block">
								@if ($errors->has('name'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('name') }}</strong>
								</span>
								@endif
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label--hidden">Flat/House No./Building:</label>
					</td>
					<td>
						<input type="text" style=" background-color:#D8D5D5" name="flat" id="flat" placeholder="Flat/House No./Building" autocorrect="off" autocapitalize="off" value="{{old('flat')}}" autofocus>			
						<p class="help-block">
								@if ($errors->has('flat'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('flat') }}</strong>
								</span>
								@endif
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label--hidden">Street Address/Colony:</label>
					</td>
					<td>
						<input type="text" style=" background-color:#D8D5D5" name="colony" id="colony" placeholder="Street Address/Colony" autocorrect="off" autocapitalize="off" autofocus value="{{old('colony')}}">
						<p class="help-block">
								@if ($errors->has('colony'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('colony') }}</strong>
								</span>
								@endif
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label--hidden">Landmark(optional):</label>
					</td>
					<td>
						<input type="text" style=" background-color:#D8D5D5" name="landmark" id="landmark" placeholder="Landmark" autocorrect="off" autocapitalize="off" autofocus value="{{old('landmark')}}">
						<p class="help-block">
								@if ($errors->has('landmark'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('landmark') }}</strong>
								</span>
								@endif
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label--hidden">Pincode:</label>
					</td>
					<td>
						<input type="text" style=" background-color:#D8D5D5" name="pincode" id="pincode" placeholder="Pincode" autocorrect="off" autocapitalize="off" autofocus value="{{old('pincode')}}">
						<p class="help-block">
								@if ($errors->has('pincode'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('pincode') }}</strong>
								</span>
								@endif
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<label for="CustomerPassword" class="label--hidden">State</label>
					</td>
					<td>
						<select name="state" id="state" class="applytoall" style="margin-bottom: 15px; background-color:#D8D5D5;">
						    <option selected disabled> Select state </option>
						    @forelse($state as $s)
						        <option value="{{$s->id}}" @if(old('state')==$s->id){{'selected'}}@endif>{{$s->name}}</option>
						    @empty
						    @endforelse
						</select>
						<p class="help-block">
						    @if ($errors->has('state'))
						    <span class="help-block">
						    <strong style="color: red;">{{ $errors->first('state') }}</strong>
						    </span>
						    @endif
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<label for="CustomerPassword" class="label--hidden">City</label>
					</td>
					<td>
						<select name="city" id="city" class="applytoall" style="margin-bottom: 15px; background-color:#D8D5D5">
						    <option selected disabled> Select city </option>
						    @if(old('city'))
						        @forelse($city as $c)
						            @if($c->sid == old('state'))
						                <option value="{{$c->id}}" @if($c->id == old('city')){{'selected'}}@endif>{{$c->name}}</option>
						            @endif
						        @empty
						        @endforelse
						    @endif
						</select>
						<p class="help-block">
						    @if ($errors->has('city'))
						    <span class="help-block">
						    <strong style="color: red;">{{ $errors->first('city') }}</strong>
						    </span>
						    @endif
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label--hidden">Mobile No:</label>
					</td>
					<td>
						<input type="text" style=" background-color:#D8D5D5" name="mobileno" id="mobileno" placeholder="Mobile No" autocorrect="off" autocapitalize="off" autofocus value="{{old('mobileno')}}">
						<p class="help-block">
								@if ($errors->has('mobileno'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('mobileno') }}</strong>
								</span>
								@endif
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<label>Address Type:</label>
					</td>
					<td>
						<input type="radio" name="type" id="type" value="office" autofocus style="width:unset"><span>Office</span>
						<input type="radio" name="type" id="type" value="home" autofocus style="width:unset">Home
						<p class="help-block">
								@if ($errors->has('type'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('type') }}</strong>
								</span>
								@endif
						</p>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<p>
								<input type="submit" class="btn" value="Use This Address">
						</p>
						<br>
						<p>
								<a href="#" onclick="showoldadd()">Choose Existing Address</a>
						</p>
						<br>
						<a href="{{route('c_main')}}">Return to Store</a>
					</td>
				</tr>
</table>
</center>
</form>
</div>
</div>
	</div>

</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript">
		var city = <?php echo json_encode($city); ?>;
		var state = <?php echo json_encode($state); ?>;
		var token = '{{Session::token()}}';
		$('document').ready(function(){
				$('#state').change(function(){
						var sid = $('#state').val();
						console.log(sid);
						var test = "<option selected disabled>Select City</option>";
						for(var i=0;i<city.length;i++)
						{
								if(city[i].sid == sid){
										test +='<option value="'+city[i].id+'" >'+city[i].name+'</option>';
								}
						}
						$('#city').prop('disabled', false);
						$('#sub').prop('disabled', false);
						$('#name').prop('disabled', false);
						$('#city').html(test);
				});
		})
	function showoldadd()
	{
		document.getElementById('oldadd').style.display="block";
		document.getElementById('newadd').style.display="none";
	}
	function shownewadd()
	{
		document.getElementById('oldadd').style.display="none";
		document.getElementById('newadd').style.display="block";
	}
	function edit(id,name,flat,colony,pincode,sid,cid,mobileno)
	{
		var test1 = "<option selected disabled>Select City</option>";
		var test2 = "<option selected disabled>Select City</option>";
		$('#aid').val(id);
		$('#name').val(name);
		$('#flat').val(flat);
		$('#colony').val(colony);
		$('#pincode').val(pincode);
		$('#mobileno').val(mobileno);
		for(var i=0;i<state.length;i++)
		{
				if(state[i].id == sid){
						test1 +='<option value="'+state[i].id+'" selected >'+state[i].name+'</option>';
				}
				else
				{
						test1 +='<option value="'+state[i].id+'">'+state[i].name+'</option>';
				}
		}
		for(var i=0;i<city.length;i++)
		{
				if(city[i].id == cid){
						test2 +='<option value="'+city[i].id+'" selected >'+city[i].name+'</option>';
				}
				else
				{
					test2 +='<option value="'+city[i].id+'">'+city[i].name+'</option>';
				}
		}
		$('#state').html(test1);
		$('#city').html(test2);
		document.getElementById('oldadd').style.display="none";
		document.getElementById('newadd').style.display="block";


	}
</script>
@endsection


