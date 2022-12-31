@extends('layouts.app')

@section('title', 'Data Clients')

@section('content')

    <div class="container">
        <a href="/admin/clients/create" class="btn btn-primary mb-3">Add Data</a>

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

                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $client->title }}</td>
                            <td>{{ $client->description }}</td>
                            <td>
                                <img src="/image/{{ $client->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>
                                <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Edit</a>

                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
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
