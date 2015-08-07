<?php

namespace App\Http\Controllers\supplier;

use Illuminate\Http\Request;
use App\Supplier;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Validator, \Redirect, \Session,\Cookie,\Config, \Hash;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = array();
      
        $data['result'] = Supplier::where('parent_id','=',Session::get('SUPPLIER_ACCESS_ID'))->paginate(10);
       
        return view('supplier/supplier/index',$data);
    }


    public function create()
    {
        return view('supplier/supplier/create');
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make(
                            $request->all(),
                            [
                                  'first_name'	    => 'required',                          
                                  'last_name'	    => 'required',                          
                                  'email'	        => 'required|email|unique:suppliers',
                                  'password'        => 'required'  
                            ]
                            );
            if ($validator->fails())
            {
                $messages = $validator->messages();
                return Redirect::route('supplier_add')->withErrors($validator)->withInput();
            }
            else
            {
                $newCar = new Supplier();                 
                $newCar->fill($request->except('_token'));
                $newCar->parent_id = Session::get('SUPPLIER_ACCESS_ID');
                $newCar->password  = Hash::make($request->password);
                $newCar->save();				
                return Redirect::route('supplier_list')->with('succ_msg', 'Supplier has been created successfully!');
            }
    }

   
    public function show($id)
    {
       $data['result'] = Supplier::find($id);
       return view('supplier/supplier/view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
