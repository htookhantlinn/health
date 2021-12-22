@extends('admin-layouts.master')

@section('content')
<div class="content-wrapper p-5 ">

    <div class="container">
        <div class="row ">
            <div class="col-md-1"></div>
            <div class="col-md-10 p-5 mt-5 shadow">
                <form method="POST" action="{{route('blogs.store')}}" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Name">
                        @error('title')
                        <span class=" text-danger"> {{$message}} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($categories as $x)
                            <option value="{{$x->id}}"> {{$x->name}} </option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <span class=" text-danger"> {{$message}} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="hidden" id='description' name="description" class="form-control">
                        <div id="editor" name='editor' style="height: 300px;">

                        </div>
                        @error('description')
                        <span class=" text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                        @error('image')
                        <span class=" text-danger"> {{$message}} </span>
                        @enderror
                    </div>


                    <div class="mb-3 d-flex justify-content-center align-items-center ">
                        <button type="submit" class="btn btn-outline-primary">SAVE</button>
                    </div>

                </form>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>
@endsection
