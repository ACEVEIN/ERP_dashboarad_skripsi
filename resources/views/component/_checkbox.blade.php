@extends('master')

@section('content')


<style>
input[type="checkbox"] {
  width: 30px;
  height: 30px;
}

label{
    font-size :20px;
    padding-left: 20px;
    text-align: center;
    margin: 5px;
}
</style>


<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Check Box</h1>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        Default checkbox
        </label>
    </div>
   
    <br>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
        Checked checkbox
        </label>
    </div>


    <p class="pt-4">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseCheckbox" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
      <div class="container mt-4">            
            <div class="code-snippet collapse" id="collapseCheckbox">
                <div class="code-title">Checkbox</div>
                <button class="copy-button">Copy Code</button>
                    <pre>
                        <code class="language-html">
&lt;div class=&quot;form-check&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault&quot;&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckDefault&quot;&gt;
    Default checkbox
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckChecked&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckChecked&quot;&gt;
    Checked checkbox
    &lt;/label&gt;
&lt;/div&gt;
                        </code>
                    </pre>
            </div>
      </div>
  


</div>

@endsection