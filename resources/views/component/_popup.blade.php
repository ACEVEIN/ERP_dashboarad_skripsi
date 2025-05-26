@extends('master')

@section('content')

<div class="container-fluid">
  <!-- datatrigger = focus = untuk menutup popover -->

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Pop Up</h1>
  </div>

  <div class="mb-2">
    Try to click it and it will pop up some information
    <br>
    <button type="button" class="btn btn-pink" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
      Popover on top
    </button>

    <button type="button" class="btn btn-pink" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
      Popover on right
    </button>

    <button type="button" class="btn btn-pink" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
      Popover on bottom
    </button>

    <button type="button" class="btn btn-pink" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
      Popover on left
    </button>
  </div>
  
  <p class="pt-4">
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsepopup1" aria-expanded="false" aria-controls="collapseExample">
        <i class="fa-solid fa-code"></i>
        View Source Code
    </button>
  </p>
  <div class="container mt-4">            
        <div class="code-snippet collapse" id="collapsepopup1">
            <div class="code-title">Alert with icon</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;button type=&quot;button&quot; class=&quot;btn btn-pink&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;top&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
  Popover on top
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-pink&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;right&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
  Popover on right
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-pink&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;bottom&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
  Popover on bottom
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-pink&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;left&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
  Popover on left
&lt;/button&gt;
                    </code>
                </pre>
        </div>
  </div>



    <br>



  <div class="mb-2">
    Normal Popover
    <br>
    <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" data-placement="bottom" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">
      Click to toggle popover
    </button>
  </div>

  <div class="mb-2">
    {{-- <h1 class="h5 mb-0 text-gray-800"> Close Popover (add : data-trigger="focus & tabindex="0"")</h1> --}}
    Close Popover (add : data-trigger="focus & tabindex="0"")
    <br>
      
    <button tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="Click anywhere to close popover">
      Dismissible popover
    </button>
  </div>

  <div class="mb-2">
    {{-- <h1 class="h5 mb-0 text-gray-800"> Hover Popover (add : data-trigger="hover & tabindex="0"")</h1> --}}
    Hover Popover (add : data-trigger="hover & tabindex="0"")
    <br>
  
    <button tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="hover" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">
      Hoverable Popover
    </button>
  </div>
   
  <p class="pt-4">
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsepopup2" aria-expanded="false" aria-controls="collapseExample">
        <i class="fa-solid fa-code"></i>
        View Source Code
    </button>
  </p>
  <div class="container mt-4">            
        <div class="code-snippet collapse" id="collapsepopup2">
            <div class="code-title">Alert with icon</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-danger&quot; data-toggle=&quot;popover&quot; data-placement=&quot;bottom&quot; title=&quot;Popover title&quot; data-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;
  Click to toggle popover
&lt;/button&gt;

&lt;button tabindex=&quot;0&quot; class=&quot;btn btn-lg btn-danger&quot; role=&quot;button&quot; data-toggle=&quot;popover&quot; data-trigger=&quot;focus&quot; title=&quot;Dismissible popover&quot; data-content=&quot;Click anywhere to close popover&quot;&gt;
  Dismissible popover
&lt;/button&gt;

&lt;button tabindex=&quot;0&quot; class=&quot;btn btn-lg btn-danger&quot; role=&quot;button&quot; data-toggle=&quot;popover&quot; data-trigger=&quot;hover&quot; title=&quot;Dismissible popover&quot; data-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;
  Hoverable Popover
&lt;/button&gt;
                    </code>
                </pre>
        </div>
  </div>




</div>


@endsection