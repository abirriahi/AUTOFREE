    @if(count($newcamping) > 0)
        @foreach($newcamping as $key => $autos)
            @if($key % 3 == 0 && $key != 0)
                <div class="clearfix"></div>
            @endif
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="features-item clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-pad">
                        @if( $autos->image !='' )
                            <a href="{{ url('/magazine') }}">
                                <img src={{checkIfImageIsexist($autos->image)}} alt="Image" height="100%" width="220">
                            </a>
                        @elseif( $autos->image =='' )
                            <a href="{{ url('/magazine') }}">


                                <img src= {{  Request::root().'public/slider/'.getSetting('no_image')}} alt="Image" height="100%" width="220"  >
                            </a>
                        @endif

                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 detail">
                        <h4>
                            <a href="#">
                                @if($autos->auto_marque!=0)

                                    {{$autos->marque->auto_marque}}{{$autos->new_modele}}
                                @else

                                    {{$autos->new_marque}} {{$autos->new_modele}}
                                @endif
                            </a>
                        </h4>

                        <?php
                        $nbChar = 43; // Nb. de caractères sans '...'
                        $chaine0=$autos->auto_description;

                        $chaine = wordwrap($chaine0, 48, "<br />", true);

                        echo "$chaine\n";




                        if(strlen($chaine0) >= $nbChar)
                            $chaine = substr($chaine0, 0, $nbChar).' ...';









                        echo $chaine;



                        ?>




                        <div class="bottom">
                            <div class="price">
                                <strong>{{$autos->auto_price}} CHF</strong>
                            </div>
                            <div class="pull-right">
                                <div class="btn-div">
                                    <a href="{{ url('/magazine') }}">
                                        <span class="read-more">Voir plus d'infos</span>
                                                <span class="icon-arrow-right2">
                                                  <i class="fa  fa-angle-right"></i>
                                                </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach






@endif

