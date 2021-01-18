<script type="text/javascript">
    $(document).on('change','.remorque_marque_id',function (){
        var remorque_marque = $('.remorque_marque_id option:selected').val();
        if(remorque_marque > 0)
        {

            $.ajax({
                url:"{{url('get/remorque_model')}}",
                dataType:'html',
                type:'get',
                data:{remorque_marque:remorque_marque},
                success: function(data)
                {
                    $('.remorque_model').html(data);
                }
            });
        }
    });
</script>
<div class="col-md-6 col-xs-12">
    <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
        <label>Enter Make <span>*</span></label>
        <div class='s-relative'>
            {!! Form::select("remorque_marque",App\AutoMarque::pluck('remorque_marque','id'),
            old('remorque_marque')
             ,array('class' => 'm-selectt remorque_marque_id','id'=>'',
             'placeholder' => 'taper une marque')) !!}
            @if ($errors->has('remorque_marque_id'))
                <span class="help-block">
                                                  <strong>{{ $errors->first('remorque_marque_id') }}</strong>
                                                     </span>
            @endif

        </div>



    </div>





</div>
<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
    <label>Enter Vehicle Model <span>*</span></label>
    <div class='s-relative'>

        <span class="remorque_model"></span>

        @if ($errors->has('remorque_model'))
            <span class="help-block">
                                                  <strong>{{ $errors->first('remorque_model') }}</strong>
                                                     </span>
        @endif

    </div>
</div>
<br><br>

<button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Save <span class="fa fa-angle-right"></span></button>