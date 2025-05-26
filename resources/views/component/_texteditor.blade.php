@extends('master')

@section('content')



<style>





</style>



<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Text Editor</h1>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <h5 class="h5 text-gray-800 text-center">Summernote Text Editor</h5>
            <textarea name="" id="summernote-editor"></textarea>

            <p class="mt-3">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseSummernote" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-code"></i>
                    View Source Code
                </button>
            </p>
            <div class="container mt-4">            
                <div class="code-snippet collapse" id="collapseSummernote">
                    <div class="code-title">Alert with icon</div>
                    <button class="copy-button">Copy Code</button>
                        <pre>
                            <code class="language-html">
&lt;textarea name=&quot;&quot; id=&quot;summernote-editor&quot;&gt;&lt;/textarea&gt;

-----JavaScript Summernote : -----
document.addEventListener('DOMContentLoaded', function() {
    var summernoteEditor = document.getElementById('summernote-editor');
    if (summernoteEditor) {
        // Initialize Summernote editor
        $(summernoteEditor).summernote();
    }
});
                            </code>
                        </pre>
                </div>
            </div>
        </div>
       


        <div class="col-lg-6">
            <h5 class="h5 text-gray-800 text-center">Custom Text Editor</h5>
            <div class="card shadow mb-2">
                <div class="card-header">
                    <button onclick="execCmd('bold')"><i class="fas fa-bold"></i></button>
                    <button onclick="execCmd('italic')"><i class="fas fa-italic"></i></button>
                    <button onclick="execCmd('underline')"><i class="fas fa-underline"></i></button>
                    <button onclick="execCmd('strikeThrough')"><i class="fas fa-strikethrough"></i></button>
                    <button onclick="execCmd('justifyLeft')"><i class="fas fa-align-left"></i></button>
                    <button onclick="execCmd('justifyCenter')"><i class="fas fa-align-center"></i></button>
                    <button onclick="execCmd('justifyRight')"><i class="fas fa-align-right"></i></button>
                    <button onclick="execCmd('justifyFull')"><i class="fas fa-align-justify"></i></button>
                    <button onclick="execCmd('cut')"><i class="fas fa-cut"></i></button>
                    <button onclick="execCmd('copy')"><i class="fas fa-copy"></i></button>
                    <button onclick="execCmd('insertUnorderedList')"><i class="fas fa-list-ul"></i></button>
                    <button onclick="execCmd('insertOrderedList')"><i class="fas fa-list-ol"></i></button>
                    <button onclick="execCmd('insertImage', prompt('Enter image URL:', 'http://'))"><i class="fas fa-image"></i></button>
                    <button onclick="execCmd('createLink', prompt('Enter URL:', 'http://'))"><i class="fas fa-link"></i></button>
                    <button onclick="execCmd('unlink')"><i class="fas fa-unlink"></i></button>
                </div>
                
                <textarea id="editor" contenteditable="true" class="card-body" style="min-height: 100px;" placeholder="Start typing..."></textarea>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button class="btn btn-primary m-1" onclick="saveText()">Save</button>
                <button class="btn btn-primary m-1" onclick="loadText()">Load</button>
                <button class="btn btn-primary m-1" onclick="clearText()">Clear</button>
            </div>


            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseCustomtexteditor" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-code"></i>
                    View Source Code
                </button>
              </p>
              <div class="container mt-4">            
                    <div class="code-snippet collapse" id="collapseCustomtexteditor">
                        <div class="code-title">Alert with icon</div>
                        <button class="copy-button">Copy Code</button>
                            <pre>
                                <code class="language-html">
&lt;div class=&quot;card shadow mb-2&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;button onclick=&quot;execCmd('bold')&quot;&gt;&lt;i class=&quot;fas fa-bold&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('italic')&quot;&gt;&lt;i class=&quot;fas fa-italic&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('underline')&quot;&gt;&lt;i class=&quot;fas fa-underline&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('strikeThrough')&quot;&gt;&lt;i class=&quot;fas fa-strikethrough&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('justifyLeft')&quot;&gt;&lt;i class=&quot;fas fa-align-left&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('justifyCenter')&quot;&gt;&lt;i class=&quot;fas fa-align-center&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('justifyRight')&quot;&gt;&lt;i class=&quot;fas fa-align-right&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('justifyFull')&quot;&gt;&lt;i class=&quot;fas fa-align-justify&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('cut')&quot;&gt;&lt;i class=&quot;fas fa-cut&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('copy')&quot;&gt;&lt;i class=&quot;fas fa-copy&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('insertUnorderedList')&quot;&gt;&lt;i class=&quot;fas fa-list-ul&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('insertOrderedList')&quot;&gt;&lt;i class=&quot;fas fa-list-ol&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('insertImage', prompt('Enter image URL:', 'http://'))&quot;&gt;&lt;i class=&quot;fas fa-image&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('createLink', prompt('Enter URL:', 'http://'))&quot;&gt;&lt;i class=&quot;fas fa-link&quot;&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button onclick=&quot;execCmd('unlink')&quot;&gt;&lt;i class=&quot;fas fa-unlink&quot;&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/div&gt;
    
    &lt;div id=&quot;editor&quot; contenteditable=&quot;true&quot; class=&quot;card-body&quot; style=&quot;min-height: 100px;&quot; placeholder=&quot;Start typing...&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex justify-content-center align-items-center&quot;&gt;
    &lt;button class=&quot;btn btn-primary m-1&quot; onclick=&quot;saveText()&quot;&gt;Save&lt;/button&gt;
    &lt;button class=&quot;btn btn-primary m-1&quot; onclick=&quot;loadText()&quot;&gt;Load&lt;/button&gt;
    &lt;button class=&quot;btn btn-primary m-1&quot; onclick=&quot;clearText()&quot;&gt;Clear&lt;/button&gt;
&lt;/div&gt;


-----JavaScript :-----
function execCmd(command, value = null) {
    document.execCommand(command, false, value);
}

function saveText() {
    localStorage.setItem('editorContent', document.getElementById('editor').innerHTML);
    alert('Text saved!');
}

function loadText() {
    document.getElementById('editor').innerHTML = localStorage.getItem('editorContent');
}

function clearText() {
    document.getElementById('editor').innerHTML = '';
}


                                </code>
                            </pre>
                    </div>
              </div>



        </div>
    </div>


</div>



<script>
    function execCmd(command, value = null) {
        document.execCommand(command, false, value);
    }

    function saveText() {
        localStorage.setItem('editorContent', document.getElementById('editor').innerHTML);
        alert('Text saved!');
    }

    function loadText() {
        document.getElementById('editor').innerHTML = localStorage.getItem('editorContent');
    }

    function clearText() {
        document.getElementById('editor').innerHTML = '';
    }
</script>


@endsection




{{-- <div class="card shadow mb-4">
    <div class="card-header">
        <h6 class="m-0 text-white">Notes (max 255 character)</h6>
    </div>
    <textarea id="editor" placeholder="Start typing..." name='' ></textarea>
</div>
<div class="d-flex justify-content-center align-items-center">
    <button class="btn btn-primary m-1" onclick="saveText()">Save</button>
    <button class="btn btn-primary m-1" onclick="loadText()">Load</button>
    <button class="btn btn-primary m-1" onclick="clearText()">Clear</button>
</div> --}}


