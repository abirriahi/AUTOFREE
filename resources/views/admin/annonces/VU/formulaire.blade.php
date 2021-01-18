<script type="text/javascript">
    $(document).on('change','.vehicule_marque_id',function (){
        var vehicule_marque = $('.vehicule_marque_id option:selected').val();
        if(auto_marque > 0)
        {

            $.ajax({
                url:"{{url('get/vehicule_model')}}",
                dataType:'html',
                type:'get',
                data:{vehicule_marque:vehicule_marque},
                success: function(data)
                {
                    $('.vehicule_model').html(data);
                }
            });
        }
    });
</script>
<div class="col-md-6 col-xs-12">
    <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
        <label>Enter Make <span>*</span></label>
        <div class='s-relative'>
            {!! Form::select("vehicule_marque",App\AutoMarque::pluck('vehicule_marque','id'),old('vehicule_marque')
             ,array('class' => 'm-selectt vehicule_marque_id','id'=>'','placeholder' => 'taper une marque')) !!}
            @if ($errors->has('vehicule_marque_id'))
                <span class="help-block">
                                                  <strong>{{ $errors->first('vehicule_marque_id') }}</strong>
                                                     </span>
            @endif

        </div>



    </div>





</div>
<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
    <label>Enter Vehicle Model <span>*</span></label>
    <div class='s-relative'>

        <span class="vehicule_model"></span>

        @if ($errors->has('vehicule_model'))
            <span class="help-block">
                                                  <strong>{{ $errors->first('vehicule_model') }}</strong>
                                                     </span>
        @endif

    </div>
</div>
<br><br>

<button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Save <span class="fa fa-angle-right"></span></button>