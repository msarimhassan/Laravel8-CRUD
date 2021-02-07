<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Add New</title>
</head>
<body>
    <div class="jumbotron text-center">
  <h1>Laravel 8 CRUD </h1>
  <p>By: Sarim Hassan</p> 
</div>
<form action="insertRecord" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name</strong>
                <input type="text" name="productname" class="form-control" placeholder="Product Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Price</strong>
                 <input type="number" name="productprice" class="form-control" placeholder="Product Price">
               
            </div>
        </div>

               <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Code</strong>
                 <input type="text" name="productcode" class="form-control" placeholder="Product Code">
               
            </div>
        </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product In Stock</strong>
                 <input type="text" name="productinstock" class="form-control" placeholder="Product In Stock">
               
            </div>
        </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Discount</strong>
                 <input type="number" name="productdiscount" class="form-control" placeholder="Product Discount">
               
            </div>
        </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Size</strong>
                 <input type="text" name="productsize" class="form-control" placeholder="Product Size">
               
            </div>
        </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Detail </strong>
                 <input type="text" name="productdetail" class="form-control" placeholder="Product Detail">
               
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
    
</body>
</html>