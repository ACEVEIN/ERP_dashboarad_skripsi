@extends('master')

@section('content')



<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form</h1>
    </div>

        <!-- Basic Card Example -->
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-white">Type of Form</h6>
            </div>

            <div class="card-body">
                <h4 class="h4 mb-0 text-gray-800">Input Form</h4>
                <br>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <!-- <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"> -->
                        <textarea rows="4" cols="50" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <!-- <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"> -->
                        <textarea rows="4" cols="50" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
                <p class="pt-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#InputForm" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                </p>
                <div class="container mt-4">            
                    <div class="code-snippet collapse" id="InputForm">
                        <div class="code-title">Code</div>
                        <button class="copy-button">Copy Code</button>
                            <pre>
                                <code class="language-html">
&lt;form&gt;
    &lt;div class=&quot;form-row&quot;&gt;
        &lt;div class=&quot;form-group col-md-6&quot;&gt;
        &lt;label for=&quot;inputEmail&quot;&gt;Email&lt;/label&gt;
        &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail&quot; placeholder=&quot;Email&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group col-md-6&quot;&gt;
        &lt;label for=&quot;inputPassword&quot;&gt;Password&lt;/label&gt;
        &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword&quot; placeholder=&quot;Password&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;label for=&quot;inputAddress&quot;&gt;Address&lt;/label&gt;
        &lt;!-- &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress&quot; placeholder=&quot;1234 Main St&quot;&gt; --&gt;
        &lt;textarea rows=&quot;4&quot; cols=&quot;50&quot; type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress&quot; placeholder=&quot;1234 Main St&quot;&gt;&lt;/textarea&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;label for=&quot;inputAddress2&quot;&gt;Address 2&lt;/label&gt;
        &lt;!-- &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress2&quot; placeholder=&quot;Apartment, studio, or floor&quot;&gt; --&gt;
        &lt;textarea rows=&quot;4&quot; cols=&quot;50&quot; type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress&quot; placeholder=&quot;1234 Main St&quot;&gt;&lt;/textarea&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-row&quot;&gt;
        &lt;div class=&quot;form-group col-md-6&quot;&gt;
        &lt;label for=&quot;inputCity&quot;&gt;City&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputCity&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group col-md-4&quot;&gt;
        &lt;label for=&quot;inputState&quot;&gt;State&lt;/label&gt;
        &lt;select id=&quot;inputState&quot; class=&quot;form-control&quot;&gt;
            &lt;option selected&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
        &lt;/select&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group col-md-2&quot;&gt;
        &lt;label for=&quot;inputZip&quot;&gt;Zip&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputZip&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;div class=&quot;form-check&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;gridCheck&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;gridCheck&quot;&gt;
            Check me out
        &lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
&lt;/form&gt;
                                </code>
                            </pre>
                    </div>
                </div>





                <br> <br>

    
            

                <h4 class="h4 mb-0 text-gray-800">Email & Password</h4>
                <br>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <p class="pt-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#EmailPassword" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                  </p>
                  <div class="container mt-4">            
                        <div class="code-snippet collapse" id="EmailPassword">
                            <div class="code-title">Code</div>
                            <button class="copy-button">Copy Code</button>
                                <pre>
                                    <code class="language-html">
&lt;form&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;label for=&quot;exampleInputEmail1&quot;&gt;Email address&lt;/label&gt;
        &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Enter email&quot;&gt;
        &lt;small id=&quot;emailHelp&quot; class=&quot;form-text text-muted&quot;&gt;We'll never share your email with anyone else.&lt;/small&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;label for=&quot;exampleInputPassword1&quot;&gt;Password&lt;/label&gt;
        &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot; placeholder=&quot;Password&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;div class=&quot;form-check&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;exampleCheck1&quot;&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;exampleCheck1&quot;&gt;Check me out&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;
                                    </code>
                                </pre>
                        </div>
                  </div>



                <br> <br>


                
                <h4 class="h4 mb-0 text-gray-800">Readonly Form</h4>
                <br>
                <form>
                    <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                </form>
                <p class="pt-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ReadonlyForm" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                  </p>
                  <div class="container mt-4">            
                        <div class="code-snippet collapse" id="ReadonlyForm">
                            <div class="code-title">Code</div>
                            <button class="copy-button">Copy Code</button>
                                <pre>
                                    <code class="language-html">
&lt;form&gt;
    &lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Readonly input here&hellip;&quot; readonly&gt;
&lt;/form&gt;
                                    </code>
                                </pre>
                        </div>
                  </div>


                <br><br>




                <h4 class="h4 mb-0 text-gray-800">Disable Form</h4>
                <br>
                <form>
                    <fieldset disabled>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheckDisabled1" disabled>
                            <label class="custom-control-label" for="customCheckDisabled1">Check this custom checkbox</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" name="radioDisabled" id="customRadioDisabled2" class="custom-control-input" disabled>
                            <label class="custom-control-label" for="customRadioDisabled2">Toggle this custom radio</label>
                        </div>
                        
                        <br>

                        <div class="form-group">
                            <label for="disabledTextInput">Disabled input</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                        </div>
                        <div class="form-group">
                            <label for="disabledSelect">Disabled select menu</label>
                            <select id="disabledSelect" class="form-control">
                                <option>Disabled select</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                                <label class="form-check-label" for="disabledFieldsetCheck">
                                    Can't check this
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
                <p class="pt-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#DisableForm" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                  </p>
                  <div class="container mt-4">            
                        <div class="code-snippet collapse" id="DisableForm">
                            <div class="code-title">Code</div>
                            <button class="copy-button">Copy Code</button>
                                <pre>
                                    <code class="language-html">
&lt;form&gt;
    &lt;fieldset disabled&gt;
        &lt;div class=&quot;custom-control custom-checkbox&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheckDisabled1&quot; disabled&gt;
            &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheckDisabled1&quot;&gt;Check this custom checkbox&lt;/label&gt;
        &lt;/div&gt;

        &lt;div class=&quot;custom-control custom-radio&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;radioDisabled&quot; id=&quot;customRadioDisabled2&quot; class=&quot;custom-control-input&quot; disabled&gt;
            &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadioDisabled2&quot;&gt;Toggle this custom radio&lt;/label&gt;
        &lt;/div&gt;
        
        &lt;br&gt;

        &lt;div class=&quot;form-group&quot;&gt;
            &lt;label for=&quot;disabledTextInput&quot;&gt;Disabled input&lt;/label&gt;
            &lt;input type=&quot;text&quot; id=&quot;disabledTextInput&quot; class=&quot;form-control&quot; placeholder=&quot;Disabled input&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group&quot;&gt;
            &lt;label for=&quot;disabledSelect&quot;&gt;Disabled select menu&lt;/label&gt;
            &lt;select id=&quot;disabledSelect&quot; class=&quot;form-control&quot;&gt;
                &lt;option&gt;Disabled select&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group&quot;&gt;
            &lt;div class=&quot;form-check&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;disabledFieldsetCheck&quot; disabled&gt;
                &lt;label class=&quot;form-check-label&quot; for=&quot;disabledFieldsetCheck&quot;&gt;
                    Can't check this
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
    &lt;/fieldset&gt;
&lt;/form&gt;
                                    </code>
                                </pre>
                        </div>
                  </div>



                <br><br>




                <h4 class="h4 mb-0 text-gray-800">Validation Form</h4>
                <br>
                <form>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationServer01">First name</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationServer02">Last name</label>
                            <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationServerUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                </div>
                                <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer03">City</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="validationServer04">State</label>
                            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="validationServer05">Zip</label>
                            <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit Form</button>
                </form>
                <p class="pt-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ValidationForm" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                  </p>
                  <div class="container mt-4">            
                        <div class="code-snippet collapse" id="ValidationForm">
                            <div class="code-title">Code</div>
                            <button class="copy-button">Copy Code</button>
                                <pre>
                                    <code class="language-html">
&lt;form&gt;
    &lt;div class=&quot;form-row&quot;&gt;
        &lt;div class=&quot;col-md-4 mb-3&quot;&gt;
            &lt;label for=&quot;validationServer01&quot;&gt;First name&lt;/label&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control is-valid&quot; id=&quot;validationServer01&quot; placeholder=&quot;First name&quot; value=&quot;Mark&quot; required&gt;
            &lt;div class=&quot;valid-feedback&quot;&gt;
                Looks good!
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;col-md-4 mb-3&quot;&gt;
            &lt;label for=&quot;validationServer02&quot;&gt;Last name&lt;/label&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control is-valid&quot; id=&quot;validationServer02&quot; placeholder=&quot;Last name&quot; value=&quot;Otto&quot; required&gt;
            &lt;div class=&quot;valid-feedback&quot;&gt;
                Looks good!
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;col-md-4 mb-3&quot;&gt;
            &lt;label for=&quot;validationServerUsername&quot;&gt;Username&lt;/label&gt;
            &lt;div class=&quot;input-group&quot;&gt;
                &lt;div class=&quot;input-group-prepend&quot;&gt;
                    &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend3&quot;&gt;@&lt;/span&gt;
                &lt;/div&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control is-invalid&quot; id=&quot;validationServerUsername&quot; placeholder=&quot;Username&quot; aria-describedby=&quot;inputGroupPrepend3&quot; required&gt;
                &lt;div class=&quot;invalid-feedback&quot;&gt;
                    Please choose a username.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;form-row&quot;&gt;
        &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
            &lt;label for=&quot;validationServer03&quot;&gt;City&lt;/label&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control is-invalid&quot; id=&quot;validationServer03&quot; placeholder=&quot;City&quot; required&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;
                Please provide a valid city.
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;col-md-3 mb-3&quot;&gt;
            &lt;label for=&quot;validationServer04&quot;&gt;State&lt;/label&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control is-invalid&quot; id=&quot;validationServer04&quot; placeholder=&quot;State&quot; required&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;
                Please provide a valid state.
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;col-md-3 mb-3&quot;&gt;
            &lt;label for=&quot;validationServer05&quot;&gt;Zip&lt;/label&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control is-invalid&quot; id=&quot;validationServer05&quot; placeholder=&quot;Zip&quot; required&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;
                Please provide a valid zip.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;form-group&quot;&gt;
        &lt;div class=&quot;form-check&quot;&gt;
            &lt;input class=&quot;form-check-input is-invalid&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;invalidCheck3&quot; required&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck3&quot;&gt;
                Agree to terms and conditions
            &lt;/label&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;
                You must agree before submitting.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit Form&lt;/button&gt;
&lt;/form&gt;
                                    </code>
                                </pre>
                        </div>
                  </div>



                <br><br>



                <h4 class="h4 mb-0 text-gray-800">Check Input Form</h4>
                <br>
                <form class="was-validated">
                    <div class="mb-3">
                        <label for="validationTextarea">Textarea</label>
                        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                        <div class="invalid-feedback">
                        Please enter a message in the textarea.
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                        <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                        <div class="invalid-feedback">Example invalid feedback text</div>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                        <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                        <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                        <div class="invalid-feedback">More example invalid feedback text</div>
                    </div>
                </form>
                    <p>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#CheckInputForm" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fa-solid fa-code"></i>
                            View Source Code
                    </button>
                    </p>
                    <div class="container mt-4">            
                        <div class="code-snippet collapse" id="CheckInputForm">
                            <div class="code-title">Code</div>
                            <button class="copy-button">Copy Code</button>
                                <pre>
                                    <code class="language-html">
&lt;form class=&quot;was-validated&quot;&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
        &lt;label for=&quot;validationTextarea&quot;&gt;Textarea&lt;/label&gt;
        &lt;textarea class=&quot;form-control is-invalid&quot; id=&quot;validationTextarea&quot; placeholder=&quot;Required example textarea&quot; required&gt;&lt;/textarea&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;
        Please enter a message in the textarea.
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;custom-control custom-checkbox mb-3&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customControlValidation1&quot; required&gt;
        &lt;label class=&quot;custom-control-label&quot; for=&quot;customControlValidation1&quot;&gt;Check this custom checkbox&lt;/label&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid feedback text&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;custom-control custom-radio&quot;&gt;
        &lt;input type=&quot;radio&quot; class=&quot;custom-control-input&quot; id=&quot;customControlValidation2&quot; name=&quot;radio-stacked&quot; required&gt;
        &lt;label class=&quot;custom-control-label&quot; for=&quot;customControlValidation2&quot;&gt;Toggle this custom radio&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;custom-control custom-radio mb-3&quot;&gt;
        &lt;input type=&quot;radio&quot; class=&quot;custom-control-input&quot; id=&quot;customControlValidation3&quot; name=&quot;radio-stacked&quot; required&gt;
        &lt;label class=&quot;custom-control-label&quot; for=&quot;customControlValidation3&quot;&gt;Or toggle this other custom radio&lt;/label&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;More example invalid feedback text&lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
                                    </code>
                                </pre>
                        </div>
                    </div>


                    <br><br>


                    
                    <h4 class="h4 mb-0 text-gray-800">Selection Form</h4>
                    <br>
                    
                    <div class="mb-3">
                        <select class="custom-select" required>
                        <option value="">Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>

                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>

                    <div class="mb-3">
                        <div class="input-group is-invalid">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validatedInputGroupPrepend">@</span>
                        </div>
                        <input type="text" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                        </div>
                        <div class="invalid-feedback">
                        Example invalid input group feedback
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="input-group is-invalid">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="validatedInputGroupSelect">Options</label>
                        </div>
                        <select class="custom-select" id="validatedInputGroupSelect" required>
                            <option value="">Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        </div>
                        <div class="invalid-feedback">
                        Example invalid input group feedback
                        </div>
                    </div>

                    <div class="input-group is-invalid">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
                        <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                        </div>
                        <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="button">Button</button>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        Example invalid input group feedback
                    </div>
                </form>
                <p class="pt-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#CheckInputForm" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                  </p>
                  <div class="container mt-4">            
                        <div class="code-snippet collapse" id="CheckInputForm">
                            <div class="code-title">Code</div>
                            <button class="copy-button">Copy Code</button>
                                <pre>
                                    <code class="language-html">
&lt;form class=&quot;was-validated&quot;&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
        &lt;label for=&quot;validationTextarea&quot;&gt;Textarea&lt;/label&gt;
        &lt;textarea class=&quot;form-control is-invalid&quot; id=&quot;validationTextarea&quot; placeholder=&quot;Required example textarea&quot; required&gt;&lt;/textarea&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;
        Please enter a message in the textarea.
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;custom-control custom-checkbox mb-3&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customControlValidation1&quot; required&gt;
        &lt;label class=&quot;custom-control-label&quot; for=&quot;customControlValidation1&quot;&gt;Check this custom checkbox&lt;/label&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid feedback text&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;custom-control custom-radio&quot;&gt;
        &lt;input type=&quot;radio&quot; class=&quot;custom-control-input&quot; id=&quot;customControlValidation2&quot; name=&quot;radio-stacked&quot; required&gt;
        &lt;label class=&quot;custom-control-label&quot; for=&quot;customControlValidation2&quot;&gt;Toggle this custom radio&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;custom-control custom-radio mb-3&quot;&gt;
        &lt;input type=&quot;radio&quot; class=&quot;custom-control-input&quot; id=&quot;customControlValidation3&quot; name=&quot;radio-stacked&quot; required&gt;
        &lt;label class=&quot;custom-control-label&quot; for=&quot;customControlValidation3&quot;&gt;Or toggle this other custom radio&lt;/label&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;More example invalid feedback text&lt;/div&gt;
    &lt;/div&gt;



    &lt;br&gt;&lt;br&gt;


    
    &lt;h4 class=&quot;h4 mb-0 text-gray-800&quot;&gt;Selection Form&lt;/h4&gt;
    &lt;br&gt;
    
    &lt;div class=&quot;mb-3&quot;&gt;
        &lt;select class=&quot;custom-select&quot; required&gt;
        &lt;option value=&quot;&quot;&gt;Choose...&lt;/option&gt;
        &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
        &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid custom select feedback&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;custom-file mb-3&quot;&gt;
        &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;validatedCustomFile&quot; required&gt;
        &lt;label class=&quot;custom-file-label&quot; for=&quot;validatedCustomFile&quot;&gt;Choose file...&lt;/label&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid custom file feedback&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mb-3&quot;&gt;
        &lt;div class=&quot;input-group is-invalid&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;validatedInputGroupPrepend&quot;&gt;@&lt;/span&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control is-invalid&quot; aria-describedby=&quot;validatedInputGroupPrepend&quot; required&gt;
        &lt;/div&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;
        Example invalid input group feedback
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mb-3&quot;&gt;
        &lt;div class=&quot;input-group is-invalid&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
            &lt;label class=&quot;input-group-text&quot; for=&quot;validatedInputGroupSelect&quot;&gt;Options&lt;/label&gt;
        &lt;/div&gt;
        &lt;select class=&quot;custom-select&quot; id=&quot;validatedInputGroupSelect&quot; required&gt;
            &lt;option value=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
            &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
        &lt;/select&gt;
        &lt;/div&gt;
        &lt;div class=&quot;invalid-feedback&quot;&gt;
        Example invalid input group feedback
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;input-group is-invalid&quot;&gt;
        &lt;div class=&quot;custom-file&quot;&gt;
        &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;validatedInputGroupCustomFile&quot; required&gt;
        &lt;label class=&quot;custom-file-label&quot; for=&quot;validatedInputGroupCustomFile&quot;&gt;Choose file...&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;input-group-append&quot;&gt;
        &lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;
        Example invalid input group feedback
    &lt;/div&gt;
&lt;/form&gt;
                                    </code>
                                </pre>
                        </div>
                  </div>



                <br><br>



                    
                <h4 class="h4 mb-0 text-gray-800">Selection Form</h4>
                <br>
                {{-- <label class="form-label">Payment method</label> --}}
                <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
                    <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="form-payment" value="visa" class="form-selectgroup-input">
                        
                        <div class="form-selectgroup-label d-flex align-items-center p-3">
                            <div class="me-3">
                                <span class="form-selectgroup-check"></span>
                            </div>
                            <div>
                                <span class="payment payment-provider-visa payment-xs me-2"></span>
                                ending in <strong>7998</strong>
                            </div>
                        </div>  
                    </label>

                    <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="form-payment" value="mastercard" class="form-selectgroup-input" checked>
                        <div class="form-selectgroup-label d-flex align-items-center p-3">
                            <div class="me-3">
                                <span class="form-selectgroup-check"></span>
                            </div>
                            <div>
                                <span class="payment payment-provider-mastercard payment-xs me-2"></span>
                                ending in <strong>2807</strong>
                            </div>
                        </div>
                    </label>

                    <label class="form-selectgroup-item flex-fill">
                        <input type="radio" name="form-payment" value="paypal" class="form-selectgroup-input">
                        <div class="form-selectgroup-label d-flex align-items-center p-3">
                            <div class="me-3">
                                <span class="form-selectgroup-check"></span>
                            </div>
                            <div>
                                <span class="payment payment-provider-paypal payment-xs me-2"></span>
                            </div>
                        </div>
                    </label>

                </div>
                <p class="pt-3">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#SelectionForm" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa-solid fa-code"></i>
                        View Source Code
                    </button>
                  </p>
                  <div class="container mt-4">            
                        <div class="code-snippet collapse" id="SelectionForm">
                            <div class="code-title">Code</div>
                            <button class="copy-button">Copy Code</button>
                                <pre>
                                    <code class="language-html">
&lt;label class=&quot;form-label&quot;&gt;Payment method&lt;/label&gt;
&lt;div class=&quot;form-selectgroup form-selectgroup-boxes d-flex flex-column&quot;&gt;
    &lt;label class=&quot;form-selectgroup-item flex-fill&quot;&gt;
        &lt;input type=&quot;radio&quot; name=&quot;form-payment&quot; value=&quot;visa&quot; class=&quot;form-selectgroup-input&quot;&gt;
        
        &lt;div class=&quot;form-selectgroup-label d-flex align-items-center p-3&quot;&gt;
            &lt;div class=&quot;me-3&quot;&gt;
                &lt;span class=&quot;form-selectgroup-check&quot;&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;span class=&quot;payment payment-provider-visa payment-xs me-2&quot;&gt;&lt;/span&gt;
                ending in &lt;strong&gt;7998&lt;/strong&gt;
            &lt;/div&gt;
        &lt;/div&gt;  
    &lt;/label&gt;

    &lt;label class=&quot;form-selectgroup-item flex-fill&quot;&gt;
        &lt;input type=&quot;radio&quot; name=&quot;form-payment&quot; value=&quot;mastercard&quot; class=&quot;form-selectgroup-input&quot; checked&gt;
        &lt;div class=&quot;form-selectgroup-label d-flex align-items-center p-3&quot;&gt;
            &lt;div class=&quot;me-3&quot;&gt;
                &lt;span class=&quot;form-selectgroup-check&quot;&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;span class=&quot;payment payment-provider-mastercard payment-xs me-2&quot;&gt;&lt;/span&gt;
                ending in &lt;strong&gt;2807&lt;/strong&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/label&gt;

    &lt;label class=&quot;form-selectgroup-item flex-fill&quot;&gt;
        &lt;input type=&quot;radio&quot; name=&quot;form-payment&quot; value=&quot;paypal&quot; class=&quot;form-selectgroup-input&quot;&gt;
        &lt;div class=&quot;form-selectgroup-label d-flex align-items-center p-3&quot;&gt;
            &lt;div class=&quot;me-3&quot;&gt;
                &lt;span class=&quot;form-selectgroup-check&quot;&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;span class=&quot;payment payment-provider-paypal payment-xs me-2&quot;&gt;&lt;/span&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/label&gt;

&lt;/div&gt;
                                    </code>
                                </pre>
                        </div>
                  </div>

            </div>
        </div>


</div>


<script>
  function handleClick() {
    alert('Button clicked!');
    }
</script>


@endsection






























 <!-- <form class="was-validated">
                        <h4 class="h4 mb-0 text-gray-800">Check input form</h4>
                        <br>
                            <div class="mb-3">
                                <label for="validationTextarea">Textarea</label>
                                <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                                <div class="invalid-feedback">
                                Please enter a message in the textarea.
                                </div>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                                <div class="invalid-feedback">Example invalid feedback text</div>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>


                                <br>

                            <div class="form-group">
                            <h4 class="h4 mb-0 text-gray-800">Selection Form</h4> 
                            <br>
                                <select class="custom-select" required>
                                <option value="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                                <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                            </form> -->