<?php

namespace App\Http\Controllers;

use App\AutoMarque;
use App\AutoModele;
use App\User;
use App\Magazine;
use App\Comment;
use App\Auto;
use App\AutoImages;

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
class MagazineController extends Controller
{


    public function magazine(Auto $magazine,Sliders $Img ,Comment $cmnt)
    {

        $autos = Auto::where('magazine', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(3);




        return view('magazine', compact('autos' ));
    }

    public function index( Magazine $mz,Sliders $Img)
    {
        $autos = Magazine::where('publier',1)
            ->orderBy('created_at', 'desc')
            ->paginate(3);
        $new = Magazine::take('2')->where('validation',1)->orderBy('created_at' , 'desc')

            ->paginate(2);

        $timezone = date("Y/m/d");
        $Img = $Img->all()->where('ok',1);




        return view('front.autos.camping-car.index', compact('autos','new' ,'Img','timezone'));
    }



    public function get_camping_model(Request $r)
    {
        if($r->ajax())
        {
            $select= $r->has('select') ? $r->input('select'):'';

            if($r->has('camping_marque')){
                return   Form::select('camping_model',
                    AutoModele::where('camping_marque_id',$r->input('camping_marque'))->pluck('campings_model','id'),$select,
                    ['class'=>'form-control m-selectt','placeholder'=>'Choose Model']);



            }
            elseif($r->has('camping_marque_2'))
            {
                return   Form::select('camping_model',
                    AutoModele::where('camping_marque_id',$r->input('camping_marque_2'))->pluck('campings_model','id'),$select,
                    ['id'=>'select1','placeholder'=>'Choose Model']);
            }


            elseif($r->has('camping_marque_3'))
            {
                return   Form::select('camping_model',
                    AutoModele::where('camping_marque_id',$r->input('camping_marque_3'))->pluck('campings_model','id'),$select,
                    ['id'=>'auto_select','placeholder'=>'Choose Model']);
            }
        }else{
            return '';
        }
    }
    public function info1()
    {

        return view('front.autos.camping-car.add');
    }

    public function info2(Request $r)
    {


        if ($r->session()->has('step2')) {
            $data = $r->session()->get('step2');
            $r->session()->forget('step2');
            $r->session()->forget('step5');
            return view('front.autos.camping-car.add')->with('input', $data);
        }
        if (!$r->session()->has('step1')) {
            return \redirect('/sell');
        }
        return view('front.autos.camping-car.add');
    }
    public function info4(Request $r)
    {
        if ($r->session()->has('step4')) {
            $data = $r->session()->get('step4');
            $r->session()->forget('step4');
            return view('front.autos.camping-car.add')->with('input', $data);
        }
        if (!$r->session()->has('step5')) {
            return \redirect('/step5');
        }
        return view('front.autos.camping-car.add');
    }


    public function info3(Request $r )
    {
        if ($r->session()->has('step3')) {
            $data = $r->session()->get('step3');
            $r->session()->forget('step3');
            return view('front.autos.camping-car.add')->with('input', $data);
        }
        if (!$r->session()->has('step4')) {
            return \redirect('/step4');
        }
        return view('front.autos.camping-car.add');
    }

    public function info5(Request $r)
    {
        if ($r->session()->has('step5')) {
            $data = $r->session()->get('step5');
            $r->session()->forget('step5');
            return view('front.autos.camping-car.add')->with('input', $data);
        }
        if (!$r->session()->has('step2')) {
            return \redirect('/step2');
        }
        return view('front.autos.camping-car.add');
    }


    // public function getinfo1(Step1Request $r)
    public function getinfo1(Request $r)
    {
        $r->session()->put('step1', $r->except('_token'));
        return \redirect('/step2');
//
    }


    public function getinfo2(Request $r)
    {
        if (!$r->session()->has('step1'))
            return \redirect('/sell');

        $r->session()->put('step2', $r->except('_token'));
        return \redirect('/step5');

    }


    //public function getinfo4(Step4Request $r)
    public function getinfo4(Request $r)
    {
        if (!$r->session()->has('step5'))
            return \redirect('/step5');

        $r->session()->put('step4', $r->except('_token'));
        return \redirect('/step3');

    }


    public function getinfo5(Request $r)
    {
        if (!$r->session()->has('step2'))
            return \redirect('/step2');

        $r->session()->put('step5', $r->except('_token'));
        return \redirect('/step4');

    }

    // public function getinfo3(Step3Request $r)
    public function getinfo3(Request $r)
    {
        return \redirect('/step5');
        $r->session()->put('step5', $r->except('_token'));
        return 'success';
    }



    public function userAddAuto(Request $r)
    {
        if ($r->session()->has('step1')) {
            $data = $r->session()->get('step1');
            $r->session()->forget('step1');
            $r->session()->forget('step2');
            $r->session()->forget('step3');
            return view('front.autos.camping-car.add')->with('input', $data);
        }
        return view('front.autos.camping-car.add');
    }


    // public function storeAuto(AutoRequest $autoRequest, Auto $auto)
    public function storeAuto(Request $autoRequest, Auto $auto)
    {
        if (!$autoRequest->session()->has('step2'))
            return \redirect('/step2');
        if (!$autoRequest->session()->has('step4'))
            return \redirect('/step4');
        if (!$autoRequest->session()->has('step5'))
            return \redirect('/step5');

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
            $autoRequest->session()->get('step4'),
            $autoRequest->session()->get('step5'),$user);
        $aut = $auto->create($data);

        if ($autoRequest->hasFile('images')) {
            $images = $autoRequest->file('images');
            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $picture = date('His') . $filename;
                $destinationPath = base_path() . '\public\front\images/';
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

    public function detaillevoiture($id , Auto $auto , AutoImages $images)
    {
        $autoInfo = $auto->findOrFail($id);

        return view('front.autos.camping-car.detaille' , compact('autoInfo','autoImg' ));
    }

    public function search(Request $request, Camping $auto,AutoMarque $marque ,AutoModele $modele)
    {

        $requestAll = array_except($request->toArray(), ['submit', '_token', 'page']);
        $query = DB::table('camping')->select('*');
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
        $marques = DB::table('autos_marque')->distinct()->lists('auto_marque');

        return view('front.autos.camping-car.liste-annonces', compact('autos', 'array','autos2', 'array2','marques'));


    }






    public function advencedsearchliste()
    {

        $autos = Auto::where('validation', 1)
            ->orderBy('id', 'desc')
            ->paginate(3);
        return view('front.autos.camping-car.advencedsearch', compact('autos'));
    }




}