@extends('layouts.app')
@section('content')
    <div class="container">
        <a href={{ url('create_post') }} class="btn btn-primary">add new post</a>
        <div class="row">

            <div class="row col-12">

                <h1 class="p-3 boarder text-center my-3">all posts</h1>
            </div>
            @if (session('success'))
                <div class="alert alert-danger">{{ session('success') }}</div>
            @endif
            @if (session('update'))
                <div class="alert alert-success">{{ session('update') }}</div>
            @endif
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered w-50">
                    <thead>
                        <th>#</th>
                        <th>tittle</th>
                        <th>description</th>
                        <th>user</th>
                        <th>edit</th>
                        <th>delete</th>
                    </thead>
                    
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->user->name}}</td>
                                <td>
                                    <a href={{ url('edit_post/'.$post->id)}} class="btn btn-info">edit</a>
                                </td>
                                <td>

                                    <form action={{ url('delete_post/'.$post->id)}} method="post">
                                        @method('delete')
                                        @csrf
                                        
                                        <input type="submit" value="delete" class="btn btn-danger">
                                    </form>
                                </td>


                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div>
            {{$posts->links()}}
        </div>
    </div>
@endsection
