<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home consulting || Inbio - Personal Portfolio Bootstrap-5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/aos.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/feature.css')}}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
</head>

<body class="template-color-1 home-sticky spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="150">

   @include('frontend.body.header')

    <main class="page-wrapper-two">

       @yield('content')
      @include('frontend.body.footer')
        <!-- modal area End -->


        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->

    </main>







    <!-- JS ============================================ -->
    <script src="{{asset('frontend/assets/js/vendor/jquery.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/modernizer.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/feather.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/bootstrap.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/text-type.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/wow.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/aos.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/particles.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/jquery-one-page-nav.js')}}"></script>
    <!-- main JS -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>

    <script>
        particlesJS('particles-js',

            {
                "particles": {
                    "number": {
                        "value": 20,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": ["#ffffff", ]
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 4
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.8,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 4,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": false,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 800,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true,
                "config_demo": {
                    "hide_card": false,
                    "background_color": "#b61924",
                    "background_image": "",
                    "background_position": "50% 50%",
                    "background_repeat": "no-repeat",
                    "background_size": "cover"
                }
            }

        );
    </script>
</body>

</html>