{{ Form::open(['url' => '/camionsearch', 'method' => 'get']) }}

<div class="b-search__main-form wow zoomInUp" data-wow-delay="0.3s">
    <div class="row">
        <div class="col-xs-12 col-md-8">
            <br>
            <div class="m-firstSelects">
                <script type="text/javascript">
                    $(document).on('change','.camion_marque_id',function (){
                        var camion_marque = $('.camion_marque_id option:selected').val();
                        if(camion_marque > 0)
                        {

                            $.ajax({
                                url:"{{url('get/camion_model')}}",

                                dataType:'html',
                                type:'get',
                                data:{camion_marque_2:camion_marque},
                                success: function(data)
                                {
                                    $('.camion_model').html(data);
                                    $('.camion_model_data').removeClass('hidden');
                                }

                            });

                        }
                    });
                </script>

                <div class="col-xs-4">
                    <label style="
                              text-transform:capitalize;
                              font: 200 14px 'Open Sans',sans-serif;
                              text-align: right;
                               margin: 11px 0 0 0;
                              float: left;
                               display: block;"

                    >Marque




                    </label>
                    <?php
                    $get_camion_marque = App\Camion::groupBy('camion_marque')->where('validation',1)
                            ->distinct()->get(['camion_marque']);
                    ?>
                    {!! Form::select("camion_marque" ,
                     App\AutoMarque::whereIn('id',$get_camion_marque)->pluck('camion_marque','id')
                     , null ,array('id'=>'select1','class'=>'camion_marque_id','placeholder' => 'Tous' )) !!}


                </div>

                <div class="col-xs-4 ">
                    <label style="
                              text-transform:capitalize;
                              font: 200 14px 'Open Sans',sans-serif;
                              text-align: right;
                               margin: 11px 0 0 0;
                              float: left;
                               display: block;"

                    >Modele




                    </label>
                     <span class="camion_model">
                         <select  >
                             <option  selected="">Tous</option>
                         </select>
</span>
                </div>


                <div class="col-xs-4">
                    <label style="
                              text-transform:capitalize;
                              font: 200 14px 'Open Sans',sans-serif;
                              text-align: right;
                               margin: 11px 0 0 0;
                              float: left;
                               display: block;"

                    >Année




                    </label>
                    {!! Form::select("auto_year" ,auto_year() ,
                     null,array('placeholder' => 'Tous','id' => 'select1' ) ) !!}


                </div>
            </div>
            <div class="m-secondSelects">
                <div class="col-xs-4">
                    <label style="
                              text-transform:capitalize;
                              font: 200 14px 'Open Sans',sans-serif;
                              text-align: right;
                               margin: 11px 0 0 0;
                              float: left;
                               display: block;"

                    >Kilométres




                    </label>
                    {!! Form::select("auto_km" ,km() , null ,array(
                   'placeholder' => 'Tous','id' => 'select1')) !!}

                    
                </div>
                <div class="col-xs-4">
                    <label style="
                              text-transform:capitalize;
                              font: 200 14px 'Open Sans',sans-serif;
                              text-align: right;
                               margin: 11px 0 0 0;
                              float: left;
                               display: block;"

                    >Carburant




                    </label>
                    {!! Form::select("auto_carburan" ,auto_carburan() , null ,array(
                    'placeholder' => 'Tous','id' => 'select1')) !!}


                </div>
                <div class="col-xs-4">
                    <label style="
                              text-transform:capitalize;
                              font: 200 14px 'Open Sans',sans-serif;
                              text-align: right;
                               margin: 11px 0 0 0;
                              float: left;
                               display: block;"

                    >Carrosserie




                    </label>

                    {!! Form::select("autos_carrosserie" ,autos_carrosserie() , null ,array(
                       'placeholder' => 'Tous','id' => 'select1')) !!}


                </div>


            </div>


        </div>

        <div >
            <label  for="checkboxes-5">
                <input type="checkbox" name="expertiser" id="checkboxes-5" value="O">
                Expertiser
            </label>
        </div>
        <div class="col-md-4 col-xs-12 text-left s-noPadding">

            <div class="b-search__main-form-range">
                <label></label>
                <div ></div>

            </div>
            <div class="b-search__main-form-submit">

                <a href="{{url('/advancedsearch')}}">recherche avancée</a>
                <button type="submit" class="btn m-btn" style="font-size: 70%">LANCER LA RECHERCHE<span class="fa fa-angle-right" ></span></button>


            </div>


        </div>
    </div>
</div>
{{ Form::close() }}