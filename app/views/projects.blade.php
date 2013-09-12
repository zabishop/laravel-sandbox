@extends('layout')

@section('headline')
Projects Headline
@stop

@section('content')
    @foreach($projects as $project)
        <p>{{ $project->name}}</p>
    @endforeach
@stop