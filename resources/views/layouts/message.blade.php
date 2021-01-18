@if(Session::has('message'))
    <script>
        swal({
            title: "{{ Session::get('message') }}" ,
            timer:4000,
            showConfirmButton: false,
            type: "success"
        });
    </script>

@endif
@if(Session::has('error'))
    <script>
        swal({
            title: "{{ Session::get('error') }}" ,
            timer:2500,
            showConfirmButton: false,
            type: "error"
        });
    </script>

@endif

