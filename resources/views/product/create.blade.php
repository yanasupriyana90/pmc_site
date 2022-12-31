@extends('layouts.app')

@section('title', 'Data Product')

@section('content')

    <div class="container">
        <a href="/products" class="btn btn-primary mb-3">Back</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Input Title">
                    </div>
                    @error('title')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Subtitle</label>
                        <input type="text" class="form-control" name="subtitle" placeholder="Input Subtitle">
                    </div>
                    @error('subtitle')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Description 1</label>
                        <textarea name="description_1" id="" cols="30" rows="5" class="form-control"
                            placeholder="Input Description 1"></textarea>
                    </div>
                    @error('description_1')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Description 2</label>
                        <textarea name="description_2" id="" cols="30" rows="5" class="form-control"
                            placeholder="Input Description 2"></textarea>
                    </div>
                    @error('description_2')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Primacy 1</label>
                        <input type="text" class="form-control" name="primacy_1" placeholder="Input Primacy 1">
                    </div>
                    @error('primacy_1')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Primacy 2</label>
                        <input type="text" class="form-control" name="primacy_2" placeholder="Input Primacy 2">
                    </div>
                    @error('primacy_2')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Primacy 3</label>
                        <input type="text" class="form-control" name="primacy_3" placeholder="Input Primacy 3">
                    </div>
                    @error('primacy_3')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
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
