@extends('master')

@section('content')


<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Code Snippet</h1>
</div>

    <div class="container mt-4">                      
        <div class="code-snippet">
            <div class="code-title">Code</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates consectetur aliquam vitae, 
maiores exercitationem similique quam saepe fugit quos facere corrupti fuga! Excepturi, 
quae omnis mollitia totam nostrum fugiat corporis.
                    </code>
                </pre>
        </div>
                                  
    </div>



    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#modalInfo" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="modalInfo">
            <div class="code-title">Alert Without icon</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;p&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#codeSnippet&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
        &lt;i class=&quot;fa-solid fa-code&quot;&gt;&lt;/i&gt;
        View Source Code
    &lt;/button&gt;
&lt;/p&gt;
&lt;div class=&quot;container mt-4&quot;&gt;            
    &lt;div class=&quot;code-snippet collapse&quot; id=&quot;codeSnippet&quot;&gt;
        &lt;div class=&quot;code-title&quot;&gt;Alert Without icon&lt;/div&gt;
        &lt;button class=&quot;copy-button&quot;&gt;Copy Code&lt;/button&gt;
            &lt;pre&gt;
                &lt;code class=&quot;language-html&quot;&gt;
                ...
                &lt;/code&gt;
            &lt;/pre&gt;
    &lt;/div&gt;
&lt;/div&gt;
                    </code>
                </pre>
        </div>
    </div>





</div>

@endsection