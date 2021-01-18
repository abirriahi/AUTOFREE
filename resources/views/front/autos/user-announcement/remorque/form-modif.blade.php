

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

                                @if($auto->remorque_marque!= 0  )

                                    {{$auto->marque->remorque_marque}} {{$auto->new_modele}}

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
                @if(Auth::user()->admin==1)
                    <div style="color: silver">Espace pour l'administrateur. </div>
                    <div class="ligne">
                        <script type="text/javascript">
                            $(document).on('change','.remorque_marque_id',function (){
                                var remorque_marque = $('.remorque_marque_id option:selected').val();
                                if(remorque_marque > 0)
                                {

                                    $.ajax({
                                        url:"{{url('get/remorque_model')}}",
                                        dataType:'html',
                                        type:'get',
                                        data:{remorque_marque:remorque_marque},
                                        success: function(data)
                                        {
                                            $('.remorque_model').html(data);
                                        }
                                    });
                                }
                            });
                        </script>
                        <div class="colonne">
                            <label>Marque <span>*</span></label>
                            {!! Form::select("remorque_marque",App\AutoMarque::where('remorque_marque','!=','') ->pluck('remorque_marque','id'),
                            old('remorque_marque')
                         ,array('class' => 'form-control m-selectt remorque_marque_id','id'=>'',
                         'placeholder' => 'taper une marque')) !!}
                            @if ($errors->has('remorque_marque'))
                                <span class="help-block">
                                                  <strong>{{ $errors->first('remorque_marque') }}</strong>
                                                     </span>
                            @endif

                        </div>

                        <div class="colonne">
                            <br>
                            <span class="remorque_model"></span>

                            @if ($errors->has('remorque_model'))
                                <span class="help-block">
                                                  <strong>{{ $errors->first('remorque_model_id') }}</strong>
                                                     </span>
                            @endif

                        </div>







                    </div>
                @endif

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
                        {!! Form::select("autos_carrosserie" ,Remorque_carrosserie() , null ,array('class' => 'm-selectt','placeholder' => 'carburan', 'id' => 'soflow' )) !!}

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
                                Avec garantie
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
                                            @if($auto->hydrautique==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE2" name="hydrautique" type="checkbox" value="0">
                                                <label for="checkboxE2">
                                                    Plate-forme hydraulique
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE2x" name="hydrautique" type="checkbox" value="0">
                                                <label for="checkboxE2x">
                                                    <i class="fa fa-check" style="color:red"></i>
                                                    Plate-forme hydraulique
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->Vehicule_accidentee==0)

                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE3"  name="Vehicule_accidentee" type="checkbox" value="0">
                                                <label for="checkboxE3">
                                                    Véhicule accidentée
                                                </label>
                                            </div>

                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE3x"  name="Vehicule_accidentee" type="checkbox" value="0">
                                                <label for="checkboxE3x">
                                                    <i class="fa fa-check" style="color:red"></i>
                                                    Véhicule accidentée
                                                </label>
                                            </div>
                                                @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->frein_comprimer==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE21" name="frein_comprimer" type="checkbox" value="0">
                                                <label for="checkboxE21">
                                                    Frein à air comprimé
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE21x" name="frein_comprimer" type="checkbox" value="0">
                                                <label for="checkboxE21x">
                                                    <i class="fa fa-check" style="color:red"></i>
                                                    Frein à air comprimé
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->pneumatique==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE22" name="pneumatique" type="checkbox" value="0">
                                                <label for="checkboxE22">
                                                    Suspension pneumatique
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE22x" name="pneumatique" type="checkbox" value="0">
                                                <label for="checkboxE22x">
                                                    <i class="fa fa-check" style="color:red"></i>
                                                    Suspension pneumatique
                                                </label>
                                            </div>
                                                @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->frein_disque==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE31" name="frein_disque" type="checkbox" value="0">
                                                <label for="checkboxE31">
                                                    Frein à disque
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE31x" name="frein_disque" type="checkbox" value="0">
                                                <label for="checkboxE31x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    Frein à disque
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->Treuil==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE32" name="Treuil" type="checkbox" value="0">
                                                <label for="checkboxE32">
                                                    Treuil
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE32x" name="Treuil" type="checkbox" value="0">
                                                <label for="checkboxE32x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    Treuil
                                                </label>
                                            </div>
                                                @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            @if($auto->Grue==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE41" name="Grue" type="checkbox" value="0">
                                                <label for="checkboxE41">
                                                    Grue
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE41x" name="Grue" type="checkbox" value="0">
                                                <label for="checkboxE41x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    Grue
                                                </label>
                                            </div>
                                                @endif
                                        </td>
                                        <td>
                                            @if($auto->referoidissement==0)
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE42" name="referoidissement" type="checkbox" value="0">
                                                <label for="checkboxE42">
                                                    Unité de refroidissement
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE42x" name="referoidissement" type="checkbox" value="0">
                                                <label for="checkboxE42x">
                                                    <i class="fa fa-check" style="color:red"></i>

                                                    Unité de refroidissement
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
                                        {!! Form::textarea("auto_description" , null , array('placeholder' => 'description ' )) !!}



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
                                                        <img src={{checkIfImageIsexist($auto->image)}} alt="Image" height="100%" width="220">
                                                        <div class="clearfix"></div>
                                                        <br>
                                                    @else
                                                        <img src= {{  Request::root().'/slider/'.getSetting('no_image')}} alt="Image" height="100%" width="220"  >

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




