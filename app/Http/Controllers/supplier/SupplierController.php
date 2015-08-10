<?php

namespace App\Http\Controllers\supplier;

use Illuminate\Http\Request;
use App\Supplier;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Validator, \Redirect, \Session,\Cookie,\Config,\Hash, \Input;

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
            $newSupplier = new Supplier();                 
            $newSupplier->fill($request->except('_token'));
            $newSupplier->parent_id = Session::get('SUPPLIER_ACCESS_ID');
            $newSupplier->password  = Hash::make($request->password);
            $newSupplier->status    = 'Inactive';
            if (Input::hasFile('image')){
               
                
                $file               = Input::file('image');
                $imagename          = Session::get('SUPPLIER_ACCESS_ID') . '.' . $file->getClientOriginalExtension();
                 if(\File::exists(public_path('upload/supplierprofile/' . $imagename))){
                    \File::delete(public_path('upload/supplierprofile/' . $imagename));
                }
                $path               = public_path('upload/supplierprofile/' . $imagename);
                $image              = \Image::make($file->getRealPath())->save($path);
                $th_path            = public_path('upload/supplierprofile/thumb/' . $imagename);
                $image              = \Image::make($file->getRealPath())->resize(128, 128)->save($th_path);
                $newSupplier->image    = $imagename;
            }
            
            $newSupplier->save();				
            return Redirect::route('supplier_list')->with('succ_msg', 'Supplier has been created successfully!');
        }
    }

   
    public function show($id)
    {
       $data['result'] = Supplier::find($id);
       return view('supplier/supplier/view',$data);
    }
    
    public function edit($id)
    {
       $data['result'] = Supplier::find($id);
       return view('supplier/supplier/edit',$data);
    }
    
    public function update($id,Request $request){
        
        $validator = Validator::make(
                            $request->all(),
                            [
                                  'first_name'	    => 'required',                          
                                  'last_name'	    => 'required',                                                                                              
                            ]
                            );
        if ($validator->fails())
        {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator)->withInput();
        }
        else
        {
            $newCar = Supplier::find($id);                
            $newCar->fill($request->except('_token'));
            $newCar->parent_id = Session::get('SUPPLIER_ACCESS_ID');
            if($request->password != ''){
            $newCar->password  = Hash::make($request->password);
            }
            
            if (Input::hasFile('image')){
               
                
                $file               = Input::file('image');
                $imagename          = Session::get('SUPPLIER_ACCESS_ID') . '.' . $file->getClientOriginalExtension();
                 if(\File::exists(public_path('upload/supplierprofile/' . $imagename))){
                    \File::delete(public_path('upload/supplierprofile/' . $imagename));
                }
                $path               = public_path('upload/supplierprofile/' . $imagename);
                $image              = \Image::make($file->getRealPath())->save($path);
                $th_path            = public_path('upload/supplierprofile/thumb/' . $imagename);
                $image              = \Image::make($file->getRealPath())->resize(128, 128)->save($th_path);
                $newCar->image    = $imagename;
            }
            
            $newCar->save();				
            return Redirect::route('supplier_list')->with('succ_msg', 'Supplier has been created successfully!');
        }
    }

  
}
