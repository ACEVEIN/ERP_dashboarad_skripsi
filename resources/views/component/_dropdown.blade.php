@extends('master')

@section('content')


</style>

<div class="container-fluid">

  <div class="row">

    <div class="col-lg-6">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dropdown Select2</h1>
      </div>
     
  
      <h5>Dropdown With Search</h5>
      <select class="js-example-basic-single custom-select" name="state">
        <option value="AL">Alabama</option>
        ...
        <option value="WY">Wyoming</option>
        <option value="skills">Skills</option>
        
        <option value="angular">Angular</option>
        <option value="css">CSS</option>
        <option value="design">Graphic Design</option>
        <option value="ember">Ember</option>
        <option value="html">HTML</option>
        <option value="ia">Information Architecture</option>
        <option value="javascript">Javascript</option>
        <option value="mech">Mechanical Engineering</option>
        <option value="meteor">Meteor</option>
        <option value="node">NodeJS</option>
        <option value="plumbing">Plumbing</option>
        <option value="python">Python</option>
        <option value="rails">Rails</option>
        <option value="react">React</option>
        <option value="repair">Kitchen Repair</option>
        <option value="ruby">Ruby</option>
        <option value="ui">UI Design</option>
        <option value="ux">User Experience</option>
      </select>

      <br><br>

      <h5>Dropdown Multiple</h5>
      <select class="js-example-basic-single custom-select" name="states" multiple="multiple">
        <option value="AL">Alabama</option>
        ...
        <option value="WY">Wyoming</option>
        <option value="skills">Skills</option>
        
        <option value="angular">Angular</option>
        <option value="css">CSS</option>
        <option value="design">Graphic Design</option>
        <option value="ember">Ember</option>
        <option value="html">HTML</option>
        <option value="ia">Information Architecture</option>
        <option value="javascript">Javascript</option>
        <option value="mech">Mechanical Engineering</option>
        <option value="meteor">Meteor</option>
        <option value="node">NodeJS</option>
        <option value="plumbing">Plumbing</option>
        <option value="python">Python</option>
        <option value="rails">Rails</option>
        <option value="react">React</option>
        <option value="repair">Kitchen Repair</option>
        <option value="ruby">Ruby</option>
        <option value="ui">UI Design</option>
        <option value="ux">User Experience</option>
      </select>

      <br><br>

      <h5>Display Options With Scrollbar</h5>
      <select class="js-example-disabled-results custom-select" multiple required>
          <option value="skills">Skills</option>
          <option value="angular">Angular</option>
          <option value="css">CSS</option>
          <option value="design">Graphic Design</option>
          <option value="ember">Ember</option>
          <option value="html">HTML</option>
          <option value="ia">Information Architecture</option>
          <option value="javascript">Javascript</option>
          <option value="mech">Mechanical Engineering</option>
          <option value="meteor">Meteor</option>
          <option value="node">NodeJS</option>
          <option value="plumbing">Plumbing</option>
          <option value="python">Python</option>
          <option value="rails">Rails</option>
          <option value="react">React</option>
          <option value="repair">Kitchen Repair</option>
          <option value="ruby">Ruby</option>
          <option value="ui">UI Design</option>
          <option value="ux">User Experience</option>
      </select>
    
      <br><br>

      <h5>Selection Dropdown Without Search</h5>
      <select class="js-example-disabled-results custom-select" required>
        <option value="">Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <div class="invalid-feedback">Example invalid custom select feedback</div>

      <br><br>
    
      <h5>Dropdown Disabled</h5>
      <select class="js-example-disabled-results custom-select">
        <option value="one">First</option>
        <option class="dropdown-item"value="two" disabled="disabled">Second (disabled)</option>
        <option value="three">Third</option>
      </select>
      
       <p class="pt-4 text-center">
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
&lt;h5&gt;Dropdown With Search&lt;/h5&gt;
&lt;select class=&quot;js-example-basic-single custom-select&quot; name=&quot;state&quot;&gt;
  &lt;option value=&quot;AL&quot;&gt;Alabama&lt;/option&gt;
  ...
  &lt;option value=&quot;WY&quot;&gt;Wyoming&lt;/option&gt;
  &lt;option value=&quot;skills&quot;&gt;Skills&lt;/option&gt;
  
  &lt;option value=&quot;angular&quot;&gt;Angular&lt;/option&gt;
  &lt;option value=&quot;css&quot;&gt;CSS&lt;/option&gt;
  &lt;option value=&quot;design&quot;&gt;Graphic Design&lt;/option&gt;
  &lt;option value=&quot;ember&quot;&gt;Ember&lt;/option&gt;
  &lt;option value=&quot;html&quot;&gt;HTML&lt;/option&gt;
  &lt;option value=&quot;ia&quot;&gt;Information Architecture&lt;/option&gt;
  &lt;option value=&quot;javascript&quot;&gt;Javascript&lt;/option&gt;
  &lt;option value=&quot;mech&quot;&gt;Mechanical Engineering&lt;/option&gt;
  &lt;option value=&quot;meteor&quot;&gt;Meteor&lt;/option&gt;
  &lt;option value=&quot;node&quot;&gt;NodeJS&lt;/option&gt;
  &lt;option value=&quot;plumbing&quot;&gt;Plumbing&lt;/option&gt;
  &lt;option value=&quot;python&quot;&gt;Python&lt;/option&gt;
  &lt;option value=&quot;rails&quot;&gt;Rails&lt;/option&gt;
  &lt;option value=&quot;react&quot;&gt;React&lt;/option&gt;
  &lt;option value=&quot;repair&quot;&gt;Kitchen Repair&lt;/option&gt;
  &lt;option value=&quot;ruby&quot;&gt;Ruby&lt;/option&gt;
  &lt;option value=&quot;ui&quot;&gt;UI Design&lt;/option&gt;
  &lt;option value=&quot;ux&quot;&gt;User Experience&lt;/option&gt;
&lt;/select&gt;

&lt;br&gt;&lt;br&gt;

&lt;h5&gt;Dropdown Multiple&lt;/h5&gt;
&lt;select class=&quot;js-example-basic-single custom-select&quot; name=&quot;states&quot; multiple=&quot;multiple&quot;&gt;
  &lt;option value=&quot;AL&quot;&gt;Alabama&lt;/option&gt;
  ...
  &lt;option value=&quot;WY&quot;&gt;Wyoming&lt;/option&gt;
  &lt;option value=&quot;skills&quot;&gt;Skills&lt;/option&gt;
  
  &lt;option value=&quot;angular&quot;&gt;Angular&lt;/option&gt;
  &lt;option value=&quot;css&quot;&gt;CSS&lt;/option&gt;
  &lt;option value=&quot;design&quot;&gt;Graphic Design&lt;/option&gt;
  &lt;option value=&quot;ember&quot;&gt;Ember&lt;/option&gt;
  &lt;option value=&quot;html&quot;&gt;HTML&lt;/option&gt;
  &lt;option value=&quot;ia&quot;&gt;Information Architecture&lt;/option&gt;
  &lt;option value=&quot;javascript&quot;&gt;Javascript&lt;/option&gt;
  &lt;option value=&quot;mech&quot;&gt;Mechanical Engineering&lt;/option&gt;
  &lt;option value=&quot;meteor&quot;&gt;Meteor&lt;/option&gt;
  &lt;option value=&quot;node&quot;&gt;NodeJS&lt;/option&gt;
  &lt;option value=&quot;plumbing&quot;&gt;Plumbing&lt;/option&gt;
  &lt;option value=&quot;python&quot;&gt;Python&lt;/option&gt;
  &lt;option value=&quot;rails&quot;&gt;Rails&lt;/option&gt;
  &lt;option value=&quot;react&quot;&gt;React&lt;/option&gt;
  &lt;option value=&quot;repair&quot;&gt;Kitchen Repair&lt;/option&gt;
  &lt;option value=&quot;ruby&quot;&gt;Ruby&lt;/option&gt;
  &lt;option value=&quot;ui&quot;&gt;UI Design&lt;/option&gt;
  &lt;option value=&quot;ux&quot;&gt;User Experience&lt;/option&gt;
&lt;/select&gt;

&lt;br&gt;&lt;br&gt;

&lt;h5&gt;Display Options With Scrollbar&lt;/h5&gt;
&lt;select class=&quot;js-example-disabled-results custom-select&quot; multiple required&gt;
    &lt;option value=&quot;skills&quot;&gt;Skills&lt;/option&gt;
    &lt;option value=&quot;angular&quot;&gt;Angular&lt;/option&gt;
    &lt;option value=&quot;css&quot;&gt;CSS&lt;/option&gt;
    &lt;option value=&quot;design&quot;&gt;Graphic Design&lt;/option&gt;
    &lt;option value=&quot;ember&quot;&gt;Ember&lt;/option&gt;
    &lt;option value=&quot;html&quot;&gt;HTML&lt;/option&gt;
    &lt;option value=&quot;ia&quot;&gt;Information Architecture&lt;/option&gt;
    &lt;option value=&quot;javascript&quot;&gt;Javascript&lt;/option&gt;
    &lt;option value=&quot;mech&quot;&gt;Mechanical Engineering&lt;/option&gt;
    &lt;option value=&quot;meteor&quot;&gt;Meteor&lt;/option&gt;
    &lt;option value=&quot;node&quot;&gt;NodeJS&lt;/option&gt;
    &lt;option value=&quot;plumbing&quot;&gt;Plumbing&lt;/option&gt;
    &lt;option value=&quot;python&quot;&gt;Python&lt;/option&gt;
    &lt;option value=&quot;rails&quot;&gt;Rails&lt;/option&gt;
    &lt;option value=&quot;react&quot;&gt;React&lt;/option&gt;
    &lt;option value=&quot;repair&quot;&gt;Kitchen Repair&lt;/option&gt;
    &lt;option value=&quot;ruby&quot;&gt;Ruby&lt;/option&gt;
    &lt;option value=&quot;ui&quot;&gt;UI Design&lt;/option&gt;
    &lt;option value=&quot;ux&quot;&gt;User Experience&lt;/option&gt;
&lt;/select&gt;

&lt;br&gt;&lt;br&gt;

&lt;h5&gt;Selection Dropdown Without Search&lt;/h5&gt;
&lt;select class=&quot;js-example-disabled-results custom-select&quot; required&gt;
  &lt;option value=&quot;&quot;&gt;Open this select menu&lt;/option&gt;
  &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
  &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
  &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;
&lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid custom select feedback&lt;/div&gt;

&lt;br&gt;&lt;br&gt;

&lt;h5&gt;Dropdown Disabled&lt;/h5&gt;
&lt;select class=&quot;js-example-disabled-results custom-select&quot;&gt;
  &lt;option value=&quot;one&quot;&gt;First&lt;/option&gt;
  &lt;option class=&quot;dropdown-item&quot;value=&quot;two&quot; disabled=&quot;disabled&quot;&gt;Second (disabled)&lt;/option&gt;
  &lt;option value=&quot;three&quot;&gt;Third&lt;/option&gt;
&lt;/select&gt;
                        </code>
                    </pre>
            </div>
      </div>
      
    </div>

    <div class="col-lg-6">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dropdown Bootstrap</h1>
      </div>

      
      <h5>Dropdown Menu Display</h5>
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown button
      </button>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
      </div> 
      
      <br><br>

      <h5>Dropdown Menu Disable</h5>
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Dropdown button
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Regular link</a></li>
          <li><a class="dropdown-item disabled">Disabled link</a></li>
          <li><a class="dropdown-item" href="#">Another link</a></li>
        </ul>
      </div>

      <br><br>

      <h5>Page Selection Dropdown</h5>
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
          1
      </button>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="#">1</a>
          <a class="dropdown-item" href="#">2</a>
          <a class="dropdown-item" href="#">3</a>
          <a class="dropdown-item" href="#">4</a>
      </div>
    
      <br><br>

      <h5>Reference Dropdown</h5>
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Reference</button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false" data-reference="parent">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
    
      <div class="btn-group-vertical px-5">
        <button type="button" class="btn btn-primary">Reference</button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false" data-reference="parent">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>

      <br><br>

      <h5>Reference Dropdown With Scrollbar</h5>
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Reference</button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false" data-reference="parent">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        
        <div class="dropdown-menu">
          <select name="skills"  class="uifluiddropdown" multiple>
            <option value="skills">Skills</option>
            <option value="angular">Angular</option>
            <option value="css">CSS</option>
            <option value="design">Graphic Design</option>
            <option value="ember">Ember</option>
            <option value="html">HTML</option>
            <option value="ia">Information Architecture</option>
            <option value="javascript">Javascript</option>
            <option value="mech">Mechanical Engineering</option>
            <option value="meteor">Meteor</option>
            <option value="node">NodeJS</option>
            <option value="plumbing">Plumbing</option>
            <option value="python">Python</option>
            <option value="rails">Rails</option>
            <option value="react">React</option>
            <option value="repair">Kitchen Repair</option>
            <option value="ruby">Ruby</option>
            <option value="ui">UI Design</option>
            <option value="ux">User Experience</option>
          </select>
        </div>
      </div>
    





      <p class="pt-5 text-center">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#dropdownCol2" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa-solid fa-code"></i>
            View Source Code
        </button>
      </p>
      <div class="container mt-4">            
            <div class="code-snippet collapse" id="dropdownCol2">
                <div class="code-title">Alert Without icon</div>
                <button class="copy-button">Copy Code</button>
                    <pre>
                        <code class="language-html">
&lt;h5&gt;Dropdown Menu Display&lt;/h5&gt;
&lt;button class=&quot;btn btn-primary dropdown-toggle&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
    Dropdown button
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
&lt;/div&gt; 

&lt;br&gt;&lt;br&gt;

&lt;h5&gt;Dropdown Menu Disable&lt;/h5&gt;
&lt;div class=&quot;dropdown&quot;&gt;
&lt;button class=&quot;btn btn-primary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot;&gt;
  Dropdown button
&lt;/button&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item disabled&quot;&gt;Disabled link&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;

&lt;br&gt;&lt;br&gt;

&lt;h5&gt;Page Selection Dropdown&lt;/h5&gt;
&lt;button class=&quot;btn btn-primary dropdown-toggle&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
    1
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;
&lt;/div&gt;

&lt;br&gt;&lt;br&gt;

&lt;h5&gt;Reference Dropdown&lt;/h5&gt;
&lt;div class=&quot;btn-group&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Reference&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split&quot; data-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot; data-reference=&quot;parent&quot;&gt;
    &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
  &lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
      &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;btn-group-vertical px-5&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Reference&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split&quot; data-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot; data-reference=&quot;parent&quot;&gt;
    &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
  &lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
      &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;br&gt;&lt;br&gt;

&lt;h5&gt;Reference Dropdown With Scrollbar&lt;/h5&gt;
&lt;div class=&quot;btn-group&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Reference&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split&quot; data-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot; data-reference=&quot;parent&quot;&gt;
    &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
  &lt;/button&gt;
  
  &lt;div class=&quot;dropdown-menu&quot;&gt;
    &lt;select name=&quot;skills&quot;  class=&quot;uifluiddropdown&quot; multiple&gt;
      &lt;option value=&quot;skills&quot;&gt;Skills&lt;/option&gt;
      &lt;option value=&quot;angular&quot;&gt;Angular&lt;/option&gt;
      &lt;option value=&quot;css&quot;&gt;CSS&lt;/option&gt;
      &lt;option value=&quot;design&quot;&gt;Graphic Design&lt;/option&gt;
      &lt;option value=&quot;ember&quot;&gt;Ember&lt;/option&gt;
      &lt;option value=&quot;html&quot;&gt;HTML&lt;/option&gt;
      &lt;option value=&quot;ia&quot;&gt;Information Architecture&lt;/option&gt;
      &lt;option value=&quot;javascript&quot;&gt;Javascript&lt;/option&gt;
      &lt;option value=&quot;mech&quot;&gt;Mechanical Engineering&lt;/option&gt;
      &lt;option value=&quot;meteor&quot;&gt;Meteor&lt;/option&gt;
      &lt;option value=&quot;node&quot;&gt;NodeJS&lt;/option&gt;
      &lt;option value=&quot;plumbing&quot;&gt;Plumbing&lt;/option&gt;
      &lt;option value=&quot;python&quot;&gt;Python&lt;/option&gt;
      &lt;option value=&quot;rails&quot;&gt;Rails&lt;/option&gt;
      &lt;option value=&quot;react&quot;&gt;React&lt;/option&gt;
      &lt;option value=&quot;repair&quot;&gt;Kitchen Repair&lt;/option&gt;
      &lt;option value=&quot;ruby&quot;&gt;Ruby&lt;/option&gt;
      &lt;option value=&quot;ui&quot;&gt;UI Design&lt;/option&gt;
      &lt;option value=&quot;ux&quot;&gt;User Experience&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
&lt;/div&gt;
                        </code>
                    </pre>
            </div>
      </div>

      
    </div>

  </div>





  <div class="d-flex flex-row align-items-center justify-content-between mt-4">
    <div class="">
      <h5 class="d-flex justify-content-start mb-2">
        Dropdown Start
      </h5>
    
      <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>


    <div class="">
      <h5 class="d-flex justify-content-center mb-4">
        Dropdown Center
      </h5>
      <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>

    <div class="">
      <h5 class="d-flex justify-content-end mb-2">
        Dropdown End
      </h5>
      
      <ul class="nav nav-pills justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>


  <p class="mt-4 text-center">
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#rowDropdown" aria-expanded="false" aria-controls="collapseExample">
        <i class="fa-solid fa-code"></i>
        View Source Code
    </button>
  </p>
  <div class="container mt-4">            
        <div class="code-snippet collapse" id="rowDropdown">
            <div class="code-title">Alert Without icon</div>
            <button class="copy-button">Copy Code</button>
                <pre>
                    <code class="language-html">
                    &lt;div class=&quot;&quot;&gt;
                      &lt;h5 class=&quot;d-flex justify-content-start mb-2&quot;&gt;
                        Dropdown Start
                      &lt;/h5&gt;
                    
                      &lt;ul class=&quot;nav nav-pills&quot;&gt;
                        &lt;li class=&quot;nav-item&quot;&gt;
                            &lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;nav-item dropdown&quot;&gt;
                            &lt;a class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; href=&quot;#&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
                            &lt;ul class=&quot;dropdown-menu&quot;&gt;
                            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;nav-item&quot;&gt;
                            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;nav-item&quot;&gt;
                            &lt;a class=&quot;nav-link disabled&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
                        &lt;/li&gt;
                      &lt;/ul&gt;
                    &lt;/div&gt;
                
                    &lt;div class=&quot;&quot;&gt;
                      &lt;h5 class=&quot;d-flex justify-content-center mb-2&quot;&gt;
                        Dropdown Center
                      &lt;/h5&gt;
                      &lt;ul class=&quot;nav nav-pills justify-content-center&quot;&gt;
                        &lt;li class=&quot;nav-item&quot;&gt;
                            &lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;nav-item&quot;&gt;
                            &lt;a class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; href=&quot;#&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
                            &lt;ul class=&quot;dropdown-menu&quot;&gt;
                            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;nav-item&quot;&gt;
                            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;nav-item&quot;&gt;
                            &lt;a class=&quot;nav-link disabled&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
                        &lt;/li&gt;
                      &lt;/ul&gt;
                    &lt;/div&gt;
                
                    &lt;div class=&quot;&quot;&gt;
                      &lt;h5 class=&quot;d-flex justify-content-end mb-2&quot;&gt;
                        Dropdown End
                      &lt;/h5&gt;
                      
                      &lt;ul class=&quot;nav nav-pills justify-content-end&quot;&gt;
                        &lt;li class=&quot;nav-item&quot;&gt;
                            &lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;nav-item&quot;&gt;
                            &lt;a class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; href=&quot;#&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
                            &lt;ul class=&quot;dropdown-menu&quot;&gt;
                            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;nav-item&quot;&gt;
                            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;nav-item&quot;&gt;
                            &lt;a class=&quot;nav-link disabled&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
                        &lt;/li&gt;
                      &lt;/ul&gt;
                    &lt;/div&gt;
                    </code>
                </pre>
        </div>
  </div>

  
  
<br>

</div>

@endsection