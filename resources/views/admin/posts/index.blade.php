@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-3">
        <a href="{{route("posts.create")}}"><button type="button" class="btn btn-success">Aggiungi un post</button></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
                {{-- Altrimenti i bordi fanno schifo --}}
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td>
                        <a href="{{route("posts.show", $post->id)}}"><button type="button" class="btn btn-primary">Più info</button></a>
                    </td>
                    <td>
                        <a href="{{"posts.update", $post->id}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                    </td>
                    <td>
                        <a href="{{"posts.destroy", $post->id}}"><button type="button" class="btn btn-danger">Elimina</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection