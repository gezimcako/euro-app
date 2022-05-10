<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryConfiguration;
use App\Models\CategoryConfigurationKeys;
use App\Http\Requests\StoreCategoryConfigurationKeysRequest;
use App\Http\Requests\UpdateCategoryConfigurationKeysRequest;
use Illuminate\Http\Request;

class CategoryConfigurationKeysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryConfigurationKey = CategoryConfigurationKeys::all();
        return view('category_configuration_keys.index',['categoryConfigurationKey'=>$categoryConfigurationKey]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category_configuration_keys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryConfigurationKeysRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>['required','string'],
            'extra'=>['required','string']
        ]);
        $categoryconfigurationkey = CategoryConfigurationKeys::create([
            'name'=>$request->name,
            'extra'=>$request->extra
        ]);
        return redirect()->route('category_configuration_keys.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryConfigurationKeys  $categoryConfigurationKeys
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryConfigurationKeys $categoryConfigurationKeys)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryConfigurationKeys  $categoryConfigurationKeys
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryConfigurationKey= CategoryConfigurationKeys::find($id);
        return view('category_configuration_keys.edit', compact('categoryConfigurationKey'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryConfigurationKeysRequest  $request
     * @param  \App\Models\CategoryConfigurationKeys  $categoryConfigurationKey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $categoryConfigurationKey=CategoryConfigurationKeys::find($id);
        $categoryConfigurationKey->extra=$request->input('extra');
        $categoryConfigurationKey->update();
        return redirect()->route('category_configuration_keys.index');

    }
    public function delete(CategoryConfigurationKeys  $categoryConfigurationKey, $id) {
        $categoryConfigurationKey= CategoryConfigurationKeys::find($id);
        if(count($categoryConfigurationKey->category_configuration)==0){
            return view ('category_configuration_keys.index',['categoryConfigurationKey'=>$categoryConfigurationKey]);
        }else{
            return redirect('/category_configuration_keys')->with("We can not do the delete");
        }
    }

    /**
     *
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryConfigurationKeys  $categoryConfigurationKeys
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryConfigurationKey = CategoryConfigurationKeys::find($id);
        $categoryConfigurationKey = forcedelete();
        return redirect()->route('category_configuration_keys.index');
    }
}
