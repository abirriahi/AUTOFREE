

{{ Form::open(['url' => '/campingsearch', 'method' => 'get']) }}

<aside class="sidebar-widget">
    <!-- Review search -->
    <div class="single-block review">
        <!-- Types de Carrosserie-->
        <!-- Types de Carrosserie-->
        <div class="">
            <!-- title-->
            <h3 class="title">Types de Carrosserie</h3>
            <table width="80%" align="center">
                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox0cc" type="checkbox">
                            <label for="checkbox0cc">
                                Autres
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox1cc" type="checkbox">
                            <label for="checkbox1cc">
                                caravane
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox2cc" type="checkbox">
                            <label for="checkbox2cc">
                                Semi-intégré
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox3cc" type="checkbox">
                            <label for="checkbox3cc">
                                Cabine
                            </label>
                        </div>
                    </td>

                </tr>

                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox4cc" type="checkbox">
                            <label for="checkbox4cc">
                                Fourgon
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox5cc" type="checkbox">
                            <label for="checkbox5cc">
                                Pick-up
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox6cc" type="checkbox">
                            <label for="checkbox6cc">
                                Capucine
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox7cc" type="checkbox">
                            <label for="checkbox7cc">
                                Camping car Pick-Up
                            </label>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox8cc" type="checkbox">
                            <label for="checkbox8cc">
                                Intégré
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
                        $(document).on('change','.camping_marque_id',function (){
                            var camping_marque = $('.camping_marque_id option:selected').val();
                            if(camping_marque > 0)
                            {

                                $.ajax({
                                    url:"{{url('get/camping_model')}}",

                                    dataType:'html',
                                    type:'get',
                                    data:{camping_marque_2:camping_marque},
                                    success: function(data)
                                    {
                                        $('.camping_model').html(data);
                                        $('.camping_model_data').removeClass('hidden');
                                    }

                                });

                            }
                        });
                    </script>

                    <div class="colonne">
                        <?php
                        $get_camping_marque = App\Camping::groupBy('camping_marque')->where('validation',1)
                                ->distinct()->get(['camping_marque']);
                        ?>
                        {!! Form::select("camping_marque" ,
                            App\AutoMarque::whereIn('id',$get_camping_marque)->pluck('camping_marque','id')
                             , null ,array('id'=>'auto_select','class'=>'camping_marque_id','placeholder' => 'Tous' )) !!}



                    </div>
                    <div class="colonne">
                        <select  class="camping_model" id="auto_select" >
                            <option  selected="">Tous</option>
                        </select>

                        <span class="fa fa-caret-down hidden"></span>
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
                        {!! Form::select("auto_vitesse" ,auto_vitesse() , null ,array('class' => 'm-selectt',
                        'placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>
                    <div class="colonne">
                        <label>Roues motrices</label>
                        <bR>
                        {!! Form::select("Roues" ,Roues() , null ,array('class' => 'm-selectt','placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>


                </div>
                <div class="ligne">
                    <div class="colonne">
                        <label>Kilométres</label>

                        {!! Form::select("auto_km" ,km() ,
                       null ,array('class' => 'm-selectt','placeholder' => ' Tous', 'id' => 'soflow' )) !!}



                    </div>


                    <div class="colonne">
                        <label>Carburant</label>
                        <bR>
                        {!! Form::select("auto_carburan" ,auto_carburan() , null ,array('class' => 'm-selectt',
                        'placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>
                    <div class="colonne">
                        <label>Catégorie de véhicule</label>
                        <bR>
                        {!! Form::select("auto_categorie" ,categorie() , null ,array('class' => 'm-selectt',
                        'placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>


                </div>
                <div class="ligne">

                    <div class="colonne">
                        <label>Année </label>
                        <br>
                        {!! Form::select("auto_year" ,auto_year() , null,array('class' => 'm-selectt',
                        'placeholder' => 'Tous', 'id' => 'soflow' ) ) !!}

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

                    <div class="colonne" >
                        <label>CV </label>
                        <br>
                        {!! Form::select("cv" ,cv() , null ,array('class' => 'm-selectt',
                        'placeholder' => 'Tous', 'id' => 'soflow' )) !!}

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

                    <div  class="colonne">
                        <label>POIDS TOTAL MAX (KG) </label>
                        <br>
                        {!! Form::select("PoidsRemorque" ,PoidsRemorque() , null ,array('class' => 'form-control',
                        'placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>

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
                                <b> <h3 class="panel-title">Couleur, places </h3></b>
                                <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                            </div>

                            <div class="panel-body">
                                <div class="panelB">
                                    <div class="ligne">

                                        <div class="colonne" >
                                            <label>Sièges de</label>
                                            <br>
                                            {!! Form::select("auto_siege" ,auto_siege() , null ,
                                            array('class' => 'form-control','placeholder'=>'Tous', 'id' => 'soflow' )) !!}

                                        </div>


                                        <div class="colonne">
                                            <label>Couleur extérieure</label>
                                            <bR>
                                            {!! Form::select("auto_colorex" ,couleurex() ,
                                             null ,array('class' => 'form-control','placeholder'=>'Tous', 'id' => 'soflow' )) !!}

                                        </div>
                                        <div class="colonne">
                                            <label> </label>
                                            <bR>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxM1cc" name="metaliser" type="checkbox" value="0">
                                                <label for="checkboxM1cc">
                                                    Métalisé
                                                </label>
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


                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE1cc" type="checkbox">
                                                <label for="checkboxE1cc">
                                                    ABS
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE2cc" type="checkbox">
                                                <label for="checkboxE2cc">
                                                    Douche
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE3cc" type="checkbox">
                                                <label for="checkboxE3cc">
                                                    Pour handicapés
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE21cc" type="checkbox">
                                                <label for="checkboxE21cc">
                                                    Aide au parcage
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE22cc" type="checkbox">
                                                <label for="checkboxE22cc">
                                                    Régulateur automatique de traction
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE23cc" type="checkbox">
                                                <label for="checkboxE23cc">
                                                    Véhicule accidentée
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE31cc" type="checkbox">
                                                <label for="checkboxE31cc">
                                                    Climatisation
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE32cc" type="checkbox">
                                                <label for="checkboxE32cc">
                                                    Régulateur de vitesse
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE41cc" type="checkbox">
                                                <label for="checkboxE41cc">
                                                    Automatique
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE42cc" type="checkbox">
                                                <label for="checkboxE42cc">
                                                    Système de navigation
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE51cc" type="checkbox">
                                                <label for="checkboxE51cc">
                                                    Manuelle
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE52cc" type="checkbox">
                                                <label for="checkboxE52cc">
                                                    Intégré
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE61cc" type="checkbox">
                                                <label for="checkboxE61cc">
                                                    Contrôle de la stabilité
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE62cc" type="checkbox">
                                                <label for="checkboxE62cc">
                                                    Portable
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE71cc" type="checkbox">
                                                <label for="checkboxE71cc">
                                                    Crochet d’attelage
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE72cc" type="checkbox">
                                                <label for="checkboxE72cc">
                                                    Toilette
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE81cc" type="checkbox">
                                                <label for="checkboxE81cc">
                                                    Cuisine
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE82cc" type="checkbox">
                                                <label for="checkboxE82cc">
                                                    TV
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE91cc" type="checkbox">
                                                <label for="checkboxE91cc">

                                                    Dispositif anti-vol
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE92cc" type="checkbox">
                                                <label for="checkboxE92cc">
                                                    Verrouillage du différentiel
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
                                        <label>Cylindrée d</label>
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

                                        <label>

                                        </label>
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

                                    <div>
                                        <label>Rayon</label>
                                        <bR>
                                        {!! Form::select("rayon" ,Rayon()  , null ,array('id'=>'soflow','placeholder' => 'Tous' )) !!}


                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" hidden>
                        <div class="panel-heading">
                            <h3 class="panel-title">Date de publication de l’annonce, divers</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                            <div class="panelB">
                                <div class="row vertical-align">

                                    <div >
                                        <label>Age de l'annonce</label>
                                        <br>
                                        <select id="soflow">
                                            <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                                            <option>Tous</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                        </select>
                                    </div>

                                    <div >
                                        <label>Sigle de qualité</label>
                                        <bR>
                                        <select id="soflow">
                                            <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                                            <option>Select an Option</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                        </select>
                                    </div>
                                    <div >
                                        <label>Trier</label>
                                        <bR>
                                        <select id="soflow">
                                            <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                                            <option>Select an Option</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                        </select>
                                    </div>
                                    <div >
                                        <label>Siège de la marque</label>
                                        <bR>
                                        <select id="soflow">
                                            <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                                            <option>Select an Option</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                        </select>
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




