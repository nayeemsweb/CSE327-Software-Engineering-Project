@extends('frontend.app')
@section('mainContent')

<!--========================================================
                        Hero-area Start
==========================================================-->
<section class="hero-area-2" style="background: url({{(!empty($blog))? url($blog->image):''}}); background-size: cover">
    <div class="overlay">
        <div class="container">
            <div class="page-title">
                <h1>Blog Post</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{(!empty($blog))? $blog->title :''}}</li>
                    </ol>
                </nav>
            </div>
        </div><!-- /.container -->
    </div><!-- /.overlay -->
</section><!-- /.hero-area -->

<!--========================================================
                        Blog posts Start
==========================================================-->
<section class="blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Article -->
                <article>
                    <figure>
                       <a href="#">
                           <img src="{{(!empty($blog))? url($blog->image):''}}" class="img-fluid" alt="{{(!empty($blog))?$blog->title:''}}">
                       </a>
                    </figure>
                    <div class="post-title">
                        <h4>
                            <a href="#">{{(!empty($blog))?$blog->title:''}}</a>
                        </h4>
                        <div class="meta">
                            <a href="#"><i class="fa fa-calendar-o"></i>{{date('M d, Y',strtotime($blog->created_at))}}</a>
                            <a href="#"><i class="fa fa-comments"></i>10 Comments</a>
                            <a href="#"><i class="fa fa-heart-o"></i>315 Likes</a>
                        </div>
                    </div>
                    <div class="post-exerpt">
                        <p>
                            {!!(!empty($blog))?$blog->description:''!!}
                        </p>
                    </div>
                    <div class="social-tags-box">
                        <div class="tags">

                        </div>
                        <div class="social-share">
                            <h5>Share</h5>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <!-- About Author -->
            </div><!-- /.col-lg-8 -->

            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- widget -->
                    <div class="widget search-box">
                        <h5>Search</h5>
                        <form action="#" method="GET">
                            <input type="text" placeholder="Search..">
                            <button type="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- widget -->

                    <!-- widget -->

                    <!-- widget -->

                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-section -->
@endsection