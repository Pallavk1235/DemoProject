<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accessories_main;
use App\Models\Accessories_sub;
use App\Models\Accessories_material;

class AccessoriesController extends Controller
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
        $allmain = Accessories_main::all();
        return view('Accessories.indexmain',['allmain'=>$allmain]);
    }

    public function addmain()
    {
        // $typeid = Benchtop_type::all();
        return view('Accessories.createmain');
    }

    public function storemain(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'accessories_name'=>'required',
            'accessories_details'=>'required',
            'accessories_stock'=>'required',
            'accessories_price'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Accessories_main::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Accessories Category Added Successfully');
    }

    public function destroymain($id)
    {
        $deletemain = Accessories_main::find($id);
        $deletemain->delete();
        return redirect()->back()->with('warning', $deletemain->accessories_name.' Deleted Successfully');
    }

    public function showmain($id)
    {
        // $typeid = Benchtop_type::all();
        $editmain = Accessories_main::find($id);
        return view('Accessories.updatemain',['editmain'=>$editmain]);
    }

    public function updatemain(Request $request)
    {

        // dd($request->all());
        $updatemain = Accessories_main::find($request->id);
        // echo "<pre>";
        // print_r($updatemain);
        // exit();

        $updatemain->accessories_name = $request->accessories_name;
        $updatemain->accessories_details = $request->accessories_details;
        $updatemain->accessories_stock = $request->accessories_stock;
        $updatemain->accessories_price = $request->accessories_price;
        $updatemain->save();
        return redirect()->back()->with('warning','Accessories Category Update Successfully');
    }


    public function indexsub()
    {
        $allsub = Accessories_sub::all();
        return view('Accessories.indexsub',['allsub'=>$allsub]);
    }

    public function addsub()
    {
        $mainid = Accessories_main::all();
        return view('Accessories.createsub',['mainid'=>$mainid]);
    }

    public function storesub(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'accessories_main_id'=>'required',
            'accessories_sub_name'=>'required',
            'accessories_sub_details'=>'required',
            'accessories_sub_stock'=>'required',
            'accessories_sub_price'=>'required',
        ]);

        // \DB::connection()->enableQueryLog();
        Accessories_sub::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Category Added Successfully');
    }

    public function destroysub($id)
    {
        $deletesub = Accessories_sub::find($id);
        $deletesub->delete();
        return redirect()->back()->with('warning', $deletesub->accessories_sub_name.' Deleted Successfully');
    }

    public function showsub($id)
    {
        // $typeid = Benchtop_type::all();
        $editsub = Accessories_sub::find($id);
        return view('Accessories.updatesub',['editsub'=>$editsub]);
    }

    public function updatesub(Request $request)
    {

        // dd($request->all());
        $updatesub = Accessories_sub::find($request->id);
        // echo "<pre>";
        // print_r($updatesub);
        // exit();

        $updatesub->accessories_main_id = $request->accessories_main_id;
        $updatesub->accessories_sub_name = $request->accessories_sub_name;
        $updatesub->accessories_sub_details = $request->accessories_sub_details;
        $updatesub->accessories_sub_stock = $request->accessories_sub_stock;
        $updatesub->accessories_sub_price = $request->accessories_sub_price;
        $updatesub->save();
        return redirect()->back()->with('warning','Category Update Successfully');
    }



    public function indexmaterials()
    {
        $allmat = Accessories_material::all();
        return view('Accessories.indexmaterial',['allmat'=>$allmat]);
    }

    public function addmaterials()
    {
        // $mainid = Benchtop_parent_category::all();
        return view('Accessories.creatematerial');
    }

    public function storematerials(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'material_name'=>'required',
            'material_detail'=>'required',
        ]);

        // \DB::connection()->enableQueryLog();
        Accessories_material::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Material Added Successfully');
    }

    public function destroymaterials($id)
    {
        $deletemat = Accessories_material::find($id);
        $deletemat->delete();
        return redirect()->back()->with('warning', $deletemat->material_name.' Deleted Successfully');
    }

    public function showmaterials($id)
    {
        // $typeid = Benchtop_type::all();
        $editmat = Accessories_material::find($id);
        return view('Accessories.updatematerial',['editmat'=>$editmat]);
    }

    public function updatematerials(Request $request)
    {

        // dd($request->all());
        $updatemat = Accessories_material::find($request->id);
        // echo "<pre>";
        // print_r($updatesub);
        // exit();

        $updatemat->material_name = $request->material_name;
        $updatemat->material_detail = $request->material_detail;
        $updatemat->save();
        return redirect()->back()->with('warning','Material Update Successfully');
    }

}
