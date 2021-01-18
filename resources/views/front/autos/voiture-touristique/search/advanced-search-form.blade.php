


{{ Form::open(['url' => '/search', 'method' => 'get']) }}

<aside class="sidebar-widget">
    <!-- Review search -->
    <div class="single-block review">
        <!-- Types de Carrosserie-->
        <!-- Types de Carrosserie-->
        <div class="">
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
                            <input id="carroserie1"  name="autos_carrosserie"type="checkbox">
                            <label for="carroserie1">
                                Coupé
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
                            <input id="carroserie3"  name="autos_carrosserie"type="checkbox">
                            <label for="carroserie3">
                                Bus
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
                            <input id="carroserie5"  name="autos_carrosserie"type="checkbox">
                            <label for="carroserie5">
                                Pick-up
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
                            <input id="carroserie7"  name="autos_carrosserie"type="checkbox">
                            <label for="carroserie7">
                                MPV / minibus
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


                    <script type="text/javascript">
                        $(document).on('change','.auto_marque_id',function (){
                            var auto_marque = $('.auto_marque_id option:selected').val();
                            if(auto_marque > 0)
                            {

                                $.ajax({
                                    url:"{{url('get/auto_model')}}",
                                    dataType:'html',
                                    type:'get',
                                    data:{auto_marque_3:auto_marque},
                                    success: function(data)
                                    {
                                        $('.auto_model').html(data);
                                        $('.auto_model_data').removeClass('hidden');
                                    }
                                });
                            }
                        });
                    </script>
                    <div class="colonne">
                        <label>Marque</label>

                    <?php
                        $get_auto_marque = App\Auto::groupBy('auto_marque')->where('validation',1)->distinct()->get(['auto_marque']);
                        ?>
                        {!! Form::select("auto_marque" ,
                         App\AutoMarque::whereIn('id',$get_auto_marque)->pluck('auto_marque','id')
                         , null ,array('id'=>'auto_select' ,'placeholder' => 'Tous','class'=>'auto_marque_id' )) !!}


                    </div>
                    <div class="colonne">
                        <label>Modele</label>

                        <select  class="auto_model" id="auto_select" >
                            <option  selected="">Tous</option>
                        </select>

                        <span class="fa fa-caret-down hidden"></span>
                    </div>


                    <div class="colonne">
                        <label>Kilométres</label>

                        {!! Form::select("auto_km" ,km() ,
                       null ,array('class' => 'm-selectt','placeholder' => ' Tous', 'id' => 'soflow' )) !!}



                    </div>


                </div>
                <div class="ligne">

                    <div class="colonne">
                        <label>Prix de</label>
                        <br>
                        {!! Form::select("auto_price_from" ,prix() ,
                          null ,array('class' => 'm-selectt','placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>

                    <div class="colonne">
                        <label>à</label>
                        <bR>
                        {!! Form::select("auto_price_to" ,prix() ,
                         null ,array('class' => 'm-selectt','placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>
                    <div class="colonne">
                        <label>Boîte à vitesses</label>
                        <bR>
                        {!! Form::select("auto_vitesse" ,auto_vitesse() ,
                         null ,array('class' => 'm-selectt','placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>



                </div>
                <div class="ligne">


                    <div class="colonne">
                        <label>Carburant</label>
                        <bR>
                        {!! Form::select("auto_carburan" ,auto_carburan() ,
                         null ,array('class' => 'm-selectt','placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>
                    <div class="colonne">
                        <label>Catégorie de véhicule</label>
                        <bR>
                        {!! Form::select("auto_categorie" ,categorie() ,
                         null ,array('class' => 'm-selectt','placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>

                    <div class="colonne">
                        <label>Année </label>
                        <br>
                        {!! Form::select("auto_year" ,auto_year() ,
                         null,array('class' => 'm-selectt','placeholder' => 'Tous', 'id' => 'soflow' ) ) !!}

                    </div>



                </div>
                <div class="ligne">

                    <div class="colonne" >
                        <label>CV   </label>
                        <br>
                        {!! Form::select("cv" ,cv() , null ,array('class' => 'm-selectt','placeholder' => 'Tous', 'id' => 'soflow' )) !!}


                    </div>
                    <div  class="colonne">
                        <label>Poids remorquable freiné de</label>
                        <br>
                        {!! Form::select("PoidsRemorque" ,PoidsRemorque() ,
                        null ,array('class' => 'form-control','placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>




                    <div class="colonne">
                        <label>Caractéristiques</label>
                        <bR>
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkboxE" name="expertiser" type="checkbox" value="0">
                            <label for="checkboxE">
                                Expertisée
                            </label>
                        </div>
                    </div>
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


                </div>
                <div class="ligne">
                    <div class="colonne">
                        <label>Roues motrices</label>
                        <bR>
                        {!! Form::select("Roues" ,Roues() ,
                        null ,array('class' => 'm-selectt','placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>

                    <div class="colonne" >
                        <label> </label>
                        <br>

                    </div>


                    <div class="colonne">
                        <label>   </label>
                        <bR>
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkboxG" name="garanti" type="checkbox" value="0">
                            <label for="checkboxG">
                                Avec garantie
                            </label>
                        </div>
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



                    <div  class="colonne"></div>
                    <div  class="colonne"></div>




                </div>

            </div>
            <div class="b-search__main-form-submit">
                <a href="{{url('/advancedsearch')}}">Réinitialiser</a>
                <button type="submit" class="btn m-btn" style="font-size: 70%; padding: 12px ">LANCER LA RECHERCHE<span class="fa fa-angle-right"></span></button>
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
                                            {!! Form::select("auto_siege" ,auto_siege() ,
                                             null ,array('class' => 'form-control','placeholder'=>'Tous', 'id' => 'soflow' )) !!}

                                        </div>


                                        <div class="colonne">
                                            <label>Couleur extérieure</label>
                                            <bR>
                                            {!! Form::select("auto_colorex" ,couleurex() , null
                                            ,array('class' => 'form-control','placeholder'=>'Tous', 'id' => 'soflow' )) !!}

                                        </div>
                                        <div class="colonne">
                                            <label> </label>
                                            <bR>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxM1" name="metaliser" type="checkbox" value="0">
                                                <label for="checkboxM1">
                                                    Métalisé
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panelB">
                                    <div class="ligne">

                                        <div class="colonne">
                                            <label>Portes </label>
                                            <br>
                                            {!! Form::select("porte" ,porte() , null ,array('class' => 'form-control','placeholder'=>'Tous', 'id' => 'soflow' )) !!}


                                        </div>


                                        <div class="colonne">
                                            <label>Couleur intérieure</label>
                                            <bR>
                                            {!! Form::select("auto_coloren" ,couleuren() , null ,array('class' => 'form-control',
                                            'placeholder' => '
             Tous', 'id' => 'soflow' )) !!}

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
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE1" name="acee_san_cle" type="checkbox" name=""  value="0">
                                                <label for="checkboxE1">
                                                    Accès et démarrage sans clé
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE2" name="phare_derectionnel" type="checkbox" value="0">
                                                <label for="checkboxE2">
                                                    Phares directionnels
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE3"  name="jeux_de_pneus" type="checkbox" value="0">
                                                <label for="checkboxE3">
                                                    2 jeux de pneus/roues
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE4" name="Pour_handicapes" type="checkbox" value="0">
                                                <label for="checkboxE4">
                                                    Pour handicapés
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE21" name="parcage" type="checkbox" value="0">
                                                <label for="checkboxE21">
                                                    Aide au parcage
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE22" name="reglage_desiege_electrique" type="checkbox" value="0">
                                                <label for="checkboxE22">
                                                    Réglage électrique des sièges
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE23" name="Autobus_scolaires" type="checkbox" value="0">
                                                <label for="checkboxE23">
                                                    Autobus scolaires
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE24"  name="Pour_lexportation" type="checkbox" value="0">
                                                <label for="checkboxE24">
                                                    Pour l'exportation
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE31" name="Assistant" type="checkbox" value="0">
                                                <label for="checkboxE31">
                                                    Assistant d’angle mort
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE32" name="reglage_de_distance" type="checkbox" value="0">
                                                <label for="checkboxE32">
                                                    Régulateur de la distance
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE33"  name="Autotransporter"type="checkbox" value="0">
                                                <label for="checkboxE33">
                                                    Autotransporter
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE34" name="Vehicule_accidentee" type="checkbox" value="0">
                                                <label for="checkboxE34">
                                                    Véhicule accidentée
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE41" name="camera" type="checkbox" value="0">
                                                <label for="checkboxE41">
                                                    Caméra de recul
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE42" name="regleur_vitesse" type="checkbox" value="0">
                                                <label for="checkboxE42">
                                                    Régulateur de vitesse
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE43" name="Bache"type="checkbox" value="0">
                                                <label for="checkboxE43">
                                                    Bâche
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE51"  name="capteur_arriere"type="checkbox" value="0">
                                                <label for="checkboxE51">
                                                    Capteurs de stationnement arrière
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE52"  name="radio_DAB" type="checkbox" value="0">
                                                <label for="checkboxE52">
                                                    Radio DAB+
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE53" name="Camion_de_meubles" type="checkbox" value="0">
                                                <label for="checkboxE53">
                                                    Camion de meubles
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE61"  name="capteur_avant" type="checkbox" value="0">
                                                <label for="checkboxE61">
                                                    Capteurs de stationnement avant
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <label for="checkboxE62">
                                                    Sellerie
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE63"  name="Grue" type="checkbox" value="0">
                                                <label for="checkboxE63">
                                                    Grue
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE71" name="capteur_avant1"type="checkbox" value="0">
                                                <label for="checkboxE71">
                                                    Capteurs de stationnement avant
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE72"  name="sallerie_alcantara" type="checkbox" value="0">
                                                <label for="checkboxE72">
                                                    Alcantara®
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE73" name="Plateforme_de_levage" type="checkbox" value="0">
                                                <label for="checkboxE73">
                                                    Plateforme de levage
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE81" name="chauffage" type="checkbox" value="0">
                                                <label for="checkboxE81">
                                                    Chauffage de stationnement
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE82" name="sallerie_cuire" type="checkbox" value="0">
                                                <label for="checkboxE82">
                                                    Cuir
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE83" name="Porte_bagages" type="checkbox" value="0">
                                                <label for="checkboxE83">
                                                    Porte-bagages
                                                </label>
                                            </div>
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
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE92" name="sallerie_partiellement_cuire" type="checkbox" value="0">
                                                <label for="checkboxE92">
                                                    Partiellement en cuir
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE93"  name="Transports_frigorlifique" type="checkbox" value="0">
                                                <label for="checkboxE93">
                                                    Transports frigorlifique
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE101" name="climatisation_automatique" type="checkbox" value="0">
                                                <label for="checkboxE101">
                                                    Automatique
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE102"  name="sallerie_tissu" type="checkbox" value="0">
                                                <label for="checkboxE102">
                                                    Tissu
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE103"  name="Treuil" type="checkbox" value="0">
                                                <label for="checkboxE103">
                                                    Treuil
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE111"  name="climatisation_manuell" type="checkbox" value="0">
                                                <label for="checkboxE111">
                                                    Manuelle
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE112" name="siege_chauffant" type="checkbox" value="0">
                                                <label for="checkboxE112">
                                                    Sièges chauffants
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE121" name="control_stabilite" type="checkbox" value="0">
                                                <label for="checkboxE121">
                                                    Contrôle de la stabilité
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE122"  name="siege_ventilite" type="checkbox" value="0">
                                                <label for="checkboxE122">
                                                    Sièges ventilés
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE131" name="crochet_atelage" type="checkbox" value="0">
                                                <label for="checkboxE131">
                                                    Crochet d’attelage
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE132"  name="Suspension_augmente"type="checkbox" value="0">
                                                <label for="checkboxE132">
                                                    Suspension augmenté
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE141" name="dispositif_mail_libre" type="checkbox" value="0">
                                                <label for="checkboxE141">
                                                    Dispositif mains libres
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE142"  name="Suspension_pneumatique" type="checkbox" value="0">
                                                <label for="checkboxE142">
                                                    Suspension pneumatique
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE151" name="hard_top" type="checkbox" value="0">
                                                <label for="checkboxE151">
                                                    Hardtop
                                                </label>
                                            </div>
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
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE161"  name="bluetooth" type="checkbox" value="0">
                                                <label for="checkboxE161">
                                                    Interface bluetooth
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE162" name="Systeme_de_navigation_integrer" type="checkbox" value="0">
                                                <label for="checkboxE162">
                                                    Intégré
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE171" name="isofix" type="checkbox" value="0">
                                                <label for="checkboxE171">
                                                    Isofix
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE172" name="Systeme_de_navigation_Portable" type="checkbox" value="0">
                                                <label for="checkboxE172">
                                                    Portable
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE181" name="jantes" type="checkbox" value="0">
                                                <label for="checkboxE181">
                                                    Jantes en alu
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE182"  name="Systeme_de_navigation_Systeme_de_suivi_de_voie" type="checkbox" value="0">
                                                <label for="checkboxE182">
                                                    Système de suivi de voie
                                                </label>
                                            </div>
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
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE192"  name="Systeme_start_stop"type="checkbox" value="0">
                                                <label for="checkboxE192">
                                                    Système start/stop
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd" >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE201" type="checkbox" name="phare_laser"  value="0" value="0">
                                                <label for="checkboxE201">
                                                    Laser
                                                </label>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE202" type="checkbox" name="Toit_ouvrant"  value="0" value="0">
                                                <label for="checkboxE202">
                                                    Toit ouvrant
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd" >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE211" type="checkbox" name="phare_laser1"  value="0" value="0">
                                                <label for="checkboxE211">
                                                    Laser
                                                </label>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE212" type="checkbox" name="Verrouillage_du_differentiel"  value="0" value="0">
                                                <label for="checkboxE212">
                                                    Verrouillage du différentiel
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd" >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE221" type="checkbox" name="phare_xenon" value="0">
                                                <label for="checkboxE221">
                                                    Xénon
                                                </label>
                                            </div>
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
                                        <label>Cylindrée </label>
                                        <br>
                                        {!! Form::select("Cylindree" ,Cylindree() , null ,array(
                                        'placeholder' => 'Tous','id' => 'soflow')) !!}

                                    </div>


                                    <div >
                                        <label>Consommation jusqu'à</label>
                                        <bR>
                                        {!! Form::select("consommations" ,Consommation() , null ,array(
                                   'placeholder' => 'Tous','id' => 'soflow')) !!}
                                    </div>
                                    <div >

                                        <label> </label>
                                        <bR>


                                    </div>
                                </div>
                            </div>
                            <div class="panelB">
                                <div class="row vertical-align">

                                    <div >
                                        <label>Emission CO2 jusqu'à</label>
                                        <br>
                                        {!! Form::select("Emission_CO2" ,Emission_CO2() , null ,array(
                                     'placeholder' => 'Tous','id' => 'soflow')) !!}
                                    </div>

                                    <div >
                                        <label>Catégorie énergétique</label>
                                        <bR>
                                        {!! Form::select("cathe_energeri" ,cathe_energeri() , null ,array(
                                'placeholder' => 'Tous ','id' => 'soflow')) !!}

                                    </div>
                                    <div >
                                        <label>Normes d'émission Euro</label>
                                        <bR>
                                        {!! Form::select("normes" ,normes() , null ,array(
                               'placeholder' => 'Tous ','id' => 'soflow')) !!}


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
                                        <label>Canton</label>
                                        <bR>
                                        {!! Form::select("ville" ,ville() , null ,array('id'=>'soflow','placeholder' => 'Tous' )) !!}
                                                <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->


                                        </select>
                                    </div>

                                    <div>
                                        <label>Rayon</label>
                                        <bR>
                                        {!! Form::select("rayon" ,Rayon()  , null ,array('id'=>'soflow','placeholder' => 'Tous' )) !!}


                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>





            <div class="b-search__main-form-submit" >
                <a href={{url('/advancedsearch')}}>Réinitialiser</a>
                <button type="submit" class="btn m-btn"  style="font-size: 70%; padding: 12px ">LANCER LA RECHERCHE<span class="fa fa-angle-right"></span></button>
            </div>



        </div>


    </div>

</aside>

{{ Form::close() }}




