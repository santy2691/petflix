@extends('layouts.main')

@section('content')
<div class="separador"></div>
<div class="container">
    <video width="100%" controls>
        <source src="{{ $urlMovie}}" type="video/mp4">
        Your browser does not support HTML video.
      </video>
</div>
  
@endsection