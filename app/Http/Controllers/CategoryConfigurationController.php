<?php

namespace App\Http\Controllers;

use App\Models\CategoryConfiguration;
use App\Http\Requests\StoreCategoryConfigurationRequest;
use App\Http\Requests\UpdateCategoryConfigurationRequest;

class CategoryConfigurationController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryConfigurationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryConfigurationRequest $request)
    {
        $request->validate([
            'name' =>['required','string'],
            'extra'=>['required','integer']
        ]);
        $configurationkeys = CategoryConfiguration::create([
            'name'=>$request->name,
            'extra'=>$request->extra
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryConfiguration  $categoryConfiguration
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryConfiguration $categoryConfiguration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryConfiguration  $categoryConfiguration
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryConfiguration $categoryConfiguration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryConfigurationRequest  $request
     * @param  \App\Models\CategoryConfiguration  $categoryConfiguration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryConfigurationRequest $request, CategoryConfiguration $categoryConfiguration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryConfiguration  $categoryConfiguration
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryConfiguration $categoryConfiguration)
    {
        //
    }
}
