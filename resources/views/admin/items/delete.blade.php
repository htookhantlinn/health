@extends('admin-layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="container p-5">
        {{-- !-- Delete Warning Modal -->  --}}
        <form action="{{ route('items.destroy', $item->id) }}" method="post">
            <div class="modal-body">
                @csrf
                @method('DELETE')
                <h5 class="text-center">Are you sure you want to delete {{ $item->name }} ?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Yes, Delete item</button>
            </div>
        </form>

    </div>
</div>
@endsection
