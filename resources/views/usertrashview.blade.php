<!doctype html>
<html lang="en">
  <head>
    <title>customer Trash record</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <a href="{{url('/user/view')}}">
    <input class="btn btn-primary" type="button" value="Customers" style="float: right;">
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
                    <a href="{{route('user.restore',['id' =>$item->id])}}">
                <button class="btn btn-primary success">  restore  </button>
            </a>
            <a href="{{'/user/delete'}}/{{$item->id}}">
                <button class="btn btn-danger">  permanent delete </button>
            </a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
  </body>
</html>
