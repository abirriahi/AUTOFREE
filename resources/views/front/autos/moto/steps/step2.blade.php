<div class="b-submit__main">
    <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
        <h2 class="">Ajouter les detailles de votre véhicule</h2>
    </header>
    {!! Form::open( ['url' => '/motostep2' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}
    <div class="row">
        <div class="center" style="color: red">
            Equipement </div>

        <div class="col-md-6 col-xs-12">

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox2"  name="ABS"type="checkbox" value="0">
                <label for="checkbox2">
                    ABS
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox3" name="Carenage" type="checkbox" value="0">
                <label for="checkbox3">
                    Carénage / Carénage partiel
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox4" name="Catalyseur" type="checkbox" value="0">
                <label for="checkbox4">
                    Catalyseur
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox5" name="Coffre" type="checkbox" value="0">
                <label for="checkbox5">
                    Coffres latéraux
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox6" name="autre_instrument" type="checkbox" value="0">
                <label for="checkbox6">
                    D'autres instrument
                </label>
            </div>
             <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox7" name="anti_vole" type="checkbox" value="0">
                <label for="checkbox7">
                    Dispositif anti-vol
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox8" name="dosseret" type="checkbox" value="0">
                <label for="checkbox8">
                    Dosseret
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox9" name="double_frein_disque" type="checkbox" value="0">
                <label for="checkbox9">
                    Double frein à disque
                </label>
            </div>


            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox10" name="double_siege" type="checkbox" value="0">
                <label for="checkbox10">
                    Double siège </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox11" name="guidant_special" type="checkbox" value="0">
                <label for="checkbox11">
                    Guidon spécial
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox12" name="haut_parleur" type="checkbox" value="0">
                <label for="checkbox12">
                    Haut-parleur
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox12" name="housse_deprotection" type="checkbox" value="0">
                <label for="checkbox12">
                    Housse de protection
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox13" name="marche_pieds" type="checkbox" value="0">
                <label for="checkbox13">
                    Marche-pieds
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox14" name="pare_brise" type="checkbox" value="0">
                <label for="checkbox14">
                    Pare-brise
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox15" name="peinture_special" type="checkbox" value="0">
                <label for="checkbox15">
                    Peinture spéciale
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox16" name="reglage_electrique" type="checkbox" value="0">
                <label for="checkbox16">
                    RÉGLAGE ÉLECTRIQUE DES SIÈGES
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox17" name="pieds_cromee" type="checkbox" value="0">
                <label for="checkbox17">
                    Pièces chromées
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox18" name="poigne_chaffante" type="checkbox" value="0">
                <label for="checkbox18">
                    Poignées chauffantes
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox19" name="porte_bagage" type="checkbox" value="0">
                <label for="checkbox19">
                    Porte-bagages / support
                </label>
            </div>

             <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkboxM1" name="metaliser" type="checkbox" value="0">
                <label for="checkboxM1">
                    Métaliser
                </label>
            </div>
              <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkboxVA" name="Vehicule_non_accidentee" type="checkbox" value="0">
                <label for="checkboxVA">
                    VÉHICULES NON ACCIDENTÉS
                </label>
            </div>



        </div>
        <div class="col-md-6 col-xs-12">

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkboxE" name="expertiser" type="checkbox" value="0">
                <label for="checkboxE">
                    EXPERTISÉE
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkboxG" name="garanti" type="checkbox" value="0">
                <label for="checkboxG">
                    AVEC GARANTIE
                </label>
            </div>

               <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox1" name="pot_echapement" type="checkbox" value="0">
                <label for="checkbox1">
                    Pot d'échappement special
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox47" name="protection" type="checkbox" value="0">
                <label for="checkbox47">
                    Protection
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox48" name="roue_rayon" type="checkbox" value="0">
                <label for="checkbox48">
                    Roues à rayons</label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox49" name="sac_resevoir" type="checkbox" value="0">
                <label for="checkbox49">
                    Sac de réservoir
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox50" name="sacoche" type="checkbox" value="0">
                <label for="checkbox50">
                    Sacoches
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox51" name="selle_monoplage" type="checkbox" value="0">
                <label for="checkbox51">
                    Selle monoplace
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox52" name="system_audio" type="checkbox" value="0">
                <label for="checkbox52">
                    Système audio
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox53" name="systm_alarme" type="checkbox" value="0">
                <label for="checkbox53">
                    Système d'alarme
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox54" name="top_case" type="checkbox" value="0">
                <label for="checkbox54">
                    Topcase
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox20" name="pneut_neuf" type="checkbox" value="0">
                <label for="checkbox20">
                    Pneus neufs
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox21" name="VS_disponible" type="checkbox" value="0">
                <label for="checkbox21">
                    25 kW Kit disponible
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox22" name="VS_possible" type="checkbox" value="0">
                <label for="checkbox22">
                    25 kW Kit possible
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox23" name="TS_disponible" type="checkbox" value="0">
                <label for="checkbox23">
                    35 kW Kit disponible
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox24" name="TS_possible" type="checkbox" value="0">
                <label for="checkbox24">
                    35 kW Kit possible
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox25" name="echange_possible" type="checkbox" value="0">
                <label for="checkbox25">
                    L'echange est possible
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox26" name="leasing_possible" type="checkbox" value="0">
                <label for="checkbox26">
                    Leasing possible
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox27" name="moto_course" type="checkbox" value="0">
                <label for="checkbox27">
                    Moto de course
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox28" name="verrouillage_diferentiel" type="checkbox" value="0">
                <label for="checkbox28">
                    Verrouillage_du_différentiel
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox29" name="vehicule_accidente" type="checkbox" value="0">
                <label for="checkbox29">
                    Véhicule accidentée
                </label>
            </div>
             </div>


        </div>

    <button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Save &amp;
        PROCEED to next step<span class="fa fa-angle-right"></span></button>


{{Form::close()}}

    </div>
