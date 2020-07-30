@extends('layouts.app')

@section('content')
<div class="conatiner">
    <form action="{{ url('p/') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-1"></div>
            <div class="col-8">
                <div class="form-group row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <h1>Add New Post</h1> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="caption"
                     class="col-md-4 col-form-label text-md-right"><strong>Post Caption</strong></label>
                    <div class="col-md-6">
                        <input id="caption" type="text"
                         class="form-control @error('caption') is-invalid @enderror" caption="caption"
                          value="{{ old('caption') }}" name="caption" >
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image"
                     class="col-md-4 col-form-label text-md-right"><strong>Post Image</strong></label>
                     <div class="col-md-6">
                        <input type="file" id="image"  name='image'>
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                      <button class="btn btn-primary" type="submit">Add New Post</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection