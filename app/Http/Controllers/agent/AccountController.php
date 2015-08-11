<?php

namespace App\Http\Controllers\agent;

use Illuminate\Http\Request;
use App\Agent;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Validator, \Redirect, \Session,\Cookie,\Config;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
       $agent_id  = Session::get('AGENT_ACCESS_ID');
       $data  = array();
       $data['record'] = Agent::find($agent_id);
       
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
            $update_arr['password'] = md5($password.Config::get('constants.SITENAME'));
          }
          Agent::where('id','=',$agent_id)->update($update_arr);
          Session::put('ADMIN_ACCESS_FNAME', $first_name);
	  Session::put('ADMIN_ACCESS_LNAME',$last_name);
          return redirect::route('agent_profile')->with('successmsg','Profile is updated successfully');
          
       }
       return view('agent/profile',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
