@extends('layout')
<?php include('php/functions.php') ?>
@section('page-title')
Projects
@stop

@section('scripts')
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery.royalslider.min.js"></script>
<script src="js/behaviors.js"></script>
@stop

@section('content')
<h1>Projects</h1>
<hr>
<ul class="royalSlider rsDefault">
    @foreach($projects as $project)
    <li class="project-wrapper" id="{{$project->id}}"
        data-project-start="{{$project->start}}"
        data-project-end="{{$project->end}}"
        data-rsDelay="3000">

        <div class="image-panel panel">
            <div class="project-title">
                {{ $project->name}}
            </div>
            <div class="project-image-wrapper">
                <img src="{{$project->picURL}}">
            </div>
        </div>
        <div class="description-panel panel">
            <div class="row"><span>Type:</span>{{$project->type}}</div>
            <div class="row"><span>Tech Stack:</span>{{$project->tech}}</div>
            <div class="row"><span>Started:</span>{{$project->start}}</div>
            <div class="row"><span>Completed:</span>{{$project->end}}</div>
            <div class="row"><span>Description:</span>{{$project->description}}</div>
        </div>
    </li>
    @endforeach
</ul>
<hr>
@stop

@section('specialFeatures')
<h1>Timeline of Projects</h1>
<div id="timelineDate"></div>
<div class="timeline-wrapper">
    <?= createTimeLine(); ?>
</div>
@stop