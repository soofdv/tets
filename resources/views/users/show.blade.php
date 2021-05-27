@extends('layouts.app')

@section('title')
    Detail page
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="card">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    <h6 class="card-title">{{$user->name}}</h6>
                    <h5 class="card-text">{{$user->email}}</h5>
                    <a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary">Account wijzigen</a>
                </div>
            </div>
        </div>
    </div>
@endsection
