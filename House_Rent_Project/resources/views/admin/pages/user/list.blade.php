@extends('admin.app')
@section('mainContent')
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Users List</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <div class="header-icon text-success mr-3"><i class="typcn typcn-spiral"></i></div>
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Users List</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)-->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <a href="{{ route('admin.user.index') }}"class="btn btn-success mb-3"><i class="ft-plus"></i>Add new user</a>
                                    </div>
                                    <div class="text-right">
                                        <div class="actions">
                                            <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Refresh</a>
                                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                                    <a href="#" class="dropdown-item">Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table display table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($users))
                                            @php $sl =0;@endphp
                                            @foreach($users as $user)
                                        <tr>
                                            <td>{{++$sl}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>

                                            {{--<td>--}}
                                                {{--<img src="{{url($blog->image)}}" alt="" style="max-height: 50px; display: block;margin: auto">--}}
                                            {{--</td>--}}
                                            <td style="text-align: center">
                                                {{--<a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>--}}
                                                {{--<a href="{{url('blog/delete/'.$blog->id)}}" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>--}}
                                            </td>
                                        </tr>
                                        @endforeach @endif
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        </div>

                    </div>
                    <!--/.body content-->
                </div><!--/.main content-->

@endsection