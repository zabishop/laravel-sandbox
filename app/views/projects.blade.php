@extends('layout')

@section('page-title')
Projects
@stop


@section('content')
@foreach($projects as $project)
<div class="project-panel-wrapper">
    <div class="project-panel">
        <div class="project-title">
            {{ $project->name}}
        </div>
        <div class="project-panel-content">
            <img src="{{$project->picURL}}">
            <div class="project-description">
                <div class="row">{{$project->type}}</div>
                <div class="row">{{$project->tech}}</div>
                <div class="row">{{$project->start}}</div>
                <div class="row">{{$project->end}}</div>
                <div class="row">{{$project->description}}</div>
            </div>
        </div>
    </div>
</div>
@endforeach
@stop