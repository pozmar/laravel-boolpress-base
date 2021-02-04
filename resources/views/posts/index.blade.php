@extends('layouts.main')
@section('content')
<table class="table">
  <thead>
    <tr>
    @foreach($columns as $column=>$columnValue)
      <th scope="col">{{ $columnValue }}</th>
      @endforeach

    </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->category_id }}</td>
      <td>{{ $post->title }}</td>
      <td>{{ $post->author }}</td>
      <td><a href="{{ route('posts.show', $post->id) }}">Vai</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection