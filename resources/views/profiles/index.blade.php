@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="{{ asset($user->profile->profileImage())}}" alt="user" style="border-radius: 50%; height:150px; width:150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center">
                    <h1 class="h3">{{ $user->username }}</h1>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}" > </follow-button>
                </div>
                @can('update', $user->profile)
                 <a href="{{ url('/p/create') }}">Add New Post</a>
                @endcan
            </div>
            @can('update',$user->profile)
             <a href="{{ url('/profile/'.$user->id.'/edit')  }}">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"> <strong>{{  $postCount }}</strong> posts</div>
                <div class="pr-5"> <strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"> <strong>{{  $followingCount }}</strong> following</div>
            
            </div>
            <div class="pt-4">
                <div style="font-weight: 700; color:black; font-size: 17px">{{ $user->profile->title }}</div>
                <div style="font-size: 17px">{{ $user->profile->description }}</div>
                 <a style="font-weight: 700; font-size: 17px" href="bdraseltech.com/creative">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
        <a href="{{ url('p/'.$post->id) }}">
                <img style="height: 250px" src="{{ asset('storage/'.$post->image) }}" alt="post1" class="w-100">
            </a>
        </div>
        @endforeach
        
    </div>
</div>
@endsection




{{-- <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>
        </div>
    </div>
</div> --}}
