@extends('master')

@section('content')



<style>
    .color-menu {
  text-align: center;
}

.color-options {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 20px;
}

.color-option {
  width: 100px;
  height: 100px;
  margin: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  font-weight: bold;
  cursor: pointer;
  border-radius: 10px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.color-option:hover {
  transform: scale(1.1);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.color-pallet {
  width: 48px;
  height: 48px;
  /* margin: 10px; */
  display: flex;
  justify-content: center;
  align-items: center;
  /* color: white; */
  font-weight: bold;
  cursor: pointer;
  /* border-radius: 10px; */
  font-size: 10px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.color-pallet:hover {
  transform: scale(1.1);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}


</style>




<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Colors</h1>
    </div>


    <div class="row">

        <div class="col-lg-6">

            <!-- Default Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Custom Background Gradient Utilities</h6>
                </div>
                <div class="card-body">
                    <div class="color-menu">
                        <div class="color-options">
                            <div class="color-option" style="background-color: #151A48;" onclick="changeBackgroundColor('#151A48')" data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="hover" data-content="Color-primary.">Primary <br> -primary</div>
                            <div class="color-option" style="background-color: #D9D9D9;" onclick="changeBackgroundColor('#D9D9D9')" data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="hover" data-content="Color-secondary.">Secondary <br> -secondary</div>
                            <div class="color-option" style="background-color: #0A65FF;" onclick="changeBackgroundColor('#0A65FF')" data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="hover" data-content="Color-blue.">Blue <br> -blue</div>
                            <div class="color-option" style="background-color: #078141;" onclick="changeBackgroundColor('#078141')" data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="hover" data-content="Color-green.">Green <br> -green</div>
                            <div class="color-option" style="background-color: #FDB515;" onclick="changeBackgroundColor('#FDB515')" data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="hover" data-content="Color-warning.">warning <br> -warning</div>
                            <div class="color-option" style="background-color: #DF1E26;" onclick="changeBackgroundColor('#DF1E26')" data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="hover" data-content="Color-danger.">Danger <br> -danger</div>
                            <div class="color-option" style="background-color: #EC4176;" onclick="changeBackgroundColor('#EC4176')" data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="hover" data-content="Color-pink.">Pink <br> -pink</div>
                            <div class="color-option" style="background-color: #84D65A;" onclick="changeBackgroundColor('#84D65A')" data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="hover" data-content="Color-success.">Success <br> -success</div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Bootstrap Color</h6>
                </div>
                <div class="card-body">
                    
                    <div class="row">    
                        <div class="col">
                            <div class="p-3 mb-2 bg-primary text-white rounded">.bg-primary</div>
                            <div class="p-3 mb-2 bg-secondary text-white rounded">.bg-secondary</div>
                            <div class="p-3 mb-2 bg-success text-white rounded">.bg-success</div>
                            <div class="p-3 mb-2 bg-danger text-white rounded">.bg-danger</div>
                            <div class="p-3 mb-2 bg-warning text-dark rounded">.bg-warning</div>
                        </div>
                        <div class="col">
                            <div class="p-3 mb-2 bg-info text-white rounded">.bg-info</div>
                            <div class="p-3 mb-2 bg-light text-dark rounded">.bg-light</div>
                            <div class="p-3 mb-2 bg-dark text-white rounded">.bg-dark</div>
                            <div class="p-3 mb-2 bg-white text-dark rounded">.bg-white</div>
                            <div class="p-3 mb-2 bg-transparent text-dark rounded">.bg-transparent</div>
                        </div>
                    </div>   
                </div>
            </div>
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#bootstrapColor" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-code"></i>
                    View Source Code
                </button>
              </p>
              <div class="container mt-4">            
                    <div class="code-snippet collapse" id="bootstrapColor">
                        <div class="code-title">Alert with icon</div>
                        <button class="copy-button">Copy Code</button>
                            <pre>
                                <code class="language-html">
&lt;div class=&quot;p-3 mb-2 bg-primary text-white&quot;&gt;.bg-primary&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-secondary text-white&quot;&gt;.bg-secondary&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-success text-white&quot;&gt;.bg-success&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-danger text-white&quot;&gt;.bg-danger&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-warning text-dark&quot;&gt;.bg-warning&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-info text-white&quot;&gt;.bg-info&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-light text-dark&quot;&gt;.bg-light&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-dark text-white&quot;&gt;.bg-dark&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-white text-dark&quot;&gt;.bg-white&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-transparent text-dark&quot;&gt;.bg-transparent&lt;/div&gt;
                                </code>
                            </pre>
                    </div>
              </div>




         

        </div>

        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Color Pallet</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h3>Click to See The Entire Color</h3>
                    </div>
        
                    <div id="accordion">
                        <div class="color-options">
            
                            <a href="#collapseCardPrimary" class="color-option py-3" style="background-color: #151A48;" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-white">#151A48</h6>
                            </a>

                            <a href="#collapseCardSecondary" class="color-option py-3" style="background-color: #D9D9D9;" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-white">#D9D9D9</h6>
                            </a>

                            <a href="#collapseCardBlue" class="color-option py-3" style="background-color: #0A65FF;" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-white">#0A65FF</h6>
                            </a>

                            <a href="#collapseCardGreen" class="color-option py-3" style="background-color: #078141;" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-white">#078141</h6>
                            </a>

                            <a href="#collapseCardYellow" class="color-option py-3" style="background-color: #FDB515;" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-white">#FDB515</h6>
                            </a>

                            <a href="#collapseCardRed" class="color-option py-3" style="background-color: #DF1E26;" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-white">#DF1E26</h6>
                            </a>

                            <a href="#collapseCardPink" class="color-option py-3" style="background-color: #EC4176;" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-white">#EC4176</h6>
                            </a>

                            <a href="#collapseCardLightGreen" class="color-option py-3" style="background-color: #84D65A;" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-white">#84D65A</h6>
                            </a>
                        </div>

                
                        <!-- Primary -->
                        <div class="collapse" id="collapseCardPrimary" data-parent="#accordion">
                            <div class="color-options">
                                <div class="color-pallet text-white" style="background-color: #151a48;" onclick="changeBackgroundColor('#151a48')">#151a48</div>
                                <div class="color-pallet text-white" style="background-color: #131741;" onclick="changeBackgroundColor('#131741')">#131741</div>
                                <div class="color-pallet text-white" style="background-color: #11153a;" onclick="changeBackgroundColor('#11153a')">#11153a</div>
                                <div class="color-pallet text-white" style="background-color: #0f1232;" onclick="changeBackgroundColor('#0f1232')">#0f1232</div>
                                <div class="color-pallet text-white" style="background-color: #0d102b;" onclick="changeBackgroundColor('#0d102b')">#0d102b</div>
                                <div class="color-pallet text-white" style="background-color: #0b0d24;" onclick="changeBackgroundColor('#0b0d24')">#0b0d24</div>
                                <div class="color-pallet text-white" style="background-color: #080a1d;" onclick="changeBackgroundColor('#080a1d')">#080a1d</div>
                                <div class="color-pallet text-white" style="background-color: #060816;" onclick="changeBackgroundColor('#060816')">#060816</div>
                                <div class="color-pallet text-white" style="background-color: #04050e;" onclick="changeBackgroundColor('#04050e')">#04050e</div>
                                <div class="color-pallet text-white" style="background-color: #020307;" onclick="changeBackgroundColor('#020307')">#020307</div>
                                <div class="color-pallet text-white" style="background-color: #000000;" onclick="changeBackgroundColor('#000000')">#000000</div>
                            </div>
                            <div class="color-options">
                                <div class="color-pallet text-black" style="background-color: #151a48;" onclick="changeBackgroundColor('#151a48')">#151a48</div>
                                <div class="color-pallet text-black" style="background-color: #2c315a;" onclick="changeBackgroundColor('#2c315a')">#2c315a</div>
                                <div class="color-pallet text-black" style="background-color: #44486d;" onclick="changeBackgroundColor('#44486d')">#44486d</div>
                                <div class="color-pallet text-black" style="background-color: #5b5f7f;" onclick="changeBackgroundColor('#5b5f7f')">#5b5f7f</div>
                                <div class="color-pallet text-black" style="background-color: #737691;" onclick="changeBackgroundColor('#737691')">#737691</div>
                                <div class="color-pallet text-black" style="background-color: #8a8da4;" onclick="changeBackgroundColor('#8a8da4')">#8a8da4</div>
                                <div class="color-pallet text-black" style="background-color: #a1a3b6;" onclick="changeBackgroundColor('#a1a3b6')">#a1a3b6</div>
                                <div class="color-pallet text-black" style="background-color: #b9bac8;" onclick="changeBackgroundColor('#b9bac8')">#b9bac8</div>
                                <div class="color-pallet text-black" style="background-color: #d0d1da;" onclick="changeBackgroundColor('#d0d1da')">#d0d1da</div>
                                <div class="color-pallet text-black" style="background-color: #e8e8ed;" onclick="changeBackgroundColor('#e8e8ed')">#e8e8ed</div>
                                <div class="color-pallet text-black" style="background-color: #ffffff;" onclick="changeBackgroundColor('#ffffff')">#ffffff</div>
                            </div>
                        </div>

                        <!-- Secondary -->
                        <div class="collapse" id="collapseCardSecondary" data-parent="#accordion">
                            <div class="color-options">
                                <div class="color-pallet text-white" style="background-color: #d9d9d9;" onclick="changeBackgroundColor('#d9d9d9')">#d9d9d9</div>
                                <div class="color-pallet text-white" style="background-color: #c3c3c3;" onclick="changeBackgroundColor('#c3c3c3')">#c3c3c3</div>
                                <div class="color-pallet text-white" style="background-color: #aeaeae;" onclick="changeBackgroundColor('#aeaeae')">#aeaeae</div>
                                <div class="color-pallet text-white" style="background-color: #989898;" onclick="changeBackgroundColor('#989898')">#989898</div>
                                <div class="color-pallet text-white" style="background-color: #828282;" onclick="changeBackgroundColor('#828282')">#828282</div>
                                <div class="color-pallet text-white" style="background-color: #6d6d6d;" onclick="changeBackgroundColor('#6d6d6d')">#6d6d6d</div>
                                <div class="color-pallet text-white" style="background-color: #575757;" onclick="changeBackgroundColor('#575757')">#575757</div>
                                <div class="color-pallet text-white" style="background-color: #414141;" onclick="changeBackgroundColor('#414141')">#414141</div>
                                <div class="color-pallet text-white" style="background-color: #2b2b2b;" onclick="changeBackgroundColor('#2b2b2b')">#2b2b2b</div>
                                <div class="color-pallet text-white" style="background-color: #161616;" onclick="changeBackgroundColor('#161616')">#161616</div>
                                <div class="color-pallet text-white" style="background-color: #000000;" onclick="changeBackgroundColor('#000000')">#000000</div>
                            </div>                                                                               
                            <div class="color-options">
                                <div class="color-pallet text-black" style="background-color: #d9d9d9;" onclick="changeBackgroundColor('#d9d9d9')">#d9d9d9</div>
                                <div class="color-pallet text-black" style="background-color: #dddddd;" onclick="changeBackgroundColor('#dddddd')">#dddddd</div>
                                <div class="color-pallet text-black" style="background-color: #e1e1e1;" onclick="changeBackgroundColor('#e1e1e1')">#e1e1e1</div>
                                <div class="color-pallet text-black" style="background-color: #e4e4e4;" onclick="changeBackgroundColor('#e4e4e4')">#e4e4e4</div>
                                <div class="color-pallet text-black" style="background-color: #e8e8e8;" onclick="changeBackgroundColor('#e8e8e8')">#e8e8e8</div>
                                <div class="color-pallet text-black" style="background-color: #ececec;" onclick="changeBackgroundColor('#ececec')">#ececec</div>
                                <div class="color-pallet text-black" style="background-color: #f0f0f0;" onclick="changeBackgroundColor('#f0f0f0')">#f0f0f0</div>
                                <div class="color-pallet text-black" style="background-color: #f4f4f4;" onclick="changeBackgroundColor('#f4f4f4')">#f4f4f4</div>
                                <div class="color-pallet text-black" style="background-color: #f7f7f7;" onclick="changeBackgroundColor('#f7f7f7')">#f7f7f7</div>
                                <div class="color-pallet text-black" style="background-color: #fbfbfb;" onclick="changeBackgroundColor('#fbfbfb')">#fbfbfb</div>
                                <div class="color-pallet text-black" style="background-color: #ffffff;" onclick="changeBackgroundColor('#ffffff')">#ffffff</div>
                            </div>
                        </div>
                    
                        <!-- Blue -->
                        <div class="collapse" id="collapseCardBlue" data-parent="#accordion">
                            <div class="color-options">
                                <div class="color-pallet text-white" style="background-color: #0a65ff;" onclick="changeBackgroundColor('#0a65ff')">#0a65ff</div>
                                <div class="color-pallet text-white" style="background-color: #095be6;" onclick="changeBackgroundColor('#095be6')">#095be6</div>
                                <div class="color-pallet text-white" style="background-color: #0851cc;" onclick="changeBackgroundColor('#0851cc')">#0851cc</div>
                                <div class="color-pallet text-white" style="background-color: #0747b3;" onclick="changeBackgroundColor('#0747b3')">#0747b3</div>
                                <div class="color-pallet text-white" style="background-color: #063d99;" onclick="changeBackgroundColor('#063d99')">#063d99</div>
                                <div class="color-pallet text-white" style="background-color: #053380;" onclick="changeBackgroundColor('#053380')">#053380</div>
                                <div class="color-pallet text-white" style="background-color: #042866;" onclick="changeBackgroundColor('#042866')">#042866</div>
                                <div class="color-pallet text-white" style="background-color: #031e4c;" onclick="changeBackgroundColor('#031e4c')">#031e4c</div>
                                <div class="color-pallet text-white" style="background-color: #021433;" onclick="changeBackgroundColor('#021433')">#021433</div>
                                <div class="color-pallet text-white" style="background-color: #010a19;" onclick="changeBackgroundColor('#010a19')">#010a19</div>
                                <div class="color-pallet text-white" style="background-color: #000000;" onclick="changeBackgroundColor('#000000')">#000000</div>
                            </div>
                            <div class="color-options">
                                <div class="color-pallet text-black" style="background-color: #0a65ff;" onclick="changeBackgroundColor('#0a65ff')">#0a65ff</div>
                                <div class="color-pallet text-black" style="background-color: #2374ff;" onclick="changeBackgroundColor('#2374ff')">#2374ff</div>
                                <div class="color-pallet text-black" style="background-color: #3b84ff;" onclick="changeBackgroundColor('#3b84ff')">#3b84ff</div>
                                <div class="color-pallet text-black" style="background-color: #5493ff;" onclick="changeBackgroundColor('#5493ff')">#5493ff</div>
                                <div class="color-pallet text-black" style="background-color: #6ca3ff;" onclick="changeBackgroundColor('#6ca3ff')">#6ca3ff</div>
                                <div class="color-pallet text-black" style="background-color: #85b2ff;" onclick="changeBackgroundColor('#85b2ff')">#85b2ff</div>
                                <div class="color-pallet text-black" style="background-color: #9dc1ff;" onclick="changeBackgroundColor('#9dc1ff')">#9dc1ff</div>
                                <div class="color-pallet text-black" style="background-color: #b6d1ff;" onclick="changeBackgroundColor('#b6d1ff')">#b6d1ff</div>
                                <div class="color-pallet text-black" style="background-color: #cee0ff;" onclick="changeBackgroundColor('#cee0ff')">#cee0ff</div>
                                <div class="color-pallet text-black" style="background-color: #e7f0ff;" onclick="changeBackgroundColor('#e7f0ff')">#e7f0ff</div>
                                <div class="color-pallet text-black" style="background-color: #ffffff;" onclick="changeBackgroundColor('#ffffff')">#ffffff</div>
                            </div>
                        </div>

                        <!-- Green -->
                        <div class="collapse" id="collapseCardGreen" data-parent="#accordion">
                            <div class="color-options">
                                <div class="color-pallet text-white" style="background-color: #078141;" onclick="changeBackgroundColor('#078141')">#078141</div>
                                <div class="color-pallet text-white" style="background-color: #06743b;" onclick="changeBackgroundColor('#06743b')">#06743b</div>
                                <div class="color-pallet text-white" style="background-color: #066734;" onclick="changeBackgroundColor('#066734')">#066734</div>
                                <div class="color-pallet text-white" style="background-color: #055a2e;" onclick="changeBackgroundColor('#055a2e')">#055a2e</div>
                                <div class="color-pallet text-white" style="background-color: #044d27;" onclick="changeBackgroundColor('#044d27')">#044d27</div>
                                <div class="color-pallet text-white" style="background-color: #044121;" onclick="changeBackgroundColor('#044121')">#044121</div>
                                <div class="color-pallet text-white" style="background-color: #03341a;" onclick="changeBackgroundColor('#03341a')">#03341a</div>
                                <div class="color-pallet text-white" style="background-color: #022713;" onclick="changeBackgroundColor('#022713')">#022713</div>
                                <div class="color-pallet text-white" style="background-color: #011a0d;" onclick="changeBackgroundColor('#011a0d')">#011a0d</div>
                                <div class="color-pallet text-white" style="background-color: #010d06;" onclick="changeBackgroundColor('#010d06')">#010d06</div>
                                <div class="color-pallet text-white" style="background-color: #000000;" onclick="changeBackgroundColor('#000000')">#000000</div>
                            </div>
                            <div class="color-options">
                                <div class="color-pallet text-black" style="background-color: #078141;" onclick="changeBackgroundColor('#078141')">#078141</div>
                                <div class="color-pallet text-black" style="background-color: #208e54;" onclick="changeBackgroundColor('#208e54')">#208e54</div>
                                <div class="color-pallet text-black" style="background-color: #399a67;" onclick="changeBackgroundColor('#399a67')">#399a67</div>
                                <div class="color-pallet text-black" style="background-color: #51a77a;" onclick="changeBackgroundColor('#51a77a')">#51a77a</div>
                                <div class="color-pallet text-black" style="background-color: #6ab38d;" onclick="changeBackgroundColor('#6ab38d')">#6ab38d</div>
                                <div class="color-pallet text-black" style="background-color: #83c0a0;" onclick="changeBackgroundColor('#83c0a0')">#83c0a0</div>
                                <div class="color-pallet text-black" style="background-color: #9ccdb3;" onclick="changeBackgroundColor('#9ccdb3')">#9ccdb3</div>
                                <div class="color-pallet text-black" style="background-color: #b5d9c6;" onclick="changeBackgroundColor('#b5d9c6')">#b5d9c6</div>
                                <div class="color-pallet text-black" style="background-color: #cde6d9;" onclick="changeBackgroundColor('#cde6d9')">#cde6d9</div>
                                <div class="color-pallet text-black" style="background-color: #e6f2ec;" onclick="changeBackgroundColor('#e6f2ec')">#e6f2ec</div>
                                <div class="color-pallet text-black" style="background-color: #ffffff;" onclick="changeBackgroundColor('#ffffff')">#ffffff</div>
                            </div>
                        </div>

                        <!-- Yellow -->
                        <div class="collapse" id="collapseCardYellow" data-parent="#accordion">
                            <div class="color-options">
                                <div class="color-pallet text-white" style="background-color: #fdb515;" onclick="changeBackgroundColor('#fdb515')">#fdb515</div>
                                <div class="color-pallet text-white" style="background-color: #e4a313;" onclick="changeBackgroundColor('#e4a313')">#e4a313</div>
                                <div class="color-pallet text-white" style="background-color: #ca9111;" onclick="changeBackgroundColor('#ca9111')">#ca9111</div>
                                <div class="color-pallet text-white" style="background-color: #b17f0f;" onclick="changeBackgroundColor('#b17f0f')">#b17f0f</div>
                                <div class="color-pallet text-white" style="background-color: #986d0d;" onclick="changeBackgroundColor('#986d0d')">#986d0d</div>
                                <div class="color-pallet text-white" style="background-color: #7f5b0b;" onclick="changeBackgroundColor('#7f5b0b')">#7f5b0b</div>
                                <div class="color-pallet text-white" style="background-color: #654808;" onclick="changeBackgroundColor('#654808')">#654808</div>
                                <div class="color-pallet text-white" style="background-color: #4c3606;" onclick="changeBackgroundColor('#4c3606')">#4c3606</div>
                                <div class="color-pallet text-white" style="background-color: #332404;" onclick="changeBackgroundColor('#332404')">#332404</div>
                                <div class="color-pallet text-white" style="background-color: #191202;" onclick="changeBackgroundColor('#191202')">#191202</div>
                                <div class="color-pallet text-white" style="background-color: #000000;" onclick="changeBackgroundColor('#000000')">#000000</div>
                            </div>
                            <div class="color-options">
                                <div class="color-pallet text-black" style="background-color: #fdb515;" onclick="changeBackgroundColor('#fdb515')">#fdb515</div>
                                <div class="color-pallet text-black" style="background-color: #fdbc2c;" onclick="changeBackgroundColor('#fdbc2c')">#fdbc2c</div>
                                <div class="color-pallet text-black" style="background-color: #fdc444;" onclick="changeBackgroundColor('#fdc444')">#fdc444</div>
                                <div class="color-pallet text-black" style="background-color: #fecb5b;" onclick="changeBackgroundColor('#fecb5b')">#fecb5b</div>
                                <div class="color-pallet text-black" style="background-color: #fed373;" onclick="changeBackgroundColor('#fed373')">#fed373</div>
                                <div class="color-pallet text-black" style="background-color: #feda8a;" onclick="changeBackgroundColor('#feda8a')">#feda8a</div>
                                <div class="color-pallet text-black" style="background-color: #fee1a1;" onclick="changeBackgroundColor('#fee1a1')">#fee1a1</div>
                                <div class="color-pallet text-black" style="background-color: #fee9b9;" onclick="changeBackgroundColor('#fee9b9')">#fee9b9</div>
                                <div class="color-pallet text-black" style="background-color: #fff0d0;" onclick="changeBackgroundColor('#fff0d0')">#fff0d0</div>
                                <div class="color-pallet text-black" style="background-color: #fff8e8;" onclick="changeBackgroundColor('#fff8e8')">#fff8e8</div>
                                <div class="color-pallet text-black" style="background-color: #ffffff;" onclick="changeBackgroundColor('#ffffff')">#ffffff</div>
                            </div>
                        </div>

                        <!-- Red -->
                        <div class="collapse" id="collapseCardRed" data-parent="#accordion">
                            <div class="color-options">
                                <div class="color-pallet text-white" style="background-color: #df1e26;" onclick="changeBackgroundColor('#df1e26')">#df1e26</div>
                                <div class="color-pallet text-white" style="background-color: #c91b22;" onclick="changeBackgroundColor('#c91b22')">#c91b22</div>
                                <div class="color-pallet text-white" style="background-color: #b2181e;" onclick="changeBackgroundColor('#b2181e')">#b2181e</div>
                                <div class="color-pallet text-white" style="background-color: #9c151b;" onclick="changeBackgroundColor('#9c151b')">#9c151b</div>
                                <div class="color-pallet ext-whitet" style="background-color: #861217;" onclick="changeBackgroundColor('#861217')">#861217</div>
                                <div class="color-pallet text-white" style="background-color: #700f13;" onclick="changeBackgroundColor('#700f13')">#700f13</div>
                                <div class="color-pallet text-white" style="background-color: #590c0f;" onclick="changeBackgroundColor('#590c0f')">#590c0f</div>
                                <div class="color-pallet text-white" style="background-color: #43090b;" onclick="changeBackgroundColor('#43090b')">#43090b</div>
                                <div class="color-pallet text-white" style="background-color: #2d0608;" onclick="changeBackgroundColor('#2d0608')">#2d0608</div>
                                <div class="color-pallet text-white" style="background-color: #160304;" onclick="changeBackgroundColor('#160304')">#160304</div>
                                <div class="color-pallet text-white" style="background-color: #000000;" onclick="changeBackgroundColor('#000000')">#000000</div>
                            </div>
                            <div class="color-options">
                                <div class="color-pallet text-black" style="background-color: #df1e26;" onclick="changeBackgroundColor('#df1e26')">#df1e26</div>
                                <div class="color-pallet text-black" style="background-color: #e2353c;" onclick="changeBackgroundColor('#e2353c')">#e2353c</div>
                                <div class="color-pallet text-black" style="background-color: #e54b51;" onclick="changeBackgroundColor('#e54b51')">#e54b51</div>
                                <div class="color-pallet text-black" style="background-color: #e96267;" onclick="changeBackgroundColor('#e96267')">#e96267</div>
                                <div class="color-pallet text-black" style="background-color: #ec787d;" onclick="changeBackgroundColor('#ec787d')">#ec787d</div>
                                <div class="color-pallet text-black" style="background-color: #ef8f93;" onclick="changeBackgroundColor('#ef8f93')">#ef8f93</div>
                                <div class="color-pallet text-black" style="background-color: #f2a5a8;" onclick="changeBackgroundColor('#f2a5a8')">#f2a5a8</div>
                                <div class="color-pallet text-black" style="background-color: #f5bcbe;" onclick="changeBackgroundColor('#f5bcbe')">#f5bcbe</div>
                                <div class="color-pallet text-black" style="background-color: #f9d2d4;" onclick="changeBackgroundColor('#f9d2d4')">#f9d2d4</div>
                                <div class="color-pallet text-black" style="background-color: #fce9e9;" onclick="changeBackgroundColor('#fce9e9')">#fce9e9</div>
                                <div class="color-pallet text-black" style="background-color: #ffffff;" onclick="changeBackgroundColor('#ffffff')">#ffffff</div>
                            </div>
                        </div>

                        <!-- Pink -->
                        <div class="collapse" id="collapseCardPink" data-parent="#accordion">
                            <div class="color-options">
                                <div class="color-pallet text-white" style="background-color: #f04474;" onclick="changeBackgroundColor('#f04474')">#f04474</div>
                                <div class="color-pallet text-white" style="background-color: #d83d68;" onclick="changeBackgroundColor('#d83d68')">#d83d68</div>
                                <div class="color-pallet text-white" style="background-color: #c0365d;" onclick="changeBackgroundColor('#c0365d')">#c0365d</div>
                                <div class="color-pallet text-white" style="background-color: #a83051;" onclick="changeBackgroundColor('#a83051')">#a83051</div>
                                <div class="color-pallet text-white" style="background-color: #902946;" onclick="changeBackgroundColor('#902946')">#902946</div>
                                <div class="color-pallet text-white" style="background-color: #78223a;" onclick="changeBackgroundColor('#78223a')">#78223a</div>
                                <div class="color-pallet text-white" style="background-color: #601b2e;" onclick="changeBackgroundColor('#601b2e')">#601b2e</div>
                                <div class="color-pallet text-white" style="background-color: #481423;" onclick="changeBackgroundColor('#481423')">#481423</div>
                                <div class="color-pallet text-white" style="background-color: #300e17;" onclick="changeBackgroundColor('#300e17')">#300e17</div>
                                <div class="color-pallet text-white" style="background-color: #18070c;" onclick="changeBackgroundColor('#18070c')">#18070c</div>
                                <div class="color-pallet text-white" style="background-color: #000000;" onclick="changeBackgroundColor('#000000')">#000000</div>
                            </div>
                            <div class="color-options">
                                <div class="color-pallet text-black" style="background-color: #f04474;" onclick="changeBackgroundColor('#f04474')">#f04474</div>
                                <div class="color-pallet text-black" style="background-color: #f25782;" onclick="changeBackgroundColor('#f25782')">#f25782</div>
                                <div class="color-pallet text-black" style="background-color: #f36990;" onclick="changeBackgroundColor('#f36990')">#f36990</div>
                                <div class="color-pallet text-black" style="background-color: #f57c9e;" onclick="changeBackgroundColor('#f57c9e')">#f57c9e</div>
                                <div class="color-pallet text-black" style="background-color: #f68fac;" onclick="changeBackgroundColor('#f68fac')">#f68fac</div>
                                <div class="color-pallet text-black" style="background-color: #f8a2ba;" onclick="changeBackgroundColor('#f8a2ba')">#f8a2ba</div>
                                <div class="color-pallet text-black" style="background-color: #f9b4c7;" onclick="changeBackgroundColor('#f9b4c7')">#f9b4c7</div>
                                <div class="color-pallet text-black" style="background-color: #fbc7d5;" onclick="changeBackgroundColor('#fbc7d5')">#fbc7d5</div>
                                <div class="color-pallet text-black" style="background-color: #fcdae3;" onclick="changeBackgroundColor('#fcdae3')">#fcdae3</div>
                                <div class="color-pallet text-black" style="background-color: #feecf1;" onclick="changeBackgroundColor('#feecf1')">#feecf1</div>
                                <div class="color-pallet text-black" style="background-color: #ffffff;" onclick="changeBackgroundColor('#ffffff')">#ffffff</div>
                            </div>
                        </div>

                        <!-- Light Green -->
                        <div class="collapse" id="collapseCardLightGreen" data-parent="#accordion">
                            <div class="color-options">
                                <div class="color-pallet text-white" style="background-color: #84d65a;" onclick="changeBackgroundColor('#84d65a')">#84d65a</div>
                                <div class="color-pallet text-white" style="background-color: #77c151;" onclick="changeBackgroundColor('#77c151')">#77c151</div>
                                <div class="color-pallet text-white" style="background-color: #6aab48;" onclick="changeBackgroundColor('#6aab48')">#6aab48</div>
                                <div class="color-pallet text-white" style="background-color: #5c963f;" onclick="changeBackgroundColor('#5c963f')">#5c963f</div>
                                <div class="color-pallet text-white" style="background-color: #4f8036;" onclick="changeBackgroundColor('#4f8036')">#4f8036</div>
                                <div class="color-pallet text-white" style="background-color: #426b2d;" onclick="changeBackgroundColor('#426b2d')">#426b2d</div>
                                <div class="color-pallet text-white" style="background-color: #355624;" onclick="changeBackgroundColor('#355624')">#355624</div>
                                <div class="color-pallet text-white" style="background-color: #28401b;" onclick="changeBackgroundColor('#28401b')">#28401b</div>
                                <div class="color-pallet text-white" style="background-color: #1a2b12;" onclick="changeBackgroundColor('#1a2b12')">#1a2b12</div>
                                <div class="color-pallet text-white" style="background-color: #0d1509;" onclick="changeBackgroundColor('#0d1509')">#0d1509</div>
                                <div class="color-pallet text-white" style="background-color: #000000;" onclick="changeBackgroundColor('#000000')">#000000</div>
                            </div>
                            <div class="color-options">
                                <div class="color-pallet text-black" style="background-color: #84d65a;" onclick="changeBackgroundColor('#84d65a')">#84d65a</div>
                                <div class="color-pallet text-black" style="background-color: #90da6b;" onclick="changeBackgroundColor('#90da6b')">#90da6b</div>
                                <div class="color-pallet text-black" style="background-color: #9dde7b;" onclick="changeBackgroundColor('#9dde7b')">#9dde7b</div>
                                <div class="color-pallet text-black" style="background-color: #a9e28c;" onclick="changeBackgroundColor('#a9e28c')">#a9e28c</div>
                                <div class="color-pallet text-black" style="background-color: #b5e69c;" onclick="changeBackgroundColor('#b5e69c')">#b5e69c</div>
                                <div class="color-pallet text-black" style="background-color: #c2ebad;" onclick="changeBackgroundColor('#c2ebad')">#c2ebad</div>
                                <div class="color-pallet text-black" style="background-color: #ceefbd;" onclick="changeBackgroundColor('#ceefbd')">#ceefbd</div>
                                <div class="color-pallet text-black" style="background-color: #daf3ce;" onclick="changeBackgroundColor('#daf3ce')">#daf3ce</div>
                                <div class="color-pallet text-black" style="background-color: #e6f7de;" onclick="changeBackgroundColor('#e6f7de')">#e6f7de</div>
                                <div class="color-pallet text-black" style="background-color: #f3fbef;" onclick="changeBackgroundColor('#f3fbef')">#f3fbef</div>
                                <div class="color-pallet text-black" style="background-color: #ffffff;" onclick="changeBackgroundColor('#ffffff')">#ffffff</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Border Color Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-white">Border Color</h6>
                </div>
                <div class="card-body">
                    <span class="btn border border-primary">text</span>
                    <span class="btn border border-secondary">text</span>
                    <span class="btn border border-success">text</span>
                    <span class="btn border border-danger">text</span>
                    <span class="btn border border-warning">text</span>
                    <span class="btn border border-info">text</span>
                    <span class="btn border border-light">text</span>
                    <span class="btn border border-dark">text</span>
                    <span class="btn border border-white">text</span>
                </div>
            </div>

            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#borderColor" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-code"></i>
                    View Source Code
                </button>
            </p>
              <div class="container mt-4">            
                    <div class="code-snippet collapse" id="borderColor">
                        <div class="code-title">Alert with icon</div>
                        <button class="copy-button">Copy Code</button>
                            <pre>
                                <code class="language-html">
&lt;span class=&quot;border border-primary&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-secondary&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-success&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-danger&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-warning&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-info&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-light&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-dark&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-white&quot;&gt;&lt;/span&gt;
                                </code>
                            </pre>
                    </div>
              </div>




        </div>


    </div>

</div>







@endsection