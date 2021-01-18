

<div class="col-md-3">
    <!-- Sidebar start-->
    <div class="sidebar">
        <aside class="sidebar-widget">
            <!-- Review search -->
            <div class="single-block review">
                <!-- Option Bar -->
                <div class="option-bar clearfix">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="section-heading">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="flaticon-settings"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Paramètres</h4>
                                        <div class="border"></div>
                                        <p>Compte {{Auth::user()->name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- title-->
                <h2 class="title"></h2>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="{{ url('/settings') }}" role="button" aria-haspopup="true" aria-expanded="false">Paramètres du compte</a>

                        </li>
                        <li class="">
                            <a href="{{ url('/changePassword') }}" role="button" aria-haspopup="true" aria-expanded="false">Changer le mot de passe</a>

                        </li>


                        <li class="" >
                            <a href="{{url('gridsv')}}" role="button" aria-haspopup="true" aria-expanded="false"> Nos Publications</a>

                        </li>

                    </ul>

                </div>
            </div>

        </aside>

    </div>
    <!-- Sidebar End-->
</div>

