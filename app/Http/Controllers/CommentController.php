<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Input;


class CommentController extends Controller
{
    public function postCreatecomment() {
   
        $input = Input::all();
        $comment = new Comment();
        $comment->username = $input['user'];
        $comment->text = $input['comment'];
        $comment->post_id = $input['post_id'];
        $comment->save();
        return back();
    }

    public function getDeletecomment($id) {
        $comment = Comment::find($id);
        if($comment == null)
            return 'El comentario no existe';
        else
            $comment->delete();
        return 'Comentario eliminado';
     }
}