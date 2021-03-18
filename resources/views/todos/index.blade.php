@extends('layouts.app')
  @section('title')
   Todos List
  @endsection
@section('content')
<h1 class="text-center my-5">TODOS PAGE </h1>
       <div class="row justify-content-center">
        <div class="col-md-8 ">
         <div class="card card-default">
          <div class="card card-header">
            Todos 
          </div>
           <div class="card-body">
            <ul class ="list-group">
              @foreach($todos as $todo)
             <li class ="list-group-item">
               {{$todo->name}}
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="/todos/{{$todo->id}}" class="btn btn-success me-md-2 btn-sm" type="button" >View</a>
                  @if (!$todo -> completed)
                  <a href="/todos/{{$todo->id}}/complete" style="color:white;" class="btn btn-warning btn-sm">Complete</a>
                  @endif
               </div>
             </li>
             @endforeach
          </ul>
         </div>
        </div>
      </div>
          
     </div>
@endsection