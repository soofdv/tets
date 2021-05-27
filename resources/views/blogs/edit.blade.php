@extends('layouts.app')

@section('title')
    Edit {{$blog->title}}
@endsection

@section('content')
    <div class="container" style="width: 50%">
        <form action="{{route('blogs.update', $blog->id)}}" method="post">
            @method('put')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Blog post Title</label>
                <input id="title"  class="form-control" name="title" type="text" value="{{$blog->title}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input id="description" class="form-control" name="description" type="text" value="{{$blog->description}}">
            </div>

            <div class="d-flex justify-content-between" style="width: 25%; margin-left:auto">
                <input class="btn btn-primary" type="submit" value="update!">

                <form action="{{route('blogs.destroy', $blog->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Delete!">
                </form>
            </div>
        </form>
    </div>
@endsection
