@extends('layouts.app')

@section('title', 'Data Product')

@section('content')

    <div class="container">
        <a href="/admin/products/create" class="btn btn-primary mb-3">Add Data</a>

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
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Description 1</th>
                        <th>Description 2</th>
                        <th>Primacy 1</th>
                        <th>Primacy 2</th>
                        <th>Primacy 3</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp

                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->subtitle }}</td>
                            <td>{{ $product->description_1 }}</td>
                            <td>{{ $product->description_2 }}</td>
                            <td>{{ $product->primacy_1 }}</td>
                            <td>{{ $product->primacy_2 }}</td>
                            <td>{{ $product->primacy_3 }}</td>
                            <td>
                                <img src="/image/materials/{{ $product->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>

                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
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
