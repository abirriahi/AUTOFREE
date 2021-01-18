<script type="text/javascript">
    $(document).on('change','.auto_marque_id',function (){
        var auto_marque = $('.auto_marque_id option:selected').val();
        if(auto_marque > 0)
        {

            $.ajax({
                url:"{{url('get/auto_model')}}",
                dataType:'html',
                type:'get',
                data:{auto_marque:auto_marque},
                success: function(data)
                {
                    $('.auto_model').html(data);
                }
            });
        }
    });
</script>
<div class="col-md-6 col-xs-12">
    <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
        <label>Enter Make <span>*</span></label>
        <div class='s-relative'>
            {!! Form::select("auto_marque",App\AutoMarque::pluck('auto_marque','id'),old('auto_marque')
             ,array('class' => 'm-selectt auto_marque_id','id'=>'','placeholder' => 'taper une marque')) !!}
            @if ($errors->has('auto_marque'))
                <span class="help-block">
                                                  <strong>{{ $errors->first('auto_marque') }}</strong>
                                                     </span>
            @endif

        </div>



    </div>





</div>
<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
    <label>Enter Vehicle Model <span>*</span></label>
    <div class='s-relative'>

        <span class="auto_model"></span>

        @if ($errors->has('auto_model'))
            <span class="help-block">
                                                  <strong>{{ $errors->first('auto_model_id') }}</strong>
                                                     </span>
        @endif

    </div>
</div>
<br><br>

<button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Save <span class="fa fa-angle-right"></span></button>