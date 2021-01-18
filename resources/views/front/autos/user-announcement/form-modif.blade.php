


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

                                @if($auto->auto_marque!= 0  )

                                    {{$auto->marque->auto_marque}}{{$auto->new_modele}}

                                @else

                                    {{$auto->new_marque}}{{$auto->new_modele}}
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
                            $(document).on('change','.auto_marque_id',function (){
                                var auto_marque = $('.auto_marque_id option:selected').val();
                                if(auto_marque > 0)
                                {

                                    $.ajax({
                                        url:"{{url('get/auto_model')}}",
                                        dataType:'html',
                                        type:'get',
                                        data:{auto_marque:auto_marque},
                                        success: function(data)
                                        {
                                            $('.auto_model').html(data);
                                        }
                                    });
                                }
                            });
                        </script>
                        <div class="colonne">
                            <label>Marque <span>*</span></label>
                            {!! Form::select("auto_marque",App\AutoMarque::
                            where('auto_marque','!=','') ->pluck('auto_marque','id')
                            ,old('auto_marque') ,array('class' => 'form-control m-selectt auto_marque_id',



                            'id'=>'soflow','placeholder' => 'taper une marque')) !!}
                            @if ($errors->has('auto_marque'))
                                <span class="help-block">
                                                  <strong>{{ $errors->first('auto_marque') }}</strong>
                                                     </span>
                            @endif

                        </div>







                        <div class="colonne" >
                            <label>Modele</label>

                            <span class="auto_model">

                            </span>



                        </div>












                    </div>







                @endif





                <div class="ligne">

                    <div class="colonne">
                        <label>Marque</label>
                        {!! Form::text("new_marque",null,

                        array('class' => 'form-control','placeholder' => 'taper une marque',
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
                        ',



                        'placeholder' => 'taper un modéle')) !!}

                        <bR>

                    </div>
                    <div class="colonne">
                        <label>Nombre operatrice qualifier</label>
                        <br>
                        {!! Form::number("auto_price", null ,
                        array('class' => 'form-control',
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

                        , 'id' => 'soflow','placeholder' => 'Prix de')) !!}

                    </div>





                </div>


                <div class="ligne">



                    <div class="colonne">
                        <label>Boîte à vitesses</label>
                        <bR>
                        {!! Form::select("auto_vitesse" ,auto_vitesse() ,
                         null ,array('class' => 'form-control',
                         'placeholder' => 'choisir la boite de vitesse', 'id' => 'soflow' )) !!}

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
                                    <i class="fa fa-check" style="color: red"></i>          Avec garantie
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
                        {!! Form::select("auto_km" ,km() , null ,array('class' => 'm-selectt',
                        'placeholder' => 'kilométrage', 'id' => 'soflow' )) !!}

                    </div>
                    <div class="colonne">
                        <label>Carrosserie</label>
                        <bR>
                        {!! Form::select("autos_carrosserie" ,autos_carrosserie() , null ,array('class' => 'm-selectt','placeholder' => 'carburan', 'id' => 'soflow' )) !!}

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
                                <b> <h3 class="panel-title">Couleur, portes, places </h3></b>
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
                                <div class="panelB">
                                    <div class="ligne">

                                        <div class="colonne">
                                            <label>Portes </label>
                                            <br>
                                            {!! Form::select("porte" ,porte() , null ,array('class' => 'form-control','placeholder'=>'porte', 'id' => 'soflow' )) !!}


                                        </div>


                                        <div class="colonne">
                                            <label>Couleur intérieure</label>
                                            <bR>
                                            {!! Form::select("auto_coloren" ,couleuren() , null ,array('class' => 'form-control','placeholder' => 'couleur e
                                                interieur', 'id' => 'soflow' )) !!}

                                        </div>
                                        <div class="colonne">
                                            <label> </label>
                                            <bR>

                                            <label>

                                            </label>
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
                                            @if($auto->acee_san_cle==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE1" name="acee_san_cle" type="checkbox" name=""  value="0">
                                                    <label for="checkboxE1">
                                                        Accès et démarrage sans clé
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE1x" name="acee_san_cle" type="checkbox" name=""  value="0">
                                                    <label for="checkboxE1x">
                                                        <i class="fa fa-check" style="color:red"></i>
                                                        Accès et démarrage sans clé
                                                    </label>
                                                </div>

                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->phare_derectionnel==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE2" name="phare_derectionnel" type="checkbox" value="0">
                                                    <label for="checkboxE2">
                                                        Phares directionnels
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE2x" name="phare_derectionnel" type="checkbox" value="0">
                                                    <label for="checkboxE2x">
                                                        <i class="fa fa-check" style="color:red"></i>
                                                        Phares directionnels
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->jeux_de_pneus==0)

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE3"  name="jeux_de_pneus" type="checkbox" value="0">
                                                    <label for="checkboxE3">
                                                        2 jeux de pneus/roues
                                                    </label>
                                                </div>

                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE3x"  name="jeux_de_pneus" type="checkbox" value="0">
                                                    <label for="checkboxE3x">
                                                        <i class="fa fa-check" style="color:red"></i>
                                                        2 jeux de pneus/roues
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->Pour_handicapes==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE4" name="Pour_handicapes" type="checkbox" value="0">
                                                    <label for="checkboxE4">
                                                        Pour handicapés
                                                    </label>
                                                </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE4x" name="Pour_handicapes" type="checkbox" value="0">
                                                    <label for="checkboxE4x">
                                                        <i class="fa fa-check" style="color:red"></i>
                                                        Pour handicapés
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->parcage==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE21" name="parcage" type="checkbox" value="0">
                                                    <label for="checkboxE21">
                                                        Aide au parcage
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE21x" name="parcage" type="checkbox" value="0">
                                                    <label for="checkboxE21x">
                                                        <i class="fa fa-check" style="color:red"></i>
                                                        Aide au parcage
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->reglage_desiege_electrique==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE22" name="reglage_desiege_electrique" type="checkbox" value="0">
                                                    <label for="checkboxE22">
                                                        Réglage électrique des sièges
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE22x" name="reglage_desiege_electrique" type="checkbox" value="0">
                                                    <label for="checkboxE22x">
                                                        <i class="fa fa-check" style="color:red"></i>
                                                        Réglage électrique des sièges
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->Autobus_scolaires==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE23" name="Autobus_scolaires" type="checkbox" value="0">
                                                    <label for="checkboxE23">
                                                        Autobus scolaires
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE23x" name="Autobus_scolaires" type="checkbox" value="0">
                                                    <label for="checkboxE23x">
                                                        <i class="fa fa-check" style="color:red"></i>
                                                        Autobus scolaires
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->Pour_lexportation==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE24"  name="Pour_lexportation" type="checkbox" value="0">
                                                    <label for="checkboxE24">
                                                        Pour l'exportation
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE24x"  name="Pour_lexportation" type="checkbox" value="0">
                                                    <label for="checkboxE24x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Pour l'exportation
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->assistant==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE31" name="assistant" type="checkbox" value="0">
                                                    <label for="checkboxE31">
                                                        Assistant d’angle mort
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE31x" name="assistant" type="checkbox" value="0">
                                                    <label for="checkboxE31x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Assistant d’angle mort
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->reglage_de_distance==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE32" name="reglage_de_distance" type="checkbox" value="0">
                                                    <label for="checkboxE32">
                                                        Régulateur de la distance
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE32x" name="reglage_de_distance" type="checkbox" value="0">
                                                    <label for="checkboxE32x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Régulateur de la distance
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->Autotransporter==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE33"  name="Autotransporter"type="checkbox" value="0">
                                                    <label for="checkboxE33">
                                                        Autotransporter
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE33x"  name="Autotransporter"type="checkbox" value="0">
                                                    <label for="checkboxE33x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Autotransporter
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->Vehicule_accidentee==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE34" name="Vehicule_accidentee" type="checkbox" value="0">
                                                    <label for="checkboxE34">
                                                        Véhicule accidentée
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE34x" name="Vehicule_accidentee" type="checkbox" value="0">
                                                    <label for="checkboxE34x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Véhicule accidentée
                                                    </label>
                                                </div>

                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->camera==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE41" name="camera" type="checkbox" value="0">
                                                    <label for="checkboxE41">
                                                        Caméra de recul
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE41x" name="camera" type="checkbox" value="0">
                                                    <label for="checkboxE41x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Caméra de recul
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->regleur_vitesse==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE42" name="regleur_vitesse" type="checkbox" value="0">
                                                    <label for="checkboxE42">
                                                        Régulateur de vitesse
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE42x" name="regleur_vitesse" type="checkbox" value="0">
                                                    <label for="checkboxE42x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Régulateur de vitesse
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->Bache==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE43" name="Bache"type="checkbox" value="0">
                                                    <label for="checkboxE43">
                                                        Bâche
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE43x" name="Bache"type="checkbox" value="0">
                                                    <label for="checkboxE43x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Bâche
                                                    </label>
                                                </div>
                                            @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->capteur_arriere==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE51"  name="capteur_arriere"type="checkbox" value="0">
                                                    <label for="checkboxE51">
                                                        Capteurs de stationnement arrière
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE51x"  name="capteur_arriere"type="checkbox" value="0">
                                                    <label for="checkboxE51x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Capteurs de stationnement arrière
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->radio_DAB==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE52"  name="radio_DAB" type="checkbox" value="0">
                                                    <label for="checkboxE52">
                                                        Radio DAB+
                                                    </label>
                                                </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE52x"  name="radio_DAB" type="checkbox" value="0">
                                                    <label for="checkboxE52x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Radio DAB+
                                                    </label>
                                                </div>
                                            @endif

                                        </td>
                                        <td>
                                            @if($auto->Camion_de_meubles==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE53" name="Camion_de_meubles" type="checkbox" value="0">
                                                    <label for="checkboxE53">
                                                        Camion de meubles
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE53x" name="Camion_de_meubles" type="checkbox" value="0">
                                                    <label for="checkboxE53x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Camion de meubles
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
                                                        Capteurs de stationnement avant
                                                    </label>
                                                </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE61x"  name="capteur_avant" type="checkbox" value="0">
                                                    <label for="checkboxE61x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Capteurs de stationnement avant
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <label for="checkboxE62">
                                                    Sellerie
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            @if($auto->Grue==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE63"  name="Grue" type="checkbox" value="0">
                                                    <label for="checkboxE63">
                                                        Grue
                                                    </label>
                                                </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE63x"  name="Grue" type="checkbox" value="0">
                                                    <label for="checkboxE63x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Grue
                                                    </label>
                                                </div>
                                            @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->capteur_avant1==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE71" name="capteur_avant1"type="checkbox" value="0">
                                                    <label for="checkboxE71">
                                                        Capteurs de stationnement avant
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE71x" name="capteur_avant1"type="checkbox" value="0">
                                                    <label for="checkboxE71x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Capteurs de stationnement avant
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="tdd">
                                            @if($auto->sallerie_alcantara==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE72"  name="sallerie_alcantara" type="checkbox" value="0">
                                                    <label for="checkboxE72">
                                                        Alcantara®
                                                    </label>
                                                </div>

                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE72x"  name="sallerie_alcantara" type="checkbox" value="0">
                                                    <label for="checkboxE72x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Alcantara®
                                                    </label>
                                                </div>


                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->Plateforme_de_levage==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE73" name="Plateforme_de_levage" type="checkbox" value="0">
                                                    <label for="checkboxE73">
                                                        Plateforme de levage
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE73x" name="Plateforme_de_levage" type="checkbox" value="0">
                                                    <label for="checkboxE73x">

                                                        <i class="fa fa-check" style="color:red"></i>


                                                        Plateforme de levage
                                                    </label>
                                                </div>
                                            @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->chauffage==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE81" name="chauffage" type="checkbox" value="0">
                                                    <label for="checkboxE81">
                                                        Chauffage de stationnement
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE81x" name="chauffage" type="checkbox" value="0">
                                                    <label for="checkboxE81x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Chauffage de stationnement
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="tdd">
                                            @if($auto->sallerie_cuire==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE82" name="sallerie_cuire" type="checkbox" value="0">
                                                    <label for="checkboxE82">
                                                        Cuir
                                                    </label>
                                                </div>

                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE82x" name="sallerie_cuire" type="checkbox" value="0">
                                                    <label for="checkboxE82x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Cuir
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->Porte_bagages==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE83" name="Porte_bagages" type="checkbox" value="0">
                                                    <label for="checkboxE83">
                                                        Porte-bagages
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE83x" name="Porte_bagages" type="checkbox" value="0">
                                                    <label for="checkboxE83x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Porte-bagages
                                                    </label>
                                                </div>

                                            @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <label for="checkboxE91">
                                                    Climatisation
                                                </label>
                                            </div>



                                        </td>
                                        <td class="tdd">
                                            @if($auto->sallerie_partiellement_cuire==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE92" name="sallerie_partiellement_cuire" type="checkbox" value="0">
                                                    <label for="checkboxE92">
                                                        Partiellement en cuir
                                                    </label>
                                                </div>

                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE92x" name="sallerie_partiellement_cuire" type="checkbox" value="0">
                                                    <label for="checkboxE92x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Partiellement en cuir
                                                    </label>
                                                </div>

                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->Transports_frigorlifique==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE93"  name="Transports_frigorlifique" type="checkbox" value="0">
                                                    <label for="checkboxE93">
                                                        Transports frigorlifique
                                                    </label>
                                                </div>

                                            @else


                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE93x"  name="Transports_frigorlifique" type="checkbox" value="0">
                                                    <label for="checkboxE93x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Transports frigorlifique
                                                    </label>
                                                </div>
                                            @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            @if($auto->climatisation_automatique==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE101" name="climatisation_automatique" type="checkbox" value="0">
                                                    <label for="checkboxE101">
                                                        Automatique
                                                    </label>
                                                </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE101x" name="climatisation_automatique" type="checkbox" value="0">
                                                    <label for="checkboxE101x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Automatique
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="tdd">
                                            @if($auto->sallerie_tissu==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE102"  name="sallerie_tissu" type="checkbox" value="0">
                                                    <label for="checkboxE102">
                                                        Tissu
                                                    </label>
                                                </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE102x"  name="sallerie_tissu" type="checkbox" value="0">
                                                    <label for="checkboxE102x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Tissu
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->Treuil==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE103"  name="Treuil" type="checkbox" value="0">
                                                    <label for="checkboxE103">
                                                        Treuil
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE103x"  name="Treuil" type="checkbox" value="0">
                                                    <label for="checkboxE103x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Treuil
                                                    </label>
                                                </div>
                                            @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            @if($auto->climatisation_manuell==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE111"  name="climatisation_manuell" type="checkbox" value="0">
                                                    <label for="checkboxE111">
                                                        Manuelle
                                                    </label>
                                                </div>

                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE111x"  name="climatisation_manuell" type="checkbox" value="0">
                                                    <label for="checkboxE111x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Manuelle
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->siege_chauffant==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE112" name="siege_chauffant" type="checkbox" value="0">
                                                    <label for="checkboxE112">
                                                        Sièges chauffants
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE112x" name="siege_chauffant" type="checkbox" value="0">
                                                    <label for="checkboxE112x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Sièges chauffants
                                                    </label>
                                                </div>

                                            @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            @if($auto->control_stabilite==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE121" name="control_stabilite" type="checkbox" value="0">
                                                    <label for="checkboxE121">
                                                        Contrôle de la stabilité
                                                    </label>
                                                </div>

                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE121x" name="control_stabilite" type="checkbox" value="0">
                                                    <label for="checkboxE121x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Contrôle de la stabilité
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->siege_ventilite==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE122"  name="siege_ventilite" type="checkbox" value="0">
                                                    <label for="checkboxE122">
                                                        Sièges ventilés
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE122x"  name="siege_ventilite" type="checkbox" value="0">
                                                    <label for="checkboxE122x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Sièges ventilés
                                                    </label>
                                                </div>
                                            @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            @if($auto->crochet_atelage==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE131" name="crochet_atelage" type="checkbox" value="0">
                                                    <label for="checkboxE131">
                                                        Crochet d’attelage
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE131x" name="crochet_atelage" type="checkbox" value="0">
                                                    <label for="checkboxE131x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Crochet d’attelage
                                                    </label>
                                                </div>

                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->Suspension_augmente==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE132"  name="Suspension_augmente"type="checkbox" value="0">
                                                    <label for="checkboxE132">
                                                        Suspension augmenté
                                                    </label>
                                                </div>

                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE132x"  name="Suspension_augmente"type="checkbox" value="0">
                                                    <label for="checkboxE132x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Suspension augmenté
                                                    </label>
                                                </div>
                                            @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            @if($auto->dispositif_mail_libre==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE141" name="dispositif_mail_libre" type="checkbox" value="0">
                                                    <label for="checkboxE141">
                                                        Dispositif mains libres
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE141x" name="dispositif_mail_libre" type="checkbox" value="0">
                                                    <label for="checkboxE141x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Dispositif mains libres
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($auto->Suspension_pneumatique==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE142"  name="Suspension_pneumatique" type="checkbox" value="0">
                                                    <label for="checkboxE142">
                                                        Suspension pneumatique
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE142x"  name="Suspension_pneumatique" type="checkbox" value="0">
                                                    <label for="checkboxE142x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Suspension pneumatique
                                                    </label>
                                                </div>
                                            @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            @if($auto->hard_top==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE151" name="hard_top" type="checkbox" value="0">
                                                    <label for="checkboxE151">
                                                        Hardtop
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE151x" name="hard_top" type="checkbox" value="0">
                                                    <label for="checkboxE151x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Hardtop
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td>

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <label for="checkboxE152">
                                                    Système de navigation
                                                </label>
                                            </div>

                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            @if($auto->bluetooth==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE161"  name="bluetooth" type="checkbox" value="0">
                                                    <label for="checkboxE161">
                                                        Interface bluetooth
                                                    </label>
                                                </div>

                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE161x"  name="bluetooth" type="checkbox" value="0">
                                                    <label for="checkboxE161x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Interface bluetooth
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="tdd">
                                            @if($auto->Systeme_de_navigation_integrer==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE162" name="Systeme_de_navigation_integrer" type="checkbox" value="0">
                                                    <label for="checkboxE162">
                                                        Intégré
                                                    </label>
                                                </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE162x" name="Systeme_de_navigation_integrer" type="checkbox" value="0">
                                                    <label for="checkboxE162x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Intégré
                                                    </label>
                                                </div>
                                            @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            @if($auto->isofix==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE171" name="isofix" type="checkbox" value="0">
                                                    <label for="checkboxE171">
                                                        Isofix
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE171x" name="isofix" type="checkbox" value="0">
                                                    <label for="checkboxE171x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Isofix
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="tdd">
                                            @if($auto->Systeme_de_navigation_Portable==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE172" name="Systeme_de_navigation_Portable" type="checkbox" value="0">
                                                    <label for="checkboxE172">
                                                        Portable
                                                    </label>
                                                </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE172x" name="Systeme_de_navigation_Portable" type="checkbox" value="0">
                                                    <label for="checkboxE172x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Portable
                                                    </label>
                                                </div>
                                            @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            @if($auto->jantes==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE181" name="jantes" type="checkbox" value="0">
                                                    <label for="checkboxE181">
                                                        Jantes en alu
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE181x" name="jantes" type="checkbox" value="0">
                                                    <label for="checkboxE181x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Jantes en alu
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="tdd">
                                            @if($auto->Systeme_de_navigation_Systeme_de_suivi_de_voie==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE182"  name="Systeme_de_navigation_Systeme_de_suivi_de_voie" type="checkbox" value="0">
                                                    <label for="checkboxE182">
                                                        Système de suivi de voie
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE182x"  name="Systeme_de_navigation_Systeme_de_suivi_de_voie" type="checkbox" value="0">
                                                    <label for="checkboxE182x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Système de suivi de voie
                                                    </label>
                                                </div>
                                            @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td  >
                                            <div class="checkbox checkbox-theme checkbox-circle" >
                                                <label for="checkboxE191" hidden>
                                                    Phares
                                                </label>
                                            </div>
                                        </td>

                                        <td >
                                            @if($auto->Systeme_start_stop==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE192"  name="Systeme_start_stop"type="checkbox" value="0">
                                                    <label for="checkboxE192">
                                                        Système start/stop
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE192x"  name="Systeme_start_stop"type="checkbox" value="0">
                                                    <label for="checkboxE192x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Système start/stop
                                                    </label>
                                                </div>
                                            @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd" >
                                            @if($auto->phare_laser==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE201" type="checkbox" name="phare_laser"  value="0" value="0">
                                                    <label for="checkboxE201">
                                                        Laser
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE201x" type="checkbox" name="phare_laser"  value="0" value="0">
                                                    <label for="checkboxE201x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Laser
                                                    </label>
                                                </div>
                                            @endif
                                        </td>

                                        <td >
                                            @if($auto->Toit_ouvrant==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE202" type="checkbox" name="Toit_ouvrant"  value="0" value="0">
                                                    <label for="checkboxE202">
                                                        Toit ouvrant
                                                    </label>
                                                </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE202x" type="checkbox" name="Toit_ouvrant"  value="0" value="0">
                                                    <label for="checkboxE202x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Toit ouvrant
                                                    </label>
                                                </div>
                                            @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd" >
                                            @if($auto->phare_laser1==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE211" type="checkbox" name="phare_laser1"  value="0" value="0">
                                                    <label for="checkboxE211">
                                                        Laser
                                                    </label>
                                                </div>

                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE211x" type="checkbox" name="phare_laser1"  value="0" value="0">
                                                    <label for="checkboxE211x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Laser
                                                    </label>
                                                </div>
                                            @endif
                                        </td>
                                        <td >

                                            @if($auto->Verrouillage_du_differentiel==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE212" type="checkbox" name="Verrouillage_du_differentiel"  value="0" value="0">
                                                    <label for="checkboxE212">
                                                        Verrouillage du différentiel
                                                    </label>
                                                </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE212x" type="checkbox" name="Verrouillage_du_differentiel"  value="0" value="0">
                                                    <label for="checkboxE212x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Verrouillage du différentiel
                                                    </label>
                                                </div>


                                            @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd" >
                                            @if($auto->phare_xenon==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE221" type="checkbox" name="phare_xenon" value="0">
                                                    <label for="checkboxE221">
                                                        Xénon
                                                    </label>
                                                </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE221x" type="checkbox" name="phare_xenon" value="0">
                                                    <label for="checkboxE221x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Xénon
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



                                    <div>
                                        <label>Adresse</label>
                                        <bR>


                                        {!! Form::text("adresse"  , null ,array('id'=>'soflow',

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

                                        ,

                                        'placeholder' => 'adresse ' )) !!}

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
                                        {!! Form::textarea("auto_description" , null , array(
                                        'placeholder' => 'description ',
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
                            <h3 class="panel-title">Images,Vidéos  de l'annonce</h3>
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

                                                        <img src={{checkIfImageIsexist($auto->image)}}  height="300px" style="margin: 0 auto">

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
                                             <img src="/front/img/png/chevron-left.png" alt="chevron-left">
                                              </span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>


                                                        <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                        <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <img src="/front/img/png/chevron-right.png" alt="chevron-right">
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
                                             <img src="/front/img/png/chevron-left.png" alt="chevron-left">
                                              </span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>


                                                        <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                        <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <img src="/front/img/png/chevron-right.png" alt="chevron-right">
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
                                             <img src="/front/img/png/chevron-left.png" alt="chevron-left">
                                              </span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>


                                                        <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                        <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <img src="/front/img/png/chevron-right.png" alt="chevron-right">
                                               </span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>




                                                @endif



                                                {!! Form::file("images[]" , ['class' => 'form-control', 'multiple' => true]) !!}








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
                                                        <img src={{checkIfImageIsexist($auto->image)}} alt="Image" style="height: 300px; width: 300px;">
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
                                                        <iframe src={{$auto->video}}></iframe>

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




