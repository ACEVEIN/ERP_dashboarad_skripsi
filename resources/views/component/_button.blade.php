@extends('master')

@section('content')

<style>
    
.downloadbutton{
  position: absolute;
  /* top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); */
  height: 95px;
  width: 360px;
  background: #7D2AE8;
  border-radius: 55px;
  cursor: pointer;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  overflow: hidden;
}


.downloadbutton.active{
  height: 20px;
  width: 500px;
}
.downloadbutton::before{
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  height: 100%;
  width: 100%;
  background: #5b13b9;
  border-radius: 55px;
  transition: all 6s ease-in-out;
}
.downloadbutton.active::before{
  animation: layer 6s ease-in-out forwards;
}
@keyframes layer {
  100%{
    left: 0%;
  }
}
.downloadbutton .contentbutton{
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.2s ease;
  transition-delay: 0.2s;
}
.downloadbutton.active .contentbutton{
  transform: translateY(60px);
}
.downloadbutton .contentbutton i,
.downloadbutton .contentbutton .downloadbutton-text{
  color: #fff;
  font-size: 40px;
  font-weight: 500;
}
.downloadbutton .contentbutton .downloadbutton-text{
  font-size: 28px;
  margin-left: 8px;
}
</style>




<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Buttons</h1>
  </div>

  <div class="row">
    <div class="col-lg-6">

      <div class="card mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-white">Basic Button Example</h6>
          </div>
          <div class="card-body">
            Use Font Awesome Icons (included with this theme package) along with the circle buttons as shown in the examples below!
              
            <br><br>
              
            <b>Primary Button</b>
            <br>
          
              <button type="button" class="btn btn-primary">Primary</button>       
              <button type="button" class="btn btn-secondary">Secondary</button>       
              <button type="button" class="btn btn-success">Success</button>       
              <button type="button" class="btn btn-danger">Danger</button>         
              <button type="button" class="btn btn-warning">Warning</button>       
              <button type="button" class="btn btn-info">Info</button>
                        
            <br><br>

            <b>Outline Button</b>
            <br>
      
              <button type="button" class="btn btn-outline-primary">Primary</button>        
              <button type="button" class="btn btn-outline-secondary">Secondary</button>    
              <button type="button" class="btn btn-outline-success">Success</button>        
              <button type="button" class="btn btn-outline-danger">Danger</button>        
              <button type="button" class="btn btn-outline-warning">Warning</button>        
              <button type="button" class="btn btn-outline-info">Info</button>
               
          </div>
      </div>
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#basicButton" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
          <div class="code-snippet collapse" id="basicButton">
              <div class="code-title">Code</div>
              <button class="copy-button">Copy Code</button>
                  <pre>
                      <code class="language-html">
Primary Button
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;       
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Secondary&lt;/button&gt;       
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;       
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;         
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;       
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
          

Outline Button
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Primary&lt;/button&gt;        
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;    
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;Success&lt;/button&gt;        
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;Danger&lt;/button&gt;        
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;Warning&lt;/button&gt;        
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;Info&lt;/button&gt;
                      </code>
                  </pre>
          </div>
      </div>



        
      <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Button Icon</h6>
        </div>
        <div class="card-body">
            The styling for this basic card example is created by using default Bootstrap
            utility classes. By using utility classes, the style of the card component can be
            easily modified with no need for any custom CSS!

            <br><br>

            <a href="#" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i></a>

            <button class="btn btn-sm btn-primary shadow-sm" onclick="handleClick()">
                <span class="icon">🔍</span>
            </button>

            {{-- <button class="btn btn-sm btn-primary shadow-sm" onclick="handleClick()">
              <span class="icon">🔍</span>
              <span class="text">Search</span>
          </button> --}}
        </div>
      </div>
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#buttonIcon" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
            <div class="code-snippet collapse" id="buttonIcon">
                <div class="code-title">Code</div>
                <button class="copy-button">Copy Code</button>
                    <pre>
                        <code class="language-html">
&lt;div class=&quot;card mb-4&quot;&gt;
  &lt;div class=&quot;card-header py-3&quot;&gt;
      &lt;h6 class=&quot;m-0 font-weight-bold text-white&quot;&gt;Button Icon&lt;/h6&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
      The styling for this basic card example is created by using default Bootstrap
      utility classes. By using utility classes, the style of the card component can be
      easily modified with no need for any custom CSS!

      &lt;br&gt;&lt;br&gt;

      &lt;a href=&quot;#&quot; class=&quot;d-sm-inline-block btn btn-sm btn-primary shadow-sm&quot;&gt;
      &lt;i class=&quot;fas fa-download fa-sm text-white-50&quot;&gt;&lt;/i&gt;&lt;/a&gt;

      &lt;button class=&quot;btn btn-sm btn-primary shadow-sm&quot; onclick=&quot;handleClick()&quot;&gt;
          &lt;span class=&quot;icon&quot;&gt;🔍&lt;/span&gt;
      &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
                        </code>
                    </pre>
            </div>
      </div>

      

    </div>

    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-white">Button Text & Icon</h6>
            </div>
            <div class="card-body">
              <!-- Use Font Awesome Icons (included with this theme package) along with the circle buttons as shown in the examples below! -->
              A "button icon & text" is a user interface (UI) element that combines both an icon and text within a single button. 
              This design approach is used to enhance the button's functionality and user experience by providing visual cues and 
              descriptive text. The icon quickly conveys the purpose of the button through a visual symbol, while the text provides 
              additional context or clarification. This combination makes the button more intuitive and accessible, helping users understand its function at a glance.

              <br><br>
              Button Generate Report
              <br>
              <a href="#" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
              </a>
    
              <br><br>
              Primary Microsoft Button
              <a href="" class="btn btn-microsoft btn-user btn-block">
                  <i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 256 256"><path fill="#f1511b" d="M121.666 121.666H0V0h121.666z"/><path fill="#80cc28" d="M256 121.666H134.335V0H256z"/>
                  <path fill="#00adef" d="M121.663 256.002H0V134.336h121.663z"/>
                  <path fill="#fbbc09" d="M256 256.002H134.335V134.336H256z"/>
                  </svg>
                  </i> 
                  Register with microsoft
              </a>

              <br>
              Secondary Microsoft Button

              <a href="" class="btn btn-outline-microsoft btn-user btn-block">
                  <i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 256 256"><path fill="#f1511b" d="M121.666 121.666H0V0h121.666z"/><path fill="#80cc28" d="M256 121.666H134.335V0H256z"/>
                  <path fill="#00adef" d="M121.663 256.002H0V134.336h121.663z"/>
                  <path fill="#fbbc09" d="M256 256.002H134.335V134.336H256z"/>
                  </svg>
                  </i> 
                  Register with microsoft
              </a>

              <br>
              {{-- <!-- Button With Animation
              <a href="" class="btn downloadbutton">
              <i class="bx bx-cloud-download"></i>Download Button</a> -->
              <!-- <div class="downloadbutton">
                  <div class="contentbutton">
                      <i class="bx bx-cloud-download"></i>
                      <span class="downloadbutton-text">Download</span>
                  </div>
              </div> --> --}}
            </div>
        </div>



        <p>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#buttontextIcon" aria-expanded="false" aria-controls="collapseExample">
              <i class="fa-solid fa-code"></i>
              View Source Code
          </button>
        </p>
        <div class="container mt-4">            
              <div class="code-snippet collapse" id="buttontextIcon">
                  <div class="code-title">Code</div>
                  <button class="copy-button">Copy Code</button>
                      <pre>
                          <code class="language-html">
Button Generate Report
&lt;a href=&quot;#&quot; class=&quot;d-sm-inline-block btn btn-sm btn-primary shadow-sm&quot;&gt;
  &lt;i class=&quot;fas fa-download fa-sm text-white-50&quot;&gt;&lt;/i&gt; Generate Report
&lt;/a&gt;

Primary Microsoft Button
&lt;a href=&quot;&quot; class=&quot;btn btn-microsoft btn-user btn-block&quot;&gt;
    &lt;i&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;15px&quot; height=&quot;15px&quot; viewBox=&quot;0 0 256 256&quot;&gt;&lt;path fill=&quot;#f1511b&quot; d=&quot;M121.666 121.666H0V0h121.666z&quot;/&gt;&lt;path fill=&quot;#80cc28&quot; d=&quot;M256 121.666H134.335V0H256z&quot;/&gt;
    &lt;path fill=&quot;#00adef&quot; d=&quot;M121.663 256.002H0V134.336h121.663z&quot;/&gt;
    &lt;path fill=&quot;#fbbc09&quot; d=&quot;M256 256.002H134.335V134.336H256z&quot;/&gt;
    &lt;/svg&gt;
    &lt;/i&gt; 
    Register with microsoft
&lt;/a&gt;

Secondary Microsoft Button
&lt;a href=&quot;&quot; class=&quot;btn btn-outline-microsoft btn-user btn-block&quot;&gt;
    &lt;i&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;15px&quot; height=&quot;15px&quot; viewBox=&quot;0 0 256 256&quot;&gt;&lt;path fill=&quot;#f1511b&quot; d=&quot;M121.666 121.666H0V0h121.666z&quot;/&gt;&lt;path fill=&quot;#80cc28&quot; d=&quot;M256 121.666H134.335V0H256z&quot;/&gt;
    &lt;path fill=&quot;#00adef&quot; d=&quot;M121.663 256.002H0V134.336h121.663z&quot;/&gt;
    &lt;path fill=&quot;#fbbc09&quot; d=&quot;M256 256.002H134.335V134.336H256z&quot;/&gt;
    &lt;/svg&gt;
    &lt;/i&gt; 
    Register with microsoft
&lt;/a&gt;
                          </code>
                      </pre>
              </div>
        </div>
    </div>













    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-white">Standart Button</h6>
            </div>
            <div class="card-body">
                <div class="row g-2 align-items-center">
                    <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-primary w-100">
                        Primary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-secondary w-100">
                        Secondary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-success w-100">
                        Success
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-warning w-100">
                        Warning
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-danger w-100">
                        Danger
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-info w-100">
                        Info
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-dark w-100">
                        Dark
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                    <a href="#" class="btn btn-light w-100">
                        Light
                    </a>
                    </div>
                </div>

                <div class="row g-2 align-items-center">
                    <div class="col-12 col-xl-2 font-weight-semibold">Active state</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-primary active w-100">
                        Primary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-secondary active w-100">
                        Secondary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-success active w-100">
                        Success
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-warning active w-100">
                        Warning
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-danger active w-100">
                        Danger
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-info active w-100">
                        Info
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-dark active w-100">
                        Dark
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                    <a href="#" class="btn btn-light active w-100">
                        Light
                    </a>
                    </div>
                </div>

                <div class="row g-2 align-items-center">
                    <div class="col-12 col-xl-2 font-weight-semibold">Disabled</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-primary disabled w-100">
                        Primary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-secondary disabled w-100">
                        Secondary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-success disabled w-100">
                        Success
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-warning disabled w-100">
                        Warning
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-danger disabled w-100">
                        Danger
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-info disabled w-100">
                        Info
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-dark disabled w-100">
                        Dark
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                    <a href="#" class="btn btn-light disabled w-100">
                        Light
                    </a>
                    </div>
                </div>
            </div>
        </div>

        <p>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#standartButton" aria-expanded="false" aria-controls="collapseExample">
              <i class="fa-solid fa-code"></i>
              View Source Code
          </button>
        </p>
        <div class="container mt-4">            
              <div class="code-snippet collapse" id="standartButton">
                  <div class="code-title">Code</div>
                  <button class="copy-button">Copy Code</button>
                      <pre>
                          <code class="language-html">
&lt;div class=&quot;row g-2 align-items-center&quot;&gt;
  &lt;div class=&quot;col-12 col-xl-2 font-weight-semibold&quot;&gt;Normal&lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;btn btn-primary w-100&quot;&gt;
      Primary
  &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;btn btn-secondary w-100&quot;&gt;
      Secondary
  &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;btn btn-success w-100&quot;&gt;
      Success
  &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;btn btn-warning w-100&quot;&gt;
      Warning
  &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;btn btn-danger w-100&quot;&gt;
      Danger
  &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;btn btn-info w-100&quot;&gt;
      Info
  &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;btn btn-dark w-100&quot;&gt;
      Dark
  &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl bg-dark py-3&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;btn btn-light w-100&quot;&gt;
      Light
  &lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row g-2 align-items-center&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-2 font-weight-semibold&quot;&gt;Active state&lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary active w-100&quot;&gt;
        Primary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-secondary active w-100&quot;&gt;
        Secondary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-success active w-100&quot;&gt;
        Success
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-warning active w-100&quot;&gt;
        Warning
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-danger active w-100&quot;&gt;
        Danger
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-info active w-100&quot;&gt;
        Info
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-dark active w-100&quot;&gt;
        Dark
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl bg-dark py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-light active w-100&quot;&gt;
        Light
    &lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row g-2 align-items-center&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-2 font-weight-semibold&quot;&gt;Disabled&lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary disabled w-100&quot;&gt;
        Primary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-secondary disabled w-100&quot;&gt;
        Secondary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-success disabled w-100&quot;&gt;
        Success
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-warning disabled w-100&quot;&gt;
        Warning
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-danger disabled w-100&quot;&gt;
        Danger
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-info disabled w-100&quot;&gt;
        Info
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-dark disabled w-100&quot;&gt;
        Dark
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl bg-dark py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-light disabled w-100&quot;&gt;
        Light
    &lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
                          </code>
                      </pre>
              </div>
        </div>
    </div>    

    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-white">Outline Buttons</h6>
            </div>
            <div class="card-body">
                <p>Use <code>.btn-outline-*</code> class for outline buttons.</p>
                
                <div class="row g-2 align-items-center">
                    <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-primary w-100">
                        Primary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-secondary w-100">
                        Secondary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-success w-100">
                        Success
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-warning w-100">
                        Warning
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-danger w-100">
                        Danger
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-info w-100">
                        Info
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-dark w-100">
                        Dark
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                    <a href="#" class="btn btn-outline-light w-100">
                        Light
                    </a>
                    </div>
                </div>

                <div class="row g-2 align-items-center">
                    <div class="col-12 col-xl-2 font-weight-semibold">Active state</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-primary active w-100">
                        Primary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-secondary active w-100">
                        Secondary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-success active w-100">
                        Success
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-warning active w-100">
                        Warning
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-danger active w-100">
                        Danger
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-info active w-100">
                        Info
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-dark active w-100">
                        Dark
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                    <a href="#" class="btn btn-outline-light active w-100">
                        Light
                    </a>
                    </div>
                </div>

                <div class="row g-2 align-items-center">
                    <div class="col-12 col-xl-2 font-weight-semibold">Disabled</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-primary disabled w-100">
                        Primary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-secondary disabled w-100">
                        Secondary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-success disabled w-100">
                        Success
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-warning disabled w-100">
                        Warning
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-danger disabled w-100">
                        Danger
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-info disabled w-100">
                        Info
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-outline-dark disabled w-100">
                        Dark
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                    <a href="#" class="btn btn-outline-light disabled w-100">
                        Light
                    </a>
                    </div>
                </div>

            </div>
        </div>

        <p>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#OutlineButtons" aria-expanded="false" aria-controls="collapseExample">
              <i class="fa-solid fa-code"></i>
              View Source Code
          </button>
        </p>
        <div class="container mt-4">            
              <div class="code-snippet collapse" id="OutlineButtons">
                  <div class="code-title">Code</div>
                  <button class="copy-button">Copy Code</button>
                      <pre>
                          <code class="language-html">
&lt;div class=&quot;row g-2 align-items-center&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-2 font-weight-semibold&quot;&gt;Normal&lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-primary w-100&quot;&gt;
        Primary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-secondary w-100&quot;&gt;
        Secondary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-success w-100&quot;&gt;
        Success
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-warning w-100&quot;&gt;
        Warning
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-danger w-100&quot;&gt;
        Danger
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-info w-100&quot;&gt;
        Info
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-dark w-100&quot;&gt;
        Dark
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl bg-dark py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-light w-100&quot;&gt;
        Light
    &lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row g-2 align-items-center&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-2 font-weight-semibold&quot;&gt;Active state&lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-primary active w-100&quot;&gt;
        Primary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-secondary active w-100&quot;&gt;
        Secondary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-success active w-100&quot;&gt;
        Success
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-warning active w-100&quot;&gt;
        Warning
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-danger active w-100&quot;&gt;
        Danger
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-info active w-100&quot;&gt;
        Info
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-dark active w-100&quot;&gt;
        Dark
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl bg-dark py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-light active w-100&quot;&gt;
        Light
    &lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row g-2 align-items-center&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-2 font-weight-semibold&quot;&gt;Disabled&lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-primary disabled w-100&quot;&gt;
        Primary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-secondary disabled w-100&quot;&gt;
        Secondary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-success disabled w-100&quot;&gt;
        Success
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-warning disabled w-100&quot;&gt;
        Warning
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-danger disabled w-100&quot;&gt;
        Danger
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-info disabled w-100&quot;&gt;
        Info
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-dark disabled w-100&quot;&gt;
        Dark
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl bg-dark py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-light disabled w-100&quot;&gt;
        Light
    &lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
                          </code>
                      </pre>
              </div>
        </div>
    </div>







    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-white">Ghost Buttons</h6>
            </div>
            <div class="card-body">
                <p>Use <code>.btn-ghost-*</code> class for ghost buttons.</p>

                <div class="row g-2 align-items-center">
                    <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-primary w-100">
                        Primary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-secondary w-100">
                        Secondary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-success w-100">
                        Success
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-warning w-100">
                        Warning
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-danger w-100">
                        Danger
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-info w-100">
                        Info
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-dark w-100">
                        Dark
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                    <a href="#" class="btn btn-ghost-light w-100">
                        Light
                    </a>
                    </div>
                </div>

                <div class="row g-2 align-items-center">
                    <div class="col-12 col-xl-2 font-weight-semibold">Active state</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-primary active w-100">
                        Primary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-secondary active w-100">
                        Secondary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-success active w-100">
                        Success
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-warning active w-100">
                        Warning
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-danger active w-100">
                        Danger
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-info active w-100">
                        Info
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-dark active w-100">
                        Dark
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                    <a href="#" class="btn btn-ghost-light active w-100">
                        Light
                    </a>
                    </div>
                </div>

                <div class="row g-2 align-items-center">
                    <div class="col-12 col-xl-2 font-weight-semibold">Disabled</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-primary disabled w-100">
                        Primary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-secondary disabled w-100">
                        Secondary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-success disabled w-100">
                        Success
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-warning disabled w-100">
                        Warning
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-danger disabled w-100">
                        Danger
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-info disabled w-100">
                        Info
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-ghost-dark disabled w-100">
                        Dark
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                    <a href="#" class="btn btn-ghost-light disabled w-100">
                        Light
                    </a>
                    </div>
                </div>

            </div>
        </div>

        <p>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#GhostButtons" aria-expanded="false" aria-controls="collapseExample">
              <i class="fa-solid fa-code"></i>
              View Source Code
          </button>
        </p>
        <div class="container mt-4">            
              <div class="code-snippet collapse" id="GhostButtons">
                  <div class="code-title">Code</div>
                  <button class="copy-button">Copy Code</button>
                      <pre>
                          <code class="language-html">
&lt;div class=&quot;row g-2 align-items-center&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-2 font-weight-semibold&quot;&gt;Normal&lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-primary w-100&quot;&gt;
        Primary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-secondary w-100&quot;&gt;
        Secondary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-success w-100&quot;&gt;
        Success
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-warning w-100&quot;&gt;
        Warning
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-danger w-100&quot;&gt;
        Danger
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-info w-100&quot;&gt;
        Info
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-dark w-100&quot;&gt;
        Dark
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl bg-dark py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-light w-100&quot;&gt;
        Light
    &lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row g-2 align-items-center&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-2 font-weight-semibold&quot;&gt;Active state&lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-primary active w-100&quot;&gt;
        Primary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-secondary active w-100&quot;&gt;
        Secondary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-success active w-100&quot;&gt;
        Success
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-warning active w-100&quot;&gt;
        Warning
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-danger active w-100&quot;&gt;
        Danger
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-info active w-100&quot;&gt;
        Info
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-dark active w-100&quot;&gt;
        Dark
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl bg-dark py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-light active w-100&quot;&gt;
        Light
    &lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row g-2 align-items-center&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-2 font-weight-semibold&quot;&gt;Disabled&lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-primary disabled w-100&quot;&gt;
        Primary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-secondary disabled w-100&quot;&gt;
        Secondary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-success disabled w-100&quot;&gt;
        Success
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-warning disabled w-100&quot;&gt;
        Warning
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-danger disabled w-100&quot;&gt;
        Danger
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-info disabled w-100&quot;&gt;
        Info
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-dark disabled w-100&quot;&gt;
        Dark
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl bg-dark py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-ghost-light disabled w-100&quot;&gt;
        Light
    &lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
                          </code>
                      </pre>
              </div>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-white">Square Buttons</h6>
            </div>
            <div class="card-body">
                <p>Use <code>.btn-square</code> class for square buttons.</p>
                <div class="row g-2 align-items-center">
                    <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-primary btn-square w-100">
                        Primary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-secondary btn-square w-100">
                        Secondary
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-success btn-square w-100">
                        Success
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-warning btn-square w-100">
                        Warning
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-danger btn-square w-100">
                        Danger
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-info btn-square w-100">
                        Info
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="#" class="btn btn-dark btn-square w-100">
                        Dark
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                    <a href="#" class="btn btn-light btn-square w-100">
                        Light
                    </a>
                    </div>
                </div>              
            </div>
        </div>


        <p>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#SquareButtons" aria-expanded="false" aria-controls="collapseExample">
              <i class="fa-solid fa-code"></i>
              View Source Code
          </button>
        </p>
        <div class="container mt-4">            
              <div class="code-snippet collapse" id="SquareButtons">
                  <div class="code-title">Code</div>
                  <button class="copy-button">Copy Code</button>
                      <pre>
                          <code class="language-html">
&lt;div class=&quot;row g-2 align-items-center&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-2 font-weight-semibold&quot;&gt;Normal&lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-square w-100&quot;&gt;
        Primary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-secondary btn-square w-100&quot;&gt;
        Secondary
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-success btn-square w-100&quot;&gt;
        Success
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-warning btn-square w-100&quot;&gt;
        Warning
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-danger btn-square w-100&quot;&gt;
        Danger
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-info btn-square w-100&quot;&gt;
        Info
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-dark btn-square w-100&quot;&gt;
        Dark
    &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl bg-dark py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-light btn-square w-100&quot;&gt;
        Light
    &lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt; 
                          </code>
                      </pre>
              </div>
        </div>



    </div>

    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-white">Pill Buttons</h6>
        </div>
        <div class="card-body">
          <p>Use <code>.btn-pill</code> class for pill buttons.</p>
          <div class="row g-2 align-items-center">
            <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
              <a href="#" class="btn btn-primary btn-pill w-100">
                Primary
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
              <a href="#" class="btn btn-secondary btn-pill w-100">
                Secondary
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
              <a href="#" class="btn btn-success btn-pill w-100">
                Success
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
              <a href="#" class="btn btn-warning btn-pill w-100">
                Warning
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
              <a href="#" class="btn btn-danger btn-pill w-100">
                Danger
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
              <a href="#" class="btn btn-info btn-pill w-100">
                Info
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
              <a href="#" class="btn btn-dark btn-pill w-100">
                Dark
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
              <a href="#" class="btn btn-light btn-pill w-100">
                Light
              </a>
            </div>
          </div>
        </div>
      </div>

      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#PillButtons" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
            <div class="code-snippet collapse" id="PillButtons">
                <div class="code-title">Code</div>
                <button class="copy-button">Copy Code</button>
                    <pre>
                        <code class="language-html">
&lt;div class=&quot;row g-2 align-items-center&quot;&gt;
  &lt;div class=&quot;col-12 col-xl-2 font-weight-semibold&quot;&gt;Normal&lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-pill w-100&quot;&gt;
      Primary
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-secondary btn-pill w-100&quot;&gt;
      Secondary
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-success btn-pill w-100&quot;&gt;
      Success
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-warning btn-pill w-100&quot;&gt;
      Warning
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-danger btn-pill w-100&quot;&gt;
      Danger
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-info btn-pill w-100&quot;&gt;
      Info
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-dark btn-pill w-100&quot;&gt;
      Dark
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl bg-dark py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-light btn-pill w-100&quot;&gt;
      Light
    &lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
                        </code>
                    </pre>
            </div>
      </div>
    </div>

    <!-- <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-white">Extra colors</h6>
        </div>
        <div class="card-body">
          <div class="row g-2 align-items-center">
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-blue w-100">
                Blue
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-azure w-100">
                Azure
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-indigo w-100">
                Indigo
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-purple w-100">
                Purple
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-pink w-100">
                Pink
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-red w-100">
                Red
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-orange w-100">
                Orange
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-yellow w-100">
                Yellow
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-lime w-100">
                Lime
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-green w-100">
                Green
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-teal w-100">
                Teal
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-cyan w-100">
                Cyan
              </a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-white">Icon buttons</h6>
        </div>
        <div class="card-body">
          <div class="row g-2 align-items-center">
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-facebook w-100 btn-icon" aria-label="Facebook">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
              </a>
            </div>
     
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-google w-100 btn-icon" aria-label="Google">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-google -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8" /></svg>
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-youtube w-100 btn-icon" aria-label="Youtube">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" /><path d="M10 9l5 3l-5 3z" /></svg>
              </a>
            </div>
          
          
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-github w-100 btn-icon" aria-label="Github">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-bitbucket w-100 btn-icon" aria-label="Bitbucket">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-bitbucket -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3.648 4a.64 .64 0 0 0 -.64 .744l3.14 14.528c.07 .417 .43 .724 .852 .728h10a.644 .644 0 0 0 .642 -.539l3.35 -14.71a.641 .641 0 0 0 -.64 -.744l-16.704 -.007z" /><path d="M14 15h-4l-1 -6h6z" /></svg>
              </a>
            </div>
      
          </div>
        </div>
      </div>



      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ButtonIcon" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
            <div class="code-snippet collapse" id="ButtonIcon">
                <div class="code-title">Code</div>
                <button class="copy-button">Copy Code</button>
                    <pre>
                        <code class="language-html">
&lt;div class=&quot;row g-2 align-items-center&quot;&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl-auto py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-facebook w-100 btn-icon&quot; aria-label=&quot;Facebook&quot;&gt;
      &lt;!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook --&gt;
      &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3&quot; /&gt;&lt;/svg&gt;
    &lt;/a&gt;
  &lt;/div&gt;

  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl-auto py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-google w-100 btn-icon&quot; aria-label=&quot;Google&quot;&gt;
      &lt;!-- Download SVG icon from http://tabler-icons.io/i/brand-google --&gt;
      &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M17.788 5.108a9 9 0 1 0 3.212 6.892h-8&quot; /&gt;&lt;/svg&gt;
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl-auto py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-youtube w-100 btn-icon&quot; aria-label=&quot;Youtube&quot;&gt;
      &lt;!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube --&gt;
      &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z&quot; /&gt;&lt;path d=&quot;M10 9l5 3l-5 3z&quot; /&gt;&lt;/svg&gt;
    &lt;/a&gt;
  &lt;/div&gt;


  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl-auto py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-github w-100 btn-icon&quot; aria-label=&quot;Github&quot;&gt;
      &lt;!-- Download SVG icon from http://tabler-icons.io/i/brand-github --&gt;
      &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5&quot; /&gt;&lt;/svg&gt;
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl-auto py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-bitbucket w-100 btn-icon&quot; aria-label=&quot;Bitbucket&quot;&gt;
      &lt;!-- Download SVG icon from http://tabler-icons.io/i/brand-bitbucket --&gt;
      &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M3.648 4a.64 .64 0 0 0 -.64 .744l3.14 14.528c.07 .417 .43 .724 .852 .728h10a.644 .644 0 0 0 .642 -.539l3.35 -14.71a.641 .641 0 0 0 -.64 -.744l-16.704 -.007z&quot; /&gt;&lt;path d=&quot;M14 15h-4l-1 -6h6z&quot; /&gt;&lt;/svg&gt;
    &lt;/a&gt;
  &lt;/div&gt;

&lt;/div&gt;
                        </code>
                    </pre>
            </div>
      </div>
    </div>







    
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header">
          <h6 class="m-0 font-weight-bold text-white">Button Social</h6>
        </div>
        <div class="card-body">
          <div class="row g-2 align-items-center">
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-facebook w-100">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                Facebook
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-google w-100">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-google -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8" /></svg>
                Google
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-youtube w-100">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" /><path d="M10 9l5 3l-5 3z" /></svg>
                Youtube
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-github w-100">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                Github
              </a>
            </div>
            <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
              <a href="#" class="btn btn-bitbucket w-100">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-bitbucket -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3.648 4a.64 .64 0 0 0 -.64 .744l3.14 14.528c.07 .417 .43 .724 .852 .728h10a.644 .644 0 0 0 .642 -.539l3.35 -14.71a.641 .641 0 0 0 -.64 -.744l-16.704 -.007z" /><path d="M14 15h-4l-1 -6h6z" /></svg>
                Bitbucket
              </a>
            </div>
          </div>
        </div>
      </div>


      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ButtonSocial" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
            <div class="code-snippet collapse" id="ButtonSocial">
                <div class="code-title">Code</div>
                <button class="copy-button">Copy Code</button>
                    <pre>
                        <code class="language-html">
&lt;div class=&quot;row g-2 align-items-center&quot;&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl-auto py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-facebook w-100&quot;&gt;
      &lt;!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook --&gt;
      &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3&quot; /&gt;&lt;/svg&gt;
      Facebook
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl-auto py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-google w-100&quot;&gt;
      &lt;!-- Download SVG icon from http://tabler-icons.io/i/brand-google --&gt;
      &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M17.788 5.108a9 9 0 1 0 3.212 6.892h-8&quot; /&gt;&lt;/svg&gt;
      Google
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl-auto py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-youtube w-100&quot;&gt;
      &lt;!-- Download SVG icon from http://tabler-icons.io/i/brand-youtube --&gt;
      &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z&quot; /&gt;&lt;path d=&quot;M10 9l5 3l-5 3z&quot; /&gt;&lt;/svg&gt;
      Youtube
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl-auto py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-github w-100&quot;&gt;
      &lt;!-- Download SVG icon from http://tabler-icons.io/i/brand-github --&gt;
      &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5&quot; /&gt;&lt;/svg&gt;
      Github
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-6 col-sm-4 col-md-2 col-xl-auto py-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-bitbucket w-100&quot;&gt;
      &lt;!-- Download SVG icon from http://tabler-icons.io/i/brand-bitbucket --&gt;
      &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M3.648 4a.64 .64 0 0 0 -.64 .744l3.14 14.528c.07 .417 .43 .724 .852 .728h10a.644 .644 0 0 0 .642 -.539l3.35 -14.71a.641 .641 0 0 0 -.64 -.744l-16.704 -.007z&quot; /&gt;&lt;path d=&quot;M14 15h-4l-1 -6h6z&quot; /&gt;&lt;/svg&gt;
      Bitbucket
    &lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
                        </code>
                    </pre>
            </div>
      </div>


    </div>

    <br>

  </div>




</div>


<script>
  $(document).ready(function() {
        $('.downloadbutton').on('click', function() {
            var $button = $(this);
            $button.addClass('active');
            setTimeout(function() {
                $button.removeClass('active');
                $button.find('i').removeClass('bx-cloud-download').addClass('bx-check-circle');
                $button.find('span').text('Completed');

                // Mengembalikan ke keadaan semula setelah beberapa waktu
                setTimeout(function() {
                    $button.find('i').removeClass('bx-check-circle').addClass('bx-cloud-download');
                    $button.find('span').text('Download');
                }, 3000); // Ganti dengan durasi yang diinginkan (ms)
            }, 6000);
        });
    });
</script>


@endsection