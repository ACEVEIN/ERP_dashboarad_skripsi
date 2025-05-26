@extends('master')

@section('content')


<style>
    .containerfont {
        text-align: center;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    #sample-text {
        margin-bottom: 20px;
        font-size: 24px;
        transition: all 0.3s ease;
    }

    .font-menu {
        margin: 20px auto;
    }

    .menu-item {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    select, input[type=range] {
        width: 100%;
        padding: 5px;
        margin-bottom: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
        cursor: pointer;
    }

    .spanfont {
        display: inline-block;
        margin-top: 5px;
        font-size: 14px;
        color: #333;
    }
</style>

<div class="page-content">
    <div class="container-fluid">
      
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Font</h1>
        </div>
        
        <div class="row">
            <div class="col-lg-3">
                    <div class="text-center">
                        <h3 class="container text-black">Scale Category</h3>
                        <br>
                        <b> <p class="h1">h1</p><br>
                            <p class="h2">h2 </p><br>
                            <p class="h3">h3 </p><br>
                            <p class="h4">h4 </p><br>
                            <p class="h5">h5 </p><br>
                            <p class="h6">h6 </p><br>
                        </b>                       
                    </div>
            </div>


            <div class="col-lg-3">
                <div class="text-center">                    
                    <h3 class="container text-black">Type Size</h3>
                    <br>
                    <b> <p class="h1">40px</p><br>
                        <p class="h2">32px</p><br>
                        <p class="h3">24px</p><br>
                        <p class="h4">20px</p><br>
                        <p class="h5">16px</p><br>
                        <p class="h6">14px</p><br>
                        </b>
                </div>
            </div>

            <div class="col-lg-3">    
                <div class="text-center">
                    <h3 class="container text-black">Type Weight</h3>
                    <br>
                    <b> <p class="h1">Bold</p><br>
                        <p class="h2">Bold</p><br>
                        <p class="h3">Bold</p><br>
                        <p class="h4">Bold</p><br>
                        <p class="h5">Bold</p><br>
                        <p class="h6">Bold</p><br>
                        </b>
                </div>
            </div>

            

            <!-- <div class="col-lg-3 pt-4"> -->
            <div class="col-lg-3">
            <div class="d-flex justify-content-center">
                <div class="containerfont">
                    <h1 id="sample-text">Sample Text</h1>
                    <div class="font-menu">
                        <div class="menu-item">
                            <label for="font-category">Font Category:</label>
                            <select id="font-category">
                                <option value="sans-serif">Sans-serif</option>
                                <option value="serif">Serif</option>
                                <option value="monospace">Monospace</option>
                                <option value="cursive">Cursive</option>
                                <option value="nunito">Nunito</option>
                            </select>
                        </div>
                        <div class="menu-item">
                            <label for="font-size">Font Size:</label>
                            <input type="range" id="font-size" min="10" max="72" value="24">
                            <span class="spanfont" id="font-size-value">24px</span>
                        </div>
                        <div class="menu-item">
                            <label for="font-weight">Font Weight:</label>
                            <input type="range" id="font-weight" min="100" max="900" step="100" value="400">
                            <span class="spanfont" id="font-weight-value">400</span>
                        </div>
                    </div>
                </div>             
            </div>
            </div>
        </div>
        
    <br><br>






    <div class="row">
        <div class="col-sm-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Heading Font Example</h6>
                </div>
                <div class="card-body">
                    <p class="h1">h1.Heading</p><br>
                    <p class="h2">h2.Heading</p><br>
                    <p class="h3">h3.Heading</p><br>
                    <p class="h4">h4.Heading</p><br>
                    <p class="h5">h5.Heading</p><br>
                    <p class="h6">h6.Heading</p><br>
                </div>
            </div>
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Heading" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-code"></i>
                    View Source Code
                </button>
              </p>
              <div class="container mt-4">            
                    <div class="code-snippet collapse" id="Heading">
                        <div class="code-title">Code</div>
                        <button class="copy-button">Copy Code</button>
                            <pre>
                                <code class="language-html">
&lt;p class=&quot;h1&quot;&gt;h1.Heading&lt;/p&gt;&lt;br&gt;
&lt;p class=&quot;h2&quot;&gt;h2.Heading&lt;/p&gt;&lt;br&gt;
&lt;p class=&quot;h3&quot;&gt;h3.Heading&lt;/p&gt;&lt;br&gt;
&lt;p class=&quot;h4&quot;&gt;h4.Heading&lt;/p&gt;&lt;br&gt;
&lt;p class=&quot;h5&quot;&gt;h5.Heading&lt;/p&gt;&lt;br&gt;
&lt;p class=&quot;h6&quot;&gt;h6.Heading&lt;/p&gt;&lt;br&gt;
                                </code>
                            </pre>
                    </div>
              </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Normal Text</h6>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo at excepturi ad, maiores repellendus rerum distinctio aliquam veniam necessitatibus corrupti cum quod, voluptas illum porro obcaecati fugiat, explicabo tenetur ut!</p>
                </div>
            </div>
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#NormalText" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-code"></i>
                    View Source Code
                </button>
              </p>
              <div class="container mt-4">            
                    <div class="code-snippet collapse" id="NormalText">
                        <div class="code-title">Code</div>
                        <button class="copy-button">Copy Code</button>
                            <pre>
                                <code class="language-html">
&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo at excepturi ad, 
maiores repellendus rerum distinctio aliquam veniam necessitatibus corrupti cum quod, 
voluptas illum porro obcaecati fugiat, explicabo tenetur ut!&lt;/p&gt;
                                </code>
                            </pre>
                    </div>
              </div>

            
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Naming a source</h6>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>    
                </div>
            </div>
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#SourceText" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-code"></i>
                    View Source Code
                </button>
            </p>
            <div class="container mt-4">            
                <div class="code-snippet collapse" id="SourceText">
                    <div class="code-title">Code</div>
                    <button class="copy-button">Copy Code</button>
                        <pre>
                            <code class="language-html">
&lt;blockquote class=&quot;blockquote&quot;&gt;
&lt;p class=&quot;mb-0&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
&lt;footer class=&quot;blockquote-footer&quot;&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
&lt;/blockquote&gt;   
                            </code>
                        </pre>
                </div>
            </div>


        </div>

           





     




        <div class="col-sm-6">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Description list alignment</h6>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-3">Description lists</dt>
                        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                        <dt class="col-sm-3">Euismod</dt>
                        <dd class="col-sm-9">
                            <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                            <p>Donec id elit non mi porta gravida at eget metus.</p>
                        </dd>

                        <dt class="col-sm-3">Malesuada porta</dt>
                        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                        <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                        <dt class="col-sm-3">Nesting</dt>
                        <dd class="col-sm-9">
                            <dl class="row">
                            <dt class="col-sm-4">Nested definition list</dt>
                            <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                            </dl>
                        </dd>
                    </dl>
                </div>
            </div>


            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Descriptionalignment" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-code"></i>
                    View Source Code
                </button>
            </p>
            <div class="container mt-4">            
                <div class="code-snippet collapse" id="Descriptionalignment">
                    <div class="code-title">Code</div>
                    <button class="copy-button">Copy Code</button>
                        <pre>
                            <code class="language-html">
&lt;dl class=&quot;row&quot;&gt;
    &lt;dt class=&quot;col-sm-3&quot;&gt;Description lists&lt;/dt&gt;
    &lt;dd class=&quot;col-sm-9&quot;&gt;A description list is perfect for defining terms.&lt;/dd&gt;

    &lt;dt class=&quot;col-sm-3&quot;&gt;Euismod&lt;/dt&gt;
    &lt;dd class=&quot;col-sm-9&quot;&gt;
        &lt;p&gt;Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.&lt;/p&gt;
        &lt;p&gt;Donec id elit non mi porta gravida at eget metus.&lt;/p&gt;
    &lt;/dd&gt;

    &lt;dt class=&quot;col-sm-3&quot;&gt;Malesuada porta&lt;/dt&gt;
    &lt;dd class=&quot;col-sm-9&quot;&gt;Etiam porta sem malesuada magna mollis euismod.&lt;/dd&gt;

    &lt;dt class=&quot;col-sm-3 text-truncate&quot;&gt;Truncated term is truncated&lt;/dt&gt;
    &lt;dd class=&quot;col-sm-9&quot;&gt;Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.&lt;/dd&gt;

    &lt;dt class=&quot;col-sm-3&quot;&gt;Nesting&lt;/dt&gt;
    &lt;dd class=&quot;col-sm-9&quot;&gt;
        &lt;dl class=&quot;row&quot;&gt;
        &lt;dt class=&quot;col-sm-4&quot;&gt;Nested definition list&lt;/dt&gt;
        &lt;dd class=&quot;col-sm-8&quot;&gt;Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.&lt;/dd&gt;
        &lt;/dl&gt;
    &lt;/dd&gt;
&lt;/dl&gt;
                            </code>
                        </pre>
                </div>
            </div>




                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-white">Allignment Text</h6>
                    </div>
                    <div class="card-body">
                        <div class="h2 text-center text-black">Allignment Center</div>

                        <blockquote class="blockquote text-center">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                        <br>
                        <div class="h2 text-center text-black">Allignment Right</div>
                        <blockquote class="blockquote text-right">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>

                <p>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#AllignmentText" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                </p>
                <div class="container mt-4">            
                    <div class="code-snippet collapse" id="AllignmentText">
                        <div class="code-title">Code</div>
                        <button class="copy-button">Copy Code</button>
                            <pre>
                                <code class="language-html">
&lt;div class=&quot;h2 text-center text-black&quot;&gt;Allignment Center&lt;/div&gt;

&lt;blockquote class=&quot;blockquote text-center&quot;&gt;
    &lt;p class=&quot;mb-0&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
    &lt;footer class=&quot;blockquote-footer&quot;&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
&lt;/blockquote&gt;

&lt;br&gt;

&lt;div class=&quot;h2 text-center text-black&quot;&gt;Allignment Right&lt;/div&gt;
&lt;blockquote class=&quot;blockquote text-right&quot;&gt;
    &lt;p class=&quot;mb-0&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
    &lt;footer class=&quot;blockquote-footer&quot;&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
&lt;/blockquote&gt;
                                </code>
                            </pre>
                    </div>
                </div>

            

        </div>

    </div>


   <br><br>
        

    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const sampleText = document.getElementById('sample-text');
    const fontCategory = document.getElementById('font-category');
    const fontSize = document.getElementById('font-size');
    const fontSizeValue = document.getElementById('font-size-value');
    const fontWeight = document.getElementById('font-weight');
    const fontWeightValue = document.getElementById('font-weight-value');

    fontCategory.addEventListener('change', function() {
        const selectedCategory = fontCategory.value;
        let fontFamily;
        switch (selectedCategory) {
            case 'sans-serif':
                fontFamily = 'Arial, sans-serif';
                break;
            case 'serif':
                fontFamily = 'Georgia, serif';
                break;
            case 'monospace':
                fontFamily = 'Courier New, monospace';
                break;
            case 'cursive':
                fontFamily = 'Comic Sans MS, cursive';
                break;
            case 'nunito':
                fontFamily = 'nunito';
            break;
        }
        sampleText.style.fontFamily = fontFamily;
    });

    fontSize.addEventListener('input', function() {
        const size = fontSize.value;
        sampleText.style.fontSize = `${size}px`;
        fontSizeValue.textContent = `${size}px`;
    });

    fontWeight.addEventListener('input', function() {
        const weight = fontWeight.value;
        sampleText.style.fontWeight = weight;
        fontWeightValue.textContent = weight;
    });
});
</script>

@endsection




