@extends('layouts.app')


@section('content')
<div class="m-2 border p-2">
    <p>{{$project->title}}</p>
    <p>{{$project->slug}}</p>
    <p>{{$project->content}}</p>
    {{-- @dump($project->type) --}}
    <p>{{$project->type ? $project->type->name : 'Nessun tipo'}}</p>
    <a href="{{$project->link}}">{{$project->link}}</a>
    <a href="{{route('admin.project.destroy', $project)}}">Delete</a>
</div>
@endsection
