














<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use App\Auto;
use App\AutoModele;
class TestController extends Controller
{



    public function prodfunct()
    {

        $prod=Auto::all();//get data from table
        return view('front.autos.test',compact('prod'));//sent data to view

    }

    public function findProductName(Request $request){


        //if our chosen id and products table prod_cat_id col match the get first 100 data

        //$request->id here is the id of our chosen option id
        $data=AutoModele::select('autos_model','id')->where('auto_marque_id',$request->id)->take(100)->get();
        //$data=Product::select('productname','id')->where('prod_cat_id',$request->id)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
    }
    public function findProductcorosserie(Request $request){


        //if our chosen id and products table prod_cat_id col match the get first 100 data

        //$request->id here is the id of our chosen option id
        $data=AutoModele::select('autos_carrosserie','id')->where('autos_model',$request->id)->take(100)->get();
        //$data=Product::select('productname','id')->where('prod_cat_id',$request->id)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
    }

    public function findPrice(Request $request){

        //it will get price if its id match with product id
      //  $p=Product::select('price')->where('id',$request->id)->first();
     $p=AutoModele::select('prix')->where('id',$request->id)->first();

        return response()->json($p);
    }

}
