<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
       
        <title>Todos</title>
     </head>
     
     <body>
<div class="container">
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
  <button class="btn btn-success me-md-2" type="button">Edit</button>
  <button class="btn btn-danger" type="button">Delete</button>
</div>
          </li>
          @endforeach
          </ul>
          </div>
          </div>
</div>
          
     </div>
     </div>
     </body>
 </html>