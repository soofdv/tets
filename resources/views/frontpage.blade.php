@extends('layouts.app')

@section('content')
    <div class="container">
        @if (!Auth::guest())
            <h1>Welcome User!</h1>
        @else
            <h1>Welcome Guest!</h1>
        @endif
        <div class="block">
            <h1>tets</h1>
            <p>hier komt een foreach te staan met x aantal blog posts van random gebruikers.</p>
        </div>
        <div class="blogs">
            <div class="blog">
                @foreach($blogs as $blog)
                    <a href="{{route('blogs.show', $blog->id)}}">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$blog->title}}</h5>
                                <p class="card-text">{{$blog->description}}</p>
                                <a href="#" class="card-link">{{$blog->author_id}}</a>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
