<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{ asset('assets/img/matrix.png') }}">

    <title>Dashboard Employee Information | Matrix NAP Info</title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    {{-- Font Awesome --}}
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.css') }}" rel="stylesheet">
 
    <!--jquery  -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="  crossorigin="anonymous"></script>

    {{-- Prism.js CSS for code highlighting  --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet">
</head>


<style>
    .bg-login-image {
        background: url('{{ asset('assets/img/MATRIX_LOGO-01_1__1_-removebg-preview.png') }}');
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
    }

    .card {
        position: relative;
        z-index: 10;
    }

    #animation-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
    }

    .particle {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(0, 123, 255, 0.5);
    }


    .loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #333333;
        transition: opacity 1s, visibility 1s;
        z-index: 100;
    }

    .loader--hidden {
        opacity: 0;
        visibility: hidden;
    }
    
    .loader::after {
        content: "";
        width: 75px;
        height: 75px;
        border: 15px solid #dddddd;
        border-top-color: #FDB515;
        border-radius: 50%;
        animation: loading 1s ease infinite;
        z-index: 100;
    }
    
    @keyframes loading {
        from {
        transform: rotate(0turn);
        }
        to {
        transform: rotate(1turn);
        }
    }
</style>

 
<body class="min-vh-100 d-flex justify-content-center align-items-center">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
    
            <div class="col-xl-10 col-lg-12 col-md-9">
    
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href="{{ url('dashboard') }}" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                        {{-- <hr>
                                        <a href="{{ url('dashboard') }}" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="{{ url('dashboard') }}" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> --}}
                                    </form>
                                    {{-- <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
        </div>
    
    </div>

    <div id="animation-container"></div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.js') }}"></script>

    {{-- Loader --}}
    <script>
        $(window).on('load', function() {
        var $loader = $('.loader');
        
        $loader.addClass('loader--hidden');
        
        $loader.on('transitionend', function() {
            $loader.remove();
        });
        });
    </script>

    {{-- Canvas HTML --}}
    <script>
        window.onload = function() {
            var container = document.getElementById('animation-container');
            var particles = [];
            var particleCount = 100;

            function Particle() {
                this.x = Math.random() * window.innerWidth;
                this.y = Math.random() * window.innerHeight;
                this.vx = Math.random() * 2 - 1;
                this.vy = Math.random() * 2 - 1;
                this.size = Math.random() * 10;
                this.element = document.createElement('div');
                this.element.classList.add('particle');
                this.element.style.width = this.size + 'px';
                this.element.style.height = this.size + 'px';
                this.element.style.left = this.x + 'px';
                this.element.style.top = this.y + 'px';
                container.appendChild(this.element);
            }

            Particle.prototype.update = function() {
                this.x += this.vx;
                this.y += this.vy;
                if (this.x < 0 || this.x > window.innerWidth) this.vx *= -1;
                if (this.y < 0 || this.y > window.innerHeight) this.vy *= -1;
                this.element.style.left = this.x + 'px';
                this.element.style.top = this.y + 'px';
            }

            for (var i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }

            function animate() {
                particles.forEach(function(p) {
                    p.update();
                });
                requestAnimationFrame(animate);
            }

            function resize() {
                particles.forEach(function(p) {
                    p.x = Math.random() * container.clientWidth;
                    p.y = Math.random() * container.clientHeight;
                });
            }
            
            window.addEventListener('resize', resize);
            animate();
        };
    </script>
    
</body>

</html>
























