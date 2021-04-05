<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Crud::latest()->paginate(10);
        return view('index',compact('data'))
        ->with('customer.index',(request()->input('page',1) -1 ) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'customerid' => 'required',
           'firstname' => 'required',
           'middlename' => 'required',
           'lastname' => 'required',
           'email' => 'required',
           'phoneno' => 'required',
           'address' => 'required',
           'purpose' => 'required',
           'date' => 'required',
           'timein' => 'required',
           'timeout' => 'required',
           'staffusername' => 'required',
           'staffid' => 'required',

        ]);

        $form_data = array(
             
             'customerid' => $request->customerid,
             'firstname' => $request->firstname,
             'middlename' => $request->middlename,
             'lastname' => $request->lastname,
             'email' => $request->email,
             'phoneno' => $request->phoneno,
             'address' => $request->address,
             'purpose' => $request->purpose,
             'date' => $request->date,
             'timein' => $request->timein,
             'timeout' => $request->timeout,
             'staffusername' => $request->staffusername,
             'staffid' => $request->staffid,
             );
          Crud::create($form_data);
          return redirect('crud')->with('success','Customer Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =Crud::findOrFail($id);
        return view('view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =Crud::findOrFail($id);
        return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'customerid' => 'required',
           'firstname' => 'required',
           'middlename' => 'required',
           'lastname' => 'required',
           'email' => 'required',
           'phoneno' => 'required',
           'address' => 'required',
           'purpose' => 'required',
           'date' => 'required',
           'timein' => 'required',
           'timeout' => 'required',
           'staffusername' => 'required',
           'staffid' => 'required',
        ]);
        $form_data = array(
          'customerid' => $request->customerid,
          'firstname' => $request->firstname,
          'middlename' => $request->middlename,
          'lastname' => $request->lastname,
          'email' => $request->email,
          'phoneno' => $request->phoneno,
          'address' => $request->address,
          'purpose' => $request->purpose,
          'date' => $request->date,
          'timein' => $request->timein,
          'timeout' => $request->timeout,
          'staffusername' => $request->staffusername,
          'staffid' => $request->staffid,
        );
        Crud::whereId($id)->update($form_data);
        return redirect('crud')->with('success','Customer Detail is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $data->delete();
        return redirect('crud')->with('success','Customer Detail is Deleted Successfully');
    }
}
