




{{ Form::open(['url' => '/camionsearch', 'method' => 'get']) }}

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
                            <input id="carroserie0c" type="checkbox">
                            <label for="carroserie0c">
                                Break
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie1c" type="checkbox">
                            <label for="carroserie1c">
                                Coupé
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie2c" type="checkbox">
                            <label for="carroserie2c">
                                Petite voiture
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie3c" type="checkbox">
                            <label for="carroserie3c">
                                Bus
                            </label>
                        </div>
                    </td>

                </tr>

                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie4c" type="checkbox">
                            <label for="carroserie4c">
                                Limousine
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie5c" type="checkbox">
                            <label for="carroserie5c">
                                Pick-up
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie6c" type="checkbox">
                            <label for="carroserie6c">
                                Cabriolet
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie7c" type="checkbox">
                            <label for="carroserie7c">
                                MPV / minibus
                            </label>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie8c" type="checkbox">
                            <label for="carroserie8c">
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


                    <div class="colonne">
                        <?php
                        $get_camion_marque = App\Camion::groupBy('camion_marque')->where('validation',1)
                                ->distinct()->get(['camion_marque']);
                        ?>
                        {!! Form::select("camion_marque" ,
                     App\AutoMarque::whereIn('id',$get_camion_marque)->pluck('camion_marque','id')
                     , null ,array('id'=>'auto_select','class'=>'camion_marque_id','placeholder' => 'marque' )) !!}



                    </div>


                    <div class="col-xs-4 camion_model ">
                        <select  class="camion_model" id="auto_select" >
                            <option  selected="">Modele</option>
                        </select>

                        <span class="fa fa-caret-down hidden"></span>
                    </div>





                    <div class="colonne">

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
                    <div class="colonne">
                        <label>Mois </label>
                        <br>
                        {!! Form::select("auto_month" ,auto_month() ,
                         null,array('class' => 'm-selectt','placeholder' => 'Tous', 'id' => 'soflow' ) ) !!}

                    </div>



                </div>
                <div class="ligne">

                    <div class="colonne" >
                        <label>CV </label>
                        <br>
                        {!! Form::select("cv" ,cv() , null ,array('class' => 'm-selectt',
                        'placeholder' => 'Tous', 'id' => 'soflow' )) !!}

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
                            <input id="checkboxEc" name="expertiser" type="checkbox" value="0">
                            <label for="checkboxEc">
                                Expertisée
                            </label>
                        </div>
                    </div>
                    <div class="colonne">
                        <label> </label>
                        <bR>
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkboxVA1c"  name="Vehicule_non_accidentee" type="checkbox" value="0">
                            <label for="checkboxVA1c">
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
                            <input id="checkboxGc" name="garanti" type="checkbox" value="0">
                            <label for="checkboxGc">
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
                                            {!! Form::select("porte" ,porte() , null ,
                                            array('class' => 'form-control','placeholder'=>'Tous', 'id' => 'soflow' )) !!}


                                        </div>


                                        <div class="colonne">
                                            <label>Couleur intérieure</label>
                                            <bR>
                                            {!! Form::select("auto_coloren" ,
                                            couleuren() , null ,array('class' => 'form-control',
                                            'placeholder' => 'Tous', 'id' => 'soflow' )) !!}

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
                                                <input id="checkboxE1c" name="acee_san_cle" type="checkbox" name=""  value="0">
                                                <label for="checkboxE1c">
                                                    Accès et démarrage sans clé
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE2c" name="phare_derectionnel" type="checkbox" value="0">
                                                <label for="checkboxE2c">
                                                    Phares directionnels
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE3c"  name="jeux_de_pneus" type="checkbox" value="0">
                                                <label for="checkboxE3c">
                                                    2 jeux de pneus/roues
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE4c" name="Pour_handicapes" type="checkbox" value="0">
                                                <label for="checkboxE4c">
                                                    Pour handicapés
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE21c" name="parcage" type="checkbox" value="0">
                                                <label for="checkboxE21c">
                                                    Aide au parcage
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE22c" name="reglage_desiege_electrique" type="checkbox" value="0">
                                                <label for="checkboxE22c">
                                                    Réglage électrique des sièges
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE23c" name="Autobus_scolaires" type="checkbox" value="0">
                                                <label for="checkboxE23c">
                                                    Autobus scolaires
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE24c"  name="Pour_lexportation" type="checkbox" value="0">
                                                <label for="checkboxE24c">
                                                    Pour l'exportation
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE31c" name="Assistant" type="checkbox" value="0">
                                                <label for="checkboxE31c">
                                                    Assistant d’angle mort
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE32c" name="reglage_de_distance" type="checkbox" value="0">
                                                <label for="checkboxE32c">
                                                    Régulateur de la distance
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE33c"  name="Autotransporter"type="checkbox" value="0">
                                                <label for="checkboxE33c">
                                                    Autotransporter
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE34c" name="Vehicule_accidentee" type="checkbox" value="0">
                                                <label for="checkboxE34c">
                                                    Véhicule accidentée
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE41c" name="camera" type="checkbox" value="0">
                                                <label for="checkboxE41c">
                                                    Caméra de recul
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE42c" name="regleur_vitesse" type="checkbox" value="0">
                                                <label for="checkboxE42c">
                                                    Régulateur de vitesse
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE43c" name="Bache"type="checkbox" value="0">
                                                <label for="checkboxE43c">
                                                    Bâche
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE51c"  name="capteur_arriere"type="checkbox" value="0">
                                                <label for="checkboxE51c">
                                                    Capteurs de stationnement arrière
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE52c"  name="radio_DAB" type="checkbox" value="0">
                                                <label for="checkboxE52c">
                                                    Radio DAB+
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE53c" name="Camion_de_meubles" type="checkbox" value="0">
                                                <label for="checkboxE53c">
                                                    Camion de meubles
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE61c"  name="capteur_avant" type="checkbox" value="0">
                                                <label for="checkboxE61c">
                                                    Capteurs de stationnement avant
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <label for="checkboxE62c">
                                                    Sellerie
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE63c"  name="Grue" type="checkbox" value="0">
                                                <label for="checkboxE63c">
                                                    Grue
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE71c" name="capteur_avant1"type="checkbox" value="0">
                                                <label for="checkboxE71c">
                                                    Capteurs de stationnement avant
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE72c"  name="sallerie_alcantara" type="checkbox" value="0">
                                                <label for="checkboxE72c">
                                                    Alcantara®
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE73c" name="Plateforme_de_levage" type="checkbox" value="0">
                                                <label for="checkboxE73c">
                                                    Plateforme de levage
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE81c" name="chauffage" type="checkbox" value="0">
                                                <label for="checkboxE81c">
                                                    Chauffage de stationnement
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE82c" name="sallerie_cuire" type="checkbox" value="0">
                                                <label for="checkboxE82c">
                                                    Cuir
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE83c" name="Porte_bagages" type="checkbox" value="0">
                                                <label for="checkboxE83c">
                                                    Porte-bagages
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <label for="checkboxE91c">
                                                    Climatisation
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE92c" name="sallerie_partiellement_cuire" type="checkbox" value="0">
                                                <label for="checkboxE92c">
                                                    Partiellement en cuir
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE93c"  name="Transports_frigorlifique" type="checkbox" value="0">
                                                <label for="checkboxE93c">
                                                    Transports frigorlifique
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE101c" name="climatisation_automatique" type="checkbox" value="0">
                                                <label for="checkboxE101c">
                                                    Automatique
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE102c"  name="sallerie_tissu" type="checkbox" value="0">
                                                <label for="checkboxE102c">
                                                    Tissu
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE103c"  name="Treuil" type="checkbox" value="0">
                                                <label for="checkboxE103c">
                                                    Treuil
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE111c"  name="climatisation_manuell" type="checkbox" value="0">
                                                <label for="checkboxE111c">
                                                    Manuelle
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE112c" name="siege_chauffant" type="checkbox" value="0">
                                                <label for="checkboxE112c">
                                                    Sièges chauffants
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE121c" name="control_stabilite" type="checkbox" value="0">
                                                <label for="checkboxE121c">
                                                    Contrôle de la stabilité
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE122c"  name="siege_ventilite" type="checkbox" value="0">
                                                <label for="checkboxE122c">
                                                    Sièges ventilés
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE131c" name="crochet_atelage" type="checkbox" value="0">
                                                <label for="checkboxE131c">
                                                    Crochet d’attelage
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE132c"  name="Suspension_augmente"type="checkbox" value="0">
                                                <label for="checkboxE132c">
                                                    Suspension augmenté
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE141c" name="dispositif_mail_libre" type="checkbox" value="0">
                                                <label for="checkboxE141c">
                                                    Dispositif mains libres
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE142c"  name="Suspension_pneumatique" type="checkbox" value="0">
                                                <label for="checkboxE142c">
                                                    Suspension pneumatique
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE151c" name="hard_top" type="checkbox" value="0">
                                                <label for="checkboxE151c">
                                                    Hardtop
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <label for="checkboxE152c">
                                                    Système de navigation
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE161c"  name="bluetooth" type="checkbox" value="0">
                                                <label for="checkboxE161c">
                                                    Interface bluetooth
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE162c" name="Systeme_de_navigation_integrer" type="checkbox" value="0">
                                                <label for="checkboxE162c">
                                                    Intégré
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE171c" name="isofix" type="checkbox" value="0">
                                                <label for="checkboxE171c">
                                                    Isofix
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE172c" name="Systeme_de_navigation_Portable" type="checkbox" value="0">
                                                <label for="checkboxE172c">
                                                    Portable
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE181c" name="jantes" type="checkbox" value="0">
                                                <label for="checkboxE181c">
                                                    Jantes en alu
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE182c"  name="Systeme_de_navigation_Systeme_de_suivi_de_voie" type="checkbox" value="0">
                                                <label for="checkboxE182c">
                                                    Système de suivi de voie
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td  >
                                            <div class="checkbox checkbox-theme checkbox-circle" >
                                                <label for="checkboxE191c" hidden>
                                                    Phares
                                                </label>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE192c"  name="Systeme_start_stop"type="checkbox" value="0">
                                                <label for="checkboxE192c">
                                                    Système start/stop
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd" >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE201c" type="checkbox" name="phare_laser"  value="0" value="0">
                                                <label for="checkboxE201c">
                                                    Laser
                                                </label>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE202c" type="checkbox" name="Toit_ouvrant"  value="0" value="0">
                                                <label for="checkboxE202c">
                                                    Toit ouvrant
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd" >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE211c" type="checkbox" name="phare_laser1"  value="0" value="0">
                                                <label for="checkboxE211c">
                                                    Laser
                                                </label>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE212c" type="checkbox" name="Verrouillage_du_differentiel"  value="0" value="0">
                                                <label for="checkboxE212c">
                                                    Verrouillage du différentiel
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd" >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE221c" type="checkbox" name="phare_xenon" value="0">
                                                <label for="checkboxE221c">
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
                                        {!! Form::select("ville" ,ville() , null ,
                                        array('id'=>'soflow','placeholder' => 'Tous' )) !!}
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
