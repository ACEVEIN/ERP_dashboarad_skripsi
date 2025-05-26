@extends('master')

@section('content')


<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Badge</h1>
  </div>

  <div class="row">
    <div class="col-lg-6">

      <div class="card mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-white">Badge</h6>
        </div>
        <div class="card-body">
          <span class="badge badge-pill badge-primary">Primary</span>
          <span class="badge badge-pill badge-secondary">Secondary</span>
          <span class="badge badge-pill badge-success">Success</span>
          <span class="badge badge-pill badge-danger">Danger</span>
          <span class="badge badge-pill badge-warning">Warning</span>
          <span class="badge badge-pill badge-info">Info</span>
          <span class="badge badge-pill badge-light">Light</span>
          <span class="badge badge-pill badge-dark">Dark</span>
        </div>
      </div>
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#badge" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
          <div class="code-snippet collapse" id="badge">
              <div class="code-title">Code</div>
              <button class="copy-button">Copy Code</button>
                  <pre>
                      <code class="language-html">
&lt;span class=&quot;badge badge-pill badge-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-light&quot;&gt;Light&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-dark&quot;&gt;Dark&lt;/span&gt;          
                      </code>
                  </pre>
          </div>
      </div>








      <div class="card mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-white">Badge Notification</h6>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-primary m-1">
              Notifications <span class="badge text-black">1</span>
          </button>
          <button type="button" class="btn btn-secondary m-1">
              Notifications <span class="badge text-black">2</span>
          </button>
          <button type="button" class="btn btn-success m-1">
              Notifications <span class="badge text-black">3</span>
          </button>
          <button type="button" class="btn btn-warning m-1">
              Notifications <span class="badge text-black">4</span>
          </button>
          <button type="button" class="btn btn-info m-1">
              Notifications <span class="badge text-black">5</span>
          </button>
          <button type="button" class="btn btn-danger m-1">
              Notifications <span class="badge text-black">6</span>
          </button>
          <button type="button" class="btn btn-dark m-1">
              Notifications <span class="badge text-black">7</span>
          </button>
          <button type="button" class="btn btn-light m-1">
              Notifications <span class="badge text-black">8</span>
          </button>
        </div>
      </div>
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#badgewithnumber" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
          <div class="code-snippet collapse" id="badgewithnumber">
              <div class="code-title">Code</div>
              <button class="copy-button">Copy Code</button>
                  <pre>
                      <code class="language-html">
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-primary&quot;&gt;1&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-secondary&quot;&gt;2&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-success&quot;&gt;3&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-warning&quot;&gt;4&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-info&quot;&gt;5&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-anger&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-danger&quot;&gt;6&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-dark&quot;&gt;7&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-light&quot;&gt;8&lt;/span&gt;
&lt;/button&gt;
                      </code>
                  </pre>
          </div>
      </div>











      <div class="card mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-white">Badge Outline Notification</h6>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-outline-primary m-1">
              Notifications <span class="badge badge-primary">1</span>
          </button>
          <button type="button" class="btn btn-outline-secondary m-1">
              Notifications <span class="badge badge-secondary">2</span>
          </button>
          <button type="button" class="btn btn-outline-success m-1">
              Notifications <span class="badge badge-success">3</span>
          </button>
          <button type="button" class="btn btn-outline-warning m-1">
              Notifications <span class="badge badge-warning">4</span>
          </button>
          <button type="button" class="btn btn-outline-info m-1">
              Notifications <span class="badge badge-info">5</span>
          </button>
          <button type="button" class="btn btn-outline-danger m-1">
              Notifications <span class="badge badge-danger">6</span>
          </button>
          <button type="button" class="btn btn-outline-dark m-1">
              Notifications <span class="badge badge-dark">7</span>
          </button>
          <button type="button" class="btn btn-outline-light m-1">
              Notifications <span class="badge badge-light">8</span>
          </button>
        </div>
      </div>
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#badgeoutlinewithnumber" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
          <div class="code-snippet collapse" id="badgeoutlinewithnumber">
              <div class="code-title">Code</div>
              <button class="copy-button">Copy Code</button>
                  <pre>
                      <code class="language-html">
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary m-1&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-primary&quot;&gt;1&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary m-1&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-secondary&quot;&gt;2&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success m-1&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-success&quot;&gt;3&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning m-1&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-warning&quot;&gt;4&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info m-1&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-info&quot;&gt;5&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger m-1&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-danger&quot;&gt;6&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark m-1&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-dark&quot;&gt;7&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light m-1&quot;&gt;
    Notifications &lt;span class=&quot;badge badge-light&quot;&gt;8&lt;/span&gt;
&lt;/button&gt;
                      </code>
                  </pre>
          </div>
      </div>







      <div class="card mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-white">Badge Notification Upper</h6>
        </div>
        <div class="card-body">
          <button class="btn btn-primary position-relative m-1">
            Notifications<span class="badge badge-notification badge-pill text-black">1</span>
          </button>
          <button class="btn btn-secondary position-relative m-1">
            Notifications<span class="badge badge-notification badge-pill text-black">2</span>
          </button>
          <button class="btn btn-success position-relative m-1">
            Notifications<span class="badge badge-notification badge-pill text-black">3</span>
          </button>
          <button class="btn btn-warning position-relative m-1">
            Notifications<span class="badge badge-notification badge-pill text-black">4</span>
          </button>
          <button class="btn btn-info position-relative m-1">
            Notifications<span class="badge badge-notification badge-pill text-black">5</span>
          </button>
          <button class="btn btn-danger position-relative m-1">
            Notifications<span class="badge badge-notification badge-pill text-black">6</span>
          </button>
          <button class="btn btn-dark position-relative m-1">
            Notifications<span class="badge badge-notification badge-pill text-black">7</span>
          </button>
          <button class="btn btn-light position-relative m-1">
            Notifications<span class="badge badge-notification badge-pill text-black">8</span>
          </button>          
        </div>
      </div>
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#badgerelative" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
          <div class="code-snippet collapse" id="badgerelative">
              <div class="code-title">Code</div>
              <button class="copy-button">Copy Code</button>
                  <pre>
                      <code class="language-html">
&lt;button class=&quot;btn btn-primary position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-notification badge-pill text-black&quot;&gt;1&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-notification badge-pill text-black&quot;&gt;2&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-success position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-notification badge-pill text-black&quot;&gt;3&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-warning position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-notification badge-pill text-black&quot;&gt;4&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-info position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-notification badge-pill text-black&quot;&gt;5&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-danger position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-notification badge-pill text-black&quot;&gt;6&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-dark position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-notification badge-pill text-black&quot;&gt;7&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-light position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-notification badge-pill text-black&quot;&gt;8&lt;/span&gt;
&lt;/button&gt;                          
                      </code>
                  </pre>
          </div>
      </div>






      <div class="card mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-white">Badge Outline Notification Upper</h6>
        </div>
        <div class="card-body">
          <button class="btn btn-outline-primary position-relative m-1">
            Notifications<span class="badge badge-primary badge-notification badge-pill">1</span>
          </button>
          <button class="btn btn-outline-secondary position-relative m-1">
            Notifications<span class="badge badge-secondary badge-notification badge-pill">2</span>
          </button>
          <button class="btn btn-outline-success position-relative m-1">
            Notifications<span class="badge badge-success badge-notification badge-pill">3</span>
          </button>
          <button class="btn btn-outline-warning position-relative m-1">
            Notifications<span class="badge badge-warning badge-notification badge-pill">4</span>
          </button>
          <button class="btn btn-outline-info position-relative m-1">
            Notifications<span class="badge badge-info badge-notification badge-pill">5</span>
          </button>
          <button class="btn btn-outline-danger position-relative m-1">
            Notifications<span class="badge badge-danger badge-notification badge-pill">6</span>
          </button>
          <button class="btn btn-outline-dark position-relative m-1">
            Notifications<span class="badge badge-dark badge-notification badge-pill">7</span>
          </button>
          <button class="btn btn-outline-light position-relative m-1">
            Notifications<span class="badge badge-light badge-notification badge-pill">8</span>
          </button>          
        </div>
      </div>
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#badgeoutlinerelative" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
          <div class="code-snippet collapse" id="badgeoutlinerelative">
              <div class="code-title">Code</div>
              <button class="copy-button">Copy Code</button>
                  <pre>
                      <code class="language-html">
&lt;button class=&quot;btn btn-outline-primary position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-primary badge-notification badge-pill&quot;&gt;1&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-secondary position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-secondary badge-notification badge-pill&quot;&gt;2&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-success position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-success badge-notification badge-pill&quot;&gt;3&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-warning position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-warning badge-notification badge-pill&quot;&gt;4&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-info position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-info badge-notification badge-pill&quot;&gt;5&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-danger position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-danger badge-notification badge-pill&quot;&gt;6&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-dark position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-dark badge-notification badge-pill&quot;&gt;7&lt;/span&gt;
&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-light position-relative m-1&quot;&gt;
  Notifications&lt;span class=&quot;badge badge-light badge-notification badge-pill&quot;&gt;8&lt;/span&gt;
&lt;/button&gt;                   
                      </code>
                  </pre>
          </div>
      </div>    

    </div>





    
    <div class="col-lg-6">

      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-white">Badge Text</h6>
      </div>
      <div class="card mb-4">
        <div class="card-body">
          <h1>Example heading <span class="badge">New</span></h1>
          <h2>Example heading <span class="badge">New</span></h2>
          <h3>Example heading <span class="badge">New</span></h3>
          <h4>Example heading <span class="badge">New</span></h4>
          <h5>Example heading <span class="badge">New</span></h5>
          <h6>Example heading <span class="badge">New</span></h6>
        </div>
      </div>

      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#exampleHeading" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
          <div class="code-snippet collapse" id="exampleHeading">
              <div class="code-title">Code</div>
              <button class="copy-button">Copy Code</button>
                  <pre>
                      <code class="language-html">
&lt;div class=&quot;card mb-4&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h1&gt;Example heading &lt;span class=&quot;badge&quot;&gt;New&lt;/span&gt;&lt;/h1&gt;
    &lt;h2&gt;Example heading &lt;span class=&quot;badge&quot;&gt;New&lt;/span&gt;&lt;/h2&gt;
    &lt;h3&gt;Example heading &lt;span class=&quot;badge&quot;&gt;New&lt;/span&gt;&lt;/h3&gt;
    &lt;h4&gt;Example heading &lt;span class=&quot;badge&quot;&gt;New&lt;/span&gt;&lt;/h4&gt;
    &lt;h5&gt;Example heading &lt;span class=&quot;badge&quot;&gt;New&lt;/span&gt;&lt;/h5&gt;
    &lt;h6&gt;Example heading &lt;span class=&quot;badge&quot;&gt;New&lt;/span&gt;&lt;/h6&gt;
  &lt;/div&gt;
&lt;/div&gt;
                      </code>
                  </pre>
          </div>
      </div>






      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Badge Profile</h6>
        </div>

        <div class="card-body">
    
        Badge application view in profile section
        
        <div class="d-flex flex-row">
            
          <div class="d-flex justify-content-start align-items-center">
            <ul class="navbar-nav topbar">
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="customimg-profile rounded-circle" src="{{ asset('assets/img/undraw_profile.svg') }}">
                    <span class="badge-counter p-2 bg-danger border border-light rounded-circle"></span>
                    </a>
                </li>
            </ul>
          </div>

          <div class="d-flex justify-content-start align-items-center">
            <ul class="navbar-nav topbar">
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    <img class="customimg-profile rounded-circle"
                    src="{{ asset('assets/img/undraw_profile.svg') }}">
                    <span class="badge badge-danger badge-counter">3+</span>
                    </a>
                </li>
            </ul>
          </div>
        </div>
          
        </div>
      </div>
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#profilBadge" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
          <div class="code-snippet collapse" id="profilBadge">
              <div class="code-title">Code</div>
              <button class="copy-button">Copy Code</button>
                  <pre>
                      <code class="language-html">
&lt;div class=&quot;d-flex justify-content-start align-items-center&quot;&gt;
  &lt;ul class=&quot;navbar-nav topbar&quot;&gt;
      &lt;li class=&quot;nav-item dropdown no-arrow mx-1&quot;&gt;
          &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; id=&quot;userDropdown&quot; role=&quot;button&quot;
          data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
          &lt;img class=&quot;customimg-profile rounded-circle&quot; src=&quot;{{ asset('assets/img/undraw_profile.svg') }}&quot;&gt;
          &lt;span class=&quot;badge-counter p-2 bg-danger border border-light rounded-circle&quot;&gt;&lt;/span&gt;
          &lt;/a&gt;
      &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex justify-content-start align-items-center&quot;&gt;
  &lt;ul class=&quot;navbar-nav topbar&quot;&gt;
      &lt;li class=&quot;nav-item dropdown no-arrow mx-1&quot;&gt;
          &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; id=&quot;userDropdown&quot; role=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt; 
          &lt;img class=&quot;customimg-profile rounded-circle&quot;
          src=&quot;{{ asset('assets/img/undraw_profile.svg') }}&quot;&gt;
          &lt;span class=&quot;badge badge-danger badge-counter&quot;&gt;3+&lt;/span&gt;
          &lt;/a&gt;
      &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
                      </code>
                  </pre>
          </div>
      </div>





      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-white">Dot Notification</h6>
        </div>

        <div class="card-body">

          <div class="d-flex justify-content-start align-items-center">
            <div class="btn btn-outline-primary position-relative"><i class="fa-solid fa-bell"></i><span class="badge badge-primary badge-notification badge-pill">1</span></div>     
            <div class="ml-4">
                This is an example of the icon used on the badge
            </div>    
          </div>

          <br>

        <div class="d-flex flex-row">
            <div class="d-flex justify-content-start align-items-center">   
              <span class="badge-counter p-2 bg-danger border border-light rounded-circle"></span>
            </div> 
            <div class="d-flex justify-content-start align-items-center"> 
              <span class="badge badge-danger badge-counter ml-2">1</span>
            </div> 
            <div class="d-flex justify-content-start align-items-center"> 
              <span class="badge badge-danger badge-counter ml-2">99+</span>
            </div> 
              
            {{-- <div class="position-relative ml-4">
              <span class="badge badge-primary badge-notification badge-pill">1</span>
            </div> --}}

            <div class="ml-4">
                These are the dot and numeric examples that will be used in the badge application
            </div>
          </div>

        </div>
      </div>
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#dotexample" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
          <div class="code-snippet collapse" id="dotexample">
              <div class="code-title">Code</div>
              <button class="copy-button">Copy Code</button>
                  <pre>
                      <code class="language-html">
&lt;div class=&quot;d-flex justify-content-start align-items-center&quot;&gt;
  &lt;div class=&quot;btn btn-outline-primary position-relative&quot;&gt;&lt;i class=&quot;fa-solid fa-bell&quot;&gt;&lt;/i&gt;&lt;span class=&quot;badge badge-primary badge-notification badge-pill&quot;&gt;1&lt;/span&gt;&lt;/div&gt;         
&lt;/div&gt;

&lt;div class=&quot;d-flex flex-row&quot;&gt;
  &lt;div class=&quot;d-flex justify-content-start align-items-center&quot;&gt;   
    &lt;span class=&quot;badge-counter p-2 bg-danger border border-light rounded-circle&quot;&gt;&lt;/span&gt;
  &lt;/div&gt; 
  &lt;div class=&quot;d-flex justify-content-start align-items-center&quot;&gt; 
    &lt;span class=&quot;badge badge-danger badge-counter ml-2&quot;&gt;1&lt;/span&gt;
  &lt;/div&gt; 
  &lt;div class=&quot;d-flex justify-content-start align-items-center&quot;&gt; 
    &lt;span class=&quot;badge badge-danger badge-counter ml-2&quot;&gt;99+&lt;/span&gt;
  &lt;/div&gt; 
&lt;/div&gt; 
                      </code>
                  </pre>
          </div>
      </div>




    </div>

</div>



@endsection