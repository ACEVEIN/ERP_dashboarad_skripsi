@extends('master')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Calendar</h1>
    </div>


    <div class="card w-50">
        <div class="card-body">
            <form action="" id="calendar">
                <div class="form-group">
                    <label for="Calendar">Calendar (date and time):</label>
                    <input type="datetime-local" class="form-control" id="Calendar" name="Calendar">
                </div>
            </form>
            <button type="submit" class="btn btn-primary" form="calendar">Submit</button>
        </div>
    </div>
    


    <br>

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
&lt;div class=&quot;card w-50&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
    &lt;form action=&quot;&quot; id=&quot;calendar&quot;&gt;
        &lt;div class=&quot;form-group&quot;&gt;
            &lt;label for=&quot;Calendar&quot;&gt;Calendar (date and time):&lt;/label&gt;
            &lt;input type=&quot;datetime-local&quot; class=&quot;form-control&quot; id=&quot;Calendar&quot; name=&quot;Calendar&quot;&gt;
        &lt;/div&gt;
    &lt;/form&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot; form=&quot;calendar&quot;&gt;Submit&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
                    </code>
                </pre>
        </div>
    </div>

</div>

{{-- <script>
    document.getElementById('calendarForm').addEventListener('submit', function(event) {
        const calendarInput = document.getElementById('Calendar');
        const selectedDateTime = new Date(calendarInput.value);
        const currentDateTime = new Date();
        
        if (selectedDateTime < currentDateTime) {
            event.preventDefault();
            alert('The selected date and time cannot be in the past.');
            calendarInput.style.border = '2px solid red';
        } else {
            calendarInput.style.border = '1px solid #ccc';
        }
    });
</script> --}}


@endsection