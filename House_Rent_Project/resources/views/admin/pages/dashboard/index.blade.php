@extends('admin.app')
@section('mainContent')
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <div class="header-icon text-success mr-3"><i class="typcn typcn-spiral"></i></div>
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Dashboard</h1>
                                    <small>From now on you will start your activities.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)-->
                    <div class="body-content">
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <div class="row justify-content-center">
                                            <div class="greet-user col-12 col-xl-10">
                                                <img src="{{asset('public/backend/assets')}}/dist/img/happiness.svg" alt="..." class="img-fluid  mb-2">
                                                <h2 class="fs-23 font-weight-600 mb-2">
                                                    Congratulations Nayeem,
                                                </h2>
                                                <p class="text-muted">
                                                    You have done 57.6% more sales today. Check your new badge in your profile.
                                                </p>
                                                <a href="#!" class="btn btn-success">
                                                    Try it for free
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div><!--/.body content-->
                </div><!--/.main content-->

@endsection