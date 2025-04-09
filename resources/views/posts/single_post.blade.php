@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row col-12">
            <h1 class="p-3 boarder text-center my-3">all posts</h1>
        </div>
        
        <div class="row col-12">
            <div class="card">
                <div class="card-header">
                    {{$singlePost->created_at}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$singlePost->title}}</h5>
                    <p class="card-text">{{$singlePost->description}}</p>
                    <a href={{url('edit_post/'.$singlePost->id)}} class="btn btn-primary">edit post</a>
                </div>
            </div>
        </div>

    </div>
    

@endsection
    