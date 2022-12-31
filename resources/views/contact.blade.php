@extends('layouts.app')

@section('title', 'Data Contact')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('message'))
                    <div class="alert alert-success">
                        <strong>SUCCESS</strong>
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form action="/admin/contact/{{ $contact->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Company Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Input Name Company"
                            value="{{ $contact->name }}">
                    </div>
                    @error('name')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"
                            placeholder="Input Description">{{ $contact->description }}</textarea>
                    </div>
                    @error('description')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Input Address"
                            value="{{ $contact->address }}">
                    </div>
                    @error('address')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Input Email"
                            value="{{ $contact->email }}">
                    </div>
                    @error('email')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Input Phone"
                            value="{{ $contact->phone }}">
                    </div>
                    @error('phone')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Map Embed</label>
                        <textarea name="map_embed" id="" cols="30" rows="10" class="form-control"
                            placeholder="Input Map">{{ $contact->map_embed }}</textarea>
                    </div>
                    @error('map_embed')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $contact->logo }}" alt="" class="img-fluid">
                    <div class="form-group">
                        <label for="">Logo</label>
                        <input type="file" class="form-control" name="logo">
                    </div>
                    @error('image')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
