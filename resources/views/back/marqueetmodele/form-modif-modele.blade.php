
<div id="content">

    <div class="inner">
        <div class="row">
            <div class="col-lg-12">


                <h1 > Gestion de modéle</h1>



            </div>
        </div>
        <hr />


        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <header>
                        <div class="icons"><i class="icon-th-large"></i></div>
                        <h5>Marque && Modéle</h5>
                        <div class="toolbar">
                            <ul class="nav">
                                <li>
                                    <div class="btn-group">
                                        <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                           href="#collapseOne">
                                            <i class="icon-chevron-up"></i>
                                        </a>
                                        <button class="btn btn-xs btn-danger close-box">
                                            <i class="icon-remove"></i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </header>
                    <div id="collapseOne" class="accordion-body collapse in body">


@if($auto->autos_model!=''&&$auto->motos_model==''
&&$auto->vehicules_model==''&&$auto->camions_model==''
&&$auto->campings_model==''&&$auto->remorques_model=='')
                        <div class="form-group" >
                            <label class="control-label col-lg-4">Modele</label>
                            <div class="col-lg-4">
                                {!! Form::text("autos_model" , null , ['class' => 'form-control']) !!}

                            </div>
                        </div>
                    @elseif($auto->autos_model==''&&$auto->motos_model!=''
&&$auto->vehicules_model==''&&$auto->camions_model==''
&&$auto->campings_model==''&&$auto->remorques_model=='')



                            <div class="form-group" >
                                <label class="control-label col-lg-4">Modele</label>
                                <div class="col-lg-4">
                                    {!! Form::text("motos_model" , null , ['class' => 'form-control']) !!}

                                </div>
                            </div>



                        @elseif($auto->autos_model==''&&$auto->motos_model==''
                   &&$auto->vehicules_model!=''&&$auto->camions_model==''
                   &&$auto->campings_model==''&&$auto->remorques_model=='')



                            <div class="form-group" >
                                <label class="control-label col-lg-4">Modele</label>
                                <div class="col-lg-4">
                                    {!! Form::text("vehicules_model" , null , ['class' => 'form-control']) !!}

                                </div>
                            </div>





                        @elseif($auto->autos_model==''&&$auto->motos_model==''
                                     &&$auto->vehicules_model==''&&$auto->camions_model!=''
                                     &&$auto->campings_model==''&&$auto->remorques_model=='')



                            <div class="form-group" >
                                <label class="control-label col-lg-4">Modele</label>
                                <div class="col-lg-4">
                                    {!! Form::text("camions_model" , null , ['class' => 'form-control']) !!}

                                </div>
                            </div>





                        @elseif($auto->autos_model==''&&$auto->motos_model==''
                                                        &&$auto->vehicules_model==''&&$auto->camions_model==''
                                                        &&$auto->campings_model!=''&&$auto->remorques_model=='')



                            <div class="form-group" >
                                <label class="control-label col-lg-4">Modele</label>
                                <div class="col-lg-4">
                                    {!! Form::text("campings_model" , null , ['class' => 'form-control']) !!}

                                </div>
                            </div>


                        @elseif($auto->autos_model==''&&$auto->motos_model==''
                     &&$auto->vehicules_model==''&&$auto->camions_model==''
                   &&$auto->campings_model==''&&$auto->remorques_model!='')



                            <div class="form-group" >
                                <label class="control-label col-lg-4">Modele</label>
                                <div class="col-lg-4">
                                    {!! Form::text("remorques_model" , null , ['class' => 'form-control']) !!}

                                </div>
                            </div>



                        @endif




                        <br><br><br>
                        <button type="submit" class="btn btn-warning">
                            <i class="fa fa-btn fa-user" style="color:#ffffff">

                                Modifier
                            </i>

                        </button>
                    </div>
                </div>
            </div>
        </div>




    </div>




</div>
<!--END PAGE CONTENT -->
