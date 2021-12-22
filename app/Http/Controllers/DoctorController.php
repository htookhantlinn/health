<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Field;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $doctors = Doctor::latest()->paginate(6);
        return view('admin.doctors.index', [
            'doctors' => $doctors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = Field::all();
        return view('admin.doctors.create', ['fields' => $fields]);
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
        $request->validate([
            'name' => 'required',
            'field' => 'required',
            'phone' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.required' => 'Please Fill Name Field ',
            'field.required' => 'Please Fill Field Field ',
            'phone.required' => 'Please Fill Phone Field ',
            'image.required' => 'Please Fill Image Field ',
        ]);
        $imageName = time() . '.' . $request->image->extension();

        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->field_id = $request->field;
        $doctor->image = $imageName;
        $request->image->move(public_path('img/doctors'), $imageName);

        $doctor->save();
        // $request->image->storeAs('images', $imageName);

        return redirect()->route('doctors.index')->with('create-info', 'Successfully Added Doctor.');
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
        $doctor = Doctor::find($id);
        return view('admin.doctors.details', ['doctor' => $doctor]);
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
        $fields = Field::all();
        $doctor = Doctor::find($id);
        return view('admin.doctors.edit', ['doctor' => $doctor, 'fields' => $fields]);
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
        $request->validate([
            'name' => 'required',
            'field' => 'required',
            'phone' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.required' => 'Please Fill Name Field ',
            'field.required' => 'Please Fill Field Field ',
            'phone.required' => 'Please Fill Phone Field ',
            // 'image.required' => 'Please Fill Image Field ',
        ]);

        if ($request->image == null) {
            $doctor = Doctor::find($id);
            $doctor->name = $request->name;
            $doctor->phone = $request->phone;
            $doctor->field_id = $request->field;
            $doctor->save();
            return redirect()->route('doctors.index')->with('update-info', 'Succesfully Updated');
        } else {
            $imageName = time() . '.' . $request->image->extension();

            $doctor = Doctor::find($id);
            $doctor->name = $request->name;
            $doctor->phone = $request->phone;
            $doctor->field_id = $request->field;
            $doctor->image = $imageName;
            $request->image->move(public_path('img/doctors'), $imageName);
            $doctor->save();
            return redirect()->route('doctors.index')->with('update-info', 'Succesfully Updated');;
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
        //
        Doctor::find($id)->delete();

        return back()->with('delete-info', 'Successfully Deleted.');
    }
}
