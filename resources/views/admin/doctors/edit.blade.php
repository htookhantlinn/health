@extends('admin-layouts.master')

@section('content')
<div class="content-wrapper ">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6 p-5 mt-3 mb-3 shadow">

                <form method="POST" action="{{route('doctors.update',[$doctor->id])}}" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="mb-3 d-flex justify-content-center align-items-center">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image:url({{ URL::to('/') }}/img/doctors/{{$doctor->image}})">
                                </div>
                            </div>
                        </div>
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        {{-- <img class="img-circle elevation-2" src="{{ URL::to('/') }}/img/doctors/{{$doctor->image}}" alt="doctor image" style="height: 150px;"> --}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$doctor->name}}" placeholder="Enter Name">
                        @error('name')
                        <span class=" text-danger"> {{$message}} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Field</label>
                        <select class="form-control" name="field" id="field">
                            @foreach ($fields as $field)
                            @if ($field->id === $doctor->field_id)
                            <option value="{{$field->id}}" selected>{{$field->name}}</option>

                            @else
                            <option value="{{$field->id}}">{{$field->name}}</option>

                            @endif
                            @endforeach

                        </select>
                        @error('field')
                        <span class=" text-danger"> {{$message}} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" value="{{$doctor->phone}}" placeholder="123-45-678">
                        @error('phone')
                        <span class=" text-danger"> {{$message}} </span>
                        @enderror
                    </div>


                    <div class=" mb-3 d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-secondary ">Update</button>

                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
@endsection
