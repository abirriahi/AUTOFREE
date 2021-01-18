<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use App\Auto;
use App\Sliders;
use Session;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'store']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function magazine(Auto $magazine,Sliders $Img ,Comment $cmnt)
    {

        $autos = Auto::where('magazine', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(3);




        return view('magazine', compact('autos' ));
    }




    public function store(Request $request, $auto_id)
    {
        $this->validate($request, array(
         //   'name'      =>  'required|max:255',
          //  'email'     =>  'required|email|max:255',
           //  'user_id'     =>  'required',
            'comment'   =>  'required|min:5|max:2000'
        ));
        $post = Auto::find($auto_id);
       /// $user = Auth::user()->id;
        $comment = new Comment();
        $comment->name ="anonyme";
       // $comment->email = Auth::user()->id;
        $comment->user_id =$request->user_id;
        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->post()->associate($post);
      //  $comment->post()->associate($post);
        $comment->save();

        return redirect()->route('magazine')->with('message', 'Commentaire effectué avec succée');
    }

    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('front.comments.edit')->withComment($comment);
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        $this->validate($request, array('comment' => 'required'));
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->route('magazine', $comment->post->id)->with('message', 'Modification effectué avec succée');
    }


    public function delete($id)
    {
        $comment = Comment::find($id);
        return view('front.comments.delete-comment')->withComment($comment);
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        $auto_id = $comment->post->id;
        $comment->delete();

        return
            redirect()->route('magazine', $auto_id)->with('message', 'Commentaire supprimer avec succée');
    }

}
