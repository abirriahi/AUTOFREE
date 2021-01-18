<div class="b-submit__main">
    <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
        <h2 class="">Ajouter les detailles de votre véhicule</h2>
    </header>
    {!! Form::open( ['url' => '/step2' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}
    <div class="row">
        <div class="col-md-6 col-xs-12">

            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Boite Vitesse <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("auto_vitesse" ,auto_vitesse() , null , array('class' => 'm-selectt','placeholder' => 'vitesse ' )) !!}
                    @if ($errors->has('auto_vitesse'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('auto_vitesse') }}</strong>
                                                     </span>
                    @endif


                    <span class="fa fa-caret-down"></span>
                </div>
            </div>
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Prix <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::number("auto_price", null, ['class' => 'form-control', 'placeholder' => 'Prix ']) !!}
                    @if ($errors->has('auto_price'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('auto_price') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
             <div class="center" style="color: red">Ajouter les detailles de votre véhicule </div>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox1" name="metaliser" type="checkbox" value="0">
                <label for="checkbox1">
                    Métalisé
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox2"  name="acee_san_cle"type="checkbox" value="0">
                <label for="checkbox2">
                    acee-sans-clé
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox3" name="chauffage" type="checkbox" value="0">
                <label for="checkbox3">
                    chauffage
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox4" name="parcage" type="checkbox" value="0">
                <label for="checkbox4">
                    parcage
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox5" name="assistant" type="checkbox" value="0">
                <label for="checkbox5">
                    assistant
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox6" name="camera" type="checkbox" value="0">
                <label for="checkbox6">
                    camera
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox7" name="capteur_arriere" type="checkbox" value="0">
                <label for="checkbox7">
                    capteur_arriere
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox8" name="capteur_avant1" type="checkbox" value="0">
                <label for="checkbox8">
                    capteur_avant1
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox9" name="capteur_avant" type="checkbox" value="0">
                <label for="checkbox9">
                    capteur_avant
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox10" name="climatisation_automatique" type="checkbox" value="0">
                <label for="checkbox10">
                    climatisation_automatique
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox11" name="climatisation_manuell" type="checkbox" value="0">
                <label for="checkbox11">
                    climatisation_manuell
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
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
            <br><br><br>
            <div class="center" style="color: red">Equipement supplémentaire </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox31"name="Systeme_de_navigation_integrer" type="checkbox" value="0">
                <label for="checkbox31">
                    Systeme_de_navigation_integrer
                </label>
            </div>

  <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox46"name="Systeme_de_navigation_integrer" type="checkbox" value="0">
                <label for="checkbox46">
                    Systeme_de-navigation_integrer
                </label>
            </div>
  <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox32"name="Systeme_de_navigation_Portable" type="checkbox" value="0">
                <label for="checkbox32">
                    Systeme-de_navigation_Portable
                </label>
            </div>
  <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox33"name="Systeme_de_navigation_Systeme_de_suivi_de_voie" type="checkbox" value="0">
                <label for="checkbox33">
                    Systeme_de_navigation_Systeme_de_suivi_de_voie
                </label>
            </div>
  <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox34"name="Autobus_scolaires" type="checkbox" value="0">
                <label for="checkbox34">
                    Autobus_scolaires
                </label>
            </div>
  <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox35"name="Autotransporter" type="checkbox" value="0">
                <label for="checkbox35">
                    Autotransporter
                </label>
            </div>
            <br><br><br>
            <div class="center" style="color: red">Caractéristiques </div>

            <div class="checkbox checkbox-theme checkbox-circle">
            <input id="checkbox43"name="Pour_handicapes" type="checkbox" value="0">
            <label for="checkbox43">
                Pour_handicapes
            </label>
        </div>
        <div class="checkbox checkbox-theme checkbox-circle">
        <input id="checkbox44"name=" Pour_lexportation" type="checkbox" value="0">
        <label for="checkbox44">
            Pour_lexportation
        </label>
    </div>
     <div class="checkbox checkbox-theme checkbox-circle">
        <input id="checkbox45"name=" Vehicule_accidentee" type="checkbox" value="0">
        <label for="checkbox45">
            Vehicule_accidentee
        </label>
    </div>


        </div>
        <div class="col-md-6 col-xs-12">
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>carroserie <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("autos_carrosserie" ,autos_carrosserie() , null ,array('class' => 'm-selecttt', 'placeholder' => 'carrosserie' )) !!}


                    @if ($errors->has('autos_carrosserie'))
                        <span class="help-block"><strong>{{ $errors->first('autos_carrosserie') }}</strong>
                                                               </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>cv/km <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("cv" ,cv() , null ,array('class' => 'm-selecttt', 'placeholder' => 'CV/KM' )) !!}


                    @if ($errors->has('cv'))
                        <span class="help-block"><strong>{{ $errors->first('cv') }}</strong>
                                                               </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
               </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox12" name="control_stabilite" type="checkbox" value="0">
                <label for="checkbox12">
                    control_stabilite
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox13" name="crochet_atelage" type="checkbox" value="0">
                <label for="checkbox13">
                    crochet_atelage
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox14" name="dispositif_mail_libre" type="checkbox" value="0">
                <label for="checkbox14">
                    dispositif_mail_libre
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox15" name="hard_top" type="checkbox" value="0">
                <label for="checkbox15">
                    hard_top
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox16" name="bluetooth" type="checkbox" value="0">
                <label for="checkbox16">
                    bluetooth
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox17" name="jantes" type="checkbox" value="0">
                <label for="checkbox17">
                    jantes
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox18" name="phare_laser1" type="checkbox" value="0">
                <label for="checkbox18">
                    phare_laser1
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox19" name="phare_laser" type="checkbox" value="0">
                <label for="checkbox19">
                    phare_laser
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox20" name="phare_xenon" type="checkbox" value="0">
                <label for="checkbox20">
                    phare_xenon
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox21" name="isofix" type="checkbox" value="0">
                <label for="checkbox21">
                    isofix
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
            <br><br><br>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox36" name="Bache" type="checkbox" value="0">
                <label for="checkbox36">
                    Bache
                </label>
            </div> <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox37" name="'Camion_de_meubles" type="checkbox" value="0">
                <label for="checkbox37">
                    'Camion_de_meubles
                </label>
            </div> <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox38" name="Grue" type="checkbox" value="0">
                <label for="checkbox38">
                    Grue
                </label>
            </div> <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox39" name="Plateforme_de_levage" type="checkbox" value="0">
                <label for="checkbox39">
                    Plateforme_de_levage
                </label>
            </div> <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox40" name="Porte_bagages" type="checkbox" value="0">
                <label for="checkbox40">
                    Porte_bagages
                </label>
            </div> <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox41" name="Transports_frigorlifique" type="checkbox" value="0">
                <label for="checkbox41">
                    Transports_frigorlifique
                </label>
            </div> <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox42" name="Treuil" type="checkbox" value="0">
                <label for="checkbox42">
                    Treuil
                </label>
            </div>
            </div>


        </div>
    </div>
    <button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Save &amp;
        PROCEED to next step<span class="fa fa-angle-right"></span></button>
    {{Form::close()}}                </div>
