@extends('master')

@section('content')


<div class="container-fluid">
     
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Notification</h1>
    </div>

    <nav class="navbar navbar-expand mb-4 topbar static-top">
        <ul class="navbar-nav">

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                </a>

                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">Alerts Center</h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 12, 2019</div>
                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 7, 2019</div>
                                $290.29 has been deposited into your account!
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 2, 2019</div>
                                Spending Alert: We've noticed unusually high spending for your account.
                            </div>
                        </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <!-- Counter - Messages -->
                    <span class="badge badge-danger badge-counter">7</span>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-list dropdown-menu dropdown-menu-left shadow animated--grow-in"
                    aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                        Message Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="assets/img/undraw_profile_1.svg"public
                                alt="...">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                            <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                problem I've been having.</div>
                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="assets/img/undraw_profile_2.svg"
                                alt="...">
                            <div class="status-indicator"></div>
                        </div>
                        <div>
                            <div class="text-truncate">I have the photos that you ordered last month, how
                                would you like them sent to you?</div>
                            <div class="small text-gray-500">Jae Chun · 1d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="assets/img/undraw_profile_3.svg"
                                alt="...">
                            <div class="status-indicator bg-warning"></div>
                        </div>
                        <div>
                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                the progress so far, keep up the good work!</div>
                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUy9s7L2aRDadM1KxmVNkNQ9Edar2APzIeHw&s"
                                alt="...">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div>
                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                told me that people say this to all dogs, even if they aren't good...</div>
                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                </div>
            </li>

        </ul>
    </nav>


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
&lt;nav class=&quot;navbar navbar-expand mb-4 topbar static-top&quot;&gt;
    &lt;ul class=&quot;navbar-nav&quot;&gt;

        &lt;!-- Nav Item - Alerts --&gt;
        &lt;li class=&quot;nav-item dropdown no-arrow mx-1&quot;&gt;
            &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; id=&quot;alertsDropdown&quot; role=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                &lt;i class=&quot;fas fa-bell fa-fw&quot;&gt;&lt;/i&gt;
                &lt;!-- Counter - Alerts --&gt;
                &lt;span class=&quot;badge badge-danger badge-counter&quot;&gt;3+&lt;/span&gt;
            &lt;/a&gt;

            &lt;!-- Dropdown - Alerts --&gt;
            &lt;div class=&quot;dropdown-list dropdown-menu dropdown-menu-left shadow animated--grow-in&quot; aria-labelledby=&quot;alertsDropdown&quot;&gt;
                &lt;h6 class=&quot;dropdown-header&quot;&gt;Alerts Center&lt;/h6&gt;
                    &lt;a class=&quot;dropdown-item d-flex align-items-center&quot; href=&quot;#&quot;&gt;
                        &lt;div class=&quot;mr-3&quot;&gt;
                            &lt;div class=&quot;icon-circle bg-primary&quot;&gt;
                                &lt;i class=&quot;fas fa-file-alt text-white&quot;&gt;&lt;/i&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class=&quot;small text-gray-500&quot;&gt;December 12, 2019&lt;/div&gt;
                            &lt;span class=&quot;font-weight-bold&quot;&gt;A new monthly report is ready to download!&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;a class=&quot;dropdown-item d-flex align-items-center&quot; href=&quot;#&quot;&gt;
                        &lt;div class=&quot;mr-3&quot;&gt;
                            &lt;div class=&quot;icon-circle bg-success&quot;&gt;
                                &lt;i class=&quot;fas fa-donate text-white&quot;&gt;&lt;/i&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class=&quot;small text-gray-500&quot;&gt;December 7, 2019&lt;/div&gt;
                            $290.29 has been deposited into your account!
                        &lt;/div&gt;
                    &lt;/a&gt;
                    &lt;a class=&quot;dropdown-item d-flex align-items-center&quot; href=&quot;#&quot;&gt;
                        &lt;div class=&quot;mr-3&quot;&gt;
                            &lt;div class=&quot;icon-circle bg-warning&quot;&gt;
                                &lt;i class=&quot;fas fa-exclamation-triangle text-white&quot;&gt;&lt;/i&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class=&quot;small text-gray-500&quot;&gt;December 2, 2019&lt;/div&gt;
                            Spending Alert: We've noticed unusually high spending for your account.
                        &lt;/div&gt;
                    &lt;/a&gt;
                &lt;a class=&quot;dropdown-item text-center small text-gray-500&quot; href=&quot;#&quot;&gt;Show All Alerts&lt;/a&gt;
            &lt;/div&gt;
        &lt;/li&gt;

        &lt;!-- Nav Item - Messages --&gt;
        &lt;li class=&quot;nav-item dropdown no-arrow mx-1&quot;&gt;
            &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; id=&quot;messagesDropdown&quot; role=&quot;button&quot;
                data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                &lt;i class=&quot;fas fa-envelope fa-fw&quot;&gt;&lt;/i&gt;
                &lt;!-- Counter - Messages --&gt;
                &lt;span class=&quot;badge badge-danger badge-counter&quot;&gt;7&lt;/span&gt;
            &lt;/a&gt;
            &lt;!-- Dropdown - Messages --&gt;
            &lt;div class=&quot;dropdown-list dropdown-menu dropdown-menu-left shadow animated--grow-in&quot;
                aria-labelledby=&quot;messagesDropdown&quot;&gt;
                &lt;h6 class=&quot;dropdown-header&quot;&gt;
                    Message Center
                &lt;/h6&gt;
                &lt;a class=&quot;dropdown-item d-flex align-items-center&quot; href=&quot;#&quot;&gt;
                    &lt;div class=&quot;dropdown-list-image mr-3&quot;&gt;
                        &lt;img class=&quot;rounded-circle&quot; src=&quot;assets/img/undraw_profile_1.svg&quot;public
                            alt=&quot;...&quot;&gt;
                        &lt;div class=&quot;status-indicator bg-success&quot;&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;font-weight-bold&quot;&gt;
                        &lt;div class=&quot;text-truncate&quot;&gt;Hi there! I am wondering if you can help me with a
                            problem I've been having.&lt;/div&gt;
                        &lt;div class=&quot;small text-gray-500&quot;&gt;Emily Fowler &middot; 58m&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
                &lt;a class=&quot;dropdown-item d-flex align-items-center&quot; href=&quot;#&quot;&gt;
                    &lt;div class=&quot;dropdown-list-image mr-3&quot;&gt;
                        &lt;img class=&quot;rounded-circle&quot; src=&quot;assets/img/undraw_profile_2.svg&quot;
                            alt=&quot;...&quot;&gt;
                        &lt;div class=&quot;status-indicator&quot;&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;div class=&quot;text-truncate&quot;&gt;I have the photos that you ordered last month, how
                            would you like them sent to you?&lt;/div&gt;
                        &lt;div class=&quot;small text-gray-500&quot;&gt;Jae Chun &middot; 1d&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
                &lt;a class=&quot;dropdown-item d-flex align-items-center&quot; href=&quot;#&quot;&gt;
                    &lt;div class=&quot;dropdown-list-image mr-3&quot;&gt;
                        &lt;img class=&quot;rounded-circle&quot; src=&quot;assets/img/undraw_profile_3.svg&quot;
                            alt=&quot;...&quot;&gt;
                        &lt;div class=&quot;status-indicator bg-warning&quot;&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;div class=&quot;text-truncate&quot;&gt;Last month's report looks great, I am very happy with
                            the progress so far, keep up the good work!&lt;/div&gt;
                        &lt;div class=&quot;small text-gray-500&quot;&gt;Morgan Alvarez &middot; 2d&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
                &lt;a class=&quot;dropdown-item d-flex align-items-center&quot; href=&quot;#&quot;&gt;
                    &lt;div class=&quot;dropdown-list-image mr-3&quot;&gt;
                        &lt;img class=&quot;rounded-circle&quot; src=&quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUy9s7L2aRDadM1KxmVNkNQ9Edar2APzIeHw&amp;s&quot;
                            alt=&quot;...&quot;&gt;
                        &lt;div class=&quot;status-indicator bg-success&quot;&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;div class=&quot;text-truncate&quot;&gt;Am I a good boy? The reason I ask is because someone
                            told me that people say this to all dogs, even if they aren't good...&lt;/div&gt;
                        &lt;div class=&quot;small text-gray-500&quot;&gt;Chicken the Dog &middot; 2w&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
                &lt;a class=&quot;dropdown-item text-center small text-gray-500&quot; href=&quot;#&quot;&gt;Read More Messages&lt;/a&gt;
            &lt;/div&gt;
        &lt;/li&gt;

    &lt;/ul&gt;
&lt;/nav&gt;
                        </code>
                    </pre>
            </div>
      </div>



 
    {{-- <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
        <img src="" class="img-fluid rounded mr-2" alt="profil">
        <strong class="mr-auto">Bootstrap</strong>
        <small class="text-muted">just now</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="toast-body">
        See? Just like this.
        </div>
    </div>
    
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
        <img src="" class="img-fluid drounded mr-2" alt="profil">
        <strong class="mr-auto">Bootstrap</strong>
        <small class="text-muted">2 seconds ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="toast-body">
        Heads up, toasts will stack automatically
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
    &lt;div class=&quot;custom-control custom-switch&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;darkModeSwitch2&quot;&gt;
    &lt;label class=&quot;custom-control-label&quot; for=&quot;darkModeSwitch2&quot;&gt;Dark Mode&lt;/label&gt;
    &lt;/div&gt;
                        </code>
                    </pre>
            </div>
    </div> --}}
  




</div>

{{-- <script>
    $(document).ready(function(){
        $('.toast').toast('show');  // Show the toast
    });
</script> --}}
    
@endsection