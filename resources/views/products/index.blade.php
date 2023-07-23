<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <!-- Styles -->

    <style>.center {
  padding: 50px 0;
  text-align: center;
}</style>

</head>
<body>
    <div>
        <h1 class="center" class="mx-auto" class="mb-3" >Product</h1>
    </div>
    
    <div class="center">
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>

        @endif
    </div>
    <div>
<div class="table-responsive-sm">
    <table class="table mx-auto " style="width: 800px;">
  <thead>
  <tr>
                <th>NAME</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
                <<th colspan="3"></th>
    </tr>    
           
  </thead>
  @foreach($products as $product)
  <tbody>
  <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td colspan="2">
                    <a type="button" href="{{route('product.edit', ['product' => $product])}}" class="btn btn-success">Edit</a>
                    </td>
                    <td>                   
                    <form method="post"  action="{{route('product.destroy',['product' => $product])}}">
                        @csrf 
                        @method('delete')
                        <input type="submit" value="Delete" type="button" class="btn btn-danger">
                    </form>
                    </td>
  </tbody>
  @endforeach



</table>
</div>

<div class="center">

        <button type="button" onclick="window.location='{{route('product.create')}}'" class="btn btn-primary">Add</button>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>