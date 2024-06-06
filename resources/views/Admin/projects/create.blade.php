@extends('layouts.app')

@section('content')
    <div class="text-center">
        <p>Rotta create</p>
        <form action="{{route('admin.project.store')}}" method="POST">
            @csrf
            <div class="contenitore-input input-group mb-3">
                <label for="title" class="input-group-text" >Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci un titolo...">
            </div>

            <div class="contenitore-input input-group mb-3">
                <label for="content" class="input-group-text" >Content</label>
                <textarea  class="form-control " name="content" id="content" placeholder="Inserisci una descrizione..."></textarea>
            </div>

            <div class="container-input input-group mb-3">
                <label for="link" class="input-group-text" >Link</label>
                <input class="form-control" type="text" name="link" id="link" placeholder="Inserisci un prezzo...">
            </div>

            {{-- <div class="container-input input-group mb-3">
                <label for="slug" class="input-group-text" >slug momentaneo</label>
                <input class="form-control " type="text" name="slug" id="slug" placeholder="..." >
            </div> --}}
            
            <button class="btn btn-success" >Crea</button>
        </form>
    </div>
@endsection