<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Supplier;
use \Validator, \Redirect, \Session,\Cookie,\Config,\Hash, \Input;

class SupplierMasterController extends Controller
{
  
   public function index()
    {
        
        $data = array();      
        $data['result'] = Supplier::paginate(10);       
        return view('admin/supplier/index',$data);
    }


    public function create()
    {
        return view('admin/supplier/create');
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
            return Redirect::back()->withErrors($validator)->withInput();
        }
        else
        {
            \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            $newSupplier = new Supplier();                 
            $newSupplier->fill($request->except('_token'));
            $newSupplier->parent_id = 0;
            $newSupplier->password  = Hash::make($request->password);
            
            if (Input::hasFile('profileimage')){
                $file               = Input::file('profileimage');
                $imagename          = time() . '.' . $file->getClientOriginalExtension();                
                $path               = public_path('upload/supplierprofile/' . $imagename);
                $image              = \Image::make($file->getRealPath())->save($path);
                $th_path            = public_path('upload/supplierprofile/thumb/' . $imagename);
                $image              = \Image::make($file->getRealPath())->resize(128, 128)->save($th_path);
                $newSupplier->image    = $imagename;
            }
            
            $newSupplier->save();
            \DB::statement('SET FOREIGN_KEY_CHECKS = 1');
            return Redirect::route('supplier_master_list')->with('succ_msg', 'Supplier has been created successfully!');
        }
    }

   
    public function show($id)
    {
       $data['result'] = Supplier::find($id);
       return view('admin/supplier/view',$data);
    }
    
    public function edit($id)
    {
       $data['result'] = Supplier::find($id);
       return view('admin/supplier/edit',$data);
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
            \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            $supplier = Supplier::find($id);                
            $supplier->fill($request->except('_token'));
            $supplier->parent_id = 0;
            if($request->password != ''){
            $supplier->password  = Hash::make($request->password);
            }
            
            if (Input::hasFile('profileimage')){
               
                $file               = Input::file('profileimage');
                $imagename          = time() . '.' . $file->getClientOriginalExtension();
                 if(\File::exists(public_path('upload/supplierprofile/' . $supplier->image))){
                    \File::delete(public_path('upload/supplierprofile/' . $supplier->image));
                }
                $path               = public_path('upload/supplierprofile/' . $imagename);
                $image              = \Image::make($file->getRealPath())->save($path);
                $th_path            = public_path('upload/supplierprofile/thumb/' . $imagename);
                $image              = \Image::make($file->getRealPath())->resize(128, 128)->save($th_path);
                $supplier->image    = $imagename;
            }
            
            $supplier->save();
             \DB::statement('SET FOREIGN_KEY_CHECKS = 1');
            return Redirect::route('supplier_master_list')->with('succ_msg', 'Supplier has been created successfully!');
        }
    }
    
    public function destroy($id){
         $supplier = Supplier::find($id);
         $supplier->delete();
         return Redirect::route('supplier_master_list')->with('succ_msg', 'Supplier has been deleted successfully!');
    }
}
