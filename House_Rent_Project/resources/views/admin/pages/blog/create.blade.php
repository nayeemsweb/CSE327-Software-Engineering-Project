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
                    <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                        </div>
                        <div class="card-body">
                            <div class="basic-elements">
                                <form action="{{ route('admin.blog.store') }}" method="POST" role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row label_css">
                                        <div class="col-lg-12">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea style="height: 200px; width: 100%; padding: 8px 16px;" name="description" required>{{ old('description') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Blog Title<span style="color:red;">*</span></label>
                                                <input type="text" value="{{ old('title') }}" name="title" placeholder="Blog Title" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Address<span style="color:red;">*</span></label>
                                                <input type="text" value="{{ old('address') }}" name="address" placeholder="Address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Price<span style="color:red;">*</span></label>
                                                <input type="text" value="{{ old('price') }}" name="price" placeholder="Price" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Blog Sub Title<span style="color:red;">*</span></label>
                                                <input type="text" value="{{ old('sub_title') }}" name="sub_title" placeholder="Blog Sub Title" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Beds<span style="color:red;">*</span></label>
                                                <input type="text" value="{{ old('beds') }}" name="beds" placeholder="Beds" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Bath<span style="color:red;">*</span></label>
                                                <input type="text" value="{{ old('bath') }}" name="bath" placeholder="Bath" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>garage<span style="color:red;">*</span></label>
                                                <input type="text" value="{{ old('garage') }}" name="garage" placeholder="Garage" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Square Feet<span style="color:red;">*</span></label>
                                                <input type="text" value="{{ old('sq_ft') }}" name="sq_ft" placeholder="Square Feet" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Images <span style="color:red;">*</span></label>
                                                <input type="file"  id=""  name="image" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 butoncomon">
                                            <button class="btn btn-success" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!--/.body content-->
                </div><!--/.main content-->

@endsection