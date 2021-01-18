

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

                                @if($auto->camping_marque!= 0  )

                                    {{$auto->marque->camping_marque}} {{$auto->new_modele}}

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



                </div>
                @if(Auth::user()->admin==1)
                    <div style="color: silver">Espace pour l'administrateur. </div>
                    <div class="ligne">
                        <script type="text/javascript">
                            $(document).on('change','.camping_marque_id',function (){
                                var camping_marque = $('.camping_marque_id option:selected').val();
                                if(camping_marque > 0)
                                {

                                    $.ajax({
                                        url:"{{url('get/camping_model')}}",
                                        dataType:'html',
                                        type:'get',
                                        data:{camping_marque:camping_marque},
                                        success: function(data)
                                        {
                                            $('.camping_model').html(data);
                                        }
                                    });
                                }
                            });
                        </script>
                        <div class="colonne">
                            <label>Marque <span>*</span></label>
                            {!! Form::select("camping_marque",App\AutoMarque::where('camping_marque','!=','')->pluck('camping_marque','id'),
                            old('camping_marque')
                         ,array('class' => 'form-control m-selectt camping_marque_id',
                         'id'=>'','placeholder' => 'taper une marque')) !!}
                            @if ($errors->has('camping_marque'))
                                <span class="help-block">
                                                  <strong>{{ $errors->first('camping_marque') }}</strong>
                                                     </span>
                            @endif

                        </div>

                        <div class="colonne">
                            <br>
                            <span class="camping_model"></span>

                            @if ($errors->has('camping_model'))
                                <span class="help-block">
                                                  <strong>{{ $errors->first('camping_model_id') }}</strong>
                                                     </span>
                            @endif

                        </div>


                        @endif


                        <div class="colonne">
                            <label>kilométrage</label>
                            <bR>
                            {!! Form::select("auto_km" ,km() , null ,array('class' => 'm-auto_km','placeholder' => 'kilométrage', 'id' => 'soflow' )) !!}

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
                        {!! Form::select("autos_carrosserie" ,Camping_carrosserie() , null ,array('class' => 'm-selectt','placeholder' => 'carburan', 'id' => 'soflow' )) !!}

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
                                            <label>Couleur intérieure</label>
                                            <bR>
                                            {!! Form::select("auto_coloren" ,couleuren() , null ,array('class' => 'form-control','placeholder' => 'couleur e
                                                interieur', 'id' => 'soflow' )) !!}

                                        </div>

                                        <div class="colonne">
                                            <label>Portes </label>
                                            <br>
                                            {!! Form::select("porte" ,porte() , null ,array('class' => 'form-control','placeholder'=>'porte', 'id' => 'soflow' )) !!}


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
                                    <tbody><tr>
                                        <td class="th">
                                            <h5>Equipement</h5>
                                        </td>
                                        <td class="th">
                                            <h3> </h3>
                                        </td>
                                        <td class="th">
                                            <h5>Equipement supplémentaire</h5>
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
                                            @if($auto->douche==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE2" name="douche" type="checkbox" value="0">
                                                    <label for="checkboxE2">
                                                        Douche
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE2x" name="douche" type="checkbox" value="0">
                                                    <label for="checkboxE2x">
                                                        <i class="fa fa-check" style="color:red"></i>
                                                        Douche
                                                    </label>
                                                </div>
                                            @endif

                                        </td>
                                        <td>
                                            @if($auto->Pour_handicapes==0)

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE3"  name="Pour_handicapes" type="checkbox" value="0">
                                                    <label for="checkboxE3">
                                                        PNEUS NEUFS
                                                    </label>
                                                </div>

                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE3x"  name="Pour_handicapes" type="checkbox" value="0">
                                                    <label for="checkboxE3x">
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
                                            @if($auto->Regelateur_automatique==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE22" name="Regelateur_automatique" type="checkbox" value="0">
                                                    <label for="checkboxE22">
                                                        Régulateur automatique de traction
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE22x" name="Regelateur_automatique" type="checkbox" value="0">
                                                    <label for="checkboxE22x">
                                                        <i class="fa fa-check" style="color:red"></i>
                                                        Régulateur automatique de traction
                                                    </label>
                                                </div>
                                            @endif

                                        </td>
                                        <td>
                                            @if($auto->Regelateur_automatique==0)

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE23"  name="Vehicule_accidentee"type="checkbox">
                                                <label for="checkboxE23">
                                                    Véhicule accidentée
                                                </label>
                                            </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE22x" name="Vehicule_accidentee" type="checkbox" value="0">
                                                    <label for="checkboxE22x">
                                                        <i class="fa fa-check" style="color:red"></i>
                                                        Véhicule accidentée
                                                    </label>
                                                </div>
                                            @endif

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>


                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input  type="checkbox">
                                                <label for="checkboxE31">
                                                    Climatisation
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            @if($auto->regulateur_vitesse==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE32" name="regulateur_vitesse" type="checkbox" value="0">
                                                    <label for="checkboxE32">
                                                        Régulateur de vitesse
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE32x" name="regulateur_vitesse" type="checkbox" value="0">
                                                    <label for="checkboxE32x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Régulateur de vitesse
                                                    </label>
                                                </div>
                                            @endif

                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            @if($auto->climatisation_automatique==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE41" name="climatisation_automatique" type="checkbox" value="0">
                                                    <label for="checkboxE41">
                                                        Automatique
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE41x" name="climatisation_automatique" type="checkbox" value="0">
                                                    <label for="checkboxE41x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Automatique
                                                    </label>
                                                </div>
                                            @endif

                                        </td>
                                        <td>

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input  type="checkbox">
                                                <label for="checkboxE42">
                                                    Système de navigation
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td class="tdd">
                                            @if($auto->climatisation_manuell==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE51"  name="climatisation_manuell"type="checkbox" value="0">
                                                    <label for="checkboxE51">
                                                        Manuelle
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE51x"  name="climatisation_manuell"type="checkbox" value="0">
                                                    <label for="checkboxE51x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Manuelle
                                                    </label>
                                                </div>
                                            @endif

                                        </td>
                                        <td class="tdd">
                                            @if($auto->Systeme_de_navigation_integrer==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE52"  name="Systeme_de_navigation_integrer" type="checkbox" value="0">
                                                    <label for="checkboxE52">
                                                        Intégré
                                                    </label>
                                                </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE52x"  name="Systeme_de_navigation_integrer" type="checkbox" value="0">
                                                    <label for="checkboxE52x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Intégré
                                                    </label>
                                                </div>
                                              @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>

                                            @if($auto->control_stabiliter==0)
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE61"  name="control_stabiliter" type="checkbox" value="0">
                                                    <label for="checkboxE61">
                                                        Contrôle de la stabilité
                                                    </label>
                                                </div>
                                            @else

                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkboxE61x"  name="control_stabiliter" type="checkbox" value="0">
                                                    <label for="checkboxE61x">
                                                        <i class="fa fa-check" style="color:red"></i>

                                                        Contrôle de la stabilité
                                                    </label>
                                                </div>
                                            @endif

                                        </td>
                                        <td class="tdd">
                                            @if($auto->Systeme_de_navigation_Portable==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE62" name="Systeme_de_navigation_Portable" type="checkbox">
                                                <label for="checkboxE62">
                                                    Portable
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE62x" name="Systeme_de_navigation_Portable" type="checkbox">
                                                <label for="checkboxE62x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    Portable
                                                </label>
                                            </div>
                                                @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->crochet_atelage==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE71"  name="crochet_atelage"type="checkbox">
                                                <label for="checkboxE71">
                                                    Crochet d’attelage
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE71x"  name="crochet_atelage"type="checkbox">
                                                <label for="checkboxE71x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    Crochet d’attelage
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td class="tdd">
                                            @if($auto->system_navigation_toilette==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE72"  name="system_navigation_toilette"type="checkbox">
                                                <label for="checkboxE72">
                                                    Toilette
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE72x"  name="system_navigation_toilette"type="checkbox">
                                                <label for="checkboxE72x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    Toilette
                                                </label>
                                            </div>
                                                @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->cuisine==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE81" name="cuisine" type="checkbox">
                                                <label for="checkboxE81">
                                                    Cuisine
                                                </label>
                                            </div>
                                                @else
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE81x" name="cuisine" type="checkbox">
                                                <label for="checkboxE81x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    Cuisine
                                                </label>
                                            </div>

                                                @endif
                                        </td>
                                        <td class="tdd">
                                            @if($auto->system_navigation_tv==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE82" name="system_navigation_tv" type="checkbox">
                                                <label for="checkboxE82">
                                                    TV
                                                </label>
                                            </div>
                                            @else

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE82x" name="system_navigation_tv" type="checkbox">
                                                <label for="checkboxE82x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    TV
                                                </label>
                                            </div>


                                                @endif
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->anti_vole==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE91" name="anti_vole" type="checkbox">
                                                <label for="checkboxE91">

                                                    Dispositif anti-vol
                                                </label>
                                            </div>
                                            @else

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE91x" name="anti_vole" type="checkbox">
                                                <label for="checkboxE91x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    Dispositif anti-vol
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->Verrouillage_du_differentiel==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE92" name="Verrouillage_du_differentiel" type="checkbox">
                                                <label for="checkboxE92">
                                                    Verrouillage du différentiel
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE92x" name="Verrouillage_du_differentiel" type="checkbox">
                                                <label for="checkboxE92x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    Verrouillage du différentiel
                                                </label>
                                            </div>
                                                @endif
                                        </td>


                                    </tr>
                                    </tbody></table>
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




