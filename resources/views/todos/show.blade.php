<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
       
        <title>Todo item</title>
    </head>
      <body>
       <div class="container">
        <h1 class="text-center my-5">
        {{$todo->name}}
        </h1>
        <div class="row justify-content-center">
        <div class="col-md-6">
        
        <div class="card card-default">
          <div class="card-header">
             Details
          </div>
           <div class="card card-body">
             {{$todo->description}}
             </div>
              <div class="card card-default">
               <div class="card-header">
                Completed
               </div>
                  <div class="card card-body">
                     {{$todo->completed}} 
                  </div>
               </div>
         
            
         </div>

        </div>
        </div>
        </div>
      </body>
</html>