<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use App\Auto;
use App\Moto;

use App\Vehicule;
use App\Camping;
use App\Camion;
use App\Remorque;
use App\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Datatables;

class UserSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.user.index');
    }
   //Paramètres comptes
    public function userSettings(User $users){
        $user = Auth::user();
        return view('front.settings.userSettings' , compact('user'));
    }
    public function userUpdateSettings(Requests\SettingRequest $request, User $users){
        $user = Auth::user();
        $user->fill($request->all())->save();
       // return Redirect::back()->with('message','modification effectuée avec succés ');
        return Redirect::back()->withFlashMessage( 'modification effectuée avec succés ') ;


    }
    public function getPassword(User $users){
        $user = Auth::user();
        return view('front.settings.editPassword' , compact('user'));
    }
    public function updatePassword(Requests\PasswordRequest $request , User $users)
    {
        $user = Auth::user();
        if (Hash::check($request->password, $user->password)) {
            $hash = Hash::make($request->newpassword);
            $user->fill(['password' => $hash])->save();
            return Redirect::back()->with('message','modification effectuée avec succés ');

        } else {
            return Redirect::back()->with('error', 'votre mot de passe est incorrect.');
        }
    }
    public function anyData(User $user)
    {

        $users = $user->all();

        return Datatables::of($users)

            ->editColumn('phone', function ($model) {

                return $model->phone;
            })


            ->editColumn('name', function ($model) {
                return $model->name;
            })

            ->editColumn('admin', function ($model) {
                $type = admin();
                return   $type[$model->admin] ;

            })


            ->editColumn('control', function ($model) {
                if ($model->admin==1 ) {
                    $all = '<a href="' . url('#') . '"></a>';

                }
                else{


                    $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                }
                return $all;
            })
            ->make(true);


    }
    public function destroy($id , User $user ){

            $user->find($id)->delete();
            Auto::where('user_id', $id)->delete();
            return redirect('/adminpanel/user')->with('message',"user supprimer");


    }

#parametre de grid
    public function gridv(Auto $autos,Sliders $Img)
{
    $user = Auth::user();
    $autos = $autos->where('user_id' , $user->id)->paginate(15);

   $motos = Moto::where('enpublic' , 1)->where('user_id' , $user->id)->count();
    $VU = Vehicule::where('enpublic' , 1)->where('user_id' , $user->id)->count();
    $remorque = Remorque::where('enpublic' , 1)->where('user_id' , $user->id)->count();
    $camion = Camion::where('enpublic' , 1)->where('user_id' , $user->id)->count();
    $camping = Camping::where('enpublic' , 1)->where('user_id' , $user->id)->count();

    $Img = $Img->all()->where('ok',1);
    $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

    return view('front.autos.grid.grid-v' , compact('autos' , 'user' ,'Img','new','motos','VU','remorque','camion','camping'));

}
    public function changechoix ($id , $choix  ,Auto $bu){

        if($choix==1)
        {
            $user = Auth::user();
            $autos = Auto::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $motos = Moto::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $C = Camion::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $CC = Camping::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $R = Remorque::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $VU = Vehicule::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            if (  $motos>0  ) {

                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($autos>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($VU>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($C>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($CC>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }

            elseif($R>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }




            $buUpdate = $bu->find($id);
            $buUpdate->fill(['enpublic' =>  $choix])->save();
            return Redirect::back()->with('message'," selection terminer");

        }
        else{
            $buUpdate = $bu->find($id);
            $buUpdate->fill(['enpublic' =>  $choix])->save();
            return Redirect::back()->with('message'," selection terminer");


        }



          }

    public function gridM(Moto $autos,Sliders $Img)
{
    $user = Auth::user();
    $autos = $autos->where('user_id' , $user->id)->paginate(15);
    $Img = $Img->all()->where('ok',1);
    $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

    return view('front.autos.grid.grid-M', compact('autos' , 'user' ,'Img','new'));

}
    public function changechoixM ($id , $choix  ,Moto $bu){
        if($choix==1)
        {
            $user = Auth::user();
            $autos = Auto::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $motos = Moto::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $C = Camion::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $CC = Camping::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $R = Remorque::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $VU = Vehicule::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            if (  $motos>0  ) {

                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($autos>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($VU>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($C>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($CC>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }

            elseif($R>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }




            $buUpdate = $bu->find($id);
            $buUpdate->fill(['enpublic' =>  $choix])->save();
            return Redirect::back()->with('message'," selection terminer");

        }
        else{
            $buUpdate = $bu->find($id);
            $buUpdate->fill(['enpublic' =>  $choix])->save();
            return Redirect::back()->with('message'," selection terminer");


        }

    }

    public function gridC(Camion $autos,Sliders $Img)
{
    $user = Auth::user();
    $autos = $autos->where('user_id' , $user->id)->paginate(15);
    $Img = $Img->all()->where('ok',1);
    $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

    return view('front.autos.grid.grid-C', compact('autos' , 'user' ,'Img','new'));

}
    public function changechoixC ($id , $choix  ,Camion $bu){
        if($choix==1)
        {
            $user = Auth::user();
            $autos = Auto::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $motos = Moto::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $C = Camion::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $CC = Camping::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $R = Remorque::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $VU = Vehicule::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            if (  $motos>0  ) {

                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($autos>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($VU>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($C>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($CC>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }

            elseif($R>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }




            $buUpdate = $bu->find($id);
            $buUpdate->fill(['enpublic' =>  $choix])->save();
            return Redirect::back()->with('message'," selection terminer");

        }
        else{
            $buUpdate = $bu->find($id);
            $buUpdate->fill(['enpublic' =>  $choix])->save();
            return Redirect::back()->with('message'," selection terminer");


        }
    }

    public function gridCC(Camping $autos,Sliders $Img)
{
    $user = Auth::user();
    $autos = $autos->where('user_id' , $user->id)->paginate(15);
    //$Img = $Img->all()->where('ok',1);
    //$new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

    return view('front.autos.grid.grid-CC', compact('autos' , 'user' ,'Img','new'));

}
    public function changechoixCC ($id , $choix  ,Camping $bu){
        if($choix==1)
        {
            $user = Auth::user();
            $autos = Auto::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $motos = Moto::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $C = Camion::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $CC = Camping::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $R = Remorque::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $VU = Vehicule::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            if (  $motos>0  ) {

                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($autos>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($VU>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($C>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($CC>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }

            elseif($R>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }




            $buUpdate = $bu->find($id);
            $buUpdate->fill(['enpublic' =>  $choix])->save();
            return Redirect::back()->with('message'," selection terminer");

        }
        else{
            $buUpdate = $bu->find($id);
            $buUpdate->fill(['enpublic' =>  $choix])->save();
            return Redirect::back()->with('message'," selection terminer");


        }
    }

    public function gridR(Remorque $autos,Sliders $Img)
    {
        $user = Auth::user();
        $autos = $autos->where('user_id' , $user->id)->paginate(15);
        $Img = $Img->all()->where('ok',1);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

        return view('front.autos.grid.grid-R', compact('autos' , 'user' ,'Img','new'));

}
    public function changechoixR ($id , $choix  ,Remorque $bu){
        if($choix==1)
        {
            $user = Auth::user();
            $autos = Auto::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $motos = Moto::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $C = Camion::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $CC = Camping::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $R = Remorque::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $VU = Vehicule::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            if (  $motos>0  ) {

                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($autos>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($VU>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($C>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($CC>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }

            elseif($R>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }




            $buUpdate = $bu->find($id);
            $buUpdate->fill(['enpublic' =>  $choix])->save();
            return Redirect::back()->with('message'," selection terminer");

        }
        else{
            $buUpdate = $bu->find($id);
            $buUpdate->fill(['enpublic' =>  $choix])->save();
            return Redirect::back()->with('message'," selection terminer");


        }
    }

    public function gridVU(Vehicule $autos,Sliders $Img)
{
    $user = Auth::user();
    $autos = $autos->where('user_id' , $user->id)->paginate(15);
    $Img = $Img->all()->where('ok',1);
    $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc');

    return view('front.autos.grid.grid-VU', compact('autos' , 'user' ,'Img','new'));

}
    public function changechoixVU ($id , $choix  ,Vehicule $bu){
        if($choix==1)
        {
            $user = Auth::user();
            $autos = Auto::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $motos = Moto::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $C = Camion::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $CC = Camping::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $R = Remorque::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            $VU = Vehicule::where('enpublic' , 1)->where('user_id' , $user->id)->count();
            if (  $motos>0  ) {

                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($autos>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($VU>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($C>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }
            elseif($CC>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }

            elseif($R>0)
            {
                return Redirect::back()->with('error', " vous avez le droit de publier une seule Annonce ");

            }




            $buUpdate = $bu->find($id);
            $buUpdate->fill(['enpublic' =>  $choix])->save();
            return Redirect::back()->with('message'," selection terminer");

        }
        else{
            $buUpdate = $bu->find($id);
            $buUpdate->fill(['enpublic' =>  $choix])->save();
            return Redirect::back()->with('message'," selection terminer");


        }
    }


}