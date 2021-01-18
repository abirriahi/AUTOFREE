@extends('admin.layouts.layoutss')

@section('content')
    <table id="example2" class="table table-bordered table-hover">

        <thead>
        <tr>

            <th>image</th>
            <th>ok</th>

            <th>Paramétre</th>

        </thead>
        @foreach($pi as $pinfo)
        </tr>

        <td><a href="{{ url('/adminpanel/update/pubh/'.$pinfo->id.'/editpubh') }}">

                <img src="{{  Request::root().'/public/sliders/'.$pinfo->pub}}"style="


                      background-color: rgba(0, 0, 0, 0);
                       background-repeat: no-repeat;
                        background-size: cover;
                           background-position: center center;
                        width: 30%;
                          height: 10%;
                            opacity: 1;
                            visibility: inherit;

                      ">

                </a></td>

        @if($pinfo->ok ==0)
        <td><a href="{{ url('/adminpanel/update/pubh/'.$pinfo->id.'/editpubh') }}"></a>en attente </td>
        @else
           <td><a href="{{ url('/adminpanel/update/pubh/'.$pinfo->id.'/editpubh') }}"></a> valider</td>
        @endif
        <td>
            <a href="{{ url('/adminpanel/update/pubh/'.$pinfo->id.'/editpubh') }}">  <i class="fa fa-edit"></i></a>|


            <a href="{{ url('/adminpanel/update/pubh/'.$pinfo->id.'/deletepubh') }}"><i class="fa fa-trash-o"></i></a>|

        </td>


        @endforeach

    </table>

@endsection

@section('footer')
    {!! Html::script('admin/plugins/datatables/jquery.dataTables.min.js')!!}

    {!! Html::script('admin/plugins/datatables/dataTables.bootstrap.min.js')!!}
    <script type ='text/javascript'>
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true
        });
    </script>

    @endsection