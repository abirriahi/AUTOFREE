<?php

namespace App\Http\Controllers;

use App\AutoMarque;
use App\AutoModele;
use App\Moto;
use App\MotoImages;
use App\User;
use App\Auto;
use App\AutoImages;
use App\PubH;
use App\PubV;

use App\Sliders;
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
class MotoController extends Controller
{
    public function index( AutoMarque $automarque,Sliders $Img)
    {
        $autos = Auto::where('validation', 1)->where('enpublic',1)
            ->orderBy('created_at', 'desc')
            ->paginate(3);
        $new = Auto::take('2')->where('validation',1)->orderBy('created_at' , 'desc')

            ->paginate(2);

        $timezone = date("Y/m/d");
        $Img = $Img->all()->where('ok',1);

        $newmoto = Moto::take('2')->where('magazine',1)->orderBy('created_at' , 'desc')

            ->paginate(2);



        return view('front.autos.voiture-touristique.index', compact('autos','new','newmoto' ,'Img','timezone'));
    }

    public function get_moto_model(Request $r)
    {
        if($r->ajax())
        {
            $select= $r->has('select') ? $r->input('select'):'';

            if($r->has('moto_marque')){
                  return   Form::select('moto_model',
                        AutoModele::where('moto_marque_id',$r->input('moto_marque'))->pluck('motos_model','id'),$select,
                        ['class'=>'form-control m-selectt','placeholder'=>'Tous']);



            }
            elseif($r->has('moto_marque_2'))
            {
                return   Form::select('moto_model',
                    AutoModele::where('moto_marque_id',$r->input('moto_marque_2'))->pluck('motos_model','id'),$select,
                    ['id'=>'select1','placeholder'=>'Tous']);
            }
            elseif($r->has('moto_marque_3'))
            {
                return   Form::select('moto_model',
                    AutoModele::where('moto_marque_id',$r->input('moto_marque_3'))->pluck('motos_model','id'),$select,
                    ['id'=>'auto_select','placeholder'=>'Tous']);
            }
        }else{
            return '';
        }
    }



    public function info1()
    {

        return view('front.autos.moto.add');
    }
     //public function getinfo1(Step1MotoRequest $r)
   public function getinfo1(Request $r)
    {
        $r->session()->put('step1', $r->except('_token'));
        return \redirect('/motostep2');
//
    }



    public function info2(Request $r)
    {


        if ($r->session()->has('step2')) {
            $data = $r->session()->get('step2');
            $r->session()->forget('step2');
            $r->session()->forget('step4');
            //$r->session()->forget('step5');
            return view('front.autos.moto.add')->with('input', $data);
        }
        if (!$r->session()->has('step1')) {
            return \redirect('/motosell');
        }
        return view('front.autos.moto.add');
    }
    public function getinfo2(Request $r)
    {
        if (!$r->session()->has('step1'))
            return \redirect('/motosell');

        $r->session()->put('step2', $r->except('_token'));
        return \redirect('/motostep4');

    }

    public function info4(Request $r)
    {
        if ($r->session()->has('step4')) {
            $data = $r->session()->get('step4');
            $r->session()->forget('step4');
            return view('front.autos.moto.add')->with('input', $data);
        }
        if (!$r->session()->has('step2')) {
            return \redirect('/motostep2');
        }

        /*if (!$r->session()->has('step5')) {
            return \redirect('/step5');
        }*/
        return view('front.autos.moto.add');
    }
 // public function getinfo4(Step4Request $r)
    public function getinfo4(Request $r)
    {
        if (!$r->session()->has('step2'))
            return \redirect('/motostep2');

        $r->session()->put('step4', $r->except('_token'));
        return \redirect('/motostep3');

    }


     public function info3(Request $r )
    {
        if ($r->session()->has('step3')) {
            $data = $r->session()->get('step3');
            $r->session()->forget('step3');
            return view('front.autos.moto.add')->with('input', $data);
        }
        if (!$r->session()->has('step4')) {
            return \redirect('/motostep4');
        }
        return view('front.autos.moto.add');
    }
    // public function getinfo3(Step3Request $r)
    public function getinfo3(Request $r)
    {
        return \redirect('/motostep4');
        $r->session()->put('step4', $r->except('_token'));
        return 'success';
    }










    public function userAddAuto(Request $r)
    {
        if ($r->session()->has('step1')) {
            $data = $r->session()->get('step1');
            $r->session()->forget('step1');
            $r->session()->forget('step2');
            $r->session()->forget('step3');
            return view('front.autos.moto.add')->with('input', $data);
        }
        return view('front.autos.moto.add');
    }


   // public function storeAuto(AutoRequest $autoRequest, Auto $auto)
    public function storeAuto(Request $autoRequest,Moto $auto)
    {
        if (!$autoRequest->session()->has('step2'))
            return \redirect('/step2');
        if (!$autoRequest->session()->has('step4'))
            return \redirect('/step4');

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
           $user,$data2);
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
        return Redirect('/')->with('message', " annonce ajouter. ");
    }

     public function detaillemoto($id , Moto $auto , MotoImages $images)
    {
        $autoInfo = $auto->findOrFail($id);

        return view('front.autos.moto.detaille' , compact('autoInfo','autoImg' ));
    }

   public function searche(Request $request, Moto $auto,AutoMarque $marque ,AutoModele $modele,PubH $pubh,PubV $pubv)
    {

        $requestAll = array_except($request->toArray(), ['submit', '_token', 'page']);
        $query = DB::table('moto')->select('*');
        $query->where('validation', '=', 1);

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
        $pubh = $pubh->all()->where('ok',1);
        $pubv= $pubv->all()->where('ok',1);

        $selection = Moto::where('validation', 1)->where('enpublic',1)
            ->orderBy('created_at', 'desc')
            ->paginate(3);




        return view('front.autos.moto.liste-annonces', compact('autos', 'array','selection','pubh','pubv'));


    }






    public function advencedsearchliste()
    {

        $autos = Auto::where('validation', 1)
            ->orderBy('id', 'desc')
            ->paginate(3);
        return view('front.autos.voiture-touristique.advencedsearch', compact('autos'));
    }




}