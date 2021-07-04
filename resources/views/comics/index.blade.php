@extends('layouts.main')
@section('content')
   <div class="container">
     <div class="row">
       <div class="col text-center">
           <h1>i miei fumetti</h1>
       </div>
     </div>
   </div>
    
      <section class="container">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>tilte</th>
                <th>type</th>
                <th colspan="3">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comics as $comic )
                <tr>
                  <td>{{ $comic->id }}</td>
                  <td>{{ $comic->title }}</td>
                  <td>{{ $comic->type }}</td>
                  <td>
                    <a href="{{ route('comics.show', $comic) }}" class="btn btn-success">SHOW</a>
                  </td>
                  <td>
                    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary ">edit</a>
                  </td>
                  <td>delete</td>
                </tr>
              @endforeach
            </tbody>
          </table>
       </section>

       <section class="container">
          {{ $comics->links() }}
       </section>

@endsection