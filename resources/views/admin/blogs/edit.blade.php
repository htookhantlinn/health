@extends('admin-layouts.master')
@section('content')
<div class="content-wrapper">
    @extends('admin-layouts.master')

    @section('content')
    <div class="content-wrapper">
        <div class="container p-5">

            <div class="col-md-10">
                <div class="card">
                    <form action="{{route('blogs.update',[$blog->id])}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">
                            <table class="table table-striped table-responsive article-table">
                                <tbody>
                                    <tr>
                                        <td class="head">Content:</td>
                                        <td>
                                            <textarea name="description" class="form-control" rows="5">
                                            {!! $blog->description !!}
                                              </textarea>
                                            @error('description')
                                            <span class="text-danger">{{$message}}</span>

                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="head">Date:</td>
                                        <td>{{date('d-M-Y', strtotime($blog->created_at));}}</td>
                                    </tr>

                                    <tr>
                                        <td class="head">Title:</td>
                                        <td>
                                            <input type="text" value="{{$blog->title}}" name="title" class="form-control">
                                            @error('title')
                                            <span class="text-danger">{{$message}}</span>

                                            @enderror
                                        </td>

                                    </tr>

                                    <tr class="text-center">
                                        <td colspan="2">
                                            <input type="submit" value="Update" class="btn btn-outline-success ">
                                        </td>

                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

</div>
@endsection
