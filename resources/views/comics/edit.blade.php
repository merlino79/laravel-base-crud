@extends('layouts.main')
@section('content')
    
     <div class="container">
       <div class="row">
         <div class="col">
            <h1>modifica:
              <a href="{{ route('comics.show',$comic) }}">{{ $comic->title }}</a>
            </h1>  
         </div>
         <div class="row">
            <div class="col-8 offset-2 p-4">

                 <form action="{{ route('comics.update', $comic) }}" method="post">
                    @csrf
                    @method('PATCH')

                        <div class="mb-3">
                              <label for="title" class="form-label">new comics</label>
                              <input type="text" id="title" name="title" class="form-control" value="{{ $comic->title }}">
                          </div>

                          <div class="mb-3">
                              <label for="thumb" class="form-label">Immagine</label>
                              <input type="text" id="thumb" name="thumb" class="form-control" value="{{ $comic->thumb }}">
                          </div>

                          <div class="mb-3">
                              <label for="description" class="form-label">description</label>
                              <textarea  id="description" name="description" class="form-control" rows="6">{{ $comic->description }}</textarea>
                          </div>

                          <div class="mb-3">
                              <label for="series" class="form-label">series</label>
                              <input type="text"  id="series" name="series" class="form-control" value="{{ $comic->series }}">
                          </div>

                          <div class="mb-3">
                              <select  id="type" name="type" class="form-control">
                                  <option value="comic book" @if ($comic->type === 'comic book') selected @endif>comic book</option>
                                  <option value="graphic novel" @if ($comic->type === 'graphic novel') selected @endif>graphic novel</option>
                              
                              </select>
                          </div>
                          
                          
                          <div class="mb-3">
                              <label for="price" class="form-label">price</label>
                              <input type="price" id="price" name="price"  class="form-control" value="{{ $comic->price }}">
                          </div>

                          
                          <button type="submit" class="btn btn-primary">Invia</button>
                         

              

                

                 </form>
            </div>
         </div>
         
       </div>
     </div>

@endsection