<!doctype html>
<html lang="en">
  <head>
    <title>customer record</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <form action="" class=" col-9">
        <div class="form-group">
          
          <input type="search" name="search" id="" class="form-control" placeholder="search your name and email here" aria-describedby="helpId" value="{{$search}}">
        </div>
        <button class="btn btn-primary">search</button>
    </form>
      <a href="{{url('/user/bin')}}">
    <button class="btn btn-primary align-right">Recycle Bin</button>
</a>
    <div class="container">
        
   
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                
                <th>email</th>
                <th>password</th>
               
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($visiter as $item)
               
            
            <tr>
                <td >{{$item->id}}</td>
                <td >{{$item->name}}</td>
                
                <td>{{$item->email}}</td>
                <td >{{$item->password}}</td>
                
                <td>
                    <a href="{{route('user.edit',['id' =>$item->id])}}">
                <button class="btn btn-primary success">  edit  </button>
            </a>
            <a href="{{'/user/trash'}}/{{$item->id}}">
                <button class="btn btn-danger">  trash </button>
            </a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
  <div class="row">
  {{--  {{$register->links()}}
  --}}
  </div>
    
  </body>
</html>


