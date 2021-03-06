@extends('layouts.main')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
       <h1>{{ $comic->title }} <a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary">EDIT</a></h1>
      </div>
      <div class="my-3">
          <span class="badge bg-primary">{{ $comic->type }}</span>
              {{ $comic->series }}  
       </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img  class="img-fluid " src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
      </div>
      <div class="col-md-6">
        <p>{!! $comic->description !!}</p>
         <section class="container">
        <a href="{{ route('comics.index') }}">back</a>
      </section>
      </div>
     
    </div>
  </div>
@endsection