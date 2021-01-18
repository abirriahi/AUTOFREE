
<div id="content">

    <div class="inner">
        <div class="row">
            <div class="col-lg-12">


                <h1 > Ajouter un modele</h1>



            </div>
        </div>
        <hr />


        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <header>
                        <div class="icons"><i class="icon-th-large"></i></div>

                        <div class="toolbar">
                            <ul class="nav">
                                <li>
                                    <div class="btn-group">
                                        <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                           href="#collapseOne">
                                            <i class="icon-chevron-up"></i>
                                        </a>
                                        <button class="btn btn-xs btn-danger close-box">

                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div> <div class="toolbar">
                            <ul class="nav">
                                <li>
                                    <div class="btn-group">
                                        <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                           href="#collapseOne">
                                            <i class="icon-chevron-up"></i>
                                        </a>
                                        <button class="btn btn-xs btn-danger close-box">

                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </header>
                    <div id="collapseOne" class="accordion-body collapse in body">
                        <script type="text/javascript">
                            $(document).on('change','.camping_marque_id',function (){
                                var camping_marque = $('.camping_marque_id option:selected').val();
                                if(camping_marque > 0)
                                {

                                    $.ajax({
                                        url:"{{url('get/camping_model')}}",
                                        dataType:'html',
                                        type:'get',
                                        data:{camping_marque:camping_marque},
                                        success: function(data)
                                        {
                                            $('.camping_model').html(data);
                                        }
                                    });
                                }
                            });
                        </script>
                        <div class='s-relative'>






                                {!! Form::select("camping_marque_id" ,App\AutoMarque::where('camping_marque','!=','')
                                 ->pluck('camping_marque','id'),
                            old('camping_marque')
                             ,array('class' => 'form-control','id'=>'','placeholder' => 'choisir une marque')) !!}


                            @if ($errors->has('camping_marque_id'))
                                <span class="help-block">
                                                  <strong>{{ $errors->first('camping_marque_id') }}</strong>
                                                     </span>
                            @endif

                        </div>
                        <br><br><br><br>


                        <div class="form-group" >
                            <label class="control-label col-lg-4">Modéle</label>

                            <div class="col-lg-4">
                                {!! Form::text("campings_model" , null , ['class' => 'form-control']) !!}

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
