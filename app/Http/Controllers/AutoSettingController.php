<?php

namespace App\Http\Controllers;

use App\Moto;
use App\User;
use App\Auto;
use App\Camion;
use App\Camping;
use App\Remorque;
use App\Vehicule;

use App\Sliders;
use App\AutoImages;
use App\CampingImages;
use App\Http\Requests;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests\AutoRequest;
use App\Http\Requests\Step1Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Support\Facades\Session;

class AutoSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /* voiture*/

    public function showUserAnnouncement(Auto $autos,Sliders $Img)
    {
        $user = Auth::user();
        $autos = $autos->where('user_id' , $user->id)->where('validation' , 1)->paginate(15);
        $Img = $Img->all()->where('ok',1);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

        return view('front.autos.grid.grid-v' , compact('autos' , 'user' ,'Img','new'));


    }



    public function showUserAnnouncementWatting(Auto $autos ,Sliders $Img){
        $user = Auth::user();
        $autos = $autos->where('user_id' , $user->id)->where('validation' , 0)->paginate(15);
        $Img = $Img->all()->where('ok',1);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

        return view('front.autos.autos.grid.grid-v' , compact('autos' , 'user','Img','new'));



    }




    public function update($id ,Auto $auto){
        $user = Auth::user();
        $autoInfo = $auto->find($id);

        $auto = $autoInfo;
        return view('front.autos.user-announcement.modifier' ,  compact('auto' , 'user'));


    }


    public function userUpdatecar(Request $request,  Auto $auto)
    {
        $buUpdate = $auto->find($request->auto_id);
        $buUpdate->fill(array_except($request->all(), ['image']))->save();
        if ($request->file('image')) {
            $fileName = uploadImage($request->file('image'), '/public/front/images/', '1024' , '682' ,
                $buUpdate->image);
            if (!$fileName) {
                return Redirect::back()->withFlashMessage( 'taille d image doit être entre 1024 et 682') ;

            }

            $buUpdate->fill(['image' => $fileName])->save();

            return Redirect::back()->withFlashMessage( 'image charger avec succés ') ;


        }



        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $buUpdate->images()->delete();

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His') . $filename;
                $destinationPath = base_path() . '/public/front/images/';
                $image->move($destinationPath, $picture);
                $buUpdate->images()->create(['path' => $picture]);

            }
        }


        $user = Auth::user();
        $autos = $auto->where('validation' , 1)->paginate(15);
        return Redirect::back()->withFlashMessage( 'modification effectuée avec succés ') ;

    }


    /* moto*/

    public function showUserAnnouncementmoto(Moto $autos,Sliders $Img)
    {
        $user = Auth::user();
        $autos = $autos->where('user_id' , $user->id)->where('validation' , 1)->paginate(15);
        $Img = $Img->all()->where('ok',1);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

        return view('front.autos.user-announcement.motos.mes-annonces' , compact('autos' , 'user' ,'Img','new'));


    }



    public function showUserAnnouncementWattingmoto(Moto $autos ,Sliders $Img){
        $user = Auth::user();
        $autos = $autos->where('user_id' , $user->id)->where('validation' , 0)->paginate(15);
        $Img = $Img->all()->where('ok',1);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

        return view('front.autos.user-announcement.motos.mes-annonces-en-attentes' , compact('autos' , 'user','Img','new'));



    }




    public function updatemoto($id ,Moto $auto){
        $user = Auth::user();
        $autoInfo = $auto->find($id);

        $auto = $autoInfo;
        return view('front.autos.user-announcement.motos.modifier' ,  compact('auto' , 'user'));


    }


    public function userUpdatemoto(Request $request,  Moto $auto)
    {
        $buUpdate = $auto->find($request->auto_id);
        $buUpdate->fill(array_except($request->all(), ['image']))->save();
        if ($request->file('image')) {
            $fileName = uploadImage($request->file('image'), '/public/front/images/', $buUpdate->image);
            if (!$fileName) {
                return Redirect::back()->with('message',"taille d image doit être entre 500 et 362" );
            }

            $buUpdate->fill(['image' => $fileName])->save();

            return Redirect::back()->with('message',"image charger avec success");
        }
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $buUpdate->images()->delete();

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His') . $filename;
                $destinationPath = base_path() . '/public/front/images/';
                $image->move($destinationPath, $picture);
                $buUpdate->images()->create(['path' => $picture]);

            }
        }
        $user = Auth::user();
        $autos = $auto->where('validation' , 0)->paginate(15);
        return Redirect::back()->with('message',"modification charger avec success");

    }

    /* VU*/

    public function showUserAnnouncementVU(Vehicule $autos,Sliders $Img)
    {
        $user = Auth::user();
        $autos = $autos->where('user_id' , $user->id)->where('validation' , 1)->paginate(15);
        $Img = $Img->all()->where('ok',1);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

        return view('front.autos.user-announcement.vu.mes-annonces' , compact('autos' , 'user' ,'Img','new'));


    }



    public function showUserAnnouncementWattingVu(Vehicule $autos ,Sliders $Img){
        $user = Auth::user();
        $autos = $autos->where('user_id' , $user->id)->where('validation' , 0)->paginate(15);
        $Img = $Img->all()->where('ok',1);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

        return view('front.autos.user-announcement.vu.mes-annonces-en-attentes' , compact('autos' , 'user','Img','new'));



    }




    public function updateVU($id ,Vehicule $auto){
        $user = Auth::user();
        $autoInfo = $auto->find($id);

        $auto = $autoInfo;
        return view('front.autos.user-announcement.vu.modifier' ,  compact('auto' , 'user'));


    }


    public function userUpdateVU(Request $request,  Vehicule $auto)
    {
        $buUpdate = $auto->find($request->auto_id);
        $buUpdate->fill(array_except($request->all(), ['image']))->save();
        if ($request->file('image')) {
            $fileName = uploadImage($request->file('image'), '/public/front/images/', $buUpdate->image);
            if (!$fileName) {
                return Redirect::back()->with('message',"taille d image doit être entre 500 et 362" );
            }

            $buUpdate->fill(['image' => $fileName])->save();

            return Redirect::back()->with('message',"image charger avec success");
        }
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $buUpdate->images()->delete();

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His') . $filename;
                $destinationPath = base_path() . '/public/front/images/';
                $image->move($destinationPath, $picture);
                $buUpdate->images()->create(['path' => $picture]);

            }
        }
        $user = Auth::user();
        $autos = $auto->where('validation' , 0)->paginate(15);
        return Redirect::back()->with('message',"modification charger avec success");

    }
    /* Camping*/

    public function showUserAnnouncementCamping(Camping $autos,Sliders $Img)
    {
        $user = Auth::user();
        $autos = $autos->where('user_id' , $user->id)->where('validation' , 1)->paginate(15);
        $Img = $Img->all()->where('ok',1);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

        return view('front.autos.user-announcement.camping.mes-annonces' , compact('autos' , 'user' ,'Img','new'));


    }



    public function showUserAnnouncementWattingCamping(Camping $autos ,Sliders $Img){
        $user = Auth::user();
        $autos = $autos->where('user_id' , $user->id)->where('validation' , 0)->paginate(15);
        $Img = $Img->all()->where('ok',1);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

        return view('front.autos.user-announcement.camping.mes-annonces-en-attentes' , compact('autos' , 'user','Img','new'));



    }




    public function updatecamping($id ,Camping $auto){
        $user = Auth::user();
        $autoInfo = $auto->find($id);

        $auto = $autoInfo;
        return view('front.autos.user-announcement.camping.modifier' ,  compact('auto' , 'user'));


    }


    public function userUpdatecamping(Request $request,  Camping $auto)
    {
        $buUpdate = $auto->find($request->auto_id);
        $buUpdate->fill(array_except($request->all(), ['image']))->save();
        if ($request->file('image')) {
            $fileName = uploadImage($request->file('image'), '/public/front/images/', $buUpdate->image);
            if (!$fileName) {
                return Redirect::back()->with('message',"taille d image doit être entre 500 et 362" );
            }

            $buUpdate->fill(['image' => $fileName])->save();

            return Redirect::back()->with('message',"image charger avec success");
        }
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $buUpdate->images()->delete();

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His') . $filename;
                $destinationPath = base_path() . '/public/front/images/';
                $image->move($destinationPath, $picture);
                $buUpdate->images()->create(['path' => $picture]);

            }
        }
        $user = Auth::user();
        $autos = $auto->where('validation' , 0)->paginate(15);
        return Redirect::back()->with('message',"modification charger avec success");

    }

    /* REMORQUE*/

    public function showUserAnnouncementRemorque(Remorque $autos,Sliders $Img)
    {
        $user = Auth::user();
        $autos = $autos->where('user_id' , $user->id)->where('validation' , 1)->paginate(15);
        $Img = $Img->all()->where('ok',1);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

        return view('front.autos.user-announcement.vu.mes-annonces' , compact('autos' , 'user' ,'Img','new'));


    }



    public function showUserAnnouncementWattingRemorque(Remorque $autos ,Sliders $Img){
        $user = Auth::user();
        $autos = $autos->where('user_id' , $user->id)->where('validation' , 0)->paginate(15);
        $Img = $Img->all()->where('ok',1);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

        return view('front.autos.user-announcement.vu.mes-annonces-en-attentes' , compact('autos' , 'user','Img','new'));



    }




    public function updateremorque($id ,Remorque $auto){
        $user = Auth::user();
        $autoInfo = $auto->find($id);

        $auto = $autoInfo;
        return view('front.autos.user-announcement.remorque.modifier' ,  compact('auto' , 'user'));


    }


    public function userUpdateRemorque(Request $request,  Remorque $auto)
    {
        $buUpdate = $auto->find($request->auto_id);
        $buUpdate->fill(array_except($request->all(), ['image']))->save();
        if ($request->file('image')) {
            $fileName = uploadImage($request->file('image'), '/public/front/images/', $buUpdate->image);
            if (!$fileName) {
                return Redirect::back()->with('message',"taille d image doit être entre 500 et 362" );
            }

            $buUpdate->fill(['image' => $fileName])->save();

            return Redirect::back()->with('message',"image charger avec success");
        }
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $buUpdate->images()->delete();

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His') . $filename;
                $destinationPath = base_path() . '/public/front/images/';
                $image->move($destinationPath, $picture);
                $buUpdate->images()->create(['path' => $picture]);

            }
        }
        $user = Auth::user();
        $autos = $auto->where('validation' , 0)->paginate(15);
        return Redirect::back()->with('message',"modification charger avec success");

    }

    /* CAMION*/

    public function showUserAnnouncementCamion(Remorque $autos,Sliders $Img)
    {
        $user = Auth::user();
        $autos = $autos->where('user_id' , $user->id)->where('validation' , 1)->paginate(15);
        $Img = $Img->all()->where('ok',1);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

        return view('front.autos.user-announcement.vu.mes-annonces' , compact('autos' , 'user' ,'Img','new'));


    }



    public function showUserAnnouncementWattingCamion(Remorque $autos ,Sliders $Img){
        $user = Auth::user();
        $autos = $autos->where('user_id' , $user->id)->where('validation' , 0)->paginate(15);
        $Img = $Img->all()->where('ok',1);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

        return view('front.autos.user-announcement.vu.mes-annonces-en-attentes' , compact('autos' , 'user','Img','new'));



    }




    public function updatecamion($id ,Camion $auto){
        $user = Auth::user();
        $autoInfo = $auto->find($id);

        $auto = $autoInfo;
        return view('front.autos.user-announcement.camions.modifier' ,  compact('auto' , 'user'));


    }


    public function userUpdateCamion(Request $request,  Camion $auto)
    {
        $buUpdate = $auto->find($request->auto_id);
        $buUpdate->fill(array_except($request->all(), ['image']))->save();
        if ($request->file('image')) {
            $fileName = uploadImage($request->file('image'), '/public/front/images/', $buUpdate->image);
            if (!$fileName) {
                return Redirect::back()->with('message',"taille d image doit être entre 500 et 362" );
            }

            $buUpdate->fill(['image' => $fileName])->save();

            return Redirect::back()->with('message',"image charger avec success");
        }

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $buUpdate->images()->delete();

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His') . $filename;
                $destinationPath = base_path() . '/public/front/images/';
                $image->move($destinationPath, $picture);
                $buUpdate->images()->create(['path' => $picture]);

            }
        }
        $user = Auth::user();
        $autos = $auto->where('validation' , 0)->paginate(15);
        return Redirect::back()->with('message',"modification charger avec success");

    }





}