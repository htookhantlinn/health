<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\Field;
use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        $latestBlogs = Blog::latest()->paginate(3);
        $doctors = Doctor::latest()->get();
        $fields = Field::all();
        return view('health.index')->with(['doctors' => $doctors, 'latestBlogs' => $latestBlogs, 'fields' => $fields]);
    }
    public function blogDetail($id)
    {
        $categories = Category::latest()->paginate(5);
        $latestBlogs = Blog::latest()->paginate(3);
        $blog = Blog::find($id);
        return view('health.blog-details', ['blog' => $blog, 'categories' => $categories, 'latestBlogs' => $latestBlogs]);
    }

    public function blogIndex()
    {
        $blogs = Blog::latest()->paginate(6);
        $categories = Category::latest()->paginate(5);
        $latestBlogs = Blog::latest()->paginate(3);
        return view('health.blogs', ['blogs' => $blogs,  'categories' => $categories, 'latestBlogs' => $latestBlogs]);
    }

    public function doctorIndex()
    {
        $doctors = Doctor::latest()->paginate(6);
        return view('health.doctors', ['doctors' => $doctors]);
    }

    public function about()
    {
        $doctors = Doctor::latest()->paginate(3);
        return view('health.about', ['doctors' => $doctors]);
    }

    public function contact()
    {
        return view('health.contact');
    }

    public function itemIndex()
    {
        $items = Item::All();
        return view('items.index', ['items' => $items]);
    }

    public function blogsByCategory($id)
    {
        $blogs = Blog::where('category_id', '=', $id)->paginate(6);

        $categories = Category::latest()->paginate(5);
        $latestBlogs = Blog::latest()->paginate(3);
        return view('health.blogs', ['blogs' => $blogs,  'categories' => $categories, 'latestBlogs' => $latestBlogs]);
    }
}
