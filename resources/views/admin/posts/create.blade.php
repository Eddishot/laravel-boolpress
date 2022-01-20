@extends('layouts.admin')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf

            <div class="text-start mt-5">
                <div class="mb-3">
                    <label for="field_name" class="form-label">Author</label>
                    <input type="text" class="form-control" name="name" id="field_title">
                </div>
    
                <div class="mb-3">
                    <label for="field_title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="field_title">
                </div>
                
                <div class="mb-3">
                    <label for="field_content" class="form-label">Text</label>
                    <input type="text" class="form-control" name="content" id="field_content">
                </div>
    
                
    
                <button class="btn btn-primary" type="submit">Add</button>
            </div>

        </form>
    </div>
@endsection
