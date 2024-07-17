<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
                <h2 class="text-center">user data</h2>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>User_id</th>
                        <th>Email</th>
                        <th>password</th>
                        <th>Address</th>
                    </tr>
                    @foreach ($info as $in )
                    <tr>    
                        <td>{{$in->id}}</td>
                        <td>{{$in->name}}</td>
                        <td>{{$in->user_id}}</td>
                        <td>{{$in->email}}</td>
                        <td>{{$in->password}}</td>
                        <td>{{$in->address}}</td>
                    </tr>
                    @endforeach
                </table>
                <a href="{{route('alluser')}}" class="btn btn-dark">Back</a>
            </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>




