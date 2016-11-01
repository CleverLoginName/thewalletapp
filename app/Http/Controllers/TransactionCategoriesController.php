<?php

namespace App\Http\Controllers;

use App\TransactionCategory;
use Illuminate\Http\Request;

class TransactionCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactionCategories = TransactionCategory::all();
        return $transactionCategories;
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
        $transactionCategory = new TransactionCategory();
        $transactionCategory->name = $request->get('name');
        $transactionCategory->description = $request->get('description');
        $transactionCategory->save();
        return $transactionCategory;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transactionCategory = TransactionCategory::find($id);
        return $transactionCategory;
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
        $transactionCategory = TransactionCategory::find($id);
        $transactionCategory->name = $request->get('name');
        $transactionCategory->description = $request->get('description');
        return $transactionCategory;
    }

    /**
     * Remove the specified resource from storage.
     *a
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transactionCategory = TransactionCategory::find($id);
        $transactionCategory->delete();
    }
}
