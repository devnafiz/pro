@extends('frontend.master')




@section('content')
 <!-- start slider area -->
        <section id="home" class="slider-style-5 rn-section-gap pb--110 align-items-center with-particles">
            <div id="particles-js"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-inner">
                            <div class="thumbnail gradient-border gradient-animation">
                                <img id="border" class="gradient-border" src="{{asset($overview->image)}}" alt="">
                            </div>
                            <h1>{{$overview->title}}</h1>
                            <!-- type headline start-->
                            <span class="cd-headline clip is-full-width">
                                <span>{{$overview->short_des}}</span>
                            <!-- ROTATING TEXT -->
                            <span class="cd-words-wrapper">
                                   <!--  <b class="is-visible">Lawyer.</b> -->
                                   <!--  <b class="is-hidden">Consulter.</b>
                                    <b class="is-hidden">Developer.</b> -->
                                </span>
                            </span>
                            <!-- type headline end -->
                            <div class="button-area">
                                <a class="rn-btn" href="#contacts"><span>CONTACT ME</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- start slider area End -->

        <!-- Start Service Area -->
        <!--<div class="rn-service-area rn-section-gap section-separator" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                            <span class="subtitle">Features</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">

                   
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="menu"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Business Stratagy</a></h4>
                                    <p class="description">I throw myself down among the tall grass by the stream as I
                                        lie close to the earth.</p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="book-open"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">App Development</a></h4>
                                    <p class="description"> It uses a dictionary of over 200 Latin words, combined with
                                        a handful of model sentence.</p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                   
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="tv"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">App Development</a></h4>
                                    <p class="description">I throw myself down among the tall grass by the stream as I
                                        lie close to the earth.</p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>-->
        <!-- End Service Area  -->


        <!-- Start Portfolio Area -->
        <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Visit my portfolio and keep your feedback</span>
                            <h2 class="title">My Portfolio</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                    @foreach($portfolio as $k=>$val)
                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#exampleModalCenterPort_{{$k}}">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset($val->image)}}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">{{$val->port_category->name}}</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                        600</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">{{$val->heading}}<i
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
        <!-- Start Resume Area -->
        <div class="rn-resume-area rn-section-gap section-separator" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">7+ Years of Experience</span>
                            <h2 class="title">My Resume</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="education-tab" data-bs-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="professional-tab" data-bs-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                                    Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="experience-tab" data-bs-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="interview-tab" data-bs-toggle="tab" href="#interview" role="tab" aria-controls="interview" aria-selected="false">interview</a>
                            </li>
                        </ul>

                        <!-- Start Tab Content Wrapper  -->
                        <div class="rn-nav-content tab-content" id="myTabContents">
                            <!-- Start Single Tab  -->
                            <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">
                                                    @php
                                                      $educations=DB::table('resumes')->where('cat_id','1')->where('sub_cat_id','1')->limit(3)->get();

                                                    @endphp
                                                   @foreach($educations as $edu)
                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>{{$edu->heading}}</h4>
                                                                    <span>{{$edu->sub_heading}}</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>{{$edu->rating}}/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">{{$edu->des}}</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->
                                                    @endforeach

                                                   
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                     @php
                                                      $educations=DB::table('resumes')->where('cat_id','1')->where('sub_cat_id','2')->limit(3)->get();

                                                    @endphp
                                                     @foreach($educations as $edu2)
                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>{{$edu2->heading}}</h4>
                                                                    <span>{{$edu->sub_heading}}</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>{{$edu2->rating}}/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">{{$edu2->des}}</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->
                                                        @endforeach
                                                    <!-- Start Single List  -->
                                                    
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Design Skill</h4>
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">PHOTOSHOT</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">100%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">FIGMA</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 95%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">95%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ADOBE XD</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">60%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">ADOBE ILLUSTRATOR</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">DESIGN</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 90%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">90%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Development Skill</h4>
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">HTML</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">85%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">CSS</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 80%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">80%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">JAVASCRIPT</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 90%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">90%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">SOFTWARE</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">75%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">PLUGIN</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Personal Portfolio April Fools</h4>
                                                                    <span>University of DVI (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.30/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The education should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> Examples Of Personal Portfolio</h4>
                                                                    <span>College of Studies (2000 - 2002)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.50/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Tips For Personal Portfolio</h4>
                                                                    <span>University of Studies (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.80/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description"> If you are going to use a passage.
                                                                Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Web Development</h4>
                                                                    <span>BSE In CSE (2004 - 2008)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.70/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Contrary to popular belief. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>The Personal Portfolio Mystery</h4>
                                                                    <span>Job at Rainbow-Themes (2008 - 2016)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.95/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Generate Lorem Ipsum which looks. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Computer Science</h4>
                                                                    <span>Works at Plugin Development (2016 -
                                                                2020)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5.00/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="interview" role="tabpanel" aria-labelledby="interview-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Company Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Personal Portfolio April Fools</h4>
                                                                    <span>University of DVI (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.30/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The education should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> Examples Of Personal Portfolio</h4>
                                                                    <span>College of Studies (2000 - 2002)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.50/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Tips For Personal Portfolio</h4>
                                                                    <span>University of Studies (1997 - 2001)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.80/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description"> If you are going to use a passage.
                                                                Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2007 - 2010</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Web Development</h4>
                                                                    <span>BSE In CSE (2004 - 2008)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.70/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Contrary to popular belief. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>The Personal Portfolio Mystery</h4>
                                                                    <span>Job at Rainbow-Themes (2008 - 2016)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>4.95/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Generate Lorem Ipsum which looks. Ut
                                                                tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="900" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma in Computer Science</h4>
                                                                    <span>Works at Plugin Development (2016 -
                                                                2020)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span>5.00/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">Maecenas finibus nec sem ut
                                                                imperdiet. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Resume Area -->
          <!-- Start News Area -->
        <div class="rn-blog-area rn-section-gap section-separator" id="SocialActivity">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                            <!-- <span class="subtitle">Visit my blog and keep your feedback</span> -->
                            <h2 class="title">Social Activiy</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt--30 mt_md--10 mt_sm--10">

                    <!-- Start Single blog -->
                @foreach($social_activities as $k=>$blog)
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-bs-toggle="modal" data-bs-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset($blog->image)}}" alt="Personal Portfolio Images" height="150">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                           
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 2 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">{{$blog->heading}}
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single blog -->


                </div>
            </div>
        </div>
        <!-- ENd Mews Area -->

         <!-- Start News Area -->
        <div class="rn-blog-area rn-section-gap section-separator" id="Achievement">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                            <!-- <span class="subtitle">Visit my blog and keep your feedback</span> -->
                            <h2 class="title">Achievement</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt--30 mt_md--10 mt_sm--10">

                    <!-- Start Single blog -->
                @foreach($achievements as $k=>$blog)
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-bs-toggle="modal" data-bs-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset($blog->image)}}" alt="Personal Portfolio Images" height="150">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                           
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 2 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">{{$blog->heading}}
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single blog -->


                </div>
            </div>
        </div>
        <!-- ENd Mews Area -->
        <!-- Start Client Area -->
        <div class="rn-client-area rn-section-gap section-separator" id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <span class="subtitle">Popular Clients</span>
                            <h2 class="title">Awesome Clients</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--50 mt_md--40 mt_sm--40">
                    <div class="col-lg-4">
                        <div class="d-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky clients-wrapper sticky-top rbt-sticky-top-adjust">
                                <ul class="nav tab-navigation-button flex-column nav-pills me-3" id="v-pills-tab" role="tablist">
                                    @foreach($client_cat as $k=>$cat)
                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-home-tab" data-bs-toggle="tab" href="#v-pills-{{$cat->name}}" role="tab" aria-selected="true">{{$cat->name}}</a>
                                    </li>
                                   @endforeach

                                   


                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="tab-area">
                            <div class="d-flex align-items-start">
                                <div class="tab-content" id="v-pills-tabContent">
                                    @foreach($client_cat as $k=>$cat)

                                    <div class="tab-pane fade " id="v-pills-{{$cat->name}}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div class="client-card">
                                            @php
                                             $clients= DB::table('clients')->where('cat_id',$cat->id)->get();
                                            @endphp
                                          @foreach($clients as $client)
                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail" style="width: max-content">
                                                        <a href="#"><img src="{{asset($client->image)}}" alt="Client-image" width="150" height="150"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">{{$client->name}}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->
                                            @endforeach

                                            

                                        </div>
                                    </div>
                                  @endforeach


                                  <div class="tab-pane fade show active" id="v-pills-Design" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <div class="client-card">
                                            @foreach($client_front as $val)

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset($val->image)}}" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">{{$val->name}}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->
                                            @endforeach

                                          
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End client section -->

         <!-- Start News Area -->
        <div class="rn-blog-area rn-section-gap section-separator" id="Activity">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                            <!-- <span class="subtitle">Visit my blog and keep your feedback</span> -->
                            <h2 class="title">Recent Activiy</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt--30 mt_md--10 mt_sm--10">

                    <!-- Start Single blog -->
                @foreach($activities as $k=>$blog)
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-bs-toggle="modal" data-bs-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset($blog->image)}}" alt="Personal Portfolio Images" height="150">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">{{$blog->newscat->title}}</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 2 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">{{$blog->heading}}
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single blog -->


                </div>
            </div>
        </div>
        <!-- ENd Mews Area -->
       
        <!-- Start News Area -->
        <div class="rn-blog-area rn-section-gap section-separator" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                            <span class="subtitle">Visit my blog and keep your feedback</span>
                            <h2 class="title">My Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt--30 mt_md--10 mt_sm--10">

                    <!-- Start Single blog -->
                @foreach($news as $k=>$blog)
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-bs-toggle="modal" data-bs-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset($blog->image)}}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">{{$blog->newscat->title}}</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i> 2 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">{{$blog->heading}}
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single blog -->


                </div>
            </div>
        </div>
        <!-- ENd Mews Area -->
        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Contact</span>
                            <h2 class="title">Contact With Me</h2>
                        </div>
                    </div>
                </div>

                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    <div class="col-lg-5">
                         @php
                              $general= DB::table('genrals')->first();
                            @endphp
                        <div class="contact-about-area">
                            <div class="thumbnail">
                                <img src="assets/images/contact/contact1.png" alt="contact-img">
                            </div>

                            <div class="title-area">
                                <h4 class="title">{{$general->title}}</h4>
                                <span>Chief Operating Officer</span>
                            </div>
                            <div class="description">
                                <p>{{$general->f_content}}
                                </p>
                                <span class="phone">Phone: <a href="tel:{{ $general->mobile}}">{{ $general->mobile}}</a></span>
                                <span class="mail">Email: <a href="mailto:{{ $general->email}}">{{ $general->email}}</a></span>
                            </div>
                            <div class="social-area">
                                <div class="name">FIND WITH ME</div>
                                <div class="social-icone">
                                    <a href="#"><i data-feather="facebook"></i></a>
                                    <a href="#"><i data-feather="linkedin"></i></a>
                                    <a href="#"><i data-feather="instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos-delay="600" class="col-lg-7 contact-input">
                        <div class="contact-form-wrapper">
                            <div class="introduce">

                                <form class="rnt-contact-form rwt-dynamic-form row" id="contact-form" method="POST" action="mail.php">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Your Name</label>
                                            <input class="form-control form-control-lg" name="contact-name" id="contact-name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone Number</label>
                                            <input class="form-control" name="contact-phone" id="contact-phone" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-email">Email</label>
                                            <input class="form-control form-control-sm" id="contact-email" name="contact-email" type="email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">subject</label>
                                            <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Your Message</label>
                                            <textarea name="contact-message" id="contact-message" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" id="submit" class="rn-btn">
                                            <span>SEND MESSAGE</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contuct section -->
        <!-- Start Right Demo  -->
      <!--   <div class="rn-right-demo">
            <button class="demo-button">
                <span class="text">Demos</span>
            </button>
        </div> -->
        <!-- End Right Demo  -->

        

@endsection