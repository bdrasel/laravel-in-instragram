@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
        <div class="col-8">
            <img style="width:400px; height:550px" src="{{ '/storage/'.$post->image }}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <img src="{{ asset($post->user->profile->profileImage() ) }}"
                 alt="" style="max-width: 60px" class="w-100 rounded-circle pr-3">
                <div>
                 <p class="pt-2 font-weight-bold"> <a href="{{ url('/profile/'.$post->user->id) }}">
                    {{ $post->user->username }}</a> &nbsp;|</p>
                </div>
                <a style="margin-top:-6px" class="font-weight-bold pl-2" href="">Follow</a>
            </div>
            <hr>
            <p></p>
            <p class="pt-2 font-weight-bold"> <a href="{{ url('/profile/'.$post->user->id) }}">
                {{ $post->user->username }}</a> {{ $post->caption }} </p>

           
        </div>
   </div>
</div>
@endsection

