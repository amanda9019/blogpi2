<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Construtor
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);  //Impede de visitantes criarem posts
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        //return $post = Post::where('title', 'Post Dois')->get();
        //$posts = DB::select('SELECT * FROM posts');

        $posts = Post::orderBy('created_at', 'asc')->get();  //Organiza de forma ascendente (asc) ou (desc) por ordem de postagem
        //$posts = Post::orderBy('title', 'desc')->take(1)->get();  //Mostra apenas 1

        //$posts = Post::orderBy('title', 'desc')->paginate(1);  //Determina o número de posts por pagina
        return view('posts.index')->with('posts', $posts);  //E passa a variavel aqui
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'  //nullable pq é opcional e max para o tamanho maximo (1999 pq é menos q 2MB)
        ]);

        //Processar upload de arquivo
        if($request->hasFile('cover_image')){  //Se escolher uma imagem
            //Pega o nome do arquivo com extensão
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            //Pega apenas o nome do arquivo  (Separados em caso de fazer upload de arquivo igual)
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Pega apenas a extensao
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;  //Torna o arquivo único por conta do time, evitando de sobrescrever
            //Upload imagem
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //Criar um post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post criado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        //Checa se é o usuário correto
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Ação Não Autorizada');  //Evita de um user editar um post de outro (pelo "/edit")
        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        //Processar upload de arquivo
        if($request->hasFile('cover_image')){  //Se escolher uma imagem
            //Pega o nome do arquivo com extensão
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            //Pega apenas o nome do arquivo  (Separados em caso de fazer upload de arquivo igual)
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Pega apenas a extensao
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;  //Torna o arquivo único por conta do time, evitando de sobrescrever
            //Upload imagem
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        //Cria um post
        $post = Post::find($id);  //Procura pelo id do post
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        //$post->user_id = auth()->user()->id;
        //$post->cover_image = $fileNameToStore;
        if($request->hasFile('cover_image')){
            Storage::delete('public/cover_images/' . $post->cover_image);
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post editado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        //Checa se é o usuário correto
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Ação Não Autorizada');  //Evita de um user deletar um post de outro
        }

        if($post->cover_image != 'noimage.jpg'){
            //Deletar imagem
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();
        return redirect('/posts')->with('success', 'Post deletado!');
    }
}
