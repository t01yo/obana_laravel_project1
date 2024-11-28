@extends('layouts.app')

@section('content')

@if(Session::has('success'))
    <div class="alert alert-success text-center">{{ Session::get('success') }}</div>
@endif

<div class="container py-5">
    <div class="animated fadeInRightBig">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary">Book Collection</h2>
            <a href="{{ url('/add-book-form') }}" class="btn btn-primary btn-lg">+ Add Book</a>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            @foreach($data as $d)
                <div class="col d-flex">
                    <div class="card shadow-sm" style="width: 100%;">
                        <img 
                            class="card-img-top" 
                            src="{{ asset('_uploads/' .$d->photo) }}" 
                            alt="{{ $d->title }}" 
                            style="height: 200px; object-fit: cover;"
                        >
                        <div class="card-body">
                            <h5 class="card-title text-truncate" title="{{ $d->title }}">{{ $d->title }}</h5>
                            <p class="card-text mb-3">
                                <strong>Country:</strong> {{ $d->country_id }}<br>
                                <strong>Stock:</strong> {{ $d->stock }}<br>
                                <strong>Price:</strong> ₱{{ number_format($d->amount, 2) }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <a 
                                    href="{{ url('/edit-book', $d->id) }}" 
                                    class="btn btn-sm btn-info" 
                                    onclick="return confirm('Update?')"
                                    title="Edit Book"
                                >
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <a 
                                    href="{{ url('/delete-book', $d->id) }}" 
                                    class="btn btn-sm btn-danger" 
                                    onclick="return confirm('Delete?')"
                                    title="Delete Book"
                                >
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
