@extends('layouts.app')

@section('title')
    Edit {{$user->title}}
@endsection

@section('content')
    <div class="container" style="width: 50%">
        <form action="{{route('users.update', $user->id)}}" method="post">
            @method('put')
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input id="name" class="form-control" name="name" type="text" value="{{$user->name}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input id="email" class="form-control" name="email" type="text" value="{{$user->email}}">
            </div>

            {{--<div class="mb-3">--}}
            {{--<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>--}}

            {{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"--}}
            {{--name="password" required autocomplete="new-password">--}}

            {{--</div>--}}

            {{--<div class="mb-3">--}}
            {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>--}}

            {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required--}}
            {{--autocomplete="new-password">--}}

            {{--</div>--}}
            <input class="btn btn-primary" type="submit" value="update!">
        </form>

        <form action="{{route('users.destroy', $user->id)}}" method="post">
            @method('delete')
            @csrf
            <input class="btn btn-danger" type="submit" value="Delete!">
        </form>
    </div>
@endsection
