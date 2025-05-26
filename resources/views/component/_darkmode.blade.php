
@extends('master')

@section('content')

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dark Mode Example</h1>
  </div>
      {{-- <div class="d-flex justify-content-between align-items-center">
        <h1>Dark Mode Example</h1>
      </div> --}}
      <p>This is a switch to demonstrate dark mode appearance.</p>

      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="darkModeSwitch2">
        <label class="custom-control-label" for="darkModeSwitch2">Dark Mode</label>
      </div>
      <br>
    
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#modalInfo" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
            <div class="code-snippet collapse" id="modalInfo">
                <div class="code-title">Code</div>
                <button class="copy-button">Copy Code</button>
                    <pre>
                        <code class="language-html">
&lt;div class=&quot;custom-control custom-switch&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;darkModeSwitch&quot;&gt;
  &lt;label class=&quot;custom-control-label&quot; for=&quot;darkModeSwitch&quot;&gt;Dark Mode&lt;/label&gt;
&lt;/div&gt;
                        </code>
                    </pre>
            </div>
      </div>



</div>




@endsection