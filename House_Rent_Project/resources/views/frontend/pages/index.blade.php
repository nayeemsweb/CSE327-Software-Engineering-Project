@extends('frontend.app')
@section('mainContent')
<!--========================================================
                        Hero-area Start
==========================================================-->
<section class="hero-area">
	<div class="overlay">
		<!-- Text Slider -->
		<div class="slider-area">
			<div class="container">
				<div class="text-slider owl-carousel owl-theme">
					<div class="item">
						<h1>House Rent</h1>
						<h2>A Name You Can Trust</h2>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy  tempor invidunt ut abore et dolore magna.Lorem ipsum. sed diam nonumy  tempor invidunt ut abore et dolore magna.</p>
					</div>
					<div class="item">
						<h1>House Rent</h1>
						<h2>A Name You Can Trust</h2>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy  tempor invidunt ut abore et dolore magna.Lorem ipsum. sed diam nonumy  tempor invidunt ut abore et dolore magna.</p>
					</div>
				</div><!-- /.text-slider -->
			</div><!-- /.container -->
		</div><!-- /.slider-area -->

		<!-- Find Property -->
		<div class="find-property">
			<form action="#">
				<!-- Price Filter -->
				<div class="price-filter">
					<div id="slider-range"></div>
					<input type="text" id="amount-max" readonly>
					<input type="text" id="amount-min" readonly>
				</div>

				<!-- choice-btn -->
				<div class="choice-btn">
					<div class="steps">
						<div class="select_btn">
							<input type="checkbox" id="checkbox-one" checked>
							<label for="checkbox-one"><i class="fa fa-map-marker" aria-hidden="true"></i>Location</label>
						</div>
						<div class="select_btn">
							<input type="checkbox" id="checkbox-two">
							<label for="checkbox-two"><i class="fa fa-area-chart" aria-hidden="true"></i>Status</label>
						</div>
						<div class="select_btn">
							<input type="checkbox" id="checkbox-three">
							<label for="checkbox-three"><i class="fa fa-home" aria-hidden="true"></i>Villa</label>
						</div>
					</div><!-- /.steps -->

					<div class="steps">
						<div class="select_btn">
							<input type="checkbox" id="checkbox-four">
							<label for="checkbox-four"><i class="fa fa-bed" aria-hidden="true"></i>Bedroom</label>
						</div>
						<div class="select_btn">
							<input type="checkbox" id="checkbox-five">
							<label for="checkbox-five"><i class="fa fa-bath" aria-hidden="true"></i>Bath</label>
						</div>
						<div class="select_menu">
							<button><i class="fa fa-caret-down" aria-hidden="true"></i>More</button>
							<div class="select-area">
								<div class="select_btn">
									<input type="checkbox" id="checkmore-one">
									<label for="checkmore-one"><i class="fa fa-building-o" aria-hidden="true"></i>Office</label>
								</div>
								<div class="select_btn">
									<input type="checkbox" id="checkmore-two">
									<label for="checkmore-two"><i class="fa fa-cutlery" aria-hidden="true"></i>Kitchen</label>
								</div>
								<div class="select_btn">
									<input type="checkbox" id="checkmore-three">
									<label for="checkmore-three"><i class="fa fa-car" aria-hidden="true"></i>Parking</label>
								</div>
							</div>
						</div>
					</div><!-- /.steps -->
					<button class="find_btn" type="submit">Find Your Property</button>
				</div><!-- /.choice-btn -->
			</form><!-- /form -->
		</div><!-- /.find-property -->
	</div><!-- /.overlay -->
</section><!-- /.hero-area -->

<!--========================================================
                        Feature Start
==========================================================-->
<section id="property" class="feature section-padding">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title">
            <h3>Featured <span>Properties</span></h3>
            <div class="separator">
                <span class="left wow slideInLeft"></span>
                <span class="right wow slideInRight"></span>
            </div><!-- /.separator -->
        </div><!-- /.section-title -->

        <div class="row">
            @php

            @endphp
            @if(!empty($blogs))
                @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="single-item">
                    <div class="feature-image">
                        <figure>
                            <img src="{{url($blog->image)}}" class="img-fluid" alt="{{$blog->title}}">
                        </figure>
                        <ul>
                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-camera" aria-hidden="true"></i></a></li>
                        </ul>
                        <span>For Sale</span>
                    </div>

                    <div class="feature-text">
                        <div class="address">
                            <a href="{{url('blog_post/'.$blog->id)}}">{{$blog->title}}</a>
                            <address><i class="fa fa-map-marker" aria-hidden="true"></i>{{$blog->address}}</address>
                        </div>
                        <div class="price">
                            <strong>{{$blog->price}}</strong>
                            <span>{{$blog->sub_title}}</span>
                        </div>
                        <div class="info">
                            <table>
                                <thead>
                                    <tr>
                                        <td>Beds</td>
                                        <td>bath</td>
                                        <td>garage</td>
                                        <td>SQ Ft</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$blog->beds}}</td>
                                        <td>{{$blog->bath}}</td>
                                        <td>{{$blog->garage}}</td>
                                        <td>{{$blog->sq_ft}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- /.info -->
                    </div><!-- /.feature-text -->
                </div><!-- /.single-item -->
            </div><!-- /.col-lg-4 -->
            @endforeach; @endif

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.feature -->

<!--========================================================
                        History Start
==========================================================-->
<section class="history">
    <div class="overlay section-padding">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title color-i">
                <h3>Dreamland <span>History</span></h3>
                <div class="separator">
                    <span class="left wow slideInLeft"></span>
                    <span class="right wow slideInRight"></span>
                </div><!-- /.separator -->
            </div><!-- /.section-title -->

            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="history-text">
                        <h3>Experience <span>of 35 Years</span></h3>
                        <p>Lorem is a dummy text do eiusmod tempor dolor sit amet, onsectetur adip iscing elit, sed  eiusmod tempor incididunt ut labore et lorna aliqua Ut enim onsectetur. Lorem is a dummy text do eiusmod.</p>
                        <p>Lorem is a dummy text d eiusmod tempor dolor sit amet, onsectetur adip iscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="history-image">
                        <figure>
                            <img src="{{asset('public/frontend/images/history/01.jpg')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.overlay -->
</section><!-- /.history -->


<!--========================================================
                        Gallery Start
==========================================================-->
<section id="gallery" class="gallery section-padding">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title color-ii">
            <h3>Project <span>Gallery</span></h3>
            <div class="separator">
                <span class="left wow slideInLeft"></span>
                <span class="right wow slideInRight"></span>
            </div><!-- /.separator -->
        </div><!-- /.section-title -->

        <div class="project-gallery row" id="project-gallery">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="single-project">
                    <figure>
                        <img src="{{asset('public/frontend/images/gallery/01.png')}}" class="img-fluid" alt="">
                    </figure>
                    <div class="hover-item">
                        <div class="title-zoom">
                            <a class="view-img" href="{{asset('public/frontend/images/gallery/01.png')}}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="single-project">
                    <figure>
                        <img src="{{asset('public/frontend/images/gallery/02.png')}}" class="img-fluid" alt="">
                    </figure>
                    <div class="hover-item">
                        <a class="view-img" href="{{asset('public/frontend/images/gallery/02.png')}}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="single-project">
                    <figure>
                        <img src="{{asset('public/frontend/images/gallery/03.png')}}" class="img-fluid" alt="">
                    </figure>
                    <div class="hover-item">
                        <a class="view-img" href="{{asset('public/frontend/images/gallery/03.png')}}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="single-project">
                    <figure>
                        <img src="{{asset('public/frontend/images/gallery/04.png')}}" class="img-fluid" alt="">
                    </figure>
                    <div class="hover-item">
                        <a class="view-img" href="{{asset('public/frontend/images/gallery/04.png')}}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="single-project">
                    <figure>
                        <img src="{{asset('public/frontend/images/gallery/05.png')}}" class="img-fluid" alt="">
                    </figure>
                    <div class="hover-item">
                        <a class="view-img" href="{{asset('public/frontend/images/gallery/05.png')}}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="single-project">
                    <figure>
                        <img src="{{asset('public/frontend/images/gallery/06.png')}}" class="img-fluid" alt="">
                    </figure>
                    <div class="hover-item">
                        <a class="view-img" href="{{asset('public/frontend/images/gallery/06.png')}}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- /.project-gallery -->
    </div><!-- /.container -->
</section><!-- /.gallery -->


<!--========================================================
                        Subscribe Start
==========================================================-->
<section id="contact" class="subscribe">
    <div class="overlay section-padding">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title">
                <h3>Get <span>Notified</span></h3>
                <p>Singup for our news letter</p>
            </div><!-- /.section-title -->

            <form action="#" method="POST">
                <input type="email" placeholder="Enter Email">
                <button type="submit">Send</button>
            </form>
        </div><!-- /.container -->
    </div><!-- /.overlay -->
</section><!-- /.subscribe -->
@endsection