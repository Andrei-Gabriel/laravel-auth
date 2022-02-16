@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Nuovo post</h2>

        <form action="{{route("posts.store")}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
            </div>
            <div class="form-group">
                <label for="content">Descrizione</label>
                <textarea rows="5" type="text" class="form-control" id="content" name="content" placeholder="Descrivi il post"></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="published" name="published">
                <label class="form-check-label" for="published">Pubblica</label>
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
@endsection