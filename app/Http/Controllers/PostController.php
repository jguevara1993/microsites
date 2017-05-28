<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Categories;
use App\Tag;
use App\User;
use Theme;
use Auth;

class PostController extends Controller
{


  //public function __construct()
  //{
    //$this->middleware('admin');
  //}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $category = Categories::all();
        $tags = Tag::all();
        $post = Post::paginate(5);

        return view('dashboard.admin.blog.blog', compact('post', 'category', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $category = Categories::all();
        $tags = Tag::all();
        return view('dashboard.admin.blog.create', compact('category', 'tags', 'category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $post = new Post;
        $post->user_id = Auth::id();
        $post->PostTitle = $request->PostTitle;
        $post->post = $request->post;
        $post->slug = $request->slug;
        $post->status = '1';
        $image = $request->file('postImage')->store('post_images');
        $post->post_image = $image;
        $post->save();
        $post->categories()->attach($request->categories);

        $tags = new Tag;
         foreach ($request->tags as $tags) {
           $tag = Tag::create(['tag'=>$tags]);
           if($tag->save()){
             $post->tags()->attach($tag->id);
           }

         }

        return redirect('posts')->with('messageSuccess', '¡Tu entrada se ha creado Exitosamente!');


}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $footer_1 = DB::table('blocks')->where('page', 'footer_1')->get();
      $footer_2 = DB::table('blocks')->where('page', 'footer_2')->get();
      $footer_3 = DB::table('blocks')->where('page', 'footer_3')->get();
      $footer_4 = DB::table('blocks')->where('page', 'footer_4')->get();

      $face = DB::table('options')->where('name', 'facebook')->get();
      $twit = DB::table('options')->where('name', 'twitter')->get();
      $link = DB::table('options')->where('name', 'linkedin')->get();
      $inst = DB::table('options')->where('name', 'instagram')->get();

      $post = Post::find($id);

      return Theme::view('show', compact('post', 'footer_1', 'footer_2', 'footer_3', 'footer_4', 'face', 'twit', 'inst', 'link'));
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
        $category = Categories::all();
        $tags = Tag::all('tag');

        return view('dashboard.admin.blog.edit', ['post' => $post, 'categories' => $category, 'tags'=>$tags]);
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

      $post = Post::findOrFail($id);
     $post->user_id = Auth::id();
     $post->PostTitle = $request->PostTitle;
     $post->post = $request->post;

     if($request->file('postImage')){
     $image = $request->file('postImage')->store('post_images');
     $post->post_image = $image;
     $post->categories()->sync($request->categories);
     $tags = new Tag;
     $post->tags()->detach($tags->id);
      foreach ($request->tags as $tags) {
        $tag = Tag::create(['tag'=>$tags]);
        if($tag->save()){
          $post->tags()->attach($tag->id);
        }
      }
      $post->save();
    }else{
      $post->categories()->sync($request->categories);
      $tags = new Tag;
      $post->tags()->detach($tags->id);
       foreach ($request->tags as $tags) {
         $tag = Tag::create(['tag'=>$tags]);
         if($tag->save()){
           $post->tags()->attach($tag->id);
             $post->save();
         }
       }

    }

        return redirect('posts')->with('messageEdit','¡Tu entrada ' . $post->slug . ' se edito exitosamente!');

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
        $post->delete();
        return redirect('posts')->with('messageDelete', 'la entrada ' . $post->slug . ' Se ha borrado exitosamente.');
    }

}
