@extends('layouts.app')

@section('content')
<form action="{{route('admin.project.update', $project)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="contenitore-input input-group mb-3">
        <label class="input-group-text" for="title" >Title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{$project->title}}">
    </div>

    <div class="contenitore-input input-group mb-3">
        <label class="input-group-text" for="description" >Content</label>
        <textarea class="form-control"  name="content" id="content">{{$project->content}}</textarea>
    </div>

    <div class="container-input input-group mb-3">
        <label class="input-group-text" for="price" >Link</label>
        <input class="form-control" type="text" name="link" id="link" value="{{$project->link}}">
    </div>
    <a  href="{{route('admin.project.index')}}">Back</a>


    <button class="btn btn-success">Modifica</button>
</form>
{{-- <form action="{{ route('admin.project.destroy', $project) }}" method="POST">
    @method('DELETE')
    @csrf
    <button>Elimina</button>
</form> --}}
@endsection