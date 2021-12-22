@extends('admin-layouts.master')

@section('content')
<div class="content-wrapper ">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-3">
                <a href="{{route('doctors.index')}}" class="btn btn-outline-secondary mt-3 ml-3 w-25 float-right ">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-md-6 p-5 shadow mt-2 mb-2">
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <img class="img-circle elevation-2" src="{{ URL::to('/') }}/img/doctors/{{$doctor->image}}" alt="doctor image" style="height: 300px;">
                </div>

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$doctor->name}}" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">Field</label>
                    <input type="text" name="field" class="form-control" value="{{$doctor->field->name}}" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" name="phone" class="form-control" value="{{$doctor->phone}}" disabled>
                </div>



            </div>
            <div class="col-md-3">
                <a href="{{route('doctors.edit',[$doctor->id])}}" class="btn btn-outline-warning mt-3 ml-3 w-25 float-left ">
                    <i class="fas fa-edit    "></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
