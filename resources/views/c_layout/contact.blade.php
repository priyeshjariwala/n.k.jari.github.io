@extends('cmain_layout.app')

@section('content')
<br><br><br>
	<section class="slide1">
		<center>
			<h1>
				<span>C</span>
				<span>O</span>
				<span>N</span>
				<span>T</span>
				<span>A</span>
				<span>C</span>
				<span>T</span>
			</h1>
		</center>
	</section>
	

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60292.2797778253!2d72.81878237910158!3d19.183515900000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b70378829b9b%3A0xacdc8b3601f83b2e!2sGeeta%20Lace!5e0!3m2!1sen!2sin!4v1585308807502!5m2!1sen!2sin" width="550" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<form class="leave-comment" onsubmit="return required()" name="feedback"  method="post" action="{{route('contact_post')}}">
						{{csrf_field()}}
						<h4 class="m-text26 p-b-36 p-t-15">
							Send us your message
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name" required="required">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" id="phonenum" type="tel" pattern="^\d{10}$" name="mno" placeholder="Mobile No" required="required">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" pattern="[^ @]*@[^ @]*" name="email" placeholder="Email Address" required="required">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="msg" id="msg" placeholder="Message" required="required"></textarea>

						<div class="w-size25">
							<!-- Button -->
							<button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Send
							</button>
						</div>
					</form>
					 <script type="text/javascript">
						function required()
						{
							var msg_area = document.getElementById("msg");
						    msg_area.innerHTML = "";
						    if (document.getElementById("msg").value.length < 50) 
						    {
						        alert("please enter a minimum 50 words!!");
						        return false;
						    }

						}
					</script> 
				</div>
			</div>
		</div>
	</section>

@endsection
