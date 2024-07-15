<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center ">ALL User data </h2>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Name</th>
                        {{-- <th>User_id</th> --}}
                        <th>Email</th>
                        <th>password</th>
                        {{-- <th>age</th> --}}
                        {{-- <th>address</th> --}}
                        <th>detailInfo</th>
                    </tr>
                    
                        @foreach ( $info as $id => $us)
                        <tr>
                        <td>{{$us->name}}</td>
                        {{-- <td><a href="{{route('userdata',$id)}}">{{$us->user_id}}</a> </td> --}}
                        <td>{{$us->email}}</td>
                        <td>{{$us->password}}</td>
                        {{-- <td>{{$us->age}}</td>
                        <td>{{$us->address}}</td> --}}
                        <td>
                            <a href="{{route('userdetail',$id)}}" class="btn btn-success">Veiw</a>
                        </td>
                       </tr>     
                        @endforeach
                    
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>