@extends('layouts.app')

@section('title', 'Data About')

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
                <form action="/admin/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">title</label>
                        <input type="text" class="form-control" name="title" placeholder="Input Title"
                            value="{{ $about->title }}">
                    </div>
                    @error('title')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Subtitle</label>
                        <textarea name="subtitle" id="" cols="30" rows="5" class="form-control"
                            placeholder="Input Subtitle">{{ $about->subtitle }}</textarea>
                    </div>
                    @error('subtitle')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Description 1</label>
                        <textarea name="description_1" id="" cols="30" rows="5" class="form-control"
                            placeholder="Input Description 1">{{ $about->description_1 }}</textarea>
                    </div>
                    @error('description_1')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Description 2</label>
                        <textarea name="description_2" id="" cols="30" rows="5" class="form-control"
                            placeholder="Input Description 2">{{ $about->description_2 }}</textarea>
                    </div>
                    @error('description_2')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Primacy 1</label>
                        <input type="text" class="form-control" name="primacy_1" placeholder="Input Primacy 1"
                            value="{{ $about->primacy_1 }}">
                    </div>
                    @error('primacy_1')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Primacy 2</label>
                        <input type="text" class="form-control" name="primacy_2" placeholder="Input Primacy 2"
                            value="{{ $about->primacy_2 }}">
                    </div>
                    @error('primacy_2')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Primacy 3</label>
                        <input type="text" class="form-control" name="primacy_3" placeholder="Input Primacy 3"
                            value="{{ $about->primacy_3 }}">
                    </div>
                    @error('primacy_3')
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
