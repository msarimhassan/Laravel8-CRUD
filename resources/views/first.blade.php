<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laravel Crud</title>
</head>
<body>
    <div class="jumbotron text-center">
  <h1>Laravel 8 CRUD </h1>
  <p>By: Sarim Hassan</p> 
</div>
    <button class="btn btn-success"><a href="/addRecord" class="btn btn-success">Add NEW</a></button>
    <br>
    <br>
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>ID</th>
    <th>product name</th>
    <th>product price</th>
    <th>product code</th>
    <th>product in stock</th>
    <th>product discount</th>
    <th>product size</th>
    <th>product detail</th>
    <th colspan="2">Actions</th>
    </tr>
    </thead>
<tbody>
@foreach($data as $fetch)
<tr>
<td>{{$fetch->id}}</td>
<td>{{$fetch->productname}}</td>
<td>{{$fetch->productprice}}</td>
<td>{{$fetch->productcode}}</td>
<td>{{$fetch->productinstock}}</td>
<td>{{$fetch->productdiscount}}</td>
<td>{{$fetch->productsize}}</td>
<td>{{$fetch->productdetail}}</td>
<td><button class="btn btn-primary"><a href="/editRecord?id={{$fetch->id}}"  class="btn btn-primary">EDIT</a></button></td>
<td><button class="btn btn-danger"><a href="/deleteRecord?id={{$fetch->id}}" class="btn btn-danger">DELETE</a></button></td>
</tr>
</tbody>


@endforeach

    </table>
</body>
</html>
