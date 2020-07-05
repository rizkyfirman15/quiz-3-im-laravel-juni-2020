@extends('layouts.master')

@section('title', 'Article | Article Page')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Articles Page</h1>
    <p class="mb-4">Here is the article data!</a>.</p>

    <a href="/artikel/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>&nbsp;&nbsp;New Article</a>

    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Articles Data</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Option</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($article as $article)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{$article->judul}}</td>
                  <td>
                    <a href="/artikel/{{$article->id}}" class="btn btn-sm btn-info btn-sm"><i class="fas fa-eye"></i>&nbsp;&nbsp;View</a>
                    <a href="/artikel/{{$article->id}}/edit" class="btn btn-sm btn-warning btn-sm"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Update</a>
                    <form action="/artikel/{{$article->id}}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger btn-sm"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
  </div>

    <div class="mt-5 text-danger">
        <p>Warning: Table article is the foreign key of the user table, in order to run at least there must be data in the user table!</p>
    </div>
@endsection

@push('scripts')
  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush