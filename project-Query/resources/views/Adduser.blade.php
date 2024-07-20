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
    <h2 class="text-center">Add a new User Record</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Add user</h1>
                <form action="{{route('adduser')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">User_id</label>
                        <input type="text" class="form-control" name="user_id">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Age</label>
                        <input type="text" class="form-control" name="age">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>