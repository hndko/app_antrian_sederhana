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
        $data = [
            'title' => 'Aplikasi Antrian Menggunakan Laravel',
            'antri_cs' => 0,
            'antri_teller1' => 0,
            'antri_teller2' => 0,
            'antri' => "-",
        ];

        return view('index', $data);
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
    public function store()
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
    public function update(HomeModel $homeModel)
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

    public function antri_cs($cs, $teller1, $teller2)
    {
        $data = [
            'title' => 'Aplikasi Antrian Menggunakan Laravel',
            'antri_cs' => $cs + 1,
            'antri_teller1' => $teller1,
            'antri_teller2' => $teller2,
            'antri' => "cs",
        ];

        return view('index', $data);
    }

    public function antri_teller1($cs, $teller1, $teller2)
    {
        $data = [
            'title' => 'Aplikasi Antrian Menggunakan Laravel',
            'antri_cs' => $cs,
            'antri_teller1' => $teller1 + 1,
            'antri_teller2' => $teller2,
            'antri' => "tl1",
        ];

        return view('index', $data);
    }

    public function antri_teller2($cs, $teller1, $teller2)
    {
        $data = [
            'title' => 'Aplikasi Antrian Menggunakan Laravel',
            'antri_cs' => $cs,
            'antri_teller1' => $teller1,
            'antri_teller2' => $teller2 + 1,
            'antri' => "tl2",
        ];

        return view('index', $data);
    }
}
