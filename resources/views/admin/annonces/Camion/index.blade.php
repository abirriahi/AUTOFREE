@extends('admin.layouts.layoutss')
@section('header')
    {!! Html::style('admin/plugins/datatables/dataTables.bootstrap.css') !!}
@endsection
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listes Des Annonces</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="data" class="table table-bordered table-hover">
                            <thead>
                            <tr>




                                <th>marque</th>
                                 <th>modele</th>
                                <th>cathegorie</th>
                                <th>validation</th>
                                <th>enpublic</th>
                                 <th>magazine</th>

                                <th>Controle</th>

                            </thead>
                            <tbody>


                            </tbody>


                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section>

@endsection


@section('footer')
    {!! Html::script('admin/plugins/datatables/jquery.dataTables.min.js')!!}
    {!! Html::script('admin/plugins/datatables/jquery.dataTables.js')!!}
    {!! Html::script('admin/plugins/datatables/dataTables.bootstrap.min.js')!!}
    {!! Html::script('admin/plugins/datatables/dataTables.bootstrap.js')!!}

    <script type ='text/javascript'>




        var lastIdx = null;



        $('#data thead th').each( function () {
            if($(this).index()  < 6 && $(this).index() != 3 && $(this).index() != 2 && $(this).index() != 4&& $(this).index() != 5 ){

                var title = $(this).html();
                $(this).html( '<input type="text" class="' +  '" data-value="'+ $(this).index() +'" placeholder=" chercher '+title+'" />' );
            }else if($(this).index() == 2){
                $(this).html( '<select>' +
                        @foreach(existe() as $key =>  $articles)
                                '<option value="{{ $key }}">{{ $articles}}</option>'+
                        @endforeach
                                '</select>' );
            }
            /*numero de th dans le tableau apartir de 0 */
            else if($(this).index()  ==3){
                $(this).html( '<select>' +
                        @foreach(validation() as $key => $articles)
                                '<option value="{{ $key }}">{{ $articles }}</option>'+
                        @endforeach
                                '</select>' );
            }
            else if($(this).index()  ==4){
                $(this).html( '<select>' +
                        @foreach(enpublic() as $key => $articles)
                                '<option value="{{ $key }}">{{ $articles }}</option>'+
                        @endforeach
                                '</select>' );
            }
            else if($(this).index()  ==5){
                $(this).html( '<select>' +
                        @foreach(magazine() as $key => $articles)
                                '<option value="{{ $key }}">{{ $articles }}</option>'+
                        @endforeach
                                '</select>' );
            }

        } );




        var table = $('#data').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('/adminpanel/annonce/C/data') }}',
            columns: [




                {data: 'new_marque', name: 'new_marque'},
                {data: 'new_modele', name: 'new_modele'},
                {data: 'existe', name: 'existe'},
                {data: 'validation', name: 'validation'},
                {data: 'enpublic', name: 'enpublic'},
{data: 'magazine', name: 'magazine'},

                {data: 'control', name: ''}


            ],
            "language": {
                "url": "{{ Request::root()  }}/admin/cus/French.json"
            },

            "stateSave": false,
            "responsive": true,
            "order": [[0, 'desc']],
            "pagingType": "full_numbers",
            aLengthMenu: [
                [4, 50, 100, 200, -1],
                [4, 50, 100, 200, "Tous"]
            ],
            iDisplayLength: 25,
            fixedHeader: true,

            "oTableTools": {
                "aButtons": [


                    {
                        "sExtends": "csv",
                        "sButtonText": "csv",
                        "sCharSet": "utf16le"
                    },
                    {
                        "sExtends": "copy",
                        "sButtonText": "copier",
                    },
                    {
                        "sExtends": "print",
                        "sButtonText": "imprimer",
                        "mColumns": "visible",

                    }
                ],

                "sSwfPath": "{{ Request::root()  }}/admin/cus/copy_csv_xls_pdf.swf"
            },

            "dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> '
            ,initComplete: function ()
            {
                var r = $('#data tfoot tr');
                r.find('th').each(function(){
                    $(this).css('padding', 8);
                });
                $('#data thead').append(r);
                $('#search_0').css('text-align', 'center');
            }

        });

        table.columns().eq(0).each(function(colIdx) {
            $('input', table.column(colIdx).header()).on('keyup change', function() {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });




        });



        table.columns().eq(0).each(function(colIdx) {
            $('select', table.column(colIdx).header()).on('change', function() {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });

            $('select', table.column(colIdx).header()).on('click', function(e) {
                e.stopPropagation();
            });
        });


        $('#data tbody')
                .on( 'mouseover', 'td', function () {
                    var colIdx = table.cell(this).index().column;

                    if ( colIdx !== lastIdx ) {
                        $( table.cells().nodes() ).removeClass( 'highlight' );
                        $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
                    }
                } )
                .on( 'mouseleave', function () {
                    $( table.cells().nodes() ).removeClass( 'highlight' );
                } );




    </script>


@endsection