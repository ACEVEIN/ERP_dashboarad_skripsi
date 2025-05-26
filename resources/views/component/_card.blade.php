@extends('master')

@section('content')



<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
    </div>

    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold customtext-primary text-uppercase mb-1">
                                Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                            <svg width="32" height="32" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1462_10097)">
                                <path d="M17.8951 11.3713C17.7853 11.0607 17.6159 10.7784 17.4007 10.5379C16.943 10.0265 16.2777 9.70459 15.5373 9.70459H13.6022C12.3697 9.70459 11.3706 10.7037 11.3706 11.9362C11.3706 12.9849 12.1008 13.8921 13.1253 14.1162L16.0715 14.7607C17.2193 15.0118 18.0373 16.0288 18.0373 17.2037C18.0373 18.5844 16.918 19.7046 15.5373 19.7046H13.8706C12.7821 19.7046 11.8561 19.009 11.5129 18.038" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.7041 9.70492V7.2049" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.7041 22.2047V19.7048" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.28223 28.9253V23.5682H9.63937" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M28.6885 12.437C30.0213 19.5255 25.6835 26.553 18.6013 28.4505C13.1809 29.9029 7.65018 27.9492 4.28174 23.9014" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1.31126 17.563C-0.021689 10.4745 4.31613 3.44713 11.3983 1.54947C16.8184 0.0971605 22.3488 2.05053 25.7174 6.0978" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M25.7176 1.07507V6.43222H20.3604" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1462_10097">
                                <rect width="30" height="30" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                            <svg width="30" height="31" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1461_9939)">
                                <path d="M19.2854 16.0714C24.6111 16.0714 28.9283 14.1526 28.9283 11.7857C28.9283 9.41878 24.6111 7.5 19.2854 7.5C13.9598 7.5 9.64258 9.41878 9.64258 11.7857C9.64258 14.1526 13.9598 16.0714 19.2854 16.0714Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.64258 11.7857V24.6428C9.64258 27 13.9283 28.9286 19.2854 28.9286C24.6426 28.9286 28.9283 27 28.9283 24.6428V11.7857" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M28.9283 18.2143C28.9283 20.5714 24.6426 22.5 19.2854 22.5C13.9283 22.5 9.64258 20.5714 9.64258 18.2143" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.0713 3.23308C16.5673 1.68781 13.6527 0.940466 10.7141 1.09022C5.37843 1.09022 1.07129 3.0188 1.07129 5.37594C1.07129 6.64023 2.31415 7.77594 4.28558 8.59023" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.28557 21.4474C2.31415 20.6331 1.07129 19.4974 1.07129 18.2331V5.37598" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.28557 15.0188C2.31415 14.2045 1.07129 13.0688 1.07129 11.8045" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1461_9939">
                                <rect width="30" height="30" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> -->
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.1118 26.7857C25.1118 27.354 24.886 27.8991 24.4842 28.3009C24.0822 28.7027 23.5372 28.9286 22.969 28.9286H3.68314C3.11481 28.9286 2.56978 28.7027 2.1679 28.3009C1.76605 27.8991 1.54028 27.354 1.54028 26.7857V3.21427C1.54028 2.64594 1.76605 2.1009 2.1679 1.69904C2.56978 1.29718 3.11481 1.07141 3.68314 1.07141H15.6527C16.221 1.07141 16.7661 1.29718 17.1679 1.69904L24.4842 9.01522C24.886 9.41707 25.1118 9.96212 25.1118 10.5304V26.7857Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5229 13.6607H19.8801" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5229 21.0938H19.8801" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.23608 20.9723L8.03156 22.7678L11.024 18.5784" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.23608 13.4054L8.03156 15.2009L11.024 11.0114" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
                            <svg width="31" height="31" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1646_10786)">
                                <path d="M15 7.5V16.0714L20.5714 18.8571" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M28.556 18.2143C27.1049 24.3572 21.5864 28.9286 15.0001 28.9286C7.30757 28.9286 1.07153 22.6926 1.07153 15C1.07153 7.30745 7.30757 1.07141 15.0001 1.07141C20.3738 1.07141 25.0368 4.1145 27.3597 8.57141" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                <path d="M28.9287 4.28571V9.64285H23.5715" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1646_10786">
                                <rect width="30" height="30" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#rowCard" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="rowCard">
            <div class="code-title">Code</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;div class=&quot;row&quot;&gt;
    &lt;!-- Earnings (Monthly) Card Example --&gt;
    &lt;div class=&quot;col-xl-3 col-md-6 mb-4&quot;&gt;
        &lt;div class=&quot;card border-left-primary shadow h-100 py-2&quot;&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;div class=&quot;row no-gutters align-items-center&quot;&gt;
                    &lt;div class=&quot;col mr-2&quot;&gt;
                        &lt;div class=&quot;text-xs font-weight-bold customtext-primary text-uppercase mb-1&quot;&gt;
                            Earnings (Monthly)&lt;/div&gt;
                        &lt;div class=&quot;h5 mb-0 font-weight-bold text-gray-800&quot;&gt;$40,000&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-auto&quot;&gt;
                        &lt;!-- &lt;i class=&quot;fas fa-calendar fa-2x text-gray-300&quot;&gt;&lt;/i&gt; --&gt;
                        &lt;svg width=&quot;32&quot; height=&quot;32&quot; viewBox=&quot;0 0 30 30&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
                            &lt;g clip-path=&quot;url(#clip0_1462_10097)&quot;&gt;
                            &lt;path d=&quot;M17.8951 11.3713C17.7853 11.0607 17.6159 10.7784 17.4007 10.5379C16.943 10.0265 16.2777 9.70459 15.5373 9.70459H13.6022C12.3697 9.70459 11.3706 10.7037 11.3706 11.9362C11.3706 12.9849 12.1008 13.8921 13.1253 14.1162L16.0715 14.7607C17.2193 15.0118 18.0373 16.0288 18.0373 17.2037C18.0373 18.5844 16.918 19.7046 15.5373 19.7046H13.8706C12.7821 19.7046 11.8561 19.009 11.5129 18.038&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M14.7041 9.70492V7.2049&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M14.7041 22.2047V19.7048&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M4.28223 28.9253V23.5682H9.63937&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M28.6885 12.437C30.0213 19.5255 25.6835 26.553 18.6013 28.4505C13.1809 29.9029 7.65018 27.9492 4.28174 23.9014&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M1.31126 17.563C-0.021689 10.4745 4.31613 3.44713 11.3983 1.54947C16.8184 0.0971605 22.3488 2.05053 25.7174 6.0978&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M25.7176 1.07507V6.43222H20.3604&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;/g&gt;
                            &lt;defs&gt;
                            &lt;clipPath id=&quot;clip0_1462_10097&quot;&gt;
                            &lt;rect width=&quot;30&quot; height=&quot;30&quot; fill=&quot;white&quot;/&gt;
                            &lt;/clipPath&gt;
                            &lt;/defs&gt;
                        &lt;/svg&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Earnings (Annual) Card Example --&gt;
    &lt;div class=&quot;col-xl-3 col-md-6 mb-4&quot;&gt;
        &lt;div class=&quot;card border-left-success shadow h-100 py-2&quot;&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;div class=&quot;row no-gutters align-items-center&quot;&gt;
                    &lt;div class=&quot;col mr-2&quot;&gt;
                        &lt;div class=&quot;text-xs font-weight-bold text-success text-uppercase mb-1&quot;&gt;
                            Earnings (Annual)&lt;/div&gt;
                        &lt;div class=&quot;h5 mb-0 font-weight-bold text-gray-800&quot;&gt;$215,000&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-auto&quot;&gt;
                        &lt;!-- &lt;i class=&quot;fas fa-dollar-sign fa-2x text-gray-300&quot;&gt;&lt;/i&gt; --&gt;
                        &lt;svg width=&quot;30&quot; height=&quot;31&quot; viewBox=&quot;0 0 30 30&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
                            &lt;g clip-path=&quot;url(#clip0_1461_9939)&quot;&gt;
                            &lt;path d=&quot;M19.2854 16.0714C24.6111 16.0714 28.9283 14.1526 28.9283 11.7857C28.9283 9.41878 24.6111 7.5 19.2854 7.5C13.9598 7.5 9.64258 9.41878 9.64258 11.7857C9.64258 14.1526 13.9598 16.0714 19.2854 16.0714Z&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M9.64258 11.7857V24.6428C9.64258 27 13.9283 28.9286 19.2854 28.9286C24.6426 28.9286 28.9283 27 28.9283 24.6428V11.7857&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M28.9283 18.2143C28.9283 20.5714 24.6426 22.5 19.2854 22.5C13.9283 22.5 9.64258 20.5714 9.64258 18.2143&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M19.0713 3.23308C16.5673 1.68781 13.6527 0.940466 10.7141 1.09022C5.37843 1.09022 1.07129 3.0188 1.07129 5.37594C1.07129 6.64023 2.31415 7.77594 4.28558 8.59023&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M4.28557 21.4474C2.31415 20.6331 1.07129 19.4974 1.07129 18.2331V5.37598&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M4.28557 15.0188C2.31415 14.2045 1.07129 13.0688 1.07129 11.8045&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;/g&gt;
                            &lt;defs&gt;
                            &lt;clipPath id=&quot;clip0_1461_9939&quot;&gt;
                            &lt;rect width=&quot;30&quot; height=&quot;30&quot; fill=&quot;white&quot;/&gt;
                            &lt;/clipPath&gt;
                            &lt;/defs&gt;
                        &lt;/svg&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Tasks Card Example --&gt;
    &lt;div class=&quot;col-xl-3 col-md-6 mb-4&quot;&gt;
        &lt;div class=&quot;card border-left-info shadow h-100 py-2&quot;&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;div class=&quot;row no-gutters align-items-center&quot;&gt;
                    &lt;div class=&quot;col mr-2&quot;&gt;
                        &lt;div class=&quot;text-xs font-weight-bold text-info text-uppercase mb-1&quot;&gt;Tasks
                        &lt;/div&gt;
                        &lt;div class=&quot;row no-gutters align-items-center&quot;&gt;
                            &lt;div class=&quot;col-auto&quot;&gt;
                                &lt;div class=&quot;h5 mb-0 mr-3 font-weight-bold text-gray-800&quot;&gt;50%&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;col&quot;&gt;
                                &lt;div class=&quot;progress progress-sm mr-2&quot;&gt;
                                    &lt;div class=&quot;progress-bar bg-info&quot; role=&quot;progressbar&quot;
                                        style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot;
                                        aria-valuemax=&quot;100&quot;&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-auto&quot;&gt;
                        &lt;!-- &lt;i class=&quot;fas fa-clipboard-list fa-2x text-gray-300&quot;&gt;&lt;/i&gt; --&gt;
                        &lt;svg width=&quot;30&quot; height=&quot;30&quot; viewBox=&quot;0 0 30 30&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
                            &lt;path d=&quot;M25.1118 26.7857C25.1118 27.354 24.886 27.8991 24.4842 28.3009C24.0822 28.7027 23.5372 28.9286 22.969 28.9286H3.68314C3.11481 28.9286 2.56978 28.7027 2.1679 28.3009C1.76605 27.8991 1.54028 27.354 1.54028 26.7857V3.21427C1.54028 2.64594 1.76605 2.1009 2.1679 1.69904C2.56978 1.29718 3.11481 1.07141 3.68314 1.07141H15.6527C16.221 1.07141 16.7661 1.29718 17.1679 1.69904L24.4842 9.01522C24.886 9.41707 25.1118 9.96212 25.1118 10.5304V26.7857Z&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M14.5229 13.6607H19.8801&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M14.5229 21.0938H19.8801&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M6.23608 20.9723L8.03156 22.7678L11.024 18.5784&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M6.23608 13.4054L8.03156 15.2009L11.024 11.0114&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                        &lt;/svg&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Pending Requests Card Example --&gt;
    &lt;div class=&quot;col-xl-3 col-md-6 mb-4&quot;&gt;
        &lt;div class=&quot;card border-left-warning shadow h-100 py-2&quot;&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;div class=&quot;row no-gutters align-items-center&quot;&gt;
                    &lt;div class=&quot;col mr-2&quot;&gt;
                        &lt;div class=&quot;text-xs font-weight-bold text-warning text-uppercase mb-1&quot;&gt;
                            Pending Requests&lt;/div&gt;
                        &lt;div class=&quot;h5 mb-0 font-weight-bold text-gray-800&quot;&gt;18&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-auto&quot;&gt;
                        &lt;!-- &lt;i class=&quot;fas fa-comments fa-2x text-gray-300&quot;&gt;&lt;/i&gt; --&gt;
                        &lt;svg width=&quot;31&quot; height=&quot;31&quot; viewBox=&quot;0 0 30 30&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
                            &lt;g clip-path=&quot;url(#clip0_1646_10786)&quot;&gt;
                            &lt;path d=&quot;M15 7.5V16.0714L20.5714 18.8571&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M28.556 18.2143C27.1049 24.3572 21.5864 28.9286 15.0001 28.9286C7.30757 28.9286 1.07153 22.6926 1.07153 15C1.07153 7.30745 7.30757 1.07141 15.0001 1.07141C20.3738 1.07141 25.0368 4.1145 27.3597 8.57141&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot;/&gt;
                            &lt;path d=&quot;M28.9287 4.28571V9.64285H23.5715&quot; stroke=&quot;black&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;/&gt;
                            &lt;/g&gt;
                            &lt;defs&gt;
                            &lt;clipPath id=&quot;clip0_1646_10786&quot;&gt;
                            &lt;rect width=&quot;30&quot; height=&quot;30&quot; fill=&quot;white&quot;/&gt;
                            &lt;/clipPath&gt;
                            &lt;/defs&gt;
                        &lt;/svg&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                    </code>
                </pre>
        </div>
    </div>



<br><br>



    <div class="row">

        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    Default Card Example
                </div>
                <div class="card-body">
                    This card uses Bootstrap's default styling with no utility classes added. Global
                    styles are the only things modifying the look and feel of this default card example.
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Basic Card Example</h6>
                </div>
                <div class="card-body">
                    The styling for this basic card example is created by using default Bootstrap
                    utility classes. By using utility classes, the style of the card component can be
                    easily modified with no need for any custom CSS!
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-white">Dropdown Card Example</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    Dropdown menus can be placed in the card header in order to extend the functionality
                    of a basic card. In this dropdown card example, the Font Awesome vertical ellipsis
                    icon in the card header can be clicked on in order to toggle a dropdown menu.
                </div>
            </div>

            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-white">Collapsable Card Example</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        This is a collapsable card example using Bootstrap's built in collapse
                        functionality. <strong>Click on the card header</strong> to see the card body
                        collapse and expand!
                    </div>
                </div>
            </div>
        </div>

    </div>



    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Card" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="Card">
            <div class="code-title">Code</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
Default Card Example
&lt;div class=&quot;card mb-4&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        Default Card Example
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        This card uses Bootstrap's default styling with no utility classes added. Global
        styles are the only things modifying the look and feel of this default card example.
    &lt;/div&gt;
&lt;/div&gt;

Basic Card Example
&lt;div class=&quot;card shadow mb-4&quot;&gt;
    &lt;div class=&quot;card-header py-3&quot;&gt;
        &lt;h6 class=&quot;m-0 font-weight-bold text-white&quot;&gt;Basic Card Example&lt;/h6&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        The styling for this basic card example is created by using default Bootstrap
        utility classes. By using utility classes, the style of the card component can be
        easily modified with no need for any custom CSS!
    &lt;/div&gt;
&lt;/div&gt;

Dropdown Card Example
&lt;div class=&quot;card shadow mb-4&quot;&gt;
    &lt;!-- Card Header - Dropdown --&gt;
    &lt;div class=&quot;card-header py-3 d-flex flex-row align-items-center justify-content-between&quot;&gt;
        &lt;h6 class=&quot;m-0 font-weight-bold text-white&quot;&gt;Dropdown Card Example&lt;/h6&gt;
        &lt;div class=&quot;dropdown no-arrow&quot;&gt;
            &lt;a class=&quot;dropdown-toggle&quot; href=&quot;#&quot; role=&quot;button&quot; id=&quot;dropdownMenuLink&quot;
                data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                &lt;i class=&quot;fas fa-ellipsis-v fa-sm fa-fw text-gray-400&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;div class=&quot;dropdown-menu dropdown-menu-right shadow animated--fade-in&quot;
                aria-labelledby=&quot;dropdownMenuLink&quot;&gt;
                &lt;div class=&quot;dropdown-header&quot;&gt;Dropdown Header:&lt;/div&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- Card Body --&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        Dropdown menus can be placed in the card header in order to extend the functionality
        of a basic card. In this dropdown card example, the Font Awesome vertical ellipsis
        icon in the card header can be clicked on in order to toggle a dropdown menu.
    &lt;/div&gt;
&lt;/div&gt;

Collapsable Card Example
&lt;div class=&quot;card shadow mb-4&quot;&gt;
    &lt;!-- Card Header - Accordion --&gt;
    &lt;a href=&quot;#collapseCardExample&quot; class=&quot;d-block card-header py-3&quot; data-toggle=&quot;collapse&quot;
        role=&quot;button&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseCardExample&quot;&gt;
        &lt;h6 class=&quot;m-0 font-weight-bold text-white&quot;&gt;Collapsable Card Example&lt;/h6&gt;
    &lt;/a&gt;
    &lt;!-- Card Content - Collapse --&gt;
    &lt;div class=&quot;collapse show&quot; id=&quot;collapseCardExample&quot;&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            This is a collapsable card example using Bootstrap's built in collapse
            functionality. &lt;strong&gt;Click on the card header&lt;/strong&gt; to see the card body
            collapse and expand!
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                    </code>
                </pre>
        </div>
    </div>


    
    <br><br>



    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tags</h1>
    </div>

    <div class="row row-cards">
       
        <div class="col-lg-4">
            1
            <div class="card shadow mb-4">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                        <li class="nav-item">
                            <a href="#tabs-home-1" class="nav-link active" data-bs-toggle="tab">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tabs-profile-1" class="nav-link" data-bs-toggle="tab">Profile</a>
                        </li>
                        <!-- pake ms auto custom dari tabler -->
                        <li class="nav-item ms-auto">
                            <a href="#tabs-settings-1" class="nav-link" title="Settings" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/settings -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-home-1">
                            <h4>Home tab</h4>
                            <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-1">
                            <h4>Profile tab</h4>
                            <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>
                        <div class="tab-pane" id="tabs-settings-1">
                            <h4>Settings tab</h4>
                            <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="col-lg-4">
            2
            <div class="card shadow mb-4">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs flex-row-reverse" data-bs-toggle="tabs">
                        <li class="nav-item">
                            <a href="#tabs-home-2" class="nav-link active" data-bs-toggle="tab">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tabs-profile-2" class="nav-link" data-bs-toggle="tab">Profile</a>
                        </li>
                        <li class="nav-item me-auto">
                            <a href="#tabs-settings-2" class="nav-link" title="Settings" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/settings -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-home-2">
                            <h4>Home tab</h4>
                            <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-2">
                            <h4>Profile tab</h4>
                            <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>
                        <div class="tab-pane" id="tabs-settings-2">
                            <h4>Settings tab</h4>
                            <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-lg-4">
            3
            <div class="card shadow mb-4">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                        <li class="nav-item">
                            <a href="#tabs-home-3" class="nav-link active" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tabs-profile-3" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                                Profile</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-home-3">
                            <h4>Home tab</h4>
                            <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-3">
                            <h4>Profile tab</h4>
                            <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


     
        <div class="col-lg-4">
            4
            <div class="card shadow mb-4">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                        <li class="nav-item">
                            <a href="#tabs-home-4" class="nav-link active" data-bs-toggle="tab">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tabs-profile-4" class="nav-link" data-bs-toggle="tab">Profile</a>
                        </li>
                        <!-- <li class="nav-item dropdown"> -->
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                            Action
                            </a>
                            <a class="dropdown-item" href="#">
                            Another action
                            </a>
                        </div>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-home-4">
                            <h4>Home tab</h4>
                            <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-4">
                            <h4>Profile tab</h4>
                            <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="col-lg-4">
            5
            <div class="card shadow mb-4">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                <li class="nav-item">
                    <a href="#tabs-home-5" class="nav-link active" data-bs-toggle="tab">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-profile-5" class="nav-link" data-bs-toggle="tab">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-activity-5" class="nav-link" data-bs-toggle="tab">Activity</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-5">
                    <h4>Home tab</h4>
                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-5">
                    <h4>Profile tab</h4>
                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
                <div class="tab-pane" id="tabs-activity-5">
                    <h4>Activity tab</h4>
                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                </div>
                </div>
            </div>
            </div>
        </div>

       
        <div class="col-lg-4">
            6
            <div class="card shadow mb-4">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                <li class="nav-item">
                    <a href="#tabs-home-6" class="nav-link active" data-bs-toggle="tab">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-profile-6" class="nav-link" data-bs-toggle="tab">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-activity-6" class="nav-link disabled" data-bs-toggle="tab">Disabled</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-6">
                    <h4>Home tab</h4>
                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-6">
                    <h4>Profile tab</h4>
                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
                </div>
            </div>
            </div>
        </div>

 
        <div class="col-lg-4">
            7
            <div class="card shadow mb-4">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                <li class="nav-item">
                    <a href="#tabs-home-7" class="nav-link active" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    Home</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-profile-7" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                    Profile</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-activity-7" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12h4l3 8l4 -16l3 8h4" /></svg>
                    Activity</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-7">
                    <h4>Home tab</h4>
                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-7">
                    <h4>Profile tab</h4>
                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
                <div class="tab-pane" id="tabs-activity-7">
                    <h4>Activity tab</h4>
                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                </div>
                </div>
            </div>
            </div>
        </div>

        
        <div class="col-lg-4">
            8
            <div class="card shadow mb-4">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                        <li class="nav-item">
                            <a href="#tabs-home-8" class="nav-link active" data-bs-toggle="tab">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tabs-profile-8" class="nav-link" data-bs-toggle="tab">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tabs-activity-8" class="nav-link" data-bs-toggle="tab">Activity</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tabs-home-8">
                            <h4>Home tab</h4>
                            <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                        </div>
                        <div class="tab-pane fade" id="tabs-profile-8">
                            <h4>Profile tab</h4>
                            <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>
                        <div class="tab-pane fade" id="tabs-activity-8">
                            <h4>Activity tab</h4>
                            <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
   



    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Tags" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
    </p>
    <div class="container mt-4">            
        <div class="code-snippet collapse" id="Tags">
            <div class="code-title">Code</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
&lt;div class=&quot;row row-cards&quot;&gt;

    &lt;div class=&quot;col-lg-4&quot;&gt;
        1
        &lt;div class=&quot;card shadow mb-4&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;ul class=&quot;nav nav-tabs card-header-tabs&quot; data-bs-toggle=&quot;tabs&quot;&gt;
                    &lt;li class=&quot;nav-item&quot;&gt;
                        &lt;a href=&quot;#tabs-home-1&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot;&gt;Home&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;nav-item&quot;&gt;
                        &lt;a href=&quot;#tabs-profile-1&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot;&gt;Profile&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;!-- pake ms auto custom dari tabler --&gt;
                    &lt;li class=&quot;nav-item ms-auto&quot;&gt;
                        &lt;a href=&quot;#tabs-settings-1&quot; class=&quot;nav-link&quot; title=&quot;Settings&quot; data-bs-toggle=&quot;tab&quot;&gt;&lt;!-- Download SVG icon from http://tabler-icons.io/i/settings --&gt;
                            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z&quot; /&gt;&lt;path d=&quot;M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0&quot; /&gt;&lt;/svg&gt;
                        &lt;/a&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;div class=&quot;tab-content&quot;&gt;
                    &lt;div class=&quot;tab-pane active show&quot; id=&quot;tabs-home-1&quot;&gt;
                        &lt;h4&gt;Home tab&lt;/h4&gt;
                        &lt;div&gt;Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;tab-pane&quot; id=&quot;tabs-profile-1&quot;&gt;
                        &lt;h4&gt;Profile tab&lt;/h4&gt;
                        &lt;div&gt;Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;tab-pane&quot; id=&quot;tabs-settings-1&quot;&gt;
                        &lt;h4&gt;Settings tab&lt;/h4&gt;
                        &lt;div&gt;Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    
    &lt;div class=&quot;col-lg-4&quot;&gt;
        2
        &lt;div class=&quot;card shadow mb-4&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;ul class=&quot;nav nav-tabs card-header-tabs flex-row-reverse&quot; data-bs-toggle=&quot;tabs&quot;&gt;
                    &lt;li class=&quot;nav-item&quot;&gt;
                        &lt;a href=&quot;#tabs-home-2&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot;&gt;Home&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;nav-item&quot;&gt;
                        &lt;a href=&quot;#tabs-profile-2&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot;&gt;Profile&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;nav-item me-auto&quot;&gt;
                        &lt;a href=&quot;#tabs-settings-2&quot; class=&quot;nav-link&quot; title=&quot;Settings&quot; data-bs-toggle=&quot;tab&quot;&gt;&lt;!-- Download SVG icon from http://tabler-icons.io/i/settings --&gt;
                            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z&quot; /&gt;&lt;path d=&quot;M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0&quot; /&gt;&lt;/svg&gt;
                        &lt;/a&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;div class=&quot;tab-content&quot;&gt;
                    &lt;div class=&quot;tab-pane active show&quot; id=&quot;tabs-home-2&quot;&gt;
                        &lt;h4&gt;Home tab&lt;/h4&gt;
                        &lt;div&gt;Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;tab-pane&quot; id=&quot;tabs-profile-2&quot;&gt;
                        &lt;h4&gt;Profile tab&lt;/h4&gt;
                        &lt;div&gt;Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;tab-pane&quot; id=&quot;tabs-settings-2&quot;&gt;
                        &lt;h4&gt;Settings tab&lt;/h4&gt;
                        &lt;div&gt;Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    
    &lt;div class=&quot;col-lg-4&quot;&gt;
        3
        &lt;div class=&quot;card shadow mb-4&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;ul class=&quot;nav nav-tabs card-header-tabs&quot; data-bs-toggle=&quot;tabs&quot;&gt;
                    &lt;li class=&quot;nav-item&quot;&gt;
                        &lt;a href=&quot;#tabs-home-3&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot;&gt;&lt;!-- Download SVG icon from http://tabler-icons.io/i/home --&gt;
                            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon me-2&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M5 12l-2 0l9 -9l9 9l-2 0&quot; /&gt;&lt;path d=&quot;M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7&quot; /&gt;&lt;path d=&quot;M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6&quot; /&gt;&lt;/svg&gt;
                            Home&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;nav-item&quot;&gt;
                        &lt;a href=&quot;#tabs-profile-3&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot;&gt;&lt;!-- Download SVG icon from http://tabler-icons.io/i/user --&gt;
                            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon me-2&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0&quot; /&gt;&lt;path d=&quot;M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2&quot; /&gt;&lt;/svg&gt;
                            Profile&lt;/a&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;div class=&quot;tab-content&quot;&gt;
                    &lt;div class=&quot;tab-pane active show&quot; id=&quot;tabs-home-3&quot;&gt;
                        &lt;h4&gt;Home tab&lt;/h4&gt;
                        &lt;div&gt;Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;tab-pane&quot; id=&quot;tabs-profile-3&quot;&gt;
                        &lt;h4&gt;Profile tab&lt;/h4&gt;
                        &lt;div&gt;Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;


    
    &lt;div class=&quot;col-lg-4&quot;&gt;
        4
        &lt;div class=&quot;card shadow mb-4&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;ul class=&quot;nav nav-tabs card-header-tabs&quot; data-bs-toggle=&quot;tabs&quot;&gt;
                    &lt;li class=&quot;nav-item&quot;&gt;
                        &lt;a href=&quot;#tabs-home-4&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot;&gt;Home&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;nav-item&quot;&gt;
                        &lt;a href=&quot;#tabs-profile-4&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot;&gt;Profile&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;!-- &lt;li class=&quot;nav-item dropdown&quot;&gt; --&gt;
                    &lt;li class=&quot;nav-item&quot;&gt;
                        &lt;a class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; role=&quot;button&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;
                        Action
                        &lt;/a&gt;
                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;
                        Another action
                        &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;div class=&quot;tab-content&quot;&gt;
                    &lt;div class=&quot;tab-pane active show&quot; id=&quot;tabs-home-4&quot;&gt;
                        &lt;h4&gt;Home tab&lt;/h4&gt;
                        &lt;div&gt;Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;tab-pane&quot; id=&quot;tabs-profile-4&quot;&gt;
                        &lt;h4&gt;Profile tab&lt;/h4&gt;
                        &lt;div&gt;Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    
    &lt;div class=&quot;col-lg-4&quot;&gt;
        5
        &lt;div class=&quot;card shadow mb-4&quot;&gt;
        &lt;div class=&quot;card-header&quot;&gt;
            &lt;ul class=&quot;nav nav-tabs card-header-tabs nav-fill&quot; data-bs-toggle=&quot;tabs&quot;&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#tabs-home-5&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot;&gt;Home&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#tabs-profile-5&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot;&gt;Profile&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#tabs-activity-5&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot;&gt;Activity&lt;/a&gt;
            &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            &lt;div class=&quot;tab-content&quot;&gt;
            &lt;div class=&quot;tab-pane active show&quot; id=&quot;tabs-home-5&quot;&gt;
                &lt;h4&gt;Home tab&lt;/h4&gt;
                &lt;div&gt;Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;tabs-profile-5&quot;&gt;
                &lt;h4&gt;Profile tab&lt;/h4&gt;
                &lt;div&gt;Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;tabs-activity-5&quot;&gt;
                &lt;h4&gt;Activity tab&lt;/h4&gt;
                &lt;div&gt;Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus&lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    
    &lt;div class=&quot;col-lg-4&quot;&gt;
        6
        &lt;div class=&quot;card shadow mb-4&quot;&gt;
        &lt;div class=&quot;card-header&quot;&gt;
            &lt;ul class=&quot;nav nav-tabs card-header-tabs nav-fill&quot; data-bs-toggle=&quot;tabs&quot;&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#tabs-home-6&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot;&gt;Home&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#tabs-profile-6&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot;&gt;Profile&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#tabs-activity-6&quot; class=&quot;nav-link disabled&quot; data-bs-toggle=&quot;tab&quot;&gt;Disabled&lt;/a&gt;
            &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            &lt;div class=&quot;tab-content&quot;&gt;
            &lt;div class=&quot;tab-pane active show&quot; id=&quot;tabs-home-6&quot;&gt;
                &lt;h4&gt;Home tab&lt;/h4&gt;
                &lt;div&gt;Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;tabs-profile-6&quot;&gt;
                &lt;h4&gt;Profile tab&lt;/h4&gt;
                &lt;div&gt;Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed&lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;


    &lt;div class=&quot;col-lg-4&quot;&gt;
        7
        &lt;div class=&quot;card shadow mb-4&quot;&gt;
        &lt;div class=&quot;card-header&quot;&gt;
            &lt;ul class=&quot;nav nav-tabs card-header-tabs nav-fill&quot; data-bs-toggle=&quot;tabs&quot;&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#tabs-home-7&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot;&gt;&lt;!-- Download SVG icon from http://tabler-icons.io/i/home --&gt;
                &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon me-2&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M5 12l-2 0l9 -9l9 9l-2 0&quot; /&gt;&lt;path d=&quot;M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7&quot; /&gt;&lt;path d=&quot;M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6&quot; /&gt;&lt;/svg&gt;
                Home&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#tabs-profile-7&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot;&gt;&lt;!-- Download SVG icon from http://tabler-icons.io/i/user --&gt;
                &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon me-2&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0&quot; /&gt;&lt;path d=&quot;M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2&quot; /&gt;&lt;/svg&gt;
                Profile&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a href=&quot;#tabs-activity-7&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot;&gt;&lt;!-- Download SVG icon from http://tabler-icons.io/i/activity --&gt;
                &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon me-2&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;/&gt;&lt;path d=&quot;M3 12h4l3 8l4 -16l3 8h4&quot; /&gt;&lt;/svg&gt;
                Activity&lt;/a&gt;
            &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            &lt;div class=&quot;tab-content&quot;&gt;
            &lt;div class=&quot;tab-pane active show&quot; id=&quot;tabs-home-7&quot;&gt;
                &lt;h4&gt;Home tab&lt;/h4&gt;
                &lt;div&gt;Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;tabs-profile-7&quot;&gt;
                &lt;h4&gt;Profile tab&lt;/h4&gt;
                &lt;div&gt;Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;tab-pane&quot; id=&quot;tabs-activity-7&quot;&gt;
                &lt;h4&gt;Activity tab&lt;/h4&gt;
                &lt;div&gt;Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus&lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    
    &lt;div class=&quot;col-lg-4&quot;&gt;
        8
        &lt;div class=&quot;card shadow mb-4&quot;&gt;
            &lt;div class=&quot;card-header&quot;&gt;
                &lt;ul class=&quot;nav nav-tabs card-header-tabs&quot; data-bs-toggle=&quot;tabs&quot;&gt;
                    &lt;li class=&quot;nav-item&quot;&gt;
                        &lt;a href=&quot;#tabs-home-8&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot;&gt;Home&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;nav-item&quot;&gt;
                        &lt;a href=&quot;#tabs-profile-8&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot;&gt;Profile&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;nav-item&quot;&gt;
                        &lt;a href=&quot;#tabs-activity-8&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot;&gt;Activity&lt;/a&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;div class=&quot;tab-content&quot;&gt;
                    &lt;div class=&quot;tab-pane fade active show&quot; id=&quot;tabs-home-8&quot;&gt;
                        &lt;h4&gt;Home tab&lt;/h4&gt;
                        &lt;div&gt;Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;tabs-profile-8&quot;&gt;
                        &lt;h4&gt;Profile tab&lt;/h4&gt;
                        &lt;div&gt;Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;tabs-activity-8&quot;&gt;
                        &lt;h4&gt;Activity tab&lt;/h4&gt;
                        &lt;div&gt;Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;


&lt;/div&gt;
                    </code>
                </pre>
        </div>
    </div>





</div>

@endsection