<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Moto;
use App\Auto;
use Mail;
use App\AutoImages;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{


  /*  public function getcontact($id , Auto $auto )
    {
        $autoInfo = $auto->findOrFail($id);
        $same_user = $auto->where('validation' , 1)->where('user_id' , $autoInfo->user_id)

            ->orderBy(DB::raw('RAND()'))->get();



        return view('front.autos.voiture-touristique.detaille' , compact('autoInfo','autoImg','same_user' ));
    }*/


    public function store(Request $request )
    {

     /*   \Mail::send('front.autos.voiture-touristique.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')

            ),
            function($message)
            {
                $message->from('email');
                $message->to('3abir2010@gmail.com', 'Admin')->subject('TODOParrot Feedback');
            });*/

$data=array(

    'name' => $request->get('name'),
    'email' => $request->get('email'),
    'emaill' => $request->get('emaill'),
   'message' => $request->get('message'),
     'subject' => $request->get('subject'),

    );

        $name = $request->name;
        $email = $request->email;
        $emaill = $request->emaill;

         $msg = $request->message;

        Mail::send('mail' , $data,function ($message) use ($data,$name)   {

            $message->from($data['email'],$name);

            $message->to($data['emaill']);
             $message->subject($data['subject']);
            $message->setBody($data['message']);

        });
     /*  // $subject = $request->input('subject');
     //   $name = $request->name;
        $msg = $request->input('message');
        //Grab uploaded file
        $attach = $request->file('file');

        Mail::send('mail', [ 'message' => $msg ], function ($message) use ($msg)
        {

            $message->from('abirriahi2016@outlook.fr','aboura');

            $message->to('3abir2010@gmail.com');

            //Attach file
            //$message->attach($attach);

            //Add a subject
            $message->subject("sujet");
            $message->setBody("message");

        });*/



        return Redirect('/')->with('message', "merci pour votre message  ");
    }
 public function storecontactnous(Request $request )
    {


$data=array(

    'name' => $request->get('name'),
    'email' => $request->get('email'),
    'emaill' => $request->get('emaill'),
   'message' => $request->get('message'),
     'subject' => $request->get('subject'),

    );

        $name = $request->name;
        $email = $request->email;
        //$emaill = $request->emaill;

         $msg = $request->message;

        Mail::send('mail' , $data,function ($message) use ($data,$name)   {

            $message->from($data['email'],$name);

            $message->to('3abir2010@gmail.com');
             $message->subject($data['subject']);
            $message->setBody($data['message']);

        });



        return Redirect::back()->with('message', "merci pour votre message  ");
    }







}
