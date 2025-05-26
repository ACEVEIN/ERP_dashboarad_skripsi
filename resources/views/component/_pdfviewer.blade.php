@extends('master')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pdf Viwer</h1>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">View PDF</h6>
        </div>

        <div class="card-body">
            <div class="page-info">
                <div class="row text-center">
                    <div class="col">
                        <h2>PDF</h2>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col">
                        <span>Page: <span id="pageNum">1</span> of <span id="pageCount">1</span></span>
                    </div>
                </div>
                
                <div class="row text-center">
                    <div class="col">
                        *please wait if the data does not appear
                    </div>
                </div>

                <br>

                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa-solid fa-circle-info"></i>
                        Info
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sort By</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col">Applies in The Department:</th>
                                        <th scope="col">Applies in The Division:</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       
                                            <tr>
                                                <td>Test</td>
                                                <td>Test</td>
                                            </tr>
                                    
                                    </tbody>
                                </table>

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>

            </div>

            <br>

            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column align-items-center">
                    <div class="btn btn-info rounded-circle" id="prevPage">
                    <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <br>
                    <p>Prev</p>
                </div>
               
                <div class="d-flex justify-content-center align-items-center">
                    {{-- <a href="https://stagingapi.napinfo.co.id/apiNapEmpInfo/storage/uploads/sop/dhdvfdsufs-1727069095/dhdvfdsufs-1727069095.pdf" target="_blank" class="d-flex justify-content-center"> --}}
                        <div id="pdfViewer" class="mt-3 mx-5" style="width: 100%"></div>
                    {{-- </a> --}}
                </div>

                <div class="d-flex flex-column align-items-center">
                    <div class="btn btn-info rounded-circle" id="nextPage">
                    <i class="fa-solid fa-chevron-right"></i>
                    </div>
                    <br>
                    <p>Next</p>
                </div>
            </div>

            <br>

            <div class="d-flex justify-content-around">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                        <a href="" class="btn btn-info"> <i class="fa-solid fa-file-arrow-down"></i> Request Download PDF</a>
                </form>

                <a href="" class="btn btn-primary" download="sop.pdf"> 
                    <i class="fa-solid fa-file-arrow-down"></i> Download
                </a>
            </div>

            <br>
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
&lt;div class=&quot;page-info&quot;&gt;
    &lt;div class=&quot;row text-center&quot;&gt;
        &lt;div class=&quot;col&quot;&gt;
            &lt;h2&gt;PDF&lt;/h2&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;row text-center&quot;&gt;
        &lt;div class=&quot;col&quot;&gt;
            &lt;span&gt;Page: &lt;span id=&quot;pageNum&quot;&gt;1&lt;/span&gt; of &lt;span id=&quot;pageCount&quot;&gt;1&lt;/span&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    
    &lt;div class=&quot;row text-center&quot;&gt;
        &lt;div class=&quot;col&quot;&gt;
            *please wait if the data does not appear
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;br&gt;

    &lt;div class=&quot;d-flex justify-content-center&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-toggle=&quot;modal&quot; data-target=&quot;#exampleModal&quot;&gt;
            &lt;i class=&quot;fa-solid fa-circle-info&quot;&gt;&lt;/i&gt;
            Info
        &lt;/button&gt;

        &lt;!-- Modal --&gt;
        &lt;div class=&quot;modal fade&quot; id=&quot;exampleModal&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
            &lt;div class=&quot;modal-dialog&quot;&gt;
            &lt;div class=&quot;modal-content&quot;&gt;
                &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLabel&quot;&gt;Sort By&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
                &lt;/button&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-body&quot;&gt;
                    
                    &lt;table class=&quot;table table-borderless&quot;&gt;
                        &lt;thead&gt;
                        &lt;tr&gt;
                            &lt;th scope=&quot;col&quot;&gt;Applies in The Department:&lt;/th&gt;
                            &lt;th scope=&quot;col&quot;&gt;Applies in The Division:&lt;/th&gt;
                        &lt;/tr&gt;
                        &lt;/thead&gt;
                        &lt;tbody&gt;
                            
                                &lt;tr&gt;
                                    &lt;td&gt;Test&lt;/td&gt;
                                    &lt;td&gt;Test&lt;/td&gt;
                                &lt;/tr&gt;
                        
                        &lt;/tbody&gt;
                    &lt;/table&gt;

                &lt;/div&gt;
                &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

    &lt;/div&gt;

&lt;/div&gt;

&lt;br&gt;

&lt;div class=&quot;d-flex justify-content-center align-items-center&quot;&gt;
    &lt;div class=&quot;d-flex flex-column align-items-center&quot;&gt;
        &lt;div class=&quot;btn btn-info rounded-circle&quot; id=&quot;prevPage&quot;&gt;
        &lt;i class=&quot;fa-solid fa-chevron-left&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;br&gt;
        &lt;p&gt;Prev&lt;/p&gt;
    &lt;/div&gt;
    
    &lt;div class=&quot;d-flex justify-content-center align-items-center&quot;&gt;
        &lt;div id=&quot;pdfViewer&quot; class=&quot;mt-3 mx-5&quot; style=&quot;width: 100%&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;d-flex flex-column align-items-center&quot;&gt;
        &lt;div class=&quot;btn btn-info rounded-circle&quot; id=&quot;nextPage&quot;&gt;
        &lt;i class=&quot;fa-solid fa-chevron-right&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;br&gt;
        &lt;p&gt;Next&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;br&gt;

&lt;div class=&quot;d-flex justify-content-around&quot;&gt;
    &lt;form action=&quot;&quot; method=&quot;POST&quot; enctype=&quot;multipart/form-data&quot;&gt;
        @csrf
            &lt;a href=&quot;&quot; class=&quot;btn btn-info&quot;&gt; &lt;i class=&quot;fa-solid fa-file-arrow-down&quot;&gt;&lt;/i&gt; Request Download PDF&lt;/a&gt;
    &lt;/form&gt;

    &lt;a href=&quot;&quot; class=&quot;btn btn-primary&quot; download=&quot;sop.pdf&quot;&gt; 
        &lt;i class=&quot;fa-solid fa-file-arrow-down&quot;&gt;&lt;/i&gt; Download
    &lt;/a&gt;
&lt;/div&gt;
                    </code>
                </pre>
        </div>
    </div>


</div>

                
<!-- PDF.js library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>
<script>
    var url = 'https://stagingapi.napinfo.co.id/apiNapEmpInfo/storage/uploads/sop/dhdvfdsufs-1727069095/dhdvfdsufs-1727069095.pdf'; // Use the proxy URL or direct URL if CORS is handled

    var pdfjsLib = window['pdfjs-dist/build/pdf'];
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.worker.min.js';

    var pdfDoc = null;
    var pageNum = 1;
    var pageRendering = false;
    var pageNumPending = null;
    var scale = 1.5;
    var canvas = document.createElement('canvas');
    var context = canvas.getContext('2d');
    var pdfViewer = document.getElementById('pdfViewer');

    function renderPage(num) {
        pageRendering = true;
        pdfDoc.getPage(num).then(function(page) {
            var viewport = page.getViewport({ scale: scale });
            canvas.height = viewport.height;
            canvas.width = viewport.width;
            pdfViewer.innerHTML = ''; // Clear previous content
            pdfViewer.appendChild(canvas);

            var renderContext = {
                canvasContext: context,
                viewport: viewport
            };
            var renderTask = page.render(renderContext);
            renderTask.promise.then(function() {
                pageRendering = false;
                if (pageNumPending !== null) {
                    renderPage(pageNumPending);
                    pageNumPending = null;
                }
                document.getElementById('pageNum').textContent = num;
            });
        });
    }

    function queueRenderPage(num) {
        if (pageRendering) {
            pageNumPending = num;
        } else {
            renderPage(num);
        }
    }

    document.getElementById('prevPage').addEventListener('click', function() {
        if (pageNum <= 1) return;
        pageNum--;
        queueRenderPage(pageNum);
    });

    document.getElementById('nextPage').addEventListener('click', function() {
        if (pageNum >= pdfDoc.numPages) return;
        pageNum++;
        queueRenderPage(pageNum);
    });

    pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
        pdfDoc = pdfDoc_;
        document.getElementById('pageCount').textContent = pdfDoc.numPages;
        renderPage(pageNum);
    });
</script>

@endsection




