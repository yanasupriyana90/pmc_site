@extends('layouts.app')

@section('title', 'Data Product 1')

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
                <form action="/admin/product_1/{{ $product_1->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">title</label>
                        <input type="text" class="form-control" name="title" placeholder="Input Title"
                            value="{{ $product_1->title }}">
                    </div>
                    @error('title')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Subtitle</label>
                        <textarea name="subtitle" id="" cols="30" rows="5" class="form-control"
                            placeholder="Input Subtitle">{{ $product_1->subtitle }}</textarea>
                    </div>
                    @error('subtitle')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Description 1</label>
                        <textarea name="description_1" id="" cols="30" rows="5" class="form-control"
                            placeholder="Input Description 1">{{ $product_1->description_1 }}</textarea>
                    </div>
                    @error('description_1')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Description 2</label>
                        <textarea name="description_2" id="" cols="30" rows="5" class="form-control"
                            placeholder="Input Description 2">{{ $product_1->description_2 }}</textarea>
                    </div>
                    @error('description_2')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Primacy 1</label>
                        <input type="text" class="form-control" name="primacy_1" placeholder="Input Primacy 1"
                            value="{{ $product_1->primacy_1 }}">
                    </div>
                    @error('primacy_1')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Primacy 2</label>
                        <input type="text" class="form-control" name="primacy_2" placeholder="Input Primacy 2"
                            value="{{ $product_1->primacy_2 }}">
                    </div>
                    @error('primacy_2')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Primacy 3</label>
                        <input type="text" class="form-control" name="primacy_3" placeholder="Input Primacy 3"
                            value="{{ $product_1->primacy_3 }}">
                    </div>
                    @error('primacy_3')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <img src="/image/materials{{ $product_1->image }}" alt="" class="img-fluid">
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
