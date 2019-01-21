@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">

            Create a new Post

    </div>

    <div class="card-body">

        <form method="POST" action="{{ route('category.update',['id'=>$category->id]) }}">

            @csrf
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $category->name }}">
            </div>

           <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Update Category</button>
                </div>
            </div>

        </form>

    </div>

</div>

@endsection