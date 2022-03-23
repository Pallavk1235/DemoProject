<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Steel_main_category;
use App\Models\Steel_sub_category;
use App\Models\Steel_price;



class SteelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function indexmain()
    {
        $allmain = Steel_main_category::all();
        return view('Steel.indexmain',['allmain'=>$allmain]);
    }

    public function addmain()
    {
        // $typeid = Benchtop_type::all();
        return view('Steel.createmain');
    }

    public function storemain(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'steel_name'=>'required',
            'steel_details'=>'required',
            'steel_stock'=>'required',
            'steel_price'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Steel_main_category::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Steel Category Added Successfully');
    }

    public function destroymain($id)
    {
        $deletemain = Steel_main_category::find($id);
        $deletemain->delete();
        return redirect()->back()->with('warning', $deletemain->steel_name.' Deleted Successfully');
    }

    public function showmain($id)
    {
        // $typeid = Benchtop_type::all();
        $editmain = Steel_main_category::find($id);
        return view('Steel.updatemain',['editmain'=>$editmain]);
    }

    public function updatemain(Request $request)
    {

        // dd($request->all());
        $updatemain = Steel_main_category::find($request->id);
        // echo "<pre>";
        // print_r($updatemain);
        // exit();

        $updatemain->steel_name = $request->steel_name;
        $updatemain->steel_details = $request->steel_details;
        $updatemain->steel_stock = $request->steel_stock;
        $updatemain->steel_price = $request->steel_price;
        $updatemain->save();
        return redirect()->back()->with('warning','Steel Category Update Successfully');
    }


    public function indexsub()
    {
        $allsub = Steel_sub_category::all();
        return view('Steel.indexsub',['allsub'=>$allsub]);
    }

    public function addsub()
    {
        $mainid = Steel_sub_category::all();
        return view('Steel.createsub',['mainid'=>$mainid]);
    }

    public function storesub(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'steel_main_id'=>'required',
            'steel_sub_name'=>'required',
            'steel_sub_details'=>'required',
            'steel_sub_stock'=>'required',
            'steel_sub_price'=>'required'

        ]);

        // \DB::connection()->enableQueryLog();
        Steel_sub_category::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Category Added Successfully');
    }

    public function destroysub($id)
    {
        $deletesub = Steel_sub_category::find($id);
        $deletesub->delete();
        return redirect()->back()->with('warning', $deletesub->steel_sub_name.' Deleted Successfully');
    }

    public function showsub($id)
    {
        // $typeid = Benchtop_type::all();
        $editsub = Steel_sub_category::find($id);
        return view('Steel.updatesub',['editsub'=>$editsub]);
    }

    public function updatesub(Request $request)
    {

        // dd($request->all());
        $updatesub = Steel_sub_category::find($request->id);
        // echo "<pre>";
        // print_r($updatesub);
        // exit();

        $updatesub->steel_main_id = $request->steel_main_id;
        $updatesub->steel_sub_name = $request->steel_sub_name;
        $updatesub->steel_sub_details = $request->steel_sub_details;
        $updatesub->steel_sub_stock = $request->steel_sub_stock;
        $updatesub->steel_sub_price = $request->steel_sub_price;
        $updatesub->save();
        return redirect()->back()->with('warning','Category Update Successfully');
    }
}
