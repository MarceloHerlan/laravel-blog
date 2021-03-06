@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row mb-2">
      @foreach ($posts as $post)
          
      
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              
              <h3 class="mb-0">{{$post->title}}</h3>
              <div class="mb-1 text-muted">{{$post->created_at}}</div>
              <p class="card-text mb-auto">{{substr($post->body,0,90)}}...</p>
            <a href="{{'post'}}/{{$post->slug}}" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="{{$post->image}}" class="bd-placeholder-img" width="200" height="250" />
             
            </div>
          </div>
        </div>
        @endforeach
      </div>

      {{$posts->links()}}


</div>    
@endsection

