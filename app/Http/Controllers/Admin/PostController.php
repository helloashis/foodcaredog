<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.create-post');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'      => 'required|min:3|max:150',
            'content'      => 'required',
            'category'    => 'required',
            'status'    => 'required',

        ]);
        $slug = strtolower($request->title);

        Post::create([
            'title'         => $request->title,
            'slug'          => str_replace(' ','-', $slug),
            'category'      => $request->category,
            'content'       => $request->content,
            'author'        => Auth::user()->name,
            'status'        => $request->status,
        ]);

        Toastr::success('Post Submit Successfully', 'Success', ["positionClass" => "toast-top-right","closeButton" => "true",
            "progressBar" => "true"]);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(2);

        return view('admin.manage-post', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug',$slug)->first();


        return view('admin.edit-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'title'      => 'required|min:3|max:150',
            'content'      => 'required',
            'category'    => 'required',
            'status'    => 'required',

        ]);
        $slug = strtolower($request->title);

        Post::find($request->id)->update([
            'title'         => $request->title,
            'slug'          => str_replace(' ','-', $slug),
            'category'      => $request->category,
            'content'       => $request->content,
            'status'        => $request->status,
            'updated_at' => Carbon::now(),
        ]);
        Toastr::success('Post updated Successfully', 'Success', ["positionClass" => "toast-top-right","closeButton" => "true",
        "progressBar" => "true"]);
        return Redirect()->route('manage.post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $posts = Post::findOrFail($id);

        $posts->delete();
        Toastr::success('Post Deleted Successfully', 'Success', ["positionClass" => "toast-top-right","closeButton" => "true",
        "progressBar" => "true"]);
        return Redirect()->back();
    }
}
