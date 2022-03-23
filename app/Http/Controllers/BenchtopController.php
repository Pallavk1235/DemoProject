<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Benchtop_type;
use App\Models\Benchtop_parent_category;
use App\Models\Benchtop_child_category;
use App\Models\Benchtop_material;
use App\Models\Benchtop_width;
use App\Models\Benchtop_price;



class BenchtopController extends Controller
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

    public function indextype()
    {
        $alltype = Benchtop_type::all();
        return view('Benchtop.indextype',['alltype'=>$alltype]);
    }

    public function addtype()
    {
        return view('Benchtop.createtype');
    }

    public function storetype(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'benchtop_type_name'=>'required',
            'benchtop_type_price'=>'required',
            'benchtop_type_details'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Benchtop_type::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Type Added Successfully');
    }

    public function destroytype($id)
    {
        $deletetype = Benchtop_type::find($id);
        $deletetype->delete();
        return redirect()->back()->with('warning', $deletetype->benchtop_type_name.' Deleted Successfully');
    }

    public function showtype($id)
    {
        $edittype = Benchtop_type::find($id);
        return view('Benchtop.updatetype',['edittype'=>$edittype]);
    }

    public function updatetype(Request $request)
    {
        $updatetype = Benchtop_type::find($request->id);
        $updatetype->benchtop_type_name = $request->benchtop_type_name;
        $updatetype->benchtop_type_price = $request->benchtop_type_price;
        $updatetype->benchtop_type_details = $request->benchtop_type_details;
        $updatetype->save();
        return redirect()->back()->with('warning','Type Update Successfully');
    }

    public function indexmain()
    {
        $allmain = Benchtop_parent_category::all();
        return view('Benchtop.indexmain',['allmain'=>$allmain]);
    }

    public function addmain()
    {
        $typeid = Benchtop_type::all();
        return view('Benchtop.createmain',['typeid'=>$typeid]);
    }

    public function storemain(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'benchtop_type_id'=>'required',
            'benchtop_parent_name'=>'required',
            'benchtop_parent_details'=>'required',
            'benchtop_parent_stock'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Benchtop_parent_category::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Category Added Successfully');
    }

    public function destroymain($id)
    {
        $deletemain = Benchtop_parent_category::find($id);
        $deletemain->delete();
        return redirect()->back()->with('warning', $deletemain->benchtop_parent_name.' Deleted Successfully');
    }

    public function showmain($id)
    {
        // $typeid = Benchtop_type::all();
        $editmain = Benchtop_parent_category::find($id);
        return view('Benchtop.updatemain',['editmain'=>$editmain]);
    }

    public function updatemain(Request $request)
    {

        // dd($request->all());
        $updatemain = Benchtop_parent_category::find($request->id);
        // echo "<pre>";
        // print_r($updatemain);
        // exit();

        $updatemain->benchtop_type_id = $request->benchtop_type_id;
        $updatemain->benchtop_parent_name = $request->benchtop_parent_name;
        $updatemain->benchtop_parent_details = $request->benchtop_parent_details;
        $updatemain->benchtop_parent_stock = $request->benchtop_parent_stock;
        $updatemain->save();
        return redirect()->back()->with('warning','Category Update Successfully');
    }



    public function indexsub()
    {
        $allsub = Benchtop_child_category::all();
        return view('Benchtop.indexsub',['allsub'=>$allsub]);
    }

    public function addsub()
    {
        $mainid = Benchtop_parent_category::all();
        return view('Benchtop.createsub',['mainid'=>$mainid]);
    }

    public function storesub(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'benchtop_parent_id'=>'required',
            'benchtop_child_name'=>'required',
            'benchtop_child_details'=>'required',
            'benchtop_child_stock'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Benchtop_child_category::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Category Added Successfully');
    }

    public function destroysub($id)
    {
        $deletesub = Benchtop_child_category::find($id);
        $deletesub->delete();
        return redirect()->back()->with('warning', $deletesub->benchtop_child_name.' Deleted Successfully');
    }

    public function showsub($id)
    {
        // $typeid = Benchtop_type::all();
        $editsub = Benchtop_child_category::find($id);
        return view('Benchtop.updatesub',['editsub'=>$editsub]);
    }

    public function updatesub(Request $request)
    {

        // dd($request->all());
        $updatesub = Benchtop_child_category::find($request->id);
        // echo "<pre>";
        // print_r($updatesub);
        // exit();

        $updatesub->benchtop_parent_id = $request->benchtop_parent_id;
        $updatesub->benchtop_child_name = $request->benchtop_child_name;
        $updatesub->benchtop_child_details = $request->benchtop_child_details;
        $updatesub->benchtop_child_stock = $request->benchtop_child_stock;
        $updatesub->save();
        return redirect()->back()->with('warning','Category Update Successfully');
    }

 
    public function indexmaterials()
    {
        $allmat = Benchtop_material::all();
        return view('Benchtop.indexmaterial',['allmat'=>$allmat]);
    }

    public function addmaterials()
    {
        // $mainid = Benchtop_parent_category::all();
        return view('Benchtop.creatematerial');
    }

    public function storematerials(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'benchtop_material_name'=>'required',
            'benchtop_material_details'=>'required',
            'benchtop_material_stock'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Benchtop_material::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Category Added Successfully');
    }

    public function destroymaterials($id)
    {
        $deletemat = Benchtop_material::find($id);
        $deletemat->delete();
        return redirect()->back()->with('warning', $deletemat->benchtop_material_name.' Deleted Successfully');
    }

    public function showmaterials($id)
    {
        // $typeid = Benchtop_type::all();
        $editmat = Benchtop_material::find($id);
        return view('Benchtop.updatematerial',['editmat'=>$editmat]);
    }

    public function updatematerials(Request $request)
    {

        // dd($request->all());
        $updatemat = Benchtop_material::find($request->id);
        // echo "<pre>";
        // print_r($updatesub);
        // exit();

        $updatemat->benchtop_material_name = $request->benchtop_material_name;
        $updatemat->benchtop_material_details = $request->benchtop_material_details;
        $updatemat->benchtop_material_stock = $request->benchtop_material_stock;
        $updatemat->save();
        return redirect()->back()->with('warning','Category Update Successfully');
    }


 
    public function indexwidth()
    {
        $allwidth = Benchtop_width::all();
        return view('Benchtop.indexwidth',['allwidth'=>$allwidth]);
    }

    public function addwidth()
    {
        // $mainid = Benchtop_parent_category::all();
        return view('Benchtop.createwidth');
    }

    public function storewidth(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'width'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Benchtop_width::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Category Added Successfully');
    }

    public function destroywidth($id)
    {
        $deletewidth = Benchtop_width::find($id);
        $deletewidth->delete();
        return redirect()->back()->with('warning', $deletewidth->width.' Deleted Successfully');
    }

    public function showwidth($id)
    {
        // $typeid = Benchtop_type::all();
        $editwidth = Benchtop_width::find($id);
        return view('Benchtop.updatewidth',['editwidth'=>$editwidth]);
    }

    public function updatewidth(Request $request)
    {

        // dd($request->all());
        $updatewidth = Benchtop_width::find($request->id);
        // echo "<pre>";
        // print_r($updatesub);
        // exit();

        $updatewidth->width = $request->width;
        $updatewidth->save();
        return redirect()->back()->with('warning','Category Update Successfully');
    }
}
