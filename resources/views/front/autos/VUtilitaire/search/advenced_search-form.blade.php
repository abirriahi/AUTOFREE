

{{ Form::open(['url' => '/vehiculesearch', 'method' => 'get']) }}

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
                            <input id="carroserie0v" type="checkbox">
                            <label for="carroserie0v">
                                Plateau
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie1v" type="checkbox">
                            <label for="carroserie1v">
                                Fourgon
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie2v" type="checkbox">
                            <label for="carroserie2v">
                                Plateau cabine double
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie3v" type="checkbox">
                            <label for="carroserie3v">
                                Bus
                            </label>
                        </div>
                    </td>

                </tr>

                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie4v" type="checkbox">
                            <label for="carroserie4v">
                                Break
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie5v" type="checkbox">
                            <label for="carroserie5v">
                                Fourgon cabine doulbe
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie6v" type="checkbox">
                            <label for="carroserie6v">
                                Plate-forme
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie7v" type="checkbox">
                            <label for="carroserie7v">
                                Pick-up
                            </label>
                        </div>
                    </td>

                </tr>

                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie8v" type="checkbox">
                            <label for="carroserie8v">
                                Bus
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie9v" type="checkbox">
                            <label for="carroserie9v">
                                Fourgon vitré
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie10v" type="checkbox">
                            <label for="carroserie10v">
                                Semi-remorques
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie11v" type="checkbox">
                            <label for="carroserie11v">
                                Pick-up
                            </label>
                        </div>
                    </td>

                </tr>

                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie12v" type="checkbox">
                            <label for="carroserie12v">
                                Cabine châssis
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie13v" type="checkbox">
                            <label for="carroserie13v">
                                Tribenne & Plateau
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
                        $(document).on('change','.vehicule_marque_id',function (){
                            var vehicule_marque = $('.vehicule_marque_id option:selected').val();
                            if(vehicule_marque > 0)
                            {

                                $.ajax({
                                    url:"{{url('get/vehicule_model')}}",

                                    dataType:'html',
                                    type:'get',
                                    data:{vehicule_marque_2:vehicule_marque},
                                    success: function(data)
                                    {
                                        $('.vehicule_model').html(data);
                                        $('.vehicule_model_data').removeClass('hidden');
                                    }

                                });

                            }
                        });
                    </script>
                    <div class="colonne">
                        <label>Marque</label>

                    <?php
                        $get_vehicule_marque = App\Vehicule::groupBy('vehicule_marque')->where('validation',1)->distinct()->get(['vehicule_marque']);
                        ?>
                        {!! Form::select("vehicule_marque" ,
                         App\AutoMarque::whereIn('id',$get_vehicule_marque)->pluck('vehicule_marque','id')
                         , null ,array('id'=>'auto_select','class'=>'vehicule_marque_id','placeholder' => 'Tous' )) !!}


                    </div>


                    <div class="colonne ">
                        <label>Modele</label>

                        <select  class="vehicule_model" id="auto_select" >
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
                    <div class="colonne">
                        <label>Roues motrices</label>
                        <bR>
                        {!! Form::select("Roues" ,Roues() ,
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
                        <label>CV </label>
                        <br>
                        {!! Form::select("cv" ,cv() , null ,array('class' => 'm-selectt','placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>
                    <div  class="colonne">
                        <label>Poids remorquable freiné </label>
                        <br>
                        {!! Form::select("PoidsRemorque" ,PoidsRemorque() ,
                        null ,array('class' => 'form-control','placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>




                    <div class="colonne">
                        <label>Caractéristiques</label>
                        <bR>
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkboxEv" name="expertiser" type="checkbox" value="0">
                            <label for="checkboxEv">
                                Expertisée
                            </label>
                        </div>
                    </div>
                    <div class="colonne">
                        <label> </label>
                        <bR>
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkboxVA1v"  name="Vehicule_non_accidentee" type="checkbox" value="0">
                            <label for="checkboxVA1v">
                                Véhicules non accidentés
                            </label>
                        </div>
                    </div>


                </div>
                <div class="ligne">
                    <div class="colonne" >
                        <label> </label>
                        <br>

                    </div>
                    <div class="colonne" >
                        <label> </label>
                        <br>

                    </div>


                    <div class="colonne">
                        <label>   </label>
                        <bR>
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkboxGv" name="garanti" type="checkbox" value="0">
                            <label for="checkboxGv">
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
                                            {!! Form::select("porte" ,porte() , null ,array('class' => 'form-control',
                                            'placeholder'=>'Tous', 'id' => 'soflow' )) !!}


                                        </div>


                                        <div class="colonne">
                                            <label>Couleur intérieure</label>
                                            <bR>
                                            {!! Form::select("auto_coloren" ,couleuren() , null
                                            ,array('class' => 'form-control','placeholder' => 'Tous', 'id' => 'soflow' )) !!}

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
                                                <input id="checkboxE1v" name="acee_san_cle" type="checkbox" name=""  value="0">
                                                <label for="checkboxE1v">
                                                    Accès et démarrage sans clé
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE2v" name="phare_derectionnel" type="checkbox" value="0">
                                                <label for="checkboxE2v">
                                                    Phares directionnels
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE3v"  name="jeux_de_pneus" type="checkbox" value="0">
                                                <label for="checkboxE3v">
                                                    2 jeux de pneus/roues
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE4v" name="Pour_handicapes" type="checkbox" value="0">
                                                <label for="checkboxE4v">
                                                    Pour handicapés
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE21v" name="parcage" type="checkbox" value="0">
                                                <label for="checkboxE21v">
                                                    Aide au parcage
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE22v" name="reglage_desiege_electrique" type="checkbox" value="0">
                                                <label for="checkboxE22v">
                                                    Réglage électrique des sièges
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE23v" name="Autobus_scolaires" type="checkbox" value="0">
                                                <label for="checkboxE23v">
                                                    Autobus scolaires
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE24v"  name="Pour_lexportation" type="checkbox" value="0">
                                                <label for="checkboxE24v">
                                                    Pour l'exportation
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE31v" name="Assistant" type="checkbox" value="0">
                                                <label for="checkboxE31v">
                                                    Assistant d’angle mort
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE32v" name="reglage_de_distance" type="checkbox" value="0">
                                                <label for="checkboxE32v">
                                                    Régulateur de la distance
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE33v"  name="Autotransporter"type="checkbox" value="0">
                                                <label for="checkboxE33v">
                                                    Autotransporter
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE34v" name="Vehicule_accidentee" type="checkbox" value="0">
                                                <label for="checkboxE34v">
                                                    Véhicule accidentée
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE41v" name="camera" type="checkbox" value="0">
                                                <label for="checkboxE41v">
                                                    Caméra de recul
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE42v" name="regleur_vitesse" type="checkbox" value="0">
                                                <label for="checkboxE42v">
                                                    Régulateur de vitesse
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE43v" name="Bache"type="checkbox" value="0">
                                                <label for="checkboxE43v">
                                                    Bâche
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE51v"  name="capteur_arriere"type="checkbox" value="0">
                                                <label for="checkboxE51v">
                                                    Capteurs de stationnement arrière
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE52v"  name="radio_DAB" type="checkbox" value="0">
                                                <label for="checkboxE52">
                                                    Radio DAB+
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE53v" name="Camion_de_meubles" type="checkbox" value="0">
                                                <label for="checkboxE53v">
                                                    Camion de meubles
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE61v"  name="capteur_avant" type="checkbox" value="0">
                                                <label for="checkboxE61v">
                                                    Capteurs de stationnement avant
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <label for="checkboxE62v">
                                                    Sellerie
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE63v"  name="Grue" type="checkbox" value="0">
                                                <label for="checkboxE63v">
                                                    Grue
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE71v" name="capteur_avant1"type="checkbox" value="0">
                                                <label for="checkboxE71v">
                                                    Capteurs de stationnement avant
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE72v"  name="sallerie_alcantara" type="checkbox" value="0">
                                                <label for="checkboxE72v">
                                                    Alcantara®
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE73v" name="Plateforme_de_levage" type="checkbox" value="0">
                                                <label for="checkboxE73v">
                                                    Plateforme de levage
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE81v" name="chauffage" type="checkbox" value="0">
                                                <label for="checkboxE81v">
                                                    Chauffage de stationnement
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE82v" name="sallerie_cuire" type="checkbox" value="0">
                                                <label for="checkboxE82v">
                                                    Cuir
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE83v" name="Porte_bagages" type="checkbox" value="0">
                                                <label for="checkboxE83v">
                                                    Porte-bagages
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <label for="checkboxE91v">
                                                    Climatisation
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE92v" name="sallerie_partiellement_cuire" type="checkbox" value="0">
                                                <label for="checkboxE92v">
                                                    Partiellement en cuir
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE93v"  name="Transports_frigorlifique" type="checkbox" value="0">
                                                <label for="checkboxE93v">
                                                    Transports frigorlifique
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE101v" name="climatisation_automatique" type="checkbox" value="0">
                                                <label for="checkboxE101v">
                                                    Automatique
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE102v"  name="sallerie_tissu" type="checkbox" value="0">
                                                <label for="checkboxE102v">
                                                    Tissu
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE103v"  name="Treuil" type="checkbox" value="0">
                                                <label for="checkboxE103v">
                                                    Treuil
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE111v"  name="climatisation_manuell" type="checkbox" value="0">
                                                <label for="checkboxE111v">
                                                    Manuelle
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE112v" name="siege_chauffant" type="checkbox" value="0">
                                                <label for="checkboxE112v">
                                                    Sièges chauffants
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE121v" name="control_stabilite" type="checkbox" value="0">
                                                <label for="checkboxE121v">
                                                    Contrôle de la stabilité
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE122v"  name="siege_ventilite" type="checkbox" value="0">
                                                <label for="checkboxE122v">
                                                    Sièges ventilés
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE131v" name="crochet_atelage" type="checkbox" value="0">
                                                <label for="checkboxE131v">
                                                    Crochet d’attelage
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE132v"  name="Suspension_augmente"type="checkbox" value="0">
                                                <label for="checkboxE132v">
                                                    Suspension augmenté
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE141v" name="dispositif_mail_libre" type="checkbox" value="0">
                                                <label for="checkboxE141v">
                                                    Dispositif mains libres
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE142v"  name="Suspension_pneumatique" type="checkbox" value="0">
                                                <label for="checkboxE142v">
                                                    Suspension pneumatique
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE151v" name="hard_top" type="checkbox" value="0">
                                                <label for="checkboxE151v">
                                                    Hardtop
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <label for="checkboxE152v">
                                                    Système de navigation
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE161v"  name="bluetooth" type="checkbox" value="0">
                                                <label for="checkboxE161v">
                                                    Interface bluetooth
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE162v" name="Systeme_de_navigation_integrer" type="checkbox" value="0">
                                                <label for="checkboxE162v">
                                                    Intégré
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE171v" name="isofix" type="checkbox" value="0">
                                                <label for="checkboxE171v">
                                                    Isofix
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE172v" name="Systeme_de_navigation_Portable" type="checkbox" value="0">
                                                <label for="checkboxE172v">
                                                    Portable
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE181v" name="jantes" type="checkbox" value="0">
                                                <label for="checkboxE181v">
                                                    Jantes en alu
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE182v"  name="Systeme_de_navigation_Systeme_de_suivi_de_voie" type="checkbox" value="0">
                                                <label for="checkboxE182v">
                                                    Système de suivi de voie
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td  >
                                            <div class="checkbox checkbox-theme checkbox-circle" >
                                                <label for="checkboxE191v" hidden>
                                                    Phares
                                                </label>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE192v"  name="Systeme_start_stop"type="checkbox" value="0">
                                                <label for="checkboxE192v">
                                                    Système start/stop
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd" >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE201v" type="checkbox" name="phare_laser"  value="0" value="0">
                                                <label for="checkboxE201v">
                                                    Laser
                                                </label>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE202v" type="checkbox" name="Toit_ouvrant"  value="0" value="0">
                                                <label for="checkboxE202v">
                                                    Toit ouvrant
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd" >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE211v" type="checkbox" name="phare_laser1"  value="0" value="0">
                                                <label for="checkboxE211v">
                                                    Laser
                                                </label>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE212v" type="checkbox" name="Verrouillage_du_differentiel"  value="0" value="0">
                                                <label for="checkboxE212v">
                                                    Verrouillage du différentiel
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd" >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE221v" type="checkbox" name="phare_xenon" value="0">
                                                <label for="checkboxE221v">
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
                                'placeholder' => 'Tous','id' => 'soflow')) !!}

                                    </div>
                                    <div >
                                        <label>Normes d'émission Euro</label>
                                        <bR>
                                        {!! Form::select("normes" ,normes() , null ,array(
                               'placeholder' => 'Tous','id' => 'soflow')) !!}


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

                                    <div >
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





            <div class="b-search__main-form-submit">
                <a href={{url('/advancedsearch')}}>Réinitialiser</a>
                <button type="submit" class="btn m-btn" style="font-size: 70%; padding: 12px ">LANCER LA RECHERCHE<span class="fa fa-angle-right"></span></button>
            </div>



        </div>


    </div>

</aside>

{{ Form::close() }}




        <!-- script  checkbox  recherche avancé carroserie -->

