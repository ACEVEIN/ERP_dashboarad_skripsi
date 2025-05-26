@extends('master')

@section('content')


<div class="container-fluid">
    <div class="text-center pt-4">
        <h1 style="font-size:80px;">404</h1>

        <h3>Page Not Found</h3>
        <p>Would you like to return to dashboard?</p>

        <a class="btn btn-primary" href="{{ url('/404page')}}">Back to Dashboard</a>
    </div>


  <p class="pt-2">
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
&lt;div class=&quot;text-center pt-4&quot;&gt;
  &lt;h1 style=&quot;font-size:80px;&quot;&gt;404&lt;/h1&gt;

  &lt;h3&gt;Page Not Found&lt;/h3&gt;
  &lt;p&gt;Would you like to return to dashboard?&lt;/p&gt;

  &lt;a class=&quot;btn btn-primary&quot; href=&quot;{{ url('/404page')}}&quot;&gt;Back to Dashboard&lt;/a&gt;
&lt;/div&gt;
                  </code>
              </pre>
      </div>
  </div>


</div>







@endsection