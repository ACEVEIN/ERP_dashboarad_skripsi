@extends('master')

@section('content')


<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Magnifier</h1>
    </div>

  

    <div class="row">

        <div class="col-lg-6">
            {{-- Zoom 1 --}}
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Zoom 1</h6>
                </div>

                <div class="card-body">
                    <div id="imageZoom" class="zoom-in" style="
                        --url: url('/assets/img/samuel-berner-v_bHfUaN1GY-unsplash.jpg');
                        --zoom-x: 0%; --zoom-y: 0%;
                        --display: none">
                        <img src="{{ asset('assets/img/samuel-berner-v_bHfUaN1GY-unsplash.jpg') }}" alt="">
                    </div>
                </div>
            </div>

            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#zoom1" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-code"></i>
                    View Source Code
                </button>
            </p>
            <div class="container mt-4">            
                <div class="code-snippet collapse" id="zoom1">
                    <div class="code-title">Zoom 1</div>
                    <button class="copy-button">Copy Code</button>
                        <pre>
                            <code class="language-html">
    
&lt;div class=&quot;card shadow mb-4&quot;&gt;
    &lt;div class=&quot;card-header py-3&quot;&gt;
        &lt;h6 class=&quot;m-0 font-weight-bold text-white&quot;&gt;Zoom 1&lt;/h6&gt;
    &lt;/div&gt;

    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;imageZoom&quot; class=&quot;zoom-in&quot; style=&quot;
            --url: url('/assets/img/samuel-berner-v_bHfUaN1GY-unsplash.jpg');
            --zoom-x: 0%; --zoom-y: 0%;
            --display: none&quot;&gt;
            &lt;img src=&quot;{{ asset('assets/img/samuel-berner-v_bHfUaN1GY-unsplash.jpg') }}&quot; alt=&quot;&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
    
                            </code>
                        </pre>
                </div>
            </div>

        </div>
    
        <div class="col-lg-6">
            {{-- Zoom 2 --}}
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Zoom 2</h6>
                </div>

                <div class="card-body">
                    <div class="geeks">
                        <img class="d-block w-100 zoom-in" src="{{ asset('assets/img/samuel-berner-v_bHfUaN1GY-unsplash.jpg') }}" alt="First slide">
                    </div>
                </div>
            </div>

            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#zoom2" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-code"></i>
                    View Source Code
                </button>
            </p>
            <div class="container mt-4">            
                <div class="code-snippet collapse" id="zoom2">
                    <div class="code-title">Zoom 2</div>
                    <button class="copy-button">Copy Code</button>
                        <pre>
                            <code class="language-html">
    
&lt;div class=&quot;card shadow mb-4&quot;&gt;
    &lt;div class=&quot;card-header py-3&quot;&gt;
        &lt;h6 class=&quot;m-0 font-weight-bold text-white&quot;&gt;Zoom 2&lt;/h6&gt;
    &lt;/div&gt;

    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div class=&quot;geeks&quot;&gt;
            &lt;img class=&quot;d-block w-100 zoom-in&quot; src=&quot;{{ asset('assets/img/samuel-berner-v_bHfUaN1GY-unsplash.jpg') }}&quot; alt=&quot;First slide&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
    
                            </code>
                        </pre>
                </div>
            </div>


        </div>

    </div>
  



    {{-- <h4 class="text-black">Cursor</h4>
    <div class="zoom-in">&bull; zoom-in</div>
    <div class="zoom-out">&bull; zoom-out</div> --}}
    <h4 class="text-black">Cursor</h4>
    <ul>
        <li><div class="zoom-in">Zoom-in</div></li>
        <li><div class="zoom-out">Zoom-out</div></li>
    </ul>
   
    <br>


    



  
</div>




@endsection















