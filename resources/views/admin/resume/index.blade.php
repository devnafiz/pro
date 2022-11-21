@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                      
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
                            <h6 class="m-0 font-weight-bold text-primary">Resume list</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Heading</th>
                                            <th>Rating</th>
                                            <th>category</th>
                                            <th>Sub Resume</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Heading</th>
                                            <th>Rating</th>
                                            <th>category</th>
                                            <th>Sub Resume</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach($all_data as $k=>$val)
                                        <tr>
                                            <td>{{$k+1}}</td>
                                            <td>{{$val->heading}}</td>
                                            <td>{{$val->rating}}</td>
                                            <td>{{$val->resume_cat->name}}</td>
                                            <td>{{$val->sub_cat_id}}</td>
                                            <td>{{$val->des}}</td>
                                           
                                            <td>{{($val->status==1)? 'active' :'Deactive'}}</td>
                                            <td><a href="{{route('resume.edit',$val->id)}}"><i class="fas fa-edit"></i></a>
                                               <a href="{{route('resume.delete',$val->id)}}" id="delete"><i class="fas fa-trash"></i></a>
                                            </td>
                                            
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination">
                                  {{$all_data->links()}}
                                    
                                </div>
                                    
                            </div>
                        </div>
                    </div>

                </div>


   @endsection