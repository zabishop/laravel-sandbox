@extends('layout')

@section('title')
    Users
@stop

@section('content')

    @foreach($users as $user)
        <p>{{ $user->firstname }}</p>
    @endforeach

@stop