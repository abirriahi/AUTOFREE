



    <div class="b-submit__main">
        <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
            <h2 class="">Ajouter les detailles de votre véhicule</h2>
        </header>
        {!! Form::open( ['url' => '/vustep5' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}

        <div class="row">
        <div class="center" style="color: red">Equipement supplémentaire </div>

        <div class="col-md-6 col-xs-12">
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
               Systeme de suivi de voie
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

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox36" name="Bache" type="checkbox" value="0">
                <label for="checkbox36">
                    Bache
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox37" name="'Camion_de_meubles" type="checkbox" value="0">
                <label for="checkbox37">
                    'Camion_de_meubles
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox38" name="Grue" type="checkbox" value="0">
                <label for="checkbox38">
                    Grue
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox39" name="Plateforme_de_levage" type="checkbox" value="0">
                <label for="checkbox39">
                    Plateforme_de_levage
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox40" name="Porte_bagages" type="checkbox" value="0">
                <label for="checkbox40">
                    Porte_bagages
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox41" name="Transports_frigorlifique" type="checkbox" value="0">
                <label for="checkbox41">
                    Transports_frigorlifique
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox42" name="Treuil" type="checkbox" value="0">
                <label for="checkbox42">
                    Treuil
                </label>
            </div>

        </div>
    </div>




<button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Enregister &amp;
    passer à l'étape suivante  <span class="fa fa-angle-right"></span></button>
{{Form::close()}}
</div>
    </div>