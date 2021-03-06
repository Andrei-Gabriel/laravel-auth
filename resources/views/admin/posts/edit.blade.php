@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Modifica: {{$post->title}}</h2>

        <form action="{{route("posts.update", $post->id)}}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo" value="{{old("title") ? old("title") : $post->title}}">
                @error("title")
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Descrizione</label>
                <textarea rows="5" type="text" class="form-control @error("content") is-invalid @enderror" id="content" name="content" placeholder="Descrivi il post">{{old("content") ? old("title") : $post->content}}}</textarea>
                @error("content")
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group form-check">
                @php
                    $published = old("published") ? old("published") : $post->published;  
                @endphp
                <input type="checkbox" class="form-check-input @error("published") is-invalid @enderror" id="published" name="published" {{$published ? "checked" : ""}}>
                <label class="form-check-label" for="published">Pubblica</label>
                @error("published")
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection