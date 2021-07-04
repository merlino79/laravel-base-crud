@extends('layouts.main')
@section('content')
    
     <div class="container">
       <div class="row">
         <div class="col">
            <h1>new comic</h1>
         </div>
         <div class="row">
            <div class="col-8 offset-2 p-4">

                 <form action="{{ route('comics.store') }}" method="post">
                @csrf
                @method('POST')

               <div class="mb-3">
                    <label for="title" class="form-label">new comics</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" id="thumb" name="thumb" class="form-control">
                </div>

                 <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <textarea  id="description" name="description" class="form-control" rows="6"></textarea>
                </div>

                 <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text"  id="series" name="series" class="form-control">
                </div>

                 <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <input type="type"  id="type" name="type" value="" class="form-control">
                </div>
                 
                
                 <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                     <input type="price" id="price" name="price"  class="form-control">
                </div>

                
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary ">Reset</button>

              

                

            </form>

              

              
              



           
            </div>
         </div>
         
       </div>
     </div>

@endsection