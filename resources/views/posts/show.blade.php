@extends('layouts.main')
@section('content')
<div class="card border-dark mb-3" style="max-width: 18rem;">
<div class="card-header">{{$post->id }}</div>
  <div class="card-body text-dark">
    <h5 class="card-title">{{ $post->title}}</h5>
    <p class="card-text">{{ $post->author}}</p>
    <p class="card-text">{{ $post->category_id}}</p>
  </div>
</div>
@endsection