<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center">Update User Record</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Update user</h1>
                <form action="{{ route('updateuser.data', $id) }}" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="mb-3">
                        <label for="form-label">Name</label>
                        <input type="text" value="{{ $info->name }}" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">User_id</label>
                        <input type="text" value="{{ $info->user_id }}" class="form-control" name="user_id">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Email</label>
                        <input type="text" value="{{ $info->email }}" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Password</label>
                        <input type="text" value="{{ $info->password }}" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Age</label>
                        <input type="text" class="form-control" value="{{ $info->age }}" name="age">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Address</label>
                        <input type="text" class="form-control" value="{{ $info->address }}" name="address">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
