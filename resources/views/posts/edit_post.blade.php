@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row col-12">
            <h1 class="p-3 boarder text-center my-3">edit post</h1>
        </div>
        <div class=" col-8 mx-auto">
           
                    <form action={{url('update_post/'.$post->id)}} method="Post" class="form border p-3">
                        @method('put')
                        @csrf

                        <div class="row col-12 my-3">
                            <label for="title">title</label>
                            <input type="text" name="title"value={{$post->title}}>
                        </div>
                        <div class="row col-12 my-3">
                            <label  for="description">description</label>
                        <input type="text" name="description"value={{$post->description}}>
                        </div>
                        <div class="row col-12 my-3">
                            <label  for="user">writer</label>
                        <select name="user_id" value={{$post->user_id}}>
                            <option value="1">reem</option>
                            <option value="2">mohamed</option>
                        </select>
                        </div>
                        <div class="row col-12 my-3">
                            <input class="btn btn-primary bg-success" type="submit" value="update post">
                        </div>
                        
                    </form>
                
        </div>

    </div>
@endsection
