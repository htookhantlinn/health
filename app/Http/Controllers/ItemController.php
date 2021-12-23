<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DataTables;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Item::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a  name="edit" id="' . $data->id . '" class=" edit btn btn-outline-warning btn-sm">
                    <i class="fas fa-edit"></i></a>';
                    $btn .= ' &nbsp;&nbsp;&nbsp;&nbsp; <a  name="delete" id="' . $data->id . '" class=" delete btn btn-outline-danger btn-sm"><i class="fa fa-trash" ></i>
                    </a>';
                    return $btn;
                })->editColumn('created_at', function ($data) {
                    $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d-M-Y');
                    return $formatedDate;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        $categories = Category::all();
        //
        return view('admin.items.index', ['categories' => $categories]);
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
        //
        $item = new Item();
        $item->name = $request->name;
        $item->description = $request->description;
        $item->quantity = 100;
        $item->category_id = 2;
        $item->save();
        return response()->json(['success' => 'Data Added Successfully.']);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = Item::findOrFail($id);
        $data->delete();
    }

    // public function delete($id)
    // {
    //     $item = Item::find($id);
    //     return view('admin.items.delete', compact('item'))->with('delete-info', 'Successfully Deleted.');
    // }
}
