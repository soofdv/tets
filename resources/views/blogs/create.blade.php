@extends('layouts.app')

@section('title')
    Create Post
@endsection

@section('content')
    <div class="container" style="width: 50%">
        <form action="{{route('blogs.store')}}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Blog post Title</label>
                <input id="title"  class="form-control" name="title" type="text" placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Content Blog</label>
                <input id="description" class="form-control" name="description" type="text" placeholder="Description">
            </div>

            <input class="btn btn-primary" type="submit" value="Create!">
        </form>
    </div>
@endsection
