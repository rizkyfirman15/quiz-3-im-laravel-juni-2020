@extends('layouts.master')

@section('title', 'Article | Update Article')
@section('content')
    <form action="/artikel/{{$article->id}}" class="text-primary" method="post">
        @csrf
        @method('put')
        <h3><b>Update a New Article</b></h3>
        <div class="form-group">
            <label for="judul">Title</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" id="judul" class="form-control" value="{{ $article->judul }}" name="judul" autocomplete="off" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="judul">Content</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" id="isi" class="form-control" value="{{ $article->isi }}" name="isi" autocomplete="off" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="tag">Tag</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" id="tag" class="form-control" value="{{ $article->tag }}" name="tag" autocomplete="off" required="required">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Send</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Cancel</button>
        </div>
    </form>
@endsection