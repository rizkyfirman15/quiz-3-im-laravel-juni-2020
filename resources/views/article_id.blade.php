@extends('layouts.master')

@section('title', 'Article | Detail Article')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Details</h6>
    </div>
    <div class="card-body">
      <h2 class="small font-weight-bold">Title      : {{$article->judul}} <span class="float-right"></span></h2>
      <div>
        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <h2 class="small font-weight-bold">Slug    : {{$article->slug}} <span class="float-right"></span></h2>
      <div>
        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <h2 class="small font-weight-bold">Content    : {{$article->isi}} <span class="float-right"></span></h2>
    </div>
  </div>
    <?php 
    // untuk merubah tag menjadi array
        $tag = preg_replace('/#/', "",$article->tag);
        $button=explode(' ',$tag);
    ?>
    <div>
    {{-- untuk menampilkan array tag sebagai button --}}
        @foreach ($button as $value)
            <a href="" class="btn btn-sm btn-success mt-1"><i class="fas fa-tag"></i>&nbsp;&nbsp;{{$value}}</a>
        @endforeach
    </div>
@endsection