@extends('layouts.app')
@section('content')
<div class="container">
    @foreach($posts as $post)
     <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <a href="{{  url('profile/'.$post->user->id) }}">
                <img style="width:400px; height:550px" src="{{ '/storage/'.$post->image }}" alt="" class="w-100">
            </a>
        </div>
     </div>  
     <div class="row pt-2 pb-4">
         <div class="col-3"></div>
        <div class="col-6">
            <div class="d-flex align-items-center">

                <p class="pt-2 font-weight-bold"> <a href="{{ url('/profile/'.$post->user->id) }}">
                    {{ $post->user->username }}</a> {{ $post->caption }} </p>
            </div>
            <hr>
           
            
        </div>
    </div>
   @endforeach
   <div class="row">
       <div class="col-md-12 d-flex justify-content-center">
           {{ $posts->links() }}
       </div>
   </div>
</div>
@endsection

