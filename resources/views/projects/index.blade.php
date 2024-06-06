@extends('layouts.app')

@section('content')

<section>

    <div class="container">
        <a href="{{route('admin.project.create')}}">Create new project</a>
    </div>

    @foreach ($projects as $project)
        <div class="m-2 border p-2 d-flex">
            <div class="col-6">
                <p>{{$project->title}}</p>
                <p>{{$project->slug}}</p>
                <p>{{$project->content}}</p>
                {{-- @dump($project->type) --}}
                <p>{{$project->type ? $project->type->name : 'Nessun tipo'}}</p>
                <a href="{{$project->link}}">{{$project->link}}</a>
            </div>
            <div class="col-6 right-align"> 
                 <a href="{{route('admin.project.edit', $project)}}">Edit</a>
                 <a href="{{route('admin.project.destroy', $project)}}">Delete</a>
            </div>
        </div>
    @endforeach
</section>

@endsection