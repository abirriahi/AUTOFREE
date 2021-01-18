@extends('back.layouts.app')

@section('title')

     Gerer les annonces

@endsection

@section('header')

  {!! Html::style('admin/plugins/datatables/dataTables.bootstrap.css') !!}

@endsection


@section('content')
    {!! Html::style('backend/plugins/datatables/dataTables.bootstrap.css') !!}


    <div id="content">

        <div class="inner">
            <div class="row">
                <div class="col-lg-12">


                    <h2> Data Tables </h2>



                </div>
            </div>

            <hr />


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>marque</th>
                                        <th>modele</th>
                                        <th>validation(s)</th>
                                        <th>choix selection </th>
                                        <th>parametre</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($p as $pinfo)


                                        <tr class="gradeU">
                                        <td>{{$pinfo->auto_marque_id}}</td>
                                        <td>{{$pinfo->auto_model_id}}</td>
                                            @if($pinfo->validation==0)


                                        <td> <a href="{{url('/adminpanel/change_status/'.$pinfo->id.'/1')}}"> invalide</a></td>
                                             </a>

                                            @else

                                                <td> <a href="{{url('/adminpanel/change_status/'.$pinfo->id.'/0')}}"> valide</a></td>
                                            @endif

                                            @if($pinfo->enpublic==0)
                                                <td> <a href="{{url('/adminpanel/change_choix/'.$pinfo->id.'/1')}}">  non selectionner</a></td>
                                            @else
                                                <td> <a href="{{url('/adminpanel/change_choix/'.$pinfo->id.'/0')}}">  selectionner</a></td>
                                            @endif
                                        <td class="center">U</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>




    </div>


@endsection



@section('footer')


  {!! Html::script('backend/plugins/datatables/jquery.dataTables.min.js') !!}
  {!! Html::script('backend/plugins/datatables/dataTables.bootstrap.min.js') !!}


@endsection
