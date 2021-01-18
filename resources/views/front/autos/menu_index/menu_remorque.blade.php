{{ Form::open(['url' => '/remorquesearch', 'method' => 'get']) }}

<div class="b-search__main-form wow zoomInUp" data-wow-delay="0.3s">
    <div class="row">
        <div class="col-xs-12 col-md-8">
            <br>
            <div class="m-firstSelects">
                <script type="text/javascript">
                    $(document).on('change','.remorque_marque_id',function (){
                        var remorque_marque = $('.remorque_marque_id option:selected').val();
                        if(remorque_marque > 0)
                        {

                            $.ajax({
                                url:"{{url('get/remorque_model')}}",

                                dataType:'html',
                                type:'get',
                                data:{remorque_marque_2:remorque_marque},
                                success: function(data)
                                {
                                    $('.remorque_model').html(data);
                                    $('.remorque_model_data').removeClass('hidden');
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
                    $get_remorque_marque = App\Remorque::groupBy('remorque_marque')->where('validation',1)
                            ->distinct()->get(['remorque_marque']);
                    ?>
                    {!! Form::select("remorque_marque" ,
                     App\AutoMarque::whereIn('id',$get_remorque_marque)->pluck('remorque_marque','id')
                     , null ,array('id'=>'select1','class'=>'remorque_marque_id','placeholder' => 'Tous' )) !!}


                </div>

                <div class="col-xs-4">
                    <label style="
                              text-transform:capitalize;
                              font: 200 14px 'Open Sans',sans-serif;
                              text-align: right;
                               margin: 11px 0 0 0;
                              float: left;
                               display: block;"

                    >Modele




                    </label>

                   <span class="remorque_model">
    <select   >
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



                    {!! Form::select("auto_year" ,auto_year() , null,array('placeholder' => 'Tous','id' => 'select1' ) ) !!}

                    
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

                    >Carroserie




                    </label>


                    {!! Form::select("autos_carrosserie" ,autos_carrosserie() , null ,array(
                       'placeholder' => 'Tous','id' => 'select1')) !!}


                </div>


            </div>


        </div>

        <div >
            <label  for="checkboxes-4">
                <input type="checkbox" name="expertiser" id="checkboxes-4" value="O">
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