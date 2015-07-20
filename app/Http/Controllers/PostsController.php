<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Post;
use Auth;
use Session;


class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //  public function __construct() {
    //  $this->middleware('auth', ['except' => ['index', 'show']]); }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::latest('updated_at')->get();
    //    $posts = Post::latest('updated_at')->where('user_id', '=', Auth::user()->id)->get();
    //    $posts = Post::latest('created_at')->where('created_at', '>=', '2015-07-18 06:59:06')->get();
        return view('posts.index', compact('posts')); 
    //    return dd($posts->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PostRequest $request)
    {
        Auth::user()->posts()->create($request->all());
    //    flash('Your post has been created!')->important();

    //    $post = new Post($request->all());
    //    Auth::user()->posts()->save($post);

    //    $post = new Post($request->all());
    //    $post->user_id = Auth::user()->id;
    //    $post->save(compact('post'));      

    //    Post::create($request->all());
    //    $post->user_id = Auth::user()->id;
        
    //    return $post;return redirect('posts'); 
        return redirect('posts')->with([
           'flash_message' => 'Your post has been created!',
           'flash_message_important' => true,
        ]); 

    }

    /**
     * Display the specified resource.
     *
     * @param  Post  $post
     * @return Response
     */
    public function show(Post $post)
    { 
     // dd($post->updated_at->diffForHumans());return $post;
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post  $post
     * @return Response
     */
    public function edit(Post  $post)
    {
       return view('posts.edit', compact('post')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Post  $post
     * @return Response
     */
    public function update($id, PostRequest $request)
    {
       $post = Post::findOrFail($id);
       $post->update($request->all());
       return redirect('posts'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
