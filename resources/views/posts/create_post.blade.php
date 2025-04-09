@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row col-12">
            <h1 class="p-3 boarder text-center my-3">add new post</h1>
        </div>
        <div class=" col-8 mx-auto">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form action="store_post" method="Post" class="form border p-3">
                @csrf
                <div class="row col-12 my-3">
                    <label for="title">title</label>
                    <input type="text" name="title">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row col-12 my-3">
                    <label for="description">description</label>
                    <input type="text" name="description">
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row col-12 my-3">
                    <label for="user">writer</label>
                    <select name="user_id">
                        <option value="1">reem</option>
                        <option value="2">mohamed</option>
                    </select>
                    @error('user_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row col-12 my-3">
                    <input class="btn btn-primary bg-success" type="submit" value="create post">
                </div>

            </form>

        </div>

    </div>
@endsection
