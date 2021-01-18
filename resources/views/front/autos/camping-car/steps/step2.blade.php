<div class="b-submit__main">
    <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
        <h2 class="">Ajouter les detailles de votre véhicule</h2>
    </header>
    {!! Form::open( ['url' => '/campingstep2' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}
    <div class="row">
        <div class="center" style="color: red">
            Equipement
        </div>

        <div class="col-md-6 col-xs-12">

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox2"  name="ABS"type="checkbox" value="0">
                <label for="checkbox2">
                    ABS
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox3" name="parcage" type="checkbox" value="0">
                <label for="checkbox3">
                    AIDE AU PARCAGE
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox4" name="climatisation_automatique" type="checkbox" value="0">
                <label for="checkbox4">
                   Climatisation Automatique
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox5" name="climatisation_manuell" type="checkbox" value="0">
                <label for="checkbox5">
                   Climatisation Manuelle
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox6" name="control_stabilite" type="checkbox" value="0">
                <label for="checkbox6">
                   Contrôle de la stabilité
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox8" name="crochet_atelage" type="checkbox" value="0">
                <label for="checkbox8">
                    CROCHET D’ATTELAGE
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox9" name="cuisine" type="checkbox" value="0">
                <label for="checkbox9">
                    CUISINE
                </label>
            </div>

             <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox7" name="anti_vole" type="checkbox" value="0">
                <label for="checkbox7">
                    Dispositif anti-vol
                </label>
            </div>

        </div>
        <div class="col-md-6 col-xs-12">
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox1" name="douche" type="checkbox" value="0">
                <label for="checkbox1">
                    DOUCHE
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox47" name="Regelateur_automatique" type="checkbox" value="0">
                <label for="checkbox47">
                    RÉGULATEUR AUTOMATIQUE DE TRACTION
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox48" name="regalteur_de vitess" type="checkbox" value="0">
                <label for="checkbox48">
                    RÉGULATEUR DE VITESSE</label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox49" name="Systeme_de_navigation_integrer" type="checkbox" value="0">
                <label for="checkbox49">
                    SYSTÈME DE NAVIGATION INTÉGRÉ
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox50" name="Systeme_de_navigation_Portable" type="checkbox" value="0">
                <label for="checkbox50">
                    SYSTÈME DE NAVIGATION PORTABLE
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox51" name="system_navigation_toilette" type="checkbox" value="0">
                <label for="checkbox51">
                    SYSTÈME DE NAVIGATION TOILETTE
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox52" name="system_navigation_tv" type="checkbox" value="0">
                <label for="checkbox52">
                    SYSTÈME DE NAVIGATION   TV
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox53" name="Verrouillage_du_differentiel" type="checkbox" value="0">
                <label for="checkbox53">
                    VERROUILLAGE DU DIFFÉRENTIEL
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox54" name="top_case" type="checkbox" value="0">
                <label for="checkbox54">
                    Topcase
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox20" name="Pour_handicapes" type="checkbox" value="0">
                <label for="checkbox20">
                    POUR HANDICAPÉS
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox21" name="Vehicule_accidentee" type="checkbox" value="0">
                <label for="checkbox21">
                    VÉHICULE ACCIDENTÉE
                </label>
            </div>
             </div>


        </div>

    <button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Save &amp;
        PROCEED to next step<span class="fa fa-angle-right"></span></button>


{{Form::close()}}

    </div>
