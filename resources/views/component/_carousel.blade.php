@extends('master')

@section('content')


<div class="container-fluid">

  <div class="row">

    <div class="col-lg-6">
  
      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Carousel With Controls</h6>
        </div>

        <div class="card-body">
          <div id="carouselExampleSlideOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner w-100">
              <div class="carousel-item active w-100">
                <img class="d-block w-100" src="{{ asset('assets/img/samuel-berner-v_bHfUaN1GY-unsplash.jpg') }}" alt="First slide">
              </div>
              <div class="carousel-item w-100">
                <img class="d-block w-100" src="{{ asset('assets/img/peter-nguyen-OpiZAxueRUE-unsplash.jpg') }}" alt="Second slide">
              </div>
              <div class="carousel-item w-100">
                <img class="d-block w-100" src="{{ asset('assets/img/ken-cheung-6nANh3Y5ru4-unsplash.jpg') }}" alt="Third slide">
              </div>
            </div>
          </div>
        </div>
      </div>
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
            <div class="code-snippet collapse" id="collapseExample1">
                <div class="code-title">Carousel 1</div>
                <button class="copy-button">Copy Code</button>
                    <pre>
                        <code class="language-html">
        &lt;div class=&quot;card shadow mb-4&quot;&gt;
          &lt;div class=&quot;card-header py-3&quot;&gt;
              &lt;h6 class=&quot;m-0 font-weight-bold text-white&quot;&gt;Carousel With Controls&lt;/h6&gt;
          &lt;/div&gt;

          &lt;div class=&quot;card-body&quot;&gt;
            &lt;div id=&quot;carouselExampleSlideOnly&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
              &lt;div class=&quot;carousel-inner w-100&quot;&gt;
                &lt;div class=&quot;carousel-item active w-100&quot;&gt;
                  &lt;img class=&quot;d-block w-100&quot; src=&quot;&quot; alt=&quot;First slide&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;carousel-item w-100&quot;&gt;
                  &lt;img class=&quot;d-block w-100&quot; src=&quot;&quot; alt=&quot;Second slide&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;carousel-item w-100&quot;&gt;
                  &lt;img class=&quot;d-block w-100&quot; src=&quot;&quot; alt=&quot;Third slide&quot;&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
                        </code>
                    </pre>
            </div>
      </div>

      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Carousel With Indicators</h6>
        </div>
        <div class="card-body">

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner w-100">
              <div class="carousel-item active w-100">
              <img class="d-block w-100" src="{{ asset('assets/img/samuel-berner-v_bHfUaN1GY-unsplash.jpg') }}" alt="First slide">
              </div>
              <div class="carousel-item w-100">
              <img class="d-block w-100" src="{{ asset('assets/img/peter-nguyen-OpiZAxueRUE-unsplash.jpg') }}" alt="Second slide">
              </div>
              <div class="carousel-item w-100">
              <img class="d-block w-100" src="{{ asset('assets/img/ken-cheung-6nANh3Y5ru4-unsplash.jpg') }}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="fa-solid fa-chevron-left fa-xl" style="color : #000000;" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="fa-solid fa-chevron-right fa-xl" style="color : #000000;" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
            <div class="code-snippet collapse" id="collapseExample2">
                <div class="code-title">Carousel 3</div>
                <button class="copy-button">Copy Code</button>
                    <pre>
                        <code class="language-html">
        &lt;div class=&quot;card shadow mb-4&quot;&gt;
          &lt;div class=&quot;card-header py-3&quot;&gt;
              &lt;h6 class=&quot;m-0 font-weight-bold text-white&quot;&gt;Carousel With Indicators&lt;/h6&gt;
          &lt;/div&gt;
          &lt;div class=&quot;card-body&quot;&gt;
  
            &lt;div id=&quot;carouselExampleIndicators&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
              &lt;ol class=&quot;carousel-indicators&quot;&gt;
                &lt;li data-target=&quot;#carouselExampleIndicators&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
                &lt;li data-target=&quot;#carouselExampleIndicators&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
                &lt;li data-target=&quot;#carouselExampleIndicators&quot; data-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
              &lt;/ol&gt;
              &lt;div class=&quot;carousel-inner w-100&quot;&gt;
                &lt;div class=&quot;carousel-item active w-100&quot;&gt;
                &lt;img class=&quot;d-block w-100&quot; src=&quot;&quot; alt=&quot;First slide&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;carousel-item w-100&quot;&gt;
                &lt;img class=&quot;d-block w-100&quot; src=&quot;&quot; alt=&quot;Second slide&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;carousel-item w-100&quot;&gt;
                &lt;img class=&quot;d-block w-100&quot; src=&quot;&quot; alt=&quot;Third slide&quot;&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
              &lt;span class=&quot;fa-solid fa-chevron-left fa-xl&quot; style=&quot;color : #000000;&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
              &lt;/a&gt;
              &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
              &lt;span class=&quot;fa-solid fa-chevron-right fa-xl&quot; style=&quot;color : #000000;&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
              &lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
                        </code>
                    </pre>
            </div>
      </div>

    </div>

    <div class="col-lg-6">

      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Carousel With Controls</h6>
        </div>
        <div class="card-body">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner w-100">
                <div class="carousel-item active w-100">
                  <img class="d-block w-100" src="{{ asset('assets/img/samuel-berner-v_bHfUaN1GY-unsplash.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item w-100">
                  <img class="d-block w-100" src="{{ asset('assets/img/peter-nguyen-OpiZAxueRUE-unsplash.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item w-100">
                  <img class="d-block w-100" src="{{ asset('assets/img/ken-cheung-6nANh3Y5ru4-unsplash.jpg') }}" alt="Third slide">
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="fa-solid fa-chevron-left fa-xl" style="color : #000000;" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="fa-solid fa-chevron-right fa-xl" style="color : #000000;" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
            <div class="code-snippet collapse" id="collapseExample3">
                <div class="code-title">Carousel 2</div>
                <button class="copy-button">Copy Code</button>
                    <pre>
                        <code class="language-html">
        &lt;div class=&quot;card shadow mb-4&quot;&gt;
          &lt;div class=&quot;card-header py-3&quot;&gt;
              &lt;h6 class=&quot;m-0 font-weight-bold text-white&quot;&gt;Carousel With Controls&lt;/h6&gt;
          &lt;/div&gt;
          &lt;div class=&quot;card-body&quot;&gt;
            &lt;div id=&quot;carouselExampleControls&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
              &lt;div class=&quot;carousel-inner w-100&quot;&gt;
                  &lt;div class=&quot;carousel-item active w-100&quot;&gt;
                    &lt;img class=&quot;d-block w-100&quot; src=&quot;{{ asset('assets/img/samuel-berner-v_bHfUaN1GY-unsplash.jpg') }}&quot; alt=&quot;First slide&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;carousel-item w-100&quot;&gt;
                    &lt;img class=&quot;d-block w-100&quot; src=&quot;{{ asset('assets/img/peter-nguyen-OpiZAxueRUE-unsplash.jpg') }}&quot; alt=&quot;Second slide&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;carousel-item w-100&quot;&gt;
                    &lt;img class=&quot;d-block w-100&quot; src=&quot;{{ asset('assets/img/ken-cheung-6nANh3Y5ru4-unsplash.jpg') }}&quot; alt=&quot;Third slide&quot;&gt;
                  &lt;/div&gt;
              &lt;/div&gt;

              &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleControls&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
                &lt;span class=&quot;fa-solid fa-chevron-left fa-xl&quot; style=&quot;color : #000000;&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
              &lt;/a&gt;

              &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleControls&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
                &lt;span class=&quot;fa-solid fa-chevron-right fa-xl&quot; style=&quot;color : #000000;&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
              &lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
                        </code>
                    </pre>
            </div>
      </div>


      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Carousel Indicators With Caption</h6>
        </div>
        <div class="card-body">
          <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner w-100">
              <div class="carousel-item active w-100">
                <img class="d-block w-100" src="{{ asset('assets/img/samuel-berner-v_bHfUaN1GY-unsplash.jpg') }}" alt="First slide">
                  <div class="carousel-caption d-md-block">
                    <h5 class="h5">lorem</h5>
                    <p>Lorem Ipsum</p>
                  </div>
              </div>

              <div class="carousel-item w-100">
                <img class="d-block w-100" src="{{ asset('assets/img/peter-nguyen-OpiZAxueRUE-unsplash.jpg') }}" alt="Second slide">
                  <div class="carousel-caption d-md-block">
                    <h5 class="h5">lorem</h5>
                    <p>Lorem Ipsum</p>
                  </div>
              </div>

              <div class="carousel-item w-100">
                <img class="d-block w-100" src="{{ asset('assets/img/ken-cheung-6nANh3Y5ru4-unsplash.jpg') }}" alt="Third slide">
                  <div class="carousel-caption d-md-block">
                    <h5 class="h5">lorem</h5>
                    <p>Lorem Ipsum</p>
                  </div>
              </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
              <span class="fa-solid fa-chevron-left fa-xl" style="color : #000000;" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            
            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
              <span class="fa-solid fa-chevron-right fa-xl" style="color : #000000;" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
            <div class="code-snippet collapse" id="collapseExample4">
                <div class="code-title">Carousel 4</div>
                <button class="copy-button">Copy Code</button>
                    <pre>
                        <code class="language-html">
        &lt;div class=&quot;card shadow mb-4&quot;&gt;
          &lt;div class=&quot;card-header py-3&quot;&gt;
              &lt;h6 class=&quot;m-0 font-weight-bold text-white&quot;&gt;Carousel Indicators With Caption&lt;/h6&gt;
          &lt;/div&gt;
          &lt;div class=&quot;card-body&quot;&gt;
            &lt;div id=&quot;carouselExampleIndicators2&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
              &lt;ol class=&quot;carousel-indicators&quot;&gt;
                &lt;li data-target=&quot;#carouselExampleIndicators2&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
                &lt;li data-target=&quot;#carouselExampleIndicators2&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
                &lt;li data-target=&quot;#carouselExampleIndicators2&quot; data-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
              &lt;/ol&gt;
  
              &lt;div class=&quot;carousel-inner w-100&quot;&gt;
                &lt;div class=&quot;carousel-item active w-100&quot;&gt;
                  &lt;img class=&quot;d-block w-100&quot; src=&quot;{{ asset('assets/img/samuel-berner-v_bHfUaN1GY-unsplash.jpg') }}&quot; alt=&quot;First slide&quot;&gt;
                    &lt;div class=&quot;carousel-caption d-md-block&quot;&gt;
                      &lt;h5 class=&quot;h5&quot;&gt;lorem&lt;/h5&gt;
                      &lt;p&gt;Lorem Ipsum&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
  
                &lt;div class=&quot;carousel-item w-100&quot;&gt;
                  &lt;img class=&quot;d-block w-100&quot; src=&quot;{{ asset('assets/img/peter-nguyen-OpiZAxueRUE-unsplash.jpg') }}&quot; alt=&quot;Second slide&quot;&gt;
                    &lt;div class=&quot;carousel-caption d-md-block&quot;&gt;
                      &lt;h5 class=&quot;h5&quot;&gt;lorem&lt;/h5&gt;
                      &lt;p&gt;Lorem Ipsum&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
  
                &lt;div class=&quot;carousel-item w-100&quot;&gt;
                  &lt;img class=&quot;d-block w-100&quot; src=&quot;{{ asset('assets/img/ken-cheung-6nANh3Y5ru4-unsplash.jpg') }}&quot; alt=&quot;Third slide&quot;&gt;
                    &lt;div class=&quot;carousel-caption d-md-block&quot;&gt;
                      &lt;h5 class=&quot;h5&quot;&gt;lorem&lt;/h5&gt;
                      &lt;p&gt;Lorem Ipsum&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
  
              &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators2&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
                &lt;span class=&quot;fa-solid fa-chevron-left fa-xl&quot; style=&quot;color : #000000;&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
              &lt;/a&gt;
              
              &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators2&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
                &lt;span class=&quot;fa-solid fa-chevron-right fa-xl&quot; style=&quot;color : #000000;&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
              &lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
                        </code>
                    </pre>
            </div>
      </div>


    </div>

  </div>

</div>




@endsection