
    @foreach ($result as $key => $value)
        <option value="{{$key}}"> {{ $value }}</option>
    @endforeach

    <script type="text/javascript">
        $(document).on('change','.moto_marque_id',function (){
            var moto_marque = $('.moto_marque_id option:selected').val();
            if(moto_marque > 0)
            {

                $.ajax({
                    url:"{{url('get/moto_model')}}",

                    dataType:'html',
                    type:'get',
                    data:{moto_marque_2:moto_marque},
                    success: function(data)
                    {
                        $('.moto_model').html(data);
                        $('.moto_model_data').removeClass('hidden');
                    }

                });

            }
        });
    </script>

    <div class="col-xs-4">
        <?php
        $get_moto_marque = App\Moto::groupBy('moto_marque')->where('validation',1)->distinct()->get(['moto_marque']);
        ?>
        {!! Form::select("moto_marque" ,
         App\AutoMarque::whereIn('id',$get_moto_marque)->pluck('moto_marque','id')
         , null ,array('id'=>'select1','class'=>'moto_marque_id','placeholder' => 'marque' )) !!}

        <span class="fa fa-caret-down"></span>
    </div>

    <div class="col-xs-4 moto_model_data ">
        <select  class="moto_model" >
            <option  selected="">Modele</option>
        </select>

        <span class="fa fa-caret-down hidden"></span>
    </div>

