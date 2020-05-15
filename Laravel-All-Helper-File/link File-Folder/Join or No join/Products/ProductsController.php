<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProductsController extends Controller {

  public function index() {
    echo Auth::user()->id;
    //die();
    $data['company'] = DB::table('customers')
            ->select('*')
            ->get();

    $data['units'] = DB::table('units')
            ->select('*')
            ->get();
    return view('admincontrol.products.products-insert', $data);
  }

  public function create(Request $request) {

    $validationRules = [
                'title' => 'required',
                'description' => 'required',
    ];

    $customMessage = [
        'title.required' => 'Title is required.',
        'description.required' => 'Description is required.',
    ];

    $tableData = [
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'userid' => Auth::user()->id,
        'customerid' => $request->get('customer'),
        'unitid' => $request->get('units'),
        'created_at' => date('Y-m-d H:i:s'),
        'verified' => 1,
    ];

    $validateFormData = request()->validate($validationRules, $customMessage);

    if (!$validateFormData) {
      return redirect()->back()->withErrors($request->all());
    }



    $insert = DB::table('products')
            ->insert($tableData);

    if (!$insert) {
      return redirect()->back()->with('msg', 'Invalid information, Not Inserted!!');
    }
    return redirect()->back()->with('error', 'Inserted Successfully!!');
  }

  public function view(Request $request) {

    $data['product'] = DB::table('products')
            ->join('addproducts', 'addproducts.productid', '=', 'products.id')
            ->join('customers', 'addproducts.customerid', '=', 'customers.id')
            ->join('units', 'products.unitid', '=', 'units.id')
            ->select('products.*', 'customers.company_name', 'units.name', DB::raw('(select sum(addproducts.stock) from addproducts where addproducts.productid = products.id) as totalStock'))->groupBy('products.id')
            ->paginate(10);

    //echo "<pre>";
    //print_r($data['product']);
    //die();
    return view('admincontrol.products.all-products', $data);
  }
  
  public function sellerReport(Request $request, $id){
    echo $id;
    $data['newproduct'] = DB::table('addproducts')
            ->join('customers', 'addproducts.customerid', '=', 'customers.id')
            ->join('products', 'addproducts.productid', '=', 'products.id')
            //->join('banks', 'addproducts.bank_id', '=', 'banks.id')     
            ->where("customers.id", $id)
            //->select('addproducts.*', 'products.title as pname', 'customers.company_name' , 'products.title')
            ->select("addproducts.id", "products.title as pname", "addproducts.created_at")
            ->orderBy("products.title", "asc")
            ->orderBy("addproducts.created_at", "desc")
            ->paginate(100);
    
    echo "<pre>";
    print_r($data['newproduct']);
    die();
        //return view('admincontrol.products.all-addiproducts', $data);
  }

  public function edit($id) {

    $data['userid'] = $id;
    $data['units'] = DB::table('units')
            ->select('*')
            ->get();
    $data['company'] = DB::table('customers')
            ->select('*')
            ->get();
    $data['product'] = DB::table('products')
            ->where('id', "=", $id)
            ->first();
    return view('admincontrol.products.edit-products', $data);
  }

  public function update(Request $request, $id) {


    $validationRules = [
                'title' => 'required',
                'description' => 'required',
    ];

    $customMessage = [
        'title.required' => 'Name is required.',
        'description.required' => 'designation is required.',
    ];

    $tableData = [
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'userid' => Auth::user()->id,
        'customerid' => $request->get('customer'),
        'unitid' => $request->get('units'),
        'created_at' => date('Y-m-d H:i:s'),
        'verified' => 1,
    ];

    $validateFormData = request()->validate($validationRules, $customMessage);

    if (!$validateFormData) {
      return redirect()->back()->withErrors($request->all());
    }

    $update = DB::table('products')
            ->where('id', $id)
            ->update($tableData);

    if (!$update) {
      return redirect()->back()->with('error', 'Information Not Updated!!');
    }
    return redirect()->back()->with('msg', 'Information is Updated Successfully!!!');
    //return redirect()->route('allusers')->with('msg', 'Information is Updated Successfully!');
  }

  public function delete($id) {
    $delete = DB::table('products')
            ->where("id", "=", "$id")
            ->delete();

    if (!$delete) {
      return redirect()->back()->with('error', 'Not Deleted!!');
    }

    return redirect()->route('allproduct')->with('msg', 'Deleted Successfully!');
  }

}
