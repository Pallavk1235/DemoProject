<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Door_main_category;
use App\Models\Door_sub_category;
use App\Models\Door_material;
use App\Models\Door_finishing;
use App\Models\Door_color;
use App\Models\Door_price;







class DoorController extends Controller
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
        $allmain = Door_main_category::all();
        return view('Door.indexmain',['allmain'=>$allmain]);
    }

    public function addmain()
    {
        // $typeid = Benchtop_type::all();
        return view('Door.createmain');
    }

    public function storemain(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'door_main_name'=>'required',
            'door_main_details'=>'required',
            'door_main_stock'=>'required',
        ]);

        // \DB::connection()->enableQueryLog();
        Door_main_category::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Door Category Added Successfully');
    }

    public function destroymain($id)
    {
        $deletemain = Door_main_category::find($id);
        $deletemain->delete();
        return redirect()->back()->with('warning', $deletemain->door_main_name.' Deleted Successfully');
    }

    public function showmain($id)
    {
        // $typeid = Benchtop_type::all();
        $editmain = Door_main_category::find($id);
        return view('Door.updatemain',['editmain'=>$editmain]);
    }

    public function updatemain(Request $request)
    {

        // dd($request->all());
        $updatemain = Door_main_category::find($request->id);
        // echo "<pre>";
        // print_r($updatemain);
        // exit();

        $updatemain->door_main_name = $request->door_main_name;
        $updatemain->door_main_details = $request->door_main_details;
        $updatemain->door_main_stock = $request->door_main_stock;
        $updatemain->save();
        return redirect()->back()->with('warning','Door Category Update Successfully');
    }


    public function indexsub()
    {
        $allsub = Door_sub_category::all();
        return view('Door.indexsub',['allsub'=>$allsub]);
    }

    public function addsub()
    {
        $mainid = Door_main_category::all();
        return view('Door.createsub',['mainid'=>$mainid]);
    }

    public function storesub(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'door_parent_id'=>'required',
            'door_sub_name'=>'required',
            'door_sub_details'=>'required',
            'door_sub_stock'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Door_sub_category::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Category Added Successfully');
    }

    public function destroysub($id)
    {
        $deletesub = Door_sub_category::find($id);
        $deletesub->delete();
        return redirect()->back()->with('warning', $deletesub->benchtop_child_name.' Deleted Successfully');
    }

    public function showsub($id)
    {
        // $typeid = Benchtop_type::all();
        $editsub = Door_sub_category::find($id);
        return view('Door.updatesub',['editsub'=>$editsub]);
    }

    public function updatesub(Request $request)
    {

        // dd($request->all());
        $updatesub = Door_sub_category::find($request->id);
        // echo "<pre>";
        // print_r($updatesub);
        // exit();

        $updatesub->door_parent_id = $request->door_parent_id;
        $updatesub->door_sub_name = $request->door_sub_name;
        $updatesub->door_sub_details = $request->door_sub_details;
        $updatesub->door_sub_stock = $request->door_sub_stock;
        $updatesub->save();
        return redirect()->back()->with('warning','Category Update Successfully');
    }

    public function indexmaterials()
    {
        $allmat = Door_material::all();
        return view('Door.indexmaterial',['allmat'=>$allmat]);
    }

    public function addmaterials()
    {
        // $mainid = Benchtop_parent_category::all();
        return view('Door.creatematerial');
    }

    public function storematerials(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'door_material_name'=>'required',
            'door_material_details'=>'required',
            'door_material_stock'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Door_material::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Material Added Successfully');
    }

    public function destroymaterials($id)
    {
        $deletemat = Door_material::find($id);
        $deletemat->delete();
        return redirect()->back()->with('warning', $deletemat->door_material_name.' Deleted Successfully');
    }

    public function showmaterials($id)
    {
        // $typeid = Benchtop_type::all();
        $editmat = Door_material::find($id);
        return view('Door.updatematerial',['editmat'=>$editmat]);
    }

    public function updatematerials(Request $request)
    {

        // dd($request->all());
        $updatemat = Door_material::find($request->id);
        // echo "<pre>";
        // print_r($updatesub);
        // exit();

        $updatemat->door_material_name = $request->door_material_name;
        $updatemat->door_material_details = $request->door_material_details;
        $updatemat->door_material_stock = $request->door_material_stock;
        $updatemat->save();
        return redirect()->back()->with('warning','Materials Update Successfully');
    }

    public function indexfinishing()
    {
        $allfinishing = Door_finishing::all();
        return view('Door.indexfinishing',['allfinishing'=>$allfinishing]);
    }

    public function addfinishing()
    {
        // $mainid = Benchtop_parent_category::all();
        return view('Door.createfinishing');
    }

    public function storefinishing(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'finshing_name'=>'required',
            'finshing_details'=>'required',
            'finshing_price'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Door_finishing::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','finishing Added Successfully');
    }

    public function destroyfinishing($id)
    {
        $deletefinishing = Door_finishing::find($id);
        $deletefinishing->delete();
        return redirect()->back()->with('warning', $deletefinishing->finishing_name.' Deleted Successfully');
    }

    public function showfinishing($id)
    {
        // $typeid = Benchtop_type::all();
        $editfinishing = Door_finishing::find($id);
        return view('Door.updatefinishing',['editfinishing'=>$editfinishing]);
    }

    public function updatefinishing(Request $request)
    {

        // dd($request->all());
        $updatefinishing = Door_finishing::find($request->id);
        // echo "<pre>";
        // print_r($updatesub);
        // exit();

        $updatefinishing->finshing_name = $request->finshing_name;
        $updatefinishing->finshing_details = $request->finshing_details;
        $updatefinishing->finshing_price = $request->finshing_price;
        $updatefinishing->save();
        return redirect()->back()->with('warning','finishing Update Successfully');
    }

    public function indexcolor()
    {
        $allcolor = Door_color::all();
        return view('Door.indexcolor',['allcolor'=>$allcolor]);
    }

    public function addcolor()
    {
        // $mainid = Benchtop_parent_category::all();
        return view('Door.createcolor');
    }

    public function storecolor(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'color_name'=>'required',
            'color_details'=>'required',
            'color_price'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Door_color::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','color Added Successfully');
    }

    public function destroycolor($id)
    {
        $deletecolor = Door_color::find($id);
        $deletecolor->delete();
        return redirect()->back()->with('warning', $deletecolor->color_name.' Deleted Successfully');
    }

    public function showcolor($id)
    {
        // $typeid = Benchtop_type::all();
        $editcolor = Door_color::find($id);
        return view('Door.updatecolor',['editcolor'=>$editcolor]);
    }

    public function updatecolor(Request $request)
    {

        // dd($request->all());
        $updtcolor = Door_color::find($request->id);
        // echo "<pre>";
        // print_r($updatesub);
        // exit();

        $updtcolor->color_name = $request->color_name;
        $updtcolor->color_details = $request->color_details;
        $updtcolor->color_price = $request->color_price;
        $updtcolor->save();
        return redirect()->back()->with('warning','color Update Successfully');
    }
}
