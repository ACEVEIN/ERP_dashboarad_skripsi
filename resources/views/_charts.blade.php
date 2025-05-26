@extends('master')

@section('content')


<style>
    #container {
    max-width: 400px;
    margin: 0 auto;
    }

    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 380px;
        max-width: 600px;
        margin: 0 auto;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #ebebeb;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }

</style>

    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Charts</h1>
        <p class="mb-4">Chart.js is a third party plugin that is used to generate the charts in this theme.
            The charts below have been customized - for further customization options, please visit the <a
            target="_blank" href="https://www.chartjs.org/docs/latest/">official Chart.js
            documentation</a>.
        </p>

        <!-- Content Row -->
        <div class="row">

            <div class="col-xl-8 col-lg-7">

                <!-- Area Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-white">Area Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                        <hr>
                        Styling for the area chart can be found in the
                        <code>/js/demo/chart-area-demo.js</code> file.
                    </div>
                </div>
                <p class="pt-2">
                    <button class="btn btn-hover btn-primary" type="button" data-toggle="collapse" data-target="#Areachart" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                </p>
                <div class="container mt-4">            
                    <div class="code-snippet collapse" id="Areachart">
                        <div class="code-title">Code</div>
                        <button class="copy-button">Copy Code</button>
                            <pre>
                                <code class="language-html">
&lt;!-- Area Chart --&gt;
&lt;div class=&quot;chart-area&quot;&gt;
    &lt;canvas id=&quot;myAreaChart&quot;&gt;&lt;/canvas&gt;
&lt;/div&gt;
                                </code>
                            </pre>
                    </div>
                </div>





                <!-- Bar Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-white">Bar Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="myBarChart"></canvas>
                        </div>
                        <hr>
                        Styling for the bar chart can be found in the
                        <code>/js/demo/chart-bar-demo.js</code> file.
                    </div>
                </div>
                <p class="pt-2">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Barchart" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                </p>
                <div class="container mt-4">            
                    <div class="code-snippet collapse" id="Barchart">
                        <div class="code-title">Code</div>
                        <button class="copy-button">Copy Code</button>
                            <pre>
                                <code class="language-html">
&lt;!-- Bar Chart --&gt;
&lt;div class=&quot;chart-bar&quot;&gt;
    &lt;canvas id=&quot;myBarChart&quot;&gt;&lt;/canvas&gt;
&lt;/div&gt;
                                </code>
                            </pre>
                    </div>
                </div>





                <!-- Line Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-white">Line Chart</h6>
                    </div>
                    <div class="card-body">
                        <figure class="highcharts-figure">
                            <div id="containerlinechart"></div>
                        </figure>
                        <hr>
                        Basic line chart showing trends in a dataset. This chart includes the
                        <code>series-label</code> module, which adds a label to each line for
                        enhanced readability.
                    </div>
                </div>
                <p class="pt-2">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Linechart" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                </p>
                <div class="container mt-4">            
                    <div class="code-snippet collapse" id="Linechart">
                        <div class="code-title">Code</div>
                        <button class="copy-button">Copy Code</button>
                            <pre>
                                <code class="language-html">
&lt;!-- Line Chart --&gt;
&lt;figure class=&quot;highcharts-figure&quot;&gt;
    &lt;div id=&quot;containerlinechart&quot;&gt;&lt;/div&gt;
&lt;/figure&gt;
                                </code>
                            </pre>
                    </div>
                </div>



            </div>
        
            <div class="col-xl-4 col-lg-5">

                <!-- Donut Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-white">Donut Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-pie pt-4">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <hr>
                        Styling for the donut chart can be found in the
                        <code>/js/demo/chart-pie-demo.js</code> file.
                    </div>
                </div>
                <p class="pt-2">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Donutchart" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                </p>
                <div class="container mt-4">            
                    <div class="code-snippet collapse" id="Donutchart">
                        <div class="code-title">Code</div>
                        <button class="copy-button">Copy Code</button>
                            <pre>
                                <code class="language-html">
&lt;!-- Donut Chart --&gt;
&lt;div class=&quot;chart-pie pt-4&quot;&gt;
    &lt;canvas id=&quot;myPieChart&quot;&gt;&lt;/canvas&gt;
&lt;/div&gt;
                                </code>
                            </pre>
                    </div>
                </div>    

                <!-- Pie Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-white">Pie Charts</h6>
                    </div>
                    <div class="card-body"> 
                        <figure class="highcharts-figure">
                            <div id="containerpiechart"></div>
                        </figure>
                        <hr>
                        Pie charts are very popular for showing a compact overview of a
                        composition or comparison. While they can be harder to read than
                        column charts, they remain a popular choice for small datasets.
                    </div>
                </div>
                <p class="pt-2">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Piechart" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                </p>
                <div class="container mt-4">            
                    <div class="code-snippet collapse" id="Piechart">
                        <div class="code-title">Code</div>
                        <button class="copy-button">Copy Code</button>
                            <pre>
                                <code class="language-html">
&lt;!-- Pie Chart --&gt;
&lt;figure class=&quot;highcharts-figure&quot;&gt;
    &lt;div id=&quot;containerpiechart&quot;&gt;&lt;/div&gt;
&lt;/figure&gt;
                                </code>
                            </pre>
                    </div>
                </div>  
                
                <!-- KPI Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-white">KPI Charts</h6>
                    </div>
                    <div class="card-body"> 
                        <figure class="highcharts-figure">
                            <div id="container"></div>
                        </figure>
                        <hr>
                        A chart showing multiple gauge series arcing around the center point.
                        Each gauge has a custom icon, and the tooltip is positioned statically
                        in the center.
                    </div>
                </div>
                <p class="pt-2">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Kpichart" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                </p>
                <div class="container mt-4">            
                    <div class="code-snippet collapse" id="Kpichart">
                        <div class="code-title">Code</div>
                        <button class="copy-button">Copy Code</button>
                            <pre>
                                <code class="language-html">
&lt;!-- KPI Chart --&gt;
&lt;figure class=&quot;highcharts-figure&quot;&gt;
    &lt;div id=&quot;container&quot;&gt;&lt;/div&gt;
&lt;/figure&gt;
                                </code>
                            </pre>
                    </div>
                </div>  

            </div>

        </div>

    </div>








@endsection