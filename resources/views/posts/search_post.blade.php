@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row col-12">
            <h1 class="p-3 boarder text-center my-3">all posts</h1>
        </div>
       

            @foreach ($posts as $post)
            
                <div class="row col-12">
                    <div class="card">
                        <div class="card-header">
                            {{ $post->created_at }}
                        </div>
                        <div class="card-header">
                            created by:{{ $post->user->name }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ \Str::limit($post->description, 50) }}.....</p>
                            <a href={{ url('single_post/' . $post->id) }} class="btn btn-primary">view post</a>
                        </div>
                    </div>
                </div>
        
        @endforeach


    </div>
@endsection
