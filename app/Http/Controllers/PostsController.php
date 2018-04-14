<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;
use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $posts = Post::where('name','like', "%$keyword%")
                        ->orwhere('description', 'like', "%$keyword%")
                        ->paginate(5);

        return view('admin.posts.index', compact('posts', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavePostRequest $request)
    {
        
        $post = new Post();

        $post->name = $request->name;
        $post->slug = str_slug($request->name, '-');
        $post->category_id = $request->category_id;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().$file->getClientOriginalName();
            $file->storeAs('uploads/posts', $fileName);
            $post->image = 'uploads/posts/'.$fileName;
        }

        $post->status = $request->status;
        $post->description = $request->description;

        $post->save();
        $post->tags()->sync($request->tags, false);

        return redirect()->route('posts.index');
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
        $comments = $post->comments;
        $query = "SELECT p.id, 
                        p.name, 
                        t.id as tag_id, 
                        t.name as tag_name 
                from posts as p 
                    left join term_post_tag as tp on tp.post_id = p.id
                    left join tags as t on t.id = tp.tag_id 
                where p.id = $id";

        $p = DB::select(DB::raw($query));
        $post->tags = $p;

        return response()->json($post);
        // return response()->json([$post, $comments]);
        return view('admin.posts.show', compact('post', 'comments'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();

        $post = Post::find($id);
        return view('admin.posts.edit', compact('post', 'categories'));
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
        $post = Post::find($id);

        $post->name = $request->name;
        $post->slug = $request->slug;
        $post->image = $request->image;
        $post->description = $request->description;
        $post->status = $request->status;
        $post->category_id = $request->category_id;

        $post->save();

        return redirect()->route('posts.index');
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

        return redirect()->route('posts.index');
    }
}
