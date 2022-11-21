@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('feature.add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Create Feature </a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                   </div> 	

                    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  
                 

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Feature list</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                           <th>Short description</th>
                                           
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Short description</th>
                                           
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach($all_map as $k=>$val)
                                        <tr>
                                             <td>{{$k+1}}</td>

                                              <td>@if($val->image)<img src="{{url('/'.$val->image)}}" width="50" height="50">@else @endif</td>
                                            <td>{{$val->name}}</td>

                                            <td>{{$val->link}}</td>
                                           
                                             
                                            <td>{{($val->status==1)? 'active' :'Deactive'}}</td>
                                            <td><a href="{{route('feature.edit',$val->id)}}"><i class="fas fa-edit"></i></a>
                                               <a href="{{route('feature.delete',$val->id)}}"><i class="fas fa-trash" id="delete"></i></a>
                                            </td>
                                            
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>


   @endsection