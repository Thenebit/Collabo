@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <h1>{{ $data->ideades }}</h1>
            <p>Posted by {{ $data->user->name }}</p>
            <p>Number of posts:</p>
  
            <h2>Comments:</h2>
  
            {{-- @foreach ($data->comments as $comment)
              <p>{{ $comment->body }} (by {{ $comment->user->name }})</p>
            @endforeach --}}
  
            <!-- Add a form to post new comments -->
            <form method="#" action="#">
              @csrf
              <textarea name="body"></textarea>
              <button type="submit">Post Comment</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection