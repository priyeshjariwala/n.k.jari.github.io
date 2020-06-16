@extends('cmain_layout.app')

@section('content')
	
	<section class="slide1">
		<center>
			<h1>
				<span>A</span>
				<span>B</span>
				<span>O</span>
				<span>U</span>
				<span>T</span>
			</h1>
		</center>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="{{url('storage/app/passport')}}{{'/'}}{{$pass->image}}" >
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Our story
					</h3>

					<p class="p-b-28">
						Established in the year 2000, We, Pratibha Lace, are engaged in Manufacturing of a wide range of Designer Lace and Fancy Lace. we have established a world-class infrastructure facility that encompasses machines and equipment that are based on modern and advanced technologies. Our logistic experts ensure the safe and accurate delivery of these products. These products are available in various colors, designs and patterns. Products are known for their beautiful designs and precise finish.  Our vendors’ base with large production capacity has helped us in taking and meeting the bulk orders.


					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
							Mr. Priyesh Manishbhai Jariwala is our Owner, he is known for his excellent management skills and innovative business ideas that have helped us in attaining a new horizon in this domain.
						</p>

						<span class="s-text7">
							- Priyesh Jariwala
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
	