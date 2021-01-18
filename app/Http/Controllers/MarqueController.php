<?php

namespace App\Http\Controllers;

use App\User;
use App\Auto;
use App\Vehicule;
use App\Camping;
use App\Camion;
use App\Remorque;
use App\Moto;
use App\AutoMarque;
use App\AutoModele;
use App\AutoImages;
use App\Http\Requests;
use App\Http\Requests\AutoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Datatables;

class MarqueController extends Controller
{


//voiture
    public function index(Request $request ,AutoMarque $marques)
    {

        return view('admin.marques.touslesmarques', compact('marques'));
    }
    public function modeles(Request $request ,AutoModele $modele,$id)
    {
        $modele  ::find($id);
        $id = $request->id !== null ?'?auto_marque_id='.$request->id : null;
        return view('admin.marques.liste_modeles',compact('id',$modele));
    }

    public function anyData(AutoMarque $marque,AutoModele $modele )
    {
       // $marque = $marque->all();

       $marque = $marque->where('auto_marque' ,'!=','')->get();
        return Datatables::of($marque)

            ->editColumn('auto_marque', function ($model) {
                return '<a href="'.url('/adminpanel/modeles/' . $model->id ).'">'.$model->auto_marque.'</a>';
            })
            ->editColumn('modele', function ($model) {
                return '<a href="'.url('/adminpanel/modeles/' . $model->id).'">
                <span class="btn btn-danger btn-circle"> Poste </span> </a>';
            })



            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/marques/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/marques/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);



    }
    public function anymodele( Request $request,AutoModele $modele ,AutoMarque $marque)
    {


        if($request->auto_marque_id){
            $modele = $modele->where('auto_marque_id' , $request->auto_marque_id)->get();
        }else{
            $modele = $modele->all();
        }




        return Datatables::of($modele)

            ->editColumn('autos_model', function ($model) {
                return '<a href="'.url('/adminpanel/modele/' . $model->id . '/edit').'">'.$model->autos_model.'</a>';
            })




            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/modele/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/modele/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);


    }

    public function AjouteMarqueetModele()
    {
        return view('back.marqueetmodele.ajouteMarque');
    }
    public function StoreMarqueetModele( Request $request ,AutoMarque $marque ,AutoModele $modele)
    {

        $data = [
            'auto_marque' => $request->auto_marque,
        ];

        $building = $marque->create($data);

        $building->modeles()->create(['autos_model' => $request->autos_model]);


        return Redirect::back()->with('message', " Marque et Modele ajouter. ");

    }

    public function AjouteModele()
    {
        return view('back.marqueetmodele.AjouteModele');
    }
    public function StoreModele( Request $request ,AutoMarque $marque ,AutoModele $modele)
    {

        $modele->create([
            'autos_model' => $request->autos_model,
            'auto_marque_id' => $request->auto_marque_id,
        ]);




        return Redirect::back()->with('message','modele ajouter avec success ');

    }

//ces fonctions sont pour tous les véhicule
    public function edit($id ,AutoMarque $auto){
        $user = Auth::user();
        $autoInfo = $auto->find($id);

        $auto = $autoInfo;
        return view('back.marqueetmodele.modifierMarque' ,  compact('auto','user'));


    }
     public function update( $id, AutoMarque $auto,Request $request )
    {
        $buUpdate = $auto->find($id);

        $buUpdate->fill($request->all())->save();





        $user = Auth::user();

        return redirect('/adminpanel/marques')->with('message', " modification terminer");

    }
      public function editmodele($id ,AutoModele $auto){
        $user = Auth::user();
        $autoInfo = $auto->find($id);

        $auto = $autoInfo;
        return view('back.marqueetmodele.modifierModele' ,  compact('auto','user'));


    }
     public function Updatemodele( $id, AutoModele $auto,Request $request )
    {
        $buUpdate = $auto->find($id);

        $buUpdate->fill($request->all())->save();





        $user = Auth::user();

        return Redirect::back()->with('message',"modification charger avec success");

    }





//moto
    public function MotoAjouteMarqueetModele()
    {
        return view('admin.annonces.moto.marqueetmodele.ajouteMarque');
    }
    public function MotoStoreMarqueetModele( Request $request ,AutoMarque $marque ,AutoModele $modele)
    {

        $data = [
            'moto_marque' => $request->moto_marque,
        ];

        $building = $marque->create($data);

        $building->Motomodeles()->create(['motos_model' => $request->motos_model]);


        return Redirect::back()->with('message','marque ajouter avec success ');

    }

    public function MotoAjouteModele()
    {
        return view('admin.annonces.moto.marqueetmodele.ajouteModele');
    }
    public function MotoStoreModele( Request $request ,AutoMarque $marque ,AutoModele $modele)
    {

        $modele->create([
            'motos_model' => $request->motos_model,
            'moto_marque_id' => $request->moto_marque_id,
        ]);




        return Redirect::back()->with('message','modele ajouter avec success ');

    }


    public function motomarqueindex(Request $request ,AutoMarque $marques)
    {

        return view('admin.marques.moto.touslesmarques', compact('marques'));
    }
    public function anyDatamoto(AutoMarque $marque,AutoModele $modele )
    {
        // $marque = $marque->all();

        $marque = $marque->where('moto_marque' ,'!=','')->get();

        return Datatables::of($marque)
            ->editColumn('moto_marque', function ($model) {
                return '<a href="'.url('/adminpanel/moto/modeles/' . $model->id ).'">'.$model->moto_marque.'</a>';
            })
            ->editColumn('modele', function ($model) {
                return '<a href="'.url('/adminpanel/moto/modeles/' . $model->id).'">
                 <span class="btn btn-danger btn-circle"> modele </span> </a>';
            })


            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/marques/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/moto/marques/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);



    }


    public function motomodeles(Request $request ,AutoModele $modele,$id)
    {
        $modele  ::find($id);
        $id = $request->id !== null ?'?moto_marque_id='.$request->id : null;
        return view('admin.marques.moto.liste_modeles',compact('id',$modele));
    }

    public function anymodelemoto( Request $request,AutoModele $modele ,AutoMarque $marque)
    {


        if($request->moto_marque_id){
            $modele = $modele->where('moto_marque_id' , $request->moto_marque_id)->get();
        }else{
            $modele = $modele->all();
        }




        return Datatables::of($modele)

            ->editColumn('motos_model', function ($model) {
                return '<a href="'.url('/adminpanel/modele/' . $model->id . '/edit').'">'.$model->motos_model.'</a>';
            })




            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/modele/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/modele/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);


    }






    //VU





    public function VUAjouteMarqueetModele()
    {
        return view('admin.annonces.VU.marqueetmodele.ajouteMarque');
    }
    public function VUStoreMarqueetModele( Request $request ,AutoMarque $marque ,AutoModele $modele)
    {

        $data = [
            'vehicule_marque' => $request->vehicule_marque,
        ];

        $building = $marque->create($data);

        $building->Vehiculemodeles()->create(['vehicules_model' => $request->vehicules_model]);


        return Redirect::back()->with('message','marque ajouter avec success ');

    }

    public function VUAjouteModele()
    {
        return view('admin.annonces.VU.marqueetmodele.ajouteModele');
    }
    public function VUStoreModele( Request $request ,AutoMarque $marque ,AutoModele $modele)
    {

        $modele->create([
            'vehicules_model' => $request->vehicules_model,
            'vehicule_marque_id' => $request->vehicule_marque_id,
        ]);




        return Redirect::back()->with('message','modele ajouter avec success ');

    }


    public function VUmarqueindex(Request $request ,AutoMarque $marques)
    {

        return view('admin.marques.VU.touslesmarques', compact('marques'));
    }
    public function anyDataVU(AutoMarque $marque,AutoModele $modele )
    {
        // $marque = $marque->all();

        $marque = $marque->where('vehicule_marque' ,'!=','')->get();

        return Datatables::of($marque)
            ->editColumn('vehicule_marque', function ($model) {
                return '<a href="'.url('/adminpanel/VU/modeles/' . $model->id ).'">'.$model->vehicule_marque.'</a>';
            })
            ->editColumn('modele', function ($model) {
                return '<a href="'.url('/adminpanel/VU/modeles/' . $model->id).'">
                 <span class="btn btn-danger btn-circle"> modele </span> </a>';
            })


            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/marques/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/VU/marques/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);



    }


    public function VUmodeles(Request $request ,AutoModele $modele,$id)
    {
        $modele  ::find($id);
        $id = $request->id !== null ?'?vehicule_marque_id='.$request->id : null;
        return view('admin.marques.VU.liste_modeles',compact('id',$modele));
    }

    public function anymodeleVU( Request $request,AutoModele $modele ,AutoMarque $marque)
    {


        if($request->vehicule_marque_id){
            $modele = $modele->where('vehicule_marque_id' , $request->vehicule_marque_id)->get();
        }else{
            $modele = $modele->all();
        }




        return Datatables::of($modele)

            ->editColumn('vehicules_model', function ($model) {
                return '<a href="'.url('/adminpanel/modele/' . $model->id . '/edit').'">'.$model->vehicules_model.'</a>';
            })




            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/modele/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/modele/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);


    }


    //CAMPING

    public function CCAjouteMarqueetModele()
    {
        return view('admin.annonces.Camping.marqueetmodele.ajouteMarque');
    }
    public function CCStoreMarqueetModele( Request $request ,AutoMarque $marque ,AutoModele $modele)
    {

        $data = [
            'camping_marque' => $request->camping_marque,
        ];

        $building = $marque->create($data);

        $building->Campingsmodeles()->create(['campings_model' => $request->campings_model]);


        return Redirect::back()->with('message','marque ajouter avec success ');

    }

    public function CCAjouteModele()
    {
        return view('admin.annonces.Camping.marqueetmodele.AjouteModele');
    }
    public function CCStoreModele( Request $request ,AutoMarque $marque ,AutoModele $modele)
    {

        $modele->create([
            'campings_model' => $request->campings_model,
            'camping_marque_id' => $request->camping_marque_id,
        ]);




        return Redirect::back()->with('message','modele ajouter avec success ');

    }


    public function CCmarqueindex(Request $request ,AutoMarque $marques)
    {

        return view('admin.marques.Camping.touslesmarques', compact('marques'));
    }
    public function anyDataCC(AutoMarque $marque,AutoModele $modele )
    {
        // $marque = $marque->all();

        $marque = $marque->where('camping_marque' ,'!=','')->get();

        return Datatables::of($marque)
            ->editColumn('camping_marque', function ($model) {
                return '<a href="'.url('/adminpanel/CC/modeles/' . $model->id ).'">'.$model->camping_marque.'</a>';
            })
            ->editColumn('modele', function ($model) {
                return '<a href="'.url('/adminpanel/CC/modeles/' . $model->id).'">
                 <span class="btn btn-danger btn-circle"> modele </span> </a>';
            })


            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/marques/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/CC/marques/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);



    }


    public function CCmodeles(Request $request ,AutoModele $modele,$id)
    {
        $modele  ::find($id);
        $id = $request->id !== null ?'?camping_marque_id='.$request->id : null;
        return view('admin.marques.Camping.liste_modeles',compact('id',$modele));
    }

    public function anymodeleCC( Request $request,AutoModele $modele ,AutoMarque $marque)
    {


        if($request->camping_marque_id){
            $modele = $modele->where('camping_marque_id' , $request->camping_marque_id)->get();
        }else{
            $modele = $modele->all();
        }




        return Datatables::of($modele)

            ->editColumn('campings_model', function ($model) {
                return '<a href="'.url('/adminpanel/modele/' . $model->id . '/edit').'">'.$model->campings_model.'</a>';
            })




            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/modele/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/modele/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);


    }



 //Remorque

    public function RAjouteMarqueetModele()
    {
        return view('admin.annonces.Remorque.marqueetmodele.ajouteMarque');
    }
    public function RStoreMarqueetModele( Request $request ,AutoMarque $marque ,AutoModele $modele)
    {

        $data = [
            'remorque_marque' => $request->remorque_marque,
        ];

        $building = $marque->create($data);

        $building->Remorquemodeles()->create(['remorques_model' => $request->remorques_model]);


        return Redirect::back()->with('message','marque ajouter avec success ');

    }

    public function RAjouteModele()
    {
        return view('admin.annonces.Remorque.marqueetmodele.AjouteModele');
    }
    public function RStoreModele( Request $request ,AutoMarque $marque ,AutoModele $modele)
    {

        $modele->create([
            'remorques_model' => $request->remorques_model,
            'remorque_marque_id' => $request->remorque_marque_id,
        ]);




        return Redirect::back()->with('message','modele ajouter avec success ');

    }


    public function Rmarqueindex(Request $request ,AutoMarque $marques)
    {

        return view('admin.marques.remorque.touslesmarques', compact('marques'));
    }
    public function anyDataR(AutoMarque $marque,AutoModele $modele )
    {
        // $marque = $marque->all();

        $marque = $marque->where('remorque_marque' ,'!=','')->get();

        return Datatables::of($marque)
            ->editColumn('remorque_marque', function ($model) {
                return '<a href="'.url('/adminpanel/R/modeles/' . $model->id ).'">'.$model->remorque_marque.'</a>';
            })
            ->editColumn('modele', function ($model) {
                return '<a href="'.url('/adminpanel/R/modeles/' . $model->id).'">
                 <span class="btn btn-danger btn-circle"> modele </span> </a>';
            })


            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/marques/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/R/marques/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);



    }


    public function Rmodeles(Request $request ,AutoModele $modele,$id)
    {
        $modele  ::find($id);
        $id = $request->id !== null ?'?remorque_marque_id='.$request->id : null;
        return view('admin.marques.remorque.liste_modeles',compact('id',$modele));
    }

    public function anymodeleR( Request $request,AutoModele $modele ,AutoMarque $marque)
    {


        if($request->remorque_marque_id){
            $modele = $modele->where('remorque_marque_id' , $request->remorque_marque_id)->get();
        }else{
            $modele = $modele->all();
        }




        return Datatables::of($modele)

            ->editColumn('remorques_model', function ($model) {
                return '<a href="'.url('/adminpanel/modele/' . $model->id . '/edit').'">'.$model->remorques_model.'</a>';
            })




            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/modele/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/modele/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);


    }

//Camion

    public function CAjouteMarqueetModele()
    {
        return view('admin.annonces.Camion.marqueetmodele.ajouteMarque');
    }
    public function CStoreMarqueetModele( Request $request ,AutoMarque $marque ,AutoModele $modele)
    {

        $data = [
            'camion_marque' => $request->camion_marque,
        ];

        $building = $marque->create($data);

        $building->Camionsmodeles()->create(['camions_model' => $request->camions_model]);


        return Redirect::back()->with('message','marque ajouter avec success ');

    }

    public function CAjouteModele()
    {
        return view('admin.annonces.Camion.marqueetmodele.AjouteModele');
    }
    public function CStoreModele( Request $request ,AutoMarque $marque ,AutoModele $modele)
    {

        $modele->create([
            'camions_model' => $request->camions_model,
            'camion_marque_id' => $request->camion_marque_id,
        ]);




        return Redirect::back()->with('message','modele ajouter avec success ');

    }


    public function Cmarqueindex(Request $request ,AutoMarque $marques)
    {

        return view('admin.marques.camion.touslesmarques', compact('marques'));
    }
    public function anyDataC(AutoMarque $marque,AutoModele $modele )
    {
        // $marque = $marque->all();

        $marque = $marque->where('camion_marque' ,'!=','')->get();

        return Datatables::of($marque)
            ->editColumn('camion_marque', function ($model) {
                return '<a href="'.url('/adminpanel/C/modeles/' . $model->id ).'">'.$model->camion_marque.'</a>';
            })
            ->editColumn('modele', function ($model) {
                return '<a href="'.url('/adminpanel/C/modeles/' . $model->id).'">
                 <span class="btn btn-danger btn-circle"> modele </span> </a>';
            })


            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/marques/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/C/marques/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);



    }


    public function Cmodeles(Request $request ,AutoModele $modele,$id)
    {
        $modele  ::find($id);
        $id = $request->id !== null ?'?camion_marque_id='.$request->id : null;
        return view('admin.marques.camion.liste_modeles',compact('id',$modele));
    }

    public function anymodeleC( Request $request,AutoModele $modele ,AutoMarque $marque)
    {


        if($request->camion_marque_id){
            $modele = $modele->where('camion_marque_id' , $request->camion_marque_id)->get();
        }else{
            $modele = $modele->all();
        }




        return Datatables::of($modele)

            ->editColumn('camions_model', function ($model) {
                return '<a href="'.url('/adminpanel/modele/' . $model->id . '/edit').'">'.$model->camions_model.'</a>';
            })




            ->editColumn('control', function ($model) {

                $all = '<a href="' . url('/adminpanel/modele/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                $all .= '<a href="' . url('/adminpanel/modele/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';


                return $all;
            })
            ->make(true);


    }









    public function destroymarque($id , AutoMarque $marque ){

        $marque->find($id)->delete();
        AutoModele::where('auto_marque_id', $id)->delete();
        AutoModele::where('moto_marque_id', $id)->delete();
        AutoModele::where('vehicule_marque_id', $id)->delete();
         AutoModele::where('camping_marque_id', $id)->delete();
         AutoModele::where('remorque_marque_id', $id)->delete();
         AutoModele::where('camion_marque_id', $id)->delete();
        return redirect('/adminpanel')->with('message',"marque supprimer");


    }

    public function destroymodele($id , AutoModele $modele ){

        $modele->find($id)->delete();
         Auto::where('auto_model', $id)->delete();
         Remorque::where('remorque_model', $id)->delete();
         Moto::where('moto_model', $id)->delete();
        Camping::where('camping_model', $id)->delete();
        Camion::where('camion_model', $id)->delete();
        Vehicule::where('vehicule_model', $id)->delete();

        // AutoModele::where('auto_marque_id', $id)->delete();
        return redirect('/adminpanel')->with('message',"modele supprimer");


    }


}