<?php

namespace App\Http\Controllers;


use App\Sliders;
use App\PubH;
use App\PubV;
use App\AutoMarque;
use App\AutoModele;
use App\User;
use App\Auto;
use App\AutoImages;
use App\SiteSetting;


use App\Http\Requests;
use App\Http\Requests\AutoRequest;
use App\Http\Requests\Step3Request;
use App\Http\Requests\Step1Request;
use App\Http\Requests\Step4Request;
use App\Http\Requests\Step3MotoRequest;
use App\Http\Requests\Step1MotoRequest;
use App\Http\Requests\Step4MotoRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Support\Facades\Session;
use Form;




class SiteSettingController extends Controller
{
    public function index(SiteSetting $siteSetting)
    {
        $siteSetting = $siteSetting::all();
        return view('admin.sitesetting.index', compact('siteSetting'));
    }



    public function store(Request $request   , SiteSetting $siteSetting){

        foreach(array_except($request->toArray()  , ['_token' , 'submit']) as $key => $req){
            $siteSettingUpdate = $siteSetting->where('namesetting',$key)->first();
            if($siteSettingUpdate->type != 3)
            $siteSettingUpdate->fill(['value' => $req ])->save();
            else{
                 $fileName = uploadImage($req , '/public/slider/' , '1600' , '500' , $siteSettingUpdate->value);
                 if($fileName){
                     $siteSettingUpdate->fill(['value' => $fileName ])->save();
                 }
             }
        }
        return  redirect('/adminpanel/sitesetting')->with('message', "Modifications charger avec success");
    }

    public function Ajoutesliders(Sliders $pi)

    {
        $pi = $pi::all();

        return view('admin.sliders.ajoute', compact('pi'));
    }

    public function storslider(Request $sliderRequest, Sliders $pi)
    {

        if ($sliderRequest->hasFile('images')) {
            $images = $sliderRequest->file('images');

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His') . $filename;
                $destinationPath = base_path() . '/public/sliders/';
                $image->move($destinationPath, $picture);


                $pi->create(['slider' => $picture,'ok'=>0]);


            }

        }

        return Redirect::back()->with('message', " images ajouter. ");


    }


    public function listeimage( Sliders $pi){
        // = Auth::user();
        $pi = $pi->all();


        return view('admin.sliders.modifier' ,  compact('pi' ));


    }
    public function sliders( Sliders $pi){
        // = Auth::user();
        $pi = $pi->all();


        return view('admin.sliders.index' ,  compact('pi' ));


    }

    public function modifier($id ,Sliders $pi){
        $user = Auth::user();
        $piInfo = $pi->find($id);

        $pi = $piInfo;
        return view('admin.sliders.form-modifier' ,  compact('pi' , 'user'));


    }
    public function update( $id, Sliders $pi,Request $request )
    {
        $buUpdate = $pi->find($id);


        $buUpdate->fill(array_except($request->all(), ['slider']))->save();

        if ($request->file('image')) {
            $fileName = uploadImage($request->file('image'), '/public/sliders/', $buUpdate->image);

            $buUpdate->fill(['slider' => $fileName])->save();

            return Redirect::back()->with('message',"image charger avec success");
        }

        $user = Auth::user();

        return Redirect::back()->with('message',"modification charger avec success");

    }
    public function destroy($id)
    {
        Sliders::find($id)->delete();
        return Redirect::back()->with('message', " image supprimer. ");
    }


    public function Ajoutepubh(PubH $pi)

    {
        $pi = $pi::all();

        return view('admin.pubh.ajoute', compact('pi'));
    }

    public function storpubh(Request $sliderRequest, PubH $pi)
    {

        if ($sliderRequest->hasFile('images')) {
            $images = $sliderRequest->file('images');

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His') . $filename;
                $destinationPath = base_path() . '/public/sliders/';
                $image->move($destinationPath, $picture);


                $pi->create(['pub' => $picture,'ok'=>0]);


            }
        }

        return Redirect('/adminpanel')->with('message', " images ajouter. ");


    }


     public function listepubh( PubH $pi){
        // = Auth::user();
        $pi = $pi->all();


        return view('admin.pubh.modifier' ,  compact('pi' ));


    }
    public function pubhs( PubH $pi){
        // = Auth::user();
        $pi = $pi->all();


        return view('admin.pubh.index' ,  compact('pi' ));


    }

    public function modifierpubh($id ,PubH $pi){
        $user = Auth::user();
        $piInfo = $pi->find($id);

        $pi = $piInfo;
        return view('admin.pubh.form-modifier' ,  compact('pi' , 'user'));


    }
    public function updatepubh(  PubH $pi,Request $request )
    {
        $buUpdate = $pi->find($request->auto_id);


        $buUpdate->fill(array_except($request->all(), ['pub']))->save();

        if ($request->file('image')) {
            $fileName = uploadImage($request->file('image'), '/public/sliders/', $buUpdate->image);

            $buUpdate->fill(['pub' => $fileName])->save();

            return Redirect::back()->with('message',"image charger avec success");
        }

        $user = Auth::user();

        return Redirect::back()->with('message',"modification charger avec success");

    }


    public function destroypubh($id)
    {
        PubH::find($id)->delete();
        return Redirect::back()->with('message', " image supprimer. ");
    }


    public function Ajoutepubv(PubV $pi)

    {
        $pi = $pi::all();

        return view('admin.pubv.ajoute', compact('pi'));
    }

    public function storpubv(Request $sliderRequest, PubV $pi)
    {

        if ($sliderRequest->hasFile('images')) {
            $images = $sliderRequest->file('images');

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His') . $filename;
                $destinationPath = base_path() . '/public/sliders/';
                $image->move($destinationPath, $picture);


                $pi->create(['pub' => $picture,'ok'=>0]);


            }
        }

        return Redirect('/adminpanel')->with('message', " images ajouter. ");


    }


     public function listepubv( PubV $pi){
        // = Auth::user();
        $pi = $pi->all();


        return view('admin.pubv.modifier' ,  compact('pi' ));


    }
    public function pubhvd( PubV $pi){
        // = Auth::user();
        $pi = $pi->all();


        return view('admin.pubv.index' ,  compact('pi' ));


    }

    public function modifierpubv($id ,PubV $pi){
        $user = Auth::user();
        $piInfo = $pi->find($id);

        $pi = $piInfo;
        return view('admin.pubv.form-modifier' ,  compact('pi' , 'user'));


    }
    public function updatepubv(  PubV $pi,Request $request )
    {
        $buUpdate = $pi->find($request->auto_id);


        $buUpdate->fill(array_except($request->all(), ['pub']))->save();

        if ($request->file('image')) {
            $fileName = uploadImage($request->file('image'), '/public/sliders/', $buUpdate->image);

            $buUpdate->fill(['pub' => $fileName])->save();

            return Redirect::back()->with('message',"image charger avec success");
        }

        $user = Auth::user();

        return Redirect::back()->with('message',"modification charger avec success");

    }


    public function destroypubv($id)
    {
        PubV::find($id)->delete();
        return Redirect::back()->with('message', " image supprimer. ");
    }

}
