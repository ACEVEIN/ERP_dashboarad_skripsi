@extends('master')

@section('content')

<style>
       .bg-login-image {
        background: url('{{ asset('assets/img/MATRIX_LOGO-01_1__1_-removebg-preview.png') }}');
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
    }
</style>

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder="Repeat Password">
                                </div>
                            </div>
                            <a href="{{ url('/register')}}" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </a>
                            <hr>
                            <a href="{{ url('/register')}}" class="btn btn-microsoft btn-user btn-block">
                                <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 256 256"><path fill="#f1511b" d="M121.666 121.666H0V0h121.666z"/><path fill="#80cc28" d="M256 121.666H134.335V0H256z"/>
                                    <path fill="#00adef" d="M121.663 256.002H0V134.336h121.663z"/>
                                    <path fill="#fbbc09" d="M256 256.002H134.335V134.336H256z"/>
                                </svg>
                                </i> 
                                Register with microsoft
                            </a>
                            {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a> --}}
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ url('/register')}}">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="{{ url('/register')}}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="collapseExample2">
            <div class="code-title">Code</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;div class=&quot;container&quot;&gt;

    &lt;div class=&quot;card o-hidden border-0 shadow-lg my-5&quot;&gt;
        &lt;div class=&quot;card-body p-0&quot;&gt;
            &lt;!-- Nested Row within Card Body --&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-lg-5 d-none d-lg-block bg-register-image&quot;&gt;&lt;/div&gt;
                &lt;div class=&quot;col-lg-7&quot;&gt;
                    &lt;div class=&quot;p-5&quot;&gt;
                        &lt;div class=&quot;text-center&quot;&gt;
                            &lt;h1 class=&quot;h4 text-gray-900 mb-4&quot;&gt;Create an Account!&lt;/h1&gt;
                        &lt;/div&gt;
                        &lt;form class=&quot;user&quot;&gt;
                            &lt;div class=&quot;form-group row&quot;&gt;
                                &lt;div class=&quot;col-sm-6 mb-3 mb-sm-0&quot;&gt;
                                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-user&quot; id=&quot;exampleFirstName&quot;
                                        placeholder=&quot;First Name&quot;&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;col-sm-6&quot;&gt;
                                    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-user&quot; id=&quot;exampleLastName&quot;
                                        placeholder=&quot;Last Name&quot;&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;form-group&quot;&gt;
                                &lt;input type=&quot;email&quot; class=&quot;form-control form-control-user&quot; id=&quot;exampleInputEmail&quot;
                                    placeholder=&quot;Email Address&quot;&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;form-group row&quot;&gt;
                                &lt;div class=&quot;col-sm-6 mb-3 mb-sm-0&quot;&gt;
                                    &lt;input type=&quot;password&quot; class=&quot;form-control form-control-user&quot;
                                        id=&quot;exampleInputPassword&quot; placeholder=&quot;Password&quot;&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;col-sm-6&quot;&gt;
                                    &lt;input type=&quot;password&quot; class=&quot;form-control form-control-user&quot;
                                        id=&quot;exampleRepeatPassword&quot; placeholder=&quot;Repeat Password&quot;&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;a href=&quot;{{ url('/register')}}&quot; class=&quot;btn btn-primary btn-user btn-block&quot;&gt;
                                Register Account
                            &lt;/a&gt;
                            &lt;hr&gt;
                            &lt;a href=&quot;{{ url('/register')}}&quot; class=&quot;btn btn-microsoft btn-user btn-block&quot;&gt;
                                &lt;i&gt;
                                &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;15px&quot; height=&quot;15px&quot; viewBox=&quot;0 0 256 256&quot;&gt;&lt;path fill=&quot;#f1511b&quot; d=&quot;M121.666 121.666H0V0h121.666z&quot;/&gt;&lt;path fill=&quot;#80cc28&quot; d=&quot;M256 121.666H134.335V0H256z&quot;/&gt;
                                    &lt;path fill=&quot;#00adef&quot; d=&quot;M121.663 256.002H0V134.336h121.663z&quot;/&gt;
                                    &lt;path fill=&quot;#fbbc09&quot; d=&quot;M256 256.002H134.335V134.336H256z&quot;/&gt;
                                &lt;/svg&gt;
                                &lt;/i&gt; 
                                Register with microsoft
                            &lt;/a&gt;
                        &lt;/form&gt;
                        &lt;hr&gt;
                        &lt;div class=&quot;text-center&quot;&gt;
                            &lt;a class=&quot;small&quot; href=&quot;{{ url('/register')}}&quot;&gt;Forgot Password?&lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;text-center&quot;&gt;
                            &lt;a class=&quot;small&quot; href=&quot;{{ url('/register')}}&quot;&gt;Already have an account? Login!&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

&lt;/div&gt;
                    </code>
                </pre>
        </div>
    </div>




</div>








@endsection


