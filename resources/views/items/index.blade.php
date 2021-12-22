@extends('layouts.master')
@section('content')

<div class="container mt-3">
    <div class="row">
        @forelse ($items as $item)
        <div class="col-md-4 mb-3">
            <div @if ($item['quantity'] < 200 ) class="card bg-warning" @else class="card bg-info" @endif>
                <div class="card-header">
                    {{$item['name']}}
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{$item['brand']}}</h4>
                    <p class="card-text">{{$item['code']}}</p>
                    <p class="card-text">{{$item['quantity']}}</p>
                </div>
                <div class="card-footer text-muted">
                    Footer
                </div>
            </div>
        </div>
        @empty
        @php
        echo'empty';
        @endphp
        @endforelse

    </div>
</div>

@push('scripts')

<script>
    $(document).ready(function() {
        console.log('this is htoo khant linn');

    });

</script>
@endpush


@endsection
