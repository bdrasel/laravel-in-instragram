@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ url('/profile/'.$user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-1"></div>
            <div class="col-8">
                <div class="form-group row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <h1>Edit Profile</h1> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title"
                     class="col-md-4 col-form-label text-md-right"><strong>Title</strong></label>
                    <div class="col-md-6">
                        <input id="title" type="text"
                         class="form-control @error('title') is-invalid @enderror" title="title"
                          value="{{ old('title') ?? $user->profile->title }}" name="title" >
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="description"
                     class="col-md-4 col-form-label text-md-right"><strong>description</strong></label>
                    <div class="col-md-6">
                        <input id="description" type="text"
                         class="form-control @error('description') is-invalid @enderror" description="description"
                          value="{{ old('description') ?? $user->profile->description }}" name="description" >
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="url"
                     class="col-md-4 col-form-label text-md-right"><strong>URL</strong></label>
                    <div class="col-md-6">
                        <input id="url" type="text"
                         class="form-control @error('url') is-invalid @enderror" url="url"
                          value="{{ old('url') ?? $user->profile->url }}" name="url" >
                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image"
                     class="col-md-4 col-form-label text-md-right"><strong>Profile Image</strong></label>
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
                      <button class="btn btn-primary" type="submit">Save Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection