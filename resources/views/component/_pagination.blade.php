@extends('master')

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pagination</h1>
        </div>

     
<div class="row">


<div class="col">
    <h6>Standard Pagination</h6>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#standardPagination" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="standardPagination">
            <div class="code-title">Alert Without icon</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
                    </code>
                </pre>
            </div>
      </div>

    <br>


   <h6>Pagination With Icon</h6>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
    </nav>
    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#iconPagination" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="iconPagination">
            <div class="code-title">Alert Without icon</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt;
            &lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;
        &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Next&quot;&gt;
            &lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;
        &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
                    </code>
                </pre>
            </div>
      </div>



      <br>


    <h6>Pagination Disabled</h6>
    <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
          <li class="page-item disabled" aria-current="page">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
    </nav>
    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#disabledPagination" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="disabledPagination">
            <div class="code-title">Alert Without icon</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
        &lt;a class=&quot;page-link&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item disabled&quot; aria-current=&quot;page&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
                    </code>
                </pre>
            </div>
      </div>




      <br>





    <h6>Pagination Active</h6>
    <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
    </nav>
    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#activePagination" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="activePagination">
            <div class="code-title">Alert Without icon</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
        &lt;a class=&quot;page-link&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
                    </code>
                </pre>
            </div>
      </div>



      <br>


    <h6>Pagination Combination</h6>
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>

            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">2</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item">
            <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#combinationPagination" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="combinationPagination">
            <div class="code-title">Alert Without icon</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;span class=&quot;page-link&quot;&gt;Previous&lt;/span&gt;
        &lt;/li&gt;

        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
            &lt;span class=&quot;page-link&quot;&gt;2&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;6&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
                    </code>
                </pre>
            </div>
      </div>


</div>

<div class="col">
    <h6>Pagination Big Size</h6>
    <nav aria-label="...">
        <ul class="pagination pagination-lg">
          <li class="page-item active" aria-current="page">
            <span class="page-link">1</span>
          </li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>
    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#bigPagination" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="bigPagination">
            <div class="code-title">Alert Without icon</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;h6&gt;Pagination Big Size&lt;/h6&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination pagination-lg&quot;&gt;
        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
        &lt;span class=&quot;page-link&quot;&gt;1&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
                    </code>
                </pre>
            </div>
      </div>


<br>


    <h6>Pagination Small Size</h6>
    <nav aria-label="...">
        <ul class="pagination pagination-sm">
          <li class="page-item active" aria-current="page">
            <span class="page-link">1</span>
          </li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>
    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#smallPagination" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="smallPagination">
            <div class="code-title">Alert Without icon</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;h6&gt;Pagination Small Size&lt;/h6&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination pagination-sm&quot;&gt;
        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
        &lt;span class=&quot;page-link&quot;&gt;1&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
                    </code>
                </pre>
            </div>
      </div>

      <br>

    <h6>Alignment Center </h6>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
    </nav>
    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#alignmentcenterPagination" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="alignmentcenterPagination">
            <div class="code-title">Alert Without icon</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;h6&gt;Alignment Center&lt;/h6&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination justify-content-center&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
        &lt;a class=&quot;page-link&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
                    </code>
                </pre>
            </div>
      </div>

      <br>

    <h6>Alignment End</h6>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
    </nav>
    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#alignmentendPagination" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="alignmentendPagination">
            <div class="code-title">Alert Without icon</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;h6&gt;Alignment End&lt;/h6&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination justify-content-end&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
        &lt;a class=&quot;page-link&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
                    </code>
                </pre>
            </div>
      </div>

</div>


    





   

</div>

     



    </div>
</div>

@endsection