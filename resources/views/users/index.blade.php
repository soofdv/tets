<?php
$session_id = Auth::user()->id;
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                        <a class="btn btn-primary" href="{{route('blogs.create')}}">Blog post aanmaken.</a>
                    </div>
                </div>

                <div class="blogs">
                    @foreach($blogs as $blog)

                    @if($blog->author_id === $session_id)
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$blog->title}}</h5>
                                    <p class="card-text">{{$blog->description}}</p>
                                    <P>
                                        Geschreven door:
                                        <a href="{{route('users.show', $blog->author_id)}}" class="card-link">{{ $blog->author->name }}</a>
                                    </P>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
