<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);

        $comment->post_id = $request->get('post_id');
        //$comment->parent_id = 1;

        return back();
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);

        /*
        //Checa se é o usuário correto
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Ação Não Autorizada');  //Evita de um user deletar um comentário de outro
        }*/

        $comment->delete();
        return back();
    }
}
