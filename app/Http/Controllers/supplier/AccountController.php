<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;
use App\Supplier;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Validator, \Redirect, \Session,\Cookie,\Config;
use Hash;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
   public function index(Request $request)
    {
       $agent_id  = Session::get('SUPPLIER_ACCESS_ID');
       $data  = array();
       $data['record'] = Supplier::find($agent_id);
       
       if ($request->isMethod('post')){
          $first_name       = $request->first_name;
          $last_name        = $request->last_name;
          $phone            = $request->phone;
          $password         = $request->password;
          $update_arr       = array(
                                    'first_name'    => $first_name,
                                    'last_name'     => $last_name,
                                    'phone'         => $phone
                                    );
          
          if($password!=''){
            $update_arr['password'] = Hash::make($password);
          }
          Supplier::where('id','=',$agent_id)->update($update_arr);
          Session::put('SUPPLIER_ACCESS_FNAME', $first_name);
	  Session::put('SUPPLIER_ACCESS_LNAME',$last_name);
          return redirect::route('supplier_profile')->with('successmsg','Profile is updated successfully');
          
       }
       return view('supplier/profile',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
         if ($request->isMethod('post')){
            $validator = Validator::make(
                            $request->all(),
                            [
                                  'first_name'	    => 'required',                          
                                  'last_name'	    => 'required',                          
                                  'email'	    => 'required|email|unique:suppliers',
                                  'password'    => 'required'  
                            ]
                            );
            if($validator->fails()){
                 return redirect::route('add_supplier')->with('errmsg',[$validator->messages()->all()]);
            }else{
                $first_name       = $request->first_name;
                $last_name        = $request->last_name;
                $phone            = $request->phone;
                $password         = $request->password;
                $email            = $request->email;
                $password         = $request->password;
                $insert_arr       = array(
                                          'first_name'    => $first_name,
                                          'last_name'     => $last_name,
                                          'phone'         => $phone,
                                          'email'         => $email,
                                          'password'      => Hash::make($password)
                                          );
                
                Supplier::insert($insert_arr);
                return redirect::route('add_supplier')->with('successmsg','Supplier is added successfully');
            }
          
          
       }
        return view('supplier/create_supplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
