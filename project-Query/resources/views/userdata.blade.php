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
                        <th>User_id</th>
                        <th>Email</th>
                    </tr>
                    
                     @foreach ($user as $us )
                    <tr>
                        <td>{{$us->name}}</td>
                        <td>{{$us->email}}</td> 
                        <td>{{$us->password}}</td> 
                    </tr>    
                    @endforeach
                        {{-- <td>{{$id['name']}}</td>
                        <td>{{$id['email']}}</td>
                        <td>{{$id['password']}}</td> --}}
                    

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>
{{-- 
<h1>user data</h1>

@foreach ($user as $id => $us )
{{$us->name}} <br>
{{$us->email}} <br>
{{$us->password}} <br>
@endforeach --}}