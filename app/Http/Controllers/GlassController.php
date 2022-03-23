<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\glass_parent_category;
use App\Models\glass_child_category;
use App\Models\glass_material;
use App\Models\glass_height_width;
use App\Models\glass_price;


class GlassController extends Controller
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

    public function typeindex()
    {
        $glass_main = glass_parent_category::all();
        return view('Glass.typeindex',['glass_main' => $glass_main]);
    }

    public function addtype()
    {
        return view('Glass.createtype');
    }

    public function storetype(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'glass_name'=>'required',
            'glass_stock'=>'required',
            'glass_details'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        glass_parent_category::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Main Category added Successfully');
    }

    public function showtype($id)
    {
        $glassdata = glass_parent_category::find($id);
        return view('Glass.updatetype',['glassdata'=>$glassdata]);
        // dd($customerdata);
    }

    public function destroytype($id)
    {
        $glass = glass_parent_category::find($id);
        // dd($glass);
        $glass->delete();
        return redirect()->back()->with('warning', $glass->glass_name.' Deleted Successfully');
    }
        
    public function updatetype(Request $request)
    {
        $glass_update = glass_parent_category::find($request->id);
        $glass_update->glass_name = $request->glass_name;
        $glass_update->glass_details = $request->glass_details;
        $glass_update->glass_stock = $request->glass_stock;
        $glass_update->save();
        return redirect()->back()->with('warning','Glass Update Successfully');
    }


////////////////////////////////////////////////
    public function subtypeindex()
    {   
        $glasssub = glass_child_category::all();
        return view('Glass.subtypeindex',['glasssub'=>$glasssub]);
    }

    public function addsubtype()
    {
        $pid = glass_parent_category::all();
        // dd($select);
        return view('Glass.createsubtype',['pid'=>$pid]);
    }
    
    public function storesubtype(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate
        ([
            'glass_parent_id',
            'glass_child_name'=>'required',
            'glass_child_details'=>'required',
            'glass_child_stock'=>'required'
        ]);
        // \DB::connection()->enableQueryLog();
        glass_child_category::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);

        return redirect()->back()->with('success','Sub Category Successfully');   
    }

    public function showsubtype($id)
    {
        $subglass = glass_child_category::find($id);
        return view('Glass.updatesubtype',['subglass'=>$subglass]);
    }

    public function destroysubtype($id)
    {
        $deletesub = glass_child_category::find($id);
        $deletesub->delete();
        return redirect()->back()->with('warning', $deletesub->glass_child_name.' Deleted Successfully');
    }

    public function updatesubtype(Request $request)
    {
        // dd($request->all());
        $updatesub = glass_child_category::find($request->id);
        // dd($updatesub);
        $updatesub->glass_parent_id = $request->glass_parent_id;
        $updatesub->glass_child_name = $request->glass_child_name;
        $updatesub->glass_child_details = $request->glass_child_details;
        $updatesub->glass_child_stock = $request->glass_child_stock;
        $updatesub->save();
        return redirect()->back()->with('warning','Glass Update Successfully');
    }


/////////////////////////////////////////////////
    public function materialindex()
    {
        $material = glass_material::all(); 
        return view('Glass.materialindex',['material'=>$material]);
    }

    public function addmaterial()
    {
        // dd(glass_material::all());
        return view('Glass.creatematerial');
    }

    public function storematerial(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'glass_matrial_name'=>'required',
            'glass_matrial_details'=>'required'
        ]);

        glass_material::create($request->all());
        return redirect()->back()->with('success','material added Successfully');  
    }

    public function destroymaterial($id)
    {
        $deletematerial = glass_material::find($id);
        $deletematerial->delete();
        return redirect()->back()->with('warning', $deletematerial->glass_matrial_name.' Deleted Successfully');
    }
    
    public function showmaterial($id)
    {
        $updatematerial = glass_material::find($id);
        return view('Glass.updatematerial',['updatematerial'=>$updatematerial]);
    }

    public function updatematerial(Request $request)
    {
        $editmaterial = glass_material::find($request->id);
        $editmaterial->glass_matrial_name = $request->glass_matrial_name;
        $editmaterial->glass_matrial_details = $request->glass_matrial_details;
        $editmaterial->save();
        return redirect()->back()->with('warning','Material Update Successfully');
    }

/////////////////////////////////////////////////
    
    public function hwindex()
    {
        $allhw = glass_height_width::all();
        return view('Glass.hwindex',['allhw'=>$allhw]);
    }

    public function addhw()
    {
        // $mainglass = glass_parent_category::all(); 
        // $subglass =  glass_child_category::all();
        return view('Glass.createhw');
    }
    
    public function storehw(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([

            // 'glass_parent_id'=>'required',
            // 'glass_child_id'=>'required',
            'glass_height'=>'required',
            'glass_width'=>'required'

        ]);
        glass_height_width::create($request->all());
        return redirect()->back()->with('success','Height Width added Successfully');  
    }

    public function destroyhw($id)
    {
        $deletehw = glass_height_width::find($id);
        $deletehw->delete();
        return redirect()->back()->with('warning', $deletehw->glass_height.'X'.$deletehw->glass_width.' Deleted Successfully');
    }

    public function showhw($id)
    {
        $edithw = glass_height_width::find($id);
        return view('Glass.updatehw',['edithw'=>$edithw]);
    }

    public function updatehw(Request $request)
    {
        $updatehw = glass_height_width::find($request->id);
        $updatehw->glass_height = $request->glass_height;
        $updatehw->glass_width = $request->glass_width;
        $updatehw->save();
        return redirect()->back()->with('warning','Height Width Update Successfully');    
    }

}
