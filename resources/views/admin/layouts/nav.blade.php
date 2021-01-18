<li class="treeview" style="background-color: white">
    <a target="_blank"  href="{{url('/')}}">
        <i class="fa fa-home"></i> <span style="color:#d20023">Acceuil</span>

    </a>

</li>

{{-- users --}}

<li class="treeview"  style="background-color: white">
    <a href="#">
        <i class="fa fa-users"></i> <span style="color:#d20023">Utilisateurs</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu"  style="background-color: white">
        <li><a href="{{url('/adminpanel/user')}}"><i class="fa fa-users"></i>
                <span style="color:#d20023">
                Tous les utilisateurs</span> </a></li>
    </ul>
</li>


<!--voiture-->
<li class="treeview"  style="background-color:white">
    <a href="#">
        <i class="fa fa-building"></i> <span style="color:#d20023">FDC</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu"  style="background-color: white">
        <li class="active"><a href="{{url('/adminpanel')}}"><i class="fa fa-building-o"></i>
                <span style="color:#d20023">
                Opératrice </span></a></li>
        <li class="active"><a href="{{url('/adminpanel/ajoute/marque/modele/')}}"><i class="fa fa-building-o"></i>

                <span style="color:#d20023">
                 AJOUTER DIVISION </span> </a></li>

        <li class="active"><a href="{{url('/adminpanel/ajoute/modele/')}}"><i class="fa fa-building-o"></i>
                <span style="color:#d20023">
                AJOUTER POSTE</span> </a></li>
        <li class="active"><a href="{{url('/adminpanel/marques')}}"><i class="fa fa-building-o"></i>
                <span style="color:#d20023">
                DIVISIONS  </span></a></li>
    </ul>
</li>

<!---moto-->
<li class="treeview"  style="background-color:white">
    <a href="#">
        <i class="fa fa-building"></i> <span style="color:#d20023">HPC</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu"  style="background-color: white">
        <li class="active"><a href="{{url('/adminpanel/motos')}}"><i class="fa fa-building-o"></i>
                <span style="color:#d20023">
                OPERATRICE</span></a></li>
        <li class="active"><a href="{{url('/adminpanel/ajoute/moto/marque/modele/')}}"><i class="fa fa-building-o"></i>

                <span style="color:#d20023">
                AJOUTER DIVISON </span> </a></li>

        <li class="active"><a href="{{url('/adminpanel/ajoute/moto/modele/')}}"><i class="fa fa-building-o"></i>
                <span style="color:#d20023">
                AJOUTER POSTE</span> </a></li>
        <li class="active"><a href="{{url('/adminpanel/moto/marques')}}"><i class="fa fa-building-o"></i>
                <span style="color:#d20023">
               DIVISION  </span></a></li>
    </ul>
</li>

<!---VU-->
<li class="treeview"  style="background-color:white">
    <a href="#">
        <i class="fa fa-building"></i> <span style="color:#d20023">MCI</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu"  style="background-color: white">
        <li class="active"><a href="{{url('/adminpanel/VUs')}}"><i class="fa fa-building-o"></i>
                <span style="color:#d20023">
                Opératrice </span></a></li>
        <li class="active"><a href="{{url('/adminpanel/ajoute/VU/marque/modele/')}}"><i class="fa fa-building-o"></i>

                <span style="color:#d20023">
                Ajouter ligne </span> </a></li>

        <li class="active"><a href="{{url('/adminpanel/ajoute/VU/modele/')}}"><i class="fa fa-building-o"></i>
                <span style="color:#d20023">
                Ajouter moste</span> </a></li>
        <li class="active"><a href="{{url('/adminpanel/VU/marques')}}"><i class="fa fa-building-o"></i>
                <span style="color:#d20023">
                lignes  </span></a></li>
    </ul>
</li>


<!--parametre-->
<li class="treeview"  style="background-color: white;">
    <a  href="#">
        <i class="fa fa-gears"></i> <span style="color:#c32613">
             <i class="fa fa-angle-right pull-right"></i>
            Paramètres de site </span>
    </a>

    <ul class="treeview-menu"  style="background-color: white">
        <li class="active"><a href="{{url('/adminpanel/sitesetting')}}"><i class="fa fa-building-o"></i>

                <span style="color:#c32613">
                Parametre </span> </a>
        </li>

    </ul>





</li>



<!---image index-->




<!--publicité horisontal et verical-->






