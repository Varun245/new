@extends('layouts.app')

@section('content')

@if(count($errors)>0)

<ul class="list-group">
    @foreach($errors->all() as $error)

        <li class="list-group-item text-danger">
            {{ $error }}
        </li>

   @endforeach  
</ul>




@endif
<br>


<div class="card">

    <div class="card-header">

            Create a new Post

    </div>

    <div class="card-body">

        <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">

            @csrf
            
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)

                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                            
                        @endforeach
                    </select>
                   
                </div>

            <div class="form-group">
                <label for="title">Image</label>
                <input type="file" class="form-control" name="featured">
            </div>

            <div class="form-group">
                <label for="title">Content</label>
                <textarea name="content" id="" cols="5" rows="5" class="form-control"></textarea>
           </div>

           <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </div>

        </form>

    </div>

</div>
    
@endsection