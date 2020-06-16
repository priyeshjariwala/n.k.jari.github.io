@extends('a_layout.aindex')
@section('css')
<style type="text/css">
	.preview-images-zone {
	    width: 100%;
	    border: 1px solid #ddd;
	    min-height: 180px;
	    /* display: flex; */
	    padding: 5px 5px 0px 5px;
	    position: relative;
	    overflow:auto;
	}
	.preview-images-zone > .preview-image:first-child {
	    height: 185px;
	    width: 185px;
	    position: relative;
	    margin-right: 5px;
	}
	.preview-images-zone > .preview-image {
	    height: 90px;
	    width: 90px;
	    position: relative;
	    margin-right: 5px;
	    float: left;
	    margin-bottom: 5px;
	}
	.preview-images-zone > .preview-image > .image-zone {
	    width: 100%;
	    height: 100%;
	}
	.preview-images-zone > .preview-image > .image-zone > img {
	    width: 100%;
	    height: 100%;
	}
	.preview-images-zone > .preview-image > .tools-edit-image {
	    position: absolute;
	    z-index: 100;
	    color: #fff;
	    bottom: 0;
	    width: 100%;
	    text-align: center;
	    margin-bottom: 10px;
	    display: none;
	}
	.preview-images-zone > .preview-image > .image-cancel {
	    font-size: 18px;
	    position: absolute;
	    top: 0;
	    right: 0;
	    font-weight: bold;
	    margin-right: 10px;
	    cursor: pointer;
	    display: none;
	    z-index: 100;
	}
	.preview-image:hover > .image-zone {
	    cursor: move;
	    opacity: .5;
	}
	.preview-image:hover > .tools-edit-image,
	.preview-image:hover > .image-cancel {
	    display: block;
	}
	.ui-sortable-helper {
	    width: 90px !important;
	    height: 90px !important;
	}
	.icheckbox_square-aero{
		margin-left: 125px !important;
	}	
</style>
<style>
/*.container {
    position: relative;
    width: 50%;
}*/

.image {
  opacity: 1;
  display: block;
  width: 10%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 15%;
  left: 70%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.img1:hover .image {
  opacity: 0.3;
}

.img1:hover .middle {
  opacity: 1;
}

.text {
  /*background-color: #4CAF50;*/
  color: white;
  font-size: 8px;
  padding: 13px 8px;
}
</style>
@endsection
@section('content')
<div class="row">
	<div class="col-sm-12 portlets">
		<div class="widget">
			<div class="widget-header transparent">
				<h2><strong>Offer</strong> Form</h2>
				<div class="additional-btn">
					<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
				</div>
			</div>
			<div class="widget-content padding">						
				<div id="horizontal-form">
					<form role="form" class="form-horizontal" method="post" action="offers_reg" enctype="multipart/form-data">
						{{csrf_field()}}
					<input type="hidden" name="id" value="@if(@$data->id){{$data->id}}@else{{old('id')}}@endif">


					<div class="form-group col-sm-6 col-md-6">
						<label class="col-sm-2 control-label">From Date</label>
						<div class="col-sm-10">
							<input type="date" class="form-control datepicker-input" id="date1" name="date1" data-date-format="yyyy-mm-dd" value="@if(@$data->date1){{$data->date1}}@else{{old('date1')}}@endif" >
							<p class="help-block">
								@if ($errors->has('date1'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('date1') }}</strong>
								</span>
								@endif
							</p>
						</div>
					</div>


					<div class="form-group col-sm-6 col-md-6">
						<label class="col-sm-2 control-label">To Date</label>
						<div class="col-sm-10">
							<input type="date" class="form-control datepicker-input" id="date2" name="date2" data-date-format="yyyy-mm-dd" value="@if(@$data->date2){{$data->date2}}@else{{old('date2')}}@endif">
							<p class="help-block">
								@if ($errors->has('date2'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('date2') }}</strong>
								</span>
								@endif
							</p>
						</div>
					</div>


					<div class="form-group col-sm-6 col-md-6">
						<label class="col-sm-2 control-label">Discount Rate</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Rate in %"  id="rate" name="rate" value="@if(@$data->rate){{$data->rate}}@else{{old('rate')}}@endif" >
							<p class="help-block">
								@if ($errors->has('rate'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('rate') }}</strong>
								</span>
								@endif
							</p>
						</div>
					</div>


					<div class="form-group col-sm-6 col-md-6">
						<label class="col-sm-2 control-label">Maximun Discount</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Maximum discount in Rupees if any"  id="maxi" name="maxi" value="@if(@$data->maxi){{$data->maxi}}@else{{old('maxi')}}@endif" >
							<p class="help-block">
								@if ($errors->has('maxi'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('maxi') }}</strong>
								</span>
								@endif
							</p>
						</div>
					</div>


					<div class="form-group col-sm-6 col-md-6">
						<label class="col-sm-2 control-label">Minimum Bill Amount</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Minimum bill amount for discount"  id="amount" name="amount" value="@if(@$data->amount){{$data->amount}}@else{{old('amount')}}@endif">
							<p class="help-block">
								@if ($errors->has('amount'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('amount') }}</strong>
								</span>
								@endif
							</p>
						</div>
					</div>

					<div class="form-group col-sm-6 col-md-6">
						<label class="col-sm-2 control-label">Coupon Code</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Coupon"  id="coupne" name="coupne" value="@if(@$data->coupne){{$data->coupne}}@else{{old('coupne')}}@endif">
							<p class="help-block" >
								@if ($errors->has('coupne'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('coupne') }}</strong>
								</span>
								@endif
							</p>
						</div>
					</div>
					<div class="form-group col-sm-6 col-md-6">
						<label class="col-sm-2 control-label">Description </label>
						<div class="col-sm-10">
							<textarea class="form-control" placeholder="Offer Description" name="descr" value="@if(old('descr')){{old('descr')}}@endif"></textarea>
							<p class="help-block" >
								@if ($errors->has('descr'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('descr') }}</strong>
								</span>
								@endif
							</p>
						</div>
					</div>
					<div class="form-group col-sm-12 col-md-12" >
						<div class="col-sm-12">
						<input type="checkbox" class="form-control" name="firstorder"><span style="font-family: 'Open Sans';font-size: 13px;font-weight: 600;">First Time Shopping Offer</span>
							
							<p class="help-block">
								@if ($errors->has('coupne'))
								<span class="help-block">
								<strong style="color: red;">{{ $errors->first('coupne') }}</strong>
								</span>
								@endif
							</p>
						</div>
					</div>

				
				
        			<div class="col-md-12">
        				<div class="form-group">
							<div class="col-sm-offset-6 col-sm-6">
								<button type="submit" class="btn btn-default">Submit</button>
							</div>
						</div>
        			</div>
                </div>

                </form>
				</div>
			</div>
		</div>
		
	</div>
	
</div>	

@endsection
@section('js')

@endsection