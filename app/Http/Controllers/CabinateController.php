<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabinate_main_category;
use App\Models\Cabinate_type_category;
use App\Models\Cabinate_subtype_category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CabinateController extends Controller
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

    

    public function indexproducts()
    {
        //
    }
    public function createproducts()
    {
        //
    }
    public function storemainproducts(Request $request)
    {
        //
        $validate = $request->validate
        ([
            'cabinate_main_name'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Cabinate_main_category::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Main Product added Successfully');
    }
    
    public function storetypeproducts(Request $request)
    {
        //

        $validate = $request->validate
        ([
            'cabinate_main_id '=>'required',
            'cabinate_type_name'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Cabinate_type_category::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Product type added Successfully');
    }

    public function storesubproducts(Request $request)
    {
        //
        $validate = $request->validate
        ([
            'cabinate_type_id'=>'required',
            'cabinate_subtype_name'=>'required'
        ]);

        // \DB::connection()->enableQueryLog();
        Cabinate_subtype_category::create($request->all());
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect()->back()->with('success','Product type added Successfully');
    }
    
    public function showCategory()
    {
        try {
            //-------------------Old code------------------
           // $mainproducts = Cabinate_main_category::with('producttype')->get();
           // $typeproducts = Cabinate_type_category::with('productsubtype')->get();
           // return view('Cabinate.create',['mainproducts'=>$mainproducts],['typeproducts'=>$typeproducts]);
           if(Auth::check()){
                $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                return view('Cabinate.category',['mainproducts'=>$mainproducts], ['success_message'=>null], ['error_message'=>null]);
           }else{
                return redirect('/logout');
           }
        } catch(\Exception $e){
            return response(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function manageCategory($type, Request $request){
        try {
            if(Auth::check()){
                
                // if($request->door_main_name == null || $request->door_main_name == ''){
                //     $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                //     return view('Cabinate.category', ['mainproducts'=>$mainproducts], ['success_message'=>null], ['error_message'=>'Category is required.']);
                // }
                if($type == 'add'){

                    // if(isset($request->door_main_name)){
                        $validate = $request->validate([
                            'door_main_name'=>'required',                    
                        ]);
                        $add = new Cabinate_main_category;
                        $add->cabinate_main_name = $request->door_main_name;
                        if($add->save()){
                            return redirect()->back()->with('success','Category added Successfully');
                            // $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                            // return view('Cabinate.category', ['mainproducts'=>$mainproducts], ['success_message'=>'Category added successfully.'], ['error_message'=>null]);
                        }else{
                            $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                            return view('Cabinate.category', ['mainproducts'=>$mainproducts], ['success_message'=>null], ['error_message'=>'Something went wrong to add cabin category.']);
                        }
                    // }else{
                    //     $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                    //     return view('Cabinate.category',['success_message'=>null], ['error_message'=>null]);
                    // }
                }elseif ($type == 'update') {
                    $id = $request->id;
                    $validate = $request->validate([
                        'door_main_name'=>'required',                    
                    ]);
                    if(isset($id)){
                        // return $request;
                        $update = Cabinate_main_category::where('id', $id)->first();
                        if(isset($update)){
                            $update->cabinate_main_name = $request->door_main_name;
                            if($update->save()){
                                return redirect()->back()->with('success','Category updated Successfully');
                                // $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                                // return view('Cabinate.category', ['mainproducts'=>$mainproducts], ['success_message'=>'Category updated successfully.'], ['error_message'=>null]);
                            }else{
                                $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                                return view('Cabinate.category', ['mainproducts'=>$mainproducts], ['success_message'=>null], ['error_message'=>'Something went wrong to update cabin category.']);
                            }
                        }else{
                            $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                            return view('Cabinate.category',['success_message'=>null], ['error_message'=>'Invalid method']);    
                        }
                    }else{
                        $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                        return view('Cabinate.category',['success_message'=>null], ['error_message'=>'Invalid method']);
                    }                   
                }else{
                    $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                    return view('Cabinate.category',['success_message'=>null], ['error_message'=>'Invalid method']);
                }                
            }else{
                return redirect('/logout');
            }
        }catch(\Exception $e){
            $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
            return view('Cabinate.category',['mainproducts'=>$mainproducts], ['success_message'=>null], ['error_message'=>'Something went wrong to manage category']);
        }
    }

    public function deleteCategory($id, Request $request){
        try {
            if(Auth::check()){
                $delete = Cabinate_main_category::where('id', $id)->first();
                if(isset($delete)){
                    $delete->deleted_at = 1;
                    if($delete->save()){
                        $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                        return view('Cabinate.category', ['mainproducts'=>$mainproducts], ['success_message'=>'Category deleted successfully.'], ['error_message'=>null]);
                    }else{
                        $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                        return view('Cabinate.category', ['mainproducts'=>$mainproducts], ['success_message'=>null], ['error_message'=>'Something went wrong to delete cabin category.']);
                    }
                }else{
                    $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                    return view('Cabinate.category',['success_message'=>null], ['error_message'=>'Invalid method']);    
                }
            }else {
                return redirect('/logout');
            }
            
        }catch(\Exception $e){
            $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
            return view('Cabinate.category',['mainproducts'=>$mainproducts], ['success_message'=>null], ['error_message'=>'Something went wrong to delete category']);
        }
    }

    
    public function editproducts($id)
    {
        //
    }
    public function updateproducts(Request $request, $id)
    {
        //
    }

    public function destroyproducts($id)
    {
        //
    }

    public function showSubCategory(Request $request){
        try {
            if(Auth::check()){
                $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                // return count($mainproducts);
                $typeproducts = Cabinate_type_category::select('cabinate_main_categories.*', 'cabinate_type_categories.*', 'cabinate_type_categories.id as cab_type_id', 'cabinate_main_categories.id as cab_main_id')
                        ->join('cabinate_main_categories', 'cabinate_main_categories.id', '=', 'cabinate_type_categories.cabinate_main_id')
                        ->where('cabinate_type_categories.deleted_at', 0)
                        ->get();
                // subcategory.blage.php
                return view('Cabinate.subcategory',['mainproducts'=>$mainproducts], ['typeproducts'=>$typeproducts]);
                // return $typeproducts;
            }else{
                return redirect('/logout');
            }
        } catch(\Exception $e){
            return redirect('/cabinate-sub-category?error');
        }
    }
    
    public function manageSubCategory($type, Request $request){
        // try {
            if(Auth::check()){
                // if(isset($request->cat_id) && $request->cat_id !== null && $request->cat_id !== '' && isset($request->sub_cat_name) && $request->sub_cat_name !== null && $request->sub_cat_name !== ''){
                    if($type == 'add'){
                        $validate = $request->validate([
                            'cat_id'=>'required',
                            'sub_cat_name'=>'required',
                        ]);
                        $add = new Cabinate_type_category;
                        $add->cabinate_main_id = $request->cat_id;
                        $add->cabinate_type_name = $request->sub_cat_name;
                        if($add->save()){
                            return redirect()->back()->with('success','Sub category Added Successfully');
                            // return redirect('/cabinate-sub-category?success=add');
                        }else{
                            return redirect('/cabinate-sub-category?error');
                        }
                    }elseif($type == 'update'){
                        $validate = $request->validate([
                            'cat_id'=>'required',
                            'sub_cat_name'=>'required',
                        ]);
                        // return $request->id;
                        $update = Cabinate_type_category::where('id', $request->id)->first();
                        // return $update;
                        if(isset($update)){
                            $update->cabinate_main_id = $request->cat_id;
                            $update->cabinate_type_name = $request->sub_cat_name;
                            if($update->save()){
                                return redirect()->back()->with('success','Sub category updated Successfully');
                                // return redirect('/cabinate-sub-category?success=update');
                            }else{
                                return redirect('/cabinate-sub-category?error');
                            }
                        }else{
                            return redirect('/cabinate-sub-category?error');
                        }
                    }else{
                        return redirect('/cabinate-sub-category?error');
                    }
                // }else{
                //     return redirect('/cabinate-sub-category?error=val');
                // }
            }else {
                return redirect('/logout');
            }
        // } catch(\Exception $e){
        //     return redirect('/cabinate-sub-category?error');
        // }
    }

    public function deleteSubCategory($id, Request $request){
        try {
            if(Auth::check()){
                $delete = Cabinate_type_category::where('id', $id)->first();
                if(isset($delete)){
                    $delete->deleted_at = 1;
                    if($delete->save()){
                        return redirect('/cabinate-sub-category?success=delete');
                    }else{
                        return redirect('/cabinate-sub-category?error');
                    }
                }else{
                    return redirect('/cabinate-sub-category?error');
                }
            }else{
                return redirect('/logout'); 
            }
        } catch(\Exception $e){
            return redirect('/cabinate-sub-category?error');
        }
    }

    public function showUnit(Request $request){
        try {
            if(Auth::check()){
                $mainproducts = Cabinate_main_category::where('deleted_at', 0)->get();
                $subproducts_data = Cabinate_type_category::select('*')->get();
                // return $subproducts_data;
                // return count($mainproducts);
                $typeproducts = Cabinate_subtype_category::select('cabinate_main_categories.*', 'cabinate_type_categories.*', 'cabinate_type_categories.id as cab_type_id', 'cabinate_main_categories.id as cab_main_id', 'cabinate_subtype_categories.*', 'cabinate_subtype_categories.id as cab_sub_type_id')
                        ->join('cabinate_type_categories', 'cabinate_type_categories.id', '=', 'cabinate_subtype_categories.cabinate_type_id')
                        ->join('cabinate_main_categories', 'cabinate_main_categories.id', '=', 'cabinate_type_categories.cabinate_main_id')
                        ->where('cabinate_subtype_categories.deleted_at', 0)
                        ->get();
                // return $typeproducts;
                // subcategory.blage.php
                return view('Cabinate.unit',['mainproducts'=>$mainproducts, 'typeproducts'=>$typeproducts, 'subproducts_data'=>$subproducts_data]);
                // return $typeproducts;
            }else{
                return redirect('/logout');
            }
        } catch(\Exception $e){
            return redirect('/cabinate-units?error');
        }
    }

    public function deleteUnit($id, Request $request){
        try {
            if(Auth::check()){
                $delete = Cabinate_subtype_category::where('id', $id)->first();
                // return $delete;
                if(isset($delete)){
                    $delete->deleted_at = 1;
                    if($delete->save()){
                        return redirect('/cabinate-units?success=delete');
                    }else{
                        return redirect('/cabinate-units?error');
                    }
                }else{
                    return redirect('/cabinate-units?error');
                }
            }else{
                return redirect('/logout');
            }
        } catch(\Exception $e){
            return redirect('/cabinate-units?error');
        }
    }

    public function getSubCategory($id, Request $request){
        try {
            if(Auth::check()){
                $getSubCategory = Cabinate_type_category::where('cabinate_main_id', $id)->get();
                return response(['status'=>true, 'data'=>$getSubCategory]);
            }else{
                return redirect('/logout');
            }
        } catch(\Exception $e){
            return redirect('/cabinate-units?error');
        }
    }

    public function manageUnit($type, Request $request){
        // try {
            if(Auth::check()){
                // if($request->cat_id == null || $request->cat_id == null){return redirect('/cabinate-units?error');}
                // if($request->sub_cat_id == null || $request->sub_cat_id == null){return redirect('/cabinate-units?error');}
                // if($request->unit_name == null || $request->unit_name == null){return redirect('/cabinate-units?error');}
                // if($request->code == null || $request->code == null){return redirect('/cabinate-units?error');}
                // if($request->description == null || $request->description == null){return redirect('/cabinate-units?error');}
                // if($request->height == null || $request->height == null){return redirect('/cabinate-units?error');}
                // if($request->width == null || $request->width == null){return redirect('/cabinate-units?error');}
                // if($request->depth == null || $request->depth == null){return redirect('/cabinate-units?error');}
                // if($request->price == null || $request->price == null){return redirect('/cabinate-units?error');}
                $validate = $request->validate([
                    'cat_id'=>'required',
                    'sub_cat_id'=>'required',
                    'unit_name'=>'required',
                    'code'=>'required',
                    'description'=>'required',
                    'height'=>'required',
                    'width'=>'required',
                    'depth'=>'required',
                    'price'=>'required'
                ]);

                return redirect()->back()->with('success','Customer Added Successfully');
                return $request;
            }else{
                return redirect('/logout');
            }
        // } 
        // catch(\Exception $e){
        //     return $e->getMessage();
        //     return redirect('/cabinate-units?error');
        // }
    }

    public function selectCategory()
    {   
        $maincategory = Cabinate_main_category::all();
        // dd($maincategory);
        $typecategory = Cabinate_type_category::all();

        $subtypecategory = Cabinate_subtype_category::all();
        // dd($subtypecategory);
        return view('Cabinate.cabinatequote', 
            ['maincategory'=>$maincategory],
            ['typecategory'=>$typecategory],
            ['subtypecategory'=>$subtypecategory]);
    }
}
