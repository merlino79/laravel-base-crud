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
                    <label for="description" class="form-label">description</label>
                    <textarea  id="description" name="description" class="form-control" rows="6"></textarea>
                </div>

                
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary ">Reset</button>

              

                

            </form>

              

              
              



           
            </div>
         </div>
         
       </div>
     </div>

@endsection