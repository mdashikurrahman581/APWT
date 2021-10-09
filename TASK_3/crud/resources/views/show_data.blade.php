<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--<button type="button" class="btn btn-success">Add Product</button>-->
    <a href = "{{url('/add')}}" class="btn btn-success my-3">Add Product</a>
    <title>crud</title>
  </head>
  <body>
  @if(Session::has('msg'))
<p class="alart alart-success">{{Session::get('msg')}}</p>
@endif
  <table class="table table-bordered" >
  <thead>
    <tr>
      <th scope="col">Serial no.</th>
      <th scope="col">Name</th>
      <th scope="col">P_id</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
      @foreach($showData as $key=>$data)
    <tr>
     
      <td>{{$key+1}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->p_id}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->description}}</td>
      <td>
         
      <a class="btn btn-success"href="{{url('edit/'.$data->id)}}"> Edit</a>
      <a href="{{url('delete/'.$data->id)}}" onclick ="return confirm(' Are you sure to delete the product?')" class="btn btn-danger" > Delete </a>

      </td>

    </tr>
    @endforeach
  
  </tbody>
</table>
{{$showData->links()}}
</body>
</html>