<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function viewallrecords()
  {
      $data=Product::get();
      return view('first',compact('data'));
  }
  public function addRecord()
  {
      return view('add');
  }
  public function insertRecord(Request $req)
  {
      $object=New Product();
      $object->id=$req->id;
      $object->productname=$req->productname;
      $object->productprice=$req->productprice;
      $object->productcode=$req->productcode;
      $object->productinstock=$req->productinstock;
      $object->productdiscount=$req->productdiscount;
      $object->productsize=$req->productsize;
      $object->productdetail=$req->productdetail;
      $object->save();
      return redirect()->to('/viewproduct');
  }
  public function deleteRecord(Request $req)
  {
      $object=Product::where('id',$req->id)->first();
      $object->delete();
      return redirect()->to('/viewproduct');
  }
  public function editRecord(Request $req)
  {
      $editData=Product::where('id',$req->id)->first();
      return view('updateData',compact('editData'));
  }
  public function updateRecord(Request $req)
  {
     $object=Product::find($req->id);
      $object->productname=$req->productname;
      $object->productprice=$req->productprice;
      $object->productcode=$req->productcode;
      $object->productinstock=$req->productinstock;
      $object->productdiscount=$req->productdiscount;
      $object->productsize=$req->productsize;
      $object->productdetail=$req->productdetail;
      $object->save();
      return redirect()->to('/viewproduct');

  }
}
