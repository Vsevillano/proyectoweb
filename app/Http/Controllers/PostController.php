<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function listPosts() {
        $data['posts'] = Post::where('status', 1)->get();
        return view('blog.index', $data);
    }


    public function getPost($id) {
   
        $post = Post::find($id);
        if($post == null)
            return 'No existe el post';
        else {
            $data['post'] = $post;
            $data['comments'] = Comment::where('post_id', $id)->get();

            return view('blog.post', $data);
        }
    }

    public function postSavepost() {
        $input = Input::all();
        if(isset($input['post_id'])) {
            $post = Post::find($input['post_id']);
        } else {
            $post = new Post();
        }
        $post->title = $input['title'];
        $post->resume = $input['resume'];
        $post->description = $input['description'];
        $post->publish_date = $input['publish_date'];
        $post->status = $input['status'];
        $post->save(); // Guarda el objeto en la BD
        return view('blog.index');
    }

    public function getEditpost($id = null) {
   
        if ($id == null)
            return view('blog.edit-post');
        else {
            $data['post'] = Post::find($id);
            if($data['post'] == null)
                return view('blog.index');
            return view('blog.edit-post', $data);
        }
    }

    public function getDeletepost($id) {
        $post = Post::find($id);
        if($post == null)
            return "No existe este post";
        else
            $post->delete();
    }
}