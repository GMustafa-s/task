<!doctype html>
<html lang="en">
  <head>
    <title>{{$tittle}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     
    <form action="{{$url}}" method="POST">
        @csrf
       
        <div class="form-group ">
          <label for="">Name</label>
          <input type="name" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" >
          
        </div>
   
    
        <div class="form-group ">
            <label for="">email</label>
            <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
            
          </div>
          <div class="form-group ">
            <label for="">password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
        </div>
        <div class="form-group ">
          <label for="">country id</label>
          <input type="text" name="country_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
         
          <button>
            submit
            
        </button>

    </form>

</body>
</html>