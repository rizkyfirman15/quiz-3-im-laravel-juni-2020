@extends('layouts.master')

@section('title', 'Article | New Article')
@section('content')
<h1 class="h3 mb-2 text-gray-800">Add Articles</h1>
<a href="{{ url('/artikel') }}" class="btn btn-secondary btn-sm float-right"><i class="fas fa-reply"></i> Back</a>
<p class="mb-4">Add New Article!</a>.</p>
    

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Articles</h6>
    </div>
    <div class="card-body">
    <div>
    <form action="/artikel" class="text-primary" method="post">
        @csrf
        <h3><b>Create a New Article</b></h3>
        <div class="form-group">
            <label for="judul">Title</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" id="judul" class="form-control" placeholder="Input Title" name="judul" autocomplete="off" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="judul">Content</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" id="isi" class="form-control" placeholder="Input Content" name="isi" autocomplete="off" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="tag">Tag</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" id="tag" class="form-control" placeholder="Input Tag" name="tag" autocomplete="off" required="required">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Send</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Cancel</button>
        </div>
    </form>

</div>
<p>Entity Relationship Diagram Portal Website design is like a <a target="_blank" rel="nofollow" href="https://medium.com/">Medium</a>, website!</p>
</div>
</div>
@endsection