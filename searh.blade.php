<!-- resources/views/search/results.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Hasil Pencarian</h2>
    @if($results->isEmpty())
        <p>Tidak ada hasil yang ditemukan.</p>
    @else
        <ul>
            @foreach($results as $product)
                <li>{{ $product->name }} - Harga: Rp {{ $product->price }}</li>
            @endforeach
        </ul>
    @endif
@endsection
