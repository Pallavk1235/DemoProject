<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allcustomers = customer::all();
        return view('Customer.index',['allcustomers'=>$allcustomers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validate = $request->validate
        ([
            'firstname'=>'required',
            'lastname'=>'required',
            'address'=>'required',
            'state'=>'required',
            'postcode'=>'required',
            'home_phone'=>'required',
            'work_phone'=>'required',
            'office_phone'=>'required'
        ]);

        customer::create($request->all());
        return redirect()->back()->with('success','Customer Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = customer::find($id);
        return view('Customer.update',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        // dd($request->all());
        $customerdata = customer::find($request->id);
        $customerdata->firstname = $request->firstname;
        $customerdata->lastname = $request->lastname;
        $customerdata->address = $request->address;
        $customerdata->state = $request->state;
        $customerdata->postcode = $request->postcode;
        $customerdata->home_phone = $request->home_phone;
        $customerdata->work_phone = $request->work_phone;
        $customerdata->office_phone = $request->office_phone;
        $customerdata->save();
        
        return redirect()->back()->with('warning','Customer Update Successfully');
        // dd($customerdata);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = customer::find($id);
        $customer->delete();

        return redirect()->back()->with('warning', $customer->firstname.' Deleted Successfully');
    }

    public function addCustomers()
    {
        return view('Customer.create');
    }
}
