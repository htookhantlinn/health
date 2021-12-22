@extends('admin-layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="container p-5 item-index-container">
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center align-items-center">
                        <i class="fa fa-times-circle-o fa-4x" style="color: red;"></i>

                    </div>
                    <div class="modal-body">
                        <h1 class="text-center">Are You Sure?</h1>
                        <p class="text-center ">Do you really want to delete this records? This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <div id="modal-btn-yes"></div>
                    </div>
                </div>
            </div>
        </div>

        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{date('d-M-Y', strtotime($item->created_at));}}</td>
                    <td>
                        <a href=" {{route('items.show',[$item->id])}} " class="btn btn-outline-warning  m-1">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-outline-info m-1">
                            <i class="fas fa-edit    "></i>
                        </a>
                        <a href="#" onclick="confirmItemDeleteModal({{$item->id}})" class="btn btn-outline-danger m-1">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @empty

                @endforelse

            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>


    </div>
</div>
@endsection
