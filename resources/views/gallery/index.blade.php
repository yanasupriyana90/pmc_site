@extends('layouts.app')

@section('title', 'Data Gallery')

@section('content')

    <div class="container">
        <a href="/admin/gallerys/create" class="btn btn-primary mb-3">Add Data</a>

        @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>SUCCESS</strong>
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp

                    @foreach ($gallerys as $gallery)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $gallery->category }}</td>
                            <td>
                                <img src="/image/{{ $gallery->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>
                                <a href="{{ route('gallerys.edit', $gallery->id) }}" class="btn btn-warning">Edit</a>

                                <form action="{{ route('gallerys.destroy', $gallery->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>

@endsection
