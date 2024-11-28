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

        <div class="book-collection">
            @foreach($data as $d)
                <div class="book-card">
                    <div class="card shadow-sm">
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
                                href="#" 
                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $d->id }}').submit();" 
                                class="btn btn-sm btn-danger" 
                                title="Delete Book"
                            >
                                <i class="fa fa-trash"></i> Delete
                            </a>

                            <form id="delete-form-{{ $d->id }}" action="{{ url('/delete-book/' . $d->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

<style>
    .book-collection {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* Four equal columns */
    gap: 1rem; /* Spacing between cards */
}

.book-card {
    display: flex;
    flex-direction: column;
}
</style>