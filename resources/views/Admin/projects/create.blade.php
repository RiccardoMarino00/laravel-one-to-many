@extends('layouts.app')

@section('content')
    <div>
        <p>Rotta create</p>
        <form action="{{route('admin.project.store')}}" method="POST">
            @csrf
            <div class="contenitore-input">
                <label for="title" >Title</label>
                <input type="text" name="title" id="title" placeholder="Inserisci un titolo...">
            </div>

            <div class="contenitore-input">
                <label for="content" >Content</label>
                <textarea  name="content" id="content" placeholder="Inserisci una descrizione..."></textarea>
            </div>

            <div class="container-input">
                <label for="link" >Link</label>
                <input type="text" name="link" id="link" placeholder="Inserisci un prezzo...">
            </div>
            
            <button>Crea</button>
        </form>
    </div>
@endsection