<?php

namespace App\Http\Controllers;

use App\Visitor;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Validator, \Redirect, \Session;

use Illuminate\Http\Request;

class splashsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('splash.index');
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
        //$validator  = $this->validate($request, [
        //                'name' => 'required',
        //                'email' => 'required|email',
        //                'address' => 'required',
        //                'city' => 'required',
        //                'zipcode' => 'required',
        //            ]);
        
        $validator = Validator::make(
                        $request->all(),
                         [
                          'first_name' => 'required',
                          'last_name' => 'required',
                          'email' => 'required|email|unique:visitors',
                          'address' => 'required',
                          'city' => 'required',
                          'zipcode' => 'required',
                         ]
                    );

        if ($validator->fails()){
                $messages = $validator->messages();			    
                 return redirect()->action('splashsController@index')
                ->withErrors($validator)
                ->withInput();
        }else{
            $visitor            = new Visitor();
            $visitor->fill($request->except('_token'));
            $visitor->status    = 'Active';
            $visitor->save();
            return redirect()->action('splashsController@index')->with('message', 'Thank you for your request!');
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
