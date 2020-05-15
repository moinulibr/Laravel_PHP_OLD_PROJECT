<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    public function index(){
        return view('admincontrol.customers.customers-reg');
    }
    public function create(Request $request)
    {
    
         $validationRules =
            [
                'company' => 'required',
                'address' => 'required',
                'email' => 'required',
                'number' => 'required',
                'conperson' => 'required',
            ];

            $customMessage = [
                'company.required' => 'Company Name is required.',
                'address.required' => 'Address is required.',
                'email.required' => 'Email is required.',
                'number.required' => 'Contact Number is required',
                'conperson.required' => 'Contact Person is required',
            ];

            $tableData = [
                'company_name' => $request->input('company'),
               'address' => $request->input('address'),
               'email' => $request->input('email'),
               'contact_number' => $request->input('number'),
               'contact_person' => $request->input('conperson'),
               'created_at' => date('Y-m-d H:i:s'),
           ];

           $validateFormData = request()->validate($validationRules, $customMessage);

           if (!$validateFormData) {
            return redirect()->back()->withErrors($request->all());
        }
 
        $insert = DB::table('customers')
            ->insert($tableData);
 
        if (!$insert) {
            return redirect()->back()->with('msg', 'Invalid information, Not Inserted!!');
        }
        return redirect()->back()->with('error', 'Inserted Successfully!!');
    }

    public function view(Request $request)
    {

        $data['company'] = DB::table('customers')
            ->select('customers.id', DB::raw('(select sum(addproducts.amount) from addproducts where addproducts.customerid = customers.id) as totalAmount'))
            ->paginate(10);
        
        echo "<pre>";
        print_r($data['company']);
        die();
        
        return view('admincontrol.customers.all-customers', $data);

    }

    public function edit($id)
    {

        $data['company'] = DB::table('customers')
            ->where('id', "=", $id)
            ->first();
        return view('admincontrol.customers.edit-customers', $data);
    }

    public function update(Request $request, $id)
    {
        
        
        $validationRules =
            [
                'company' => 'required',
                'address' => 'required',
                'email' => 'required',
                'number' => 'required',
                'conperson' => 'required',
            ];

        $customMessage = [
                'company.required' => 'Company Name is required.',
                'address.required' => 'Address is required.',
                'email.required' => 'Email is required.',
                'number.required' => 'Contact Number is required',
                'conperson.required' => 'Contact Person is required',
            ];

        $tableData = [
            //'userid' => Auth::user()->id,
            /*
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'contract' => $request->input('contract'),
            //'status' => ,
            'type' => $request->input('creBy'),
            */
            'company_name' => $request->input('company'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'contact_number' => $request->input('number'),
            'contact_person' => $request->input('conperson'),
            'created_at' => date('Y-m-d H:i:s'),
        //'company' => $request->input('company'),
        //'userid' => $request->input('userid'),
        //'verified' => $request->input('verified'),
         
        ];

        $validateFormData = request()->validate($validationRules, $customMessage);

        if (!$validateFormData) {
            return redirect()->back()->withErrors($request->all());
        }

        $update = DB::table('customers')
            ->where('id', $id)
            ->update($tableData);

        if (!$update) {
            return redirect()->back()->with('error', 'Information Not Updated!!');
        }
        return redirect()->back()->with('msg', 'Information is Updated Successfully!!!');
        //return redirect()->route('allusers')->with('msg', 'Information is Updated Successfully!');
    }

    public function delete($id)
    {
        
        $delete = DB::table('customers')
            ->where("id", "=", "$id")
            ->delete();

        if (!$delete) {
            return redirect()->back()->with('error', 'Not Deleted!!');
        }

        return redirect()->route('allcustomers')->with('msg', 'Deleted Successfully!');

    }
}
