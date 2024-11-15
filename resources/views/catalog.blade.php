@extends('main_template')

@section('title')
    Catalog
@endsection

@section('main_content')

<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    @foreach($products as $card)
        <x-card 
            :name="$card['name']" 
            :price="$card['price']" 
            :description="$card['description']" 
        />
    @endforeach
</div>

@endsection