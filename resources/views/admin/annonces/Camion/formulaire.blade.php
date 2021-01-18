<script type="text/javascript">
    $(document).on('change','.camion_marque_id',function (){
        var camion_marque = $('.camion_marque_id option:selected').val();
        if(camion_marque > 0)
        {

            $.ajax({
                url:"{{url('get/camion_model')}}",
                dataType:'html',
                type:'get',
                data:{camion_marque:camion_marque},
                success: function(data)
                {
                    $('.camion_model').html(data);
                }
            });
        }
    });
</script>
<div class="col-md-6 col-xs-12">
    <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
        <label>Enter Make <span>*</span></label>
        <div class='s-relative'>
            {!! Form::select("camion_marque",App\AutoMarque::pluck('camion_marque','id'),
            old('camion_marque')
             ,array('class' => 'm-selectt camion_marque_id','id'=>'','placeholder' => 'taper une marque')) !!}
            @if ($errors->has('camion_marque_id'))
                <span class="help-block">
                                                  <strong>{{ $errors->first('camion_marque_id') }}</strong>
                                                     </span>
            @endif

        </div>



    </div>





</div>
<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
    <label>Enter Vehicle Model <span>*</span></label>
    <div class='s-relative'>

        <span class="camion_model"></span>

        @if ($errors->has('camion_model'))
            <span class="help-block">
                                                  <strong>{{ $errors->first('camion_model') }}</strong>
                                                     </span>
        @endif

    </div>
</div>
<br><br>

<button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Save <span class="fa fa-angle-right"></span></button>