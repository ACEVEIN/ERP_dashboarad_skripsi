@extends('master')

@section('content')


<div class="page-content">
    <div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Label</h1>
    </div>

    {{-- <div class="d-flex flex-column align-items-start mt-4">

        <div href="#" class="btn btn-success btn-pill label-active" onclick="toggleLabel(this)">
            Active
        </div>
     
        <div href="#" class="btn btn-danger btn-pill label-inactive mt-4" onclick="toggleLabel(this)">
            Inactive
        </div>
     
    </div> --}}

    <div class="col-md-3 mb-3">
        <label>Zip</label> -----> This is Label
        <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>


         <p class="pt-4">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseCheckbox" aria-expanded="false" aria-controls="collapseExample">
                <i class="fa-solid fa-code"></i>
                View Source Code
            </button>
        </p>
        <div class="container mt-4">            
            <div class="code-snippet collapse" id="collapseCheckbox">
                <div class="code-title">Label</div>
                <button class="copy-button">Copy Code</button>
                    <pre>
                        <code class="language-html">

&lt;label&gt;Zip&lt;/label&gt; -----&gt; This is Label

                        </code>
                    </pre>
            </div>
        </div>





    </div>
</div>

<script>
    function toggleLabel(element) {
    if (element.classList.contains('active')) {
        element.classList.remove('active');
        element.classList.add('inactive');
        element.textContent = 'Inactive';
    } else {
        element.classList.remove('inactive');
        element.classList.add('active');
        element.textContent = 'Active';
    }
}
</script>

@endsection