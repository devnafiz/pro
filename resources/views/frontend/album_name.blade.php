@extends('frontend.master')




@section('content')
 <!-- start slider area -->
       

      


        <!-- Start Portfolio Area -->
        <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                           
                            <h2 class="title">Album Name</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                    @foreach($album_name as $k=>$val)
                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#exampleModalCenterp">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{route('album.photo',$val->id)}}">
                                        <img src="{{asset($val->image)}}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                           
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather feather-image"></i></a>
                                                @php
                                                 $count=DB::table('albums')->where('cat_id',$val->id)->count();
                                                @endphp
                                        {{$count}}</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">{{$val->name}}<i
                                        class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->
                    @endforeach

                    
                    <!-- End Single Portfolio -->
                </div>
            </div>
        </div>
        <!-- End portfolio Area -->
      

@endsection