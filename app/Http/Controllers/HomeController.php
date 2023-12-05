<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use App\Http\Requests\StoreHomeModelRequest;
use App\Http\Requests\UpdateHomeModelRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeModel $homeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeModel $homeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeModelRequest $request, HomeModel $homeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeModel $homeModel)
    {
        //
    }
}
