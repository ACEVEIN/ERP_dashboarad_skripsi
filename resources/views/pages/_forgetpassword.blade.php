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
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                    <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                        and we'll send you a link to reset your password!</p>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                    </div>
                                    <a href="{{ url('/forgetpassword')}}" class="btn btn-primary btn-user btn-block">
                                        Reset Password
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ url('/forgetpassword')}}">Create an Account!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ url('/forgetpassword')}}">Already have an account? Login!</a>
                                </div>
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
&lt;div class=&quot;container&quot;&gt;

    &lt;!-- Outer Row --&gt;
    &lt;div class=&quot;row justify-content-center&quot;&gt;

        &lt;div class=&quot;col-xl-10 col-lg-12 col-md-9&quot;&gt;

            &lt;div class=&quot;card o-hidden border-0 shadow-lg my-5&quot;&gt;
                &lt;div class=&quot;card-body p-0&quot;&gt;
                    &lt;!-- Nested Row within Card Body --&gt;
                    &lt;div class=&quot;row&quot;&gt;
                        &lt;div class=&quot;col-lg-6 d-none d-lg-block bg-password-image&quot;&gt;&lt;/div&gt;
                        &lt;div class=&quot;col-lg-6&quot;&gt;
                            &lt;div class=&quot;p-5&quot;&gt;
                                &lt;div class=&quot;text-center&quot;&gt;
                                    &lt;h1 class=&quot;h4 text-gray-900 mb-2&quot;&gt;Forgot Your Password?&lt;/h1&gt;
                                    &lt;p class=&quot;mb-4&quot;&gt;We get it, stuff happens. Just enter your email address below
                                        and we'll send you a link to reset your password!&lt;/p&gt;
                                &lt;/div&gt;
                                &lt;form class=&quot;user&quot;&gt;
                                    &lt;div class=&quot;form-group&quot;&gt;
                                        &lt;input type=&quot;email&quot; class=&quot;form-control form-control-user&quot;
                                            id=&quot;exampleInputEmail&quot; aria-describedby=&quot;emailHelp&quot;
                                            placeholder=&quot;Enter Email Address...&quot;&gt;
                                    &lt;/div&gt;
                                    &lt;a href=&quot;{{ url('/forgetpassword')}}&quot; class=&quot;btn btn-primary btn-user btn-block&quot;&gt;
                                        Reset Password
                                    &lt;/a&gt;
                                &lt;/form&gt;
                                &lt;hr&gt;
                                &lt;div class=&quot;text-center&quot;&gt;
                                    &lt;a class=&quot;small&quot; href=&quot;{{ url('/forgetpassword')}}&quot;&gt;Create an Account!&lt;/a&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;text-center&quot;&gt;
                                    &lt;a class=&quot;small&quot; href=&quot;{{ url('/forgetpassword')}}&quot;&gt;Already have an account? Login!&lt;/a&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
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