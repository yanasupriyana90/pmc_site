@extends('layouts.app')

@section('title', 'Data Slider')

@section('content')

    <div class="container">
        <a href="/admin/sliders/create" class="btn btn-primary mb-3">Add Data</a>

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
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp

                    @foreach ($sliders as $slider)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->description }}</td>
                            <td>
                                <img src="/image/{{ $slider->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>
                                <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning">Edit</a>

                                <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
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
