@extends('layouts.app')

@section('title', 'Data Team')

@section('content')

    <div class="container">
        <a href="/teams/create" class="btn btn-primary mb-3">Add Data</a>

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

                    @foreach ($teams as $team)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $team->title }}</td>
                            <td>{{ $team->description }}</td>
                            <td>
                                <img src="/image/{{ $team->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>
                                <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-warning">Edit</a>

                                <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
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
