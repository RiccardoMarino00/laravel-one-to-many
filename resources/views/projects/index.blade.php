@extends('layouts.app')

@section('content')

<section>
    @foreach ($projects as $project)
        <div class="m-2 border p-2">
            <p>{{$project->title}}</p>
            <p>{{$project->slug}}</p>
            <p>{{$project->content}}</p>
            @dump($project->type)
            <p>{{$project->project ? $project->type->attributes['name'] : 'Nessun tipo'}}</p>
            <a href="{{$project->link}}">{{$project->link}}</a>
        </div>
    @endforeach
</section>

@endsection