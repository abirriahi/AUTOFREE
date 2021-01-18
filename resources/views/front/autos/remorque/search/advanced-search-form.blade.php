{{ Form::open(['url' => '/remorquesearch', 'method' => 'get']) }}


<aside class="sidebar-widget">
    <!-- Review search -->
    <div class="single-block review">
        <!-- Types de Carrosserie-->
        <!-- Types de Carrosserie-->
        <div class="">
            <!-- title-->
            <h3 class="title">Types de Carrosserie</h3>
            <table width="100%">
                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie0r" type="checkbox">
                            <label for="carroserie0r">
                                Ascenseur
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie1r" type="checkbox">
                            <label for="carroserie1r">
                                Autres
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie2r" type="checkbox">
                            <label for="carroserie2r">
                                Remorque pour voiture
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie3r" type="checkbox">
                            <label for="carroserie3r">
                                Plateau
                            </label>
                        </div>
                    </td>

                </tr>

                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie4r" type="checkbox">
                            <label for="carroserie4r">
                                Remorque pour bateau
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie5r" type="checkbox">
                            <label for="carroserie5r">
                                Tribenne & Plateau
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie6r" type="checkbox">
                            <label for="carroserie6r">
                                Caisson isotherme et frigorifique
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie7r" type="checkbox">
                            <label for="carroserie7r">
                                Remorque pour cheval
                            </label>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie8r" type="checkbox">
                            <label for="carroserie8r">
                                Remorque pour moto
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie9r" type="checkbox">
                            <label for="carroserie9r">
                                Réservoir
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox10r" type="checkbox">
                            <label for="checkbox10r">
                                Surbaissé
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox11r" type="checkbox">
                            <label for="checkbox11r">
                                Transport Bovins
                            </label>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox12r" type="checkbox">
                            <label for="checkbox12r">
                                Auto Transporter
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie13r" type="checkbox">
                            <label for="carroserie13r">
                                Remorque pour vente
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie14r" type="checkbox">
                            <label for="carroserie14r">
                                Transporteur de bois
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

                    <div class="colonne">
                        <label>Marque</label>

                    <?php
                        $get_remorque_marque = App\Remorque::groupBy('remorque_marque')->where('validation',1)
                                ->distinct()->get(['remorque_marque']);
                        ?>

                        {!! Form::select("remorque_marque" ,
                                             App\AutoMarque::whereIn('id',$get_remorque_marque)->pluck('remorque_marque','id')
                                             , null ,array('id'=>'auto_select',
                                             'class'=>'remorque_marque_id','placeholder' => 'Tous' )) !!}

                    </div>



                    <div class="colonne">
                        <label>Modele</label>

                        <select  class="remorque_model"  id="auto_select" >
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
                        <label>Poids remorquable freiné de</label>
                        <br>
                        {!! Form::select("PoidsRemorque" ,PoidsRemorque() ,
                        null ,array('class' => 'form-control','placeholder' => 'Tous', 'id' => 'soflow' )) !!}

                    </div>




                    <div class="colonne">
                        <label>Caractéristiques</label>
                        <bR>
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkboxEr" name="expertiser" type="checkbox" value="0">
                            <label for="checkboxEr">
                                Expertisée
                            </label>
                        </div>
                    </div>
                    <div class="colonne">
                        <label> </label>
                        <bR>
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkboxVA1r"  name="Vehicule_non_accidentee" type="checkbox" value="0">
                            <label for="checkboxVA1r">
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
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE1r" type="checkbox">
                                                <label for="checkboxE1r">
                                                    ABS
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE2r" type="checkbox">
                                                <label for="checkboxE2r">
                                                    Plate-forme hydraulique
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE3r" type="checkbox">
                                                <label for="checkboxE3r">
                                                    Véhicule accidentée
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE21r" type="checkbox">
                                                <label for="checkboxE21r">
                                                    Frein à air comprimé
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE22r" type="checkbox">
                                                <label for="checkboxE22r">
                                                    Suspension pneumatique
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE31r" type="checkbox">
                                                <label for="checkboxE31r">
                                                    Frein à disque
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE32r" type="checkbox">
                                                <label for="checkboxE32r">
                                                    Treuil
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE41r" type="checkbox">
                                                <label for="checkboxE41r">
                                                    Grue
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE42r" type="checkbox">
                                                <label for="checkboxE42r">
                                                    Unité de refroidissement
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
                                        {!! Form::select("ville" ,ville() , null ,array('id'=>'soflow',
                                        'placeholder' => 'Tous' )) !!}
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





            <div class="b-search__main-form-submit">
                <a href={{url('/advancedsearch')}}>Réinitialiser</a>
                <button type="submit" class="btn m-btn" style="font-size: 70%; padding: 12px ">LANCER LA RECHERCHE<span class="fa fa-angle-right"></span></button>
            </div>



        </div>


    </div>

</aside>


{{ Form::close() }}
