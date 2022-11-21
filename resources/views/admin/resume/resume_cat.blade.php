@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       <!--  <a href="{{route('about.add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Create overview </a> -->
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
                            <h6 class="m-0 font-weight-bold text-primary">Resume Category</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                      @foreach($all_cat as $k=>$val)
                                        <tr>
                                            
                                            <td>{{ $k+1}}</td>
                                             <td>{{$val->name}}</td>
                                           
                                           
                                             
                                            <td>{{($val->status==1)? 'active' :'Deactive'}}</td>
                                            <td><a href="{{route('resume.create',$val->id)}}">Add Resume</a>
                                             
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