<?php

namespace App\Http\Controllers;

use App\Camping;
use App\User;
use App\Auto;
use App\Moto;
use App\AutoImages;
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

class CampingController extends Controller
{
    public function info1()
    {
        return view('front.autos.moto.add');
    }
    public function info2(Request $r)
    {
        if ($r->session()->has('step2')) {
            $data = $r->session()->get('step2');
            $r->session()->forget('step2');
            //$r->session()->forget('step5');
            $r->session()->forget('step4');
            return view('front.autos.moto.add')->with('input', $data);
        }
        if (!$r->session()->has('step1')) {
            return \redirect('/motosell');
        }
        return view('front.autos.moto.add');
    }
    public function info4(Request $r)
    {
        if ($r->session()->has('step4')) {
            $data = $r->session()->get('step4');
            $r->session()->forget('step4');
            return view('front.autos.moto.add')->with('input', $data);
        }
       // if (!$r->session()->has('step5')) {
          //  return \redirect('/step5');
       if (!$r->session()->has('step2')) {
            return \redirect('/step2');
        }
        return view('front.autos.moto.add');
    }
    public function info3(Request $r )
    {
        if ($r->session()->has('step3')) {
            $data = $r->session()->get('step3');
            $r->session()->forget('step3');
            return view('front.autos.moto.add')->with('input', $data);
        }
        if (!$r->session()->has('step4')) {
            return \redirect('/step4');
        }
        return view('front.autos.moto.add');
    }

   /* public function info5(Request $r)
    {
        if ($r->session()->has('step5')) {
            $data = $r->session()->get('step5');
            $r->session()->forget('step5');
            return view('front.autos.moto.add')->with('input', $data);
        }
        if (!$r->session()->has('step2')) {
            return \redirect('/step2');
        }
        return view('front.autos.moto.add');
    }
*/

    public function getinfo1(Request $r)
    {
        $r->session()->put('step1', $r->except('_token'));
        return \redirect('/motostep2');
//
    }
    public function getinfo2(Request $r)
    {
        if (!$r->session()->has('step1'))
            return \redirect('/motosell');

        $r->session()->put('step2', $r->except('_token'));
       // return \redirect('/motostep5');
return \redirect('/motostep4');

    }


    public function getinfo4(Request $r)
    {
        //if (!$r->session()->has('step5'))
           // return \redirect('/motostep5');
 if (!$r->session()->has('step2'))
            return \redirect('/motostep2');

        $r->session()->put('step4', $r->except('_token'));
        return \redirect('/motostep3');

    }

  /*  public function getinfo5(Request $r)
    {
        if (!$r->session()->has('step2'))
            return \redirect('/motostep2');

        $r->session()->put('step5', $r->except('_token'));
        return \redirect('/motostep4');

    }*/

    public function getinfo3(Request $r)
    {
        //return \redirect('/motostep5');
        //$r->session()->put('step5', $r->except('_token'));
        return \redirect('/motostep4');
        $r->session()->put('step4', $r->except('_token'));
        return 'success';
    }


    public function userAddAuto(Request $r)
    {
        if ($r->session()->has('motostep1')) {
            $data = $r->session()->get('motostep1');
            $r->session()->forget('motostep1');
            $r->session()->forget('motostep2');
            $r->session()->forget('motostep3');
            return view('front.autos.camping-car.add')->with('input', $data);
        }
        return view('front.autos.camping-car.add');
    }
    public function storeAuto(AutoRequest $autoRequest, Auto $moto)
    {
        if (!$autoRequest->session()->has('step2'))
            return \redirect('/motostep2');
        if (!$autoRequest->session()->has('step4'))
            return \redirect('/motostep4');
       /* if (!$autoRequest->session()->has('step5'))
            return \redirect('/motostep5');*/

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
        $data = array_merge($autoRequest->session()->get('step1'),
            $autoRequest->session()->get('step2') ,
            $autoRequest->session()->get('step4')
           // $autoRequest->session()->get('step5')
            ,$user);
        $mot = $moto->create($data);

        if ($autoRequest->hasFile('images')) {
            $images = $autoRequest->file('images');
            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His') . $filename;
                $destinationPath = base_path() . '\public\front\images/';
                $image->move($destinationPath, $picture);
                $mot->images()->create(['path' => $picture]);

            }
        }
        $autoRequest->session()->forget('step1');
        $autoRequest->session()->forget('step2');
        $autoRequest->session()->forget('step4');
      //  $autoRequest->session()->forget('step5');
        return Redirect('/')->with('message', " annonce ajouter. ");
    }





    public function camping_searche()
    {
        $autos = Auto::where('validation', 0)
            ->orderBy('id', 'desc')
            ->paginate(6);

        return view('front.autos.camping-car.index', compact('autos'));

    }

    public function searche(Request $request, Camping $auto)
    {

        $requestAll = array_except($request->toArray(), ['submit', '_token', 'page']);
        $query = DB::table('camping')->select('*');
        $query->where('validation', '=', 1)->where('auto_vehicule',1);
        $array = [];

        $cout = count($requestAll);

        $i = 0;

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
                /*auto_km_from*/


                else {

                    if ($key != 'auto_price_to' && $key != 'auto_price_from' ) {
                        $query->where($key, $req);
                    }
                    /*auto_km_from*/

                }
                $array[$key] = $req;
            }


            elseif($cout == $i && $request->auto_price_to != '' && $request->auto_price_from  )
            {
                $query->whereBetween('auto_price', [$request->auto_price_from, $request->auto_price_to]);
                $array[$key] = $req;
            }
            /*auto_km_from*/



        }



        $autos =  $query ->paginate(15);

        return view('front.autos.camping-car.liste-annonces', compact('autos', 'array','autos2', 'array2'));

    }


    public function advencedsearchliste()
    {

        $autos = Auto::where('validation', 0)->where('auto_vehicule',1)
            ->orderBy('id', 'desc')
            ->paginate(3);
        return view('front.autos.camping-car.search.advencedsearch', compact('autos'));
    }


    public function detaillemoto($id , Moto $auto)
    {
        $autoInfo = $auto->findOrFail($id);
        return view('front.autos.camping-car.detaille  ' , compact('autoInfo' ));
    }



}