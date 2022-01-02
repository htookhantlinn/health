<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DataTables;
use Validator;

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
                    $btn = ' &nbsp;&nbsp;&nbsp;&nbsp;<a  name="info" id="' . $data->id . '" class=" info btn btn-outline-info btn-sm">
                    <i class="fas fa-eye"></i></a>';
                    $btn .= '&nbsp;&nbsp;&nbsp;&nbsp;<a  name="edit" id="' . $data->id . '" class=" edit btn btn-outline-warning btn-sm">
                    <i class="fas fa-edit"></i></a>';
                    $btn .= ' &nbsp;&nbsp;&nbsp;&nbsp; <a  name="delete" id="' . $data->id . '" class=" delete btn btn-outline-danger btn-sm"><i class="fa fa-trash" ></i>
                    </a>';

                    return $btn;
                })->editColumn('created_at', function ($data) {
                    // $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d-M-Y');
                    return $data->created_at->diffForHumans();
                })->editColumn('category_id', function ($data) {
                    return  $data->category->name;
                })->editColumn('updated_at', function ($data) {
                    // $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->updated_at)->format('d-M-Y');
                    return $data->updated_at->diffForHumans();
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
        $rules = array(
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }
        $item = new Item();
        $item->name = $request->name;
        $item->description = $request->description;
        $item->quantity = 100;
        $item->category_id = $request->category;
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
        $item = Item::find($id);
        //
        return response()->json(['item' => $item, 'category' => $item->category->name, 'category_id' => $item->category->id]);
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
        return response()->json(['item' => 'hi',]);
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
        $rules = array(
            'edit_itemName' => 'required',
            'edit_description' => 'required',
            'edit_category' => 'required',
            'edit_quantity' => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }
        $item = Item::find($id);
        $item->name = $request->edit_itemName;
        $item->description = $request->edit_description;
        $item->quantity = $request->edit_quantity;
        $item->category_id = $request->edit_category;
        $item->save();
        return response()->json(['success' => 'Data Added Successfully.']);
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
