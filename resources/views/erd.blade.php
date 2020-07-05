@extends('layouts.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">ERD Design</h6>
        </div>
        <div class="card-body">
        <div class="text-center">
            <img src="{{asset('/images/Blog-ERD.png')}}" title="Rancangan ERD" alt="gambar rancangan ERD pada laravel quiz 3"/>
        </div>
        <p>Entity Relationship Diagram Portal Website design is like a <a target="_blank" rel="nofollow" href="https://medium.com/">Medium</a>, website!</p>
        </div>
    </div>
@endsection