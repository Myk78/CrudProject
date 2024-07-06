<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple laravel 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark py-3 ">
        <h3 class="text-white text-center">Simple laravel 11</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{route('product.create')}}" class="btn btn-success">Create</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @if (Session::has('success'))
            <div class="col-md-10 mt-4">
                <div id="flash-message" class="alert alert-success">
                   {{Session::get('success')}} 
                </div>
                
            </div>
                
            @endif
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Product</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Sku</th>
                                <th>Price</th>
                                <th>created_at</th>
                                <th>Action</th>
                            </tr>
                            @if ($product->isNotEmpty())
                              @foreach ($product as $pro)
                                    <tr>
                                        <td>{{$pro->id}}</td>
                                        <td>
                                            @if ($pro->image != "")
                                                <img src="{{asset('uploads/products/'.$pro->image)}}" alt="" width="50px">
                                            @endif
                                        </td>
                                        <td>{{$pro->name}}</td>
                                        <td>{{$pro->sku}}</td>
                                        <td>{{$pro->price}}</td>
                                        <td>{{\Carbon\Carbon::parse($pro->created_at)->format('d M,Y')}}</td>
                                        <td>
                                            <a href="{{route('product.edit',$pro->id)}}" class="btn btn-success">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                              @endforeach
                                
                            @endif
                            
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
  </body>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the flash message div
        var flashMessage = document.getElementById('flash-message');
        
        // Set a timeout to remove the message after 5 seconds (5000 milliseconds)
        if (flashMessage) {
            setTimeout(function() {
                flashMessage.style.display = 'none';
            }, 3000);
        }
    });
</script>

</html>