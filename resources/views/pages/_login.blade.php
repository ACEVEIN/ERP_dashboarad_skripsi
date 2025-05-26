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
                                    <hr>
                                    <a href="{{ route('dashboard') }}" class="btn btn-microsoft btn-user btn-block">
                                        <!-- <i><img class="contentlogo" src="{{ asset('assets/img/logos--microsoft-icon.png') }}"></i> Login with Microsoft -->
                                        <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 256 256"><path fill="#f1511b" d="M121.666 121.666H0V0h121.666z"/><path fill="#80cc28" d="M256 121.666H134.335V0H256z"/>
                                            <path fill="#00adef" d="M121.663 256.002H0V134.336h121.663z"/>
                                            <path fill="#fbbc09" d="M256 256.002H134.335V134.336H256z"/>
                                        </svg>
                                        </i> 
                                        Login with Microsoft
                                    </a>
                                    {{-- <a href="{{ url('dashboard') }}" class="btn btn-facebook btn-user btn-block">
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
&lt;!-- Outer Row --&gt;
    &lt;div class=&quot;row justify-content-center&quot;&gt;

        &lt;div class=&quot;col-xl-10 col-lg-12 col-md-9&quot;&gt;

            &lt;div class=&quot;card o-hidden border-0 shadow-lg my-5&quot;&gt;
                &lt;div class=&quot;card-body p-0&quot;&gt;
                    &lt;!-- Nested Row within Card Body --&gt;
                    &lt;div class=&quot;row&quot;&gt;
                        &lt;div class=&quot;col-lg-6 d-none d-lg-block bg-login-image&quot;&gt;&lt;/div&gt;
                        &lt;div class=&quot;col-lg-6&quot;&gt;
                            &lt;div class=&quot;p-5&quot;&gt;
                                &lt;div class=&quot;text-center&quot;&gt;
                                    &lt;h1 class=&quot;h4 text-gray-900 mb-4&quot;&gt;Welcome Back!&lt;/h1&gt;
                                &lt;/div&gt;
                                &lt;form class=&quot;user&quot;&gt;
                                    &lt;div class=&quot;form-group&quot;&gt;
                                        &lt;input type=&quot;email&quot; class=&quot;form-control form-control-user&quot;
                                            id=&quot;exampleInputEmail&quot; aria-describedby=&quot;emailHelp&quot;
                                            placeholder=&quot;Enter Email Address...&quot;&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;form-group&quot;&gt;
                                        &lt;input type=&quot;password&quot; class=&quot;form-control form-control-user&quot;
                                            id=&quot;exampleInputPassword&quot; placeholder=&quot;Password&quot;&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;form-group&quot;&gt;
                                        &lt;div class=&quot;custom-control custom-checkbox small&quot;&gt;
                                            &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck&quot;&gt;
                                            &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck&quot;&gt;Remember
                                                Me&lt;/label&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;a href=&quot;{{ url('dashboard') }}&quot; class=&quot;btn btn-primary btn-user btn-block&quot;&gt;
                                        Login
                                    &lt;/a&gt;
                                    &lt;hr&gt;
                                    &lt;a href=&quot;{{ route('dashboard') }}&quot; class=&quot;btn btn-microsoft btn-user btn-block&quot;&gt;
                                        &lt;!-- &lt;i&gt;&lt;img class=&quot;contentlogo&quot; src=&quot;{{ asset('assets/img/logos--microsoft-icon.png') }}&quot;&gt;&lt;/i&gt; Login with Microsoft --&gt;
                                        &lt;i&gt;
                                        &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;15px&quot; height=&quot;15px&quot; viewBox=&quot;0 0 256 256&quot;&gt;&lt;path fill=&quot;#f1511b&quot; d=&quot;M121.666 121.666H0V0h121.666z&quot;/&gt;&lt;path fill=&quot;#80cc28&quot; d=&quot;M256 121.666H134.335V0H256z&quot;/&gt;
                                            &lt;path fill=&quot;#00adef&quot; d=&quot;M121.663 256.002H0V134.336h121.663z&quot;/&gt;
                                            &lt;path fill=&quot;#fbbc09&quot; d=&quot;M256 256.002H134.335V134.336H256z&quot;/&gt;
                                        &lt;/svg&gt;
                                        &lt;/i&gt; 
                                        Login with Microsoft
                                    &lt;/a&gt;
                                &lt;/form&gt;
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