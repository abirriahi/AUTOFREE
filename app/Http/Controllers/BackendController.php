<?php

namespace App\Http\Controllers;


use App\Auto;
use App\AutoImages;
use App\Moto;
use App\MotoImages;
use App\User;
use App\Vehicule;
use App\VehiculeImages;

use App\Camping;
use App\CampingImages;
use App\Camion;
use App\CamionImages;
use App\Remorque;
use App\RemorqueImages;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Datatables;

use App\Sliders;
use App\AutoModele;
use App\AutoMarque;

use Illuminate\Support\Facades\Hash;
class BackendController extends Controller
{

//voiture
    public function index(Request $request ,User $user)
    {
       // htmlentities()
        return view('admin.annonces.voiture.index', compact('user'));
    }
    //moto
    public function indexmoto(Request $request ,User $user)
    {
        return view('admin.annonces.moto.index', compact('user'));
    }
    //vu
     public function indexVU(Request $request ,User $user)
    {
        return view('admin.annonces.VU.index', compact('user'));
    }
//cc
     public function indexCC(Request $request ,User $user)
    {
        return view('admin.annonces.Camping.index', compact('user'));
    }
//R
     public function indexR(Request $request ,User $user)
    {
        return view('admin.annonces.Remorque.index', compact('user'));
    }
//c
     public function indexC(Request $request ,User $user)
    {
        return view('admin.annonces.Camion.index', compact('user'));
    }


   //voiture
     public function anyData(Request $request , Auto $bu)
    {

        if($request->user_id){
            $articles = $bu->where('user_id' , $request->user_id)->get();
        }else{
            $articles = $bu->all();

        }

        return Datatables::of($articles)
            ->editColumn('new_marque', function ($model) {

                return '<a href="' . url('/update/' . $model->id ) . '">' . $model->new_marque . '</a>';
            })
            ->editColumn('new_modele', function ($model) {
                return '<a href="' . url('/update/' . $model->id ) . '">' . $model->new_modele . '</a>';
            })
            ->editColumn('existe', function ($model) {
                $type =existe();
                if ($model->existe==0) {
                    return '<a href="' . url('/adminpanel/exsite/' . $model->id . '/1') . '"><i class="fa fa-check" style="font-size:24px;color:#c32613"></i></a>';
                }
                else
                {
                    return '<a href="' . url('/adminpanel/exsite/' . $model->id . '/0') . '">' . "<span class=\"glyphicon glyphicon-ok\"> </span>" . '</span>' ;

                }
            })
            ->editColumn('validation', function ($model) {
                $type =validation();
                if ($model->validation==0) {
                    return '<a href="' . url('/adminpanel/change_status/' . $model->id . '/1') . '"><i class="fa fa-check" style="font-size:24px;color:#c32613"></i></a>';

                }
                else
                {
                    return '<a href="' . url('/adminpanel/change_status/' . $model->id . '/0') . '">'. "<span class=\"glyphicon glyphicon-ok\"></span>" . '</span>';
 ;
                }
            })
            ->editColumn('enpublic', function ($model) {
                $type =enpublic();
                if ($model->enpublic==0) {
                    return '<a href="' . url('/adminpanel/change_choix/' . $model->id . '/1') . '"><i class="fa fa-check" style="font-size:24px;color:#c32613"></i></a>';

;
                }
                else
                {
                    return '<a href="' . url('/adminpanel/change_choix/' . $model->id . '/0') . '">'."<span class=\"glyphicon glyphicon-ok\"></span>" . '</span>';

                }
            })
            ->editColumn('magazine', function ($model) {
                $type =magazine();
                if ($model->magazine==1) {
                    return '<a href="' . url('/adminpanel/magazine/' . $model->id . '/0') . '">' . "<span class=\"glyphicon glyphicon-ok\"></span>". '</a>';
                }
                else
                {
               return '<a href="' . url('/adminpanel/magazine/' . $model->id . '/1') . '"> .<i class="fa fa-check" style="font-size:24px;color:#c32613"></i></a> ' ;

                }
            })
            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/update/' . $model->id) . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';

                $all .= '<a href="' . url('/adminpanel/annonce/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);

    }


    //moto
    public function anyDatamoto(Request $request , Moto $bu)
    {


        $articles = $bu->all();


        return Datatables::of($articles)
            ->editColumn('new_marque', function ($model) {

                return '<a href="' . url('/motoupdate/' . $model->id ) . '">' . $model->new_marque . '</a>';
            })
            ->editColumn('new_modele', function ($model) {
                return '<a href="' . url('/motoupdate/' . $model->id ) . '">' . $model->new_modele . '</a>';
            })
            ->editColumn('existe', function ($model) {
                $type =existe();
                if ($model->existe==0) {
                    return '<a href="' . url('/adminpanel/exsite/moto/' . $model->id . '/1') . '"><i class="fa fa-check" style="font-size:24px;color:#c32613"></i></a>';


                }
                else
                {
                    return '<a href="' . url('/adminpanel/exsite/moto/' . $model->id . '/0') . '">' . "<span class=\"glyphicon glyphicon-ok\"> </span>" . '</span>' ;

                }
            })
            ->editColumn('validation', function ($model) {
                $type =validation();
                if ($model->validation==0) {
                    return '<a href="' . url('/adminpanel/change_status/moto/' . $model->id . '/1') . '"><i class="fa fa-check" style="font-size:24px;color:#c32613"></i></a>';

                }
                else
                {
                    return '<a href="' . url('/adminpanel/change_status/moto/' . $model->id . '/0') . '">'. "<span class=\"glyphicon glyphicon-ok\"></span>" . '</span>';

                }
            })
            ->editColumn('enpublic', function ($model) {
                $type =enpublic();
                if ($model->enpublic==0) {
                    return '<a href="' . url('/adminpanel/change_choix/moto/' . $model->id . '/1') . '"><i class="fa fa-check" style="font-size:24px;color:#c32613"></i></a>';

                }
                else
                {
                    return '<a href="' . url('/adminpanel/change_choix/moto/' . $model->id . '/0') . '">'."<span class=\"glyphicon glyphicon-ok\"></span>" . '</span>';

                }
            })
            ->editColumn('magazine', function ($model) {
                $type =magazine();
                if ($model->magazine==0) {
                    return '<a href="' . url('/adminpanel/magazine/moto/' . $model->id . '/1') . '"> <i class="fa fa-check" style="font-size:24px;color:#c32613"></i></a>';


                }
                else
                {

                    return '<a href="' . url('/adminpanel/magazine/moto/' . $model->id . '/0') . '"> ' . "<span class=\"glyphicon glyphicon-ok\"></span>". '</span>' ;

                }
            })
            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/annonce/moto' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);

    }

  //vu
    public function anyDataVU(Request $request , Vehicule $bu)
    {


        $articles = $bu->all();


        return Datatables::of($articles)
            ->editColumn('new_marque', function ($model) {

                return '<a href="' . url('/VUpdate/' . $model->id ) . '">' . $model->new_marque . '</a>';
            })
            ->editColumn('new_modele', function ($model) {
                return '<a href="' . url('/VUpdate/' . $model->id ) . '">' . $model->new_modele . '</a>';
            })
            ->editColumn('existe', function ($model) {
                $type =existe();
                if ($model->existe==0) {
                    return '<a href="' . url('/adminpanel/exsite/VU/' . $model->id . '/1') . '">' . $type[$model->existe] . '</span>';
                }
                else
                {
                    return '<a href="' . url('/adminpanel/exsite/VU/' . $model->id . '/0') . '">' . $type[$model->existe] . '</span>';

                }
            })
            ->editColumn('validation', function ($model) {
                $type =validation();
                if ($model->validation==0) {
                    return '<a href="' . url('/adminpanel/change_status/VU/' . $model->id . '/1') . '">' . $type[$model->validation] . '</span>';

                }
                else
                {
                    return '<a href="' . url('/adminpanel/change_status/VU/' . $model->id . '/1') . '">' . $type[$model->validation] . '</span>';

                }
            })
            ->editColumn('enpublic', function ($model) {
                $type =enpublic();
                if ($model->enpublic==0) {
                    return '<a href="' . url('/adminpanel/change_choix/VU/' . $model->id . '/1') . '">'  . $type[$model->enpublic] . '</span>';
                }
                else
                {
                    return '<a href="' . url('/adminpanel/change_choix/VU/' . $model->id . '/0') . '">'  . $type[$model->enpublic] . '</span>';

                }
            })

            ->editColumn('magazine', function ($model) {
                $type =magazine();
                if ($model->magazine==0) {
                    return '<a href="' . url('/adminpanel/magazine/VU/' . $model->id . '/1') . '">'  . $type[$model->magazine] . '</span>';
                }
                else
                {
                    return '<a href="' . url('/adminpanel/magazine/VU/' . $model->id . '/0') . '">'  . $type[$model->magazine] . '</span>';

                }
            })

            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/annonce/VU/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);

    }
//camping
    public function anyDataCC(Request $request , Camping $bu)
    {


        $articles = $bu->all();


        return Datatables::of($articles)
            ->editColumn('new_marque', function ($model) {

                return '<a href="' . url('/camping/update/' . $model->id ) . '">' . $model->new_marque . '</a>';
            })
            ->editColumn('new_modele', function ($model) {
                return '<a href="' . url('/camping/update/' . $model->id ) . '">' . $model->new_modele . '</a>';
            })
            ->editColumn('existe', function ($model) {
                $type =existe();
                if ($model->existe==0) {
                    return '<a href="' . url('/adminpanel/exsite/CC/' . $model->id . '/1') . '">' . $type[$model->existe] . '</span>';
                }
                else
                {
                    return '<a href="' . url('/adminpanel/exsite/CC/' . $model->id . '/0') . '">' . $type[$model->existe] . '</span>';

                }
            })
            ->editColumn('validation', function ($model) {
                $type =validation();
                if ($model->validation==0) {
                    return '<a href="' . url('/adminpanel/change_status/CC/' . $model->id . '/1') . '">' . $type[$model->validation] . '</span>';

                }
                else
                {
                    return '<a href="' . url('/adminpanel/change_status/CC/' . $model->id . '/1') . '">' . $type[$model->validation] . '</span>';

                }
            })
            ->editColumn('enpublic', function ($model) {
                $type =enpublic();
                if ($model->enpublic==0) {
                    return '<a href="' . url('/adminpanel/change_choix/CC/' . $model->id . '/1') . '">'  . $type[$model->enpublic] . '</span>';
                }
                else
                {
                    return '<a href="' . url('/adminpanel/change_choix/CC/' . $model->id . '/0') . '">'  . $type[$model->enpublic] . '</span>';

                }
            })

            ->editColumn('magazine', function ($model) {
                $type =magazine();
                if ($model->magazine==0) {
                    return '<a href="' . url('/adminpanel/magazine/CC/' . $model->id . '/1') . '">'  . $type[$model->magazine] . '</span>';
                }
                else
                {
                    return '<a href="' . url('/adminpanel/magazine/CC/' . $model->id . '/0') . '">'  . $type[$model->magazine] . '</span>';

                }
            })

            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/annonce/CC/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);

    }

    //remorque
    public function anyDataR(Request $request , Remorque $bu)
    {


        $articles = $bu->all();


        return Datatables::of($articles)
            ->editColumn('new_marque', function ($model) {

                return '<a href="' . url('/remorque/update/' . $model->id ) . '">' . $model->new_marque . '</a>';
            })
            ->editColumn('new_modele', function ($model) {
                return '<a href="' . url('/remorque/update/' . $model->id ) . '">' . $model->new_modele . '</a>';
            })
            ->editColumn('existe', function ($model) {
                $type =existe();
                if ($model->existe==0) {
                    return '<a href="' . url('/adminpanel/exsite/R/' . $model->id . '/1') . '">' . $type[$model->existe] . '</span>';
                }
                else
                {
                    return '<a href="' . url('/adminpanel/exsite/R/' . $model->id . '/0') . '">' . $type[$model->existe] . '</span>';

                }
            })
            ->editColumn('validation', function ($model) {
                $type =validation();
                if ($model->validation==0) {
                    return '<a href="' . url('/adminpanel/change_status/R/' . $model->id . '/1') . '">' . $type[$model->validation] . '</span>';

                }
                else
                {
                    return '<a href="' . url('/adminpanel/change_status/R/' . $model->id . '/O') . '">' . $type[$model->validation] . '</span>';

                }
            })
            ->editColumn('enpublic', function ($model) {
                $type =enpublic();
                if ($model->enpublic==0) {
                    return '<a href="' . url('/adminpanel/change_choix/R/' . $model->id . '/1') . '">'  . $type[$model->enpublic] . '</span>';
                }
                else
                {
                    return '<a href="' . url('/adminpanel/change_choix/R/' . $model->id . '/0') . '">'  . $type[$model->enpublic] . '</span>';

                }
            })
            ->editColumn('magazine', function ($model) {
                $type =magazine();
                if ($model->magazine==0) {
                    return '<a href="' . url('/adminpanel/magazine/R/' . $model->id . '/1') . '">'  . $type[$model->magazine] . '</span>';
                }
                else
                {
                    return '<a href="' . url('/adminpanel/magazine/R/' . $model->id . '/0') . '">'  . $type[$model->magazine] . '</span>';

                }
            })

            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/annonce/R/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);

    }


//camion
    public function anyDataC(Request $request , Camion $bu)
    {


        $articles = $bu->all();


        return Datatables::of($articles)
            ->editColumn('new_marque', function ($model) {

                return '<a href="' . url('/camion/update/' . $model->id ) . '">' . $model->new_marque . '</a>';
            })
            ->editColumn('new_modele', function ($model) {
                return '<a href="' . url('/camion/update/' . $model->id ) . '">' . $model->new_modele . '</a>';
            })
            ->editColumn('existe', function ($model) {
                $type =existe();
                if ($model->existe==0) {
                    return '<a href="' . url('/adminpanel/exsite/C/' . $model->id . '/1') . '">' . $type[$model->existe] . '</span>';
                }
                else
                {
                    return '<a href="' . url('/adminpanel/exsite/C/' . $model->id . '/0') . '">' . $type[$model->existe] . '</span>';

                }
            })
            ->editColumn('validation', function ($model) {
                $type =validation();
                if ($model->validation==0) {
                    return '<a href="' . url('/adminpanel/change_status/C/' . $model->id . '/1') . '">' . $type[$model->validation] . '</span>';

                }
                else
                {
                    return '<a href="' . url('/adminpanel/change_status/C/' . $model->id . '/0') . '">' . $type[$model->validation] . '</span>';

                }
            })
            ->editColumn('enpublic', function ($model) {
                $type =enpublic();
                if ($model->enpublic==0) {
                    return '<a href="' . url('/adminpanel/change_choix/C/' . $model->id . '/1') . '">'  . $type[$model->enpublic] . '</span>';
                }
                else
                {
                    return '<a href="' . url('/adminpanel/change_choix/C/' . $model->id . '/0') . '">'  . $type[$model->enpublic] . '</span>';

                }
            })
            ->editColumn('magazine', function ($model) {
                $type =magazine();
                if ($model->magazine==0) {
                    return '<a href="' . url('/adminpanel/magazine/C/' . $model->id . '/1') . '">'  . $type[$model->magazine] . '</span>';
                }
                else
                {
                    return '<a href="' . url('/adminpanel/magazine/C/' . $model->id . '/0') . '">'  . $type[$model->magazine] . '</span>';

                }
            })

            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/annonce/C/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);

    }



//voiture
    public function changeStatus ($id , $validation  ,Auto $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['validation' =>  $validation])->save();
        return Redirect::back()->with('message',"valider");
    }
     public function changechoix ($id , $choix  ,Auto $bu){


         $buUpdate = $bu->find($id);
        $buUpdate->fill(['enpublic' =>  $choix])->save();
        return Redirect::back()->with('message'," selectionner");
    }
      public function existe ($id , $existe  ,Auto $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['existe' =>  $existe])->save();
        return Redirect::back()->with('message',"marque ajouter" );
    }
       public function magazine ($id , $magazine  ,Auto $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['magazine' =>  $magazine])->save();
        return Redirect::back()->with('message',"magazine" );
    }



//moto
    public function changeStatusM($id , $validation  ,Moto $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['validation' =>  $validation])->save();
        return Redirect::back()->with('message',"valider");
    }
     public function changechoixM ($id , $choix  ,Moto $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['enpublic' =>  $choix])->save();
        return Redirect::back()->with('message'," selectionner");
    }
    public function existeM ($id , $existe  ,Moto $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['existe' =>  $existe])->save();
        return Redirect::back()->with('message',"marque ajouter" );
    }

    public function magazineM ($id , $magazine  ,Moto $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['magazine' =>  $magazine])->save();
        return Redirect::back()->with('message',"magazine" );
    }







//VU

    public function changeStatusVU($id , $validation  ,Vehicule $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['validation' =>  $validation])->save();
        return Redirect::back()->with('message',"valider");
    }
    public function changechoixVU ($id , $choix  ,Vehicule $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['enpublic' =>  $choix])->save();
        return Redirect::back()->with('message'," selectionner");
    }
    public function existeVU ($id , $existe  ,Vehicule $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['existe' =>  $existe])->save();
        return Redirect::back()->with('message',"marque ajouter" );
    }
    public function magazineVU ($id , $magazine  ,Vehicule $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['magazine' =>  $magazine])->save();
        return Redirect::back()->with('message',"magazine" );
    }


//camping

    public function changeStatusCC($id , $validation  ,Camping $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['validation' =>  $validation])->save();
        return Redirect::back()->with('message',"valider");
    }
    public function changechoixCC ($id , $choix  ,Camping $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['enpublic' =>  $choix])->save();
        return Redirect::back()->with('message'," selectionner");
    }
    public function existeCC ($id , $existe  ,Camping $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['existe' =>  $existe])->save();
        return Redirect::back()->with('message',"marque ajouter" );
    }
    public function magazineCC ($id , $magazine  ,Camping $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['magazine' =>  $magazine])->save();
        return Redirect::back()->with('message',"magazine" );
    }

//Remorque

    public function changeStatusR($id , $validation  ,Remorque $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['validation' =>  $validation])->save();
        return Redirect::back()->with('message',"valider");
    }
    public function changechoixR ($id , $choix  ,Remorque $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['enpublic' =>  $choix])->save();
        return Redirect::back()->with('message'," selectionner");
    }
    public function existeR ($id , $existe  ,Remorque $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['existe' =>  $existe])->save();
        return Redirect::back()->with('message',"marque ajouter " );
    }
    public function magazineR ($id , $magazine  ,Remorque $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['magazine' =>  $magazine])->save();
        return Redirect::back()->with('message',"magazine" );
    }
//Camion

    public function changeStatusC($id , $validation  ,Camion $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['validation' =>  $validation])->save();
        return Redirect::back()->with('message',"valider");
    }
    public function changechoixC ($id , $choix  ,Camion $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['enpublic' =>  $choix])->save();
        return Redirect::back()->with('message',"selectionner");
    }
    public function existeC ($id , $existe  ,Camion $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['existe' =>  $existe])->save();
        return Redirect::back()->with('message',"marque ajouter" );
    }

    public function magazineC ($id , $magazine  ,Camion $bu){
        $buUpdate = $bu->find($id);
        $buUpdate->fill(['magazine' =>  $magazine])->save();
        return Redirect::back()->with('message',"magazine" );
    }


//voiture
    public function destroy($id)
    {
        Auto::find($id)->delete();
        AutoImages::where('auto_id', $id)->delete();

        return Redirect::back()->with('message', " annonce supprimer. ");
    }
    //moto
    public function destroymoto($id)
    {
        Moto::find($id)->delete();
        MotoImages::where('moto_id', $id)->delete();

        return Redirect::back()->with('message', " annonce supprimer. ");
    }
    //Vu
    public function destroyVU($id)
    {
        Vehicule::find($id)->delete();
        VehiculeImages::where('vehicule_id', $id)->delete();

        return Redirect::back()->with('message', " annonce supprimer. ");
    }
  //camping
    public function destroyCC($id)
    {
        Camping::find($id)->delete();
        CampingImages::where('camping_id', $id)->delete();

        return Redirect::back()->with('message', " annonce supprimer. ");
    }
//remorque
    public function destroyR($id)
    {
        Remorque::find($id)->delete();
        RemorqueImages::where('remorque_id', $id)->delete();

        return Redirect::back()->with('message', " annonce supprimer. ");
    }
//camion
    public function destroyC($id)
    {
        Camion::find($id)->delete();
        CamionImages::where('camion_id', $id)->delete();

        return Redirect::back()->with('message', " annonce supprimer. ");
    }




}