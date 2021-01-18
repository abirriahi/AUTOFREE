<?php

namespace App\Http\Controllers;

use App\AutoMarque;
use App\AutoModele;
use App\User;
use App\PubV;
use App\PubH;

use App\AutoImages;

use App\Sliders;
use App\Http\Requests;
use App\Http\Requests\AutoRequest;
use App\Http\Requests\Step3Request;
use App\Http\Requests\Step1VURequest;
use App\Http\Requests\Step4Request;
use App\Http\Requests\Step3MotoRequest;
use App\Http\Requests\Step1MotoRequest;
use App\Http\Requests\Step4MotoRequest;
use App\Vehicule;
use App\VehiculeImages;
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
class VehiculeController extends Controller
{


    public function vahicule_searche()
    {
        $autos = Vehicule::where('validation', 1)
            ->orderBy('id', 'desc')
            ->paginate(300);
        $newvh = Vehicule::take('2')->where('magazine',1)->orderBy('created_at' , 'desc') ->paginate(2);

        return view('front.autos.VUtilitaire.index', compact('autos','newvh'));




    }

    public function get_vehicule_model(Request $r)
    {
        if($r->ajax())
        {
            $select= $r->has('select') ? $r->input('select'):'';

            if($r->has('vehicule_marque')){
                return   Form::select('vehicule_model',
                    AutoModele::where('vehicule_marque_id',$r->input('vehicule_marque'))->pluck('vehicules_model','id'),$select,
                    ['class'=>'form-control m-selectt','placeholder'=>'Tous']);
            }elseif($r->has('vehicule_marque_2'))
            {
                return   Form::select('vehicule_model',
                    AutoModele::where('vehicule_marque_id',$r->input('vehicule_marque_2'))->pluck('vehicules_model','id'),$select,
                    ['id'=>'select1','placeholder'=>'Tous']);
            }
        }else{
            return '';
        }
    }

    public function info1()
    {

        return view('front.autos.VUtilitaire.add');
    }
   //  public function getinfo1(Step1VURequest $r)
    public function getinfo1(Request $r)
    {
        $r->session()->put('step1', $r->except('_token'));
        return \redirect('/VUstep2');
//
    }



    public function info2(Request $r)
    {


        if ($r->session()->has('step2')) {
            $data = $r->session()->get('step2');
            $r->session()->forget('step2');
            $r->session()->forget('step5');
            return view('front.autos.VUtilitaire.add')->with('input', $data);
        }
        if (!$r->session()->has('step1')) {
            return \redirect('/vehiculesell');
        }
        return view('front.autos.VUtilitaire.add');

    }

    public function getinfo2(Request $r)
    {
        if (!$r->session()->has('step1'))
            return \redirect('/vehiculesell');

        $r->session()->put('step2', $r->except('_token'));
        return \redirect('/vustep5');

    }

    public function info4(Request $r)
    {
        if ($r->session()->has('step4')) {
            $data = $r->session()->get('step4');
            $r->session()->forget('step4');
            return view('front.autos.VUtilitaire.add')->with('input', $data);
        }
        if (!$r->session()->has('step5')) {
            return \redirect('/vustep5');
        }
        return view('front.autos.VUtilitaire.add');
    }
   // public function getinfo4(Step4Request $r)
    public function getinfo4(Request $r)
    {
        if (!$r->session()->has('step5'))
            return \redirect('/vustep5');

        $r->session()->put('step4', $r->except('_token'));
        return \redirect('/VUstep3');

    }


    public function info3(Request $r )
    {
        if ($r->session()->has('step3')) {
            $data = $r->session()->get('step3');
            $r->session()->forget('step3');
            return view('front.autos.VUtilitaire.add')->with('input', $data);
        }
        if (!$r->session()->has('step4')) {
            return \redirect('/step4');
        }
        return view('front.autos.VUtilitaire.add');
    }
    // public function getinfo3(Step3Request $r)
    public function getinfo3(Request $r)
    {
        return \redirect('/step5');
        $r->session()->put('step5', $r->except('_token'));
        return 'success';
    }



    public function info5(Request $r)
    {
        if ($r->session()->has('step5')) {
            $data = $r->session()->get('step5');
            $r->session()->forget('step5');
            return view('front.autos.VUtilitaire.add')->with('input', $data);
        }
        if (!$r->session()->has('step2')) {
            return \redirect('/VUstep2');
        }
        return view('front.autos.VUtilitaire.add');
    }
      public function getinfo5(Request $r)
    {
        if (!$r->session()->has('step2'))
            return \redirect('/VUstep2');

        $r->session()->put('step5', $r->except('_token'));
        return \redirect('/VUstep4');

    }



    public function userAddAuto(Request $r)
    {
        if ($r->session()->has('step1')) {
            $data = $r->session()->get('step1');
            $r->session()->forget('step1');
            $r->session()->forget('step2');
            $r->session()->forget('step3');
            return view('front.autos.VUtilitaire.add')->with('input', $data);
        }
        return view('front.autos.VUtilitaire.add');
    }


    // public function storeAuto(AutoRequest $autoRequest, Auto $auto)
    public function storeAuto(Request $autoRequest, Vehicule $auto)
    {
        if (!$autoRequest->session()->has('step2'))
            return \redirect('/VUstep2');
        if (!$autoRequest->session()->has('step4'))
            return \redirect('/VUstep4');

        if (!$autoRequest->session()->has('step5'))
            return \redirect('/vustep5');

        $realname = null;
        if ($autoRequest->file('image')) {
            $filename = date('His') . $autoRequest->file('image')->getClientOriginalName();
            $autoRequest->file('image')->move(
                base_path() . '/public/front/images/', $filename
            );
            $image = $filename;
        } else {
            $image = '';
        }


        $user =['user_id'=> Auth::user()->id,'image'=>$image,
        ];
        $data2 = [
            'video' => $autoRequest->video,
        ];
        $data = array_merge($autoRequest->session()->get('step1'),
            $autoRequest->session()->get('step2') ,
            $autoRequest->session()->get('step4'),

            $autoRequest->session()->get('step5'),$user,$data2);


        $aut = $auto->create($data);



        if ($autoRequest->hasFile('images')) {
            $images = $autoRequest->file('images');
            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His') . $filename;
                $destinationPath = base_path() . '/public/front/images/';
                $image->move($destinationPath, $picture);
                $aut->images()->create(['path' => $picture]);

            }
        }

        $autoRequest->session()->forget('step1');
        $autoRequest->session()->forget('step2');
        $autoRequest->session()->forget('step4');
        $autoRequest->session()->forget('step5');
        return Redirect('/')->with('message', " annonce ajouter. ");
    }

    public function detailleVU($id , Vehicule $auto , VehiculeImages $images)
    {
        $autoInfo = $auto->findOrFail($id);

        return view('front.autos.VUtilitaire.detaille' , compact('autoInfo','autoImg' ));
    }

    public function searche(Request $request, Vehicule $auto,AutoMarque $marque ,AutoModele $modele,PubH $pubh,PubV $pubv)
    {

        $requestAll = array_except($request->toArray(), ['submit', '_token', 'page']);
        $query = DB::table('vehicule')->select('*');
        $query->where('validation', '=', 1);

        $array = [];
        $cout = count($requestAll);
        $i = 0;
        $pubh = $pubh->all()->where('ok',1);
        $pubv= $pubv->all()->where('ok',1);

        $selection = Vehicule::where('validation', 1)->where('enpublic',1)
            ->orderBy('created_at', 'desc')
            ->paginate(3);

        foreach ($requestAll as $key => $req) {
            $i++;
            if ($req != '')
            {
                if ($key == 'auto_price_from' && $request->auto_price_to == '')
                {
                    $query->where('auto_price', '>=', $req);

                }

                elseif ($key == 'auto_price_to' && $request->auto_price_from == '' ) {
                    $query->where('auto_price', '<=', $req);
                }




                else {

                    if ($key != 'auto_price_to' && $key != 'auto_price_from' ) {


                        $query->where($key, $req);
                    }

                }
                $array[$key] = $req;
            }


            elseif($cout == $i && $request->auto_price_to != '' && $request->auto_price_from  )
            {
                $query->whereBetween('auto_price', [$request->auto_price_from, $request->auto_year_from]);
                $array[$key] = $req;
            }
            /*auto_km_from*/



        }




        $autos =  $query ->paginate(15);

        // return view('front.autos.index', compact('autos', 'array','autos2', 'array2','marques'));
        return view('front.autos.VUtilitaire.liste-annonces', compact('autos', 'array','selection','pubh','pubv'));


    }






    public function advencedsearchliste()
    {

        $autos = Vehicule::where('validation', 1)
            ->orderBy('id', 'desc')
            ->paginate(3);
        return view('front.autos.VUtilitaire.advencedsearch', compact('autos'));
    }




}