<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::all();
        return view('admin.blogs.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.blogs.create', ['categories' => $categories]);
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
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'title.required' => "Please Fill Article's Title",
            'description.required' => "Please Fill Article's Description",
            'category_id.required' => "Please Fill Article's category",
            'image.required' => "Please Fill Article's Image",
        ]);
        //
        $imageName = time() . '.' . $request->image->extension();

        // echo $request->fileInput;
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;
        $blog->user_id = auth()->id();
        $blog->image = $imageName;


        $request->image->move(public_path('img/blog'), $imageName);
        $blog->save();

        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $blog = Blog::find($id);
        return view('admin.blogs.details', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        //
        if (Gate::allows('delete-blog', $blog)) {
            return view('admin.blogs.edit', ['blog' => $blog]);
        } else {
            Session::put('permission-error-info', 'Permission Denied!!!');
            return back();
        }
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
        //
        $blog = Blog::find($id);

        if (Gate::allows('delete-blog', $blog)) {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ], [
                'title.required' => 'Please Fill title Field ',
                'description.required' => 'Please Fill description Field ',
                // 'image.required' => 'Please Fill Image Field ',
            ]);

            $blog->title = $request->title;
            $blog->description = $request->description;

            $blog->save();
            $blogs = Blog::all();
            // Session::put('update-info', 'Record Updated successfully!');

            return redirect()->route('blogs.index')->with(['blogs' => $blogs, 'update-info' => 'Record Updated successfully!']);
        } else {
            Session::put('permission-error-info', 'Permission Denied!!!');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $user = Auth::user();
        $blog = Blog::find($id);
        // if ($blog->user->id === $user->id) {
        //     $blog->delete();
        //     Session::put('delete-info', 'Record deleted successfully!');
        //     return response()->json([
        //         'success' => 'Record deleted successfully!',
        //     ]);
        // } else {
        //     return response()->json([
        //         'error' => 'Error',
        //     ]);
        // }

        if (Gate::allows('delete-blog', $blog)) {
            $blog->delete();
            Session::put('delete-info', 'Record deleted successfully!');
            return response()->json([
                'success' => 'Record deleted successfully!',
            ]);
        } else {
            return response()->json([
                'error' => 'Error',
            ]);
        }
    }
}
