<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Agent;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Validator, \Redirect, \Session,\Cookie,\Input;

use Intervention\Image\ImageManagerStatic as Image;

class AgentMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $agentlList	=Agent::paginate(10);
        return view('admin/agent',array("agentlList" => $agentlList));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data               = array();
        return view('admin/agent_add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $agent = new Agent();
        $validator = Validator::make(
                    $request->all(),
                     ['first_name'	=> 'required',
                      'last_name'        => 'required',
                      'email' => 'required|email|unique:agents',
                      'password' => 'required'
                      ]
                  );
       
        if ($validator->fails())
        {
            $messages = $validator->messages();
            
            //dd($messages);
            return redirect::route('agent_add')->withErrors($validator)->withInput();
        }
        else{
                $first_name    = $request->input('first_name');
                $last_name     = $request->input('last_name');
                $email_address = $request->input('email');
                $password      = $request->input('password');
                $phone         = $request->file('phone');
                if($phone)
				{
					$agent->phone = $phone;
				}
                $agent->first_name = $first_name;
                $agent->last_name = $last_name;
                $agent->email = $email_address;
                $agent->password = $password;
                
               
                
                 if($request->file('user_image')){                
                            $file               = Input::file('user_image');
                            $imagename          = time() . '.' . $file->getClientOriginalExtension();
                            $path               = public_path('upload/agentprofile/' . $imagename);
                            $image              = \Image::make($file->getRealPath())->save($path);
                            $th_path            = public_path('upload/agentprofile/thumb/' . $imagename);
                            $image              = \Image::make($file->getRealPath())->resize(128, 128)->save($th_path);
                            $agent->image    = $imagename;
                           
			     }
                $agent->save();
                
                return redirect::route('agent_management')->with('success', 'Agent inserted successfully.');
            }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $data = array();
        $data['agent_data'] = Agent::find($id);
        return view('admin/agent_show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
		$data = array();
        $data['agent_data'] = Agent::find($id);
        return view('admin/agent_edit',$data);
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
       
        $validator = Validator::make(
                    $request->all(),
                     ['first_name'	=> 'required',
                      'last_name'   => 'required',
                      ]
                  );
       
        if ($validator->fails())
        {
            $messages = $validator->messages();
            return redirect::route('agent_edit',$id)->withErrors($validator)->withInput();
        }
        else{
			    $agent         = Agent::find($id);
                $first_name    = $request->input('first_name');
                $last_name     = $request->input('last_name');
                $password      = $request->input('password');
                $phone         = $request->input('phone');
				
				$agent->first_name	= $first_name;
				$agent->last_name	= $last_name;
                if($phone)
				{
					$agent->phone	= $phone;
				}                
                
				if($password != '')
				{
					$agent->password	= $password;
				}
				
                 if($request->file('user_image')){                
                            $file               = Input::file('user_image');
                            $imagename          = time() . '.' . $file->getClientOriginalExtension();
							if(file_exists(public_path('upload/agentprofile/'.$agent->image)) && $agent->image!=''){
								$image_path         = public_path('upload/agentprofile/'.$agent->image);
								$image_thumb_path   = public_path('upload/agentprofile/thumb/'.$agent->image);
                            
                            \File::Delete($image_path);
                            \File::Delete($image_thumb_path);
							}
                            $path               = public_path('upload/agentprofile/' . $imagename);
                            $image              = \Image::make($file->getRealPath())->save($path);
                            $th_path            = public_path('upload/agentprofile/thumb/' . $imagename);
                            $image              = \Image::make($file->getRealPath())->resize(128, 128)->save($th_path);
							$agent->image		= $imagename;
                           
			     }                
                $agent->save();
                return redirect::route('agent_management')->with('success', 'Agent updated successfully.');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
         $agent = Agent::find($id);
         $agent->delete();
         return Redirect::route('agent_management')->with('success', 'Agent has been deleted successfully!');
    }
}
