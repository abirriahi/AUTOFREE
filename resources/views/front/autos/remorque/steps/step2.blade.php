<div class="b-submit__main">
    <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
        <h2 class="">Ajouter les detailles de votre véhicule</h2>
    </header>
    {!! Form::open( ['url' => '/remoroquestep2' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}
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
                <input id="checkbox3" name="frein_comprimer" type="checkbox" value="0">
                <label for="checkbox3">
                    Frein à air comprimé
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox4" name="frein_disque" type="checkbox" value="0">
                <label for="checkbox4">
                    Frein à disque
                </label>
            </div>

            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox5" name="Coffre" type="checkbox" value="0">
                <label for="checkbox5">
                    Coffres latéraux
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox6" name="hydrautique" type="checkbox" value="0">
                <label for="checkbox6">
                    Plate-forme hydraulique
                </label>
            </div>
             <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox7" name="pneumatique" type="checkbox" value="0">
                <label for="checkbox7">
                    Suspension pneumatique
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox8" name="Treuil" type="checkbox" value="0">
                <label for="checkbox8">
                    Treuil
                </label>
            </div>
            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox9" name="referoidissement" type="checkbox" value="0">
                <label for="checkbox9">
                    Unité de refroidissement
                </label>
            </div>



            <div class="checkbox checkbox-theme checkbox-circle">
                <input id="checkbox29" name="Vehicule_accidentee" type="checkbox" value="0">
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
