@extends('admin-layouts.master')

@section('content')
<div class="content-wrapper">
    <form action="{{route('doctors.search')}}" method="post" autocomplete="off">
        @csrf
        <div class="row p-4">
            <div class="col-md-8 ">
                <select name="field" id="field" class="form-control">
                    @foreach ($fields as $x)
                    @if ($selectedFieldId == $x->id)
                    <option value="{{$x->id}}" selected>{{$x->name}}</option>
                    @else
                    <option value="{{$x->id}}">{{$x->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <input type="submit" value="Search" class="btn btn-outline-success w-50">
            </div>
        </div>
    </form>

    <div class="container ">
        <div class="row p-3">


            @forelse ($doctors as $doctor)
            <div class="col-md-4">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user shadow">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header text-white" style="background-color: rgb(53, 58, 63)">
                        <h3 class="widget-user-username">{{$doctor->name}}</h3>
                        <h5 class="widget-user-desc">{{$doctor->field->name}}</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="{{ URL::to('/') }}/img/doctors/{{$doctor->image}}" alt="doctor image" style=" height:100px;">

                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <a href=" {{route('doctors.show',[$doctor->id])}} " class=" btn btn-outline-info">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <a href="{{route('doctors.edit',[$doctor->id])}}" class=" btn btn-outline-warning">
                                        <i class="fas fa-edit "></i>
                                    </a>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <form method="POST" action="{{route('doctors.destroy',[$doctor->id])}}">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-outline-danger " onclick=" return confirm('Are you sure to delete?') ">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>
            @empty
            <h1>No Records</h1>
            @endforelse
        </div>

    </div>
</div>
@endsection
