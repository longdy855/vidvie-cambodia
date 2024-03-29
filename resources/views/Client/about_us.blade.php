@extends('Client.common.layout') 

@section('content')

	<!-- Slider -->
	<div id="home">
		<!-- home wrap -->
		<div class="home-wrap">
			<!-- home slick -->
			<div id="home-slick">
				<!-- banner -->
				<div class="banner banner-1">
					<img src="{{url('assets/front_end/vidvie-plugin/img/slider/slide-001.png')}}" alt="">
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="banner banner-1">
					<img src="{{url('assets/front_end/vidvie-plugin/img/slider/slide-002.jpg')}}" alt="">
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="banner banner-1">
					<img src="{{url('assets/front_end/vidvie-plugin/img/slider/slide-003.jpg')}}" alt="">
				</div>
			</div>
			<!-- /home slick -->
		</div>
		<!-- /home wrap -->
	</div>
	<!-- /HOME -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">About Us</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<section class="section">
		<div class="container">
			<div class="col-md-12">
				<div class="about-us text-center">
					<h2 class="white-color">About Us</h2>
					<h4 class="white-color font-weak">
						<p>
							Started our journey in Hong Kong and backed up by strong production resources, VIDVIE
							desires to create the brightest smartphone accessories, with all the knowledge and skills
							from our dedicated engineers, designers and artists. Quality, creativity and efficiency have
							been the words we live which drive us to a further global market including US, EU etc. We
							also believe the relationship we build with our customers is equally important as our brand
							value.
						</p>
					</h4>
				</div>
			</div>
		</div>
	</section>


	<section class="section">
		<div class="container">
			<div class="col-md-4">
				<div class="about-us text-center">
					<h3 class="white-color">SAFE</h2>
						<h4 class="white-color font-weak">
							<p>
								គិតពីសុវត្ថិភាពខ្ពស់ក្នុងការប្រើប្រាស់
							</p>
						</h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="about-us text-center">
					<h3 class="white-color">SERVICE</h2>
						<h4 class="white-color font-weak">
							<p>
								កសាងសេវាកម្មល្អនិងទំនុកចិត្តសំរាប់អតិថិជន
							</p>
						</h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="about-us text-center">
					<h3 class="white-color">QUALITY</h3>
					<h4 class="white-color font-weak">
						<p>
							ច្នៃប្រឌិតរូបរាងព្រមទាំងគុណភាពឥតខ្ចោះ
						</p>
					</h4>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="row padding">
				<div class="col-md-4">
					<div class="card">
						<img class="img-responsive img-circle" src="{{url('assets/front_end/vidvie-plugin/img/show-room/showRoom2.jpg')}}" alt="">
						<div class="card-body">
							<div class="about-us text-center">
								<h3 class="white-color">1st Vidvie Showroom</h2>
									<h4 class="white-color font-weak">
										<p class="card-text">Zheulong</p>
									</h4>
									<p class="card-text"> <span class="text-danger"> អាស័យដ្ឋាន :</span> មហាវិថី
										ម៉ៅសេទុង,
										សង្កាត់ ទឹកល្អក់៣, ខណ្ឌ ទួលគោក, រាជធានី ភ្នំពេញ (ទល់មុខផ្សារឃ្លាំងរំសេវ
										ជិតហាងនំបុ័ងបាយ័ន)</p>
							</div>

						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
						<img class="img-responsive img-circle" src="{{url('assets/front_end/vidvie-plugin/img/show-room/showRoom1.jpg')}}" alt="">
						<div class="card-body">
							<div class="about-us text-center">
								<h3 class="white-color">2nd Vidvie Showroom</h2>
									<h4 class="white-color font-weak">
										<p class="card-text">Zheulong</p>
									</h4>
									<p class="card-text">The Bridge</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
						<img class="img-responsive img-circle" src="{{url('assets/front_end/vidvie-plugin/img/show-room/showRoom2.jpg')}}" alt="">
						<div class="card-body">
							<div class="about-us text-center">
								<h3 class="white-color">3nd Vidvie Showroom</h2>
									<h4 class="white-color font-weak">
										<p class="card-text">Is coming soon</p>
									</h4>
									<p class="card-text"> <span class="text-danger"> អាស័យដ្ឋាន :</span> នឹងមានទីតាំង
										ផ្សេងទៀតក្នុងពេលឆាប់ៗនេះ សូមអរគុណចំពោះការចូលមកកាន់ VIDVIE</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
