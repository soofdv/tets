@extends('layouts.app')

@section('title')
    {{$blog->title}}
@endsection

@section('content')
    <div class="container">
        <h1>Show pagina blogs</h1>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$blog->title}}</h5>
                <p class="card-text">{{$blog->description}}</p>
                <P>
                    Geschreven door:
                    <a href="{{route('users.show', $blog->author_id)}}" class="card-link">{{ $blog->author->name }}</a>
                </P>

                <a class="btn btn-primary" href="{{route('blogs.edit', $blog->id)}}">Gegevens beheren</a>
            </div>
        </div>

    </div>
@endsection
