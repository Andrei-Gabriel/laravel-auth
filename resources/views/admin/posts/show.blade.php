@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header">{{$post->title}}</h3>

                    <div class="card-body">
                        <div class="mb-2">
                            @if ($post->published)
                                <span class="badge badge-success py-1 px-2">Published</span>
                            @else
                                <span class="badge badge-warning py-1 px-2">Draft</span>
                            @endif
                        </div>
                        {{$post->content}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection