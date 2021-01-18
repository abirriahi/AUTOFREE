<div class="b-submit__main">
    <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
        <h2 class="">Ajouter les detailles de votre véhicule</h2>
    </header>
    {!! Form::open( ['url' => '/step2' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}
    <div class="row">
        <div class="center" style="color: red">
            Equipement </div>

        <div class="col-md-6 col-xs-12">

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox2"  name="acee_san_cle"type="checkbox" value="0">
                <label for="checkbox2">
                    ACCÈS ET DÉMARRAGE SANS CLÉ
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox3" name="chauffage" type="checkbox" value="0">
                <label for="checkbox3">
                    CHAUFFAGE DE STATIONNEMENT
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox4" name="parcage" type="checkbox" value="0">
                <label for="checkbox4">
                    AIDE AU PARCAGE
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox5" name="assistant" type="checkbox" value="0">
                <label for="checkbox5">
                    ASSISTANT D’ANGLE MORT
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox6" name="camera" type="checkbox" value="0">
                <label for="checkbox6">
                    CAMÉRA DE RECUL
                </label>
            </div>
             <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox7" name="capteur_arriere" type="checkbox" value="0">
                <label for="checkbox7">
                    CAPTEURS DE STATIONNEMENT ARRIÈRE

                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox8" name="capteur_avant1" type="checkbox" value="0">
                <label for="checkbox8">
                    CAPTEURS DE STATIONNEMENT AVANT
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox9" name="capteur_avant" type="checkbox" value="0">
                <label for="checkbox9">
                    CAPTEURS DE STATIONNEMENT AVANT
                </label>
            </div>


            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox10" name="climatisation_automatique" type="checkbox" value="0">
                <label for="checkbox10">
                    CLIMATISATION AUTOMATIQUE
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox11" name="climatisation_manuell" type="checkbox" value="0">
                <label for="checkbox11">
                    CLIMATISATION MANUELLE
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox12" name="sallerie_alcantara" type="checkbox" value="0">
                <label for="checkbox12">
                    sallerie_alcantara
                </label>
            </div><div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox12" name="sallerie_alcantara" type="checkbox" value="0">
                <label for="checkbox12">
                    sallerie_alcantara
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox13" name="sallerie_cuire" type="checkbox" value="0">
                <label for="checkbox13">
                    sallerie_cuire
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox14" name="sallerie_partiellement_cuire" type="checkbox" value="0">
                <label for="checkbox14">
                    sallerie_partiellement_cuire
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox15" name="sallerie_tissu" type="checkbox" value="0">
                <label for="checkbox15">
                    sallerie_tissu
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox16" name="siege_chauffant" type="checkbox" value="0">
                <label for="checkbox16">
                    siege_chauffant
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox17" name="siege_ventilite" type="checkbox" value="0">
                <label for="checkbox17">
                    siege_ventilite
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox18" name="Suspension_augmente" type="checkbox" value="0">
                <label for="checkbox18">
                    Suspension_augmente
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox19" name="Suspension_pneumatique" type="checkbox" value="0">
                <label for="checkbox19">
                    Suspension_pneumatique
                </label>
            </div>



        </div>
        <div class="col-md-6 col-xs-12">
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox1" name="metaliser" type="checkbox" value="0">
                <label for="checkbox1">
                    Métalisé
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox47" name="control_stabilite" type="checkbox" value="0">
                <label for="checkbox47">
                    CONTRÔLE DE LA STABILITÉ
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox48" name="crochet_atelage" type="checkbox" value="0">
                <label for="checkbox48">
                    CROCHET D’ATTELAGE
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox49" name="dispositif_mail_libre" type="checkbox" value="0">
                <label for="checkbox49">
                    DISPOSITIF MAINS LIBRES
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox50" name="hard_top" type="checkbox" value="0">
                <label for="checkbox50">
                    HARDTOP
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox51" name="bluetooth" type="checkbox" value="0">
                <label for="checkbox51">
                    INTERFACE BLUETOOTH
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox52" name="jantes" type="checkbox" value="0">
                <label for="checkbox52">
                    JANTES EN ALU
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox53" name="phare_laser1" type="checkbox" value="0">
                <label for="checkbox53">
                    PHARES LASER
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox54" name="phare_laser" type="checkbox" value="0">
                <label for="checkbox54">
                    PHARES LASER
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox20" name="phare_xenon" type="checkbox" value="0">
                <label for="checkbox20">
                    PHARES XÉNON
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox21" name="isofix" type="checkbox" value="0">
                <label for="checkbox21">
                    ISOFIX
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox22" name="phare_derectionnel" type="checkbox" value="0">
                <label for="checkbox22">
                    phare_derectionnel
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox23" name="reglage_desiege_electrique" type="checkbox" value="0">
                <label for="checkbox23">
                    reglage_desiege_electrique
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox24" name="reglage-de-distance" type="checkbox" value="0">
                <label for="checkbox24">
                    reglage_de_distance
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox25" name="regleur_vitesse" type="checkbox" value="0">
                <label for="checkbox25">
                    regleur_vitesse
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox26" name="radio_DAB" type="checkbox" value="0">
                <label for="checkbox26">
                    radio_DAB
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox27" name="Toit_ouvrant" type="checkbox" value="0">
                <label for="checkbox27">
                    Toit_ouvrant
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox28" name="Verrouillage_du_différentiel" type="checkbox" value="0">
                <label for="checkbox28">
                    Verrouillage_du_différentiel
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox29" name="jeux_de_pneus" type="checkbox" value="0">
                <label for="checkbox29">
                    2-jeux-de-pneus
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox30" name="Systeme_start_stop" type="checkbox" value="0">
                <label for="checkbox30">
                    Systeme_start_stop
                </label>
            </div>
             </div>


        </div>

    <button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Save &amp;
        PROCEED to next step<span class="fa fa-angle-right"></span></button>


{{Form::close()}}

    </div>
