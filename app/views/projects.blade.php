@extends('layout')

@section('page-title')
    Projects
@stop

@section('headline')
    Projects Headline
@stop

@section('content')
    @foreach($projects as $project)
        <p>{{ $project->name}}</p>
    @endforeach
@stop