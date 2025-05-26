@extends('master')

@section('content')

<style>
    .contentlogo{
    max-width: 80%;
    height: auto;
    }

    .contentlogo2{
    max-width: 65%;
    height: auto;
    /* padding-top: 20px; */
    }
</style>



<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Logo</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">


            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Default Matrix Logo</h6>
                </div> 
                <div class="card-body text-center">
                   
                    <img class="contentlogo" src="{{ asset('assets/img/MATRIX_LOGO-01_1__1_-removebg-preview.png') }}" class="img-fluid" alt="primarymatrixlogo">
               
                    <p>Used When The Background Is Bright</p>
                </div>
            </div>
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#defaultLogo" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-code"></i>
                    View Source Code
                </button>
            </p>
            <div class="container mt-4">            
                <div class="code-snippet collapse" id="defaultLogo">
                    <div class="code-title">Code</div>
                    <button class="copy-button">Copy Code</button>
                        <pre>
                            <code class="language-html">
&lt;img class=&quot;contentlogo&quot; src=&quot;{{ asset('assets/img/MATRIX_LOGO-01_1__1_-removebg-preview.png') }}&quot; class=&quot;img-fluid&quot; alt=&quot;primarymatrixlogo&quot;&gt;
                            </code>
                        </pre>
                </div>
            </div>

         
  

            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">White Matrix Logo</h6>
                </div>
                <div class="card-body text-center bg-dark rounded-bottom">
                    
                    <img class="contentlogo2 mt-4" src="{{ asset('assets/img/Logo Matrix WHITE 1.png') }}" class="img-fluid" alt="whitematrixlogo"> 
                  
                    <br>
                    <p class="mt-4">Used When The Background Is Dark</p>
                </div>
            </div>
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#whitematrixlogo" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-code"></i>
                    View Source Code
                </button>
            </p>
            <div class="container mt-4">            
                <div class="code-snippet collapse" id="whitematrixlogo">
                    <div class="code-title">Code</div>
                    <button class="copy-button">Copy Code</button>
                        <pre>
                            <code class="language-html">
&lt;img class=&quot;contentlogo2 mt-4&quot; src=&quot;{{ asset('assets/img/Logo Matrix WHITE 1.png') }}&quot; class=&quot;img-fluid&quot; alt=&quot;whitematrixlogo&quot;&gt; 
                            </code>
                        </pre>
                </div>
            </div>


        </div>

        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Black Matrix Logo</h6>
                </div>
                <div class="card-body text-center">
                    
                    <img class="contentlogo" src="{{ asset('assets/img/Logo Matrix BLACK-01 1.png') }}" class="img-fluid" alt="blackmatrixlogo">
                    
                    <p>Used When The Background Is Bright</p>
                </div>
            </div>


            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#blackmatrixlogo" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-code"></i>
                    View Source Code
                </button>
            </p>
            <div class="container mt-4">            
                <div class="code-snippet collapse" id="blackmatrixlogo">
                    <div class="code-title">Code</div>
                    <button class="copy-button">Copy Code</button>
                        <pre>
                            <code class="language-html">
&lt;img class=&quot;contentlogo&quot; src=&quot;{{ asset('assets/img/Logo Matrix BLACK-01 1.png') }}&quot; class=&quot;img-fluid&quot; alt=&quot;blackmatrixlogo&quot;&gt;
                            </code>
                        </pre>
                </div>
            </div>


        </div>

    </div>


</div>




@endsection