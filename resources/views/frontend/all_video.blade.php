@extends('frontend.master')




@section('content')
 <!-- start slider area -->
       

      


        <!-- Start Portfolio Area -->
        <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                           
                            
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                    @foreach($all_video as $k=>$val)
                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-6 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#exampleModalCenterp">
                            <div class="inner">
                                <div class="thumbnail">
                                  
                               
                                 <iframe width="420" height="315"
src="http://www.youtube.com/embed/{{$val->post}}?autoplay=0">
</iframe>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                           
                                        </div>
                                        
                                    </div>
                                    <h6 class="title">{{$val->heading}}</h6>
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