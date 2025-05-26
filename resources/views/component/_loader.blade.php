@extends('master')

@section('content')


<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Loading Page</h3>
    </div>

    <div class="row">

        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Loader 1</h6>
                </div>

                <div class="card-body">
        
                    <div class="showbox">
                        <div class="load">
                            <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                            </svg>
                        </div>
                    </div>

                </div>
            </div>

            <p>
              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  <i class="fa-solid fa-code"></i>
                  View Source Code
              </button>
            </p>
          
            <div class="container mt-4">
                              
                <div class="code-snippet collapse" id="collapseExample">
                    <div class="code-title">Code</div>
                    <button class="copy-button">Copy Code</button>
                        <pre>
                            <code class="language-html">
&lt;div class=&quot;showbox&quot;&gt;
  &lt;div class=&quot;load&quot;&gt;
      &lt;svg class=&quot;circular&quot; viewBox=&quot;25 25 50 50&quot;&gt;
      &lt;circle class=&quot;path&quot; cx=&quot;50&quot; cy=&quot;50&quot; r=&quot;20&quot; fill=&quot;none&quot; stroke-width=&quot;2&quot; stroke-miterlimit=&quot;10&quot;/&gt;
      &lt;/svg&gt;
  &lt;/div&gt;
&lt;/div&gt;
                            </code>
                        </pre>
                </div>
                                        
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Loader 2</h6>
                </div>
                <div class="card-body">

                <div class="wrap">
                    <div class="loading">
                        <div class="bounceball"></div>
                        <div class="text">NOW LOADING</div>
                    </div>
                </div>

                </div>
            </div>

            <p>
              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#loader2" aria-expanded="false" aria-controls="collapseExample">
                  <i class="fa-solid fa-code"></i>
                  View Source Code
              </button>
            </p>
          
            <div class="container mt-4">
                              
                <div class="code-snippet collapse" id="loader2">
                    <div class="code-title">Code</div>
                    <button class="copy-button">Copy Code</button>
                        <pre>
                            <code class="language-html">
&lt;div class=&quot;card shadow mb-4&quot;&gt;
  &lt;div class=&quot;card-header py-3&quot;&gt;
      &lt;h6 class=&quot;m-0 font-weight-bold text-white&quot;&gt;Loader 2&lt;/h6&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;

  &lt;div class=&quot;wrap&quot;&gt;
      &lt;div class=&quot;loading&quot;&gt;
          &lt;div class=&quot;bounceball&quot;&gt;&lt;/div&gt;
          &lt;div class=&quot;text&quot;&gt;NOW LOADING&lt;/div&gt;
      &lt;/div&gt;
  &lt;/div&gt;

  &lt;/div&gt;
&lt;/div&gt;
                            </code>
                        </pre>
                </div>
                                        
            </div>

        </div>

        <div class="col-lg-6">
          
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Border spinner</h6>
                </div>

                <div class="card-body">
                      <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-border text-secondary" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-border text-success" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-border text-danger" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-border text-warning" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-border text-info" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-border text-light" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-border text-dark" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                </div>
    
            </div>
            <p>
              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#loader3" aria-expanded="false" aria-controls="collapseExample">
                  <i class="fa-solid fa-code"></i>
                  View Source Code
              </button>
            </p>
          
            <div class="container mt-4">
                              
                <div class="code-snippet collapse" id="loader3">
                    <div class="code-title">Code</div>
                    <button class="copy-button">Copy Code</button>
                        <pre>
                            <code class="language-html">
&lt;div class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-secondary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-success&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-danger&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-warning&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-info&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-light&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-dark&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
                            </code>
                        </pre>
                </div>
                                        
            </div>



            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Growing spinner</h6>
                </div>
                <div class="card-body">
                      <div class="spinner-grow text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-secondary" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-success" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-danger" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-warning" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-info" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-light" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-dark" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                </div>
            </div>
            <p>
              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#loader4" aria-expanded="false" aria-controls="collapseExample">
                  <i class="fa-solid fa-code"></i>
                  View Source Code
              </button>
            </p>
          
            <div class="container mt-4">
                              
                <div class="code-snippet collapse" id="loader4">
                    <div class="code-title">Code</div>
                    <button class="copy-button">Copy Code</button>
                        <pre>
                            <code class="language-html">
&lt;div class=&quot;spinner-grow text-primary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-secondary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-success&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-danger&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-warning&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-info&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-light&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-dark&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;sr-only&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
                            </code>
                        </pre>
                </div>
                                        
            </div>



        </div>

    </div>

</div>

@endsection