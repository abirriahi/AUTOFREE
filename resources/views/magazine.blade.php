@extends('layouts.magazine')
@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



    <div class="sub-banner">
        <div class="overlay" style="padding-bottom: 250px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-area">
                            pub
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="b-blog s-shadow">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                @if(count($autos) > 0)
                    @foreach($autos as $key => $autos)
                        @if($key % 3 == 0 && $key != 0)
                            <div class="clearfix"></div>
                        @endif
                    <div class="b-blog__posts">

                        <div class="b-blog__posts-one wow zoomInUp" data-wow-delay="0.3s">
                        <div class="row m-noBlockPadding">



                                <div class="col-sm-1 col-xs-2">

                                <div class="b-blog__posts-one-author" >
                                    <div class="b-blog__posts-one-author-img">

                                    </div>
                                    <div class="b-blog__posts-one-share s-lineDownCenter" >{{ date('M j, Y', strtotime($autos->created_at)) }}</div>
                                    <div class="b-blog__posts-one-social" >
                                        <div>
                                            <a href="https://plus.google.com/share?url={{(Request::url())}}"><span class="fa fa-google-plus-square "></span></a>

                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{(Request::url())}}" >
                                                <span class="fa  fa-facebook-square"></span></a>
                                            <a href="https://twitter.com/intent/tweet?url={{(Request::url())}}"><span class="fa fa-twitter-square "></span></a>


                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                   </div>
                            </div>
                                 <div class="col-sm-11 col-xs-10">
                                <div class="b-blog__posts-one-body">
                                    <header class="b-blog__posts-one-body-head">
                                        <h2 class="s-titleDet">{{$autos->new_marque}}{{$autos->new_modele}}</h2>
                                        <div class="b-blog__posts-one-body-head-notes" hidden>
                                            <span class="b-blog__posts-one-body-head-notes-note"><span class="fa fa-user"></span>Our Admin</span>
                                            <span class="b-blog__posts-one-body-head-notes-note" ><span class="fa fa-comment"></span>{{ $autos->comments()->count() }} Comments</span>
                                               </div>
                                    </header>
                                    <div class="b-blog__posts-one-body-main">




                                        <div class="car-detail-slider simple-slider">
                                            <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-outer">
                                                    <!-- Wrapper for slides -->


                                                    @if( count($autos->images) == 0)
                                                        @if($autos->image!='')

                                                            <img src={{checkIfImageIsexist($autos->image)}}  height="450px"  style="margin: 0 auto ">
                                                           
                                                        @else

                                                            <img src= {{  Request::root().'/public/slider/'.getSetting('no_image')}}  height="450px"  width="850px" style="margin: 0 auto"  >
                                                        @endif


                                                    @elseif( count($autos->images) == 1)
                                                        <div class="carousel-inner" >
                                                            <!-- Wrapper for slides -->
                                                            @foreach($autos->images as $key => $image)
                                                                <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                                                    <img src="{{  Request::root().'/public/front/images/'.$image->path}}"style="margin: 0 auto; height:450px">
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    @elseif( count($autos->images) == 2)
                                                        <div id="myCarousel" class="carousel slide" data-ride="carousel" >

                                                            <!-- Wrapper for slides -->
                                                            <div class="carousel-inner" >
                                                                <!-- Wrapper for slides -->
                                                                @foreach($autos->images as $key => $image)
                                                                    <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                                                        <img src="{{  Request::root().'/public/front/images/'.$image->path}}"style="margin: 0 auto; height:450px ;width:850px">
                                                                    </div>
                                                                @endforeach

                                                            </div>

                                                            <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                          <span class="slider-mover-left no-bg" aria-hidden="true">
                                             <img src="/front/img/png/chevron-left.png" alt="chevron-left">
                                              </span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>


                                                            <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                        <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <img src="/front/img/png/chevron-right.png" alt="chevron-right">
                                               </span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                            <!-- Left and right controls -->

                                                        </div>

                                                    @elseif ( count($autos->images) == 3)
                                                        <div id="myCarousel" class="carousel slide" data-ride="carousel" >

                                                            <!-- Wrapper for slides -->
                                                            <div class="carousel-inner" >
                                                                @foreach($autos->images as $key => $image)
                                                                    <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                                                        <img src="{{  Request::root().'/public/front/images/'.$image->path}}"style="margin: 0 auto; height:450px ;width:850px">
                                                                    </div>
                                                                @endforeach
                                                            </div>

                                                            <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                          <span class="slider-mover-left no-bg" aria-hidden="true">
                                             <img src="/front/img/png/chevron-left.png" alt="chevron-left">
                                              </span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>


                                                            <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                        <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <img src="/front/img/png/chevron-right.png" alt="chevron-right">
                                               </span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                    @else

                                                        <div id="myCarousel" class="carousel slide" data-ride="carousel" >

                                                            <!-- Wrapper for slides -->
                                                            <div class="carousel-inner" >
                                                                @foreach($autos->images as $key => $image)
                                                                    <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                                                        <img src="{{  Request::root().'/public/front/images/'.$image->path}}"style="margin: 0 auto; height:450px ;width:850px">
                                                                    </div>
                                                                @endforeach
                                                            </div>

                                                            <!-- Left and right controls -->
                                                            <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                          <span class="slider-mover-left no-bg" aria-hidden="true">
                                             <img src="/front/img/png/chevron-left.png" alt="chevron-left">
                                              </span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>


                                                            <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                        <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <img src="/front/img/png/chevron-right.png" alt="chevron-right">
                                               </span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>




                                                    @endif










                                                </div>
                                                <!-- Controls -->


                                                <!-- Indicators -->

                                            </div>
                                        </div>






















                                    <?php
                                                $text =  $autos->auto_description ;
                                                $newtext = wordwrap($text, 80, "<br />", true);

                                                echo "$newtext\n";
                                                ?>


                                        <a href="{{ url('detaille', $autos->id) }}" class="btn m-btn m-readMore">Voir plus</a>



                                        <div hidden>
    <!-- cette div est  à supprimer  -->
    {{ Form::open(['route' => ['comments.store', $autos->id], 'method' => 'POST']) }}



    <button type="button"  class="btn m-btn m-readMore"  onclick="toggle_div(this,'id_du_div');">Commenter</button>

    <!-- Un div caché avec un attribut id -->
    <div  hidden  >
        <div class="col-md-12">
            <div hidden>
                @if(Auth::guest())
                    {{ Form::text('user_id', 0  , ['class' => 'form-control', 'rows' => '5',
                     'placeholder'=>'  Commentaire']) }}
                @else
                    {{ Form::text('user_id', Auth::user()->id  , ['class' => 'form-control', 'rows' => '5',
               'placeholder'=>'  Commentaire']) }}

                @endif

            </div>

            {{ Form::text('comment', null, ['class' => 'form-control', 'rows' => '5',
            'placeholder'=>'  Commentaire']) }}

            {{ Form::submit('Commenter', ['class' => 'btn btn-success btn-submit', 'style' => 'margin-top:5px;']) }}

        </div>




        <!-- Le JS... -->
        <script type="text/javascript">
            function toggle_div(bouton, id) { // On déclare la fonction toggle_div qui prend en param le bouton et un id
                var div = document.getElementById(id); // On récupère le div ciblé grâce à l'id
                if(div.style.display=="none") { // Si le div est masqué...
                    div.style.display = "block"; // ... on l'affiche...
                    bouton.innerHTML = "Annuler"; // ... et on change le contenu du bouton.
                } else { // S'il est visible...
                    div.style.display = "none"; // ... on le masque...
                    bouton.innerHTML = "Commenter"; // ... et on change le contenu du bouton.
                }
            }
        </script>








    </div>






    {{ Form::close() }}
</div>




                                    </div>









                                    <!-- Comments Thread Start -->

                                @foreach($autos->comments as $comment)

                                    <div >
                                        <ul>
                                            <li>
                                                <div class="comment">
                                                    <div class="avatar">
                                                        <img src="front/img/profile/profile-01.jpg" alt="profile-01">
                                                    </div>
                                                    <div class="comment-info">
                                                        @if($comment->user_id!=0)

                                                        <h4>{{ $comment->user->name }} </h4>

                                                                @else
                                                            <h4>{{ $comment->name }} </h4>

                                                                 @endif





                                                            <span>

                                                                {{ date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}


                                                            </span>



                                                        <span>
                                                            <a href="{{ route('comments.delete', $comment->id) }}" >supprimer</a>
                                                           </span>

                                                            <a href="{{ route('comments.edit', $comment->id) }}" >

                                                            </a>

                                                    </div>
                                                    <p>
                                                        {{ $comment->comment }}



                                                    </p>

                                                </div>

                                            </li>

                                        </ul>
                                    </div>
                                    <!-- Comments thread end -->
                                    @endforeach






                                </div>
                            </div>



                        </div>
                    </div>






                </div>
                    @endforeach
                @endif

            </div>

        </div>
    </div>
</section><!--b-blog-->
@endsection