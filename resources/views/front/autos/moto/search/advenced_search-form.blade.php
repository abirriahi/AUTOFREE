

{{ Form::open(['url' => '/motosearch', 'method' => 'get']) }}





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
                            <input id="carroserie0m" type="checkbox">
                            <label for="carroserie0m">
                                Attelage
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie1m" type="checkbox">
                            <label for="carroserie1m">
                                Supermoto / Trial
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie2m" type="checkbox">
                            <label for="carroserie2m">
                                Custom Bike
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie3m" type="checkbox">
                            <label for="carroserie3m">
                                Naked Bike
                            </label>
                        </div>
                    </td>

                </tr>

                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie4m" type="checkbox">
                            <label for="carroserie4m">
                                ATV / Quad
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie5m" type="checkbox">
                            <label for="carroserie5m">
                                Enduro
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie6m" type="checkbox">
                            <label for="carroserie6m">
                                Motocross
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie7m" type="checkbox">
                            <label for="carroserie7m">
                                Bicyclette électrique
                            </label>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie8m" type="checkbox">
                            <label for="carroserie8m">
                                Remorque
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie9m" type="checkbox">
                            <label for="carroserie9m">
                                Touring
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie10m" type="checkbox">
                            <label for="carroserie10m">
                                Route
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie11m" type="checkbox">
                            <label for="carroserie11m">
                                Tricycle / Trike / Cabine
                            </label>
                        </div>
                    </td>


                </tr>
                <tr>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie12m" type="checkbox">
                            <label for="carroserie12m">
                                Motoneige
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie13m" type="checkbox">
                            <label for="carroserie13m">
                                Scooter
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie14m" type="checkbox">
                            <label for="carroserie14m">
                                Cruiser
                            </label>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="carroserie15m" type="checkbox">
                            <label for="carroserie15m">
                                Vélomoteur
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
                    <div class="colonne">
                        <label>Marque</label>

                    <?php
                        $get_moto_marque = App\Moto::groupBy('moto_marque')->where('validation',1)->distinct()->get(['moto_marque']);
                        ?>
                        {!! Form::select("moto_marque" ,
                         App\AutoMarque::whereIn('id',$get_moto_marque)->pluck('moto_marque','id')
                         , null ,array('id'=>'auto_select','class'=>'moto_marque_id','placeholder' => 'Tous' )) !!}


                    </div>


                    <div class="colonne ">
                        <label>Marque</label>

                        <select  class="moto_model" id="auto_select" >
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
                            <input id="checkboxEm" name="expertiser" type="checkbox" value="0">
                            <label for="checkboxEm">
                                Expertisée
                            </label>
                        </div>
                    </div>
                    <div class="colonne">
                        <label> </label>
                        <bR>
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkboxVA1m"  name="Vehicule_non_accidentee" type="checkbox" value="0">
                            <label for="checkboxVA1m">
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
                            <input id="checkboxGm" name="garanti" type="checkbox" value="0">
                            <label for="checkboxGm">
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
                                <b> <h3 class="panel-title">Couleur, places </h3></b>
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
                                                <input id="checkboxM1m" name="metaliser" type="checkbox" value="0">
                                                <label for="checkboxM1m">
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
                                        <td class="th">
                                            <h5>Caractéristiques</h5>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE1m" type="checkbox">
                                                <label for="checkboxE1m">
                                                    ABS
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE2m" type="checkbox">
                                                <label for="checkboxE2m">
                                                    Peinture spéciale
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE3m" type="checkbox">
                                                <label for="checkboxE3m">
                                                    Pneus neufs
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE4m" type="checkbox">
                                                <label for="checkboxE4m">
                                                    25 kW Kit disponible
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE21m" type="checkbox">
                                                <label for="checkboxE21m">
                                                    Carénage / Carénage partiel
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE22m" type="checkbox">
                                                <label for="checkboxE22m">
                                                    Réglage électrique des sièges
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE23m" type="checkbox">
                                                <label for="checkboxE23m">

                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE24m" type="checkbox">
                                                <label for="checkboxE24m">
                                                    25 kW Kit possible
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE31m" type="checkbox">
                                                <label for="checkboxE31m">
                                                    Catalyseur
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE32m" type="checkbox">
                                                <label for="checkboxE32m">
                                                    Pièces chromées
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE33m" type="checkbox">
                                                <label for="checkboxE33m">

                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE34m" type="checkbox">
                                                <label for="checkboxE34m">
                                                    35 kW Kit disponible
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE41m" type="checkbox">
                                                <label for="checkboxE41m">
                                                    Coffres latéraux
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE42m" type="checkbox">
                                                <label for="checkboxE42m">
                                                    Poignées chauffantes
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE43m" type="checkbox">
                                                <label for="checkboxE43m">

                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE44m" type="checkbox">
                                                <label for="checkboxE44m">
                                                    35 kW Kit possible
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE51m" type="checkbox">
                                                <label for="checkboxE51m">
                                                    D'autres instruments
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE52m" type="checkbox">
                                                <label for="checkboxE52m">
                                                    Porte-bagages / support
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <label> </label>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE53m" type="checkbox">
                                                <label for="checkboxE53m">
                                                    L'echange est possible
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE61m" type="checkbox">
                                                <label for="checkboxE61m">
                                                    Dispositif anti-vol
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE62m" type="checkbox">
                                                <label for="checkboxE62m">
                                                    Pot d'échappement special
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <label>  </label>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE63m" type="checkbox">
                                                <label for="checkboxE63m">
                                                    Leasing possible
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE71m" type="checkbox">
                                                <label for="checkboxE71m">
                                                    Dosseret
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE72m" type="checkbox">
                                                <label for="checkboxE72m">
                                                    Protection
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <label> </label>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE73m" type="checkbox">
                                                <label for="checkboxE73m">
                                                    Moto de course
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE81m" type="checkbox">
                                                <label for="checkboxE81m">
                                                    Double frein à disque
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE82m" type="checkbox">
                                                <label for="checkboxE82m">
                                                    Roues à rayons
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <label></label>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE83m" type="checkbox">
                                                <label for="checkboxE83m">
                                                    Véhicule accidentée
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE91m" type="checkbox">
                                                <label for="checkboxE91m">
                                                    Double siège
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE92m" type="checkbox">
                                                <label for="checkboxE92m">
                                                    Sac de réservoir
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE101m" type="checkbox">
                                                <label for="checkboxE101m">
                                                    Guidon spécial
                                                </label>
                                            </div>
                                        </td>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE102m" type="checkbox">
                                                <label for="checkboxE102m">
                                                    Sacoches
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="tdd">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE111m" type="checkbox">
                                                <label for="checkboxE111m">
                                                    Haut-parleur
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE112m" type="checkbox">
                                                <label for="checkboxE112m">
                                                    Selle monoplace
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE121m" type="checkbox">
                                                <label for="checkboxE121m">
                                                    Housse de protection
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE122m" type="checkbox">
                                                <label for="checkboxE122m">
                                                    Système audio
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE131m" type="checkbox">
                                                <label for="checkboxE131m">
                                                    Marche-pieds
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE132m" type="checkbox">
                                                <label for="checkboxE132m">
                                                    Système d'alarme
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE141m" type="checkbox">
                                                <label for="checkboxE141m">
                                                    Pare-brise
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input id="checkboxE142m" type="checkbox">
                                                <label for="checkboxE142m">
                                                    Topcase
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
