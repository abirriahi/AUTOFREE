<div class="b-search__main-form wow zoomInUp" data-wow-delay="0.3s">
    <div class="row">
        <div class="col-xs-12 col-md-8">
            <br>
            <div class="m-firstSelects">

                <script type="text/javascript">
                    $(document).on('change','.auto_marque_id',function (){
                        var auto_marque = $('.auto_marque_id option:selected').val();
                        if(auto_marque > 0)
                        {

                            $.ajax({
                                url:"{{url('get/auto_model')}}",
                                dataType:'html',
                                type:'get',
                                data:{auto_marque_2:auto_marque},
                                success: function(data)
                                {
                                    $('.auto_model').html(data);
                                    $('.auto_model_data').removeClass('hidden');
                                }
                            });
                        }
                    });
                </script>
                <div class="col-xs-4">
                    <?php
                    $get_auto_marque = App\Auto::groupBy('auto_marque')->where('validation',1)->distinct()->get(['auto_marque']);
                    ?>
                    {!! Form::select("auto_marque" ,
                     App\AutoMarque::whereIn('id',$get_auto_marque)->pluck('auto_marque','id')
                     , null ,array('id'=>'select1','class'=>'auto_marque_id','placeholder' => 'marque' )) !!}

                    <span class="fa fa-caret-down"></span>
                </div>
                <div class="col-xs-4 auto_model_data ">
                    <select  class="auto_model" >
                        <option  selected="">Modele</option>
                    </select>

                    <span class="fa fa-caret-down hidden"></span>
                </div>


                <div class="col-xs-4">
                    {!! Form::select("auto_year" ,auto_year() , null,array('placeholder' => 'année','id' => 'select1' ) ) !!}

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>
            <div class="m-secondSelects">
                <div class="col-xs-4">
                    {!! Form::select("cv" ,cv() , null ,array(
                   'placeholder' => 'Kilométre','id' => 'select1')) !!}

                    <span class="fa fa-caret-down"></span>
                </div>
                <div class="col-xs-4">
                    {!! Form::select("auto_carburan" ,auto_carburan() , null ,array(
                    'placeholder' => 'carburant','id' => 'select1')) !!}

                    <span class="fa fa-caret-down"></span>
                </div>
                <div class="col-xs-4">

                    {!! Form::select("autos_carrosserie" ,autos_carrosserie() , null ,array(
                                                    'placeholder' => 'carrosserie','id' => 'select1')) !!}

                    <span class="fa fa-caret-down"></span>
                </div>


            </div>


        </div>

        <div >

        </div>
        <div class="col-md-4 col-xs-12 text-left s-noPadding">

            <div class="b-search__main-form-range">
                <label></label>
                <div ></div>

            </div>
            <div class="b-search__main-form-submit">

                <a href="{{url('/advancedsearch')}}">recherche avancée</a>
                <button type="submit" class="btn m-btn">LANCER LA RECHERCHE<span class="fa fa-angle-right"></span></button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>




<div class="panel with-nav-tabs panel-default">
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane fade active in" id="tab1default">
                test1
            </div>
            <div class="tab-pane fade features" id="tab2default">
               test2
            </div>
            <div class="tab-pane fade technical" id="tab3default">

              test3

            </div>
            <div class="tab-pane fade" id="tab4default">
              tes4
            </div>
        </div>
    </div>
</div>





/*moto*/

<script type="text/javascript">
    $(document).on('change','.moto_marque_id',function (){
        var moto_marque = $('.moto_marque_id option:selected').val();
        if(moto_marque > 0)
        {

            $.ajax({
                url:"{{url('get/moto_model')}}",

                dataType:'html',
                type:'get',
                data:{moto_marque_2:moto_marque},
                success: function(data)
                {
                    $('.moto_model').html(data);
                    $('.moto_model_data').removeClass('hidden');
                }

            });

        }
    });
</script>

<div class="col-xs-4">
    <?php
    $get_moto_marque = App\Moto::groupBy('moto_marque')->where('validation',1)->distinct()->get(['moto_marque']);
    ?>
    {!! Form::select("moto_marque" ,
     App\AutoMarque::whereIn('id',$get_moto_marque)->pluck('moto_marque','id')
     , null ,array('id'=>'select1','class'=>'moto_marque_id','placeholder' => 'marque' )) !!}

    <span class="fa fa-caret-down"></span>
</div>

<div class="col-xs-4 moto_model_data ">
    <select  class="moto_model" >
        <option  selected="">Modele</option>
    </select>

    <span class="fa fa-caret-down hidden"></span>
</div>


