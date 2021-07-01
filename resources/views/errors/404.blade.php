@extends('layouts.main')
@section('content')
   <div class="container">
     <div class="row">
       <div class="col text-center mt-3 ">
         <h1>Error 404</h1>
         <h4>page not found</h4>
         <p>{{ $exception->getMessage() }}</p>
       </div>
     </div>
   </div>
@endsection