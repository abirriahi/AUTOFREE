

<div class="row">
    <div class="col-lg-12">
        <!-- Option bar start-->
        <div class="option-bar  details-option-bar clearfix">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="section-heading">
                        <div class="media">
                            <div class="media-left">
                                <i class="flaticon-sedan-car-front"></i>
                            </div>
                            <div class="media-body hidden-xs">

                                @if($auto->moto_marque!= 0  )

                                    {{$auto->marque->moto_marque}} {{$auto->new_modele}}

                                 @else

                                    {{$auto->new_marque}}
                                @endif

                                <div class="border"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="header-price">
                        <h3>{{$auto->auto_price}} CHF</h3>

                    </div>
                </div>
            </div>
        </div>

        <!--Vestibul!-- Option bar end-->
    </div>
</div>
<!-- ***-->

<aside class="sidebar-widget">
    <!-- Review search -->
    <div class="single-block review">
        <!-- Types de Carrosserie-->
        <!-- Types de Carrosserie-->
        <div class="" hidden>
            <!-- title-->
            <h3 class="title">Types de Carrosserie</h3>
            <table width="75%" align="center">
                <tr>

                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">

                            <input id="carroserie0"  name="autos_carrosserie"type="checkbox">
                            <label for="carroserie0">
                                Break
                            </label>



                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie3"  name="autos_carrosserie"type="checkbox">
                            <label for="carroserie3">
                                Bus
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie6"  name="autos_carrosserie"type="checkbox">
                            <label for="carroserie6">
                                Cabriolet
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">

                            <input id="carroserie1"  name="autos_carrosserie"type="checkbox">
                            <label for="carroserie1">
                                Coupé
                            </label>

                        </div>
                    </td>


                </tr>

                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie4"  name="autos_carrosserie"type="checkbox">
                            <label for="carroserie4">
                                Limousine
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie7"  name="autos_carrosserie"type="checkbox">
                            <label for="carroserie7">
                                MPV / minibus
                            </label>
                        </div>
                    </td>

                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie2"  name="autos_carrosserie"type="checkbox">
                            <label for="carroserie2">
                                Petite voiture
                            </label>
                        </div>
                    </td>

                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie5"  name="autos_carrosserie"type="checkbox">
                            <label for="carroserie5">
                                Pick-up
                            </label>
                        </div>
                    </td>



                </tr>
                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie8"  name="autos_carrosserie"type="checkbox">
                            <label for="carroserie8">
                                SUV/tout-terrain
                            </label>
                        </div>
                    </td>


                </tr>


            </table>

        </div>


        <div class="form-group search-fields">
            <div class="container">

                @if(Auth::user()->admin==1)
                    <div style="color: silver">Espace pour l'administrateur. </div>
                    <div class="ligne">
                        <script type="text/javascript">
                            $(document).on('change','.moto_marque_id',function (){
                                var moto_marque = $('.moto_marque_id option:selected').val();
                                if(moto_marque > 0)
                                {

                                    $.ajax({
                                        url:"{{url('get/moto_model')}}",
                                        dataType:'html',
                                        type:'get',
                                        data:{moto_marque:moto_marque},
                                        success: function(data)
                                        {
                                            $('.moto_model').html(data);
                                        }
                                    });
                                }
                            });
                        </script>
                        <div class="colonne">
                            <label>Marque <span>*</span></label>

                            {!! Form::select("moto_marque",App\AutoMarque::
                            where('moto_marque','!=','')->pluck('moto_marque','id'),old('moto_marque')
                         ,array('class' => 'form-control m-selectt moto_marque_id',
                         'id'=>'soflow','placeholder' => 'taper une marque')) !!}
                            @if ($errors->has('moto_marque'))
                                <span class="help-block">
                                                  <strong>{{ $errors->first('moto_marque') }}</strong>
                                                     </span>
                            @endif

                        </div>

                        <div class="colonne">
                            <label>Modele</label>
                            <select  class="moto_model"  id="soflow">
                                <option  selected="">Tous</option>
                            </select>



                            @if ($errors->has('moto_model'))
                                <span class="help-block">
                                                  <strong>{{ $errors->first('moto_model_id') }}</strong>
                                                     </span>
                            @endif

                        </div>








                        @endif










                    </div>





























                    <div class="ligne">

                    <div class="colonne">
                        <label>Marque</label>
                        {!! Form::text("new_marque",null,array('class' => 'form-control',

                        'placeholder' => 'taper une marque',
                              'style'=>'
                        -webkit-appearance: button;
    -webkit-border-radius: 2px;
    -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    -webkit-padding-end: 20px;
    -webkit-padding-start: 2px;
    -webkit-user-select: none;
    background-image: url(http://i62.tinypic.com/15xvbd5.png),
     -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
    background-position: 97% center;
    background-repeat: no-repeat;
    border: 1px solid #AAA;
    color: #222;
    font-size: inherit;
    margin: 5px;
    overflow: hidden;
    padding: 5px 10px;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 200px;
                        '



                        )) !!}

                        <br>

                    </div>

                    <div class="colonne">
                        <label>Modèle</label>
                        {!! Form::text("new_modele",null,array('class' => 'form-control',
                        'placeholder' => 'taper un modéle',
                              'style'=>'
                        -webkit-appearance: button;
    -webkit-border-radius: 2px;
    -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    -webkit-padding-end: 20px;
    -webkit-padding-start: 2px;
    -webkit-user-select: none;
    background-image: url(http://i62.tinypic.com/15xvbd5.png),
     -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
    background-position: 97% center;
    background-repeat: no-repeat;
    border: 1px solid #AAA;
    color: #222;
    font-size: inherit;
    margin: 5px;
    overflow: hidden;
    padding: 5px 10px;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 200px;
                        '


                        )) !!}

                        <bR>

                    </div>
                    <div class="colonne">
                        <label>Prix</label>
                        <br>
                        {!! Form::number("auto_price", null ,array('class' => 'form-control',
                        'id' => 'soflow','placeholder' => 'Prix de',
                              'style'=>'
                        -webkit-appearance: button;
    -webkit-border-radius: 2px;
    -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    -webkit-padding-end: 20px;
    -webkit-padding-start: 2px;
    -webkit-user-select: none;
    background-image: url(http://i62.tinypic.com/15xvbd5.png),
     -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
    background-position: 97% center;
    background-repeat: no-repeat;
    border: 1px solid #AAA;
    color: #222;
    font-size: inherit;
    margin: 5px;
    overflow: hidden;
    padding: 5px 10px;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 200px;
                        '

                        )) !!}

                    </div>



                </div>


                <div class="ligne">



                    <div class="colonne">
                        <label>Boîte à vitesses</label>
                        <bR>
                        {!! Form::select("auto_vitesse" ,auto_vitesse() , null ,array('class' => 'form-control','placeholder' => 'choisir la boite de vitesse', 'id' => 'soflow' )) !!}

                    </div>
                    <div class="colonne">
                        <label>Roues motrices</label>
                        <bR>
                        {!! Form::select("Roues" ,Roues() , null ,array('class' => 'm-selectt','placeholder' => 'roue', 'id' => 'soflow' )) !!}

                    </div>



                    <div class="colonne">
                        <label>Carburant</label>
                        <bR>
                        {!! Form::select("auto_carburan" ,auto_carburan() , null ,array('class' => 'm-selectt','placeholder' => 'carburan', 'id' => 'soflow' )) !!}

                    </div>

                    <div class="colonne">
                        <label>Carrosserie</label>
                        <bR>
                        {!! Form::select("autos_carrosserie" ,moto_carrosserie() , null ,array('class' => 'm-selectt','placeholder' => 'carburan', 'id' => 'soflow' )) !!}

                    </div>


                </div>

                <div class="ligne">

                    <div class="colonne">
                        <label>Année de</label>
                        <br>
                        {!! Form::select("auto_year" ,auto_year() , null,array('class' => 'm-selectt','placeholder' => 'choisir année', 'id' => 'soflow' ) ) !!}

                    </div>
                    <div class="colonne" >
                        <label>CV de</label>
                        <br>
                        {!! Form::select("cv" ,cv() , null ,array('class' => 'm-selectt','placeholder' => 'CV', 'id' => 'soflow' )) !!}

                    </div>

                    @if($auto->expertiser==0)
                        <div class="colonne">
                            <label>Caractéristiques</label>
                            <bR>

                            <div class="checkbox checkbox-theme checkbox-circle">

                                <input   id="checkboxE" name="expertiser"    type="checkbox" value="0">

                                <label for="checkboxE">

                                        Expertisée
                                </label>




                            </div>
                        </div>
                    @else

                        <div class="colonne">
                            <label>Caractéristiques</label>
                            <bR>

                            <div class="checkbox checkbox-theme checkbox-circle">

                                <input id="checkboxEx" name="expertiser"     type="checkbox" value="0">

                                <label for="checkboxEx" >

                                    <i class="fa fa-check" style="color: red"></i>     Expertisée
                                </label>



                            </div>
                        </div>
                    @endif

                    @if($auto->Vehicule_non_accidentee==0)
                        <div class="colonne">
                            <label> </label>
                            <bR>
                            <div class="checkbox checkbox-theme checkbox-circle">



                                    <input id="checkboxVA1"  name="Vehicule_non_accidentee" type="checkbox" value="0">

                                <label for="checkboxVA1">
                                    Véhicules non accidentés
                                </label>
                            </div>
                        </div>
                        @else
                        <div class="colonne">
                            <label> </label>
                            <bR>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                 <input id="checkboxVA1x"  name="Vehicule_non_accidentee"   type="checkbox" value="0">


                                <label for="checkboxVA1x">
                                    <i class="fa fa-check" style="color: red"></i>     Véhicules non accidentés
                                </label>
                            </div>
                        </div>
                        @endif





                </div>
                <div class="ligne">

                    <div class="colonne">
                        <label>Catégorie de véhicule</label>
                        <bR>
                        {!! Form::select("auto_categorie" ,categorie() , null ,array('class' => 'm-selectt','placeholder' => 'categorie', 'id' => 'soflow' )) !!}

                    </div>


                    <div  class="colonne">
                        <label>Poids remorquable freiné de</label>
                        <br>
                        {!! Form::select("PoidsRemorque" ,PoidsRemorque() , null ,array('class' => 'form-control','placeholder' => 'poids', 'id' => 'soflow' )) !!}

                    </div>



                    @if($auto->garanti==0)
                    <div class="colonne">
                        <label>   </label>
                        <bR>
                        <div class="checkbox checkbox-theme checkbox-circle">

                                <input id="checkboxG" name="garanti" type="checkbox"   value="0">


                            <label for="checkboxG">
                                Avec garantie
                            </label>
                        </div>
                    </div>
                @else
                  <div class="colonne">
                        <label>   </label>
                        <bR>
                        <div class="checkbox checkbox-theme checkbox-circle">

                                <input id="checkboxGx" name="garanti" type="checkbox"   value="0">


                            <label for="checkboxGx">
                                <i class="fa fa-check" style="color: red"></i>              Avec garantie
                            </label>



                        </div>
                    </div>

                 @endif

                    <div class="colonne">
                        <label>  </label>
                        <bR>
                        <div >

                            <label >

                            </label>
                        </div>
                    </div>

                </div>
                <div class="ligne">
                    <div class="colonne">
                        <label>kilométrage</label>
                        <bR>
                        {!! Form::select("auto_km" ,km() , null ,array('class' => 'm-auto_km','placeholder' => 'kilométrage', 'id' => 'soflow' )) !!}

                    </div>



                </div>
                <div class="ligne">




                    <div  class="colonne"></div>
                    <div  class="colonne"></div>




                </div>

            </div>
            <div class="b-search__main-form-submit">
                <button type="submit" class="btn m-btn">Modifier<span class="fa fa-angle-right"></span></button>
            </div>

            <div class="container">
                <div class="row">
                    <div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b> <h3 class="panel-title">Couleur, places </h3></b>
                                <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                            </div>

                            <div class="panel-body">
                                <div class="panelB">
                                    <div class="ligne">

                                        <div class="colonne" >
                                            <label>Sièges </label>
                                            <br>
                                            {!! Form::select("auto_siege" ,auto_siege() , null ,array('class' => 'form-control','placeholder'=>'de', 'id' => 'soflow' )) !!}

                                        </div>


                                        <div class="colonne">
                                            <label>Couleur extérieure</label>
                                            <bR>
                                            {!! Form::select("auto_colorex" ,couleurex() , null ,array('class' => 'form-control','placeholder'=>'couleur exterieure', 'id' => 'soflow' )) !!}

                                        </div>
                                        <div class="colonne">
                                            <label> </label>
                                            <bR>
                                            @if($auto->metaliser==0)

                                            <div class="checkbox checkbox-theme checkbox-circle">

                                                   <input id="checkboxM1" name="metaliser"  type="checkbox" value="0">

                                                <label for="checkboxM1">
                                                       Métalisé
                                                </label>
                                            </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">

                                                   <input id="checkboxM1x" name="metaliser"  type="checkbox" value="0">

                                                <label for="checkboxM1x">
                                                    <i class="fa fa-check" style="color:red"></i>   Métalisé
                                                </label>
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Equipement, options, caractéristiques</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>

                        <div class="panel-body">
                            <div class="panelB">
                                <table class="tab">
                                    <tr >

                                        <td class="th">
                                            <h5>Equipement</h5>
                                        </td>
                                        <td class="th">
                                            <h3> </h3>
                                        </td>
                                        <td class="th">
                                            <h5>Equipement supplémentaire</h5>
                                        </td>
                                        <td class="th">
                                            <h5>Caractéristiques</h5>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->ABS==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE1" name=" ABS" type="checkbox" name=""  value="0">
                                                <label for="checkboxE1">
                                                    ABS
                                                </label>
                                            </div>
                                                @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE1x" name="ABS" type="checkbox" name=""  value="0">
                                                <label for="checkboxE1x">
                                                    <i class="fa fa-check" style="color:red"></i>
                                                    ABS
                                                </label>
                                            </div>

                                              @endif
                                        </td>
                                        <td>
                                            @if($auto->peinture_special==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE2" name="peinture_special" type="checkbox" value="0">
                                                <label for="checkboxE2">
                                                    PEINTURE SPÉCIALE
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE2x" name="peinture_special" type="checkbox" value="0">
                                                <label for="checkboxE2x">
                                                    <i class="fa fa-check" style="color:red"></i>
                                                    PEINTURE SPÉCIALE
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->pneut_neuf==0)

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE3"  name="pneut_neuf" type="checkbox" value="0">
                                                <label for="checkboxE3">
                                                    PNEUS NEUFS
                                                </label>
                                            </div>

                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE3x"  name="pneut_neuf" type="checkbox" value="0">
                                                <label for="checkboxE3x">
                                                    <i class="fa fa-check" style="color:red"></i>
                                                    PNEUS NEUFS
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->VS_disponible==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE4" name="VS_disponible" type="checkbox" value="0">
                                                <label for="checkboxE4">
                                                    25 kW Kit disponible
                                                </label>
                                            </div>
                                            @else

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE4x" name="VS_disponible" type="checkbox" value="0">
                                                <label for="checkboxE4x">
                                                    <i class="fa fa-check" style="color:red"></i>
                                                    25 kW Kit disponible
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->Carenage==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE21" name="Carenage" type="checkbox" value="0">
                                                <label for="checkboxE21">
                                                    Carénage / Carénage partiel
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE21x" name="Carenage" type="checkbox" value="0">
                                                <label for="checkboxE21x">
                                                    <i class="fa fa-check" style="color:red"></i>
                                                    Carénage / Carénage partiel
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->reglage_electrique==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE22" name="reglage_electrique" type="checkbox" value="0">
                                                <label for="checkboxE22">
                                                    RÉGLAGE ÉLECTRIQUE DES SIÈGES
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE22x" name="reglage_electrique" type="checkbox" value="0">
                                                <label for="checkboxE22x">
                                                    <i class="fa fa-check" style="color:red"></i>
                                                    RÉGLAGE ÉLECTRIQUE DES SIÈGES
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">

                                            </div>

                                        </td>
                                        <td>
                                            @if($auto->VS_possible==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE24"  name="VS_possible" type="checkbox" value="0">
                                                <label for="checkboxE24">
                                                    25 kW Kit possible
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE24x"  name="VS_possible" type="checkbox" value="0">
                                                <label for="checkboxE24x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    25 kW Kit possible
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->Catalyseur==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE31" name="Catalyseur" type="checkbox" value="0">
                                                <label for="checkboxE31">
                                                    Catalyseur
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE31x" name="Catalyseur" type="checkbox" value="0">
                                                <label for="checkboxE31x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    Catalyseur
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->pieds_cromee==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE32" name="pieds_cromee" type="checkbox" value="0">
                                                <label for="checkboxE32">
                                                    Pièces chromées
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE32x" name="pieds_cromee" type="checkbox" value="0">
                                                <label for="checkboxE32x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    Pièces chromées
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">

                                            </div>

                                        </td>
                                        <td>
                                            @if($auto->TS_disponible==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE34" name="TS_disponible" type="checkbox" value="0">
                                                <label for="checkboxE34">
                                                    35 kW Kit disponible
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE34x" name="TS_disponible" type="checkbox" value="0">
                                                <label for="checkboxE34x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    35 kW Kit disponible
                                                </label>
                                            </div>

                                                @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->Coffre==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE41" name="Coffre" type="checkbox" value="0">
                                                <label for="checkboxE41">
                                                    COFFRES LATÉRAUX
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE41x" name="Coffre" type="checkbox" value="0">
                                                <label for="checkboxE41x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    COFFRES LATÉRAUX
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->poigne_chaffante==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE42" name="poigne_chaffante" type="checkbox" value="0">
                                                <label for="checkboxE42">
                                                    POIGNÉES CHAUFFANTES
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE42x" name="poigne_chaffante" type="checkbox" value="0">
                                                <label for="checkboxE42x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    POIGNÉES CHAUFFANTES
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>

                                            <div class="checkbox checkbox-theme checkbox-circle">

                                            </div>

                                        </td> <td>
                                            @if($auto->TS_possible==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE43" name="TS_possible"type="checkbox" value="0">
                                                <label for="checkboxE43">
                                                    35 kW Kit possible
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE43x" name="TS_possible"type="checkbox" value="0">
                                                <label for="checkboxE43x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    35 kW Kit possible
                                                </label>
                                            </div>
                                                @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->autre_instrument==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE51"  name="autre_instrument"type="checkbox" value="0">
                                                <label for="checkboxE51">
                                                    D'AUTRES INSTRUMENTS
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE51x"  name="autre_instrument"type="checkbox" value="0">
                                                <label for="checkboxE51x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    D'AUTRES INSTRUMENTS
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->porte_bagage==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE52"  name="porte_bagage" type="checkbox" value="0">
                                                <label for="checkboxE52">
                                                    PORTE-BAGAGES / SUPPORT
                                                </label>
                                            </div>
                                            @else

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE52x"  name="porte_bagage" type="checkbox" value="0">
                                                <label for="checkboxE52x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    PORTE-BAGAGES / SUPPORT
                                                </label>
                                            </div>
                                            @endif

                                        </td>
                                        <td>
                                           <div class="checkbox checkbox-theme checkbox-circle">

                                            </div>

                                        </td>
                                    <td>
                                            @if($auto->echange_possible==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE54" name="echange_possible" type="checkbox" value="0">
                                                <label for="checkboxE54">
                                                    L'echange est possible
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE54x" name="echange_possible" type="checkbox" value="0">
                                                <label for="checkboxE54x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    L'echange est possible
                                                </label>
                                            </div>
                                                @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->capteur_avant==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE61"  name="capteur_avant" type="checkbox" value="0">
                                                <label for="checkboxE61">
                                                    DISPOSITIF ANTI-VOL
                                                </label>
                                            </div>
                                            @else

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE61x"  name="capteur_avant" type="checkbox" value="0">
                                                <label for="checkboxE61x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    DISPOSITIF ANTI-VOL
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <label for="checkboxE62">
                                                    POT D'ÉCHAPPEMENT SPECIAL
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">

                                            </div>

                                        </td>



 <td>
                                            @if($auto->leasing_possible==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE63"  name="leasing_possible" type="checkbox" value="0">
                                                <label for="checkboxE63">
                                                    LEASING POSSIBLE
                                                </label>
                                            </div>
                                            @else

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE63x"  name="leasing_possible" type="checkbox" value="0">
                                                <label for="checkboxE63x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    LEASING POSSIBLE
                                                </label>
                                            </div>
                                                @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->dosseret==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE71" name="dosseret"type="checkbox" value="0">
                                                <label for="checkboxE71">
                                                    DOSSERET
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE71x" name="dosseret"type="checkbox" value="0">
                                                <label for="checkboxE71x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    DOSSERET
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td class="tdd">
                                            @if($auto->protection==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE72"  name="protection" type="checkbox" value="0">
                                                <label for="checkboxE72">
                                                    PROTECTION
                                                </label>
                                            </div>

                                               @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE72x"  name="protection" type="checkbox" value="0">
                                                <label for="checkboxE72x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    PROTECTION
                                                </label>
                                            </div>


                                                @endif
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">

                                            </div>

                                        </td>
          <td>
                                            @if($auto->moto_course==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE73" name="moto_course" type="checkbox" value="0">
                                                <label for="checkboxE73">
                                                    MOTO DE COURSE
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE73x" name="moto_course" type="checkbox" value="0">
                                                <label for="checkboxE73x">

                                                    <i class="fa fa-check" style="color:red"></i>


                                                    MOTO DE COURSE
                                                </label>
                                            </div>
                                                @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->double_frein_disque==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE81" name="double_frein_disque" type="checkbox" value="0">
                                                <label for="checkboxE81">
                                                    DOUBLE FREIN À DISQUE
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE81x" name="double_frein_disque" type="checkbox" value="0">
                                                <label for="checkboxE81x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    DOUBLE FREIN À DISQUE
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td class="tdd">
                                            @if($auto->roue_rayon==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE82" name="roue_rayon" type="checkbox" value="0">
                                                <label for="checkboxE82">
                                                    Roues à rayons
                                                </label>
                                            </div>

                                              @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE82x" name="roue_rayon" type="checkbox" value="0">
                                                <label for="checkboxE82x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    Roues à rayons
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">

                                            </div>

                                        </td>




        <td>
                                            @if($auto->vehicule_accidente==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE83" name="vehicule_accidente" type="checkbox" value="0">
                                                <label for="checkboxE83">
                                                    VÉHICULE ACCIDENTÉE
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE83x" name="vehicule_accidente" type="checkbox" value="0">
                                                <label for="checkboxE83x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    VÉHICULE ACCIDENTÉE
                                                </label>
                                            </div>

                                                @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <label for="checkboxE91">
                                                    DOUBLE SIÈGE
                                                </label>
                                            </div>



                                        </td>
                                        <td class="tdd">
                                            @if($auto->sac_resevoir==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE92" name="sac_resevoir" type="checkbox" value="0">
                                                <label for="checkboxE92">
                                                    SAC DE RÉSERVOIR
                                                </label>
                                            </div>

@else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE92x" name="sac_resevoir" type="checkbox" value="0">
                                                <label for="checkboxE92x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    SAC DE RÉSERVOIR
                                                </label>
                                            </div>

                                                @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            @if($auto->guidant_special==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE101" name="guidant_special" type="checkbox" value="0">
                                                <label for="checkboxE101">
                                                    GUIDON SPÉCIAL
                                                </label>
                                            </div>
                                            @else

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE101x" name="guidant_special" type="checkbox" value="0">
                                                <label for="checkboxE101x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    GUIDON SPÉCIAL
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td class="tdd">
                                         @if($auto->sacoche==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE102"  name="sacoche" type="checkbox" value="0">
                                                <label for="checkboxE102">
                                                    SACOCHES
                                                </label>
                                            </div>
                                            @else

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE102x"  name="sacoche" type="checkbox" value="0">
                                                <label for="checkboxE102x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    SACOCHES
                                                </label>
                                            </div>
                                             @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            @if($auto->haut_parleur==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE111"  name="haut_parleur" type="checkbox" value="0">
                                                <label for="checkboxE111">
                                                    HAUT-PARLEUR
                                                </label>
                                            </div>

                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE111x"  name="haut_parleur" type="checkbox" value="0">
                                                <label for="checkboxE111x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    HAUT-PARLEUR
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->selle_monoplage==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE112" name="selle_monoplage" type="checkbox" value="0">
                                                <label for="checkboxE112">
                                                    SELLE MONOPLACE
                                                </label>
                                            </div>
@else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE112x" name="selle_monoplage" type="checkbox" value="0">
                                                <label for="checkboxE112x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    SELLE MONOPLACE
                                                </label>
                                            </div>

                                                @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            @if($auto->housse_deprotection==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE121" name="housse_deprotection" type="checkbox" value="0">
                                                <label for="checkboxE121">
                                                    HOUSSE DE PROTECTION
                                                </label>
                                            </div>

                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE121x" name="housse_deprotection" type="checkbox" value="0">
                                                <label for="checkboxE121x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    HOUSSE DE PROTECTION
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->system_audio==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE122"  name="system_audio" type="checkbox" value="0">
                                                <label for="checkboxE122">
                                                    SYSTÈME AUDIO
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE122x"  name="system_audio" type="checkbox" value="0">
                                                <label for="checkboxE122x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    SYSTÈME AUDIO
                                                </label>
                                            </div>
                                                @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            @if($auto->marche_pieds==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE131" name="marche_pieds" type="checkbox" value="0">
                                                <label for="checkboxE131">
                                                    MARCHE-PIED
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE131x" name="marche_pieds" type="checkbox" value="0">
                                                <label for="checkboxE131x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    MARCHE-PIED
                                                </label>
                                            </div>

                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->systm_alarme==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE132"  name="systm_alarme"type="checkbox" value="0">
                                                <label for="checkboxE132">
                                                    SYSTÈME D'ALARME
                                                </label>
                                            </div>

                                            @else

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE132x"  name="systm_alarme"type="checkbox" value="0">
                                                <label for="checkboxE132x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    SYSTÈME D'ALARME
                                                </label>
                                            </div>
                                                @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            @if($auto->pare_brise==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE141" name="pare_brise" type="checkbox" value="0">
                                                <label for="checkboxE141">
                                                    PARE-BRISE
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE141x" name="pare_brise" type="checkbox" value="0">
                                                <label for="checkboxE141x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    PARE-BRISE
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->top_case==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE142"  name="top_case" type="checkbox" value="0">
                                                <label for="checkboxE142">
                                                    TOPCASE
                                                </label>
                                            </div>
                                                 @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE142x"  name="top_case" type="checkbox" value="0">
                                                <label for="checkboxE142x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    TOPCASE
                                                </label>
                                            </div>
                                                @endif
                                        </td>


                                    </tr>

                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Consommation, énergie, environnement</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>

                        <div class="panel-body">
                            <div class="panelB">
                                <div class="row vertical-align">

                                    <div >
                                        <label>Cylindrée</label>
                                        <br>
                                        {!! Form::select("Cylindree" ,Cylindree() , null ,array('class' => 'form-control','placeholder'=>'Cylindree', 'id' => 'soflow' )) !!}


                                    </div>


                                    <div >
                                        <label>Consommation jusqu'à</label>
                                        <bR>
                                        {!! Form::select("consommations" ,Consommation() , null ,array('class' => 'form-control','placeholder'=>'consommations', 'id' => 'soflow' )) !!}


                                    </div>
                                    <div >
                                        <label>Normes d'émission Euro</label>
                                        <bR>
                                        {!! Form::select("normes" ,normes() , null ,array('class' => 'form-control','placeholder'=>'Normes', 'id' => 'soflow' )) !!}

                                    </div>
                                    <div>
                                        <div >
                                            <label> </label>
                                            <bR>

                                            <label>

                                            </label>
                                        </div>
                                        <div >
                                            <label> </label>
                                            <bR>

                                            <label>

                                            </label>
                                        </div>
                                        <div >
                                            <label> </label>
                                            <bR>

                                            <label>

                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panelB">
                                <div class="row vertical-align">

                                    <div >
                                        <label>Emission CO2 jusqu'à</label>
                                        <br>
                                        {!! Form::select("Emission_CO2" ,Emission_CO2() , null ,array('class' => 'form-control','placeholder'=>'Emission_CO2', 'id' => 'soflow' )) !!}

                                    </div>

                                    <div >
                                        <label>Catégorie énergétique</label>
                                        <bR>
                                        {!! Form::select("cathe_energeri" ,cathe_energeri() , null ,array('class' => 'form-control','placeholder'=>'cathegorie', 'id' => 'soflow' )) !!}

                                    </div>


                                    <div >
                                        <label> </label>
                                        <bR>

                                        <label>

                                        </label>
                                    </div>
                                    <div >
                                        <label> </label>
                                        <bR>

                                        <label>

                                        </label>
                                    </div>
                                    <div >
                                        <label> </label>
                                        <bR>

                                        <label>

                                        </label>
                                    </div>
                                    <div >
                                        <label> </label>
                                        <bR>

                                        <label>

                                        </label>
                                    </div>
                                    <div >
                                        <label> </label>
                                        <bR>

                                        <label>

                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Localité
                            </h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>

                        <div class="panel-body">
                            <div class="panelB">
                                <div class="row vertical-align">

                                    <div >
                                        <label>Content</label>
                                        <bR>
                                        {!! Form::select("ville" ,ville() , null ,array('id'=>'soflow','placeholder' => 'content' )) !!}
                                                <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->



                                    </div>

                                    <div >
                                        <label>Rayon</label>
                                        <bR>

                                        {!! Form::select("rayon" ,Rayon()  , null ,array('id'=>'soflow','placeholder' => 'Tous' )) !!}



                                    </div>





                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Annonceur
                            </h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>

                        <div class="panel-body">
                            <div class="panelB">
                                <div class="row vertical-align">



                                    <div>
                                        <label>Telephone</label>
                                        <bR>


                                        {!! Form::text("num_tel"  , null ,array('id'=>'soflow',
                                        'placeholder' => 'numero telephone ' ,
                                         'style'=>'
                            -webkit-appearance: button;
        -webkit-border-radius: 2px;
        -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
        -webkit-padding-end: 20px;
        -webkit-padding-start: 2px;
        -webkit-user-select: none;
        background-image:
         -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
        background-position: 97% center;
        background-repeat: no-repeat;
        border: 1px solid #AAA;
        color: #222;
        font-size: inherit;
        margin: 5px;
        overflow: hidden;
        padding: 5px 10px;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 200px;
                            '


                                        )) !!}

                                    </div>
                                    <div>
                                        <label>Email</label>
                                        <bR>


                                        {!! Form::email("email"  , null ,array('id'=>'soflow',
                                        'placeholder' => 'email ',
                                         'style'=>'
                            -webkit-appearance: button;
        -webkit-border-radius: 2px;
        -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
        -webkit-padding-end: 20px;
        -webkit-padding-start: 2px;
        -webkit-user-select: none;
        background-image:
         -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
        background-position: 97% center;
        background-repeat: no-repeat;
        border: 1px solid #AAA;
        color: #222;
        font-size: inherit;
        margin: 5px;
        overflow: hidden;
        padding: 5px 10px;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 200px;
                            '


                                         )) !!}

                                    </div>
                                    <div >
                                        <label>Annonceur</label>

<br>

                                        {{$auto->user->name}}




                                        <br>

                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Description
                            </h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>

                        <div class="panel-body">
                            <div class="panelB">
                                <div class="row vertical-align">

                                    <div >
                                        <label>description</label>
                                        <bR>
                                        {!! Form::textarea("auto_description" , null ,
                                        array('placeholder' => 'description ' ,
                                         'style'=>'
                            -webkit-appearance: button;
        -webkit-border-radius: 2px;
        -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
        -webkit-padding-end: 20px;
        -webkit-padding-start: 2px;
        -webkit-user-select: none;
        background-image:
         -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
        background-position: 97% center;
        background-repeat: no-repeat;
        border: 1px solid #AAA;
        color: #222;
        font-size: inherit;
        margin: 5px;
        overflow: hidden;
        padding: 5px 10px;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 400px;
                            '
                                        )) !!}



                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Image de l'annonce</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                            <div class="panelB">
                                <div class="row vertical-align">

                                    <div class="car-detail-slider simple-slider">
                                        <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-outer">
                                                <!-- Wrapper for slides -->


                                                @if( count($auto->images) == 0)
                                                    @if($auto->image!='')

                                                        <img src={{checkIfImageIsexist($autoInfo->image)}}  height="300px" style="margin: 0 auto">

                                                    @else

                                                        <img src= {{  Request::root().'/public/slider/'.getSetting('no_image')}}  height="300px" style="margin: 0 auto"  >
                                                    @endif


                                                @elseif( count($auto->images) == 1)
                                                    <div class="carousel-inner" >
                                                        <!-- Wrapper for slides -->
                                                        @foreach($auto->images as $key => $image)
                                                            <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                                                <img src="{{  Request::root().'/public/front/images/'.$image->path}}" style="height: 300px; width: 2200px;">
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                @elseif( count($auto->images) == 2)
                                                    <div id="myCarousel" class="carousel slide" data-ride="carousel" >

                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner" >
                                                            <!-- Wrapper for slides -->
                                                            @foreach($auto->images as $key => $image)
                                                                <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                                                    <img src="{{  Request::root().'/public/front/images/'.$image->path}}" style="height: 300px; width: 2200px;">
                                                                </div>
                                                            @endforeach

                                                        </div>

                                                        <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                          <span class="slider-mover-left no-bg" aria-hidden="true">
                                             <img src="/public/front/img/png/chevron-left.png" alt="chevron-left">
                                              </span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>


                                                        <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                        <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <img src="/public/front/img/png/chevron-right.png" alt="chevron-right">
                                               </span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                        <!-- Left and right controls -->

                                                    </div>

                                                @elseif ( count($auto->images) == 3)
                                                    <div id="myCarousel" class="carousel slide" data-ride="carousel" >

                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner" >
                                                            @foreach($auto->images as $key => $image)
                                                                <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                                                    <img src="{{  Request::root().'/public/front/images/'.$image->path}}" style="height: 300px; width: 2200px;">
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                        <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                          <span class="slider-mover-left no-bg" aria-hidden="true">
                                             <img src="/public/front/img/png/chevron-left.png" alt="chevron-left">
                                              </span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>


                                                        <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                        <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <img src="/public/front/img/png/chevron-right.png" alt="chevron-right">
                                               </span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                @else

                                                    <div id="myCarousel" class="carousel slide" data-ride="carousel" >

                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner" >
                                                            @foreach($auto->images as $key => $image)
                                                                <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                                                    <img src="{{  Request::root().'/public/front/images/'.$image->path}}"
                                                                         style="height: 350px; width: 300px;">
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                        <!-- Left and right controls -->
                                                        <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                          <span class="slider-mover-left no-bg" aria-hidden="true">
                                             <img src="/public/front/img/png/chevron-left.png" alt="chevron-left">
                                              </span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>


                                                        <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                        <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <img src="/public/front/img/png/chevron-right.png" alt="chevron-right">
                                               </span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>




                                                @endif










                                            </div>
                                            <!-- Controls -->


                                            <!-- Indicators -->

                                        </div>
                                    </div>



                                    <div >

                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                @if(isset($auto))

                                                    @if( $auto->image != '')
                                                        <img src={{checkIfImageIsexist($auto->image)}} alt="Image" height="100%" width="220">
                                                        <div class="clearfix"></div>
                                                        <br>
                                                    @else
                                                        <img src= {{  Request::root().'/public/'.getSetting('no_image')}} alt="Image" height="100%" width="220"  >

                                                    @endif

                                                @endif



                                                {!! Form::file("image" , ['class' => 'form-control']) !!}

                                            </div>
                                        </div>


                                    </div>
                                    <div >

                                    <div class="row form-group">
                                            <div class="col-md-12">
                                                @if(isset($auto))

                                                    @if( $auto->video != '')
                                                        <iframe src={{$auto->video}} frameborder="0" allowfullscreen></iframe>

                                                        <div class="clearfix"></div>
                                                        <br>
                                                    @else
                                                        <img src= {{  Request::root().'/public/'.getSetting('no_image')}} alt="Image" height="100%" width="220"  >

                                                    @endif

                                                @endif



                                                    @if(Auth::user()->admin==1)
                                                        <div style="color: silver">Changer watch?v=  dans l'url par  embed. </div>

                                                       @endif

                                                    {!! Form::text("video",null , ['class' => 'form-control']) !!}






                                            </div>





                                        </div>

                                    </div>



                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <div class="b-search__main-form-submit">

                <button type="submit" class="btn m-btn">modifer<span class="fa fa-angle-right"></span></button>
            </div>
        </div>


    </div>

</aside>




