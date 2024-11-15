@extends('main_template')

@section('title')
    Add Product
@endsection

@section('main_content')
    <div class='container'>
        <h2>Add product</h2>
        @if($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/add/check">
            @csrf
            <input type="text" name="name" id="name" class="form-control" placeholder="name"><br>
            <input type="number" name="price" id="price" class="form-control" placeholder="price"><br>
            <textarea name="description" id="description" class="form-control" placeholder="description"></textarea><br>
            <button type="submit" class="btn btn-success">Ok</button>
        </form>
    </div>
@endsection