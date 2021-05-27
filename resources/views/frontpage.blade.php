@extends('layouts.app')

@section('title')
    Tets Business
@endsection

@section('content')
    <div class="container">
        @if (!Auth::guest())
            <h2>Welcome {{ Auth::user()->name }}!</h2>
        @else
            <h1>Welcome Guest!</h1>
        @endif
        <div class="block">

            <p>hier komt een foreach te staan met x aantal blog posts van random gebruikers.</p>
        </div>
        <div class="blogs">
            @foreach($blogs as $blog)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$blog->title}}</h5>
                        <p class="card-text">{{$blog->description}}</p>
                        <P>
                            Geschreven door:
                            <a href="{{route('users.show', $blog->author_id)}}"
                               class="card-link">{{ $blog->author->name }}</a>
                        </P>

                        <a href="{{route('blogs.show', $blog->id)}}" class="btn btn-primary">Zie Post</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
