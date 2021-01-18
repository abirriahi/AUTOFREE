@if(Session::has('flash_message'))
    <div class="container">
        <br>

        <div class="alert alert-success" id="mes">
            {{ Session::get('flash_message') }}
        </div>
    </div>

@endif

