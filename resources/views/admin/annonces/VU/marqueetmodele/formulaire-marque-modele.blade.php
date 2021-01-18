
    <div id="content">

        <div class="inner">
            <div class="row">
                <div class="col-lg-12">


                    <h1 > Ajouter une nouvelle marque et  modéle correspend</h1>



                </div>
            </div>
            <hr />


            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <header>
                            <div class="icons"><i class="icon-th-large"></i></div>
                            <h5>Marque ET Modéle</h5>
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



                                <div class="form-group" >
                                    <label class="control-label col-lg-4">Marque</label>
                                    <div class="col-lg-4">
                                        {!! Form::text("vehicule_marque" , null , ['class' => 'form-control']) !!}

                                        </div>
                                </div>
<br><br><br>
                            <div class="form-group" >
                                <label class="control-label col-lg-4">Modéle</label>

                                <div class="col-lg-4">
                                    {!! Form::text("vehicules_model" , null , ['class' => 'form-control']) !!}

                                    </div>
                            </div>
                            <button type="submit" class="btn btn-warning">
                                <i class="fa fa-btn fa-user" style="color:#ffffff">

                                    ajouter
                                </i>

                            </button>
                        </div>
                    </div>
                </div>
            </div>




        </div>




    </div>
    <!--END PAGE CONTENT -->
