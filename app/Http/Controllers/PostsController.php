<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Auth;
use Session;


class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
      public function __construct() {
      $this->middleware('auth', ['except' => ['index', 'show']]); }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::latest('updated_at')->get();
        
        return view('posts.index', compact('posts')); 
    }

     /**
     * Display a listing of the auth resource.
     *
     * @return Response
     */
      public function postsAuth()
    {
        $posts = Post::latest('updated_at')->where('user_id', '=', Auth::user()->id)->get();
        return view('posts.postsAuth', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $tags = Tag::lists('name', 'id');
        return view('posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PostRequest  $request
     * @return Response
     */
    public function store(PostRequest $request)
    {
        $post = Auth::user()->posts()->create($request->all());
        $post->tags()->attach($request->input('tags'));

    //    $post = new Post($request->all());
    //    $post->user_id = Auth::user()->id;
    //    $post->save(compact('post')); 

    //    $post = new Post($request->all());
    //    Auth::user()->posts()->save($post);     

    //    Post::create($request->all());
    //    $post->user_id = Auth::user()->id; 

        flash()->overlay('Your post has been successfully created!', 'Good job');
        return redirect('posts/postsAuth'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  Post  $post
     * @return Response
     */
    public function show(Post $post)
    { 
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
        $tags = Tag::lists('name', 'id');
        return view('posts.edit', compact('post', 'tags')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Post  $post
     * @return Response
     */
    public function update(Post  $post, PostRequest $request)
    {
        $post->update($request->all());
        $post->tags()->sync($request->input('tags'));
        return redirect('posts/postsAuth');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post  $post
     * @return Response
     */
    public function destroy(Post  $post)
    {
        $post->delete();
        return redirect('posts/postsAuth');
    }

}
