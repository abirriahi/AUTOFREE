
<!-- motos-->

@include('front.autos.selections_index.moto')


        <!-- VU-->

@include('front.autos.selections_index.vh')



        <!-- camping-->


@include('front.autos.selections_index.camping')








        <!-- remorque-->


@include('front.autos.selections_index.remorque')



        <!-- camion-->



@include('front.autos.selections_index.camion')



















<div class="item item-2" >
    <div class="container">
        <!-- Banner Slider Inner 1 -->
        <div class="banner-slider-inner">
            <!-- Title-->

            <h1><span>Meilleure endroit pour</span> trouver votre auto</h1>
            <!-- Paragraph -->
            <p>« Innovation et précision à votre service pour trouver votre automobile </p>
            <!-- Btn -->
            <a href="#" class="btn btn-view">View all car</a>
        </div>
    </div>
</div>
<div class="item item-3">
    <div class="container">
        <!-- Banner Slider Inner 1 -->
        <div class="banner-slider-inner">
            <!-- Title-->

            <h1><span> Meilleure endroit pour </span> vendre votre auto</h1>
            <!-- Paragraph -->
            <p>Confiance et sécurité à votre service pour revendre votre automobile</p>
            <!-- Btn -->
            <a href="#" class="btn btn-view">View all car</a>
        </div>
    </div>
</div>



<label style="
                              text-transform:capitalize;
                              font: 200 14px 'Open Sans',sans-serif;
                              text-align: right;
                               margin: 11px 0 0 0;
                              float: left;
                               display: block;"

>Marque




</label>


<table class="tab" hidden>
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





<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <!-- Car box start-->
    <div class="thumbnail car-box clearfix wow fadeInUp delay-03s">
        <!--  <img src="front/img/grid/bmw_emw_m3_diski_serie.jpg" alt="bmw_emw_m3_diski_serie">-->
        @if( $autos->image !='' )
            <a href="{{ url('/detaille/'.$autos->id) }}">
                <img src={{checkIfImageIsexist($autos->image)}} >
            </a>
        @elseif( $autos->image =='' )
            <a href="{{ url('/detaille/'.$autos->id) }}">


                <img src= {{  Request::root().'/public/'.getSetting('no_image')}} alt="Image" height="100%" width="220"  >
            </a>
            @endif


                    <!-- detail -->
            <div class="carbox-overlap-wrapper" style="background:rgba(0, 0, 0, 0.3);




                                             height: auto;
                                             width: 92%;
                                             left:auto;
                                             top: 0px;



                         ">
                <h2>{{$autos->new_marque}} {{$autos->new_model}} 2017</h2>
                <h4>{{$autos->auto_price}} CHF</h4>

                <div class="overlap-btns-area">
                    <a href="{{ url('/detaille/'.$autos->id) }}" class="overlap-btn"><i class="fa fa-link"></i></a>
                </div>
            </div>


    </div>
    <!-- Car box end-->

</div>

public function anyData(Request $request , Auto $bu)
{

if($request->user_id){
$articles = $bu->where('user_id' , $request->user_id)->get();
}else{
$articles = $bu->all();

}

return Datatables::of($articles)
->editColumn('new_marque', function ($model) {

return '<a href="' . url('/update/' . $model->id ) . '">' . $model->new_marque . '</a>';
})
->editColumn('new_modele', function ($model) {
return '<a href="' . url('/update/' . $model->id ) . '">' . $model->new_modele . '</a>';
})
->editColumn('existe', function ($model) {
$type =existe();
if ($model->existe==0) {
return '<a href="' . url('/adminpanel/exsite/' . $model->id . '/1') . '"><i class="fa fa-check" style="font-size:24px;color:#c32613"></i></a>';
}
else
{
return '<a href="' . url('/adminpanel/exsite/' . $model->id . '/0') . '">' . "<span class=\"glyphicon glyphicon-ok\"> </span>" . '</span>' ;

    }
    })
    ->editColumn('validation', function ($model) {
    $type =validation();
    if ($model->validation==0) {
    return '<a href="' . url('/adminpanel/change_status/' . $model->id . '/1') . '"><i class="fa fa-check" style="font-size:24px;color:#c32613"></i></a>';

    }
    else
    {
    return '<a href="' . url('/adminpanel/change_status/' . $model->id . '/0') . '">'. "<span class=\"glyphicon glyphicon-ok\"></span>" . '</span>';
        ;
        }
        })
        ->editColumn('enpublic', function ($model) {
        $type =enpublic();
        if ($model->enpublic==0) {
        return '<a href="' . url('/adminpanel/change_choix/' . $model->id . '/1') . '"><i class="fa fa-check" style="font-size:24px;color:#c32613"></i></a>';

        ;
        }
        else
        {
        return '<a href="' . url('/adminpanel/change_choix/' . $model->id . '/0') . '">'."<span class=\"glyphicon glyphicon-ok\"></span>" . '</span>';

            }
            })
            ->editColumn('magazine', function ($model) {
            $type =magazine();
            if ($model->magazine==1) {
            return '<a href="' . url('/adminpanel/magazine/' . $model->id . '/0') . '">' . "<span class=\"glyphicon glyphicon-ok\"></span>". '</a>';
            }
            else
            {
            return '<a href="' . url('/adminpanel/magazine/' . $model->id . '/1') . '"> .<i class="fa fa-check" style="font-size:24px;color:#c32613"></i></a> ' ;

            }
            })
            ->editColumn('control', function ($model) {
            $all = '<a href="' . url('/update/' . $model->id) . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';

            $all .= '<a href="' . url('/adminpanel/annonce/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


            return $all;
            })
            ->make(true);

            }
