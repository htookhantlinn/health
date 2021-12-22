<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use DataTables;


class TestController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<button type="button" name="edit" id="' . $data->id . '" class=" edit btn btn-primary btn-sm">Edit</button>';
                    $btn .= ' &nbsp;&nbsp;&nbsp;&nbsp; <button type="button" name="delete" id="' . $data->id . '" class=" delete btn btn-danger btn-sm">Delete</button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('user');
    }
}
